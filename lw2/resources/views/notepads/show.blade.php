@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 mt-2 mb-2">
            <div class="pull-left">
                <h2>notepad {{ $notepad->name }}</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12  mt-2 mb-2">
            <div class="form-group">
                <a class="btn btn-success" href="{{ route('notepads.index') }}">Back</a>
            </div>
        </div>
    </div>

<table class="table table-bordered mt-2">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Color</th>
            <th>Price</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        <tr>
            <td>{{ $notepad->id }}</td>
            <td>{{ $notepad->name }}</td>
            <td>{{ $notepad->color }}</td>
            <td>{{ $notepad->price }}</td>
            <td>{{ $notepad->created_at }}</td>
            <td>{{ $notepad->updated_at }}</td>
        </tr>
</table>
@endsection