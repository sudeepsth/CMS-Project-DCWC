@extends('admin/app')

@section('content')
<?php 
$record = $result['mail']; 
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-subject">{{ $result['page_header'] }}</h3>
          <span class="pull-right"><a href="{{ route('mail.index') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;  View List </a></span>
      </div>
      <div class="box-body">
        <form class="form-horizontal" method="POST" action="{{ route('mail.update', $record->id) }} ">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="Subject">Subject</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="subject" name="subject" value="{{ $record->subject }}" required >
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="description">Description</label><span class="text-danger">*</span>
                        {{-- <textarea id="my-editor" class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required >{{ $record->description }}</textarea> --}}
                        <textarea class="tinymce" name="description" >{{ $record->description }}</textarea>
                    </div>
                </div> 
            
                                   
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="email">Send Mail To User</label>
                        <div style="margin-top: 10px; height: 250px; overflow-y: scroll;">
                            <ul class="list-unstyled" style="list-style-type: none;">
                            <li><input type="checkbox" name="email[]" value="0"> All Member</li>
                                @foreach( $result['email'] as $item)
                                    <li><input type="checkbox" name="email[]" value="{{ $item->id }}"> {{ $item->category_name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
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