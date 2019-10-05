# Total Order Discount+

The Total Order Discount+ extension is for CMS Opencart 3.x It allows to create a flexible discount system based on sub-total price or product quantity in the cart.

Please feel free to contact me through the "GET SUPPORT" form and comments on Opencart Marketplace (see links below).

## Features
* Allows to create a flexible discount system based on sub-total price or product quantity in the cart.
* Allows to use one of the types of discounts - percentage or fixed amount
* Allows to set extra charge (fee) for insufficient sub-total order price or insufficient product quantity in the cart.
* Allows to apply (or disable) discounts and fees for certain product categories only
  * If in the cart are products with and without a discount/fee at the same time, that products will be marked with asterisk and an info message will be displayed
* Allows to apply discounts/fees for certain accounts only (registered accounts and/or guests)
* Allows to choose customer group for each certain discount rule
* Multilingual frontend
* OCMOD - does not change original files

## Change log
* v2.3 (2019.10.05):
  * Added ability to set account types that is allowed for discounts (registered and/or guest accounts)
  * Added ability to set customer group for each certain discount rule
  * Added ability to choose tax/VAT calculation method (certain tax class or proportional distribution)
  * Changing the way to determine the reason for the discount from the total amount (price + tax/VAT) to the sub-total amount (price w/o tax/VAT)
  * Code improvements
* v2.2 (2019.09.20):
  * Fix: wrong calculation of discount including tax/VAT
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
