@extends('layouts.app')

@section('content')
<form action="{{route("updateCategorie",$edit->id)}}" method="post" enctype="multipart/form-data">
@csrf    
@method('PUT')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

            </div>
            <div>
                <p>Update your details account :</p>
            </div> <br>
            <label for="name">Name : </label>
            <input type="text" name="nom" value="{{$edit->nom}}" placeholder="Name">
        </div>
    </div>
</div>
</form>
@endsection