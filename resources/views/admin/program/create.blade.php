@extends('admin/app')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $result['page_header'] }}</h3>
          <span class="pull-right"><a href="{{ route('program.index') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;  View List </a></span>
        </div>
        <div class="box-body">
            <form class="form-horizontal" method="POST" action="{{ route('program.store') }}">
                {{ csrf_field() }}
               <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="col-lg-2" for="program_name" style="float:left;">Program Name<span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="program_name" name="program_name" required >
                    </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="col-lg-2" for="description">Description</label><span class="text-danger">*</span>
                        <div class="col-lg-10">
                            <textarea class="tinymce" name="description" placeholder="Place some text here" >{{ old('description') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="col-lg-2" for="status" style="float:left;">Status</label>
                        <div class="col-lg-4">
                        <select name="status" id="statusid" class="form-control">
                            <option value="1">Publish</option>
                            <option value="0">UnPublish</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-4">
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

@endsection