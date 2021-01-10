@extends('layouts.app')

@section('content')

<div class="card-body">
    <div class="px-3">
        <div class="auth-logo-box">
            <a href="{{route('login')}}" class="logo logo-admin"><img src="../assets/images/logo-sm.png" height="55" alt="logo" class="auth-logo"></a>
        </div><!--end auth-logo-box-->
        
        <div class="text-center auth-logo-text">
            <h4 class="mt-0 mb-3 mt-5">{{ __('Reset Password') }}</h4>
        </div> <!--end auth-logo-text-->  

        
        <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            
            <div class="form-group">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div class="input-group mb-3">
                    <span class="auth-form-icon">
                        <i class="dripicons-user"></i> 
                    </span>                                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror               
                   
                     
                </div>                                    
            </div><!--end form-group--> 


            <div class="form-group">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="input-group mb-3">
                    <span class="auth-form-icon">
                        <i class="dripicons-user"></i> 
                    </span>                                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                       
                   
                     
                </div>                                    
            </div><!--end form-group--> 


            <div class="form-group">
                <label for="forget password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                <div class="input-group mb-3">
                    <span class="auth-form-icon">
                        <i class="dripicons-user"></i> 
                    </span>                                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                       
                   
                     
                </div>                                    
            </div><!--end form-group--> 


            

           

            <div class="form-group mb-0 row">
                <div class="col-12 mt-2"> 
                    <button type="submit" class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light">
                        {{ __('Reset Password') }}<i class="fas fa-sign-in-alt ml-1"></i>
                    </button>
                </div><!--end col--> 
            </div> <!--end form-group-->                           
        </form><!--end form-->
    </div><!--end /div-->
    
     
</div><!--end card-body-->

 
@endsection
