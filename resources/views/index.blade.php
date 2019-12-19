@extends('welcome')

@section('content')

<div class=" position-relative">
    <form class="form-signin w-md-25 w-sm-100     main-form position-absolute mt-lg-5 my-sm-5" method="POST"
        action='{{route('redirect')}}'>
        @csrf



        <div class="row">
            <div class="col-md-8 col-sm-12">
                <input type="text" name='code' id="inputPassword"
                    class="form-control  text-center {{($errors->has('msg')) ? 'is-invalid' : ''}}  w-100 h-50"
                    placeholder="Expert Code" required />

                <div class="text-danger"></div>
            </div>

            <div class="col-4">

                <button class="btn col-md   -4 btn-lg c-btn mx-auto mb-4 h-50 w-100 col-sm-12" type="submit">
                    <h6>valider</h6>
                </button>
            </div>
        </div>

    </form>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('pics/slides/architecture-auto-automobiles-bridge-210182.jpg')}}" alt=""
                class="w-100 slidey" />

            <div class="container mt-3">
                <div class="carousel-caption text-left">
                    <h1>Example headline.</h1>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                        Donec id elit non mi porta gravida at eget metus
                    </p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('pics/slides/action-asphalt-automobile-automotive-593172.jpg')}}" alt=""
                class="w-100 slidey" />
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Example headline.</h1>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                        Donec id elit non mi porta gravida at eget metus. Nullam id
                        .
                    </p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('pics/slides/architecture-auto-automobiles-bridge-210182.jpg')}}" alt=""
                class=" slidey w-100" />
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Example headline</h1>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam.

                    </p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection