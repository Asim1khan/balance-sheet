@extends('layouts.html')

@section('content')


{{-- @if (count($businesses) == 0 ) --}}
@if (count($userid) == 0 )

    <h4 class="font-bold text-gray-400 text-center mt-10">No business record found, create one.</h4>
  @else
  <div class="card w-100">
    <div class="card-body">
       <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-3">
                  @include('layouts.inc.sessions')
                  <h4 class="font-bold text-gray-400">Your Business</h4>
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>Title</th>
                              <th>Type</th>
                              <th>Owner</th>
                              <th>Email</th>
                              <th>Record</th>
                              <th>Transactions</th>
                          </tr>
                      </thead>
                      <tbody>
                          {{-- @foreach ($businesses as $business)
                              <tr>
                                  <td>{{ $business->title }}</td>
                                  <td>{{ $business->type }}</td>
                                  <td>{{ $business->user->name }}</td>
                                  <td>{{ $business->email }}</td>
                                  <td><a href="/business/{{ $business->id }}" class="btn btn-info btn-sm">Show</a></td>
                                  <td><a href="/transaction/{{ $business->id }}" class="btn btn-info btn-sm">Show</a></td>
                              </tr> --}}
                              @foreach ($userid as $userid)

                              <tr>
                                <td>{{ $userid->title }}</td>
                                <td>{{ $userid->type }}</td>
                                <td>{{ $userid->user->name }}</td>
                                <td>{{ $userid->email }}</td>
                                <td><a href="/business/{{ $userid->id }}" class="btn btn-info btn-sm">Show</a></td>
                                <td><a href="/transaction/{{ $userid->id }}" class="btn btn-info btn-sm">Show</a></td>

                                {{-- <td>{{ $userid->user->name }}</td> --}}
                                {{-- <td>{{ $userid->email }}</td> --}}

                                {{-- <td>{{ $business->user->name }}</td>
                                <td>{{ $business->email }}</td>
                                <td><a href="/business/{{ $business->id }}" class="btn btn-info btn-sm">Show</a></td>
                                <td><a href="/transaction/{{ $business->id }}" class="btn btn-info btn-sm">Show</a></td> --}}
                            </tr>
                          @endforeach

                      </tbody>
                  </table>

          </div>
      </div>
  </div>
    </div>
  </div>
  @endif

@endsection


