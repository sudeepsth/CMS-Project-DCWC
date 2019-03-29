@extends('site/app')
@section('title', $result['blog']->title )
@section('description', '|| DCWCNepal || '. str_limit(strip_tags($result["blog"]->description), 180))
@section('fb_image', asset($result['blog']->images) )
@section('main-content')
<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Blog Details </h2>
					<ul class="breadcumb">
						<li><a href="index.php">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Blog Details</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>

	<section class="blog-home sec-padding blog-page blog-details">
		<div class="container">
			<div class="row">

					<div class="col-md-4 pull-left">
					<div class="side-bar-widget">
				
						<div class="single-sidebar-widget category">
							<h3 class="title">Catagories</h3>
							<ul>
							<li><a href="{{ url('blog/news')}}">News</a></li>
								<li><a href="{{ url('blog/events')}}">Events</a></li>
							
							</ul>
						</div>
						<div class="single-sidebar-widget popular-post">
							<h3 class="title">Latest Posts</h3>
							<ul>
								@foreach($result['latest'] as $item)
								<li>
									<div class="img-box">
										<div class="inner-box">
											<img src="{{ asset($item->images) }}" alt="">
										</div>
									</div>
									<div class="content-box">
										<a href="#"><h4>{{ $item->title }}</h4></a>
										<span><?php echo date('d M, Y',strtotime($item->published_date)); ?></span>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
											
	
					</div>
				</div>
				<div class="col-md-8 pull-left">
					<div class="single-blog-post">
						<div class="img-box">
							<img src="{{ asset($result['blog']->images )}}" alt="">
						</div>
						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
									<b><?php echo date('d',strtotime($item->published_date)); ?></b>
									<?php echo date('M',strtotime($item->published_date)); ?>
									</div>
									<div class="comment">
										
									</div>
								</div>
							</div>
							<div class="content">
							
								<p>{!! $result['blog']->description !!}</p> 
						
								<div class="bottom-box clearfix">
									<ul class="pull-right share">
										<li><span>Share: </span></li>
										<li><a href="http://www.facebook.com/sharer/sharer.php?u={{ route('blogdetail', $result['blog']->slug) }}" title="DCWCNepal" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/home?status={{ route('blogdetail', $result['blog']->slug) }}&amp;via=dcwcnepal&amp;"" title="DCWCNepal" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ route('blogdetail', $result['blog']->slug) }}&amp;title={{ $result['blog']->title }}" title="DCWCNepal" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="https://plus.google.com/share?url={{ route('blogdetail', $result['blog']->slug) }}" title="DCWCNepal"><i class="fa fa-google-plus" target="_blank"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			
			</div>
		</div>
	</section>
@endsection