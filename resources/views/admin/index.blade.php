<?php
	 $admin=Session::get('admin');

?>
<html>
@extends('layouts.master')

 @section('title', 'HOME-admin')

@section('admin')
{{ $admin }}
@endsection

@section('content')
	<table class="table view-users" style="width: 80% !important; margin-top: 10%;float: right;">
  	<h4 style="margin-left:233px;margin-top:60px;margin-bottom: -23px;">LIST OF USER</h4>
  	<td> <a type="button" href="/users/show" class="btn btn-info" style="background-color: orange;border:transparent;">INSERT</a></td>
    <tr>
      
      <th>ID</th>
      <th>Account</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user )
    <tr>
      
      <td>{{$user->ID}}</td>
      <td>{{$user->Account}}</td>
      <td>{{$user->email}}</td>
      <td> <a  href="/users/{{ $user->ID }}/edit" type="button" class="btn btn-info">Edit</a></td>
      <td> <button type="button" class="btn btn-info">Delete</button></td>
    </tr>
    @endforeach
    <tr> <td>{{ $users->links() }}</td></tr>
  </tbody>
</table>
@endsection
</html>