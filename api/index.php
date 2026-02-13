<?php

// 1. Setup Folder Cache di /tmp (Karena Vercel Read-Only)
// Kita buat folder ini secara manual setiap kali aplikasi jalan
$files = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/bootstrap/cache', // Tambahan untuk bootstrap cache
];

foreach ($files as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// 2. Paksa Environment Variable
// Ini memastikan Laravel tahu harus pakai folder di atas
putenv('APP_CONFIG_CACHE=/tmp/storage/bootstrap/cache/config.php');
putenv('APP_SERVICES_CACHE=/tmp/storage/bootstrap/cache/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/storage/bootstrap/cache/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/storage/bootstrap/cache/routes-v7.php');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('SESSION_DRIVER=cookie'); // Paksa cookie agar tidak butuh file/database
putenv('LOG_CHANNEL=stderr');    // Paksa log ke console

// 3. Masuk ke Aplikasi Utama
require __DIR__ . '/../public/index.php';