@extends('layouts.app')

@section('content')

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="card-body pt-0">
                        <h3 class="text-center mt-4">
                            <a href="index.html" class="logo logo-admin"><img src="{{url('assets/images/my-img/Frame19.png')}}"
                                    height="80" width="250" alt="logo"></a>
                        </h3>
                        <div class="p-3">
                            <h4 class="text-muted font-size-18 mb-1 text-center">Welcome Back !</h4>
                            <p class="text-muted text-center">Sign in to continue.</p>
                            <form method="POST" action="{{ route('login') }}" class="form-horizontal mt-4" >
                                @csrf
        
                                <div class="form-group">
                                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
        
                                <div class="form-group">
                                    <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check text-right">
                                            <button type="submit" class="btn btn-primary" style="background-color: #E84545; border:none">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <h6>Choose Roles</h6>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8">
  <label for="employee">Employee</label>
  <input type="checkbox" id="employee" name="role" value="employee">
  

  <label for="deliveryboy">Delivery Boy</label>
  <input type="checkbox" id="deliveryboy" name="role" value="delivery boy">

  <label for="admin">Admin</label>
  <input type="checkbox" id="admin" name="role" value="admin">
                                    </div>
                                </div> --}}
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>Don't have an account ? <a href="{{url('/register')}}" class="text-primary"  > Signup Now </a></p>
                    <p>© 2023- {{date('Y')}}s Designed   <i class="mdi mdi-heart text-danger"></i> </p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
