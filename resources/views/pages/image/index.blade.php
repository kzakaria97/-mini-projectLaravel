@extends('layouts.app')

@section('content')

<div class="py-12" style="width: 80vw">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 style="text-align: center; font-size:20px"><strong>Pictures page</strong></h1>
            </div>
            <h2><strong>Create your picture</strong></h2>
            <div>
                <form action="/storeImage" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="Categorie">Categorie :</label>
                    <select name="categorie_id" id="">
                        @foreach ($allCategorie as $item)
                            <option value="{{$item->id}}">
                                {{$item->nom}}  
                            </option>
                        @endforeach    
                    </select>  <br> <br>
                    <input type="file" name="img" id="">
                    <br><br>
                    <button style="background-color: green; color:white; border-radius:15px; width:10rem" type="submit">Create</button>
                </form>
            </div>
            <br>
            <div>
                <table class="table" style="border: solid black 1px; display:flex; justify-content:center">
                    <tr>
                        <th style="width: 21rem; border: solid black 1px">ID</th>
                        <th style="width: 21rem; border: solid black 1px">IMAGE</th>
                        <th style="width: 21rem; border: solid black 1px">CATEGORIE</th>
                        <th style="width: 21rem; border: solid black 1px">DELETE</th>
                    </tr>
                    @foreach ($allImage as $item)
                    <tr>
                        <th style="width: 21rem; border: solid black 1px">
                            {{$item->id}}
                        </th>
                        
                        <th style="border: solid black 1px; display:flex; justify-content: center;align-item:center">
                            <img width="50px" height="50px" src="storage/img/{{$item->img}}" alt="">
                          </th>
                        <th style="width: 21rem; border: solid black 1px">
                            {{-- {{dd($item->categorie)}} --}}
                            {{$item->categorie->nom }}
                        </th>
                        <th style="border: solid black 1px">
                            <form action="/deleteImage/{{$item->id}}" method="post">
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