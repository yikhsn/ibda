@extends('layouts.master')

@section('title')
    <title>Login ke Qur'anKu</title>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-2">
        <form method="POST" action="/register">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name">    
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">    
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">    
          </div>
          <div class="form-group">
              <label for="password_confirmation">Password Confirmed</label>
              <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">    
            </div>
          <button type="submit" class="btn btn-danger">Register</button>      
        </form>      
    </div>
  <div class="col-md-8">
@endsection