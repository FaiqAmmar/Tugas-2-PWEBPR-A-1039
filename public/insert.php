<?php
require_once 'contact.php';

$res = Contact::insert('002','B','22','087');
echo $res;