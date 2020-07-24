<?php

namespace App\Http\Controllers\Pub;

use Illuminate\Http\Request;
use MetaTag;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

    //Show result
    public function index(Request $request)
    {
       // MetaTag::setTags(['title' => 'результат поиска']);
        return view('pub.searchresult');
    }

    //search
    public function search()
    {


    }
}
