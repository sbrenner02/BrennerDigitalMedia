@extends('layout')
@section('content')
    <div class="container">
        <h2 class="text-center">Web Development</h2>
        <div class="row justify-content-around col-12 no-gutters">
            <div class="col-lg-3 col-sm-12 portfolio-item">
                <img class="card-img-top" src="./images/portfolio/jokersgames-thumb.png" alt="Jokers Games">
                <div class="card-body text-center">
                    <a href="http://www.jokersgames.com" target="_blank" class="stretched-link"><h4 class="card-text">Jokers Games</h4></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 portfolio-item">
                <img class="card-img-top" src="./images/portfolio/swordhammerhq-thumb.png" alt="SwordHammerHQ">
                <div class="card-body text-center">
                    <a href="http://www.swordhammerhq.com" target="_blank" class="stretched-link"><h4 class="card-text">SwordHammerHQ (David Paul Seymour)</h4></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 portfolio-item">
                <img class="card-img-top" src="./images/portfolio/grimreeferfest-thumb.png" alt="Grim Reefer Fest">
                <div class="card-body text-center">
                    <a href="http://www.grimreeferfest.com" target="_blank" class="stretched-link"><h4 class="card-text">Grim Reefer Fest</h4></a>
                </div>
            </div>
        </div>

        <br><br>

        <h2 class="text-center">Posters & Advertising</h2>
        <div class="row justify-content-around col-12 no-gutters">
            <div class="col-lg-3 col-sm-12 portfolio-item">
                <a href="./images/portfolio/beckyshowposter2018.png"><img class="card-img-top" src="./images/portfolio/beckyshowposter2018-thumb.jpg" alt="Show Poster"></a>
                <div class="card-body text-center">
                    <h4 class="card-text">Show Poster</h4>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 portfolio-item">
                <img class="card-img-top" src="./images/portfolio/tokehazemage-thumb.jpg" alt="Show Poster">
                <div class="card-body text-center">
                    <h4 class="card-text">Show Poster</h4>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 portfolio-item">
                <img class="card-img-top" src="./images/portfolio/worstonesjoe2-thumb.png" alt="Show Poster">
                <div class="card-body text-center">
                    <h4 class="card-text">Show Poster</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
