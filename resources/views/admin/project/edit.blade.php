@extends('admin/app')

@section('content')
<?php 
$record = $result['project'];
$recordcategory = $result['project']->category; 
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
            <div class="col-lg-5 col-md-5">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="clearfix"></div>
        <div class="box-header with-border">
          <h3 class="box-title">{{ $result['page_header'] }}</h3>
          <span class="pull-right"><a href="{{ route('project.index') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;  View List </a></span>
      </div>
      <div class="box-body">
        <form class="form-horizontal" method="POST" action="{{ route('project.update', $record->id) }} " enctype="multipart/form-data">
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
                        <label for="description">Overview</label><span class="text-danger">*</span>
                        <textarea class="tinymce" name="description" placeholder="Place some text here" >{{ $record->description }}</textarea>
                    </div>
                </div> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                            <label for="photos">Choose Gallery(Multiple Photo)</label>
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
                            @foreach($result['project']->gallery as $gallery)
                                <tr>
                                    <td>{{ $count++ }} </td>
                                    <td><img class="img-responsive" alt="" src="{{ asset($gallery->image) }}"  width="50px" height="50px"/></td>
                                    <td><a href="{{ route('project.gallery.delete',$gallery->id) }}" class="close-icon btn btn-danger" onclick=" return confirm('Are You Sure ???');"><i class="glyphicon glyphicon-remove"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="published_date">Published Date</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="published_date" name="published_date" value="{{ $record->published_date }}" required>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="status">Program</label>
                        <select name="project" id="projectid" class="form-control">
                            <option value="" selected disabled hidden>Choose Project Type</option>
                            <option value="1" <?= isset($record->project) && ($record->project == '1')? 'selected' : '' ?>>Accomplished</option>
                            <option value="2" <?= isset($record->project) && ($record->project == '2')? 'selected' : '' ?>>On Going</option>
                            <option value="3" <?= isset($record->project) && ($record->project == '3')? 'selected' : '' ?>>Futuer Plan</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="homepage">Show In HomePage (Ongoing)</label>
                            <select name="homepage" id="homepage" class="form-control">
                                <option value="0" <?= isset($record->homepage) && ($record->homepage == '0')? 'selected' : '' ?>>No</option>
                                <option value="1" <?= isset($record->homepage) && ($record->homepage == '1')? 'selected' : '' ?>>Yes</option>
                            </select>
                        </div>
                    </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="published_date">Choose Category</label>
                        <div style="margin-top: 10px; height: 250px; overflow-y: scroll;">
                            <ul class="list-unstyled" style="list-style-type: none;">
                                @foreach( $result['category'] as $cat)
                                <li><input type="checkbox" name="category[]" value="{{ $cat->id }}"
                                    @foreach ($recordcategory as $postcat)
                                        @if ($postcat->id == $cat->id)
                                        checked 
                                        @endif
                                    @endforeach
                                    > {{ $cat->category_name }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <label for="district">District</label><span class="text-danger">*</span>
                            <select name="district_id" id="single_select" class="form-control">
                                <option value="" selected disabled hidden>Choose District</option>
                            @foreach($result['district'] as $item)
                                <option value="{{ $item->id }}" <?= ($item->id == $record->district_id)? 'selected' : '' ?> >{{ $item->district }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <label for="state">State</label><span class="text-danger">*</span>
                            <select name="state_id" id="single_select" class="form-control">
                                <option value="" selected disabled hidden>Choose State</option>
                            @foreach($result['state'] as $item)
                                <option value="{{ $item->id }}" <?= ($item->id == $record->state_id)? 'selected' : '' ?> >{{ $item->state }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <label for="status">year</label>
                            <select name="year_id" id="single_select" class="form-control">
                            @foreach($result['year'] as $item)
                                <option value="{{ $item->id }}" <?= ($item->id == $record->year_id)? 'selected' : '' ?> >{{ $item->year }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="email">Send Mail To User</label>
                        <div style="margin-top: 10px; height: 250px; overflow-y: scroll;">
                            <ul class="list-unstyled" style="list-style-type: none;">
                            <li><input type="checkbox" name="email[]" value="0"> All User</li>
                                @foreach( $result['email'] as $item)
                                    <li><input type="checkbox" name="email[]" value="{{ $item->id }}"> {{ $item->category_name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="image">Featured Image (Outside)</label>
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

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="image">Featured Image (Inside)</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="{{ asset($record->images_1) }}" alt="Image" id="file_images_1">
                            </div>
                            <div>
                                <span class="btn btn-default btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image_1" id="img_change_1"></span>
                                <input type="hidden" name="image_file_1" id="image_file_1" value="<?php echo isset($record->images_1) ? $record->images_1 : ''; ?>" />
                            </div>
                        </div>
                    </div>
                </div>
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
    $("#img_change").change(function(){
            readURL(this);
            console.log("change");
        });

        $("#img_change_1").change(function(){
            readSecondURL(this);
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#file_images').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readSecondURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#file_images_1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#published_date").datepicker({ 
            dateFormat: 'yy-mm-dd',
            onSelect: function(datetext){
                var d = new Date(); // for now
                var h = d.getHours();
                h = (h < 10) ? ("0" + h) : h ;

                var m = d.getMinutes();
                m = (m < 10) ? ("0" + m) : m ;

                var s = d.getSeconds();
                s = (s < 10) ? ("0" + s) : s ;

                datetext = datetext + " " + h + ":" + m + ":" + s;
                $('#published_date').val(datetext);
            },
        });

    });
</script>
@endsection