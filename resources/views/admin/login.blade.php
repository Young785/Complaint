@section('title', 'Complaint - Login')
@include('admin.header')
  <body class="login-body" style="background-image: url('/assets/images/blog/blog-07-770x420.webp')">
    <div class="container">
      <form class="form-signin" action="/authenticate">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
                <p class="errors">{{ $errors->first('email')}}</p>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <p class="errors">{{ $errors->first('password')}}</p>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        </div>
      </form>
    </div>
@include('admin.footer')