<header @if(request()->segment(1) == "") class="header-full" @endif>
    <div class="container">
        <div id="topmenu">
            <div class="logo pull-left">
                <a href="{{ route("homepage") }}">lionParcel Bandung</a>
            </div>
            @guest
            <div class="account pull-right">
                <a href="{{ route("login") }}" class="btn bg-white no-radius">Masuk</a>
                <a href="{{ route("register") }}" class="btn border-white no-radius margin-left-20">Daftar</a>
            </div>
            @else
            <div class="account pull-right">
                <a href="{{ route("home") }}" class="btn bg-white no-radius">Goto dashboard</a>
            </div>
            @endif
        </div>
        @if(request()->segment(1) == "")
            <div class="slider">
                <div class="row flex flex-center">
                    <div class="col-md-5 text-slider">
                        <h3 class="title txt-white">APA ITU LION PARCEL BANDUNG ?</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quasi maiores aperiam fugit ex. Architecto praesentium maiores itaque, asperiores ut veritatis ipsum, unde officia vel nesciunt non quis autem dolores.
                        </p>
                        <a href="{{ route("about") }}" class="btn bg-white no-radius">Lainnya</a>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <img src="assets/img/landing-page-img.png" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</header>