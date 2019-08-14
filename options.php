<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<form>
<select id="dropdownList">
    <option value="">--select--</option>
    <option value="1">danies</option>
    <option value="2">toy</option>
    <option value="3">house</option>
    <option value="4">home</option>
</select>
<input type="button" value="submit" onclick="submmiting();"/>
<form>
<script type="text/javascript">

	function submmiting(){
	
            //var optionValue = $(this).val();
        //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
       /* var optionText = $("#dropdownList option:selected").text();
       
        if (optionText).val() === ""){
            alert("select game");
            return false;
        }
        else{
        	if(optionText.length !==0){
        	alert("Selected Option Text: "+optionText);	
        	}
        	
        }
        //alert("Selected Option Text: "+optionText);
    */

if ($("#dropdownList").val() === "") {
    // ...
   alert("this cant be emty");
}
}


</script>