@extends('layouts.html')

@section('content')
<div class="max-w-3xl  mt-4 mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-4">
        <h4 class="font-bold text-gray-500">Business Record</h4>
            <table class="table table-bordered">
                    <tr>
                            <td class="font-bold">Title</td>
                            <td>{{ $product->title }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Type</td>
                            <td>{{ $product->type }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Code</td>
                            <td>{{ $product->code }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Business</td>
                            <td>{{ $product->business->title }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Business owner</td>
                            <td>{{ $product->business->user->name }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Price</td>
                            <td>{{ $product->price }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Action</td>
                            <td><a href="/product/buy/{{ $product->id }}" class="form-control btn btn-primary btn-sm">Buy</a></td>
                    </tr>
                    <tr>
                            <td ><a href="/product/{{ $product->id }}/edit" class="btn btn-info form-control">Edit</a></td>
                            <td>
                                {!! Form::open(['url'=>'product/'.$product->id,'method'=>'DELETE']) !!}
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger form-control']) !!}
                                {!! Form::close() !!}
                            </td>
                    </tr>
            </table>
    </div>
</div>
@endsection
