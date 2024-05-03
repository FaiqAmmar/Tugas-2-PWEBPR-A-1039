<?php
include_once 'function/main.php';
include_once 'models/M_ContactApp.php';

class C_Dashboard {
    static function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('dashboard', ['contacts' => Contact::getAllContacts($_SESSION['user']['id'])]);
        }
    }
}