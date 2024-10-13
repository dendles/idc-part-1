<?php
session_start();
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_ngeredeg';
$conn = mysqli_connect(
    $hostname,
    $username,
    $password,
    $dbname
) or die('Gagal terhubung ke database');

