@extends('admin/app')

{{-- @section('content-header', 'User Registration') --}}

@section('content')
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">User Profile</h3>
          
    </div>
    <div class="box-body">
      <form class="form-horizontal" method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
   
            
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" placeholder="Enter Full Name " name="name" value="{{ Auth::user()->name }}" required autofocus>

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
                  <input id="email" type="email" class="form-control" placeholder="Enter Email Address" name="email" value="{{ Auth::user()->email }}" required>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
         
<div class="form-group">
          <label for="password" class="col-md-4 control-label">&nbsp;</label>
              <div class="col-md-6">
                  <input id="changepwd" type="checkbox" name="changepwd" >Change Password
              </div>
</div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

             
              <label for="password" class="col-md-4 control-label">New Password</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" disabled>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-success">Update</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
              </div>
          </div>

      </form>
    </div>
  </div>
</div>
<div class="clearfix"></div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#changepwd').removeAttr('checked');
      $('#changepwd').click(function () {
          //check if checkbox is checked
        if ($(this).is(':checked')) {        
            $('#password').removeAttr('disabled'); //enable input        
        } else {
            $('#password').attr('disabled', true); //disable input
       }
      });
  });
</script>

@endsection