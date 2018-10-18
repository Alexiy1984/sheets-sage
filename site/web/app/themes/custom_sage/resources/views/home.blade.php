@extends('layouts.app')

@section('content')
  @include('partials.main-page-header')

  <div class="row">
    <div class="col-4">
      @include('partials.content.posts-list')
    </div>

    <div class="col-8">
      @include('partials.content.categories-list')
    </div>
  </div>  

@endsection

