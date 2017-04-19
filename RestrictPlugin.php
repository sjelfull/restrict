<?php
/**
 * Restrict plugin for Craft CMS
 *
 * Restrict access to the CP
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Restrict
 * @since     1.0.0
 */

namespace Craft;

class RestrictPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init ()
    {
        parent::init();

        if ( craft()->request->isCpRequest() ) {
            craft()->restrict->check();
        }
    }

    /**
     * @return mixed
     */
    public function getName ()
    {
        return Craft::t('Restrict');
    }

    /**
     * @return mixed
     */
    public function getDescription ()
    {
        return Craft::t('Restrict access to the CP');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl ()
    {
        return 'https://github.com/sjelfull/restrict/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl ()
    {
        return 'https://raw.githubusercontent.com/sjelfull/restrict/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper ()
    {
        return 'Superbig';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl ()
    {
        return 'https://superbig.co';
    }

    /**
     * @return bool
     */
    public function hasCpSection ()
    {
        return false;
    }
}