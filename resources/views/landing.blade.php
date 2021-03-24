@extends('layouts.app')

@section('title')
    Home
@endsection
@section('landingStyle')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Notable&display=swap');
        .hero{
            background: #131313;
        }
        .bg-hero{
            background: url(images_assets/hero.png);
            background-repeat: no-repeat;
            height: 90%;
            width: auto;
            background-position: center center;
            color: #ffffff;
        }
        .bg-hero h1{
            font-size: 120px;
            font-family: 'Notable', sans-serif;
            color: #e73f98;
        }
        .bg-hero button{
            background: #e73f98;
            color: #fff;
            padding: 10px 50px;
            border-radius: 20px;
        }
        .hero-caption h1{
            color: #ffffff;
        }
        .hero-caption h4{
            color: #ffffff;
        }
        .hero-caption button{
            color: #ffffff;
            background: #e73f98;
            border-radius: 20px;
            padding: 10px 50px;
        }
        /* section 2 */
        .section-2{
            background: #131313;
        }
        .section-2 .card{
            background: #333333;
        }
        .section-2 p{
            color: #ffffff;
            text-transform: capitalize;
        }
        .section-3{
            background: #131313;
        }
        .banner{
            background: #131313;
            padding: 30px 0;
            width: 100%;
        }
        .section-4{
            background: #131313;
            padding: 20px;
        }
        .section-4 .card{
            background: #333333;
            padding: 20px 30px;
        }
        .section-4 .card input,
        .section-4 .card textarea{
            background: #c2c2c2;
            color: #ffffff;
        }
        .section-4 .card button{
            background: #e73f98;
            color: #ffffff;
        }
        @media only screen and (max-width: 660px) {
            .bg-hero{
                background: url(images_assets/hero.png);
                background-repeat: no-repeat;
                height: 90%;
                width: 100%;
                background-position: center center;
            }
            .bg-hero h1{
                font-size: 90px !important;
            }
        }
        @media only screen and (max-width: 511px) {
            .bg-hero{
                background: url(images_assets/hero.png);
                background-repeat: no-repeat;
                height: 90%;
                background-size: 300px;
                background-position: center center;
            }
            .bg-hero h1{
                font-size: 70px !important;
            }
            .section-2 .card{
                height: 170px;
            }
            .section-2 .card img{
                width: 50% !important;
            }
        }
        @media only screen and (max-width: 383px) {
            .bg-hero{
                background: url(images_assets/hero.png);
                background-repeat: no-repeat;
                height: 70%;
                background-size: 250px;
                background-position: center center;
            }
            .bg-hero h1{
                font-size: 50px !important;
            }
        }
    </style>
@endsection
@include('layouts.header')
@section('content')
    <div class="container-fluid hero">
        <div class="container">
            <div class="bg-hero d-flex align-items-center justify-content-center text-center">
                <div>
                    <h1>ELEVATE</h1>
                    <h4>A STREET WEAR CLOTHING BRAND</h4>
                    <h5>Inspired by the city culture</h5>
                    <h5>To bring Peace and Fun to Individuals</h5>
                    <button class="btn" data-toggle="modal" data-target="#exampleModalCenter">About Us</button>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-dark text-white">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="exampleModalLongTitle">About Us</h5>
                    </div>
                    <div class="modal-body">
                        If you love local, Then you sure to enjoy ELEVATE CLOTHING MERCHS from Baguio City. The brand is considered as a unique clothing style for our customers.
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn text-white" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section 2 --}}
    <div class="container-fluid section-2">
        <div class="container p-3">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-4 col-6">
                    <div class="card mb-2">
                        <div class="card-img-top p-4">
                            <img src="{{asset('images_assets/icons/1.png')}}" alt="1">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Support Local</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="card mb-2">
                        <div class="card-img-top p-4">
                            <img src="{{asset('images_assets/icons/2.png')}}" alt="1">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Remember the Days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="card mb-2">
                        <div class="card-img-top p-4">
                            <img src="{{asset('images_assets/icons/3.png')}}" alt="1">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Rise and Thrive</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section 3 --}}
    <div class="banner">
        <img class="img-fluid" src="{{asset('images_assets/banner.png')}}" alt="banner">
    </div>

    <div class="container-fluid section-3">
        <div class="container">
            <h5 class="text-center p-3 text-white">Products</h5>

            <div class="products">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="card text-center text-white bg-transparent border-0 mb-2">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <img class="img-fluid" src="{{asset('images_assets/products/p1.png')}}" alt="p1">
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <img class="img-fluid" src="{{asset('images_assets/products/p2.png')}}" alt="p1">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Rise and Thrive</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card text-center text-white bg-transparent border-0 mb-2">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <img class="img-fluid" src="{{asset('images_assets/products/e1.png')}}" alt="p1">
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <img class="img-fluid" src="{{asset('images_assets/products/e2.png')}}" alt="p1">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Remember The Days</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card text-center text-white bg-transparent border-0 mb-2">
                            <div class="card-img-top">
                                <img class="img-fluid" src="{{asset('images_assets/products/p4.png')}}" alt="p1">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Remember The Days</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card text-center text-white bg-transparent border-0 mb-2">
                            <div class="card-img-top">
                                <img class="img-fluid" src="{{asset('images_assets/products/p5.png')}}" alt="p1">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Remember The Days</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card text-center text-white bg-transparent border-0 mb-2">
                            <div class="card-img-top">
                                <img class="img-fluid" style="width: 400px;" src="{{asset('images_assets/products/p6.png')}}" alt="p1">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Rise And Thrive</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section 4 --}}
    <div class="section-4">
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center mb-3">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Firstname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Lastname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="" id="" rows="5" class="form-control" placeholder="Message.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-block">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center text-white">
                        <div class="section-4-content">
                            <h5 class="font-weight-bold">We are located at</h5>
                            <p>Country Club Rd, Camp John Hay, Baguio, Benguet</p>
                            <h5 class="font-weight-bold">or contact us</h5>
                            <p>0965 966 0748</p>
                            <p>harold.davidbuenviaje@gmail.com</p>
                            <h5 class="font-weight-bold">Open hour</h5>
                            <p>Everyday 8am - 6pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection


