@extends('layouts.app')

@section('content')

<div class="py-12" style="width: 80vw">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-bottom: 2%">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 style="text-align: center; font-size:20px"><strong>Edit your<span style="color: red"> article</span></strong></h1>
            </div>
        </div>
        <div style="width: 65rem; margin-bottom:2%" class="px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800" style="margin-bottom: 2%">
            <div class="mt-2">
                <form action="/{{$edit->id}}/updateArticle" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$edit->title}}" id="">
                <br>
                <label for="description">Description</label> <br>
                <textarea value="{{$edit->description}}" name="description" id="" cols="80" rows="7">{{$edit->description}}</textarea>
                <br>
                <button style="background-color: green; color:white; border-radius:15%; width:5rem" type="submit">
                    Update
                </button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection