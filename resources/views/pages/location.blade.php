@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">
        
      <div class="row">
        <div class="col">
          <div class="h-100">

            <div class="row mb-3 pb-1">
              <div class="col-12">
                  <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                      <div class="flex-grow-1">
                          <h4 class="fs-16 mb-1">Add New Location</h4>
                      </div>
                  </div>
                    {{-- end card header --}}
              </div>
              {{--end col--}}
            </div>
            {{--end row--}}

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
           @endif
              
              <div class="row mb-3 pb-1 pt-5">
                <div class="col-1"></div>

                <div class="col-6">

                    <form action="{{route('admin.location.store')}}" method="POST">
                        
                        @csrf
                        <div class=" mb-3">
                                <label for="name" class="form-label fs-3 pb-1">Location :</label>
                                <input type="text" class="form-control " name="name" placeholder="Enter Location Name">

                        </div>
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

  
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary form-control ">Add Location</button>
                        </div>

                    </form>
                  
                </div>

                <div class="col-5"></div>
              </div>

            
            {{-- end row--}}


          </div>
          {{-- end .h-100--}}
        </div>
        {{-- end col --}}
      </div>
    </div>
    {{-- container-fluid --}}
  </div>
    
@endsection