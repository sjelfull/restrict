<?php
return [
    'enabled'     => true,

    // Add any IPs you want to be able to access the CP
    'ipWhitelist' => [ '::1', '127.0.0.1' ],

    // Logged in admins can bypass the whitelist
    'allowAdmins' => true,

    // By default, the plugin will throw a exception if the IP isn't in the whitelist
    // If you want to redirect to an url instead, set it here
    'redirectUrl' => null,
    // Or you want to render a template, set it here
    'template'    => null
];