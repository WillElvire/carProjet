@extends('welcome')
@section('content')
    <div class="container">
        <div class="pt-5">
            <a class="btn btn-primary " href="/dashboard"> Aller au dashboard</a>
        </div>

        <h1 class="pt-5">Mes publications <b class="badge badge-primary">{{ $cars->count() }}</b></h1>

        <div class="container">
            <div class="row">
                @foreach ($cars as $car)
                    <div class="card col-md-5" style="margin-left: 6%" >
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->modele }}</h5>
                            <p class="card-text">Prix : {{ $car->prix }} XOF</p>
                            <p class="card-text"> Localisation : {{ $car->localisation }}</p>
                            <a  class="btn btn-primary col-md-12 text-light" href="{{ route('car',$car->id) }}" >Voir</a>
                        </div>
                    </div>
                @endforeach

              </div>
              <div class="container" style="margin-left: 3%;">
                {{ $cars->links() }}
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

    </style>

@stop
