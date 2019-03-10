@extends('layout.admin')

@section('title')
    Editar Post
@endsection

@section('content')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <form class="form-horizontal" method="post" action="{{ route('posts.update', $post->id) }}">
              {{ csrf_field() }}
              {{ method_field('PUT') }}

              @include('admin.posts.form')
            </form>

        <a href="{{ route('posts.index') }}">Volta para a lista de posts</a>
      </div>
    </div>
@endsection
