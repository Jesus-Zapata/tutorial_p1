
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- CSS --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- jQuery and JS bundle w/ Popper.js --><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<head>

<title>Jesus Zapata's Login Page</title>
</head>
<body>
<div class="container">
<div>
<h1>Please Log In</h1>
<p1>
    you dont have to have an account
</p1>

<form method="POST" action="{{ route('login') }}">
@csrf

<label for="nam">User Name</label>
<input id="nam" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><br/>
<label for="id_1723">Password</label>
<input id="id_1723" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><br/>

<button class="btn waves-effect waves-light" type="submit" name="action">Submit
  </button>
<button class="btn waves-effect waves-light" type="submit" name="cancel">Cancel
  </button>
</form>
<p> 
</p>
</div>
</div>
</body>