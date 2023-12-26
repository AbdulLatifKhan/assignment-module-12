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
                          <h4 class="fs-16 mb-1">Available Trips</h4>
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
                    @foreach($availableTrip as $trip)
                    <form action="{{ route('admin.users.store')}}" method="POST">
                        
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="from" class="form-label">From</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control bg-white border-0" name="from"  value="{{$searchDepartureStopage}}" readonly>
                            </div>
                            @error('from')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="to" class="form-label">To</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control bg-white border-0" name="to" value="{{$searchArrivalStopage}}" readonly>
                            </div>
                            @error('to')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="date" class="form-label">date</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control bg-white border-0" name="date" value="{{$searchDate}}" readonly>
                            </div>
                            @error('date')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="arrival_time" class="form-label">Departure Time</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control bg-white border-0" name="departure_time" value="{{$trip->departure_time}}" readonly>
                            </div>
                            @error('departure_time')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="arrivalTime" class="form-label">Arrival Time</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control bg-white border-0" name="arrival_time" placeholder="Enter your name" value="{{$trip->arrival_time}}" readonly>
                            </div>
                            @error('arrival_time')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>



                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                            </div>
                            <div class="col-lg-9">
                                
                                <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                            </div>
                            @error('phone_number')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="contactNumber" class="form-label">Seat</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select mb-3" name="seat_id">
                                    @foreach($seats as $seat)
                                    <option value="{{$seat->id}}">{{$seat->seat_number}}</option>
                                    @endforeach
                                </select>

                            </div>
                            @error('seat_id')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Buy Ticket</button>
                        </div>

                    </form>
                    @endforeach
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