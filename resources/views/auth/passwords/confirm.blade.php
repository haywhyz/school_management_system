@extends('layouts.app')

@section('content')
<div class="card-body">
    <div class="px-3">
        <div class="auth-logo-box">
            <a href="{{route('login')}}" class="logo logo-admin"><img src="../assets/images/logo-sm.png" height="55" alt="logo" class="auth-logo"></a>
        </div><!--end auth-logo-box-->
        
        <div class="text-center auth-logo-text">
            <h4 class="mt-0 mb-3 mt-5">Let's Get Started EduZeal</h4>
            <p class="text-muted mb-0">Sign in to continue to EduZeal.</p>  
        </div> <!--end auth-logo-text-->  

        
        <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('password.confirm') }}">
            @csrf
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

            

            <div class="form-group row mt-4">
                
                <div class="col-sm-6 text-right">
                    @if (Route::has('password.request'))
                                    <a lass="text-muted font-13" href="{{ route('password.request') }}">
                                        <i class="dripicons-lock"></i>    {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    
                </div><!--end col--> 
            </div><!--end form-group--> 

            <div class="form-group mb-0 row">
                <div class="col-12 mt-2"> 
                    <button type="submit" class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light">
                        {{ __('Confirm Password') }}<i class="fas fa-sign-in-alt ml-1"></i>
                    </button>
                </div><!--end col--> 
            </div> <!--end form-group-->                           
        </form><!--end form-->
    </div><!--end /div-->
    
     
</div><!--end card-body-->

 
@endsection
