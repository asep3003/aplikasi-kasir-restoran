@extends('layouts.login')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                @if (session('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session ('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container">
                    <main class="form-login">
                        <form action="{{ route('login.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h1 class="h3 mb-3 fw-normal">Login Form</h1>
                            <div class="form-floating">
                                <input type="text" name="username" class="form-control mt-2" id="username" placeholder="Username" autofocus>
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection