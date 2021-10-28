@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      
        <div class="col-5">
            <form method="post" action="{{ route('client.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="">Client Name</label>
                        <input type="text"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value=""
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
                            value="" required
                            placeholder="Email">
                    </div>

                  

                    <div class="form-control-group mb-3">
                        <label class="form-label" for="">Phone</label>
                        <input type="text"
                            name="phone"
                            class="form-control"
                            value="" required
                            placeholder="Phone">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Address</label>
                        <textarea class="form-control" required name="address" id="" cols="50" rows="0"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Photo</label>
                        <input type="file" required name="photo" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-info btn-block">Register</button>
                        </div>
                    </div>
            </form>
        </div>
        
        
    </div>
@endsection
