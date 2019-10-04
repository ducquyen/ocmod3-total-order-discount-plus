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
 * @version     2.2
 *
 * @see			https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35103
 * @see			https://underr.space/notes/projects/project-011.html
 * @see			https://github.com/underr-ua/ocmod3-total-order-discount-plus
 */

// Total Order Discount heading
$_['heading_title'] = '[underr] Total Order Discount+';

// Total Order Discount Error text
$_['error_permission'] = 'Недостатньо прав для управління модулем Total Order Discount+!';
$_['error_discount_name'] = 'Введіть назву знижки';
$_['error_fee_name'] = 'Введіть назву комісії';
$_['error_discount_warning'] = 'Введіть повідомлення про знижку';
$_['error_fee_warning'] = 'Введіть повідомлення про комісію';
$_['error_customer_account'] = 'Вкажіть хоча б один тип облікових записів';

// Total Order Discount Entry text
$_['entry_tab_main'] = 'Основні параметри';
$_['entry_tab_discount'] = 'Параметри знижок';
$_['entry_tab_text'] = 'Мовні опції';
$_['entry_tab_about'] = 'Посилання';

$_['entry_status'] = 'Статус';
$_['entry_customer_account'] = 'Облікові записи';
$_['entry_registered'] = 'Зареєстровані';
$_['entry_guest'] = 'Гості';
$_['entry_base'] = 'Залежність';
$_['entry_type'] = 'Тип';
$_['entry_group'] = 'Група користувачів';
$_['entry_key'] = 'Необхідна сума/кількість';
$_['entry_value'] = 'Знижка/Доплата';
$_['entry_discounts'] = 'Список знижок';
$_['entry_cats_type'] = 'Тип списку категорій';
$_['entry_cats_list'] = 'Список категорій';
$_['entry_tax_class'] = 'Податковий клас';
$_['entry_text_discount'] = 'Знижка';
$_['entry_text_fee'] = 'Комісія';
$_['entry_discount_warning'] = 'Повідомлення про знижку';
$_['entry_fee_warning'] = 'Повідомлення про комісію';
$_['entry_sort_order'] = 'Порядок сортування';

// Total Order Discount+ help text
$_['help_customer_account'] = 'Типи користувацьких облікових записів, для яких діють знижки';
$_['help_base'] = 'Підставою для знижки є загальна ціна або кількість товарів у кошику';
$_['help_type'] = 'Знижка може бути відсотковою або фіксованою';
$_['help_key'] = 'Ціна/кількість, з/до якої діє знижка/комісія';
$_['help_value'] = 'Розмір знижки. Вразі доплати або комісії використовуйте негативне значення.';
$_['help_discounts'] = 'Список активних снижок та комісій';
$_['help_cats_type'] = 'Ігнорувати, враховувати або виключати товари із категорій в наступному списку';
$_['help_cats_list'] = 'Продукти з цієї категорії будут враховуватися або виключатися при розрахунку знижки';
$_['help_tax_class'] = 'Податковий клас для фіксованих знижок/комісій';

// Total Order Discount main text
$_['text_extension'] = 'Розширення';
$_['text_success'] = 'Параметри модуля встановлено успішно!';
$_['text_total'] = 'Разом';
$_['text_edit'] = 'Редагування Total Order Discount+';
$_['text_percent'] = 'Відсоткова знижка';
$_['text_fixed'] = 'Фіксована сума';
$_['text_subtotal'] = 'Сума заказу';
$_['text_quantity'] = 'Кількість товарів';
$_['text_include'] = 'Враховувати';
$_['text_exclude'] = 'Виключати';
$_['text_discount_name'] = 'Знижка';
$_['text_fee_name'] = 'Комісія';
$_['text_discount_warning'] = 'Знижка діє тильки на товари помічені *';
$_['text_fee_warning'] = 'За товари помічені * стягується додаткова комісія';
