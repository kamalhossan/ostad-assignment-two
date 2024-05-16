<?php

class Book {

    // TODO: Add properties as Private

    private $title;
    private $availableCopies;

    public function __construct( $title, $availableCopies ) {
        // TODO: Initialize properties

        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method

    function getTitle() {
        return $this->title;
    }

    // TODO: Add getAvailableCopies method

    function getAvailableCopies() {
        return "Available Copies of '{$this->title}': {$this->availableCopies}\n";
    }

    // TODO: Add borrowBook method

    function borrowBook( $number ) {
        $this->availableCopies = $this->availableCopies - $number;
    }

    // TODO: Add returnBook method

    function returnBook( $number ) {
        $this->availableCopies = $this->availableCopies + $number;
    }

}

class Member {
    // TODO: Add properties as Private

    private $name;

    public function __construct( $name ) {
        // TODO: Initialize properties

        $this->name = $name;
    }

    // TODO: Add getName method

    function getName() {
        return $this->name;
    }

    // TODO: Add borrowBook method

    function borrowBook( $book, $numCopies ) {
        $book->borrowBook( $numCopies );
    }

    // TODO: Add returnBook method

    function returnBook( $book, $numCopies ) {
        $book->returnBook( $numCopies );
    }

}

$book_one = new Book( "The Great Gatsby", 5 );
$book_two = new Book( "To Kill a Mockingbird", 3 );

$member_one = new Member( "John Doe" );
$member_two = new Member( "Jane Smith" );

$member_one->borrowBook( $book_one, 1 );
$member_two->borrowBook( $book_two, 1 );

echo $book_one->getAvailableCopies();
echo $book_two->getAvailableCopies();
