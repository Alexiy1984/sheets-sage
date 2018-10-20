<article  class="post-card bg-primary align-top" @php post_class() @endphp>
    <header>
      <h2 class="entry-title post-card__header"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
</article>
