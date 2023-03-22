@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <form action="register" method="POST">
                    <div class="mb-3">
                    @csrf
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" name="name" placeholder="username" class="form-control"  aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control"  aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Register</button><br>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
