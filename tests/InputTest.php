<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/25/14
 * Time: 10:13 AM
 */

require_once __DIR__ . '/../classes/Input.php';

class InputTest extends PHPUnit_Framework_TestCase {

    public function tearDown() {
        $_GET['email'] = null;
    }

    public function test_input_set() {
        // Arrange
        $email = 'knakano@usc.edu';

        // Act
        $_GET['email'] = $email;

        // Assert
        $this->assertEquals($email, Input::get('email'));
        //(expected value, actual value)
    }

    public function test_input_null() {

        // Assert
        $this->assertNull(Input::get('email'));

        // Arrange
        $standard = 'standard';

        // Assert
        $this->assertEquals($standard, Input::get('plan', $standard));
    }

}
 