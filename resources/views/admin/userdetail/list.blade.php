@extends('admin/app')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="box">
    <div class="box-header with-border">
        <div class="box-body">
        <table class="table table-hover table-responsive table-condensed">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th class="center-align">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @foreach ($userlist as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td width="100px" class="center-align"><a href="{{ route('userdetail.show', $item->id) }}">View Detail 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
     
    </div>
    
  </div>
</div>
<div class="clearfix"></div>

@endsection