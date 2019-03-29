@extends('admin/app')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $result['page_header'] }}</h3>
          <span class="pull-right"><a href="{{ route('pages.index') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;  View List </a></span>
      </div>
      <div class="box-body">
        <form class="form-horizontal" method="POST" action="{{ route('pages.store') }}" >
            {{ csrf_field() }}
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="Title">Title</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="title" name="title" required >
                    </div>
                </div>
                <h2>&nbsp;</h2>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="description">Description</label><span class="text-danger">*</span>
                        <textarea class="tinymce" name="description" placeholder="Place some text here" ></textarea>
                    </div>
                </div> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <input type="text" class="form-control" id="title" name="meta_description" >
                    </div>
                </div>
                
                <div class="clearfix"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="statusid" class="form-control">
                            <option value="1">Publish</option>
                            <option value="0">UnPublish</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
</div>
<div class="clearfix"></div>

<script>
    $(document).ready(function(){
        $('#lfm').filemanager('image');
      });

</script>
@endsection