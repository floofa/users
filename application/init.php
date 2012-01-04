<?php defined('SYSPATH') or die('No direct script access.');

// uzivatel - zmena hesla
Route::set('user-change_password', 'uzivatel/heslo(/<id>)')
  ->defaults(array (
    'controller' => 'user',
    'action' => 'change_password',
));

// uzivatel - editace udaje
Route::set('user-edit', 'uzivatel/upravit(/<id>)')
  ->defaults(array (
    'controller' => 'user',
    'action' => 'edit',
));

// uzivatel - vychozi
Route::set('user', 'uzivatel')
  ->defaults(array (
    'controller' => 'user',
    'action' => 'index',
));

// odhlaseni
Route::set('user_logout', 'odhlasit')
  ->defaults(array (
    'controller' => 'user_login',
    'action' => 'logout',
));

// zapomenute heslo - zmena hesla
Route::set('user_forgotten_password_change', 'obnoveni-hesla/<hash>')
  ->defaults(array (
    'controller' => 'user_login',
    'action' => 'forgotten_password_change',
));

// zapomenute heslo - zaslani linku
Route::set('user_forgotten_password', 'obnoveni-hesla')
  ->defaults(array (
    'controller' => 'user_login',
    'action' => 'forgotten_password',
));

// prihlaseni - vychozi
Route::set('user_login', 'prihlaseni')
  ->defaults(array (
    'controller' => 'user_login',
    'action' => 'index',
));

// overeni uzivatele
Route::set('user_register-verify', 'registrace/overeni/<user_id>/<hash>')
  ->defaults(array (
    'controller' => 'user_register',
    'action' => 'verify',
));

// registrace uzivatele - hotovo
Route::set('user_register-done', 'registrace/hotovo')
  ->defaults(array (
    'controller' => 'user_register',
    'action' => 'done',
));

// registrace uzivatele - vychozi
Route::set('user_register', 'registrace')
  ->defaults(array (
    'controller' => 'user_register',
    'action' => 'index',
));

Route::set('static-user', 'static/user/<action>(/<args>)', array ('args' => '.+'))
  ->defaults(array (
    'controller' => 'static_user',
));

