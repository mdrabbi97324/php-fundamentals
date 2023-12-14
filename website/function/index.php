<?php 

$books = [
    [
        'name' => 'Do Androids Dream of Electric Ship',
        'author' => 'Phillip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example1.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andry Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example2.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andry Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example3.com'
    ]
    ];

// $filterByAuthor = function($books, $author) { // anonymous function/Lamda Function

//     $filteredBooks = [];
//     foreach($books as $book) {
//         if($book['author'] === $author ) {
//             $filteredBooks[] = $book;
//         }
//     }
//     return $filteredBooks;
// };


// function filter($items, $key, $value) { // anonymous function/Lamda Function

//     $filteredItems = [];
//     foreach($items as $item) {
//         if($item[$key] > $value ) {
//             $filteredItems[] = $item;
//         }
//     }
//     return $filteredItems;
// };



$movies = [
    [
        'name' => 'Titanic',
        'releaseYear' => 1997
    ],
    [
        'name' => 'The Matrix',
        'releaseYear' => 1999
    ],
    [
        'name' => 'X-men',
        'releaseYear' => 2000
    ],
    [
        'name' => 'Memento',
        'releaseYear' => 2000
    ],
    [
        'name' => 'Forest Gump',
        'releaseYear' => 1994
    ],
    [
        'name' => 'The Dark Knight',
        'releaseYear' => 2008
    ],
    [
        'name' => 'Avatar',
        'releaseYear' => 2009
    ]
    ];

// filter movies
// function filterByDate($movies) {
//     $filteredMovies = [];
//     foreach($movies as $movie){
//         if($movie['releaseYear'] < 2000){
//             $filteredMovies[] = $movie;
//         }
//     }
//     return $filteredMovies;
// };

function filter($items, $fn){
    $filteredItems = [];
    foreach($items as $item){
        if($fn($item)){
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
}


// $filteredBooks = filter($books, function($book) {
//     return $book['releaseYear'] < 2000;
// }); // extract variable

   $filteredBooks = array_filter($books, function($book){
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <=2021;
   });

   $filteredMovies = array_filter($movies, function($movie){
    return $movie['releaseYear'] <= 2000;
   });


require "index.view.php";
// include "index.view.php";