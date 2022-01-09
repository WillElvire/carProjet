@extends('welcome')
@section('content')

    <div class="container pt-5">
        <a style="float: right" class="btn btn-primary " href="/logout"> se deconnecter</a>
        <div class="row pt-5">
            <div class="col-lg-12 pt-5">
                <h3>Bienvenue <b class="badge badge-primary">{{ Auth()->user()->name }}</b> </h3>
            </div>

            <div class="row pt-5 " style="margin-left: 20%">
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                           <img src="http://pngimg.com/uploads/mercedes/mercedes_PNG1903.png" class="img-fluid" alt="" >
                            <h5 class="card-title">Ajouter une publication</h5>

                            <a href="{{ route('form') }}" class="btn btn-primary col-md-12">Publier maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://www.pngall.com/wp-content/uploads/11/Tuning-Car-PNG-Photo.png" class="img-fluid" alt="" >
                            <h5 class="card-title">Liste des publications</h5>
                            <a href="{{ route('liste') }}" class="btn btn-primary col-md-12">voir la liste des publications</a>
                        </div>
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
        .card{
            background-color: #f5f5f5;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
            margin-top: 20px;
            margin-bottom: 20px;
            transition:  0.3s;

        }
        .card:hover{
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);

        }
        a{
            margin-top: 20px;
            margin-bottom: 20px;
            transition:  0.3s;
        }

        h1{
            color:white;
        }
        img{

            height: 200px !important;
        }
    </style>

@endsection


