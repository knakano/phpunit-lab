<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/4/14
 * Time: 6:06 PM
 */

class BookSearch {

    protected $books;
    public function __construct($books) {
        $this->books = $books;
    }

    public function find($query, $exact = false) {
        //$search = array_search($query, $this->books, $exact);

        $bookResults = array();

        foreach ($this->books as $book) {
            if ($exact) {
                if (strcasecmp($book['title'], $query) == 0) {
                    array_push($bookResults, $book);
                }
            }
            else {
                if (stripos($book['title'], $query) !== false) {
                    array_push($bookResults, $book);
                }
            }
        }

        if (empty($bookResults)) {
            return false;
        }
        else {
            return $bookResults;
        }
    }
} 