<div class="card">
    {{--<div class="card-header">--}}
        {{--<h1>Bienvenue sur Vente Partner Online <small>Le builder d'application .</small></h1>--}}
    {{--</div>--}}

    <div class="card-body card-padding">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ URL::asset('material/media/carousel/1.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h3>Atelier Logiciel Orienté Objet</h3>
                        <p>Construire vos applications en reel ...</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ URL::asset('material/media/carousel/1.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{ URL::asset('material/media/carousel/1.jpg')}}" alt="">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="zmdi zmdi-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="zmdi zmdi-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
