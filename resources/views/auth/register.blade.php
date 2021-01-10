@extends('layouts.auth')

@section('content')

<div class="card-body">
    <div class="px-3">
        <div class="auth-logo-box">
            <a href="{{route('login')}}" class="logo logo-admin"><img src="../assets/images/logo-sm.png" height="55" alt="logo" class="auth-logo"></a>
        </div><!--end auth-logo-box-->
        
        <div class="text-center auth-logo-text">
            <h4 class="mt-0 mb-3 mt-5">Register</h4>
        </div> <!--end auth-logo-text-->  

        
        <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <div class="input-group mb-3">
                    <span class="auth-form-icon">
                        <i class="dripicons-user"></i> 
                    </span>                                                                                                              
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" placeholder="Enter name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> 

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                     
                </div>                                    
            </div><!--end form-group--> 

            <div class="form-group">
                <label for="username">{{ __('E-Mail Address') }}</label>
                <div class="input-group mb-3">
                    <span class="auth-form-icon">
                        <i class="dripicons-user"></i> 
                    </span>                                                                                                              
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="username" placeholder="Enter username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                     
                </div>                                    
            </div><!--end form-group--> 

            <div class="form-group">
                <label for="userpassword">Password</label>                                            
                <div class="input-group mb-3"> 
                    <span class="auth-form-icon">
                        <i class="dripicons-lock"></i> 
                    </span>                                                       
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="userpassword" placeholder="Enter password" required autocomplete="current-password"> 

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>                               
            </div><!--end form-group--> 

            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>                                            
                <div class="input-group mb-3"> 
                    <span class="auth-form-icon">
                        <i class="dripicons-lock"></i> 
                    </span>                                                       
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password-confirm"" placeholder="Enter password" required autocomplete="new-password"> 

                     
                </div>                               
            </div><!--end form-group--> 

           

         

            <div class="form-group mb-0 row">
                <div class="col-12 mt-2"> 
                    <button type="submit" class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light">
                        {{ __('Register') }}<i class="fas fa-sign-in-alt ml-1"></i>
                    </button>
                </div><!--end col--> 
            </div> <!--end form-group-->                           
        </form><!--end form-->
    </div><!--end /div-->
    
    <div class="m-3 text-center text-muted">
        <p class=""> Have an account ?  <a href="{{route('login')}}" class="text-primary ml-2">  Login</a></p>
    </div>
</div><!--end card-body-->
 
@endsection
