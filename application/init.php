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
Route::set('user_login-logout', 'odhlasit')
  ->defaults(array (
    'controller' => 'login',
    'action' => 'logout',
));

// zapomenute heslo - zmena hesla
Route::set('user_forgotten_password_change', 'obnoveni-hesla/<hash>')
  ->defaults(array (
    'controller' => 'login',
    'action' => 'forgotten_password_change',
));

// zapomenute heslo - zaslani linku
Route::set('user_forgotten_password_link', 'obnoveni-hesla-link')
  ->defaults(array (
    'controller' => 'login',
    'action' => 'forgotten_password',
));

// prihlaseni - vychozi
Route::set('user_login', 'prihlaseni')
  ->defaults(array (
    'controller' => 'login',
    'action' => 'index',
));

// registrace uzivatele - hotovo
Route::set('', 'registrace/hotovo')
  ->defaults(array (
    'controller' => 'register',
    'action' => 'done',
));

// registrace uzivatele - vychozi
Route::set('user_register', 'registrace')
  ->defaults(array (
    'controller' => 'register',
    'action' => 'index',
));

Route::set('static-user', 'static/user/<action>(/<args>)', array ('args' => '.+'))
  ->defaults(array (
    'controller' => 'static_user',
));

