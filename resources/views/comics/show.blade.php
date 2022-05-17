@extends('layouts.home')

@section('title','comics')
@section('main-content')
<div class="container d-flex mt-5">
  <div class="single-photo">
    <img src="{{ $comics->thumb}}">
    <div class="photos">{{$comics->price}} €</div>
  </div>
  <div class="content ms-4">
    <p class="txt4">{{ $comics->title}}</p>
    <p class="txt5">{{$comics->series}}</p>
    <p class="txt5">Sale date: {{$comics->sale_date}}</p>
    <p class="txt5">Type: {{$comics->type}}</p>
    <p class="txt2"> {{$comics->description}}</p>
  </div>
</div>
@endsection
