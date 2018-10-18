@php
  $args=array(
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'orderby'         => 'title',
    'order'           => 'ASC',
    'posts_per_page'  => -1,
  );
  $query = new WP_Query($args);
@endphp

@if ($query->have_posts())
  <input class="scrolled-list__search" type="text" id="ListInput" placeholder="Search for names..">
  <div class="scrolled-list__wrapper">
  <ul class="scrolled-list" id="scrolled-list">
  @while ($query->have_posts()) @php $query->the_post() @endphp
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
