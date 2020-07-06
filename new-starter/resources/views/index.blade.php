@extends('layouts.app')

<!-- @section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection -->

@section('content')
<section class="posts">
<div class="container">
  <div class="row">
    <div class="col-md-3">

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
@endsection