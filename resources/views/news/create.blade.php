@extends('layouts.app', ['pageSlug' => 'create'])

@section('content')
  <h1 class="d-flex justify-content-center mb-4 mt-4">Create Your News</h1>
  <div class="card">
    <div class="card-body">
      {!!Form::open()->post()->route('news.store')!!}
        @csrf
        
        <div class="form-group">
          {!!Form::text("author_name", "Author Name")!!}
        </div>
        <div class="form-group mt-2" >
          {!!Form::text("title", "Title")!!}
        </div>
        <div class="form-group mt-2">
          {!!Form::text("subtitle", "Subtitle")!!}
        </div>
        
        <div class="form-group mt-2">
          {!!Form::textarea("description", "News Description")!!}
        </div>

        <div class="form-group mt-4 mb-3">
          {!!Form::submit("Create News")!!}
        </div>
      {!!Form::close()!!}
    </div>
  </div>  
@endsection