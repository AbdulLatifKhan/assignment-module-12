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
                          <h4 class="fs-16 mb-1">Search Bus</h4>
                      </div>
                  </div>
                    {{-- end card header --}}
              </div>
              {{--end col--}}
            </div>
            {{--end row--}}

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
              
              <div class="row mb-3 pb-1 pt-5">
                <div class="col-1">

                </div>
                <div class="col-6">
                    <form action="{{ route('admin.trip.searhBus')}}" method="GET">
                      @csrf
                        <div class="mb-3">
                            <label for="from" class="form-label">From</label>
                            <input type="text" class="form-control" value="{{ old('from')}}" id="from" name="from" placeholder="Enter City">
                        </div>
                        <div class="mb-3">
                            <label for="to" class="form-label">To</label>
                            <input type="text" class="form-control" value="{{ old('to')}}" id="to" name="to" placeholder="Enter City">
                        </div>
                        <div class="mb-3">
                          <label for="tdate" class="form-label">Date</label>
                          <input type="date" class="form-control" name="date" value="{{ old('to')}}">
                      </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary form-control">Search Bus</button>
                        </div>
                    </form>
                </div>
                <div class="col-5">

                </div>
                {{--end col--}}
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