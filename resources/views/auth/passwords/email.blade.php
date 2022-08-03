@extends('layouts.login_header')

@section('content')
<div class="login-section">
    <div class="container index">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
<h4>{{ __('Reset Password') }}</h4>
         
                             <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                        
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg btn-block signup-btn mt-2">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                       
                    </form>
                </div>
            
       
@endsection
