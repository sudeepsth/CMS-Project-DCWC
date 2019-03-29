@extends('admin/app')

@section('content-header', 'DashBoard')

@section('content')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Dashboard</h3>
        </div>
        <div class="box-body">

          <div class="row">
            <div class="col-md-4">
              <div class="box box-widget widget-user-2">
                <div class="widget-user-header bg-yellow">
                  <h3 class="widget-user-username">Program District</h3>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                  @foreach($district as $item)
                    <li><a href="#">{{ $item->district }} <span class="pull-right badge bg-blue">{{ $item->total }}</span></a></li>
                  @endforeach
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-4">
                <div class="box box-widget widget-user-2">
                  <div class="widget-user-header bg-green">
                    <h3 class="widget-user-username">Program</h3>
                  </div>
                  <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                    @foreach($project as $item)
                      <li><a href="#">{{ $item->category_name }} <span class="pull-right badge bg-blue">{{ $item->total }}</span></a></li>
                    @endforeach
                    </ul>
                  </div>
                </div>
              </div>

          </div>
          
        </div>
       
      </div>

@endsection