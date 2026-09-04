<?php
// Copy this file to config.php outside public_html and fill Hostinger MySQL details.
return [
  'dsn' => 'mysql:host=localhost;dbname=mealjob;charset=utf8mb4',
  'user' => 'YOUR_MYSQL_USER',
  'password' => 'YOUR_MYSQL_PASSWORD',
  'cashfree_app_id' => 'YOUR_CASHFREE_APP_ID',
  'cashfree_secret_key' => 'YOUR_CASHFREE_SECRET_KEY',
  'vapid_public_key' => 'YOUR_WEB_PUSH_PUBLIC_KEY',
];
