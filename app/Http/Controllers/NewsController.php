<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request){
        $page = 0;
        $limit = 5;
        if ($request->has('page')) $page = $request->query('page');
        if ($request->has('limit')) $limit = $request->query('limit');
        return view('news', [
            'heading'=>'All News',
            'news' => News::skip($page*$limit)->take($limit)->get()
        ]);
    }

    public function show(News $id){
        return view('news', [
            'heading'=>'Single news',
            'news'=> [$id]
        ]);
    }

    public function create(){
        return view('create', []);
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'heading'=>'required',
            'link'=>'required',
        ]);

        News::create($formFields);

        return redirect('/')->with('message', 'News created successfully!');
    }
}
