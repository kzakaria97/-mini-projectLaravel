@extends('layouts.app')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 style="text-align: center; font-size:20px"><strong>Welcome <span style="color: red">{{auth()->user()->name}}</span> to the Profile Settings</strong></h1>
            </div>
        </div>
    </div>
</div>
@endsection 