@extends('admin/app')

@section('content')
<style type="text/css">
   
    .close-icon{
    	border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">{{ $result['page_header'] }}</h3>
    </div>
    <div class="box-body">
        <form action="{{ route('video.gallery.upload') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">


        {!! csrf_field() !!}


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif


        <div class="row">
            <div class="col-md-5">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-5">
                <strong>Video:</strong>
                <input type="file" name="video" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>


    </form> 
    <br>
    <table class="table table-hover table-responsive table-condensed" id="myTable">
				<thead class="bg-primary">
					<tr>
                        <th>S.No</th>
                        <th>Video Title</th>
						<th>Videos</th>
						<th>Published Date</th>
						<th class="center-align">Action</th>

					</tr>
				</thead>
				<tbody>
                    <?php $count = 1; ?> 
                    @foreach($result['videos'] as $video)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $video->title }}</td>
                        <td><video width="180px" height="100px" controls>
                        <source src="{{ asset($video->video) }}" type="video/mp4">
                            </video>
                        
                        </td>
                        <td> <?php echo (date('Y-m-d', strtotime($video->created_at))) ?></td>
                        <td><a href="{{ route('video.gallery.delete',$video->id) }}" class="close-icon btn btn-danger" onclick=" return confirm('Are You Sure ???');"><i class="glyphicon glyphicon-remove"></i></a></td>
                    </tr>
                    @endforeach
				</tbody>

    </table>
    </div>
  </div>
</div>
<div class="clearfix"></div>
@endsection