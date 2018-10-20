@extends('layouts.app')

@section('content')
  @include('partials.main-page-header')

  <div class="row">
    <div class="col-12 col-lg-4 mb-3 d-flex flex-column">
      @include('partials.content.posts-list')
      @include('partials.content.mv-posts-list')
    </div>

    <div class="col-12 col-lg-8">
      @include('partials.content.category-card')
    </div>
  </div>  

@endsection

