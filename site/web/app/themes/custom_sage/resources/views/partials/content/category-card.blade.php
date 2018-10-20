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
    @php
      $cat_img = get_field('featured_image', 'category_'. $category->term_id .'');
      $cat_id = get_field('featured_image', 'category_'. $category->term_id .'', false);
    @endphp 
    @if ($category->name != 'Uncategorized')
      <a href="{{get_category_link($category->term_id)}}" class="category-card {{$bgcolors[$i % 4]}}"> 
        <h3>{{$category->name}}</h3>
        <div class="category-card__body">
          @if ($cat_img)
            <p class="category-card__description">{{$category->category_description}}</p>
            <img class="category-card__fimg" src="{{$cat_img['url']}}" alt="{{$cat_id}}">
            @else  
            <p class="category-card__description_noimage">{{$category->category_description}}</p>
          @endif  
        </div>
      </a>
      @php $i++ @endphp
    @endif
  @endforeach    
  
@endif
@php wp_reset_postdata() @endphp
