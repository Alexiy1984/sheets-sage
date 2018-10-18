@php
  $args=array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
  );
  $my_query = new WP_Query($args);
@endphp

@if( $my_query->have_posts() )
  
  @php 
    $categories = get_categories();
    $bgcolors = array('bg-success', 'bg-danger', 'bg-warning' , 'bg-info');
    $i = 4;
  @endphp
  
  @foreach($categories as $category)  
    @if ($category->name != 'Uncategorized')
      <a href="{{get_category_link($category->term_id)}}" class="category-card {{$bgcolors[$i % 4]}}"> 
        <h3>{{$category->name}}</h3>
        <p>{{$category->category_description}}</p>
      </a>
      @php $i++ @endphp
    @endif
  @endforeach    
  
@endif
@php wp_reset_postdata() @endphp
