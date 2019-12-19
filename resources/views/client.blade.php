@extends('welcome')

@section('content')
@if ($flag==false)


<div class="container h-75 w-50 mt-5">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Attention!</strong> you dont have access
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="container">
        <h3>Oops</h3>
        <div class="border p-3">
            seems like u didn't enter a good informations go back to home page and try <again></again>
        </div>
    </div>
    <a class="btn c-btn btn-block text-white w-50 mx-auto my-5" href="{{route('Home')}}">
        Back
    </a>

</div>





@else <div class="container border mx-auto mt-5 row">
    <div class="col-lg-8 col-md-8 col-sm-12">
        <h2 class="text-center py-3" style="color:#ffa975">Votre Dossier</h2>
        <div class=" p-5 container row">
            <div class="row w-100">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <h4>Reference:</h4>
                    <h4>Matricule:</h4>
                    <h4>Date Sinistre:</h4>
                    <h4>Date Reception:</h4>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h4 class="mb-2 font-weight-light">{{$dossier->ref}}</h4>
                    <h4 class="mb-2 font-weight-light">{{$dossier->matricule}}</h4>
                    <h4 class="mb-2 font-weight-light">
                        {{Carbon\Carbon::parse($dossier->date_sinistre)->format('d/m/Y')}}</h4>
                    <h4 class="mb-2 font-weight-light">
                        {{Carbon\Carbon::parse($dossier->date_reception)->format('d/m/Y')}}</h4>


                </div>

            </div>



        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="container py-2 mt-3">
            <h5 class="text-center text-muted py-3">State</h5>


            <!--/first-->
            <div class="row">
                <div class="col-auto text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col border-right">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                        <span class="badge badge-pill bg-light">&nbsp;</span>
                    </h5>
                    <div class="row h-50">
                        <div class="col border-right">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <div class="col py-2">
                    <div class="card border-light shadow">
                        <div class="card-body">
                            <div class=" text-muted text-center ">

                                Expertisé
                            </div>
                            <h6 class="text-muted text-right font-weight-lighter  " style='font-size:10px'>
                                {{ 
                                    Carbon\Carbon::parse($dossier->date_expertise)->format('d/m/Y') }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <!--/second-->
            <div class="row">
                <div class="col-auto text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col border-right">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                        <span class="badge badge-pill bg-{{$state=='second'? 'danger' : 'light'}}">&nbsp;</span>
                    </h5>
                    <div class="row h-50">
                        <div class="col border-right">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <div class="col py-2">
                    <div class="card border-{{$state=='second'? 'danger' : 'light'}} shadow">
                        <div class="card-body">
                            <div class=" text-{{$state=='second'? 'danger' : 'muted'}}  text-center ">
                                {{$state=='second'?'manque  devis' : 'Devis Donné'}}
                            </div>
                            <h6 class="text-muted text-right font-weight-lighter  " style='font-size:10px'>
                                {{  $dossier->date_devis ? Carbon\Carbon::parse($dossier->date_devis)->format('d/m/Y') : '   ' }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <!--/third-->
            <div class='{{$state=='third'? 'd-block' : 'd-none'}} '>
                <div class="row ">
                    <div class="col-auto text-center flex-column d-none d-sm-flex">
                        <div class="row h-50">
                            <div class="col border-right">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                        <h5 class="m-2">
                            <span class="badge badge-pill bg-warning">&nbsp;</span>
                        </h5>
                        <div class="row h-50">
                            <div class="col border-right">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                    </div>
                    <div class="col py-2">
                        <div class="card border-warning shadow">
                            <div class="card-body">
                                <div class=" text-warning  text-center ">
                                    <T></T>Entrain de traitement'
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/fourth-->
            <div class='{{$state!='second' && $state!='third'? 'd-block' : 'd-none'}} '>
                <div class="row ">
                    <div class="col-auto text-center flex-column d-none d-sm-flex">
                        <div class="row h-50">
                            <div class="col border-right">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                        <h5 class="m-2">
                            <span class="badge badge-pill bg-light">&nbsp;</span>
                        </h5>
                        <div class="row h-50">
                            <div class="col border-right">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                    </div>
                    <div class="col py-2">
                        <div class="card border-light shadow">
                            <div class="card-body">
                                <div class=" text-muted  text-center ">
                                    Accord donné
                                </div>
                                <h6 class="text-muted text-right font-weight-lighter  " style='font-size:10px'>
                                    {{  Carbon\Carbon::parse($dossier->date_accord)->format('d/m/Y') }}</h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/fifth-->
            <div class='{{$dossier->date_accord ? 'd-block' : 'd-none'}} '>
                <div class="row ">
                    <div class="col-auto text-center flex-column d-none d-sm-flex">
                        <div class="row h-50">
                            <div class="col border-right">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                        <h5 class="m-2">
                            <span class="badge badge-pill bg-{{$state=='fifth'?'success':'warning'}}">&nbsp;</span>
                        </h5>
                        <div class="row h-50">
                            <div class="col border-right">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                    </div>
                    <div class="col py-2">
                        <div class="card border-light shadow">
                            <div class="card-body">
                                <div class=" text-{{$state=='fifth'?'success':'warning'}}  text-center  ">

                                    {{!$dossier->date_apres && $dossier->date_facture?'Manque photos':'' }}
                                    {{$dossier->date_apres && !$dossier->date_facture?'Manque facture':'' }}
                                    {{!$dossier->date_facture && !$dossier->date_apres   ?'Manque facture et photos':''}}
                                    {{!$dossier->date_rapport && $dossier->date_facture &&  $dossier->date_apres?'dossier transmis':''}}
                                </div>
                                <h6 class="text-muted text-right font-weight-lighter  " style='font-size:10px'>
                                    {{  $dossier->date_rapport ? Carbon\Carbon::parse($dossier->date_rapport)->format('d/m/Y') : '   ' }}
                                </h6>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->





    </div>
    <a class="btn c-btn btn-block text-white w-50 mx-auto my-5" href="{{route('Home')}}">
        Back
    </a>
</div>
@endif



@endsection