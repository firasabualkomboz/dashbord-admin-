<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/library', function () {
    return view('library.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// route Sections
Route::get('/Sections/index', 'SectionController@index')->name('Sections.index');
Route::get('/Sections/c_section', 'SectionController@create')->name('Sections.c_section');
Route::get('/Sections/edit_section/{id}', 'SectionController@edit')->name('Sections.edit_section');
Route::get('/Sections/delete/{id}', 'SectionController@destroy')->name('Sections.delete');
Route::POST('/Sections/update/{id}', 'SectionController@update')->name('Sections.update');
Route::POST('/Sections/store', 'SectionController@store')->name('Sections.store');



// Route::get('/posts', 'PostController@index')->name('posts');


// Route::get('/post/create', 'PostController@create')->name('posts.create');
// Route::POST('/post/store', 'PostController@store')->name('posts.store');


// route books
Route::get('/books/index', 'BooksController@index')->name('books.index');
Route::get('/books/c_book', 'BooksController@create')->name('books.c_book');
Route::POST('/books/c_book', 'BooksController@store')->name('books.store');
Route::get('/books/edit/{id}', 'BooksController@edit')->name('books.edit_book');
Route::POST('/books/update/{id}', 'BooksController@update')->name('books.update');
Route::get('/books/delete/{id}', 'BooksController@destroy')->name('books.delete');
Route::get('/books/trashed', 'BooksController@trashed')->name('books.trashed');
Route::get('/books/hdelete/{id}', 'BooksController@hdelete')->name('books.hdelete');
Route::get('/books/restore/{id}', 'BooksController@restore')->name('books.restore');


Route::get('/books/edit_book', function () {return view('books.edit_book');});
// Route::get('/books/index', function () {return view('books.index');});


// Route::get('/authors/c_authors', function () {return view('authors.c_authors');});
// Route::get('/authors/edit_author', function () {return view('authors.edit_author');});
// Route::get('/authors/index', function () {return view('authors.index');});

// Route::get('/Sections/c_section', 'CategoriesController@create')->name('Sections.c_section');

