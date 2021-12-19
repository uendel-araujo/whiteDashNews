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