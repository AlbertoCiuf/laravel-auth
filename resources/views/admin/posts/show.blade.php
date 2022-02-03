@extends('layouts.app')

@section('title')
  {{$post->title}}
@endsection

@section('content')
<div class="container">

  @if (session('success'))
  <div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
  @endif

  <h1>{{$post->title}}</h1>
  <p>
    {{$post->content}}
  </p>

  <a href="{{route('admin.posts.index')}}" class="btn btn-warning">Torna alla lista</a>
</div>
@endsection