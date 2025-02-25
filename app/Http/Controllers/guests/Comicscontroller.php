<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class Comicscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Comic::all();
        $data = [
            "comics"=> $all
        ];
        return view("comics.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Comic $comic)
    {
        $data = $request->validate([
            "title" => "required|min:3|max:200", //perchè 200? v. migration
            "description" => "required|min:12|max:255", //perchè 255? v. migration
            "price" => "required|decimal:2|max:999.99|min:0.99",
            "drop_date" => "required|date",
            "thumb" => "required|max:255",
        ]);

        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.show', $newComic);

        // $comic->title = $data['title'];
        // $comic->drop_date = $data['drop_date'];
        // $comic->price = $data['price'];
        // $comic->thumb = $data['thumb'];
        // $comic->description = $data['description'];
        // $comic->save();
        // return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        $data = [
            "comic"=> $comic
        ];
        return view("comics.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $data = [
            "comic" => $comic
        ];

        return view("comics.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            "title" => "required|min:3|max:200", //perchè 200? v. migration
            "description" => "required|min:12|max:2000", //perchè 255? v. migration
            "price" => "required|decimal:2|max:999.99|min:0.99",
            "drop_date" => "required|date",
            "thumb" => "required|max:2000",
        ]);
        $comic->update($data);

        // $data = $request->all();
        // $comic->title = $data['title'];
        // $comic->drop_date = $data['drop_date'];
        // $comic->price = $data['price'];
        // $comic->thumb = $data['thumb'];
        // $comic->description = $data['description'];
        // $comic->save();
        return redirect()->route('comics.show', $comic)->with('message' , 'comic updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
