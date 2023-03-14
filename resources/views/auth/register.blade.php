{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('auth.layout')

@section('title', 'Register')

@section('content')
<a href="{{ url('/') }}">Home</a>
<div class="signup-card">
    <form action="{{ route('register') }}" method="POST">
    @csrf
        <div class="name">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="ex. Name" required autocomplete="name" autofocus>
        </div>    
        <div class="email">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="ex. email@g.c" required autocomplete="email">
        </div>
        <div class="password">
            <label for="password">New Password</label>
            <input type="password" id="password" name="password" placeholder="New Password" required autocomplete="new-password">
        </div>
        <div class="password">
            <label for="password-confirm">Password Confirm</label>
            <input type="password" id="password-confirm" name="password_confirmation" placeholder="Password Confirm" required autocomplete="new-password">
        </div>
        <div class="country">
            <label for="country">Country</label>
            <input type="text" id="country" name="negara" placeholder="Country" required>
        </div>
        <div class="province">
            <label for="province">Province</label>
            <input type="text" id="province" name="provinsi" placeholder="Province" required>
        </div>
        <div class="city">
            <label for="city">City</label>
            <input type="text" id="city" name="kota_asal" placeholder="City" required>
        </div>
        <div class="address">
            <label for="address">Address</label>
            <input type="text" id="address" name="alamat" placeholder="Address" required>
        </div>
        <div class="nik">
            <label for="nik">NIK</label>
            <input type="text" id="nik" name="nik" placeholder="NIK" required>
        </div>
        <div class="status">
            <p>Select Your Status</p>
            <select class="status-select" id="status" name="status">
                <option value="lajang">Bachelor</option>
                <option value="menikah">Married</option>
            </select>
        </div>
        <div class="children">
            <label for="children">Total Children</label>
            <input type="number" id="children" name="anak" placeholder="Total Children" required>
        </div>
        <div class="phone-number">
            <label for="phone-number">Phone Number</label>
            <input type="number" id="phone-number" name="no_telepon" placeholder="Phone Number" required>
        </div>
        <div class="role">
            <p>Select Your Role</p>
            <select class="role-select" id="role" name="role">
                <option value="employee">Employee</option>
                <option value="admin">Admin</option>
                <option value="superadmin">Super Admin</option>
            </select>
        </div>
        <div class="id_jabatan">
            <p>Select Your J</p>
            <select class="id_jabatan-select" id="id_jabatan" name="id_jabatan">
                @if (count($jabatans) > 0)
                    @foreach ($jabatans as $jbt)
                        <option value="{{ $jbt->id }}">{{ $jbt->jabatan }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="button">
            <button type="submit">GET STARTED</button>
        </div>
    </form>
</div>
<div class="signin">
    <p>Already have account?</p>
    <a href="{{ route('login') }}">Sign In</a>
</div>
@endsection