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
				<a href="{{ route('charity.create') }}" class="btn btn-success">
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
						<th class="center-align">Status</th>
						<th class="center-align">Action</th>

					</tr>
				</thead>
				<tbody>
					<?php $count = 1; ?> @foreach ($result['charity'] as $item)
					<tr>
						<td>{{ $count++ }}</td>
					<td><a href="{{ route('charity.detail',$item->id)}}">{{ $item->title }}</a></td>
						<td><?php echo (date('Y-m-d', strtotime($item->created_at))) ?></td>
						
						<td class="center-align">
							@if ($item->status == '1')
							<img src="{{ asset('/admin/images/tick.png') }} "> @else
							<img src="{{ asset('/admin/images/notick.png') }}"> @endif
						</td>
						<td width="160px" class="center-align">
							<a href="{{ route('charity.edit', $item->id) }}">Edit </a>&nbsp; | &nbsp;
							<a href="{{ route('charity.delete', $item->id) }}" onclick=" return confirm('Are You Sure ???');">Delete</a>
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