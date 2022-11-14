<!DOCTYPE html>
<html lang="en">

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>MATRIX</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('assets/modules/jqvmap/dist/jqvmap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css')}}">
<link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
<!-- Template CSS -->
<link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/components.min.css')}}">

</head>
<body class="layout-4">
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Notifications
                        
                    </div>
                    <div class="dropdown-list-content dropdown-list-icons" style="overflow-y: scroll;">
                        @foreach($notifs as $notif)
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-info text-white">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>{{$notif->id_adhesion}}</b> a un rendez-vous avec vous <b> Le :{{$notif->date_rdv}}</b> 
                                <div class="time">à {{$notif->centre_formation}}</div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, MATRIX</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Logged in 5 min ago</div>
                        <a href="features-profile.html" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                        <a href="features-activities.html" class="dropdown-item has-icon"><i class="fas fa-bolt"></i> Activities</a>
                        <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <img src="{{asset('assets/img/logo1.png')}}"  href="entre.html" style="width: 170px; margin: -49px; height: 50px;" >                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="entre.html">MT</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown active">
                        <a href="" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link active" href="{{route('reservation')}}">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('planning')}}">Liste des d'adhesion</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Planning</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="planingpro.html">Proffeseur</a></li>
                            <li><a class="nav-link " href="planinglang.html">Langue</a></li>
                            <li><a class="nav-link " href="planingnive.html">Niveaux</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Blocage</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="bloc.html">Blocage</a></li>
                        </ul>
                    </li>
                </ul>
                
            </aside>
        </div>

        <!-- Start app main Content -->
            <div class="main-content">
                <section class="section" >
<div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="reservation.html">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link" href="listereservation.html">Liste des d'adhesion</a></li>
                        </ul>
                    </div>

                    <div class="row" >
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card" >
                                <div class="card-header">
                                    <h4>Fiche d'adhesion</h4>
                                </div>
                                <div class="card-body"style="height: 234px;">
                                <form action="{{route('searchadh')}}" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="form-row" style="padding-top: 27px;">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">N d'adhesion</label>
                                            <input type="adhesion" class="form-control" id="inputadhesion" placeholder="N d'adhesion" value="{{$clients->num_adhesion}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" class="form-control" id="inputDate" placeholder="Date" value="{{$clients->date_rdv}}">
                                        </div>
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                        
                                    </div>
                                </form>     
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6 col-lg-6">
                        <form action="{{route('addadh')}}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="nom_client" value="{{$clients->num_adhesion}}">
                            <div class="card">
                                <div class="card-body" style="height: 302px;">
                                    <div class="form-group">
                                        <label>Renouvellement</label>
                                        <input type="text" class="form-control" name="renouvellement">
                                    </div>
                                    <div class="form-group">
                                        <label>Source</label>
                                        <input type="text" class="form-control"  name="source" value="{{$clients->source_client}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Formation</label>
                                        <input type="text" class="form-control" name="formation" value="{{$clients->designation_formation}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="height: 395px; width: 200002px;margin-bottom: 13px;">
                            <div class="card-header">
                                <h4>Informations Benificiare</h4>
                            </div>
                            <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNom">Nom Prenom</label>
                                            <input type="Nom" class="form-control" id="inputNom" placeholder="Nom" name="nometprenom_beneficiaire" value="{{$clients->nom_client}}  {{$clients->prenom_client}}" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPrenom">Fonction</label>
                                            <input type="Fonction" class="form-control" id="inputFonction" placeholder="Fonction" name="fonction_beneficiaire" value="{{$clients->fonction_client}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNom">Date  de naissance </label>
                                            <input type="date" class="form-control" id="inputDate" placeholder="Date  de naissance" name="datedenaissance_beneficiaire">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPrenom">adresse</label>
                                            <input type="adresse" class="form-control" id="inputadresse" placeholder="adresse" name="adresse_beneficiaire">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNom">Tel/GSM</label>
                                            <input type="Tel" class="form-control" id="inputTel" placeholder="Tel" name="tel_beneficiaire" value="{{$clients->tel_client}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPrenom">Email</label>
                                            <input type="Email" class="form-control" id="inputEmail" placeholder="Email" name="email_beneficiaire" value="{{$clients->email_client}}">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card" style="height: 395px; width: 200002px;margin-bottom: 13px;">
                            <div class="card-header">
                                <h4>Informations du tuteur</h4>
                            </div>
                            <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNom">Nom Prenom</label>
                                            <input type="Nom" class="form-control" id="inputNom" name="nometprenom_tuteur" placeholder="Nom">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPrenom">Fonction</label>
                                            <input type="Fonction" class="form-control" id="inputFonction" name="fonction_tuteur" placeholder="Fonction">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNom">Date  de naissance </label>
                                            <input type="Date" class="form-control" id="inputDate" name="datedenaissance_tuteur" placeholder="Date et lieu de naissance">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPrenom">adresse</label>
                                            <input type="adresse" class="form-control" id="inputadresse" name="adressenometprenom_tuteur" placeholder="adresse">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNom">Tel/GSM</label>
                                            <input type="Tel" class="form-control" id="inputTel" name="tel_tuteur" placeholder="Tel">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPrenom">Email</label>
                                            <input type="Email" class="form-control" id="inputEmail" name="email_tuteur" placeholder="Email">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card" style="width: 1261px;margin-bottom: 13px;">
                            <div class="card-header">
                                <h4>Type d'inscription</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped v_center">
                                        <tr>
                                            <th>VMCL</th>
                                            <th>VMCL</th>
                                            <th>Autres</th>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;Anglais</label>
                                                <input type="Anglais" class="form-control"  name="type1" id="inputNom" placeholder="...">
                                            </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;VMCL Start {3 mois}</label>
                                                    <input type="VMCL" class="form-control" name="type2" id="inputNom" placeholder="...">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                        <input type="we" class="form-control" name="type3" id="inputNom" placeholder="...">
                                                    </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;Francais</label>
                                                    <input type="Francais" class="form-control" id="inputNom" placeholder="...">
                                            </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;VMCL Complet {6 mois}</label>
                                                    <input type="VMCL" class="form-control" id="inputNom" placeholder="...">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                        <input type="we" class="form-control" id="inputNom" placeholder="...">
                                                    </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 1261px;margin-bottom: 13px;">
                            <div class="card-header">
                                <h4>Prix d'adhesion</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped v_center">
                                        <tr>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;1er contact</label>
                                                <input type="Anglais" class="form-control"  name="prix" id="inputNom" placeholder="1er contact">
                                            </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;1er depot</label>
                                                    <input type="VMCL" class="form-control" id="inputNom" placeholder="1er depot">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <label for="checkbox-1" class="custom-control-label">&nbsp;Cheque</label>
                                                        <input type="we" class="form-control" id="inputNom" placeholder="Cheque">
                                                    </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;Espece</label>
                                                    <input type="we" class="form-control" id="inputNom" placeholder="Espece">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;2eme contact</label>
                                                <input type="Anglais" class="form-control" id="inputNom" placeholder="1er contact">
                                            </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;2eme depot</label>
                                                    <input type="VMCL" class="form-control" id="inputNom" placeholder="1er depot">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <label for="checkbox-1" class="custom-control-label">&nbsp;Cheque</label>
                                                        <input type="we" class="form-control" id="inputNom" placeholder="Cheque">
                                                    </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;Espece</label>
                                                    <input type="we" class="form-control" id="inputNom" placeholder="Espece">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;Responsable</label>
                                                <input type="Anglais" class="form-control" id="inputNom" placeholder="1er contact">
                                            </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;3eme depot</label>
                                                    <input type="VMCL" class="form-control" id="inputNom" placeholder="1er depot">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <label for="checkbox-1" class="custom-control-label">&nbsp;Cheque</label>
                                                        <input type="we" class="form-control" id="inputNom" placeholder="Cheque">
                                                    </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;Espece</label>
                                                    <input type="we" class="form-control" id="inputNom" placeholder="Espece">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 1261px;margin-bottom: 13px;">
                            <div class="card-header">
                                <h4>Modalite de paiement</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped v_center">
                                        <tr>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <a >Date</a>
                                            </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="date">
                                                </div>
                                            </td>       
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <a >Montant</a>
                                            </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Montant">
                                                </div>
                                            </td>       
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <a >Paye le</a>
                                            </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="Anglais" class="form-control" id="inputNom" placeholder="Paye">
                                                </div>
                                            </td>       
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="height: 197px; width: 200002px;margin-bottom: 13px;">
                            <div class="card-header">
                                <h4>Bon de formation</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputNom">Recu le:</label>
                                        <input type="Nom" class="form-control" id="inputNom" placeholder="Recu1">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPrenom">Recu le:</label>
                                        <input type="Fonction" class="form-control" id="inputFonction" placeholder="Recu2">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPrenom">Recu le:</label>
                                        <input type="Fonction" class="form-control" id="inputFonction" placeholder="Recu3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 1261px;margin-bottom: 13px;">
                            <div class="card-header">
                                <h4>Formation des langues :VMCL</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped v_center">
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;Francais</label>
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <label for="checkbox-1" class="custom-control-label">&nbsp;Anglais</label>
                                                    </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;Espagnol</label>
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;Autre</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="table table-striped v_center">
                                        <tr>
                                            <a >Mois de formation de langue a raison de :</a>
                                            <p>1/une seance de cours de deux heurs {2h} en mini groupe</p>
                                            <p >2/une seance d'ateliers de communication de deux heures {2h} en groupe duree de la formation</p>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;3 mois</label>
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <label for="checkbox-1" class="custom-control-label">&nbsp;6 mois</label>
                                                    </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;9 mois</label>
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;12 mois</label>
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;12 mois</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 1261px;margin-bottom: 13px;">
                            <div class="card-header">
                                <h4>Formation informatique</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped v_center">
                                        <tr>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <TH>VMCL START</TH>
                                            </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <TH>l'environnment windows - traitement de texte-tableurs-presentation-internet:
                                                        <a>2 seances de 1h30/semaine en individuuel pendant 1 mois.</a>
                                                        <a>2 seances de 1h30/semaine -atelier en groupe pendant 3 mois.</a></TH>
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <TH>vmcl ابدأ وحدات الوصول لمايكروسوفت لمدة شهرين من التدريب دورتان مدة كل منهما ساعة ونصف في الأسبوع لمدة 2</TH>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <TH>VMCL COMPLET</TH>
                                            </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <TH>les modules du vmcl start 
                                                        microsft acces 2mois de formation2 seance de 1h30 / semaine pendant2
                                                    </TH>
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <TH> vmcl ابدأ وحدات الوصول لمايكروسوفت لمدة شهرين من التدريب دورتان مدة كل منهما ساعة ونصف في الأسبوع لمدة 2</TH>
                                                </div>
                                            </td>
                                        </tr>>
                                        </tr>
                                    </table>
                                    <table class="table table-striped v_center">
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <TH>Module specifique</TH>
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="we" class="form-control" id="inputNom" placeholder="Espece">
                                                </div>
                                            </td>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="we" class="form-control" id="inputNom" placeholder="Espece">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="height: 111px; width: 200002px;margin-bottom: 13px;">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputtransfert">Frais de transfert</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Frais de transfert">
                                </div>
                            </div>
                        </div>

                        <div class="card" style="height: 111px; width: 200002px;margin-bottom: 13px;">
                            <div class="card-body text-right">
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>
                        </div>
                    </form> 
                    </div>
                    </section>         
            </div>

<!-- General JS Scripts -->
<script src="{{ asset('assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{ asset('js/CodiePie.js')}}"></script>

<!-- JS Libraies -->
<script src="{{ asset('assets/modules/cleave-js/dist/cleave.min.js')}}"></script>
<script src="{{ asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js')}}"></script>
<script src="{{ asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/forms-advanced-forms.js')}}"></script>

<!-- Template JS File -->
<script src="{{ asset('js/scripts.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
</body>

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
</html>