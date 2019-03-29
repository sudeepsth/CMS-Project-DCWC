@extends('admin/app') @section('content')
@if($message = Session::get('success'))
  <div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>Success!</strong> {{ $message }}
  </div>
       @endif
    {!! Session::forget('success') !!}
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">{{ $result['page_header'] }}</h3>

			<span class="pull-right">
				<a href="{{ route('project.create') }}" class="btn btn-success">
					<i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add New </a>
			</span>
		</div>
		<div class="box-body">

			<br />
			<table class="table table-hover table-responsive table-condensed" id="myTable">

				<thead class="bg-primary">
					<tr>
						<th>S.No</th>
						<th>Title</th>
						<th>Published Date</th>
						<th>Project Type</th>
						<th>Dispay In HomePage</th>
						<th class="center-align">Status</th>
						<th class="center-align">Action</th>

					</tr>
				</thead>
				<tbody>
					<?php $count = 1; ?> @foreach ($result['project'] as $item)
					<tr>
						<td>{{ $count++ }}</td>
						<td>{{ $item->title }}</td>
						<td><?php echo (date('Y-m-d', strtotime($item->published_date))) ?></td>
						<td>@if($item->project==1)Accomplished 
							@elseif($item->project==2) On Going
							@else Future Plan 
							@endif
						</td>
						<td>
							<center>
							@if($item->homepage=='1' && $item->project==2)
								Yes
							@elseif($item->project==2)
								NO
							@else
							  -
							@endif
						</center>
						</td>
						<td class="center-align">
							@if ($item->status == '1')
							<img src="{{ asset('/admin/images/tick.png') }} "> @else
							<img src="{{ asset('/admin/images/notick.png') }}"> @endif
						</td>
						<td width="160px" class="center-align">
							<a href="{{ route('project.edit', $item->id) }}">Edit </a>&nbsp; | &nbsp;
							<a href="{{ route('project.delete', $item->id) }}" onclick=" return confirm('Are You Sure ???');">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<script type="text/javascript">
    $(document).ready(function(){
          $('#myTable').DataTable();
      });
</script>
@endsection