@extends('layouts.base')
@section('body')
    <!-- Slider Area -->

        {{--<section class="slider container d-flex justify-content-center">
            <div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel" style="width: 18rem">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/doctor.jpeg" alt="First slide" style="width: 100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>My DSoctor</h5>
                            <p>hnlkjsfdhfkjsd</p>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-primary" style="width: 2rem" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-primary" style="width: 2rem" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--/ End Slider Area -->
        </section>--}}
<div class="container">
    <div class="card-deck m-3">
        @foreach($dctr as $data)
        <div class="card">
            <img class="card-img-top" src="doctor/images/profile/{{$data->image}}" style="height: 18rem" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$data->name}}</h5>
                <p class="card-text">{{$data->speciality}}</p>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
