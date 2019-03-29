@extends('site/app')

@section('title', 'Home')
@section('main-content')

  <!-- Main Content -->
  <section class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				@foreach($result['slider'] as $key=>$item)
				
			<li data-transition="slideremoveleft">
					<img src="{{ asset($item->image)}}"  alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

					<div class="tp-caption sfb tp-resizeme thm-banner-h3" 
					data-x="left" data-hoffset="0" 
					data-y="top" data-voffset="268" 
					data-whitespace="nowrap"
					data-transform_idle="o:1;" 
					data-transform_in="o:0" 
					data-transform_out="o:0" 
					data-start="1500">
					{{ $item->title }}
				</div>
	
				<div class="tp-caption sfl tp-resizeme" 
				data-x="left" data-hoffset="0" 
				data-y="top" data-voffset="405" 
				data-whitespace="nowrap"
				data-transform_idle="o:1;" 
				data-transform_in="o:0" 
				data-transform_out="o:0" 
				data-start="2300">
				<a href="http://dcwcnepal.org.np/pages/donate" class="thm-btn">Donate Now</a>
				</div>

				<div class="tp-caption sfr tp-resizeme" 
				data-x="left" data-hoffset="185" 
				data-y="top" data-voffset="405" 
				data-whitespace="nowrap"
				data-transform_idle="o:1;" 
				data-transform_in="o:0" 
				data-transform_out="o:0" 
				data-start="2600">
				<a href="http://dcwcnepal.org.np/pages/donate" class="thm-btn inverse">Learn More</a>
			</div>
		</li>
	
	
		@endforeach
</ul>
</div>
</section>

<section class="recent-causes sec-padding" style="background: url('img/resources/bg.jpg') no-repeat bottom, url('img/resources/bg.jpg') repeat;">
	<div class="container">
		<div class="sec-title text-center">
			<h2>On Going Projects</h2>
			<p>DCWC is primarily Working on Health, Education &  Housing Sectors </p>
			<span class="decor"><span class="inner"></span></span>
		</div>
		<div class="row">
			@foreach($result['ongoing'] as $item)
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="causes sm-col5-center">
					<div class="thumb">
						<img class="full-width" alt="" src="{{ asset($item->images)}}">

					</div>
					<div class="causes-details clearfix">
					<h4 class="title"><a href="{{route('activitiesinside',$item->slug)}}">{{ $item->title }}</a></h4>
						<br>

						<p>
						{!! str_limit($item->description, 125) !!}

						</p>
						<div>
							<a href="{{route('activitiesinside',$item->slug)}}" class="thm-btn btn-xs">View More </a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<section class="blog-home sec-padding">
	<div class="container">
		<div class="sec-title text-center">
			<h2>Blogs</h2>
			<p>Our experience and stories </p>
			<span class="decor">
				<span class="inner"></span>
			</span>
		</div>
		<div class="row">
		@foreach($result['blogs'] as $item)
			<div class="col-md-4 col-sm-12 sm-col5-center mb-sm-40">
				<div class="single-blog-post">
					<div class="img-box">
						<img class="full-width" style="max-height:190px; min-height:190px;" src="{{ asset($item->images) }}" alt="">
						<div class="overlay">
							<div class="box">
								<div class="content">
									<ul>
										<li><a href="{{ route('blogdetail',$item->slug)}}"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="content-box">
						<div class="date-box">
							<div class="inner">
								<div class="date">
									<b><?php echo date('d',strtotime($item->created_at)); ?></b>
									<?php echo date('M',strtotime($item->created_at)); ?>
								</div>
								<div class="comment">
									@if($item->category=='1')
										News
									@else
										Event
									@endif
								</div>
							</div>
						</div>
						<div class="content">
							<a href="{{ route('blogdetail',$item->slug)}}"><h3>{{ $item->title }}</h3></a>
							<p>{!! str_limit($item->description, 125) !!}</p>
							<a class="btn-details" href="{{ route('blogdetail',$item->slug)}}">Read More</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section class="fact-counter-wrapper sec-padding parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 md-text-center">
				<h2>In service for <b>18 years</b> <br>to help helpless and <br>Spread Happiness</h2>
				<!--<a href="#" class="thm-btn inverse mb-md-40">Be a part of us</a>-->
			</div>
			<div class="col-lg-6 col-md-12 md-text-center">
				<div class="single-fact">
					<!--<div class="icon-box">-->
					<!--	<i class="flaticon-shapes-2"></i>-->
					<!--</div>-->
					<span class="timer" data-from="10" data-to="18" data-speed="5000" data-refresh-interval="50">18</span>
					<p>Total Years</p>
				</div>
				<div class="single-fact">
					<!--<div class="icon-box">-->
					<!--	<i class="flaticon-people-3"></i>-->
					<!--</div>-->
					<span class="timer" data-from="10" data-to="2200" data-speed="5000" data-refresh-interval="50">155</span>
					<p>Total Volunteer</p>
				</div>
				<div class="single-fact">
					<!--<div class="icon-box">-->
					<!--	<i class="flaticon-hands"></i>-->
					<!--</div>-->
					<span class="timer" data-from="10" data-to="155" data-speed="5000" data-refresh-interval="50">2200</span>
					<p>Total Projects</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="p_40" >
	<div class="container">
		<div class="sec-title text-center">
			<h2>Our Partners</h2>
			<p>Partners who has been helping for the sucess of DCWC</p>
			<span class="decor">
				<span class="inner"></span>
			</span>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="clients-carousel owl-carousel owl-theme">
				@foreach($result['partners'] as $item)					
					<div class="item">
						<div class="img-box">
							<img src="{{ asset($item->image)}}" alt="{{ $item->title}}" title="{{ $item->title}}">
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@if(isset($result['popup']))
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="border:0px;">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
            <img src="{{asset($result['popup']->image)}}">
        </div>
      </div>
    </div>
</div>

@endif
@endsection