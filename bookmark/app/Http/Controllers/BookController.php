<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Termwind\Components\Raw;

class BookController extends Controller
{
    public function create(Request $request) 
    {
        return view('books/create');
    }

/**
* POST /books
* Process the form for adding a new book
*/
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|digits:4',
            'cover_url' => 'url',
            'purchase_url' => 'required|url',
            'description' => 'required|min:255'
        ]);
 
        dump($request->all());
    }

    public function search(Request $request) {
        $request->validate([                                    'searchTerms'=> 'required'
        ]);
                                                     
       $bookData = file_get_contents(database_path('books.json'));
       $books = json_decode($bookData, true);

       $searchType = $request->input('searchType', 'title');
       $searchTerms = $request->input('searchTerms', '');

       $searchResults = [];

       foreach($books as $slug => $book) {
        if(strtolower($book[$searchType]) == strtolower($searchTerms)) {
            $searchResults[$slug] = $book;
            }
       }

        //    session(['searchResults'=> $searchResults]);

        return redirect('/')->with([
        'searchResults' => $searchResults,
        'searchTerms' => $searchTerms,
        'searchType' => $searchType
       ]);
    }
    
    public function index(){
        # Load book data using PHP’s file_get_contents
        # We specify the books.json file path using Laravel’s database_path helper
        $bookData = file_get_contents(database_path('books.json'));

        # Convert the string of JSON text loaded from books.json into an
        # array using PHP’s built-in json_decode function
        $books = json_decode($bookData, true);

        # Alphabetize the books by title using Laravel’s Arr::sort
        $books = Arr::sort($books, function ($value) {
            return $value['title'];
        });
        
        return view('books/index', ['books' => $books]);
    }

    /**
     * GET /books/{slug}
     */
    public function show($slug)
    {
        # Load book data
        # @TODO: This code is redundant with loading the books in the index method
        $bookData = file_get_contents(database_path('books.json'));
        $books = json_decode($bookData, true);

        # Narrow down array of books to the single book we’re loading
        $book = Arr::first($books, function ($value, $key) use ($slug) {
            return $key == $slug;
        });

        return view('books/show', [
            'book' => $book
        ]);
    }

    /**
     *
     */
    public function filter($category, $subcategory)
    {
        return 'Show all books in these categories: ' . $category . ',' . $subcategory;
    }
}