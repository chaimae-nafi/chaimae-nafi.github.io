@extends('reception.app')
@section('content')
<div class="card-body"> 
    <ul class="nav nav-pills">
        <li class="nav-item"><a class="nav-link" href="{{route('receptionhome')}}">Questionnaire</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('receptionclient')}}">Liste des clients</a></li>
        <li class="nav-item"><a class="nav-link active" href="{{route('receptionrdv')}}">Rendez-vous</a></li>
    </ul>
</div>
<div class="row" >
                        <div class="card" style="width: 2000px;">
                            <div class="card-header">
                                <h4>Rendez-vous</h4>
                            </div>
                            <div class="card-body">
                            @if(Session::has('succes'))
                                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('succes') }}</p>
                            @endif
                                <form action="{{route('bookrdv')}}" method="post">
                                @csrf
                                @method('POST')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNom">Numéro d'adhésion</label>
                                            <input type="text" class="form-control" id="inputNom" placeholder="Nom" value="{{ $rdvs->num_adhesion}}" name="numadhesion">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputNom">Date de Rendez-vous</label>
                                            <input type="date" class="form-control" id="inputDate naissanve" placeholder="" name="daterdv">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="inputNom">Centre de formation </label>
                                            <input type="Nom" class="form-control" id="inputNom" placeholder="Nom de centre" name="location">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputtel">Conseillère de Formation</label>
                                            <div class="input-group">
                                                <select class="custom-select" id="inputGroupSelect04" name="conseiller">
                                                    <option selected>Choisir une Conseillère</option>
                                                    @foreach($conseillers as $conseiller)
                                                        <option value="{{ $conseiller->id_conseiller}}">{{$conseiller->nom_conseiller}}  {{$conseiller->prenom_conseiller}}</option>                
                                                    @endforeach    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </form> 
                            </div>
                            </div>
                        </div>
                    </div>
@endsection