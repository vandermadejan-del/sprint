<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['naam']  = $_POST['naam'] ?? '';
    $_SESSION['email'] = $_POST['email'] ?? '';

    header('Location: ../bedankPagina.php');
    exit;
}