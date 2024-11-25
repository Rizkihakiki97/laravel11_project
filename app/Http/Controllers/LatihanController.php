<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //method/function : kebiasan
    // visibilisasi : public, private, static
    public function index()
    {
        return  "Helo kami sedang belajar laravel";
    }

    public function edit($id)
    {
        return "Ini adalah form edit dengan nama param:" . $id;
    }
    public function delete($id)
    {
        return "Ini adalah form delete dengan id:" . $id;
    }
}
