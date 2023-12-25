@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-2 mb-2">
            <div class="pull-left">
                <h2>notepads</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('notepads.create') }}" class="btn btn-success">Create New notepad</a>
            </div>
        </div>
    </div>


    
    <table class="table table-bordered mt-2">
        <tr>
            <th>Name</th>
            <th>Color</th>
            <th>Price</th>
            <th>Create At</th>
        </tr>
        @foreach ($notepads as $notepad)
            <tr>
                <td>{{ $notepad->name }}</td>
                <td>{{ $notepad->color }}</td>
                <td>{{ $notepad->price }}</td>
                <td>{{ $notepad->created_at }}</td>
                <td>
                    <a href="{{ route('notepads.show', $notepad->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('notepads.edit', $notepad->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('notepads.destroy', $notepad->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection