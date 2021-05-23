@extends('layouts.html')

@section('content')


@if (!empty($business->journal) )

        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-3">
                @include('layouts.inc.sessions')
                    <h4 class="font-bold text-gray-400">Transaction record for {{ $business->title }} Owner {{ $business->user->name }}</h4>
                  <ul class="list-group">
                      <li class="list-group-item">Income(Debit) and Expenses(Credit) </li>
                      <li class="list-group-item">Credits<br><br>
                          @foreach ($journals as $journal)
                                              @if (!empty($journal->credit))

                                                    <p>Product <b>{{ $journal->productName }}</b> of price <b>{{ $journal->credit }}</b> was credited at <b>{{ $journal->created_at }}</b>

                                             @endif
                        @endforeach

                      </li>
                      <li class="list-group-item">Debits<br><br>
                        @foreach ($journals as $journal)
                                @if (!empty($journal->debit))

                                    <p>Product <b>{{ $journal->productName }}</b> of price <b>{{ $journal->debit }}</b> was debited at <b>{{ $journal->created_at }}</b>

                                @endif
                         @endforeach

                  </li>
                  </ul>

            </div>
        </div>
        </div>


@else
        <h4 class="font-bold text-gray-400 text-center mt-10">No journal record found.</h4>
  @endif

@endsection
