@extends('admin.app')
@section('content')
<div class="content">
    @if(Session::has('msg'))

    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Success</span>
        {{ Session::get('msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Header</th>
                <th scope="col">Description</th>
                <th scope="col">Ending Date</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
                <th scope="col">Apply</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
            <tr>
                <td>{{$item->id}}</th>
                <td>{{$item->header}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->Date_fin}}</td>
                <td> <button class="btn btn-danger"><i class="ti-close"></i> Delete</button></td>
                <td> <button class="btn btn-success"><i class="ti-brush "></i> Edit</button></td>
                <td> <button class="btn btn-light"><i class="ti-check   "></i>Aplly</button></td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection