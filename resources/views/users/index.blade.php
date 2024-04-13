@extends('layouts.main')

@section('body')
    @foreach ($users as $user)
        <p class="text-red-500 text-lg my-4 text-wrap">{{ $user }}</p>
        <hr class="border-black"/>
    @endforeach
@endsection