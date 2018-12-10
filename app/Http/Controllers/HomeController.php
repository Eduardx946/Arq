<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

   public function create(Request $request) {

   }

   public function store(Request $request) {
    
   }

   public function show(Request $request) {
    
   }

   public function update(Request $request) {
    
   }

   public function destroy(Request $request) {
    
   }
    
    public function edit(Request $request) {
    
   }

    public function adicionartexto(Request $dados)
    {
        return 'Chegay';
    }

     public function adicionarfoto(Request $dados)
    {
        return 'Chegay';
    }
}
