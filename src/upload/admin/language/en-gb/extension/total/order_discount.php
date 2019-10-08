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
$_['entry_tab_discount'] = 'Discounts';
$_['entry_tab_cat'] = 'Categories';
$_['entry_tab_lang'] = 'Languages';
$_['entry_tab_about'] = 'Support';

$_['entry_status'] = 'Status';
$_['entry_customer_account'] = 'Accounts';
$_['entry_sort_order'] = 'Sort Order';
$_['entry_base'] = 'Based on';
$_['entry_amount'] = 'Subtotal Type';
$_['entry_type'] = 'Discount Type';
$_['entry_group'] = 'Customer Group';
$_['entry_key'] = 'Price/Quantity';
$_['entry_value'] = 'Discount Value';
$_['entry_discounts'] = 'Discount Rates';
$_['entry_white_list'] = 'White List';
$_['entry_black_list'] = 'Black List';
$_['entry_list_processing'] = 'List processing';
$_['entry_date_start'] = 'Date Start';
$_['entry_date_end'] = 'Date End';
$_['entry_tax_class'] = 'Tax Class';
$_['entry_discount_name'] = 'Discount Name';
$_['entry_fee_name'] = 'Fee Name';
$_['entry_discount_warning'] = 'Discount Warning Message';
$_['entry_fee_warning'] = 'Fee Warning Message';

// Total Order Discount+ help text
$_['help_customer_account'] = 'Allowed customer accounts';
$_['help_base'] = 'The reason for granting a discount are subtotal price or product quantity in the cart';
$_['help_amount'] = 'Subtotal amount of product prices to grant a discount calculates with or without tax/VAT';
$_['help_type'] = 'Percentage discount or fixed discount value';
$_['help_key'] = 'Subtotal amount of product prices or quantity products in the cart to grant a discount or fee';
$_['help_value'] = 'Positive value - a discount, negative value - a fee.';
$_['help_discounts'] = 'Discount and extra charge rate list';
$_['help_group'] = 'Target customers group';
$_['help_white_list'] = 'List of product categories allowed to grant discounts and fees';
$_['help_black_list'] = 'List of product categories disallowed to grant discounts and fees';
$_['help_list_processing'] = 'The rule for processing product categories list';
$_['help_tax_class'] = 'Particular tax class for discounts and fees';

// Total Order Discount+ main text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Success: You have modified Total Order Discount+!';
$_['text_total'] = 'Order Totals';
$_['text_edit'] = 'Edit Total Order Discount+';
$_['text_registered'] = 'Registered';
$_['text_guest'] = 'Guests';
$_['text_percentage'] = 'Percentage';
$_['text_fixed'] = 'Fixed Amount';
$_['text_subtotal'] = 'Subtotal Price';
$_['text_quantity'] = 'Product Quantity';
$_['text_subtotal_amount'] = 'Subtotal (before tax/VAT)';
$_['text_total_amount'] = 'Total (including tax/VAT)';
$_['text_white_list'] = 'White List only';
$_['text_black_list'] = 'Black List only';
$_['text_both_list'] = 'Both';
$_['text_discount_name'] = 'Discount';
$_['text_fee_name'] = 'Fee';
$_['text_discount_warning'] = 'Discount applied to items marked with *';
$_['text_fee_warning'] = 'Extra charge applied to items marked with *';
