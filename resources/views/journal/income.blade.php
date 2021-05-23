@extends('layouts.html')

@section('content')
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-4">
           <h1>Total expenses</h1>
           <div class="card" style="width: 18rem;">
               <div class="card-body">
                       {{ $data }}
               </div>
             </div>
             <h1>Total income</h1>
             <div class="card" style="width: 18rem;">
               <div class="card-body">
                   {{ $data1 }}
               </div>
             </div>


    </div>
    </div>
 @endsection
