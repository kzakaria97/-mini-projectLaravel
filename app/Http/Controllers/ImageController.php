<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategorie = Categorie::all();
        $allImage = Image::all();

        return view('pages.image.index',compact('allCategorie','allImage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCategorie = Categorie::all();
        $allImage = Image::all();

        return view('pages.galerie.index',compact('allCategorie','allImage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Image;
        $store->categorie_id = $request->categorie_id;
        Storage::put('public/img/', $request->file('img'));
        $store->img = $request->file('img')->hashName();
        // dd($request);
        $store->save();

        return redirect()->back()->with('succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageRequest  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image,$id)
    {
        $delete = Image::find($id);
        $delete->delete();
        Storage::delete('public/img/'.$delete->img);
        return redirect()->back();
    }
    public function download($id)
    {
        $download = Image::find($id);
        return Storage::download('public/img/'.$download->img);
    }
}
