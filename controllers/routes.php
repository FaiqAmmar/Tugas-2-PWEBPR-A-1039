<?php

// Getting Started
Router::url('/', 'get', function () {
  header('Location: login');
});

// Auth
Router::url('login', 'get', 'C_Auth::login');
Router::url('login', 'post', 'C_Auth::sessionLogin');
Router::url('register', 'get', 'C_Auth::register');
Router::url('register', 'post', 'C_Auth::newRegister');
Router::url('logout', 'get', 'C_Auth::logout');


// Dashboard
Router::url('dashboard', 'get', 'C_Dashboard::index');