@extends('layouts.admin')

@section('content')
<h1>Show</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">is accepted</th>
    </tr>
  </thead>
  <tbody>@foreach($users as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->is_accepted}}</td>
      <td>
       @if($item->is_accepted===0)
      <form action="/admin/accepted">
        @csrf
        <input type="hidden" name="userId" value="{{$item->id}}">
        <button type="submit" class="btn btn-primary">Accept</button>
        </form>
        @endif
        <form action="/admin/delete/{{$item->id}}">
            @csrf
        <button type="submit" class="btn btn-danger">Reject</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
 
</table>
@endsection