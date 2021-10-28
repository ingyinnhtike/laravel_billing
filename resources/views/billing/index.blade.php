@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{route('billing.create')}}" class="btn btn-info">Create</a>
        <div>
            <table class="table table-fixed">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Amount</th>
                        <th>Due Date</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($bills as $bill)
                    <tr>
                        <td>{{ $bill->client->name }}</td>
                        <td>{{ $bill->amount }}</td>
                        <td>{{ $bill->due_date }}</td>
                        <td>{{ $bill->description }}</td>
                        <td class="d-flex">
                        <form method="post" action="{{ route('billing.destroy', $bill->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm rounded-md" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                        <a class="btn btn-sm btn-warning ml-2" href="{{ route('billing.edit', $bill->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
           {{ $bills->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
