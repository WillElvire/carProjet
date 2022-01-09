@extends('welcome')
@section('content')
<div class="error">
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ session::get('error') }}
        </div>
    @endif
</div>

<div class="success">
    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ session::get('message') }}  | <a href="{{ route('liste') }}">afficher la liste </a>
        </div>
    @endif
</div>
    <div class="container">
        <div class="form-container col-md-6">
            <h1 class="text-center pt-5">Publier une annonce</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form method="post" action="{{ route('addCart') }}" enctype="multipart/form-data">
                        @csrf()
                        <label>Marque</label>
                        <select name="modele" id="make" class="form-control">
                            <option>Make</option>
                            <option>BMW</option>
                            <option>Daewoo</option>
                            <option>Ford</option>
                            <option>Holden</option>
                            <option>Honda</option>
                            <option>Hyundai</option>
                            <option>Isuzu</option>
                            <option>Kia</option>
                            <option>Lexus</option>
                            <option>Mazda</option>
                            <option>Mitsubishi</option>
                            <option>Nissan</option>
                            <option>Peugeot</option>
                            <option>Subaru</option>
                            <option>Suzuki</option>
                            <option>Toyota</option>
                            <option>Volkswagen</option>
                        </select>
                        <label>Modele</label>
                        <select name="marque" id="make" class="form-control">
                            <option>SUV</option>
                            <option>Berblin</option>
                            <option>sportive</option>
                            <option>superCar</option>
                            <option>hyperCar</option>

                        </select>
                        <label>Année</label>
                        <select id="year" name="annee" class="form-control">

                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                        <label>Prix de vente</label>
                        <input type="number" placeholder="entrez votre prix de vente" name="prix" class="form-control">
                        <label>Localisation</label>
                        <input type="text" placeholder="entrez votre lieu d'habitation" name="localisation"
                            class="form-control">
                        <label>Numéro</label>
                        <input type="text" placeholder="entrez votre muméro de telephone" name="numero"
                            class="form-control">
                        <div class="col-md-12">
                            <label for="files">Selectionner les fichiers:</label>
                            <input type="file" id="files" name="files[]" multiple ><br><br>
                            <button type="submit" id="btn_uploadfile"
                            value="Upload"
                            >
                            Soumettre le formulaire
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   @include('include.formStyle')

   <style>
       .alert-success{
           background: forestgreen;
           color:white;
           font-weight: bold;
       }
   </style>


@endsection
