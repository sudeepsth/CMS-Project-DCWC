<div class="col-md-12">
            @foreach($result['list'] as $item)
        <div class=" col-md-12 causes sm-col5-center list">
            <div class="col-md-2">
                <img src="{{ asset($item->images) }}" class="full-width" style="padding-top:50px">
            </div>
            <div class=" col-md-8 causes-details clearfix">
                <h4 class="title">{{$item->project_number}} - <a href="{{route('activitiesinside',$item->slug)}}">{{ $item->title }}</a></h4>
                <br>
                <p>
                    {!! str_limit($item->description, 350) !!}
                </p>
            </div>
            <div class="col-md-2 pdlist">
            <a href="{{route('activitiesinside',$item->slug)}}" class="thm-btn btn-xs">View More </a>
        </div>
    </div>
    @endforeach

    </div>
    <div class="col-md-12" align="center">
        <div id="checkajax" class="">
    {{ $result['list']->links() }} 
    </div>
    </div>