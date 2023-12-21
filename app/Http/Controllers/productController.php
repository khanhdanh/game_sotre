<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function index()
    {
        $books = DB::table('tbproduct')->get();
        return view('product.index')->with(['books' => $books]);
    }
    public function create()
    {
        return view('product.create');
    }


    public function postCreate(Request $request)
    {
        $name = $request->input('name');
        $gameconsole = $request->input('gameconsole');
        $brand = $request->input('brand');
        $type = $request->input('type');
        $detail = $request->input('detail');
        $price = $request->input('price');
        DB::table('tbproduct')->insert([
            'name' => ($name),
            'gameconsole' => ($gameconsole),
            'brand' => ($brand),
            'type' => ($type),
            'detail' => ($detail),
            'price' => ($price)
        ]);
        return redirect()->action([productController::class, 'index']);
    }
    public function update($name)
    {
        $book = DB::table('tbproduct')
            ->where('name', ($name))
            ->first();
        return view('product.update', ['b' => $book]);
    }
    public function postUpdate(Request $request, $name)
    {
        $gameconsole = $request->input('gameconsole');
        $brand = $request->input('brand');
        $type = $request->input('type');
        $detail = $request->input('detail');
        $price = $request->input('price');
        $b = DB::table('tbproduct')
            ->where('name', ($name))
            ->update([
                'name' => ($name),
                'gameconsole' => ($gameconsole),
                'brand' => ($brand),
                'type' => ($type),
                'detail' => ($detail),
                'price' => ($price)
            ]);
        return redirect()->action([productController::class, 'index']);
    }
    public function delete($name)
    {
        $b = DB::table('tbproduct')
            ->where('name', ($name))
            ->delete();
        return redirect()->action([productController::class, 'index']);
    }
}
