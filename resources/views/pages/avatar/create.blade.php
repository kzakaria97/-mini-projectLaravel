@extends('layouts.app')
@section('content')

<div class="py-12" style="width: 80vw">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 style="text-align: center; font-size:20px"><strong>Welcome <span style="color: red">{{auth()->user()->name}}</span> to the Avatar page</strong></h1><br>
              <h2><strong>Create a new avatar</strong></h2>
              <br>
            <div>
                <form action="/create" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="name">Name :</label>
                    <input type="text" name='name' placeholder="name"> <br> <br>
                    <input type="file" name="url" id="">
                    <button style="background-color: green; color:white; border-radius:15px; width:10rem" type="submit">Create</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection