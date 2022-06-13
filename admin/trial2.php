<?php
if(isset($_REQUEST['change_password']))
{
	extract($_REQUEST);
	$n=iud("update admin set password='$newpassword' where password='$oldpassword'");
	if($n==1)
	{
		echo"<script>alert('Password Change Successfully');</script>";
	}
	
}
?>

<script>

$(document).ready(function(){
$("#").click(function(){
	
var valid=true;
var oldpassword=$.trim($("#oldpassword").val());

var newpassword=$.trim($("#newpassword").val());
var cpassword=$.trim($("#cpassword").val());

if(oldpassword.length<6)
{
$("#oldpassworderror").html('Invalid Old Password');
$("#oldpassworderror").css("color","red");
$("#oldpassword").css("border-color","red");
valid=false;
}
else
{
$("#oldpassworderror").html('Old Password');
$("#oldpassworderror").css("color","black");
$("#oldpassword").css("border-color","#ddd");
}
if(newpassword.length<6)
{
$("#newpassworderror").html('Invalid New Password');
$("#newpassworderror").css("color","red");
$("#newpassword").css("border-color","red");
valid=false;
}
else
{
$("#newpassworderror").html('New Password');
$("#newpassworderror").css("color","black");
$("#newpassword").css("border-color","#ddd");
}

if(cpassword!=newpassword)
{
$("#cpassworderror").html('Invalid Confirm Password');
$("#cpassworderror").css("color","red");
$("#cpassword").css("border-color","red");
valid=false;
}
else
{
$("#cpassworderror").html('Confirm Password');
$("#cpassworderror").css("color","black");
$("#cpassword").css("border-color","#ddd");
}


var mymethod="post";
var myurl="myphp.php";
var mydata="oldpassword="+oldpassword+"&newpassword="+newpassword+"&cpassword="+cpassword+"&change=yes";

$.ajax({
	
	method:mymethod,
	url:myurl,
	data:mydata,
	success:function(result)
	{
		if(result==1)
		{
	        alert("Password Changed Successfully");
			$("#oldpassword").val("");
			$("#newpassword").val("");
			$("#cpassword").val("");
		}
		else
		{
			alert(result);
		}
			
		
	}

});	

return false;
});
});

</script>