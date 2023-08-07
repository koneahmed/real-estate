<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\TypeBien;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BienController extends Controller
{
    public function index()
    {
        $user = request()->user();

        $biens = Bien::where('bailleur_id', $user->id)->get();

        return view('dashboard.biens.index',compact('biens'));
    }

    public function create()
    {
        $typebiens = TypeBien::all();
        return view('dashboard.biens.create',compact('typebiens'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'libelle' => 'required',
            'type_bien_id'=>'required',
            'localisation'=>'required',
            'superficie'=>'required',
            'operation'=>'required',
            'prix'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = public_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        $imageName = Str::random(20) . '.' . $request->image->extension();
        $request->image->move(public_path(), $imageName);

        $path =  public_path(). DIRECTORY_SEPARATOR .$imageName  ;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        Bien::create([
            'type_operation'=> $request->operation,
            'libelle'=> $request->libelle,
            'localisation'=> $request->localisation,
            'superficie'=> $request->superficie,
            'nombre_piece'=> $request->nombre_piece,
            'nombre_douche'=> $request->nombre_douche,
            'nombre_garage'=> $request->nombre_garage,
            'prix'=> $request->prix,
            'image'=> $base64,
            'type_bien_id'=> $request->type_bien_id,
            'bailleur_id'=> $request->user()->id
        ]);

        return back()->with('success','Bien enregistré avefc succès');
    }
}
