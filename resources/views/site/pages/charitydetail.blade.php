@extends('site/app')
@section('title', 'Blogs')
@section('main-content')
<section class="inner-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sec-title colored text-center">
				<h2>Annapurna Charity Trek</h2>
				<ul class="breadcumb">
					<li><a href="index.php">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><span>Charity Treks</span></li>
				</ul>
		
			</div>
		</div>
	</div>
</section>

<section class="sec-padding faq-home">
	<div class="container">

		<div class="row">
			<div class="full-sec-content mb-20" align="center">
				<h3>{!! $result['charity']->top_description !!} </h3>
				<hr>
				
			</div>

			<div class="col-lg-6 col-md-12">

				<div class="sec-title style-two">
					<h2>Itinery</h2>
					<span class="decor">
						<span class="inner"></span>
					</span>
				</div>

				

				<div class="accrodion-grp faq-accrodion" data-grp-name="faq-accrodion">
                    @foreach($result['charity']->detail as $key=>$item)
                    @if($key==0)
					<div class="accrodion active">
						<div class="accrodion-title">
							<h4>
								<span class="decor">
									<span class="inner"></span>
								</span>
								<span class="text">{{ $item->title }}</span>
							</h4>
						</div>
						<div class="accrodion-content" style="display: block;">
						{!! $item->description !!}
							
						</div>
                    </div>
                    @else
                    <div class="accrodion">
						<div class="accrodion-title">
							<h4>
								<span class="decor">
									<span class="inner"></span>
								</span>
								<span class="text">{{ $item->title }}</span>
							</h4>
						</div>
						<div class="accrodion-content" style="display: block;">
						{!! $item->description !!}
							
						</div>
                    </div>
                    @endif
                    @endforeach
					
				</div>
			</div>
			<div class="col-md-6 hidden-md">
				<div class="sec-title style-two">
					<h2>Gallery</h2>
					<span class="decor">
						<span class="inner"></span>
					</span>
				</div>

				<div class="img-masonary">
                @foreach($result['charity']->gallery as $key=>$item)
                    @if($key==0)
					<div class="img-w1">
						<img src="{{asset($item->image)}}" alt="">
                    </div>
                    @else
                    <div class="img-w1 img-h1">
						<img src="{{asset($item->image)}}" alt="">
                    </div>
                    @endif
                    @endforeach
				</div>
			</div>
		</div>

		<div class="trek_info" >
        {!! $result['charity']->description !!}
			</div>
	</div>
</section>

@endsection