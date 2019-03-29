@extends('admin/app')

{{-- @section('content-header', 'User Registration') --}}

@section('content')
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">User Registration</h3>
          <span class="pull-right"><a href="{{ asset('/my-admin/user/list') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;  View List </a></span>
    </div>
    <div class="box-body">
      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" placeholder="Enter Full Name " name="name" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control" placeholder="Enter Email Address" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
            <label for="role" class="col-md-4 control-label">Role of User</label>
                     <div class="col-md-6">
                            <select class="form-control" id="roleid" name="roleid[]" >
                            @foreach($rolelist as $list)
                                 
                                <option value = "{{$list->id}}">{{$list->role_name}}
                                </option>
                            @endforeach
                            </select>
                    </div>

          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control" placeholder="Enter Password" name="password" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

              <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" placeholder="Enter Confirm Password" name="password_confirmation" required>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-success">Register</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
              </div>
          </div>
      </form>
    </div>
  </div>
</div>
<div class="clearfix"></div>

@endsection


