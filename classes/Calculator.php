<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/4/14
 * Time: 5:45 PM
 */

class Calculator {


    protected $a, $b;
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function add() {
        $sum = $this->a + $this->b;
        return ($sum);
    }

} 