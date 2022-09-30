@extends('layouts.app')

@section('content')

<div class="py-12" style="width: 80vw">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 style="text-align: center; font-size:20px"><strong>Welcome <span style="color: red">{{auth()->user()->name}}</span> to the Profile Settings</strong></h1>
            </div>
            <div>
                <table class="table" style="border: solid black 1px; display:flex; justify-content:center">
                    <tr>
                        <th style="width: 21rem; border: solid black 1px">ID</th>
                        <th style="width: 21rem; border: solid black 1px">EMAIL</th>
                        <th style="width: 21rem; border: solid black 1px">NAME</th>
                        <th style="width: 21rem; border: solid black 1px">AGE</th>
                        <th style="width: 21rem; border: solid black 1px">IMAGE</th>
                        <th style="width: 21rem; border: solid black 1px">EDIT</th>
                        <th style="width: 21rem; border: solid black 1px">DELETE</th>
                    </tr>
                    @foreach ($user as $item)
                    <tr>
                        <th style="width: 21rem; border: solid black 1px">
                            {{$item->id}}
                        </th>
                        
                        <th style="width: 21rem; border: solid black 1px">
                            {{$item->email}}
                        </th>
                        <th style="width: 21rem; border: solid black 1px">
                            {{$item->name}}
                        </th>
                        <th style="width: 21rem; border: solid black 1px">
                            {{$item->age}}
                        </th>
                        <th style="border: solid black 1px; display:flex; justify-content: center;align-item:center">
                            <img width="50px" height="50px" src="storage/img/{{$item->photo->url}}" alt="">
                        </th>
                        <th style="border: solid black 1px">
                            <button style="background-color: green; color:white; border-radius:15px; width:5rem">
                                <a href="/{{$item->id}}/editUtilisateur">Edit</a>
                              </button>
                        </th>
                        <th style="border: solid black 1px">
                            <form action="/deleteUtilisateur/{{$item->id}}" method="post">
                                <button style="background-color: green; color:white; border-radius:15px; width:5rem" type="submit">
                                @csrf
                                @method('DELETE')
                                Delete
                                </button>
                            </form>
                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection