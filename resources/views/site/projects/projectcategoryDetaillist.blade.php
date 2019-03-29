@extends('site/app')
@section('title', $result['page_header'])
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
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span>{{ $result['id'] }}</span></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<section class="recent-causes sec-padding" >
    <div class="container">
        @if($result['page_header_1']=='DCWC Support School')
        <div>
          <p>  Nepal is a developing country and it is back warded in various human development index among them education is also a vital one which affected the different areas of the development activities of the country. One major reason is the 104 years RANA Regime of Nepal pushed away the education to the people because there is no any schools and education learning centers for public. After the end of the RANA regime schools are build in Nepal with the support of community self using their local ideas and own resources and government used to provide teachers before 60 years. Government and some donor organizations are providing supports but insufficient. Now many parts of the country, people are using very small, dark, congested and high risk due to old school buildings to educate their children.
          <br>
          <br>
                 Seeing this situation, we are going forward to mitigate this problem in some extent to uplift the basic education of the remote community which will definitely support the development of the country as a whole. So we used to offer all the national and international donor organizations, corporations, and individuals to support to build community schools in the remote areas of Nepal.
                    We announce welcome to anybody interested to support the project in Nepal.
                    <br>
                    <br>
               DCWC Nepal has built school buildings in community school in Nepal at rural places to uplift the education and awareness among the community of the rural villages.
                    </p>
                    <br>
                    <br>
        </div>
        @endif
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