<?php defined('SYSPATH') or die('No direct script access.');

return array
(
  'cms_menu_users' => 'Uživatelé',
  
  'navigation_users' => 'Uživatelé',
  'navigation_users_list' => 'Vypsat',
  'navigation_users_new' => 'Nový uživatel',

  'list_user_heading' => 'Uživatelé',
  'list_user_new_button' => 'Nový uživatel',
  'list_user_fields' => array ('full_name' => 'Jméno', 'email' => 'E-mail', 'login_name' => 'Přihl. jméno'),
  
  'users_countries' => array ('CZ' => 'Česká republika'),
  
  //-------- FORMS ------------ //
  'form_user_edit_heading' => 'Editace uživatele',
  'form_user_edit_group_group2' => 'Přihlašovací údaje',
  'form_user_edit_group_users_images' => 'Obrázky',
  'form_user_edit_field_name' => 'Jméno',
  'form_user_edit_field_surname' => 'Příjmení',
  'form_user_edit_field_street' => 'Ulice',
  'form_user_edit_field_city' => 'Město',
  'form_user_edit_field_postcode' => 'PSČ',
  'form_user_edit_field_country' => 'Země',
  'form_user_edit_field_email' => 'E-mail',
  'form_user_edit_field_login_name' => 'Přihlašovací jméno',
  'form_user_edit_field_password' => 'Heslo',
  
  'form_user_filter_field_email' => 'E-mail',
  
  /*
  'form_user_edit_heading' => 'Editace uživatele',
  'form_user_edit_group_group2' => 'Fakturační údaje',
  'form_user_edit_group_group3' => 'Dodací údaje',
  'form_user_edit_group_group4' => 'Kontaktní údaje',
  'form_user_edit_field_login_name' => 'Přihlašovací jméno',
  'form_user_edit_field_name' => 'Jméno',
  'form_user_edit_field_surname' => 'Příjmení',
  'form_user_edit_field_password' => 'Heslo',
  'form_user_edit_field_email' => 'E-mail',
  'form_user_edit_field_phone' => 'Telefon',
  'form_user_edit_field_fax' => 'Fax',
  'form_user_edit_field_street' => 'Ulice',
  'form_user_edit_field_city' => 'Město',
  'form_user_edit_field_postcode' => 'PSČ',
  'form_user_edit_field_country' => 'Země',
  'form_user_edit_field_company' => 'Firma',
  'form_user_edit_field_cin' => 'IC',
  'form_user_edit_field_tin' => 'DIC',
  'form_user_edit_field_delivery_name' => 'Jméno',
  'form_user_edit_field_delivery_surname' => 'Příjmení',
  'form_user_edit_field_delivery_street' => 'Ulice',
  'form_user_edit_field_delivery_city' => 'Město',
  'form_user_edit_field_delivery_postcode' => 'PSČ',
  'form_user_edit_field_delivery_country' => 'Země',
  'form_user_edit_field_delivery_company' => 'Firma',
  */
  
  'validate' => array (
    'login_name' => array (
      'is_unique' => 'Hodnota v poli `:field` musí být unikátní. Vámi zadaná hodnota (:value) již existuje',
    ),
  )
);