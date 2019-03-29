@extends('admin/app')

@section('content')
<?php $record = $result['charity']; ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $result['page_header'] }}</h3>
      </div>
      <div class="box-body">
        <form class="form-horizontal" method="POST" action="{{ route('charity.detail.update',$record->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <input type="hidden" name="charity_id" value="{{ $record->charity_id }}">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="Title">Title</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="title" value="{{ $record->title }}" name="title" required >
                    </div>
                </div>
                <h2>&nbsp;</h2>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="description">Introduction</label><span class="text-danger">*</span>
                        <textarea class="tinymce" name="description" placeholder="Place some text here" >{{ $record->description }}</textarea>
                    </div>
                </div> 
               
               
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                 
                <div class="clearfix"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="statusid" class="form-control">
                            <option value="1" <?= isset($record->status) && ($record->status == '1')? 'selected' : '' ?> >Publish</option>
                            <option value="0" <?= isset($record->status) && ($record->status == '0')? 'selected' : '' ?> >UnPublish</option>
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
        $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
    });

</script>

@endsection