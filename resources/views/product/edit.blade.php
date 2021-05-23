@extends('layouts.html')

@section('content')
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-4">
                <h4 class="font-bold text-gray-500">Edit product</h4>

                {!! Form::open(['url'=>'product/'.$product->id,'method'=>'PUT']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Product title', ) !!}
                        {!! Form::text('title', $product->title , ['class'=>'form-control']) !!}

                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('type', 'Product type', ) !!}
                        {!! Form::text('type', $product->type , ['class'=>'form-control']) !!}

                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('code', 'Product code') !!}
                        {!! Form::text('code', $product->code, ['class'=>'form-control']) !!}

                        @error('code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('price', 'Product price', ) !!}
                        {!! Form::text('price', $product->price, ['class'=>'form-control']) !!}

                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group">
                        {!! Form::label('business', 'Select Businesss') !!}
                        {!! Form::label('business', $product->business->title, ['class'=>'form-control']) !!}


                    {!! Form::submit('Update product', ['class'=>'form-control btn btn-primary']) !!}

                {!! Form::close() !!}

        </div>
    </div>
    </div>
 @endsection
