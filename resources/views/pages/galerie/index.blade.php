@extends('layouts.app')

@section('content')

<div class="py-12" style="width: 80vw">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 style="text-align: center; font-size:20px"><strong>
                <span style="color: red">Gallery</span>pages</strong></h1>
            </div>
        </div>
        <br>
        <div style="display: flex;gap:10%;flex-wrap:wrap">
            @foreach ($allImage as $item)
            <div style="width:15rem;display:flex; margin-bottom:2%" class="px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="mt-2">
                    <div>
                        <div>
                            <img style="width: 150px;height:170px" src="storage/img/{{$item->img}}" alt="">
                            <p>{{$item->categorie->nom }}</p>
                            <form action="/deleteImage/{{$item->id}}" method="post">
                                <button style="background-color: green; color:white; border-radius:15px; width:5rem" type="submit">
                                    <a class='text-decoration-none text-white' href="/download/{{$item->id}}">Télécharger</a>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach
        </div>
    </div>
</div>
@endsection