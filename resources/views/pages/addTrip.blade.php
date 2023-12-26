@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

    @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
    @endif
        
      <div class="row">
        <div class="col">
          <div class="h-100">

            <div class="row mb-3 pb-1">
              <div class="col-12">

                  <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                      <div class="flex-grow-1">
                          <h4 class="fs-16 mb-1">Make A Trip :</h4>
                      </div>
                  </div>
                    {{-- end card header --}}
              </div>
              {{--end col--}}
            </div>
            {{--end row--}}
            <div class="row mb-3 pb-1">
                <div class="col-1">

                </div>
                <div class="col-6">
                    <form action="{{ route('admin.trip.store')}}" method="POST">
                      @csrf
                       <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="date">
                        @error('date')
                                <p class="text-danger">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="from" class="form-label">From</label>
                            <select class="form-select mb-3" name="from">
                              @foreach ($locations as $location)
                              <option value="{{$location->name}}">{{$location->name}}</option>
                              @endforeach
                            </select>
                        @error('from')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-5">
                          <p class="fs-5">To</p>

                          @foreach($locations as $location)
                          <div class="form-check form-check-inline ps-5">
                            <input class="form-check-input" type="checkbox" name="to[]" value="{{$location->name}}">
                            <label class="form-check-label" for="destination">{{$location->name}}</label>
                          </div>
                          @endforeach

                          @error('to')
                            <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>


                        <div>
                          <label for="departure_time" class="form-label">Departure time</label>
                          <input type="time" class="form-control" name="departure_time" value="">
                        @error('departure_time')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                        </div>
                        <div>
                          <label for="arrival_time" class="form-label">Arrival Time</label>
                          <input type="time" class="form-control" name="arrival_time" value="">
                        @error('arrival_time')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary form-control">Create Trip</button>
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