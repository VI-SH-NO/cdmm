<header>
    <div
        class="d-flex flex-column flex-md-row align-items-center p-3 h-100 px-md-4 mb-0 bg-white border-bottom shadow-sm main-nav">
        <h5 class="my-0 mx-5 mr-md-auto font-weight-normal main-logo">
            <a href="#" class="text-dark main-logo">
                C<span class="d">D</span>MA<sub class="sub ml-2">Solutions</sub>
            </a>
        </h5>
        <nav class="my-4 my-md-0 mr-md-3 mx-5">
            <a class="p-2 text-dark" href="{{route('Home')}}">Home</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">About Us</a>
        </nav>
        <div class="my-4 my-md-0 mr-md-3 mx-5">
            <button type="button" class="btn c-btn" data-toggle="modal" data-target="#exampleModal">
                Client
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:#ffa975">Welcome Client</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{route('client')}}">
                                @csrf
                                <p class="font-weight-bolder">Notre plateforme client vous offre la possibilite de
                                    suivre votre dossier</p>

                                <input name='matricule' type="text" id="inputEmail" class="form-control mb-3"
                                    placeholder="Matricule" required autofocus />
                                <input name='code' type="text" id="inputEmail" class="form-control mb-3"
                                    placeholder="Code dossier" autofocus />



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light " data-dismiss="modal">back</button>
                            <button type="submit" class="btn c-btn">Enter</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>