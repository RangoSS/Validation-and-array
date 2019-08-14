<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>map demo</title>
  <style>
  p {
    color: red;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<p><b>Values: </b></p>
<form>
  <input type="text" name="name" value="">
  <input type="text" name="password" value="">
  <input type="text" name="url" value="">
  <input type="button" name="url" value="" onclick="display();">
</form>
 
<script>

  function display(){
$( "p" )
  .append( $( "input" ).map(function() {
    return $( this ).val();
  })
  .get()
  .join( ", " ) );

}
</script>
 
</body>
</html>