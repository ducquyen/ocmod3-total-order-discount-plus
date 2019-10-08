# Total Order Discount+

The Total Order Discount+ extension is for CMS Opencart 3.x It allows to create a flexible discount system based on the subtotal price or product quantity in the cart.

Please feel free to contact me through the "GET SUPPORT" form and comments on Opencart Marketplace (see links below).

## Features
* A discount system based on one of the following values:
  * Subtotal price (sums up product prices before tax/VAT).
  * Total price (sums up product prices after tax/VAT).
  * Product quantity in the cart.
* Unlimited discount rates.
* Percentage or fixed amount discount type.
* Extra charges (fees) can be used along discounts.
* Lists of allowed and disallowed product categories.
* Target customers type (registered accounts and/or guests).
* Target customers group for each discount rate
* Date range for each discount rate
* Customizable warning messages and names for discount and fee (multilanguage).
* Can set a separate tax class for discounts.
* OCMOD - doesn't change OpenCart core files.

## Change log
* v3.0 (2019.10.06):
  * Added ability to set target customers type
  * Added ability to set customer group and date range for each discount rate
  * Added ability to set a particular tax/VAT class for discounts
  * Added ability to set type of subtotal calculation - sum up product prices before or after tax/VAT
  * Added ability to use black/white lists of product categories
  * Code and usability improvements
  * Text corrections
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
* Notes:
  * The black list has priority, therefore, if a product is stored in a category that is contained in both lists, the product will be ignored

## How to uninstall
* Make backup
* Open Admin Panel
* Admin > Extensions > Extensions > Order Totals > [underr] Total Order Discount+ > [Uninstall]
* Admin > Extensions > Installer > Install History > total-order-discount-plus.ocmod.zip > [Uninstall]
* Admin > Extensions > Modifications > [Refresh]
* Admin > Dashboard > [Developer Settings] > [Refresh]

## Live demo:
  * [Admin Demo](http://ocmod.freevar.com/oc3020/a/admin/index.php?route=extension/total/order_discount)
  * [Front Demo](http://ocmod.freevar.com/oc3020/a)

## Links
* [Opencart Marketplace](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35103)
* [underr.space](https://underr.space/notes/projects/project-011.html) - Extension homepage

## License
* [End-User License Agreement](https://raw.githubusercontent.com/underr-ua/ocmod3-total-order-discount-plus/master/EULA.txt)
