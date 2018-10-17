@extends('layouts.app')

@section('content')
  @include('partials.main-page-header')

  @php
    $args=array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    );
    $query = new WP_Query($args);
  @endphp

  @if ($query->have_posts())
    <ol>
    @while ($query->have_posts()) @php $query->the_post() @endphp
      <li>
        <a href="{{ get_permalink() }}">
          {!! get_the_title() !!} : ({!! get_the_excerpt()!!})
        </a>
      </li>    
    @endwhile
  </ol>
  @endif
  @php wp_reset_postdata() @endphp

@endsection
