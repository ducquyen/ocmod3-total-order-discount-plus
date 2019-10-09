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
$_['error_permission'] = 'Недостаточно прав для управления модулем Total Order Discount+!';
$_['error_discount_name'] = 'Введите наименование для скидки';
$_['error_fee_name'] = 'Введите наименование для комиссии';
$_['error_discount_warning'] = 'Сообщение о наличии в корзине товаров со скидкой';
$_['error_fee_warning'] = 'Сообщение о наличии в корзине товаров с дополнительной комиссией';
$_['error_customer_account'] = 'Выберите по крайней мере один тип учётной записи';

// Total Order Discount Entry text
$_['entry_tab_general'] = 'Основные настройки';
$_['entry_tab_discount'] = 'Скидки';
$_['entry_tab_cat'] = 'Категории';
$_['entry_tab_lang'] = 'Языковые параметры';
$_['entry_tab_support'] = 'Поддержка';

$_['entry_status'] = 'Статус';
$_['entry_customer_account'] = 'Учётные записи';
$_['entry_sort_order'] = 'Порядок сортировки';
$_['entry_base'] = 'Основание для скидки';
$_['entry_amount'] = 'Тип суммы';
$_['entry_type'] = 'Вид скидки';
$_['entry_group'] = 'Группа клиентов';
$_['entry_key'] = 'Cумма/Количество товаров';
$_['entry_value'] = 'Значение скидки';
$_['entry_discounts'] = 'Cкидки';
$_['entry_white_list'] = 'Белый список';
$_['entry_black_list'] = 'Чёрный список';
$_['entry_list_processing'] = 'Обработка списков';
$_['entry_date_start'] = 'Дата начала';
$_['entry_date_end'] = 'Дата окончания';
$_['entry_tax_class'] = 'Налоговый класс';
$_['entry_text_discount'] = 'Cкидка';
$_['entry_text_fee'] = 'Комиссия';
$_['entry_discount_warning'] = 'Сообщение о скидке';
$_['entry_fee_warning'] = 'Сообщение о комиссии';

// Total Order Discount+ help text
$_['help_customer_account'] = 'Типы клиентских учётных записей, для которых действуют скидки';
$_['help_base'] = 'Основание для предоставления скидки — общая стоимость товаров или количество продуктов в корзине';
$_['help_amount'] = 'Общая стоимость товаров для предоставления скидки рассчитывается с или без учёта налогов/НДС';
$_['help_type'] = 'Тип используемых скидок - процентная или фиксированная';
$_['help_key'] = 'Общая стоимость товаров или количество продуктов в корзине, по достижении которых активируется скидка';
$_['help_value'] = 'Положительное значенеи - скидка, негативное - комиссия';
$_['help_discounts'] = 'Список скидок или комиссий';
$_['help_group'] = 'Группа клиентов';
$_['help_white_list'] = 'Список товарных категорий, для которых действуют скидки';
$_['help_black_list'] = 'Список товарных категорий, которые не активируют скидки и не участвуют в их рассчёте';
$_['help_list_processing'] = 'Правило обработки списков товарных категорий';
$_['help_tax_class'] = 'Особый налоговый класс для скидок и комиссий';

// Total Order Discount main text
$_['text_extension'] = 'Расширения';
$_['text_success'] = 'Параметры модуля успешно установлены!';
$_['text_total'] = 'Итого';
$_['text_edit'] = 'Редактировать Total Order Discount+';
$_['text_registered'] = 'Зарегистрированные';
$_['text_guest'] = 'Гости';
$_['text_percentage'] = 'Процентная скидка';
$_['text_fixed'] = 'Фиксированная сумма';
$_['text_subtotal'] = 'Сумма заказа';
$_['text_quantity'] = 'Количество товаров';
$_['text_subtotal_amount'] = 'Сумма (без налогов)';
$_['text_total_amount'] = 'Итого (включая налоги)';
$_['text_white_list'] = 'Только белый список';
$_['text_black_list'] = 'Только чёрный список';
$_['text_both_list'] = 'Оба списка';
$_['text_discount_name'] = 'Скидка';
$_['text_fee_name'] = 'Комиссия';
$_['text_discount_warning'] = 'Скидка действует на товары помеченные *';
$_['text_fee_warning'] = 'За товары помеченные * взимается дополнительная комиссия';
