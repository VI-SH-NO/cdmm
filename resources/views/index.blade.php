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

@endsection