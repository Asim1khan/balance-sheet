@extends('layouts.html')

@section('content')
<div class="max-w-3xl  mt-4 mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-4">
        <h4 class="font-bold text-gray-500">Business Record</h4>
            <table class="table table-bordered">
                    <tr>
                            <td class="font-bold">Title</td>
                            <td>{{ $business->title }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Type</td>
                            <td>{{ $business->type }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Email</td>
                            <td>{{ $business->email }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Owner</td>
                            <td>{{ $business->user->name }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Phone</td>
                            <td>{{ $business->phone }}</td>
                    </tr>
                    <tr>
                            <td class="font-bold">Address</td>
                            <td>{{ $business->address }}</td>
                    </tr>
                    <tr>
                            <td ><a href="/business/{{ $business->id }}/edit" class="btn btn-info form-control">Edit</a></td>
                            <td>
                                {!! Form::open(['url'=>'business/'.$business->id,'method'=>'DELETE']) !!}
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger form-control']) !!}
                                {!! Form::close() !!}
                            </td>
                    </tr>
            </table>
    </div>
</div>
@endsection
