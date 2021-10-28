@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      
        <div class="col-5">
            <form method="post" action="{{ route('billing.update', $billing->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-control-group mb-3">
                        <label class="form-label" for="">Client</label>
                        <select name="client_id" id="" class="form-control">
                            
                            @foreach($clients as $client)
                                @if($client->id == $billing->client->id)
                                <option value="{{ $client->id }}" selected>{{ $client->name }}</option>
                                @endif
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Amount</label>
                        <input type="text"
                            name="amount"
                            class="form-control @error('amount') is-invalid @enderror"
                            value="{{ $billing->amount }}"
                            placeholder="Amount">
                        @error('amount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Due Date</label>
                        <input type="date"
                            name="due_date"
                            class="form-control"
                            value="{{ $billing->due_date }}"
                            placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Description</label>
                        <textarea class="form-control" name="description" id="" cols="50" rows="0">{{ $billing->description }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-info btn-block">Update</button>
                        </div>
                    </div>
            </form>
            @if ( Session::has('success') )
            <div class="alert alert-sm alert-dismissible fade show mt-5 alert-success text-sm" role="alert">
                <h3>{{ Session::get('success') }}</h3>
            </div>
            @endif
        </div>
        
        
    </div>
@endsection
