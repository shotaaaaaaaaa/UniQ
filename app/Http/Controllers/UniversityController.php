<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Category;

class UniversityController extends Controller
{
    public function college(Category $category)
    {
        $university = University::where('category_id' , '=' , $category->id)->get();
        return view('posts/college')->with(['universities' => $university]);
    }
}
