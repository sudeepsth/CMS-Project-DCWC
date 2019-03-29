@extends('site/app')
@section('title', $detail->title)
@section('description', '|| DCWCNepal || '. str_limit(strip_tags($detail->description), 180))

@section('main-content')
<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>{{$detail->title}}</h2>
					<ul class="breadcumb">
					<li><a href="{{ url('/')}}">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
						<li><span>{{$detail->title}}</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
<section class="sec-padding ">
<div class="hidden">
    <figure class="image"><a href="#" class="lightbox-image"><img class="lightbox" src="#" alt=""></a></figure>
    </div>
   <div class="container">
     
             {!! $detail->description!!}	
      
   </div>
</section>
												
	


@endsection