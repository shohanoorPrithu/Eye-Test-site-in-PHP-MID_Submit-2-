<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Titan Eye Plus</title>
<script type="text/javascript">
window.history.forward();
function noBack() { window.history.forward(); }
</script>
<script language="javascript" src="js/jquery-latest.js"></script>
<script language="javascript" src="js/validate_enquiry.js"></script>
<script src="js/FacebookRef.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script>
<script >
 	$(document).ready(function(){
		$('img').pngFix( );
		$('#submits').click(function(){
		$('#titanform').submit();
		return false;
		
		});
	});
	</script>
<style type="text/css">
img {
	behavior: url("iepngfix.htc")
}
</style>
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
$("document").ready( function() {

	$("#facebooklogin").bind("click", function(e) {
					e.preventDefault();
					FB.login(function(response) {
					
						if (response.status === 'connected') {
							FB.api('/me', function(response) {
			//alert(response);
							//	OpenLoaderBox(true);
								//alert(response.email+'---'+response.name+'---'+response.age);
								$("#fname").val(response.name);
								$("#femail").val(response.email);
								
								$("#fsubmit").click();
								exit();
							});	  
						} 
					},{scope: 'email,read_stream,publish_stream'});					
				});
				});
	
</script>
<script type="text/javascript">
function SelectLang()
{
if (document.getElementById("language"))
	{
	var langval = document.getElementById("language").value;
	document.getElementById("language").value=langval;
	document.location.href="index.php?lang="+langval;
	}
}
</script>
<style type="text/css">
#scroller {
	background-color: #424242;
	background-image: url(images/bg.jpg);
	background-repeat: repeat-x;
	height:570px;
	border-bottom:solid 2px #e48e07;
}
</style>
<style type="text/css">
#scroller {
	background-color: #424242;
	background-image: url(images/bg.jpg);
	background-repeat: repeat-x;
	height:570px;
	border-bottom:solid 2px #e48e07;
}
</style>
<style type="text/CSS">
ul {
	padding:0;
	margin:0;
	list-style-type:none;
	text-align:center;
	margin-left:22px;
}
li {
	/* margin-left:2px; */
float:left; /*pour IE*/
}
ul li a {
	display:block;
	float:left;
	color:#ffffff;
	text-decoration:none;
	text-align:center;
	padding:1px 0px;
	margin-left:22px;
	font-weight:bold;
	font-family:Arial, Helvetica, sans-serif;
}
ul li a:hover {
	color:#ce831e;
	font-weight:bold;
}
</style>
<link href="css/css3.css" type="text/css" rel="stylesheet" media="screen" />
<!--[if gte IE 6]>
   
   <style type="text/css">

   .rform { 
    background: url("images/bg_pad.jpg") no-repeat scroll 0 0 ;
     width:700px;
	
    } 
.midor{
float:left;width:37px;
height:161px;
margin-left:10px;
background: url('images/or_img.jpg') no-repeat scroll 0 0 transparent;

}
.leftBox{

float:left;
width:380px;
padding-top:20px;
}
    </style>

<![endif]-->
<!--[if IE 6]>
   
   <style type="text/css">
.leftBox{
float:left;
width:100px!important;
padding:0px;
}
.form-1 {margin-left:auto; margin-right:auto; width:360px; height:150px;}
   .rform { 
   
     width:650px;
    } 
.midor{
float:left;width:37px;
height:161px;
margin-left:10px;
background: url('images/or_img.jpg') no-repeat scroll 0 0 transparent;
}
    </style>

<![endif]-->
<!--[if IE]>
   
   <style type="text/css">

  .facebox{
float:left;width:50px;padding:70px 0px 0px 30px;margin-left:10px;
}
    </style>

<![endif]-->
<!--[if IE 8]>
   
   <style type="text/css">
.leftBox{
float:left;
width:380px;
padding-top:20px;
}
 .facebox{
float:left;width:50px;padding:70px 0px 0px 30px;margin-left:90px;
}
    </style>

<![endif]-->
</head>
<body onload="StartMove()" bgcolor="#000000" onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">

<form name="fblogin" action="verifaction.php" method="post" onsubmit="InitUnload();" id="fblogin" style="display:none;" >
  <input type="text" name="name" id="fname" value="" />
  <input type="text" name="fb" id="fb" value="1" />
  <input type="text" name="email" id="femail" value="" />
  <input type="submit" name="fsubmit" id="fsubmit" value="fsubmit" />
</form>
<div id="scroller">
  <div class="main-body">
    <div class="header">
      <div class="logo"><br />
        <br />
        <br />
      </div>
    </div>
    <div class="main-cont">
      <div class="rform">
        <div class="head-txt"> <img src="images/titan-logo-home.gif" /> </div>
        <?php
include("langinclude.php");

if (!isset($_GET[lang]))
	$lang=0;
else
	$lang=$_GET[lang];
	
$lang_file = selectlangfile($lang);
include_once ($lang_file);
?>
        <table style="background-color:#000; width:637px;" align="center">
          <tr>
            <td ><div style="text-align:center;">
                <ul >
                  <li><a href="index.php?lang=0" onclick="InitUnload();">English</a></li>
                  <li><a href="index.php?lang=1" onclick="InitUnload();">ಕನ್ನಡ</a></li>                  
                  <li><a href="index.php?lang=3" onclick="InitUnload();">தமிழ்</a></li>
                  <li><a href="index.php?lang=4" onclick="InitUnload();">తెలుగు</a></li>				  
				  <li><a href="index.php?lang=5" onclick="InitUnload();">മലയാളം</a></li>
				  <li><a href="index.php?lang=2" onclick="InitUnload();">हिन्दी</a></li>
                  <li><a href="index.php?lang=6" onclick="InitUnload();">বাঙ্গালী</a></li>
                  <li><a href="index.php?lang=7" onclick="InitUnload();">Mഅരതി</a></li>
                  <li><a href="index.php?lang=8" onclick="InitUnload();">اردو</a></li>
				  </ul>
              </div>
              </td>
          </tr>
        </table>
        <?php /*?><table align ="center"> <tr> <td> <a href="index.php?lang=0" onclick="InitUnload();">English&nbsp;</a></td><td> <a href="index.php?lang=1" onclick="InitUnload();">&nbsp;ಕನ್ನಡ&nbsp;</a></td><td> <a href="index.php?lang=2" onclick="InitUnload();">&nbsp;हिन्दी&nbsp;</a></td><td> <a href="index.php?lang=3" onclick="InitUnload();">&nbsp;TஆMஈள்&nbsp;</a></td><td> <a href="index.php?lang=4" onclick="InitUnload();">&nbsp;టెలుగు&nbsp;</a></td><td>&nbsp;</td><td>
</tr></table><?php */?>




        <div class="text" style="font-size:13px; text-align:center; font-family:'Open Sans', Arial, Helvetica, sans-serif; text-transform:uppercase "><b style="font-size:14px; line-height:25px;"><?php echo $lng_eye_exam_for ; ?> <font size="4" color="#df840f"><?php echo $lng_free ;?> </font> <?php echo $lng_Quick_Eye_Health_Status ; ?>!</b><b style="color:#e48e07">#</b> </div>
        
        
        
        
        
        
        
        
        
        <div class="text" style="font-size:12px; font-family:'Open Sans', Arial, Helvetica, sans-serif;padding-left:28px;"> <b style=""><?php echo $lng_Tell_Us_About_Yourself; ?>:</b><br />        
        </div>
        <div class="leftBox">
          <div  >
            <form name="titanform" action="verifaction.php" method="post" onsubmit="InitUnload();return Validation();" id="titanform" >
              <input type="hidden" name="language" id="language" value="<?php echo $lang;  ?>" />
              <div class="form-1" style="margin-left:20px;">
                <div class="name-txt"><b><?php echo $lng_Name; ?><b style="color:#ff0000">*</b>:</b></div>
                <div class="name-filed">
                  <input type="text" name="name" id="name" class="input" />
                </div>
                <div style="clear:both;"></div>
                <div class="name-txt"><b><?php echo $lng_Age; ?><b style="color:#ff0000">*</b>:</b></div>
                <div class="name-filed" style="margin-top:5px;">
                  <input type="text" id="age" name="age" size="3" class="input" style="width:30px;" />
                </div>
                <div style="clear:both;"></div>
                <div class="name-txt"><b><?php echo $lng_Email; ?><b style="color:#ff0000">*</b>:</b></div>
                <div class="name-filed">
                  <input type="text" name="email" id="email" class="input" />
                </div>
                <div style="clear:both;"></div>
                <div class="name-txt"><b><?php echo $lng_Mobile; ?><b style="color:#ff0000">*</b>:</b></div>
                <div class="name-filed">
                  <input type="text" name="cno" id="cno" class="input" />
                </div>
                <br />
                <br />
                <br />
                <div  >
			<?php   if ($lang ==0){ ?> <!--english-->
            <img src="images/start_test.jpg" id="submits" alt="Start Test" style="cursor:pointer;margin-left:130px;" />
            <?php }else if ($lang ==1){ ?> <!--kannada-->
            <img src="images/start_test_kannada.jpg" id="submits" alt="Start Test" style="cursor:pointer;margin-left:130px;" />
            <?php }else if ($lang ==2){ ?> <!--hindhi-->
            <img src="images/start_test_hindi.jpg" id="submits" alt="Start Test" style="cursor:pointer;margin-left:130px;" />
            <?php }else if ($lang ==3) {?> <!--tamil-->
            <img src="images/start_test_tamil.jpg" id="submits" alt="Start Test" style="cursor:pointer;margin-left:130px;" />
            <?php }else if ($lang ==4){ ?> <!--telugu-->
            <img src="images/start_test_telugu.jpg" id="submits" alt="Start Test" style="cursor:pointer;margin-left:130px;" />
            <?php }else if ($lang ==5){ ?> <!--malayalam-->
            <img src="images/start_test_malayalam.jpg" id="submits" alt="Start Test" style="cursor:pointer;margin-left:130px;" />
            <?php }else if ($lang ==6){ ?> <!--bengali-->
            <img src="images/start_test_bengali.jpg" id="submits" alt="Start Test" style="cursor:pointer;margin-left:130px;" />
            <?php }else if ($lang ==7){ ?> <!--marati-->
            <img src="images/start_test.jpg" id="submits" alt="Start Test" style="cursor:pointer;margin-left:130px;" />
            <?php }else if ($lang ==8){ ?> <!--urdhu-->
            <img src="images/start_test_urdu.jpg" id="submits" alt="Start Test" style="cursor:pointer;margin-left:130px;" />
            <?php } ?>
				 </div>
              </div>
            </form>
          </div>
        </div>
        <?php   if ($lang ==0){ ?> <!--english-->
           <div class="midor"></div>
           <div class="facebox">
          <div style="font-size:13px;float:right; text-align:center; font-family:'Open Sans', Arial, Helvetica, sans-serif; text-transform:uppercase "> <a id="facebooklogin" class="flogin" title="Login With Facebook" href="Login With Facebook"></a> </div>
        </div>
            <?php }else if ($lang ==1){ ?> <!--kannada-->
            <div class="midor_kan"></div>
            <div class="facebox">
          <div style="font-size:13px;float:right; text-align:center; font-family:'Open Sans', Arial, Helvetica, sans-serif; text-transform:uppercase "> <a id="facebooklogin" class="flogin_kan" title="Login With Facebook" href="Login With Facebook"></a> </div>
        </div>
            <?php }else if ($lang ==2){ ?> <!--hindhi-->
             <div class="midor_hin"></div>
             <div class="facebox">
          <div style="font-size:13px;float:right; text-align:center; font-family:'Open Sans', Arial, Helvetica, sans-serif; text-transform:uppercase "> <a id="facebooklogin" class="flogin_hin" title="Login With Facebook" href="Login With Facebook"></a> </div>
        </div>
            <?php }else if ($lang ==3) {?> <!--tamil-->
            <div class="midor_tam"></div>
            <div class="facebox">
          <div style="font-size:13px;float:right; text-align:center; font-family:'Open Sans', Arial, Helvetica, sans-serif; text-transform:uppercase "> <a id="facebooklogin" class="flogin_tam" title="Login With Facebook" href="Login With Facebook"></a> </div>
        </div>
            <?php }else if ($lang ==4){ ?> <!--telugu-->
            <div class="midor_tel"></div>
            <div class="facebox">
          <div style="font-size:13px;float:right; text-align:center; font-family:'Open Sans', Arial, Helvetica, sans-serif; text-transform:uppercase "> <a id="facebooklogin" class="flogin_tel" title="Login With Facebook" href="Login With Facebook"></a> </div>
        </div>
            <?php }else if ($lang ==5){ ?> <!--malayalam-->
            <div class="midor_mal"></div>
            <div class="facebox">
          <div style="font-size:13px;float:right; text-align:center; font-family:'Open Sans', Arial, Helvetica, sans-serif; text-transform:uppercase "> <a id="facebooklogin" class="flogin_mal" title="Login With Facebook" href="Login With Facebook"></a> </div>
        </div>
            <?php }else if ($lang ==6){ ?> <!--bengali-->
            <div class="midor_ben"></div>
            <div class="facebox">
          <div style="font-size:13px;float:right; text-align:center; font-family:'Open Sans', Arial, Helvetica, sans-serif; text-transform:uppercase "> <a id="facebooklogin" class="flogin_ben" title="Login With Facebook" href="Login With Facebook"></a> </div>
        </div>
            <?php }else if ($lang ==7){ ?> <!--marati-->
            <div class="midor_mar"></div>
            <div class="facebox">
          <div style="font-size:13px;float:right; text-align:center; font-family:'Open Sans', Arial, Helvetica, sans-serif; text-transform:uppercase "> <a id="facebooklogin" class="flogin_mar" title="Login With Facebook" href="Login With Facebook"></a> </div>
        </div>
            <?php }else if ($lang ==8){ ?> <!--urdhu-->
            <div class="midor_urd"></div>
            <div class="facebox">
          <div style="font-size:13px;float:right; text-align:center; font-family:'Open Sans', Arial, Helvetica, sans-serif; text-transform:uppercase "> <a id="facebooklogin" class="flogin_urd" title="Login With Facebook" href="Login With Facebook"></a> </div>
        </div>
            <?php } ?>        
        
      </div>
    </div>
    <div style="color:#FFFFFF; float:left"><b><?php echo $lng_NOTE; ?>:</b> <b style="color:#e48e07">#</b><?php echo $lng_The_result_you_get_will; ?> </div>
    <div class="footer" style="margin-top:-22px; margin-right:50px;"> Copyright © 2012. <img src="images/titan-logo-small.gif" /> </div>
  </div>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33771505-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body></html>
