
@extends('layouts.master')

@section('sidebar')
        <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    
    <h1>Laravel lab</h1>
		<table>
		  <thead>
		  <tr>
		      <th>Id</th>
		      <th>Name</th>
		      <th>Skill</th>
		      <th>Address</th>
		      </tr>
		  </thead>
		  <tbody>
		      <tr>
		          <td>{{ $id }}</td>
		          <td>{{ $name }}</td>
		          <td>{{ $skill }}</td>
		          <td>{{ $address }}</td>
		          <td>{{ $url=URL::route("show",array('10')) }}<a href="{{$url}}">Detail</a></td>
		      </tr>
		  </tbody>
		</table>  
@stop

