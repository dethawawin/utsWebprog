@extends('layout')

@section('container')
    <div style="margin: 0px 10px;">
        {{-- STAR BALANCE --}}
        <div style="margin: 10px 0px; display: flex; align-items: center;">
            <i class="star fa-solid fa-star fa-xl"></i>
            <h5>151 Star Balance</h5>

             {{-- REDEEM BUTTON --}}
            <div style="margin-left: 120px">
            <button type="button" class="btn btn-dark" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .9rem; --bs-btn-font-size: .75rem; border-radius: 16px; box-shadow: 1px 1.5px #888888">Reedem
                <i class="sbal star fa-solid fa-star"></i>
            </button>
        </div>
        </div>

        {{-- CAROUSEL PROMO HOMEPAGE --}}
        <div id="carouselExampleIndicators" class="hc carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            {{-- INPUT GAMBAR DALAM CAROUSEL --}}
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/image/banner1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/image/banner2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/image/banner3.jpg" class="d-block w-100">
                </div>
            </div>

            {{-- NEXT BUTTON CAROUSEL --}}
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            {{-- PREVIOUS BUTTON CAROUSEL --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
        </div>


        {{-- PROMO INFORMATION --}}
        <div>
            <h5 style="padding-top: 10px"><strong> Promo Information</strong></h5>

            <div class="box" style="padding: 7px;">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                        <img class="image is-128x128" src="/image/promo_buy1get1.jpg" alt="Buy 1 Get 1">
                        </figure>
                    </div>

                    <div class="media-content">
                        <div class="content">
                        <p>
                            <h5><strong>Buy 1 Get 1 Coffee</strong></h5>
                            <div style="font-size: 13px; padding-right:10px">
                                Looking for a delicious and affordable way to start your day? Look no further than our "Buy 1 Get 1 Coffee" promotion!
                            </div>
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box" style=" padding: 7px;">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                        <img class="image is-128x128" src="/image/promo_tumblerday.jpg" alt="Value Set">
                        </figure>
                    </div>

                    <div class="media-content">
                        <div class="content">
                        <p>
                            <h5><strong>Tumblers Day</strong></h5>
                            <div style="font-size:13px; padding-right:10px">
                                Celebrate Tumbler Day with us and get your hands on the perfect reusable cup to keep your drinks hot or cold all day long. Don't miss out on this limited time offer!
                            </div>
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box" style="padding: 7px;">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                        <img class="image is-128x128" src="/image/promo_tumbler.jpg" alt="10.10 Flash Sale">
                        </figure>
                    </div>

                    <div class="media-content">
                        <div class="content">
                        <p>
                            <h5><strong>50% off Tumbler Discount</strong></h5>
                            <div style="font-size: 13px; padding-right:10px">
                                Thirsty for a great deal? Get 50% off for puchasing selected tumblers. Hurry! it'just a limited offer. Order now and enjoy your favorite drinks in style.
                            </div>

                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box" style="padding: 7px;">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                        <img class="image is-128x128" src="/image/promo_2.jpg" alt="10.10 Flash Sale">
                        </figure>
                    </div>

                    <div class="media-content">
                        <div class="content">
                        <p>
                            <h5><strong>Special Secret Recipe</strong></h5>
                            <div style="font-size: 14px; padding-right:10px">
                                You can also recharge your Friday with a special secret recipe only on your favorite delivery app!
                            </div>

                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- COFFEE BUTTON; Jika diklik akan langsung direct ke menu->espresso --}}
        <a href="/{{ $users->id }}/Espresso">
            <div style="display: flex; justify-content: flex-end; margin-right: 15px;">
                @if ($users->loyalty === "Gold")
                    <button class="btn btn-dark btn-lg float-end" style="bottom: 60px; position: fixed; background-color: #C6A961 !important">Coffee
                    </button>
                @else
                    <button class="btn btn-dark btn-lg float-end" style="bottom: 60px; position: fixed; background-color: #006F42 !important">Coffee
                    </button>
                @endif
            </div>
        </a>
    </div>
@endsection
