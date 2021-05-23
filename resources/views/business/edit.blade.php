@extends('layouts.html')

@section('content')

<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-4">
            <h4 class="font-bold text-gray-500">Create business</h4>

                {!! Form::open(['url'=>'business/'.$business->id,'method'=>'PUT']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Business title', ) !!}
                        {!! Form::text('title', $business->title, ['class'=>'form-control']) !!}

                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('type', 'Business type', ) !!}
                        {!! Form::text('type', $business->type, ['class'=>'form-control']) !!}

                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Business email', ) !!}
                        {!! Form::text('email', $business->email, ['class'=>'form-control']) !!}

                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('address', 'Business address', ) !!}
                        {!! Form::text('address', $business->address, ['class'=>'form-control']) !!}

                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Business phone', ) !!}
                        {!! Form::text('phone', $business->phone, ['class'=>'form-control']) !!}

                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    {!! Form::submit('Create business', ['class'=>'form-control btn btn-primary']) !!}

                {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection
