<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UtilisateurController extends Controller
{
    public function index()
    {
        $allUser = User::all();
        return view('pages.utilisateur.index',compact('allUser'));
    }

    public function edit($id)
    {
        $editUser = User::find($id);
        $editPhoto = Photo::all();
        return view('pages.utilisateur.edit',compact('editUser','editPhoto'));
    }

    public function update(Request $request,$id)
    {
        $updatePhoto = Photo::find($id);
        if ($request->file('url') != null) {
            Storage::delete('public/img/' . $updatePhoto->url);
            Storage::put('public/img/', $request->file('url'));            
            $updatePhoto->url = $request->file('url')->hashName();
            $updatePhoto->save();
        }
        $updateProfile = User::find($id);
        $updateProfile->name = $request->name;
        $updateProfile->firstname = $request->firstname;
        $updateProfile->age = $request->age;
        $updateProfile->email = $request->email;
        $updateProfile->role = $request->role;

        $updateProfile->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroyUtilisateur = User::find($id);
        $destroyUtilisateur->delete();
        
        return redirect()->back();
    }
}
