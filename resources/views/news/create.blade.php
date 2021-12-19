@extends('layouts.app', ['pageSlug' => 'create'])

@section('content')
  <h1 class="d-flex justify-content-center mb-4 mt-4">Create Your News</h1>
  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{route('news.store')}}">
        @csrf
        
        <div class="form-group">
          <label for="Input_Author_Name">Author Name</label>
          <input type="text" name="author_name" class="form-control" id="Input_Author_Name"  placeholder="Uendel Ives">
        </div>
        <div class="form-group mt-2" >
          <label for="Input_Title">News Title</label>
          <input type="text" name="title" class="form-control" id="Input_Title"  placeholder="The Flu H2N3">
        </div>
        <div class="form-group mt-2">
          <label for="Input_Sutitle">News Subtitle</label>
          <input type="text" name="subtitle" class="form-control" id="Input_Subtitle"  placeholder="The firts case of H2N3 in Alagoinhas - BA">
        </div>
        
        <div class="form-group mt-2">
          <label for="Textarea_News_Description">News Description</label>
          <textarea  name="description" class="form-control" id="Textarea_News_Description"  rows="10"></textarea>
        </div>

        <div class="form-group mt-4 mb-3">
          <input class="btn btn-success" type="submit" value="Create News">
        </div>
      </form>
    </div>
  </div>  
@endsection