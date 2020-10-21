<!DOCTYPE html>
<html>
<!-- CSS --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- jQuery and JS bundle w/ Popper.js --><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<head>
<title>Jesus Zapata - Even/Odd</title>
</head>
<body>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">
<div class="login-box">
<h1>Welcome to Even/Odd</h1>
<p><strong>Note:</strong> This code is running on caffeine
</p>
<p>
<a href="{{route('home.signin')}}">Login</a>
</p>
<p>
Attempt to go to 
<a href="game">game.php</a> without logging in - it should fail with an error message.
<p>
<strong>How does the game work:</strong>
    The computer and you will say a number and predict wether the sum of both of them 
    will be odd or even.
    
    Wins the one that predicts the correct answer (Both can answer correctly or both can also loose)
</p>
</div rigth = "10px">
</p>
</div>  
</body>
</html>