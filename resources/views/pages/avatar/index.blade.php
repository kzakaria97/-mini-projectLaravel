@extends('layouts.app')

@section('content')

<div class="py-12" style="width: 80vw">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 style="text-align: center; font-size:20px"><strong>Welcome <span style="color: red">{{auth()->user()->name}}</span> to the Avatar page</strong></h1><br>
              <div>
                <button style="background-color: green; color:white; border-radius:15px; width:10rem">
                    <a href="{{route('newAvatar')}}">
                        Create new avatar
                    </a>
                </button>
                <br>
            </div>
                <div>
                    <p>All avatars :</p>
                </div><br>
                <div style="display: flex; justify-content:center; flex-wrap: wrap; gap:5rem">
                    @foreach ($avatar as $item)
                    <div style="display: flex;flex-direction:column;align-items:center; justify-content:center; flex-wrap: wrap; width:15rem" class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img width="50%" height="50%" src="{{asset('storage/img/'.$item->url)}}">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">
                                Name : {{$item->name}}
                            </div>
                        </div>
                        <div>
                            <form action="/delete/{{$item->id}}" method="post">
                                <button style="background-color: green; color:white; border-radius:15px; width:5rem">
                                @csrf
                                @method('DELETE')
                                Supprimer
                                </button>
                            </form>
                        </div>
                      </div>   
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection