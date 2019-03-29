@extends('admin/app')

@section('content')
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
      <span class="pull-right"><a href="{{ route('useremail.create') }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;  Add New </a></span>
    </div>
    <div class="box-body">
        <table class="table table-hover table-responsive table-condensed" id="myTable">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Member Type</th>
                    <th class="center-align">Status</th>
                    <th class="center-align">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @foreach ($result['useremail'] as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td class="center-align">
                        @if ($item->status == '1')
                            <img src="{{ asset('/admin/images/tick.png') }} ">
                        @else
                            <img src="{{ asset('/admin/images/notick.png') }}">
                        @endif
                    </td>
                    <td width="100px" class="center-align"><a href="{{ route('useremail.edit', $item->id) }}">Edit </a>&nbsp; | &nbsp;
                    <a href="{{ route('useremail.delete', $item->id) }}" onclick=" return confirm('Are You Sure ???');">Delete</a></td>
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