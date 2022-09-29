@extends('layouts.app')

@section('content')
<form action="{{route("update",$edit->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 style="text-align: center; font-size:20px"><strong>Welcome <span style="color: red">{{auth()->user()->name}}</span> to the Profile Settings</strong></h1>
                <div>
                    <p>Update your details account :</p>
                </div> <br>
                <label for="name">Name : </label>
                <input type="text" name="name" value="{{$edit->name}}" placeholder="Name">
                <label for="firstname">Firstname : </label>
                <input type="text" name="firstname" value="{{$edit->firstname}}" placeholder="FirstName">
                <label for="age">Age : </label>
                <input type="number" name="age" value="{{$edit->age}}" placeholder="Age">
                <br><br>
                <label for="email">Email : </label>
                <input type="email" name="email" value="{{$edit->email}}" placeholder="Email">
                <label for="role">Rôle : </label>
                <input type="text" name="role" value="{{$edit->role}}" placeholder="Role">
                <br>
                <br>
                <label for="avatar">Avatar : </label>
                <input type="file" name="url" value="{{$edit->url}}">
                <br><br>
                <button style="background-color: green; color:white; border-radius:15%; width:5rem" type="submit">
                    Update
                </button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection