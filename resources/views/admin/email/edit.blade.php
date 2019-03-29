@extends('admin/app')

@section('content')
<?php $record = $result['record']; ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $result['page_header'] }}</h3>
          <span class="pull-right"><a href="{{ route('useremail.index') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;  View List </a></span>
      </div>
      <div class="box-body">
        <form class="form-horizontal" method="POST" action="{{ route('useremail.update', $record->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="form-group">
                   <label class="col-lg-2"  style="float:left;" for="name">Name><span class="text-danger">*</span></label
                   <div class="col-lg-4">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $record->name }}" required >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2"  style="float:left;" for="email">Email Address<span class="text-danger">*</span></label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="email" name="email" value="{{ $record->email}}" required >

                </div>
            </div>
            <div class="form-group">
                    <label class="col-lg-2"  style="float:left;" class="col-lg-2"  style="float:left;" for="country">Country</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" id="country" value="{{ $record->country }}" name="country" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2"  style="float:left;" class="col-lg-2"  style="float:left;" for="phone">Contact no.</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" id="phone" value="{{ $record->phone}}" name="phone" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2"  style="float:left;" class="col-lg-2"  style="float:left;" for="address">Address</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" id="address" value="{{ $record->address }}" name="address" >
                    </div>
                </div>
            <div class="form-group">
                    <label class="col-lg-2"  style="float:left;" class="col-lg-2"  style="float:left;" for="title">Member Type<span class="text-danger">*</span></label>
                    <div class="col-lg-4">
                    <select name="categoryid" id="categoryid" class="form-control">
                       <option value="" selected disabled hidden>Choose Member Type</option>
                    @foreach($result['category'] as $item)
                        <option value="{{ $item->id }}" <?= isset($record->title) && ($record->title == $item->id)? 'selected' : '' ?> >{{$item->category_name}}</option>
                    @endforeach
                    </select>
                </div>
                </div>
            <div class="form-group">
                <label class="col-lg-2"  style="float:left;" for="status">Status</label>
                <div class="col-lg-4">
                    <select name="status" id="statusid" class="form-control">
                        <option value="1" <?= isset($record->status) && ($record->status == '1')? 'selected' : '' ?> >Publish</option>
                        <option value="0" <?= isset($record->status) && ($record->status == '0')? 'selected' : '' ?> >UnPublish</option>
                    </select>
                </div>
            </div>
            <div class="form-group"><div class="col-lg-offset-2 col-lg-4">
                <button type="submit" class="btn btn-success">Update</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
<div class="clearfix"></div>

@endsection