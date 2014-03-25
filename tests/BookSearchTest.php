<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/25/14
 * Time: 9:12 AM
 */


require_once __DIR__ . '/../classes/BookSearch.php';

class BookSearchTest extends PHPUnit_Framework_TestCase {

    protected $books;

    public function setUp() {
        $this->books = [
            [ 'title' => 'Introduction to HTML and CSS', 'pages' => 432 ],
            [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
            [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
            [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ],
            [ 'title' => 'PHP Object Oriented Solutions', 'pages' => 80 ],
            [ 'title' => 'PHP Design Patterns', 'pages' => 300 ],
            [ 'title' => 'Head First Java', 'pages' => 200 ]
        ];
    }

    public function tearDown() {

    }

    public function test_array_search_not_exact() {
        // Arrange
        $library = new BookSearch($this->books);

        // Act
        $bookResults = $library->find('javascript', false);

        // Assert
        $this->assertEquals([
                [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
                [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
                [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ]
            ], $bookResults);
        //(expected value, actual value)
    }

    public function test_array_search_exact() {
        // Arrange
        $library = new BookSearch($this->books);

        // Act
        $bookResults = $library->find('javascript web applications', true);

        // Assert
        $this->assertEquals([
            [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ]
        ], $bookResults);
        //(expected value, actual value)
    }

    public function test_array_search_book_doesnt_exist() {
        // Arrange
        $library = new BookSearch($this->books);

        // Act
        $bookResults = $library->find('The Definitive Guide to Symfony', true);

        // Assert
        $this->assertEquals(false, $bookResults);
        //(expected value, actual value)
    }

}
 