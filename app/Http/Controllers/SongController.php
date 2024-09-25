<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('songs.index', ['songs' => $this->songs]);
    }

    public function show($index)
    {

        if (array_key_exists($index, $this->songs)) {
            return view('songs.show', [
                'song' => $this->songs[$index], 
                'index' => $index 
            ]);
        }
        return abort(404);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($index)
    {
    
        if (array_key_exists($index, $this->songs)) {
            return view('songs.edit', ['song' => $this->songs[$index], 'index' => $index]);
        }
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $index)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
