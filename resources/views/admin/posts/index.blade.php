@extends('layouts.app')

@section('title')
  | Elenco post
@endsection


@section('content')
<div class="container">
    <h1>Elenco dei post</h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo del Post</th>
          <th scope="col" colspan="3">Controlli</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>
              <a href="{{route('admin.posts.show', $post)}}" class="btn btn-warning">Visualizza</a>
            </td>
            <td>
              <a href="#" class="btn btn-primary">Modifica</a>
            </td>
            <td>
              <a href="#" class="btn btn-danger">Cancella</a>
            </td>
          </tr>
        @endforeach

        
      </tbody>
    </table>


    {{$posts->links()}}

</div>
@endsection
