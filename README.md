# Total Order Discount+

The Total Order Discount+ extension is for CMS Opencart 3. It allows to create a discount system based on sub-total price or quantity of products in the cart.

The extension has been tested with OC 3.0.2.0/3.0.3.1 and default template, but should work with other OC 3.x and default-compatable templates and can be easily modified for newer OC versions and custom templates.

Please feel free to contact me by email <underr.public@gmail.com> or through support form and comments on Opencart Marketplace (see links below).

## Features
* Allows to create a discount system based on sub-total price or quantity of products in the cart
* Allows to use one of type of discounts - percentage or fixed amount
* Allows to set fees for low order price or quantity
* Allows to apply (or disable) discounts and fees for certain categories only
  * In case of the cart contains products with and without discount, a info message will be displayed
* Allows to set tax class for discounts and fees
* Multilingual frontend
* OCMOD - does not change original files

## Change log
* v2.1 (2019.07.03):
  * Fixed bug: Discount by quantity
  * Code improvements
* v2.0 (2019.02.21):
  * Added included/excluded categories list
  * Tax class for discounts and fees
  * Code improvements
* v1.1 (2018.11.12):
  * Bug fixes
  * Code improvements
* v1.0 (2018.08.21):
  * Code improvements
  * Added help text entries
* v1.0 (2018.08.01):
  * First release

## How to install
* To begin, make backup, really!
* Open Admin Panel.
* Admin > Extensions > Extensions > Installer > [Upload]: open the extension file.
* Admin > Extensions > Extensions > Modifications > [Refresh]
* Admin > Dashboard > [Developer Settings] > [Refresh]

## How to configure
* Admin > Extensions > Extensions > Order Totals > [underr] Total Order Discount+ > [Install]
* Admin > Extensions > Extensions > Order Totals > [underr] Total Order Discount+ - [Edit]
    * Set parameters
* Admin > Extensions > Extensions > Order Totals
    * Set correct sort order values for the modules:
        1. All modules that are subject to a discount must be located before Sub-Total module
        2. Sub-Total module
        3. Total Order Discount+ module
        4. Total module

## How to uninstall
* Make backup
* Open Admin Panel
* Admin > Extensions > Extensions > Order Totals > [underr] Total Order Discount+ > [Uninstall]
* Admin > Extensions > Extensions > Installer > Install History > find the extension file > [Uninstall]
* Admin > Extensions > Extensions > Modifications > [Refresh]
* Admin > Dashboard > [Developer Settings] > [Refresh]

## Live demo [Main]:
  * [Admin Demo](http://ocmod.freevar.com/oc3020/a/admin/index.php?route=extension/total/order_discount)
  * [Front Demo](http://ocmod.freevar.com/oc3020/a)

## Live demo [Alternative]:
  * [Admin Demo](https://oc3020.underr.thats.im/a/admin/index.php?route=extension/total/order_discount)
  * [Front Demo](https://oc3020.underr.thats.im/a)

## Links
* [Opencart Marketplace](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35103)
* [underr.space](https://underr.space/tag:opencart) - Descriptions for all of my OpenCart extensions in Russian.

## License
* [End-User License Agreement](https://raw.githubusercontent.com/underr-ua/ocmod3-total-order-discount-plus/master/EULA.txt)
