@extends('admin_temp')

@section('content')


<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name="email" value="{{old('email')}}">
              <label for="inputEmail">Email address</label>

             
                 @if ($errors->has('email'))
                 <div class="alert alert-danger">  
                     <span> {{ $errors->first('email')}}</span>
                </div>
                 @endif
             
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name='password'>
              <label for="inputPassword">Password</label>
              @if ($errors->has('password'))
              <div class="alert alert-danger">  
                  <span> {{ $errors->first('password')  }}</span>
             </div>
              @endif
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="login">
        </form>
   
      </div>
    </div>
  </div>



@endsection