@extends('layouts.home')

@section('title','comics')
@section('main-content')
  <div class="container mt-5">
    <form class="row g-3" action="{{route("comics.store")}}" method="post">
      @csrf
      <div class="col-md-6">
        <label for="inputTitle" class="form-label">Title</label>
        <input type="text" class="form-control" id="inputTitle" name="title">
      </div>
      <div class="col-md-6">
        <label for="inputDate" class="form-label">Sale date</label>
        <input type="date" class="form-control" id="inputDate" name="sale_date">
      </div>
      <div class="col-12">
        <label for="inputDescription" class="form-label">Description</label>
        <input type="text" class="form-control" id="inputDescription" placeholder="Description of comics" name="description">
      </div>
      <div class="col-12">
        <label for="inputThumb" class="form-label">Thumb</label>
        <input type="text" class="form-control" id="inputThumb" placeholder="Url" name="thumb">
      </div>
      <div class="col-md-6">
        <label for="inputType" class="form-label">Type</label>
        <input type="text" class="form-control" id="inputType" name="type">
      </div>
      <div class="col-md-4">
        <label for="inputSeries" class="form-label">Series</label>
        <input type="text" class="form-control" id="inputSeries" name="series">
      </div>
      <div class="col-md-2">
        <label for="inputPrice" class="form-label">Price</label>
        <input type="number" class="form-control" id="inputPrice" name="price">
      </div>
      <div class="col-md-2">
        <button class="btn btn-outline-primary">send</button>
      </div>
    </form>
  </div>
@endsection
