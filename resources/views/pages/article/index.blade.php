@extends('layouts.app')

@section('content')

<div class="py-12" style="width: 80vw">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin-bottom: 1%">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 style="text-align: center; font-size:20px"><strong><span style="color: red">Articles</span> page</strong></h1>
            </div>
        </div>
        <div>
            <form action="/createArticle" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name">Title:</label><br>
                <input type="text" name='title' style="width: 46rem">
                <br>
                <label for="description">Description:</label><br>
                <textarea name="description" id="" cols="80" rows="7"></textarea> <br>
                <button style="background-color: green; color:white; border-radius:15px; width:10rem" type="submit">Create</button>
                <br> <br>
            </form>
        </div>
        <div style="display: flex; flex-wrap:wrap">
            @foreach ($article as $item)
            <div style="width: 65rem; margin-bottom:2%" class="px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800" style="margin-bottom: 2%">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-light text-gray-600 dark:text-gray-400">{{$item->created_at}}</span>
                    <button style="background-color: green; color:white; border-radius:15px; width:5rem">
                        <a href="/{{$item->id}}/editArticle">Edit</a>
                      </button>
                </div>
            
                <div class="mt-2">
                    <a href="#" class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">{{$item->title}}</a>

                    <p class="mt-2 text-gray-600 dark:text-gray-300">
                        {{$item->description}}
                    </p>
                </div>
            
                <div class="flex items-center justify-between mt-4">
                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline"><form action="/deleteArticle/{{$item->id}}" method="post">
                        <button style="background-color: green; color:white; border-radius:15px; width:10rem" type="submit">
                        @csrf
                        @method('DELETE')
                        Delete
                        </button>
                    </form></a>
            
                    <div class="flex items-center">
                        <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="storage/img/{{$item->user->photo->url}}">
                            {{$item->user->name}}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection 