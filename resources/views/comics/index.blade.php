@extends('layouts.home')

@section('title','comics')
@section('main-content')
    <div class="container d-flex flex-wrap">
        @foreach ($comics as $comic)
            <div class="cardcontainer my-4">
                <div class="photo">
                    <img src="{{ $comic->thumb}}">
                    <div class="photos">{{$comic->price}} €</div>
                </div>
                <div class="content">
                    <p class="txt4">{{ $comic->title}}</p>
                    <p class="txt5">{{$comic->series}}</p>
                    <a href="{{route("comics.show", $comic->id)}}">
                        <button class="btn btn-outline-primary mx-auto">Read More</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection