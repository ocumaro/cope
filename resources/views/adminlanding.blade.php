@extends('layouts.admin')

@section('content')
<div class="cardss">
  <div class="card">
  <span class="small-text">Check Out</span>
  <span class="title">Total users :</span>
  <span class="desc">
    {{$usercount}}
  </span>
</div>

<div class="card">
  <span class="small-text">Check Out</span>
  <span class="title">Accepted users :</span>
  <span class="desc">
    {{$acceptedUsers}}
  </span>
</div>

<div class="card">
  <span class="small-text">Check Out</span>
  <span class="title">users in waitlist:</span>
  <span class="desc">
    {{$waitingUsers}}
  </span>
</div>
</div>

@endsection