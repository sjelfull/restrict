# Restrict plugin for Craft CMS

Restrict access to the CP based on a IP whitelist

![Screenshot](resources/icon.png)

## Installation

To install Restrict, follow these steps:

1. Download & unzip the file and place the `restrict` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins
3. The plugin folder should be named `restrict` for Craft to see it.

Restrict works on Craft 2.4.x and Craft 2.5.x.

## Configuring Restrict

```php
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
```

## Using Restrict

1. Copy the sample config file `restrict.php` into Craft's config folder, by default `craft/config`.
2. Add the IPs you want to allow access to the CP, and change the other settings as you see fit.

Brought to you by [Superbig](https://superbig.co)
