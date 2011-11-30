<?php defined('SYSPATH') or die('No direct access allowed.');

$config['users_images']['file_size_limit'] = '10MB';
$config['users_images']['file_types'] = '*.jpg;*.jpeg;*.png;*.gif;*.bmp';
$config['users_images']['file_types_desc'] = 'Obrázky';

$config['thumbs']['users_images'] = array (
  's'   => array ('width' => 100, 'height' => 100),
);

return $config;