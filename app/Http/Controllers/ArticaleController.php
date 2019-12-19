<?php

namespace App\Http\Controllers;

use App\Articl;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articl::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
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
            'header' => 'required',
            'description' => 'required',
            'body' => 'required',
            'duration' => 'required',
        ]);



        $article = new Articl;
        $article->header = $request->header;
        $article->description = $request->description;
        $article->body = $request->body;
        $article->Date_debut =  Carbon::parse($request->debut);
        $article->Date_fin = $article->Date_debut->addDays($request->duration);
        $article->image = '';

        $article->save();
        $id = $article->id;
        return view('admin.articles.image', compact('id'));
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
    public function addImage(Request $request)
    {
        redirect()->route('article.index');
    }
}
