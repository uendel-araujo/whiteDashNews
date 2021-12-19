@extends('layouts.app', ['pageSlug' => 'edit'])

@section('content')
  <h1 class="d-flex justify-content-center mb-4 mt-4">Edit Your News</h1>
  <div class="card">
    <div class="card-body">
      {!!Form::open()->put()->route('news.update', [$item->id])->fill($item)!!}
        @include('news._form')
        <div class="form-group mt-4 mb-3">
          <input class="btn btn-success" type="submit" value="Edit News">
        </div>
      {!!Form::close()!!}
    </div>
  </div>  
@endsection