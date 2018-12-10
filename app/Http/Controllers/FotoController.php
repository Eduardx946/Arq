<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\facades\Input;
use App\Foto;
use DB;
use Storage;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('postarfoto');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       $this->validate($request, [
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('imagem');

        //return $image;

    //    return $image;
        //$image = $request->imagem;  // your base64 encoded
       // $image = str_replace('data:image/png;base64,', '', $image);

        $img = base64_encode(file_get_contents($image));
        //$img = base64_encode($image);

        $foto = new Foto;
        $foto->descricao = Input::get('descricao');
        $foto->imagem = $img;
         $foto->nome = "sdsd";
        $foto->save();

            //return $foto;
        
        //return  $img;
       return redirect()->to(route('galeria.inicio'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


//    public function img(Request $request, $nome) {
  //      $response = \Response::make(\Storage::disk('public')->get($nome), 200);
    //        $response->header("Content-Type", \Storage::disk('public')->mimeType($nome))->header("Content-Size", \Storage::disk('public')->size($nome));
      //  return $response;
    //}

}
