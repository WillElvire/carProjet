@extends('welcome')
@section('content')
    <div class="success">
        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ session::get('message') }} | <a href="{{ route('liste') }}">afficher la liste </a>
            </div>
        @endif
    </div>
    <div class="container">
        <div class="pt-5" style="float: right">
            <a class="btn btn-primary " href="/dashboard"> Aller au dashboard</a>
            <a class="btn btn-danger " href="/delete/{{ $car->id }}"> Supprimer</a>
            <a class="btn btn-success " href="/update/{{ $car->id }}"> Modifier</a>
        </div>
        <div class="container">
            <div class="row pt-5">
                <h4>Image du produit {{ $car->modele }}</h4>
                @php
                    $viewed = explode('|', $images->image);
                @endphp

                <div class="carousel-item active">
                    @foreach ($viewed as $img)
                        <img src="{{ asset('Carimages/' . $img) }}">
                    @endforeach
                </div>
            </div>
        </div>
        <h4>Detail du produit</h4>
        <div class="card col-md-12">
            <div class="card-body">

                <p>Prix : <b>{{ $car->prix }} XOF </b></p>
                <p>Model : <b>{{ $car->modele }}</b></p>
                <p>Marque : <b>{{ $car->marque }} </b></p>
                <p>Année : <b>{{ $car->annee }}</b></p>
                <p>Localisation : <b>{{ $car->localisation }}</b></p>


            </div>
        </div>


    </div>


    </div>





    </div>

    <style>
        body {
            background-image: url('https://azbigmedia.com/wp-content/uploads/2020/02/buying-a-car.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .card {
            background-color: #f5f5f5;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
            margin-top: 20px;
            margin-bottom: 20px;
            transition: 0.3s;

        }

        .card:hover {
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.75);

        }

        a {
            margin-top: 20px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        h1 {
            color: black;
        }

        img {

            height: 200px !important;
        }


        .alert-success {
            background: forestgreen;
            color: white;
            font-weight: bold;
        }

    </style>

@stop
