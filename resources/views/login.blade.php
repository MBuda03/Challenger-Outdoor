@extends('master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3" style="margin-top: 30px; margin-bottom: 30px;">
                <form action="login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
{{--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sifre</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Sifre">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Beni Hatirla</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Giris</button>
                </form>
            </div>
        </div>
    </div>

@endsection
