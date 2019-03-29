@extends('admin/app')

@section('content')
<?php 
$record = $result['charity'];
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $result['page_header'] }}</h3>
          <span class="pull-right"><a href="{{ route('charity.index') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;  View List </a></span>
      </div>
      <div class="box-body">
        <form class="form-horizontal" method="POST" action="{{ route('charity.update', $record->id) }} " enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="Title">Title</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $record->title }}" required >
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                        <label for="slug">Slug</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $record->slug }}" required >
                        @if ($errors->has('slug'))
                      <span class="help-block">
                          <strong>{{ $errors->first('slug') }}</strong>
                      </span>
                  @endif
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="top_description">Description</label><span class="text-danger">*</span>
                        <textarea class="tinymce" name="top_description" placeholder="Place some text here" >{{ $record->top_description }}</textarea>
                    </div>
                </div> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="description">Charity Details</label>
                        <textarea class="tinymce" name="description" placeholder="Place some text here" >{{ $record->description }}</textarea>
                    </div>
                </div> 
            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                            <label for="photos">Choose Gallery(Multiple Photo)</label><span class="text-danger">*</span>
                            <input type="file" class="form-control" name="photos[]" multiple />
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-hover table-responsive table-condensed" id="myTable"> 
                        <thead class="bg-primary">
                            <tr>
                                <th>S.No</th>
                                <th>Images</th>
                                <th class="center-align">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $count=1; ?>
                            @foreach($result['charity']->gallery as $gallery)
                                <tr>
                                    <td>{{ $count++ }} </td>
                                    <td><img class="img-responsive" alt="" src="{{ asset($gallery->image) }}"  width="50px" height="50px"/></td>
                                    <td><a href="{{ route('charity.gallery.delete',$gallery->id) }}" class="close-icon btn btn-danger" onclick=" return confirm('Are You Sure ???');"><i class="glyphicon glyphicon-remove"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="image">Featured Image</label><span class="text-danger">*</span>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="{{ asset($record->images) }}" alt="Image" id="file_images">
                            </div>
                            <div>
                                <span class="btn btn-default btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image" id="img_change"></span>
                                <input type="hidden" name="image_file" id="image_file" value="<?php echo isset($record->images) ? $record->images : ''; ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            <div class="clearfix"></div>
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
                        <label for="status">Status</label>
                        <select name="status" id="statusid" class="form-control">
                            <option value="1" <?= isset($record->status) && ($record->status == '1')? 'selected' : '' ?> >Publish</option>
                            <option value="0" <?= isset($record->status) && ($record->status == '0')? 'selected' : '' ?> >UnPublish</option>
                        </select>
                    </div>
                </div>
                <div class="clearfix"></div>
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
<script>
    $(document).ready(function(){
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#file_images').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#img_change").change(function(){
            readURL(this);
        });
            
    });
</script>
@endsection