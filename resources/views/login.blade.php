@extends('layout.app')
@section('content')
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{asset('assets/img/logo.png')}}"  style="width: 260px; margin: -49px; height: 100px;" >
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>S'authentifier</h4>
                        </div>
                        <div class="card-body">
                        @if(Session::has('error'))
                            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                        @endif
                            <form method="POST" action="{{route('logincheck')}}" class="needs-validation" >
                            @csrf
                            @method('POST')
                                <div class="form-group">
                                    <label for="email">Nom d'utilisateur</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Merci de saisir un nom d'utilisateur 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Mot de Passe</label>

                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        Merci de saisir un mot de passe
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" href="entre.html" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Copyright <a href="https://startjobs.ma/">Start Jobs</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</div>


@endsection