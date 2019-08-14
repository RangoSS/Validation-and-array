<?php

include "hedds.php";
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
    #login .container #login-row #login-column #login-box {
  margin-top: 5%;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}

#login .container #login-row #login-column #login-box #login-form {
  padding: 2%;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -20%;
}

#login2 .container #login-row #login-column #login-box{
     background-color: #EAEAEA;
     margin-top: 5%;

}
    </style>
<link href="css/logoinStyle.css" rel="stylesheet" id="bootstrap-css">

    <div id="login" >
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container" id="login" >
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="loginBackAlone.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="usernames" class="text-info">Username:</label><br>
                                <input type="text" name="usernames" id="usernames" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="passwords" class="text-info">Password:</label><br>
                                <input type="text" name="passwords" id="passwords" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info" id="goToRegister" onclick="$('#login2').show();$('#login').hide()">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
      //  $(document).ready(function(){
      //   $("#goToRegister").click(function(){
     //       location.href="register.php";
     //    });
    //    });
    </script>

    <div id="login2" style="color: brown;display: none;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style="height: auto;">
                        <form id="login-form" class="form" action="" method="post" style="height: auto;">
                            <input type="submit"name="submit" class="btn btn-info btn-md" value="Back" style="padding-top: 5%;" />
                            <h3 class="text-center text-info">Registration</h3>
                            <!--serial number div-->
                             <div class="form-group">
                               
                            </div>
                            <div class="form-group">
                                <label for="first_name" class="text-info">First Name:</label><br>
                                <input type="text" name="first_name" id="first_name" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="surname" class="text-info">Surname:</label><br>
                                <input type="text" name="surname" id="surname" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pwp" id="pwp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address" class="text-info">Address:</label><br>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact" class="text-info">Contact:</label><br>
                                <input type="text" name="contact" id="contact" class="form-control numbers">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-info">Gender:</label><br>
                                <input type="radio" class="radio-inline" name="magenders" id="magenders" value="male" class="form-control" checked>Male
                                <input type="radio" class="radio-inline" name="magenders" id="magenders" value="female" class="form-control">Female
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="text-info">Occupation:</label><br>
                                <input type="radio" class="radio-inline" name="occupant" id="occupant" value="employee" class="form-control" checked>Eployee
                                <input type="radio" class="radio-inline" name="occupant" id="occupant" value="phashions" class="form-control">Phasion
                            </div>
                            <div class="form-group">
                                
                                <input type="button" id="regis" name="submit" class="btn btn-info btn-md" value="Save" onclick="validateAfter();" />
                                <input type="reset" id="regis" name="submit" class="btn btn-info btn-md" value="Reset"  />
                                
                                <input type="submit"name="submit" class="btn btn-info btn-md" value="Submit"/>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--ends of forms-->
    <div id="displayForm" style="margin-right: 10%;border-style: solid;border-left-width: red;width: 40%;margin-top: -36%;float: right;color: white;background-color: grey;padding:5%;display: none;">
        <h1>Check if u entered correct Values</h1>
    </div>
</body>


<script>

//////////////////////////////////////////////

$(document).ready(function(){
   

$(".stringed").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                //this refers to current input
                $(this).css("border-color","red");
            }
            else{

               $(this).css("border-color","grey");
            }
 
            
        });

$('.numbers').keypress(function(event){

       if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
           event.preventDefault(); //stop character from entering input
           $(this).css("border-color","red");
           alert("please enter number");
       }else{

          $(this).css("border-color","grey");
       }
    });



});

function validateAfter(){
     
   var emaill = $("#email").val();
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

     if (!filter.test(emaill)) {
      
         $("#email").css("border-color","red");
        
         emaill.focus;
    } else {
      
       $("#email").css("border-color","grey");
    }
  
  var pswd=document.getElementById("pwp").value;
   //validate the length
if ( pswd== "" || pswd.length < 8) {
    alert("password cannot be emty or less than 8");
}else if(!pswd.match(/[A-z]/)){
    alert("password must contain atleast one small letter");
}else if(! pswd.match(/[A-Z]/)){
   alert("password must contain atleast one capital letter");
}else if( !pswd.match(/\d/)){
   alert("password must contain atleast one Number");
}

}
/*
        $("#emaill").keyup(function(){

     var emaill = $("#emaill").val();
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

     if (!filter.test(emaill)) {
      
         $("#emaill").css("border-color","red");
        
         emaill.focus;
    } else {
      
       $("#emaill").css("border-color","grey");
    }

 });

 
////////////trouble starts here///////////////////////////////////////////////////////////////

 function validateAfter(){
     
  var pswd=document.getElementById("password").value;
   //validate the length
if ( pswd== "" || pswd.length < 8) {
    alert("password cannot be emty or less than 8");
}else if(!pswd.match(/[A-z]/)){
    alert("password must contain atleast one small letter");
}else if(! pswd.match(/[A-Z]/)){
   alert("password must contain atleast one capital letter");
}else if( !pswd.match(/\d/)){
   alert("password must contain atleast one Number");
}

 else {

      var first_name=document.getElementById("first_name").value;
      var last_name=document.getElementById("last_name").value;
    var cellphone=document.getElementById("cellphone").value;
    var occupant=document.getElementById("occupant").value;
    var emaill=document.getElementById("emaill").value;
    var password=document.getElementById("password").value;
      
        alert(emaill);
    $.ajax({
     url:"dbClass2.php",
  method:"post",
   beforeSend: function()
          {
            console.log("loading insert .......");
          
          },
          
          data:{action:'insertNew',
                first_name:first_name,
                last_name:last_name,
                cellphone:cellphone,
                job:job,
               // emaill:emaill,
                //password:password
                  },
          async: true,

    success:function(response){
     
      console.log(response);
    }
 });
}
}
 
/////////////////////////////ends here////////////////////////////////////////////////////////
function getRed(){  

$.ajax({

    url:"dbClass2.php",
    method:"post",
     beforeSend: function()
          {
            console.log("loading .......");
          
          },
    data:{action:'myResults'},
    async: true,

    success:function(response){
      var ret=JSON.parse(response);
      var ret1=ret.Valid;
      //console.log(ret);
      //console.log(ret1);
     var showme="";
     var result_limit = document.getElementById('selMe').value;
 

for (var i = 0; i < result_limit; i++) {
  
  
     
       showme+="<tr><td> "+ret1[Math.floor(Math.random() * ret1.length )].cellphone+" </td>";
       showme+="<td> "+ret1[Math.floor(Math.random() * ret1.length )].date_logged+" </td>";
      // showme+="<td> "+ret1[2].date_logged+" </td>";

       "</tr>";

     
    }

    console.log(showme);
    
    $("#demo").html(showme);
    
    //return ret1;
}
    
});

} 
///////////////////////////////////////////////////////////////////////////////////////////////////////////
function getWhile(){

 $.ajax({
 url:"dbClass2.php",
  method:"post",
   beforeSend: function()
          {
            console.log("loading .......");
          
          },
  data:{action:'myResults'},
  async: true,

    success:function(response){
      var ret=JSON.parse(response);
      var ret1=ret.Valid;
      //console.log(ret);
      //console.log(ret1);
     var showhile="";
     var result_while = document.getElementById('selwhile').value;
 
    var i=0;
  while(i <= result_while){

     showhile+="<tr><td> "+ret1[Math.floor(Math.random() * ret1.length )].cellphone+" </td>";
       showhile+="<td> "+ret1[Math.floor(Math.random() * ret1.length )].date_logged+" </td>";
      // showme+="<td> "+ret1[2].date_logged+" </td>";

       "</tr>";

       i++;

  }


    console.log(showhile);
    
    $("#listWhile").html(showhile);

    
    //return ret1;
}*/
  
//});

//}  



/* var first_name=document.getElementById("first_name").value;
    var surname=document.getElementById("surname").value;
    var username=document.getElementById("username").value;
    var email=document.getElementById("email").value;
    var contact=document.getElementById("contact").value;
    var occupant=document.getElementById("occupant").value;
    var address=document.getElementById("address").value;
    var pwp=document.getElementById("pwp").value;
    var magenders=document.getElementById("magenders").value;
console.log(first_name);
console.log(surname);
console.log(username);
console.log(contact);
console.log(occupant);
console.log(address);
console.log(pwp);
console.log(magenders);
*/
</script>






 


