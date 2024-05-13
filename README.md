# Kussin | OXID eShop Banned IPs (DDoS Protection)

This module allows you to ban IP addresses from accessing your OXID eShop.<br>
The module is designed to protect your shop from DDoS attacks.

## Requirement

1. OXID eShop Version CE/PE/EE v4.x or newer
2. PHP 7.4 or newer

## Installation

1. Download the latest release from [Github](https://github.com/kussin/OxidBannedIps/releases)
2. Unzip the archive
3. Copy the content of the folder `src` to the root of your OXID eShop installation
4. Add the following line to the top of your `/path/to/oxid/source/index.php` file:
    ```
    include_once dirname(__FILE__) . "/banned_ips.php";
    ```

## Bugtracker and Feature Requests

Please use the [Github Issues](https://github.com/kussin/OxidBannedIps/issues) for bug reports and feature requests.

## Support

Kussin | eCommerce und Online-Marketing GmbH<br>
Fahltskamp 3<br>
25462 Rellingen<br>
Germany

Fon: +49 (4101) 85868 - 0<br>
Email: info@kussin.de

## Licence

[End-User Software License Agreement](LICENSE)

## Copyright

(c) 2006-2024 Kussin | eCommerce und Online-Marketing GmbH