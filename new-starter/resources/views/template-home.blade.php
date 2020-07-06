{{--
  Template Name: custom Temp
--}}
@extends('layouts.app')

@section('content')
    	<!-- banner section starts from here -->
	<section class="top-banner">
		<div class="container">@php
		$why_choose_chromeguard=get_field('why_choose_chromeguard_section');
		$image=$why_choose_chromeguard['image'];  @endphp
			<div class="section-wrap">
				<div class="heading">
					<h3>{{ $why_choose_chromeguard['title'] }}</h3>
				</div>
				<div class="banner-image">
					<figure>
						<img src="{{{ $image['url'] }}}">
					</figure>
				</div>
			</div>
		</div>
	</section>

	<!-- banner section ends from here -->

	<!-- chromeguard-history starts from here -->

	<section class="chromeguard-history">
		<div class="container">
			<div class="section-wrap">
				<div class="heading">
					<h3>{{ $why_choose_chromeguard['sub_title']}}</h3>
				</div>
				<div class="content-description">
					{{ $why_choose_chromeguard['content'] }}
				</div>
			</div>
		</div>
	</section>

	<!-- chromeguard-history ends from here -->

	<!-- who-we-are section starts from here -->
	<section class="who-we-are-section">@php 
	$who_are_we_section = get_field('who_are_we_section');
	$team_members =$who_are_we_section['team_members'] @endphp
		<div class="container">
			<div class="section-wrap">
				<div class="heading">
					<h3> {{ $who_are_we_section['who_are_we_title'] }}</h3>
				</div>
				<div class="sub-heading">
					<h5>{!! $who_are_we_section['who_are_we_sub_title'] !!}</h5>
				</div>
				<div class="content-description">
					{!! $who_are_we_section['content'] !!}
				</div>
				<div class="our-team">
					<div class="row-here">
						@foreach($team_members as $team)
							<div class="column">
								<div class="team-image">
									<figure>
										<img src="{{ $team['member_image']['url']}}">
									</figure>
								</div>
								<div class="content">
									<h3>{{ $team['member_name']}}</h3>
									<p>{{$team['member_position']}}</p>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- who-we-are section starts from here -->

	<!-- what-we-do section starts from here -->

	<section class="what-we-do-section">
		<div class="container">@php
		$what_we_do = get_field('what_we_do_section');
		$image 		= $what_we_do['image']; @endphp
			<div class="section-wrap">
				<div class="heading">
					<h3>{!! $what_we_do['what_we_do_title'] !!}</h3>
				</div>
				<div class="sub-heading">
					<h5>{!! $what_we_do['what_we_do_sub_title'] !!}</h5>
				</div>
				<div class="content-description">
					<p>{!! $what_we_do['content'] !!}</p>
				</div>
				<div class="lower-banner">
					<figure>
						<img src="{{$image['url']}}">
					</figure>
				</div>
				<div class="goals-vision">
					<div class="row-here">
						<div class="column">
						 {!! $what_we_do['our_goals'] !!}
						</div>
						<div class="column">
							{!! $what_we_do['our_vision'] !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    @endsection