<head>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<form>
  <label>name</label><input type="text" name="name" id="itemname" value=""><br>
  <label>surname</label><input type="text" name="surname" id="surname" value=""><br>
  <label>username</label><input type="text" name="user_name" id="user_name" value=""><br>
  <label>password</label><input type="text" name="password" id="password" value=""><br>
  <label>school</label><input type="text" name="school" id="school" value=""><br>
  <label>job type</label><input type="text" name="job_type" id="job_type" value=""><br>
  
  <input type="button" id="addquotation" name="url" value="Submmiting" onclick="aadToAraay();">
</form>

<div id="displayResults">


</div>
<script >
var quotations = Array();

function aadToAraay(){

    var myName=$('#itemname').val();
    var mySurname=$('#surname').val();
    var myUsername=$('#user_name').val();
    var myPassword=$('#password').val();
    var mySchool=$('#school').val();
    var myJob=$('#job_type').val();

    quotations.push(myName);
    quotations.push(mySurname);
    quotations.push(myUsername),
    quotations.push(myPassword),
    quotations.push(mySchool),
    quotations.push(myJob);

               ListOnTable();
}

function ListOnTable(){

    $('#displayResults').html('');
    if (quotations.length >0){
        for(var i=0;i <quotations.length;i++){
            var output= quotations[i];
            $('#displayResults').html(output);  
        }
    }


}

</script>




</body>


