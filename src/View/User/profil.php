<header class="row">
    <h1 class="col-md-6">MyCinema</h1>
    <nav class="col-md-6">
        <ul class="row">
            <li class="col-md-2"><a href="#">FILMS</a></li>
            <li class="col-md-2"><a href="genres">GENRES</a></li>
            <li class="col-md-5"><a href="monprofil">PROFIL &amp; HISTORIQUE</a></li>
            <li class="col-md-4"><a href="deconnexion">DECONNEXION</a></li>
        </ul>
    </nav>
</header>

<section class="row">
    @isset($error)
        <p class=" offset-2 col-8 offset-2 offset-md-4 col-md-4 offset-md-4" style="color:red; font-weight: 600;">{{$error}}</p>
    @endisset
    <button id="edit" class="col-2 col-md-1">Editer</button>
    <h1 class="col-6 col-md-9">{{strtoupper($user->pseudo)}}</h1>
    <button id="delete" class="col-2 col-md-1">Supprimer</button>
    <form action="" method="post" id="deleteDiv" class="col-12 offset-md-6 col-md-6 row">
        <input placeholder="Mot de passe svp" class="col-8" type="password" name="password" id="password">
        <input class="col-2" type="submit" value="Entrer">
    </form>
    <p class="col-12 underlined">À propos de moi</p>
    <p class="col-12">{{$user->email}}</p>
    <p class="col-12">{{ucfirst($user->prenom)}} {{ucfirst($user->nom)}}</p>
    <p class="col-12">Date de naissance: {{$user->date_naissance}}</p>
    <p class="col-12 underlined">Mon historique</p>
    @isset($user->historique)
        @foreach($user->historique as $key => $value)
            <p class='col-10'>{{$value->film->titre}}</p>
            <button  data-id="{{$value->id}}" class="deleteH">X</button>
        @endforeach
    @else
        <p>Historique vide</p>
    @endisset
</section>