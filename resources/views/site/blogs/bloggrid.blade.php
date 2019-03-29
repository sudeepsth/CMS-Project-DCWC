@extends('site/app')
@section('title', 'Blogs')
@section('description', 'DCWCNepal - Blogs')
@section('main-content')
<section class="inner-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sec-title colored text-center">
				<h2>Blogs</h2>
				<ul class="breadcumb">
					<li><a href="{{ url('/')}}">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><span>Blogs</span></li>
				</ul>

			</div>
		</div>
	</div>
</section>

<section class="blog-home sec-padding">
	<div class="container">
	
		<div class="row">
		    
			@foreach($result['blogs'] as $blog)
			<div class="col-md-4 col-sm-12 sm-col5-center mb-sm-40">
				<div class="single-blog-post">
					<div class="img-box">
						<img class="full-width" style="max-height:190px; min-height:190px;" src="{{ asset($blog->images)}}" alt="">
						<div class="overlay">
							<div class="box">
								<div class="content">
									<ul>
										<li><a href="{{ route('blogdetail',$blog->slug)}}"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="content-box">
						<div class="date-box">
							<div class="inner">
								<div class="date">
								<b><?php echo date('d',strtotime($blog->published_date)); ?></b>
									<?php echo date('M',strtotime($blog->published_date)); ?>
								</div>
								
								<div class="comment">
										@if($blog->category=='1')
										News
									@else
										Event
									@endif
								
								</div>
							</div>
						</div>
						<div class="content">
							<a href="{{ route('blogdetail',$blog->slug)}}"><h3>{{ $blog->title }}</h3></a>
							<p>{!! str_limit($blog->description, 125) !!}</p>
							<a class="btn-details" href="{{ route('blogdetail',$blog->slug)}}">Read More</a>
						</div>
					</div>
				</div>
			</div>
			
			@endforeach
		</div>
	</div>
</section>
@endsection