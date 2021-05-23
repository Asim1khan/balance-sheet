@extends('layouts.html')
@section('content')
<div class="card w-100">
    <div class="card-body">
        @if (count($products) > 0)
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-3">
                @include('layouts.inc.sessions')
                    <h4 class="font-bold text-gray-400">Products</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Business</th>
                                <th>Price</th>
                                <th>Purchase</th>
                                <th>Record</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->type }}</td>
                                    <td>{{ $product->business->title }}</td>
                                    <td>{{ ((100+$product->percentage)*$product->price) /100}}</td>
                                    <td><a href="/product/buy/{{ $product->id }}" class="btn btn-info btn-sm">Buy</a></td>
                                    <td><a href="/product/{{ $product->id }}" class="btn btn-info btn-sm">Show</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
        </div>
@else
        <h4 class="font-bold text-gray-400 text-center mt-10">No Product found.</h4>
  @endif
    </div>
  </div>
@endsection
