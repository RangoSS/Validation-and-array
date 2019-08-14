<html>
<head>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>

<style type="text/css">
	.ABox{
		padding:8px;
		border:1px solid blue;
	}
	.BBox{
		padding:8px;
		border:1px solid red;
	}
</style>

</head>
<body>
  <h1>jQuery empty() and remove() example</h1>

  <div class="ABox">
	I'm a A box
	<div class="BBox">I'm a B box</div>
   </div>
  
  <p>
  <button id="empty">empty()</button>
  <button id="remove">remove()</button>
  <button id="reset">reset</button>
  </p>
  
<script type="text/javascript">
	
    $("#reset").click(function () {
	  location.reload();
    });
	
    $("#empty").click(function () {
		
	  $('.ABox').empty();
	  
    });
	
    $("#remove").click(function () {
		
	  $('.ABox').remove();
	  
    });
	
	
</script>
</body>
</html>
