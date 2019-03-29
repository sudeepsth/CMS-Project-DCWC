<div class="col-md-12">
        <section class="blog-home sec-padding">
                <div class="container">
                
                    <div class="row">
                        @foreach($result['list'] as $item)
                        <div class="col-md-4 col-sm-12 sm-col5-center mb-sm-40">
                            <div class="single-blog-post">
                                <div class="img-box">
                                    <img class="full-width" src="{{ asset($item->images)}}" alt="">
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
                                            <b><?php echo date('d',strtotime($item->published_date)); ?></b>
                                                <?php echo date('M',strtotime($item->published_date)); ?>
                                            </div>
                                            <div class="comment">
                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <a href="{{route('activitiesinside',$item->slug)}}"><h3>{{ $item->title }}</h3></a>
                                        <p>{!! str_limit($item->description, 125) !!}</p>
                                        <a class="btn-details" href="{{route('activitiesinside',$item->slug)}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
</div>
    <div class="col-md-12" align="center">
        <div id="checkajax" class="">
    {{ $result['list']->links() }} 
    </div>
    </div>