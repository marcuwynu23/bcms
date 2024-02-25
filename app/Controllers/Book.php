<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Book extends BaseController
{
    public function index()
    {
        $books = [
            [
                'id' => 1, 
                'title' => 'Example Book 1',
                'author' => 'John Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=1'
            ],
            [
                'id' => 2,
                'title' => 'Example Book 2',
                'author' => 'Jane Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=2'
            ],
            [
                'id' => 3,
                'title' => 'Example Book 3',
                'author' => 'John Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=3'
            ],
            [
                'id' => 4,
                'title' => 'Example Book 4',
                'author' => 'Jane Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=4'
            ],
            [
                'id' => 5,
                'title' => 'Example Book 5',
                'author' => 'John Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=5'
            ],
            [
                'id' => 6,
                'title' => 'Example Book 6',
                'author' => 'Jane Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=6'
            ],
            [
                'id' => 7,
                'title' => 'Example Book 7',
                'author' => 'John Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=7'
            ],
            [
                'id' => 8,
                'title' => 'Example Book 8',
                'author' => 'Jane Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=8'
            ]
        ];
        return view('book/index', ['books' => $books]);
    }

    public function show($id)
    {

        return view('book/show', ['id' => $id, 'book' => [
            'id' => $id, 
            'title' => 'Example Book ' . $id,
            'author' => 'John Doe',
            'description' => 'This is a short description of the book.',
            'image' => 'https://source.unsplash.com/random/200x200?sig=' . $id
        ]]);
    }

    public function create()
    {
        return view('book/create');
    }

    public function store()
    {
        return redirect()->to('/book');
    }

    public function edit($id)
    {

        return view('book/edit', ['id' => $id, 'book' => [
            'id' => $id, 
            'title' => 'Example Book ' . $id,
            'author' => 'John Doe',
            'description' => 'This is a short description of the book.',
            'image' => 'https://source.unsplash.com/random/200x200?sig=' . $id
        ]]);
    }

    public function update($id)
    {
        return redirect()->to('/book');
    }

    public function delete($id)
    {
        return redirect()->to('/book');
    }


    public function search()
    {
        // create $result array contains the search result
        $books = [
            [
                'id' => 1, 
                'title' => 'Example Book 1',
                'author' => 'John Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=1'
            ],
            [
                'id' => 2,
                'title' => 'Example Book 2',
                'author' => 'Jane Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=2'
            ],
            [
                'id' => 3,
                'title' => 'Example Book 3',
                'author' => 'John Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=3'
            ],
            [
                'id' => 4,
                'title' => 'Example Book 4',
                'author' => 'Jane Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=4'
            ],
            [
                'id' => 5,
                'title' => 'Example Book 5',
                'author' => 'John Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=5'
            ],
            [
                'id' => 6,
                'title' => 'Example Book 6',
                'author' => 'Jane Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=6'
            ],
            [
                'id' => 7,
                'title' => 'Example Book 7',
                'author' => 'John Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=7'
            ],
            [
                'id' => 8,
                'title' => 'Example Book 8',
                'author' => 'Jane Doe',
                'description' => 'This is a short description of the book.',
                'image' => 'https://source.unsplash.com/random/200x200?sig=8'
            ]
        ];      
        return view('book/index', ['books' => $books]);
    }
}
