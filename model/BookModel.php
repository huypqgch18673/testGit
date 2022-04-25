<?php
require_once "model/Book.php";

class BookModel
{
    //create book list as a database
    public $bookList;


    public function __construct()
    {
        $bookList = array(
            "symphony 1" => new Book("Symphony 1", 123.245, 50, "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/action-thriller-book-cover-design-template-3675ae3e3ac7ee095fc793ab61b812cc_screen.jpg"),
            "symphony 2" => new Book("Symphony 2", 123.245, 50, "https://i.pinimg.com/originals/3a/88/69/3a88698b2e34f85ed788ee03ce256c38.jpg"),
            "symphony 3" => new Book("Symphony 3", 123.245, 50, "https://assets.teenvogue.com/photos/5cd4384fac4d9e712fe2ebb0/2:3/w_1852,h_2778,c_limit/The%20Gravity%20of%20Us_.jpg"),
        );
    }

    //tra ve nhieu cuon sach
    public function getBookList()
    {
        return $this->bookList;
    }

    //tra ve 1 cuon sach theo tieu de
    public function getBookByTitle($title)
    {
        $book = $this->bookList[$title];
        return $book;
    }
}
