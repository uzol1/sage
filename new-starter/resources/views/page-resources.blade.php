@extends('layouts.app')

@section('content')
    @php
	 $contents = get_field('pdf_content');
	 @endphp
    <section class="resources-banner" id="resources-banner" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url({{bloginfo('template_directory')}}/assets/images/page-header.png);">
		<div class="banner-text">
			<h3>RESOURCES</h3>
			<p>Home  <span>  >  </span> Resources</p>
		</div>
	</section>
	<section class="pdf-section">
		<div class="container">
			<div class="content-wrap">
				<div class="selector">
					<div class="buttons-link">
						<button>1</button>
						<button>2</button>
						<button> > </button>
					</div>
					
					<div class="view-catelog pull-right">
						<div class="orderby-order-container">
							<span class="show-product"> Show : </span>
							<ul class="sort-count order-dropdown">
								<li>
									<span class="current-li"><a>12</a></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="content-wrap">
			@foreach($contents as $content)
				<div class="cards-athletes">
					<div class="contents-pdf">
						<div class="main-image">
							<img src="{{$content['image']['url'] }}">
						</div>
						<div class="content-heading">
							<p>{{$content['title']}}</p>
						</div>
						<div class="pdf-download-button">
							<a href="{{ esc_url($content['link']['url']) }}"><button>Download PDF</button></a>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
    </section>
    
    @endsection