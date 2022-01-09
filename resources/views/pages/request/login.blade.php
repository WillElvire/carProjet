@extends('welcome')
@section('content')
    <div class="error">
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ session::get('error') }}
            </div>
        @endif
    </div>
    <div class="container">
        <div class="form-container col-md-6">
            <h1 class="text-center pt-5">Authentification</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form method="post" action="{{ route('login') }}">
                        @csrf()
                        <label>Email</label>
                        <input type="email" placeholder="entrez votre email" name="email" class="form-control">
                        <label>Mot de passe</label>
                        <input type="password" placeholder="entrez votre mot de passe" name="password"
                            class="form-control">
                        <button type="submit" class=" btn btn-primary col-md-12 mt-4"> Se conecter</button>
                        <span>Vous n'avez pas de compte <a href="/register"> cliquer ici </a> </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('include.formStyle')
