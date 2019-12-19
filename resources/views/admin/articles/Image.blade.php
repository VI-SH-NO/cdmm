@extends('admin.app')
@section('content')

<div class="content w-75 mx-auto  p-5">

    <form action="{{route('addImage')}}" class="dropzone w-75 mx-auto" method="POST">
        @csrf
        <div class="fallback">
            <input name="file" type="file" multiple />
        </div>
        <input type="hidden" name="articleId" value="{{ $id}}">


    </form>
    <div class="form-actions text-right form-group w-50 mx-auto mt-5 "><button type="submit"
            class="btn btn-success btn-sm btn-block w-50 mx-auto" id="uploadfiles">Create</button></div>
</div>



@endsection