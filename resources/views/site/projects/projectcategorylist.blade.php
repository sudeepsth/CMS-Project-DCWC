@extends('site/app')
@section('title', 'Program')
@section('main-content')
<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2>{{ $result['page_header_1'] }}</h2>
                <ul class="breadcumb">
                    <li><a href="#">Program</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span>{{ $result['page_header'] }}</span></li>
                </ul>

            </div>
        </div>
    </div>
</section>
<section>

<section class="recent-causes sec-padding" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">

            <div class="side-bar-widget">
                <div class="col-md-3">
                    <div class="single-sidebar-widget archive">
                        <div class="form-group grid">
                            <select id="project">
                                <option value="" selected disabled hidden>Choose Category</option>
                                <option value="1">Accomplished</option>
                                <option value="2">On Going</option>
                                <option value="3">Futuer Plan</option>
                                
                            </select>
                        </div>
                    </div>                      
                </div>
                <div class="col-md-3">
                    <div class="single-sidebar-widget archive">
                        <div class="form-group grid">
                            <select id="district">
                                <option value="" selected disabled hidden>Choose District</option>
                                @foreach($result['district'] as $item)
                                    <option value="{{ $item->id }}">{{ $item->district }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>                      
                </div>
            <div class="col-md-3">
                    <div class="single-sidebar-widget archive">
                        <div class="form-group grid">
                            <select id="state">
                                <option value="" selected disabled hidden>Choose State</option>
                                @foreach($result['state'] as $item)
                                    <option value="{{ $item->id }}">{{ $item->state }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>                      
                </div>
                <div class="col-md-2">
                    <div class="single-sidebar-widget archive">
                        <div class="form-group grid">
                            <select id="year">
                                <option value="" selected disabled hidden>Choose year</option>
                                @foreach($result['year'] as $item)
                                    <option value="{{ $item->id }}">{{ $item->year }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" value="{{$result['slug']}}" id="category">
                        </div>
                    </div>  
                                    
                </div>
                <div class="col-md-1">
                        <div class="single-sidebar-widget search">
                                <button type="submit" id="project_cat_search"><i class="fa fa-search"></i></button>
                        </div>    
                </div>
            </div>
        </div> 
        <div class="loading hidden">
            </div>
        <div id="ajax_project"> 
        
        @include('site.ajax.ajax_project')
        </div>
</div>
</div>
</section>

@endsection