@extends('master')
@section('content')

<main class="form-signin w-100 m-auto">
    <form>
      <center><img class="mb-4" src="/img/pethub-logo-dark.png" alt="" width="100" height="100"></center>
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
    <small> <a href="/register">Register Now!</a> </small>
  </main>

@endsection