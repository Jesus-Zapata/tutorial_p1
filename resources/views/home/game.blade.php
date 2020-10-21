
<html>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<title>Jesus Zapata Even/odd</title>
</head>
<!-- CSS --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- jQuery and JS bundle w/ Popper.js --><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<body>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="login-box">
<h1>Even / Odd Game</h1>
your last result was: {{Auth::user()->last_mss}}
<p>Please select a number type and press Play</p>
<form action="{{url('someurl')}}" method="post">
@csrf
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<input type="radio" name="odd" id="reveal" value = 1 color = #ff7043 ><label> ODD</label>
<input type="radio" name="odd" id="reveal" value = 0 ><label> EVEN</label>
    <p>
       <input  type="text" name="human" id="id_number"  value={{ $Hnumber ?? ''}} size = 20px/><label><-   Insert a number</label>
    </p>
<
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<button class="btn waves-effect waves-light" type="submit" name="action">Play

</form>
<pre>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
{{ $mss }}
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</pre>
</div>
</body>
</html>
