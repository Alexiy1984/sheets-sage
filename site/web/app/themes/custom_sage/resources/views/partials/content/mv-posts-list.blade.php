@php
  $args=array(
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'meta_key'        => 'post_views_count',
    'orderby'         => 'meta_value_num',
    'posts_per_page'  => 10,
  );
  $mv_query = new WP_Query($args);
@endphp

@if ($mv_query->have_posts())
  <div class="mw-posts-list__container">
  <h3 class="mw-posts-list__header">Most viewed:</h3>
  <ul class="mw-posts-list">
  @while ($mv_query->have_posts()) @php $mv_query->the_post() @endphp
    <li>
      <a href="{{ get_permalink() }}">
        {!! get_the_title() !!}
      </a>
    </li>    
  @endwhile
  </ul>
  </div>
@endif
@php wp_reset_postdata() @endphp
