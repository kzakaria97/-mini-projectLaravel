<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'max:110'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'photo_id' => ['required','string','mimes:jpeg,png,jpg,gif,svg','max:1024','dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $storePhoto = new Photo;
        Storage::put('public/img/', $request->file('url'));
        $storePhoto->url = $request->file('url')->hashName();
        $storePhoto->save();

        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'age' => $request->age,
            'email' => $request->email,
            'photo_id' => $storePhoto->id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
