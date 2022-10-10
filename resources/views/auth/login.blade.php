@extends('auth.app')
@section('title', 'Login Form')

@section('content')
    <div class="container m-lg-5">
        <div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <small class="form-text text-muted">Do You have an account for Login? If not plese <a href="/register">Register</a></small>
                </form>
            </div>
        </div>
    </div>

@endsection
