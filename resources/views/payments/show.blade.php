@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">payments Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <p class="card-text">Enroll No : {{ $payments->enrollment->enroll_no ?? '-' }}</p>
        <p class="card-text">Start Date : {{ $payments->paid_date }}</p>
        <p class="card-text">Start Date : {{ $payments->amount }}</p>
       
    </hr>
  
  </div>
</div>
@endsection