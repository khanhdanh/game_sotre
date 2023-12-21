<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('tbbook')->get();
        return view('book.index')->with(['books' => $books]);
    }
    public function create()
    {
        return view('book.create');
    }
    public function postCreate(Request $request)
    {
        $bookId = $request->input('bookId');
        $title = $request->input('title');
        $price = $request->input('price');
        DB::table('tbbook')->insert([
            'bookId' => intval($bookId),
            'title' => $title,
            'price' => intval($price)
        ]);
        return redirect()->action([BookController::class, 'index']);
    }
    public function update($id)
    {
        $book = DB::table('tbbook')
            ->where('bookId', intval($id))
            ->first();
        return view('book.update', ['b' => $book]);
    }
    public function postUpdate(Request $request, $id)
    {
        $title = $request->input('title');
        $price = $request->input('price');
        $b = DB::table('tbbook')
            ->where('bookId', intval($id))
            ->update(['title' => $title, 'price' => intval($price)]);
        return redirect()->action([BookController::class, 'index']);
    }
    public function delete($id)
    {
        $b = DB::table('tbbook')
            ->where('bookId', intval($id))
            ->delete();
        return redirect()->action([BookController::class, 'index']);
    }
}
