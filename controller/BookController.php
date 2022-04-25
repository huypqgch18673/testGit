<?php
require_once "model/BookModel.php";

class BookController
{
    public $model;

    public function __construct()
    {
        $this->model = new BookModel;
    }

    public function execute()
    {
        //Neu nguoi dung click vao title cua cuon sach thi render ra file bookDetail cua book day
        if (!isset($_GET['title'])) {
            $book = $this->model->getBookByTitle($_GET['title']);
            require_once "view/BookDetail.php";
        }

        //neu nguoi dung khong click thi render ra file list
        else {
            $bookList = $this->model->getBookList();
            require_once "view/BookList.php";
        }
    }
}
