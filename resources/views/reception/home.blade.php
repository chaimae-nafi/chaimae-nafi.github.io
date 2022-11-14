@extends('reception.app')
@section('content')
<div class="card-body"> 
    <ul class="nav nav-pills">
        <li class="nav-item"><a class="nav-link active" href="{{route('receptionhome')}}">Questionnaire</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('receptionclient')}}">Fiche de réception</a></li>
    </ul>
</div>
<div class="row" >
    <div class="card" style="width: 200002px;">
       <div class="card-header">
            <h4>Questionnaire Première Visite</h4>
        </div>
        <div class="card-body">
        @if(Session::has('succes'))

                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('succes') }}</p>
        @endif
            <form action="{{route('addclient')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom_client">Nom</label>
                    <input type="text" class="form-control" id="nom_client" name="nom_client" placeholder="Nom" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom_client">Prénom</label>
                    <input type="text" class="form-control" id="prenom_client" name="prenom_client" placeholder="Prenom">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel_client">Tél/GSM</label>
                    <input type="text" class="form-control" id="tel_client" name="tel_client" placeholder="Tel" pattern="[0-9]{10}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="email_client">Email</label>
                    <input type="email" class="form-control" id="email_client" name="email_client" placeholder="Email"  required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fonction_client">Fonction</label>
                    <input type="text" class="form-control" id="fonction_client" name="fonction_client" placeholder="Fonction">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputtel">Vous-êtes intéressée par quelle formation?</label>
                    <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect04" name="formation">
                            <option selected>Choisir une formation</option>
                            @foreach($formations as $formation)
                                <option value="{{ $formation->id_formation}}">{{$formation->designation_formation}}</option>                
                            @endforeach                    
                        </select>
                    </div>
                </div>
            </div>
            <fieldset class="form-group">
                <label> Qui est destinée la formation?</label>
                <div class="form-row">
                    <div class="col-md-6">
                    <div class="col-form-label col-sm-3 pt-0"></div>
                    <div class="col-sm-2" style="max-width: none;padding-left: 13em;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="responsable_client" id="gridRadios1" value="La meme personne">
                            <label class="form-check-label" for="gridRadios1">La meme personne</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="responsable_client" id="gridRadios2" value="Enfant">
                            <label class="form-check-label" for="gridRadios2">Enfant</label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="responsable_client" id="gridRadios3" value="Autre" >
                            <label class="form-check-label" for="gridRadios3">Autre</label>
                        </div>
                    </div> 
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
            </fieldset>
            <div class="form-group">
                <label class="d-block" style="margin-bottom: 2em;">Comment avez-vous connu notre centre?</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineCheckbox1" name="source_client1" value="Recherche Google">
                    <label class="form-check-label" for="inlineCheckbox1">Recherche Google</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineCheckbox2" name="source_client1" value="Passager/e">
                    <label class="form-check-label" for="inlineCheckbox2">Passager/e</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineCheckbox2" name="source_client1" value="Flyer">
                    <label class="form-check-label" for="inlineCheckbox2">Flyer</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="defaultCheck1" name="source_client1" value="Facebook">
                    <label class="form-check-label" for="defaultCheck1">Facebook</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="defaultCheck3" name="source_client1" value="Instagram">
                    <label class="form-check-label" for="defaultCheck3">Instagram</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="defaultCheck3" name="source_client1" value="Youtube">
                    <label class="form-check-label" for="defaultCheck3">Youtube</label>
                </div>
                <div class="form-group" style="margin-top: 2em;">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="defaultCheck3" name="source_client1">
                        <label class="form-check-label" for="defaultCheck3">Parrainage</label>
                        <input type="text" id="inputParrainager" name="parrainage" class="form-control form-control-sm" placeholder="Nom Parrainage" style="margin-left: 0.5em;">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="defaultCheck3" name="source_client1">
                        <label class="form-check-label" for="defaultCheck3">Autre</label>
                        <input type="text" id="inputAutre" name="autre" class="form-control form-control-sm" placeholder="Autre" style="margin-left: 0.5em;">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="defaultCheck3" name="source_client1">
                        <label class="form-check-label" for="defaultCheck3" style="min-inline-size: fit-content;">Autre a preciser</label>
                        <input type="text" id="inputpreciser" name="autretopreciser" class="form-control form-control-sm" placeholder="Autre a preciser" style="margin-left: 1.9em;">
                   </div>
                </div>   
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
            </form>
        </div>
                           
    </div>
</div>
@endsection