@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{route('client.create')}}" class="btn btn-info">Register</a>
        <div>
            <table class="table table-fixed">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td><img src="{{ asset($client->photo) }}" class="rounded-circle" width="60px" height="60px" alt=""></td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->address }}</td>
                        <td class="d-flex">
                        <form method="post" action="{{ route('client.destroy', $client->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm rounded-md" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                        <a class="btn btn-sm btn-warning ml-2" href="{{ route('client.edit', $client->id) }}">Edit</a>
                        </td>
                        
                      
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $clients->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
