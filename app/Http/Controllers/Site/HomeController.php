<?php

namespace App\Http\Controllers\Site;

use App\Models\Bien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $biens = Bien::take(3)->get();

        return view('site.pages.home',compact('biens'));
    }

    public function all()
    {
        $biens = Bien::all();
        return view('site.pages.result',compact('biens'));
    }

    public function bien($id)
    {
        $bien = Bien::where('id',$id)->first();

        if(!$bien)
        {
            return back()->with('info','Bien introuvable');
        }

        return view('site.pages.bien',compact('bien'));
    }
}
