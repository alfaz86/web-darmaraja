@extends('homepage.layouts.app')

@section('title', 'Login')

@section('content')
<section class="">
    <div class="container max-w-full">
        <div class="bg-white py-20">
            <div class="mx-auto w-full max-w-[480px]">
                <h1 class="mb-4">Sing In</h1>
                <p>Donec sollicitudin molestie malesda sollitudin</p>
                <div class="signin-options mt-10">
                    <a class="btn btn-outline-white block w-full text-dark" href="#">Sign In With Google</a>
                </div>
                <div class="relative my-8 text-center after:absolute after:left-0 after:top-1/2 after:z-[0] after:w-full after:border-b after:border-border after:content-['']">
                    <span class="relative z-[1] inline-block bg-white px-2">Or Sign In With Email</span>
                </div>
    
                <form action="#">
                    <div class="form-group">
                        <label for="email" class="form-label">Email Adrdess</label>
                        <input type="email" id="email" class="form-control" placeholder="Your Email Address" />
                    </div>
                    <div class="form-group mt-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Your Password" />
                    </div>
                    <input class="btn btn-primary mt-10 block w-full" type="submit" value="Sign In" />
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // hide class btn-login if route is login
    if (window.location.pathname == '/login') {
        console.log(window.location.pathname);
        var btnLogin = document.querySelector('.btn-login');
        btnLogin.style.display = 'none';
    }
</script>
@endsection