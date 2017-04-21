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

	<div class="container">
  <h2 style="width:50%;margin-left:30%;">EDIT USER:</h2>
  <form style="width:50%;margin-left:30%;" action="/users/{{ $id }}/edit" method="post">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <div class="form-group">
      <label for="email">Account:</label>
      <input type="text" class="form-control" name="Account" placeholder="Enter Account">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" name="Password" placeholder="Enter Password">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
    
    <button type="submit" class="btn btn-default">Add</button>
  </form>
</div>
@endsection
</html>