<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function profile()
    {
        return view('perfil');
    }
    public function recluadmin()
    {
        return view('home2');
    }

    public function profileUpdate(Request $request){
        //validation rules

        $request->validate([
            'name' =>'min:4|string|max:255',
            'email'=>'email|string|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->get['name'];
        $user->email = $request['email'];
        $user->grado = $request['grado'];
        $user->habilidad1 = $request['habilidad1'];
        $user->habilidad2 = $request['habilidad2'];
        $user->habilidad3 = $request['habilidad3'];
        $user->cv = $request['cv'];
        $user->save();
        return back()->with('message','Profile Updated');
    }
}
