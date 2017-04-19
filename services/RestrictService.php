<?php
/**
 * Restrict plugin for Craft CMS
 *
 * Restrict Service
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Restrict
 * @since     1.0.0
 */

namespace Craft;

class RestrictService extends BaseApplicationComponent
{
    public function check ()
    {

        // Restrict access if enabled and there is IPs in the whitelist
        if ( craft()->config->get('enabled', 'restrict') ) {
            $redirectUrl = craft()->config->get('redirectUrl', 'restrict');
            $template    = craft()->config->get('template', 'restrict');
            $ip          = craft()->request->getIpAddress();
            $whitelist   = craft()->config->get('ipWhitelist', 'restrict');
            $allowAdmins = craft()->config->get('allowAdmins', 'restrict');

            // Check for CloudFlare IP
            if ( isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ) {
                $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
            }

            // Skip for admins if enabled
            if ( $allowAdmins && craft()->userSession->isAdmin() ) {
                return true;
            }

            if ( count($whitelist) > 0 && !in_array($ip, $whitelist) ) {
                // Should we redirect?
                if ( $redirectUrl ) {
                    craft()->request->redirect($redirectUrl);
                }
                elseif ( $template ) {
                    $oldPath = craft()->templates->getTemplatesPath();
                    craft()->templates->setTemplatesPath(CRAFT_TEMPLATES_PATH);
                    echo craft()->templates->render($template);
                    craft()->templates->setTemplatesPath($oldPath);
                    craft()->end();
                }
                else {
                    throw new \Exception(Craft::t('Access to the control panel is restricted.'));
                }
            }
        }
    }

}