# Total Order Discount+

The Total Order Discount+ extension is for CMS Opencart 3.x It allows to create a flexible discount system based on total price or product quantity in the cart.

Please feel free to contact me through the "GET SUPPORT" form and comments on Opencart Marketplace (see links below).

## Features
* Allows to create a flexible discount system based on total price or product quantity in the cart.
* Allows to use one of the types of discounts - percentage or fixed amount
* Allows to set fees(extra pay) for low total order price or quantity
* Allows to apply (or disable) discounts and fees for certain categories only
  * If the cart contains products with and without a discount at the same time, discounted products will be marked with asterisk and an info message will be displayed.
* Multilingual frontend
* OCMOD - does not change original files

## Change log
* v2.2 (2019.09.20):
  * Fixed wrong calculation of discount including tax/VAT
  * Fixed info message behavior
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
* Admin > Extensions > Installer > [Upload]: open the extension file.
* Admin > Extensions > Modifications > [Refresh]
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
* Admin > Extensions > Installer > Install History > find the extension file > [Uninstall]
* Admin > Extensions > Modifications > [Refresh]
* Admin > Dashboard > [Developer Settings] > [Refresh]

## Live demo:
  * [Admin Demo](http://ocmod.freevar.com/oc3020/a/admin/index.php?route=extension/total/order_discount)
  * [Front Demo](http://ocmod.freevar.com/oc3020/a)

## Links
* [Opencart Marketplace](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35103)
* [underr.space](https://underr.space/notes/projects/project-011.html) - Russian description.

## License
* [End-User License Agreement](https://raw.githubusercontent.com/underr-ua/ocmod3-total-order-discount-plus/master/EULA.txt)
