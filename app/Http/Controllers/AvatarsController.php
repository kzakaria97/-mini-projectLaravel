<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarsController extends Controller
{
    public function index()
    {
        $avatar = Photo::all();
        return view('pages.avatar.index',compact('avatar'));
    }
    public function create()
    {
        return view('pages.avatar.create');
    }

    public function store(Request $request)
    {
        $storePhoto = new Photo;
        Storage::put('public/img/', $request->file('url'));
        $storePhoto->url = $request->file('url')->hashName();
        $storePhoto->name = $request->name;
        $storePhoto->save();

        return redirect()->back();
    }
    public function destroy($id)
    {
        $users = User::where('photo_id','=',$id)->get();
        foreach($users as $user)
        {
            $user->photo_id=1;
            $user->save();
        }
        $delete = Photo::find($id);
        $delete->delete();
        Storage::delete('public/img/'.$delete->url);
        return redirect()->back();
    }

}
