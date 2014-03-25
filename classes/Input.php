<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/25/14
 * Time: 10:13 AM
 */

class Input {

    public static function get($key, $standard = null) {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        }
        else {
            return $standard;
        }
    }
} 