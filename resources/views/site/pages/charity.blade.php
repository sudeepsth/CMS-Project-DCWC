@extends('site/app')
@section('title', 'Blogs')
@section('main-content')
<section class="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sec-title colored text-center">
                    <h2>Charity Treks</h2>
                    <ul class="breadcumb">
                        <li><a href="home.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><span>Charity Treks</span></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section>
    <section class="recent-causes sec-padding" >
        <div class="container">

            <div class="row">
            @foreach($list as $item)
                <div class="col-sm-12 col-md-4 col-lg-4 ">
                    <div class="causes sm-col5-center">
                        <div class="thumb">
                            <img class="full-width" alt="" src="{{ $item->images }}">

                        </div>
                        <div class="causes-details clearfix">
                            <h4 class="title"><a href="#">{{ $item->title }}</a></h4>
                    
                            <div align="center">
                            <a href="{{route('charitydetail',$item->slug)}}" class="thm-btn btn-xs">View More </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection