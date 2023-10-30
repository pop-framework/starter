<?php 
namespace App\Controller;

use Pop\Controller\AbstractController;

class BookController extends AbstractController
{
    public function index()
    {
        $dbm = $this->databaseManager;

        $books = $dbm->find();

        return $this->render("pages/book/index", [
            'books' => $books
        ]);
    }

    public function details()
    {
        return $this->render("pages/book/detail");
    }
}