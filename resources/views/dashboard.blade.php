@extends('layouts.app')
@section('content')
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <h1 style="text-align: center; font-size:20px"><strong>Welcome <span style="color: red">{{auth()->user()->name}}</span> to the dashboard</strong></h1>
              <div>
                  <p>Your details account :</p>
              </div> <br>
              <table style="border: solid black 1px; display:flex; justify-content:center">
                  <tr>
                      <th style="width: 21rem; border: solid black 1px">Name</th>
                      <th style="width: 21rem; border: solid black 1px">FirstName</th>
                      <th style="width: 21rem; border: solid black 1px">Age</th>
                      <th style="width: 21rem; border: solid black 1px">Email</th>
                      <th style="width: 21rem; border: solid black 1px">Image</th>
                      <th style="width: 21rem; border: solid black 1px">Rôle</th>
                  </tr>
                  <tr>
                      <th style="border: solid black 1px">{{auth()->user()->name}}</th>
                      <th style="border: solid black 1px">{{auth()->user()->firstname}}</th>
                      <th style="border: solid black 1px">{{auth()->user()->age}}</th>
                      <th style="border: solid black 1px">{{auth()->user()->email}}</th>
                      <th style="border: solid black 1px; display:flex; justify-content: center;align-item:center">
                        <img width="50%" height="50%" src="storage/img/{{Auth::user()->photo->url}}" alt="">
                      </th>
                      <th style="border: solid black 1px">Admin</th>
                  </tr>
              </table>
              <br><br>
              <button style="background-color: green; color:white; border-radius:15%; width:5rem">
                Edit
              </button>
          </div>
      </div>
  </div>
</div>
@endsection