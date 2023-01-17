<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joke;


class JokesController extends Controller
{
    public function index(){
        return ['All Jokes'=>Joke::all()];
    }

    public function show($id){
        return Joke::find($id);
    }

    public function store(Request $request){
        $joke = new Joke;
        $joke->catagory = $request->catagory;
        $joke->type = $request->type;
        $joke->joke = $request->joke;
        $joke->save();

        if($joke){
            return $joke;
        }
        else{
            return ['msg'=>'Something went wrong!'];
        }
    }

    // need patch
    public function edit(Request $request, $id){
        $joke = Joke::where('id', $id)->update([
            'catagory' => $request->catagory,
            'type' => $request->type,
            'joke' => $request->joke,
        ]);
        return response()->json($joke);
    }

    public function destroy($id){
        $joke = Joke::where('id', $id)->delete();
        if($joke){
            return ['msg'=>'Deleted'];
        }
        else{
            return ['msg'=>'Something went wrong'];
        }
    }
}
