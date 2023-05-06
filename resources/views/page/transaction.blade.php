@extends('layout')

@section('container')
    <div class="homeContent">
        <div style="margin: 10px">
            <h5 style= "display: flex;
            justify-content:left; margin-left:10px;"><strong>Transaction History</strong></h5>

            @foreach($transactions as $t)
                <div class="box" style="padding: 8px !important;">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-128x128">
                                <img class="image is-128x128" src="{{ $t->coffee->coffee_img}}" alt="order_image">
                            </figure>
                        </div>

                        <div class="media-content">
                            <div style="margin-top: 20px;"> {{--KONTEN TRANSAKSINYA--}}
                                <p style="font-size: 13px; font-style:italic">{{ date('l, jS M Y', strtotime($t->transaction_date)) }}</p>
                                <p style="font-size: 16px; text-transform:uppercase;">
                                    <strong>{{ $t->coffee->coffee_name }}</strong>
                                </p>
                                <p>Price: {{ $t->coffee->coffee_price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
