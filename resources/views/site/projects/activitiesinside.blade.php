@extends('site/app')
<?php $record=$result['activities']; ?>
@section('title', $record->title )
@section('description', '|| DCWCNepal || '. str_limit(strip_tags($record->description), 180))
@section('main-content')

<section class="inner-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sec-title colored text-center">
				<h2>{{ $record->title }}</h2>
				<ul class="breadcumb">
					<li><a href="index.html">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><span>@if($record->project==1) Accomplished @elseif($record->project==2) Ongoing @elseif($record->project==3) Future Plan @else @endif</span></li>
				</ul>
			
			</div>
		</div>
	</div>
</section>


<section class="event-feature sec-padding" data-bg-color="#fafafa">
	<div class="container">	
			
		<div class="row">
			<div class="col-sm-12">
				<div class="featured-causes">
					<div class="row">
						<div class="col-sm-12">
							<div class="thumb">
								<img class="full-width" src="{{ asset($record->images_1) }}" alt="">

							</div>
						</div>
						<div class="col-sm-12">

							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#intro" aria-controls="intro" role="tab" data-toggle="tab">Overview</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="intro">{!! $record->description !!}
									<div class="clearfix"></div>
									<div class="container">
										@foreach($record->gallery as $gallery)
												<div class="col-md-3 mb-20">
													<figure class="image"><a href="{{ asset($gallery->image) }}" class="lightbox-image"><img src="{{ asset($gallery->image) }}" alt=""></a></figure>
												</div>
										@endforeach
										</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">


				</div>
			</div>
		</div>
	</section>
	@endsection