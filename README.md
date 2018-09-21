# Total Order Discount+

The Total Order Discount+ extension is for CMS Opencart 3. It allows to make a discount system based on sub-total price or products amount in the cart.

The extension has been tested with OC 3.0.2.0 only, but should work with other OC 3.x versions.

## Features
* Allows to make discount system based on sub-total price or products amount in the cart.
* Discount can be one of two types - percentage or fixed.
* "Discount" appears in the order only when applied.
* Negative discount as surcharge or fee for low order price/quantity.
* Auto sort discount table in extension panel.
* Multilangual - EN/UA/RU.
* Does not change original files - OCMOD modification.

## Change log
* v1.0 (2018.08.21):
    * Code improvements.
    * Added help text entries.
* v1.0 (2018.08.01):
    * First release.

## How to install
* To begin, make backup, really!
* Open Admin Panel.
* Admin > Extensions > Extensions > Installer > [Upload]: open the extension file.
* Admin > Extensions > Extensions > Modifications > [Refresh].
* Admin > Dashboard > [Developer Settings] > [Refresh].

## How to configure
* Admin > Extensions > Extensions > Order Totals > [underr] Total Order Discount+ > [Install].
* Admin > Extensions > Extensions > Order Totals > [underr] Total Order Discount+ - [Edit].
    * Set the desired parameters.
* Admin > Extensions > Extensions > Order Totals.
    * Set the correct sort order values for the modules:
        1. All modules that are subject to a discount must be located before the Sub-Total module.
        2. The Sub-Total module.
        3. The Total Order Discount+ module.
        4. The Total module.

## How to uninstall
* Make backup
* Open Admin Panel
* Admin > Extensions > Extensions > Installer > Install History > find the extension file > [Uninstall]
* Admin > Extensions > Extensions > Modifications > [Refresh]
* Admin > Dashboard > [Developer Settings] > [Refresh]

## Live demo
* [Admin Demo](http://051c5f20.freevar.com/www/plus/admin/index.php?route=extension/total/order_discount)
* [Front Demo](http://051c5f20.freevar.com/www/plus)

## Links
* [Opencart Marketplace](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35103)
* [underr.space](https://underr.space/notes/projects/project-011.html)

## License
* [EULA](https://raw.githubusercontent.com/underr-ua/ocmod3-total-order-discount-plus/master/EULA.txt)
