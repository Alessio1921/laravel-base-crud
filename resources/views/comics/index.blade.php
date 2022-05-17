@extends('layouts.home')

@section('title','comics')
@section('main-content')
    <div class="container d-flex flex-wrap">
        @foreach ($comics as $comic)
            <div class="cardcontainer my-4">
                <a href="{{route("comics.show", $comic->id)}}">
                    <div class="photo">
                        <img src="{{ $comic->thumb}}">
                        <div class="photos">{{$comic->price}} €</div>
                    </div>
                    <div class="content">
                        <p class="txt4">{{ $comic->title}}</p>
                        <p class="txt5">{{$comic->series}}</p>
                        {{-- <p class="txt2"> {{$comic->description}}</p> --}}
                        <button class="btn btn-outline-primary mx-auto">Read More</button>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection