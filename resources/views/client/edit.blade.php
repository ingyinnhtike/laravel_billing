@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      
        <div class="col-5">
            <form method="post" action="{{ route('client.update', $client->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="">Client Name</label>
                        <input type="text"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ $client->name }}"
                            placeholder="Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Email</label>
                        <input type="text"
                            name="email"
                            class="form-control"
                            value="{{ $client->email }}"
                            placeholder="Email">
                    </div>

                  

                    <div class="form-control-group mb-3">
                        <label class="form-label" for="">Phone</label>
                        <input type="text"
                            name="phone"
                            class="form-control"
                            value="{{ $client->phone }}"
                            placeholder="Phone">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Address</label>
                        <textarea class="form-control" name="address" id="" cols="50" rows="0">{{ $client->address }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Photo</label>
                        <img class="rounded-circle" src="{{asset($client->photo) }}" width="70px" height="70px" alt="">
                        <input type="file" name="photo" class="form-control">
                        <input type="hidden" name="old_photo" value="{{ $client->photo }}">
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
