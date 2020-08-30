<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Section;
Use App\Book;
class BooksController extends Controller
{ /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.index')->with('books',Book::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.c_book')->with('sections',Section::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            "title"     => "required",
            "content"   => "required",
            "section_id"   => "required",
            "featured"  => "required|image",
            // "tags"   => "required"

        ]);


        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('upload/imgbooks',$featured_new_name);



        $book = Book::create([
            "title"    => $request->title,
            "content"  => $request->content,
            "section_id"  => $request->section_id,
            "featrued" => 'upload/imgbooks/'.$featured_new_name,
            "slug"    => str_slug($request->title), // my new post => my-new-post
         ]);

        // $post -> tags()->attach($request->tags);

         return redirect()->back();
         // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit_book')->with('books',$book)
        ->with('Sections',Section::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $book = Book::find($id);

        $this->validate($request,[
            "title"    => "required",
            "content"  => "required",
            "section_id"  => "required"

        ]);


        if ( $request->hasFile('featured')  ) {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('upload/imgbooks/',$featured_new_name);

            $book->featrued = 'upload/imgbooks/'.$featured_new_name;

        }

       // dd($post);
        $book->title =  $request->title;
        $book->content =  $request->content;
        $book->section_id = $request->section_id;
        $book->save();

      //  $book->tags()->sync($request->tags);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book -> delete($id);
        return redirect()->back();
    }


    public function trashed()
    {
        $book = Book::onlyTrashed()->get();
      // dd($post);
       return view('books.softdeleted')->with('books',$book);
    }


    public function hdelete($id)
    {
        $book = Book::withTrashed()->where('id',$id)->first();
        $book->forceDelete();
        return redirect()->back();
    }


    public function restore($id)
    {
        $book = Book::withTrashed()->where('id',$id)->first();
        $book->restore();
        return redirect()->route('books.index');
    }

}
