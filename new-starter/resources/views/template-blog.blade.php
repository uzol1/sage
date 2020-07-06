@extends('layouts.app')
{{--
  Template Name: blog
--}}
@section('content')
<section class="posts">
<div class="container">
  <div class="row">
    <div class="col-md-3">
@if(is_active_sidebar( 'sidebar-blog' ))    
    @php dynamic_sidebar('sidebar-blog') @endphp
    @endif
    </div>
    <div class="col-md-9">
      <div class="row">
        @php
        $args= [
         'posts_per_page' => -1,
         'order'=>'DESC',
         'order_by'=> 'date' , 
         'post_type' => 'testimony',     
        ];
        $query= new WP_Query($args);
        @endphp
        @while($query->have_posts()) @php $query->the_post() @endphp
        <div class="col-md-4">
          <div class="image">
              @if(has_post_thumbnail())
              {{the_post_thumbnail('small')}}
              @endif
          </div>
          <div class="title">
            {{the_title()}}
          </div>
        </div>
        @endwhile
        @php wp_reset_postdata() @endphp
      </div>
    </div>
  </div>
</div>
</section>
<footer>
 @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
      @endif
</footer>
@endsection