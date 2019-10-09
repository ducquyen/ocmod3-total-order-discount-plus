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

// Total Order Discount heading
$_['heading_title'] = '[underr] Total Order Discount+';

// Total Order Discount Error text
$_['error_permission'] = 'Недостатньо прав для управління модулем Total Order Discount+!';
$_['error_discount_name'] = 'Введіть найменування для знижки';
$_['error_fee_name'] = 'Введіть найменування для комісії';
$_['error_discount_warning'] = 'Повідомлення про присутність у корзині товарів зі знижкою';
$_['error_fee_warning'] = 'Повідомлення про присутність у кошику товарів з додатковою комісією';
$_['error_customer_account'] = 'Дозвольте хоча б один тип облікових записів';

// Total Order Discount Entry text
$_['entry_tab_general'] = 'Основні параметри';
$_['entry_tab_discount'] = 'Знижки';
$_['entry_tab_cat'] = 'Категорії';
$_['entry_tab_lang'] = 'Мовні опції';
$_['entry_tab_support'] = 'Посилання';

$_['entry_status'] = 'Статус';
$_['entry_customer_account'] = 'Облікові записи';
$_['entry_sort_order'] = 'Порядок сортування';
$_['entry_base'] = 'Підстава для знижки';
$_['entry_amount'] = 'Тип суми';
$_['entry_type'] = 'Вид знижки';
$_['entry_group'] = 'Група користувачів';
$_['entry_key'] = 'Сума/Кількість товарів';
$_['entry_value'] = 'Розмір знижки';
$_['entry_discounts'] = 'Знижки';
$_['entry_white_list'] = 'Білий список';
$_['entry_black_list'] = 'Чорний список';
$_['entry_list_processing'] = 'Обробка списків';
$_['entry_date_start'] = 'Дата початку';
$_['entry_date_end'] = 'Дата закінчення';
$_['entry_tax_class'] = 'Податковий клас';
$_['entry_text_discount'] = 'Знижка';
$_['entry_text_fee'] = 'Комісія';
$_['entry_discount_warning'] = 'Повідомлення про знижку';
$_['entry_fee_warning'] = 'Повідомлення про комісію';

// Total Order Discount+ help text
$_['help_customer_account'] = 'Типи користувацьких облікових записів, для яких діють знижки';
$_['help_base'] = 'Підстава для знижки — загальна ціна або кількість товарів у кошику';
$_['help_amount'] = 'Загальна вартість товарів для надання знижки розраховується з урахуванням податків/НДС або ж без';
$_['help_type'] = 'Тип знижкок - відсоткова чи фіксована';
$_['help_key'] = 'Загальна вартість товарів або кількість продуктів у кошику, після досягнення яких активується знижка';
$_['help_value'] = 'Позитивне значення - знижка, негативне - комісія';
$_['help_discounts'] = 'Перелік активних знижок та комісій';
$_['help_group'] = 'Група клієнтів';
$_['help_white_list'] = 'Перелік товарних категорій, для яких діють знижки';
$_['help_black_list'] = 'Перелік товарних категорій, для яких не діють знижки';
$_['help_list_processing'] = 'Правило обробки переліку товарних категорій';
$_['help_tax_class'] = 'Особливий податковий клас для знижок та комісій';

// Total Order Discount main text
$_['text_extension'] = 'Розширення';
$_['text_success'] = 'Параметри модуля встановлено успішно!';
$_['text_total'] = 'Разом';
$_['text_edit'] = 'Редагування Total Order Discount+';
$_['text_registered'] = 'Зареєстровані';
$_['text_guest'] = 'Гості';
$_['text_percentage'] = 'Відсоткова знижка';
$_['text_fixed'] = 'Фіксована сума';
$_['text_subtotal'] = 'Сума замовлення';
$_['text_quantity'] = 'Кількість товарів';
$_['text_subtotal_amount'] = 'Сума (без податків)';
$_['text_total_amount'] = 'Разом (включаючи податки)';
$_['text_white_list'] = 'Тільки білий список';
$_['text_black_list'] = 'Тільки чорний список';
$_['text_both_list'] = 'Обидва списки';
$_['text_discount_name'] = 'Знижка';
$_['text_fee_name'] = 'Комісія';
$_['text_discount_warning'] = 'Знижка діє тильки на товари помічені *';
$_['text_fee_warning'] = 'За товари помічені * стягується додаткова комісія';
