<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
        
      

</head>

<body>
  

    <div class="container">
        <form method="POST" action="form">
           
            @csrf
            <div class="row">
                <div class="login-reg-panel">
                    
                    <div class="register-info-box">
                        <h2>Don't have an account?</h2>
                        <p>Lorem ipsum dolor sit amet</p>
                        <label id="label-login" for="log-login-show">Register</label>
                        <input type="radio" name="active-log-panel" id="log-login-show">
                    </div>

                    <div class="white-panel">
                        
                        <div class="register-show">
                            <h2>REGISTER</h2>
                            <!-- <div class="form-group @error('username') has-error @enderror">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" value="{{ old('username') }}">
                                @error('username')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> -->
                            <div class="form-group @error('email') has-error @enderror">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group @error('password') has-error @enderror">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group @error('mobile') has-error @enderror">
                                <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile" value="{{ old('mobile') }}">
                                @error('mobile')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group @error('fullname') has-error @enderror">
                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter Full Name" value="{{ old('fullname') }}">
                                @error('fullname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
			                <button type="submit">Submit</button>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <!-- <strong>Whoops!</strong> Please correct errors and try again!. -->
                <br/>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        </form>
    </div>
    
    



</body>

</html>