@extends('layouts.app')

@section('content')

<div  class="py-12" style="width: 80vw">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 style="text-align: center; font-size:20px"><strong>Welcome <span style="color: red">{{auth()->user()->name}}</span> to the Profile Settings</strong></h1>
            </div>
            <br>
            <div>
                <form action="/storeCategorie" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name">Name : </label>
                <input type="text" name="nom" placeholder="categorie name"> <br> <br>
                <button style="background-color: green; color:white; border-radius:15px; width:10rem" type="submit">Create</button>
                </form>
            </div>
            
            <br><br>
            <div>
                <table style="border: solid white 1px; display:flex; justify-content:center">
                    <tr style="background-color: black; color:white">
                        <th style="ccwidth: 21rem; border: solid white 1px">Id</th>
                        <th style="width: 21rem; border: solid white 1px">Name</th>
                        <th style="width: 21rem; border: solid white 1px">Edit
                        </th>
                        <th style="width: 21rem; border: solid white 1px">Delete
                            
                        </th>
                    </tr>
                    @foreach($cate as $item)
                        <tr>
                            <th style="border: solid black 1px">{{$item->id}}</th>
                            <th style="border: solid black 1px">{{$item->nom}}</th>
                            <th style="border: solid black 1px">
                                <button style="background-color: green; color:white; border-radius:15px; width:10rem">
                                    <a href="/{{$item->id}}/edit">Edit</a>
                                  </button>
                            </th>
                            <th style="border: solid black 1px">
                                <form action="/deleteCategorie/{{$item->id}}" method="post">
                                    <button style="background-color: green; color:white; border-radius:15px; width:10rem" type="submit">
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