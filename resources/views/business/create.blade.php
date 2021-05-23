@extends('layouts.html')
@section('content')
   {{-- @if (count($record) == 0) --}}
   @if (count($userid) == 0)

   <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-4">
                <h4 class="font-bold text-gray-500">Create business</h4>
                {!! Form::open(['route'=>'business.store']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Business title', ) !!}
                        {!! Form::text('title', '', ['class'=>'form-control']) !!}

                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('type', 'Business type', ) !!}
                        {!! Form::text('type', '', ['class'=>'form-control']) !!}

                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Business email', ) !!}
                        {!! Form::text('email', '', ['class'=>'form-control']) !!}

                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('address', 'Business address', ) !!}
                        {!! Form::text('address', '', ['class'=>'form-control']) !!}

                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Business phone', ) !!}
                        {!! Form::text('phone', '', ['class'=>'form-control']) !!}

                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    {!! Form::submit('Create business', ['class'=>'form-control btn btn-primary']) !!}

                {!! Form::close() !!}

        </div>
    </div>
    </div>
  @else
        <h4 class="font-bold text-gray-400 text-center mt-10">You have already created business, check dashboard</h4>
    @endif
@endsection
