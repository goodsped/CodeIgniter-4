<?php

namespace App\Controllers;

use App\Models\BooksModel;

class Books extends BaseController
{
    protected $booksModel;
    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }
    public function index(): string
    {
        $books = $this->booksModel->findAll();
        $data = [
            'title' => 'Books | PWL',
            'books' => $books
        ];

        // // cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $books = $db->query("SELECT * FROM books");
        // foreach ($books->getResultArray() as $row) {
        //     dd($row);
        // }

        // $booksModel = new \App\Models\BooksModel();

        return view('books/index', $data);
    }
}
