# Restrict plugin for Craft CMS

Restrict access to the CP based on a IP whitelist

![Screenshot](resources/icon.png)

## Installation

To install Restrict, follow these steps:

1. Download & unzip the file and place the `restrict` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins
3. The plugin folder should be named `restrict` for Craft to see it.

Restrict works on Craft 2.4.x and Craft 2.5.x.

## Restrict Overview

Logged in admins will always be allowed to access the CP even if they are not in the IP whitelist.

## Configuring Restrict

```php
<?php
return [
    'ipWhitelist' => []
];
```

## Using Restrict

-Insert text here-

## Restrict Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [Superbig](https://superbig.co)
