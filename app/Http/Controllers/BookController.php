<?php

namespace App\Http\Controllers;

abstract class Controller
{
     public function create(): View
    {
        return view('books.create');
    }
}
