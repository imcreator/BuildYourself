<?php
/*
Template Name: Login Page 
*/


get_header(); 
$args = array ( 'redirect' => 'localhost/buildyourself.pl' );
wp_login_form();
?> 