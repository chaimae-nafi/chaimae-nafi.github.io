@extends('reception.app')
@section('content')
<div class="card-body"> 
    <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link" href="{{route('receptionhome')}}">Questionnaire</a></li>
        <li class="nav-item"><a class="nav-link active" href="{{route('receptionclient')}}">Fiche de réception</a></li>
    </ul>
</div>
<div class="card">
                    <div class="card-body">
                        <div class="section-title">La Liste des clients</div>
                        <div class="table-responsive">
                            <table class="table table-sm">
                            <thead>
                                <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Tel</th>
                                <th scope="col">Email</th>
                                <th scope="col">Formation</th>
                                <th scope="col">Via</th>
                                <th scope="col">conseiller</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as  $client)
                                <tr>
                                <th> {{$client->nom_client}}</th>
                                <td>{{ $client->prenom_client}}</td>
                                <td>{{ $client->tel_client}}</td>
                                <td>{{ $client->email_client}}</td>
                                <td>{{ $client->designation_formation}}</td>
                                <td>{{ $client->source_client}}</td>
                                <td>{{ $client->nom_conseiller}} {{ $client->prenom_conseiller}} </td>
                                <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection