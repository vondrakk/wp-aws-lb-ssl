<?php
/*
Plugin Name: AWS LoadBalancer SSL Fix

Author: Viktor von Drakk
*/

if ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) == ‘https’ ) {
  $_SERVER['HTTPS'] = ‘on';
}

