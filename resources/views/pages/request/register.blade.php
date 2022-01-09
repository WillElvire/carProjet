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
            <h1 class="text-center pt-5">Inscription</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form method="post" action="{{ route('register') }}">
                        @csrf()
                        <label>Votre nom</label>
                        <input type="name" placeholder="entrez votre nom" name="name" class="form-control">
                        <label>Email</label>
                        <input type="email" placeholder="entrez votre email" name="email" class="form-control">
                        <label>Mot de passe</label>
                        <input type="password" placeholder="entrez votre mot de passe" name="password"
                            class="form-control">
                        <button type="submit" class=" btn btn-primary col-md-12 mt-4"> Se conecter</button>
                        <span>Vous avez  un compte <a href="/login"> cliquer ici </a> </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('include.formStyle')
