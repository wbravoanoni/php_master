<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<script>
$.ajax({
	url:"personas.php",
	method:"POST",
	dataType:"html",
	success:function(result){
		console.log(result);

		$("#divesponde").html(result);
	}
});	
</script>


<p id="divesponde">Mensaje</p>