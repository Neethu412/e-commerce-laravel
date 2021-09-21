@extends('layouts.master')
@section('home')
<section class="contact_section ">
    <div class="container container-bg">
        <div class="row">
            <div class="col-12">
            <h1 style="text-align:center">Login</h1>
                <form action="/login" method="post">
                @csrf
                    <div>
                    <input type="text" placeholder="UserName" name="username" />
                    </div>
                    <div>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="d-flex ">
                    <button type="submit">
                        SEND
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection