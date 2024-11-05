@extends('layout')
@section('content')
    <div class="container">
        <h2 class="text-center">Web Development</h2>
        <div class="row justify-content-around">
            <div class="col-lg-3 col-sm-12 portfolio-item mb-5 mx-2 card border-0">
                <a href="http://earthdata.nasa.gov" target="_blank">
                    <img class="card-img-top pb-3" src="/images/portfolio/earthdata-thumb.jpg" alt="NASA Earthdata">
                </a>
                <div class="card-body text-center">
                    <div class="card-text">NASA Earthdata</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 portfolio-item mb-5 mx-2 card border-0">
                <a href="http://residentialtitle.brennerdigitalmedia.com" target="_blank">
                     <img class="card-img-top pb-3" src="/images/portfolio/residentialtitle-thumb.jpg" alt="Residential Title">
                </a>
                <div class="card-body text-center">
                    <div class="card-text">Residential Title</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 portfolio-item mb-5 mx-2 card border-0">
                <a href="http://www.jokersgames.com" target="_blank">
                    <img class="card-img-top pb-3" src="/images/portfolio/jokersgames-thumb.jpg" alt="Jokers Games">
                </a>
                <div class="card-body text-center">
                    <div class="card-text">Jokers Games</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 portfolio-item mb-5 mx-2 card border-0">
                <a href="http://www.swordhammerhq.com" target="_blank">
                    <img class="card-img-top pb-3" src="/images/portfolio/swordhammerhq-thumb.jpg" alt="SwordHammerHQ">
                </a>
                <div class="card-body text-center">
                    <div class="card-text">SwordHammerHQ<br>(David Paul Seymour)</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 portfolio-item mb-5 mx-2 card border-0">
                <a href="http://www.grimreeferfest.com" target="_blank">
                 <img class="card-img-top pb-3" src="/images/portfolio/grimreeferfest-thumb.jpg" alt="Grim Reefer Fest">
                </a>
                <div class="card-body text-center">
                    <div class="card-text">Grim Reefer Fest</div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 portfolio-item mb-5 mx-2 card border-0">
                <a href="http://www.beltwayluxuryrestooms.com" target="_blank">
                    <img class="card-img-top pb-3" src="/images/portfolio/beltwayluxuryrestrooms-thumb.jpg" alt="Grim Reefer Fest">
                </a>
                <div class="card-body text-center">
                    <div class="card-text">Beltway Luxury Restrooms</div>
                </div>
            </div>
        </div>

        <br><br>

        <h2 class="text-center">Promotional Posters</h2>
        <div class="row justify-content-around col-12 no-gutters">
            <div class="col-lg-3 col-sm-12 portfolio-item mb-3">
                <a href="./images/portfolio/beckyshowposter2018.png">
                    <img class="card-img-top border-0" src="./images/portfolio/beckyshowposter2018-thumb.jpg" alt="Show Poster">
                </a>
            </div>

            <div class="col-lg-3 col-sm-12 portfolio-item mb-3">
                <img class="card-img-top border-0" src="./images/portfolio/tokehazemage-thumb.jpg" alt="Show Poster">
            </div>

            <div class="col-lg-3 col-sm-12 portfolio-item mb-3">
                <img class="card-img-top border-0" src="./images/portfolio/worstonesjoe2-thumb.png" alt="Show Poster">
            </div>
        </div>
    </div>
@endsection
