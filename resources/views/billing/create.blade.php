@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      
        <div class="col-5">
            <form method="post" action="{{ route('billing.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control-group mb-3">
                        <label class="form-label" for="">Client</label>
                        <select name="client_id" id="" class="form-control">
                            @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Amount</label>
                        <input type="text"
                            name="amount"
                            class="form-control @error('amount') is-invalid @enderror"
                            value="" required
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
                            value="" required
                            placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Description</label>
                        <textarea class="form-control" name="description" id="" cols="50" rows="0"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-info btn-block">Create</button>
                        </div>
                    </div>
            </form>
        </div>
        
        
    </div>
@endsection
