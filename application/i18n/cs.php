<?php defined('SYSPATH') or die('No direct script access.');

return array
(
  'users_countries' => array ('CZ' => 'Česká republika'),
  'orders_states' => array ('0' => 'Nová', '1' => 'Přijatá', '2' => 'Připravená', '3' => 'Odeslaná', '4' => 'Zrušená'),

  //-------- FORMS ------------ //
  'form_user_register_field_login_name' => 'Přihlašovací jméno',
  'form_user_register_field_email' => 'E-mail',
  'form_user_register_field_password' => 'Heslo',
  'form_user_register_field_password_repeat' => 'Heslo (kontrola)',
  'form_user_register_field_name' => 'Jméno',
  'form_user_register_field_surname' => 'Příjmení',
  'form_user_register_field_street' => 'Ulice',
  'form_user_register_field_city' => 'Město',
  'form_user_register_field_postcode' => 'PSČ',
  'form_user_register_field_country' => 'Země',
  'form_user_register_field_phone' => 'Telefon',
  'form_user_register_field_company_data' => 'Firemní údaje (pokud potřebujete fakturu na firmu)',
  'form_user_register_field_company' => 'Firma',
  'form_user_register_field_ic' => 'IČ',
  'form_user_register_field_dic' => 'DIČ',
  'form_user_register_field_delivery_address' => 'Dodací adresa (pouze pokud se liší od adresy fakturační)',
  'form_user_register_field_delivery_name' => 'Jméno',
  'form_user_register_field_delivery_surname' => 'Příjmení',
  'form_user_register_field_delivery_street' => 'Ulice',
  'form_user_register_field_delivery_city' => 'Město',
  'form_user_register_field_delivery_postcode' => 'PSČ',
  'form_user_register_field_delivery_country' => 'Země',
  'form_user_register_field_delivery_company' => 'Firma',
  'form_user_register_field_delivery_phone' => 'Telefon',
  'form_user_register_field_newsletter' => 'Souhlas se zasíláním newsletteru',
  
  'form_user_edit_field_email' => 'E-mail',
  'form_user_edit_field_name' => 'Jméno',
  'form_user_edit_field_surname' => 'Příjmení',
  'form_user_edit_field_street' => 'Ulice',
  'form_user_edit_field_city' => 'Město',
  'form_user_edit_field_postcode' => 'PSČ',
  'form_user_edit_field_country' => 'Země',
  'form_user_edit_field_phone' => 'Telefon',
  'form_user_edit_field_company_data' => 'Firemní údaje (pokud potřebujete fakturu na firmu)',
  'form_user_edit_field_company' => 'Firma',
  'form_user_edit_field_ic' => 'IČ',
  'form_user_edit_field_dic' => 'DIČ',
  'form_user_edit_field_delivery_address' => 'Dodací adresa (pouze pokud se liší od adresy fakturační)',
  'form_user_edit_field_delivery_name' => 'Jméno',
  'form_user_edit_field_delivery_surname' => 'Příjmení',
  'form_user_edit_field_delivery_street' => 'Ulice',
  'form_user_edit_field_delivery_city' => 'Město',
  'form_user_edit_field_delivery_postcode' => 'PSČ',
  'form_user_edit_field_delivery_country' => 'Země',
  'form_user_edit_field_delivery_company' => 'Firma',
  'form_user_edit_field_delivery_phone' => 'Telefon',
  'form_user_edit_field_newsletter' => 'Souhlas se zasíláním newsletteru',
  
  'form_user_password_change_field_actual_password' => 'Stávající heslo',
  'form_user_password_change_field_new_password' => 'Nové heslo',
  'form_user_password_change_field_new_password_repeat' => 'Nové heslo (kontrola)',
  
  // link pro zmenu hesla
  'form_user_forgotten_password_link_field_login_name' => 'Přihlašovací jméno',
  
  // prihlaseni
  'form_user_login_field_login_name' => 'E-mail',
  'form_user_login_field_password' => 'Heslo',
  
  // zmena hesla
  'form_user_change_password_field_password' => 'Heslo',
  'form_user_change_password_field_password_confirm' => 'Heslo (kontrola)',
  
  'form_user_password_forgotten_change_field_password' => 'Nové heslo',
  'form_user_password_forgotten_change_field_password_repeat' => 'Nové heslo (kontrola)',
  
  'validate.email.unique_field_available' => 'Uživatel se zadaným e-mailem již existuje.',
  'validate.password_confirm.matches' => 'Pole ":param2" musí být stejné jako pole ":param3".',
  'validate.login_name.exists' => 'Nebyl nalezen účet se zadaným přihlašovacím jménem.',
  'validate.actual_password.check_actual_password' => 'Hodnota v poli `:field` neodpovídá Vašemu současnému heslu.',
  
  // fakturacni a dodaci udaje
  'form_purchase_personal_data_field_name' => 'Jméno',
  'form_purchase_personal_data_field_surname' => 'Příjmení',
  'form_purchase_personal_data_field_email' => 'E-mail',
  'form_purchase_personal_data_field_phone' => 'Telefon',
  'form_purchase_personal_data_field_street' => 'Ulice',
  'form_purchase_personal_data_field_city' => 'Město',
  'form_purchase_personal_data_field_postcode' => 'PSČ',
  'form_purchase_personal_data_field_country' => 'Stát',
  'form_purchase_personal_data_field_company' => 'Firma',
  'form_purchase_personal_data_field_ic' => 'IČ',
  'form_purchase_personal_data_field_dic' => 'DIČ',
  'form_purchase_personal_data_field_delivery_company' => 'Firma',
  'form_purchase_personal_data_field_delivery_name' => 'Jméno',
  'form_purchase_personal_data_field_delivery_surname' => 'Příjmení',
  'form_purchase_personal_data_field_delivery_street' => 'Ulice',
  'form_purchase_personal_data_field_delivery_city' => 'Město',
  'form_purchase_personal_data_field_delivery_postcode' => 'PSČ',
  'form_purchase_personal_data_field_delivery_country' => 'Stát',
  'form_purchase_personal_data_field_delivery_phone' => 'Telefon',
  
);
