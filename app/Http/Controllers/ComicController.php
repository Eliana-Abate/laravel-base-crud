<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all()->sortBy('title');
        return view('comics.index', compact('comics'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:comics|max: 100',
            'series' => 'required|string|max: 50',
            'price' => 'required|min:1|max:6',
            'sale_date' => 'required|max: 10', 
            'description' => 'min:0|unique:comics',
            'thumb' => 'min:0|unique:comics',
            'type' => 'min:0|max: 20'
        ]);
        
        $data = $request->all();

        $comic=Comic::create($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string|unique:comics|max: 100',
            'series' => 'required|string|max: 50',
            'price' => 'required|min:1|max:6',
            'sale_date' => 'required|max: 10', 
            'description' => 'min:0|unique:comics',
            'thumb' => 'min:0|unique:comics',
            'type' => 'min:0|max: 20'
        ]);

        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('action', 'delete')->with('feedback', "$comic->title è stato eliminato con successo!");
    }
}
