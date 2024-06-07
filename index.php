<?php


session_start();

require 'vendor/autoload.php';
// use Nguyenductam\XuongOop\Commons\Helper;

Dotenv\Dotenv::createImmutable(__DIR__)->load();

// Helper::debug($_ENV);


require_once __DIR__ . '/routes/index.php';

// Helper::debug('XXX');