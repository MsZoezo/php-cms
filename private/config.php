<?php
const HOST = '127.0.0.1';
const PORT = '3306';
const USER = 'root';
const PASSWORD = 'root';
const DATABASE = 'cms';
const CHARSET = 'utf8mb4';
const OPTIONS = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
