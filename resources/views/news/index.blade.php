@extends('layouts.app', ['pageSlug' => 'index'])

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Author Name</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th class="d-flex justify-content-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataOrder as $item)
              <tr>
                <td class="text-center">{{$item->id}}</td>
                <td>{{$item->author_name}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->subtitle}}</td>
                <td class="td-actions text-right d-flex justify-content-center">
                    <a href="{{route('news.show', $item->id)}}" type="button" rel="tooltip" class="btn btn-info btn-sm btn-round btn-icon" style="margin-right: 5px">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg>
                    </a>
                    <a href="{{route('news.edit', $item->id)}}" type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon" style="margin-right: 5px">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                      </svg>
                    </a>
                    <form action="{{route('news.destroy', $item->id)}}" method="POST">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger btn-sm btn-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                          <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                      </button>
                    </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="40">Not found informations on DataBase</td>
              </tr>
            @endforelse
        </tbody>
    </table>
    <div class="form-group mt-4 mb-3 d-flex justify-content-center">
      <a href="{{route('news.create')}}" class="btn btn-success">Create News</a>
    </div>
@endsection
