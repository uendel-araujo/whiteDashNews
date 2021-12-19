@extends('layouts.app')

@section('content')
  <div class="card" style="width: 100%;">
    <div class="card-body">
      <h1 class="card-title">{{$item->title}}</h1>
      <h3 class="card-subtitle mb-2 text-muted">{{$item->subtitle}}</h3>
      <p class="card-text">{{$item->description}}</p>
      <p><strong>Author: {{$item->author_name}}</strong></p>
      <a href="{{route('news.index')}}" class="card-link">Back to Main Page</a>
    </div>
  </div>
@endsection