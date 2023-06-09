<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
    {
    $total =ProductController::cartItem();
    }
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
        <a class="navbar-brand" href="\">E-Com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myorders">Order</a>
                </li>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="\cartlist">Cart({{$total}})</a> </li>&nbsp;
                @if(Session::has('user'))
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toogle="dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Session::get('user')['name']}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else
                    <li><a href="/login">Login</a> </li>&nbsp;
                    <li><a href="/register">Register</a> </li>&nbsp;
                @endif
            </ul>


        </div>
    </div>
</nav>
