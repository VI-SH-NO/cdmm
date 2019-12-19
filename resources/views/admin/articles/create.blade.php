@extends('admin.app')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
<div>{{$error}}</div>
@endforeach
@endif
<div class="content w-75 mx-auto  p-5">
    <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data"'>
        @csrf
        <div class="row form-group">
            <div class="col-12 col-md-9">
                <p class="form-control-static">Article</p>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Header</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="header" placeholder="Header..."
                    class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
            <div class="col-12 col-md-9"><textarea name="description" id="description" rows="1" maxlength="60"
                    placeholder="Description..." class="form-control"></textarea></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Body</label></div>
            <div class="col-12 col-md-9"><textarea name="body" id="body" rows="9"
                    placeholder="Body..." class="form-control"></textarea></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Debut</label></div>
            <div class="col-12 col-md-9">
            <input type="date" name="debut" id="" class="form-control">    
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Duration</label></div>
            <div class="col-12 col-md-9"><input type="number" id="text-input" name="duration"
                    placeholder="XXX days..." class="form-control" max="30" min="1"></div>
        </div>
     
        <div class="form-actions form-group w-50 mx-auto "><button type="submit"
                class="btn btn-success btn-sm btn-block w-50 mx-auto">Suivant</button></div>
    </form>
    
</div>


@endsection