@extends('layouts.html')
@section('content')
<div class="card w-100">
    <div class="card-body">
        @if (count($businesses) >0)

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-4">
                <h4 class="font-bold text-gray-500">Create product</h4>

                {!! Form::open(['route'=>'product.store']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Product title', ) !!}
                        {!! Form::text('title', '', ['class'=>'form-control']) !!}

                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('type', 'Product type', ) !!}
                        {!! Form::text('type', '', ['class'=>'form-control']) !!}

                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('code', 'Product code') !!}
                        {!! Form::text('code', '', ['class'=>'form-control']) !!}

                        @error('code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('price', 'Product price', ) !!}
                        {!! Form::text('price', '', ['class'=>'form-control']) !!}

                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group">
                     {!! Form::label('percentage','Percentage Profit in product') !!}
                     {!! Form::text('percentage','',['class'=>'form-control']) !!}
                     @error('percentage')
                     <div class="text-danger">{{ $message }}</div>
                 @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('business', 'Select Businesss') !!}

                        <select name="business" id="business" class="form-control">
                            <option value="" hiddent selected>Select business</option>
                            @foreach ($businesses as $business)
                                <option value="{{ $business->user_id }}">{{ $business->title }}</option>
                            @endforeach
                        </select>

                        @error('business')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    {!! Form::submit('Create product', ['class'=>'form-control btn btn-primary']) !!}

                {!! Form::close() !!}

        </div>
    </div>
    </div>
  @else
        <h4 class="font-bold text-gray-400 text-center mt-10">Create business before adding product</h4>
    @endif
    </div>
  </div>



@endsection
