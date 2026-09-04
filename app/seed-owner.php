<?php
// One-time CLI/secure-admin seed. Keep credentials in Hostinger environment variables, never JavaScript.
$config = require __DIR__ . '/config.php';
$pdo = new PDO($config['dsn'], $config['user'], $config['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$email = getenv('MEALJOB_OWNER_EMAIL');
$password = getenv('MEALJOB_OWNER_PASSWORD');
if (!$email || !$password) { throw new RuntimeException('Set MEALJOB_OWNER_EMAIL and MEALJOB_OWNER_PASSWORD before seeding.'); }
$query = $pdo->prepare('INSERT INTO users (name,email,password_hash,role,status,email_verified_at) VALUES (?,?,?,?,?,NOW()) ON DUPLICATE KEY UPDATE name=VALUES(name), password_hash=VALUES(password_hash), role="admin", status="active"');
$query->execute(['Garvit', $email, password_hash($password, PASSWORD_DEFAULT), 'admin', 'active']);
echo "Owner seeded. Remove this script or revoke its access after use.\n";
