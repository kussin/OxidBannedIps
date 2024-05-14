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
    ```php
    include_once dirname(__FILE__) . "/banned_ips.php";
    ```
   
## Configuration/Bannding IPs

To configure and manage the IP banning feature, follow these steps:

### Modify the IP List:

* Navigate to the [`banned_ips.inc.php`](https://github.com/kussin/OxidBannedIps/blob/main/src/source/banned_ips.inc.php#L4) file located in your OXID eShop installation directory.
* Add or remove IP addresses in the $aBannedIps array to control access. For example:
     ```php
     $aBannedIps = array(
        '111.230.204.202', // Example banned IP
        '192.168.1.1',     // Add additional IPs as needed
     );
    ```

### Customizing the Block Message:

* You can customize the message displayed when an IP is banned by modifying the exit statement in [`banned_ips.php`](https://github.com/kussin/OxidBannedIps/blob/main/src/source/banned_ips.php#L20).
* Change the default message to something more specific to your needs:
     ```php
     exit('Access denied. Your IP has been blocked.');
     ```

### Testing the Configuration:

* After updating the IP list, test the configuration by trying to access your shop from one of the banned IPs.
* Ensure that the access is correctly blocked and that the custom message is displayed.

### Maintaining the List:

* Regularly review and update the banned IP list to ensure it reflects current threats and unwanted traffic sources.
* Consider automating the update process if the list changes frequently.

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