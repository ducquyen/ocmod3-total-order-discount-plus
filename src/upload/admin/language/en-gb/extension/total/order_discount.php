<?php
/**
 * Total Order Discount+.
 *
 * The Total Order Discount+ extension is for CMS Opencart 3.x.
 * It allows to make a discount system based on sub-total price or quantity of products in the cart.
 *
 * @author		Andrii Burkatskyi aka underr underr.ua@gmail.com
 * @copyright	Copyright (c) 2018-2019 Andrii Burkatskyi
 * @license		https://raw.githubusercontent.com/underr-ua/ocmod3-total-order-discount-plus/master/EULA.txt End-User License Agreement
 *
 * @version     3.0
 *
 * @see			https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35103
 * @see			https://underr.space/notes/projects/project-011.html
 * @see			https://github.com/underr-ua/ocmod3-total-order-discount-plus
 */

// Total Order Discount+ heading
$_['heading_title'] = '[underr] Total Order Discount+';

// Total Order Discount+ Error text
$_['error_permission'] = 'Warning: You do not have permission to modify Total Order Discount+!';
$_['error_discount_name'] = 'Enter discount name';
$_['error_fee_name'] = 'Enter fee name';
$_['error_discount_warning'] = 'Enter discount message';
$_['error_fee_warning'] = 'Enter fee message';
$_['error_customer_account'] = 'Choose at least one account type';

// Total Order Discount Entry text
$_['entry_tab_main'] = 'General';
$_['entry_tab_discount'] = 'Discount';
$_['entry_tab_cat'] = 'Categories';
$_['entry_tab_lang'] = 'Languages';
$_['entry_tab_about'] = 'About';

$_['entry_status'] = 'Status';
$_['entry_customer_account'] = 'Accounts';
$_['entry_sort_order'] = 'Sort Order';
$_['entry_base'] = 'Based on';
$_['entry_amount'] = 'Subtotal Type';
$_['entry_type'] = 'Discount Type';
$_['entry_group'] = 'Customer Group';
$_['entry_key'] = 'Subtotal Price/Product Quantity';
$_['entry_value'] = 'Discount(or Fee) Value';
$_['entry_discounts'] = 'Discount List';
$_['entry_cat_allowed'] = 'Allowed Categories';
$_['entry_cat_ignored'] = 'Disallowed Categories';
$_['entry_cat_rule'] = 'Processing rule';
$_['entry_tax_class'] = 'Tax Class';
$_['entry_discount_name'] = 'Discount Name';
$_['entry_fee_name'] = 'Fee Name';
$_['entry_discount_warning'] = 'Discount Warning Message';
$_['entry_fee_warning'] = 'Fee Warning Message';

// Total Order Discount+ help text
$_['help_customer_account'] = 'Allowed customer accounts';
$_['help_base'] = 'Activate discounts(or fees)  by subtotal price or product quantity in the cart';
$_['help_amount'] = 'For discounts(or fees) are activated by subtotal price defines how to sum product prices - with or without tax/VAT';
$_['help_type'] = 'Percentage or fixed amount';
$_['help_key'] = 'Total price or quantity products in the cart for get a discount or add an extra charge';
$_['help_value'] = 'Discount(or fee) value. For fees it needs to use negative values';
$_['help_discounts'] = 'Discount(or fee) list';
$_['help_group'] = 'Target customers group';
$_['help_cat_allowed'] = 'Product categories allowed for discounts(or fees)';
$_['help_cat_ignored'] = 'Product categories disallowed for discounts(or fees)';
$_['help_cat_rule'] = 'Categories lists processing rule';
$_['help_tax_class'] = 'Use a separate tax class for discounts(or fees)';

// Total Order Discount+ main text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Success: You have modified Total Order Discount+!';
$_['text_total'] = 'Order Totals';
$_['text_registered'] = 'Registered';
$_['text_guest'] = 'Guests';
$_['text_edit'] = 'Edit Total Order Discount+';
$_['text_percentage'] = 'Percentage';
$_['text_fixed'] = 'Fixed Amount';
$_['text_subtotal'] = 'Subtotal Price';
$_['text_quantity'] = 'Product Quantity';
$_['text_subtotal_amount'] = 'Subtotal (before tax/VAT)';
$_['text_total_amount'] = 'Total (including tax/VAT)';
$_['text_cat_allowed'] = 'Allowed categories list only';
$_['text_cat_ignored'] = 'Disallowed categories list only';
$_['text_cat_both'] = 'Both';
$_['text_discount_name'] = 'Discount';
$_['text_fee_name'] = 'Fee';
$_['text_discount_warning'] = 'Discount applied to items marked with *';
$_['text_fee_warning'] = 'Extra charge applied to items marked with *';
