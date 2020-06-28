@extends('layout')

@section('forma')
<div class="container">
    <h2>Create form</h2>
    <form action="/subscribers" method="POST">
        @csrf
        @method("POST")
        <div class="form-group">
            <label for="first_name">Ime:</label>
            <input type="first_name" class="form-control" id="first_name" placeholder="Unesi ime" name="first_name" required>
          </div>
          <div class="form-group">
            <label for="last_name">Prezime:</label>
            <input type="last_name" class="form-control" id="last_name" placeholder="Unesi prezime" name="last_name" required>
          </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Unesi email" name="email" required>
        @error('subscribers')
            {{ $message }}
        @enderror
    </div>


      <button type="submit" class="btn btn-default">Prijavi se!</button>
    </form>
  </div>
@endsection
