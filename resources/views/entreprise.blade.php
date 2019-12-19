@extends('welcome')

@section('content')

<div class="bg-light" id="services-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <div class="block-heading-1">
                    <h2 class="mt-5" style="color:#ffa975">What We Offer</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 service">
                <div class="card mb-4 shadow-sm ">
                    <img src="{{asset('/pics/services/service6.jpg')}}" alt="" height="300px">

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 service">
                <div class="card mb-4 shadow-sm ">
                    <img src="{{asset('/pics/services/service1.jpg')}}" alt="" height="300px">

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 service">
                <div class="card mb-4 shadow-sm ">
                    <img src="{{asset('/pics/services/service3.jpg')}}" alt="" height="300px">

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 service">
                <div class="card mb-4 shadow-sm ">
                    <img src="{{asset('/pics/services/service2.jpg')}}" alt="" height="300px">

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 service">
                <div class="card mb-4 shadow-sm ">
                    <img src="{{asset('/pics/services/service4.jpg')}}" alt="" height="300px">

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 service">
                <div class="card mb-4 shadow-sm ">
                    <img src="{{asset('/pics/services/service5.jfif')}}" alt="" height="300px">

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>


        </div>

    </div>
</div>

@endsection