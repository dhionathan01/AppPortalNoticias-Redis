<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use Illuminate\Support\Facades\Cache;
class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = [];
        /* $noticias = Noticia::orderByDesc('created_at')->limit(10)->get(); */
        // criar um dado dentro do bd Redis
        Cache::put('site', 'dhionathanjobim.com.br',  10);
        // Chave , valor, tempo em segundos para expirar o dado mem�ria

        //recuperar um dado dentro do bd Redis
        $site = Cache::get('site');
        echo $site;
        return view('noticia', compact(['noticias']));
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
     * @param  \App\Http\Requests\StoreNoticiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoticiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $Noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $Noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $Noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $Noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoticiaRequest  $request
     * @param  \App\Models\Noticia  $Noticia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoticiaRequest $request, Noticia $Noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $Noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $Noticia)
    {
        //
    }
}
