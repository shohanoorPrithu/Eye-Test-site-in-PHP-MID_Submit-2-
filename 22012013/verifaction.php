<?php
include("connect/connection.php");
//include("connect/session.php");
session_start();
include("langinclude.php");
include("lng_city_list.php");
$lang=	$_REQUEST['language'];
$_SESSION['language'] = $lang;
$lang_file = selectlangfile($_SESSION['language']);
include_once ($lang_file);
if(!isset($_REQUEST['fb'])){
//echo 'tst';
$name = $_REQUEST['name'];
$city = $_REQUEST['city'];
$age = $_REQUEST['age'];
$cno = $_REQUEST['cno'];
$email = $_REQUEST['email'];
$language =$language[$lang];
$_SESSION['titan_eye_test_online_amar2ycccccc_test'] = $name.$city.rand(999999,999999999);
$susername = $_SESSION['titan_eye_test_online_amar2ycccccc_test']; 

$sql  = mysql_query("INSERT INTO profile_list(name,city,age,email,cno,sess,datetime,language) VALUE('$name','$city','$age','$email','$cno','$susername',now(),'$language')") or die(mysql_error());
$_SESSION['user_id']= mysql_insert_id();
$_SESSION['cno']=$cno;
$_SESSION['emailid']=$email;
$_SESSION['name']=$name;
$rand = rand(999,99999);
$message = $rand;

  $url="http://alerts.sinfini.com/api/web2sms.php?workingkey=502a9219e5a2n9f4da1&sender=TITANE&to=".$cno."&message=Thank%20you%20for%20taking%20Titan%20Eye%20plus%20Online%20Eye%20test.%20Please%20enter%20the%20verification%20code:".$rand.".";
  
			$ch=curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$output=curl_exec($ch);
			curl_close($ch);  
		
			 $_SESSION['titan_response_page']=  $rand; 
			
}else{
 if(!isset($_SESSION['cno']) && $_SESSION['cno'] ==''){
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 }else{
 $name = $_SESSION['name'];
 $email = $_SESSION['emailid'];
 }

}			 
?>

 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Titan Eye Plus | Test Result</title> 
<script type="text/javascript" src="js/form-js.js"></script>

<script language="javascript">

function StartMove() {
var cssBGImage=new Image();
cssBGImage.src="images/bg.jpg";

window.cssMaxWidth=cssBGImage.width;
window.cssXPos=0;
setInterval("MoveBackGround()",50);
}

function MoveBackGround () {
window.cssXPos=window.cssXPos+1;
if (window.cssXPos>=window.cssMaxWidth) {
window.cssXPos=0;
}
toMove=document.getElementById("scroller");
toMove.style.backgroundPosition=window.cssXPos+"px 0px";

}
</script>
<script type="text/javascript">
     /* var hook = true;
      window.onbeforeunload = function() {
        if (hook) { 
          return "Did you save your stuff?" 
        }
      }
      function unhook() { 
        hook=false; 
      }*/
var unloadSkip = false;
InitUnload = function() {
	unloadSkip = true;
}
UnLoadTrigger = function(e) {
	var message = "Good things comes to those who wait. Your result is just a few steps away!", evtObj = window.event?event:e;
	if(evtObj == e) {
		if(!evtObj.clientY && !unloadSkip) {
		evtObj.returnValue = message;
		return message;
		}
	} else {
		if(evtObj.clientY<0) {
		evtObj.returnValue = message;
		return message;
		}
	}

}
window.onbeforeunload = UnLoadTrigger;
function Validationcno()
{
var ag = document.cnform.age.value;
if(ag=="")
{
alert("Please enter your Age!");
document.cnform.age.focus();
return false;
}
 
<!-- Phone -->
var a = document.cnform.vari.value;
if(a=="")
{
alert("Please enter your code!");
document.cnform.vari.focus();
return false;
}
if(isNaN(a))
{
alert("Please enter the valid code!");
document.cnform.vari.focus();
return false;	
}

 


}
</script>
<style type="text/css">
#scroller {
background-color: #424242;  
background-image: url(images/bg.jpg);
background-repeat: repeat-x; height:570px; border-bottom:solid 2px #e48e07;
} 
</style>


<link href="css/css3.css" type="text/css" rel="stylesheet" media="screen" />
</head>

<body style="background-color:#000000">
<div id="scroller">
<div class="main-body">
<div class="header">
<div class="logo"><br /><br /><br /></div>
</div>

<div class="main-cont">

<?php if(!isset($_REQUEST['fb']) || isset($_REQUEST['recno']) ){ 

?>
<div class="rform" style="height:330px;">
<div class="head-txt">
<img src="images/titan-logo-titan.gif" />
</div> 
<?php 
if(isset($_REQUEST['recno'])){echo '<div class="text" style="font-size:13px; text-align:center">
<b>'.$Verification_code_has_been_sent_to_your_mobile.'!</b>  <br /></div>';}
?>
<div class="head-txt-org"><?php echo $SMS_Validation; ?> </div>
<div style="padding-left:67px;" >
<div class="text" style="font-size:13px; text-align:left;padding-left:67px;">
<b><?php echo $Please_enter_your_verification_code_below; ?></b><b style="color:#ff0000">*</b> </div>  <br />
<center><form action="response_continue.php" name="cnform" method="post" onsubmit="InitUnload();return Validationcno();" id="titanform">
<div class="name-txt"><b><?php echo $Code; ?><b style="color:#ff0000">*</b>:</b></div>
<div class="name-filed"><input type="text" name="vari" id="vari" class="input"  style="width:231px;" /></div>
<!--<input value="<? //php echo $city; ?>" type="text" /> -->
<input value="<?php echo $mobile; ?>" type="hidden" name="cno" id="cno" />
<!--<input value="<? //php echo $rand; ?>" type="text" type="text" />-->
<input type="hidden" name="email" value="<?php echo $email; ?>" id="email" />
<br /><br />
<div class="name-txt"><b><?php echo $City; ?> :</b></div>
<div class="name-filed" style="float:left;">

<select name="city" id="city" class="input" style="width:231px;" >
<option><?php echo $Select_City; ?></option>
<?php

$sql = "SELECT id, cityname FROM city WHERE status=0 GROUP BY cityname";

$rs = mysql_query($sql);

while($row = mysql_fetch_array($rs))
{
if ($lang ==0)
	echo "<option value=\"".$row['id']."\">".$lang_Eng[$row['id']]."\n ";
else if($lang ==1)
	echo "<option value=\"".$row['id']."\">".$lang_Kan[$row['id']]."\n ";
else if ($lang ==2)
	echo "<option value=\"".$row['id']."\">".$lang_Hid[$row['id']]."\n ";
else if ($lang ==3)
	echo "<option value=\"".$row['id']."\">".$lang_Tam[$row['id']]."\n ";
else if($lang ==4)
	echo "<option value=\"".$row['id']."\">".$lang_Tel[$row['id']]."\n ";
else if($lang ==5)
	echo "<option value=\"".$row['id']."\">".$lang_Mal[$row['id']]."\n ";
else if($lang ==6) // 
	echo "<option value=\"".$row['id']."\">".$lang_Ben[$row['id']]."\n ";
else if($lang ==7)
	echo "<option value=\"".$row['id']."\">".$lang_Mar[$row['id']]."\n ";
else if($lang ==8)
	echo "<option value=\"".$row['id']."\">".$lang_Urd[$row['id']]."\n ";
}
?>
</select>
</div>
<div style="clear:both;" >(<?php echo $Where_you_would_like_to_visit_the_store; ?>)</div>
<br /><br /><br /></center>

<div style="padding-left:130px!important;clear:both;">
<input type="submit"  class="submit" value="<?php  echo $SUBMIT ; ?>"  onclick="displayPrompt=false"/>
</div>
</div>
</form>



</div>
<?php }else{ ?>
<div class="rform" style="height:320px;padding-top:10px;">
<div class="head-txt">
<img src="images/titan-logo-titan.gif" />
</div>
<div style="padding-left:90px;" >
<div class="text" style="font-size:13px; text-align:left;padding-left:35px;">
<b><?php echo $Please_enter_your_Contact_Number_below; ?></b><b style="color:#ff0000">*</b> </div> <br />
<center><form action="" method="post" name="cnform" onsubmit="InitUnload();return Validationcno();" >
<div style="float:left;width:85px;padding-right:65px;" ><b><?php echo $Age_Verification; ?><b style="color:#ff0000">*</b>:</b></div><div ><input type="text" name="age" id="age" class="input" size="3"  /></div>

<div style="float:left;width:150px;text-algin:left;" ><b><?php echo $Contact_Number; ?><b style="color:#ff0000">*</b>:</b></div>
<div><input type="text" name="cno" id="cno" class="input"  /></div>
<input type="hidden" name="email" value="<?php echo $email; ?>" id="email" />
<br /><br />
<input type="hidden" name="name" value="<?php echo $name; ?>" id="name" />
<br /><br /></center>
<div style="padding-left:130px!important;clear:both;">
<input type="submit"  class="submit" value="<?php  echo $SUBMIT ; ?>"   onclick="displayPrompt=false"/>
</div>
</div>
</form>

</div>
<?php } ?>
</div>

</div> 

<div class="footer1" style="margin-top:70px;">
<div style="float:left"><?php echo $Verification_Note; ?></div>
Copyright &copy; 2012. TITAN EYE +</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33771505-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></body>
</html>