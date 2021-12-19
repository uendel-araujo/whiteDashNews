@extends('layouts.app', ['pageSlug' => 'create'])

@section('content')
  <h1 class="d-flex justify-content-center mb-4 mt-4">Create Your News</h1>
  <div class="card">
    <div class="card-body">
      {!!Form::open()->post()->route('news.store')!!}
        @include('news._form')

        <div class="form-group mt-4 mb-3">
          {!!Form::submit("Create News")!!}
        </div>
      {!!Form::close()!!}
    </div>
  </div>  
@endsection