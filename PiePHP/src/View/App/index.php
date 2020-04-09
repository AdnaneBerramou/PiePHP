<header class="row">
    <h1 class="col-md-6">MyCinema</h1>
    <nav class="col-md-6">
        <ul class="row">
            <li class="col-md-2"><a href="#">FILMS</a></li>
            <li class="col-md-3"><a href="#">GENRES</a></li>
            <li class="col-md-4"><a href="#">HISTORIQUE</a></li>
            <li class="col-md-3"><a href="#">MON PROFIL</a></li>
        </ul>
    </nav>
</header>

<section class="row">
    <input type="search" class="col-12">
    @foreach($films as $key => $film)
        <div class="movieCard col-6 col-md-3" data-id="{{$film->id}}">
            @if($film->poster == NULL)
                <img src="webroot/assets/noImage.png">
            @else
            <img src="data:image/png;base64, {{$film->poster}}" width=150>
            @endif
        <h3>{{$film->titre}}</h1>
        </div>
    @endforeach
    <div class="col-12 pagesNav">
        @for($i = 1 ; $i <= $nbPages ; $i++)
            @if($currentPage != $i)
                <a class="nbPage" href='page/{{$i}}'> {{$i}} </a>
            @else
                <span class="currentPage nbPage">{{$i}}</span>
            @endif
        @endfor
    </div>
</section>

<footer>

</footer>