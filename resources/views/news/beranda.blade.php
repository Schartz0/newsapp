@extends('layout.main')

@section('title')
    Beranda
@endsection

@section('content')
<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    @foreach ($topNews['data'] as $tn)
                                        <li class="news-item">{{ $tn['title'] }}</li>
                                    @endforeach
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        @php
                            $tk = $terkini['data'][0];
                        @endphp
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="{{ $tk['image'] }}" alt="">
                                <div class="trend-top-cap">
                                    <span>Terkini</span>
                                    <h2><a href="">{{ $tk['title'] }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        @foreach (collect($topNews['data'])->take(3) as $tp)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ $tp['image'] }}" alt="" style="width: 200px">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color2">Top News</span>
                                <h4><a href="">{{ $tp['title'] }}</a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Politik start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
            <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Politik</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            @foreach ($politik['data'] as $p)
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{ $p['image'] }}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1">Politik</span>
                                    <h4><a href="">{{ $p['title'] }}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Politik start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
            <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Politik</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            @foreach ($politik['data'] as $p)
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{ $p['image'] }}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1">Politik</span>
                                    <h4><a href="">{{ $p['title'] }}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Politik start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
            <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Politik</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            @foreach ($politik['data'] as $p)
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{ $p['image'] }}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1">Politik</span>
                                    <h4><a href="">{{ $p['title'] }}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Politik start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
            <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Politik</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            @foreach ($politik['data'] as $p)
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{ $p['image'] }}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1">Politik</span>
                                    <h4><a href="">{{ $p['title'] }}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection