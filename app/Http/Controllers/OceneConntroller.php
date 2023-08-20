<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use Illuminate\Http\Request;

class OceneConntroller extends Controller
{
    //
    public function addGrade(Request $request){
        $request->validate([
            "profesor"=>"required|string",
            "predmet"=>"required|string",
            "ocena"=>"required|int|min:1|max:5",

        ]);
        Ocene::create([
            "profesor"=>$request->get('profesor'),
            "predmet"=>$request->get('predmet'),
            "ocena"=>$request->get('ocena'),

        ]);
        return redirect("/");
    }
}
