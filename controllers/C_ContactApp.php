<?php
include_once 'models/M_ContactApp.php';

class C_ContactApp
{
    static function createContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::createContact([
                'contact_name' => $post['contact_name'],
                'no_hp' => $post['no_hp'],
                'no_id' => $post['no_id'],
            ]);

            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }

    static function updateContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::updateContact([
                'contact_name' => $post['contact_name'],
                'no_hp' => $post['no_hp'],
                'no_id' => $post['no_id'],
            ]);
            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }

    static function deleteContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::deleteContact($_POST['contactId']);
            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }
}