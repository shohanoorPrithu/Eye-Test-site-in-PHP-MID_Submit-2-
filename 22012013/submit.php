<?php
include("connect/connection.php");
include("connect/session.php");
include("langinclude.php");
$lang_file = selectlangfile($_SESSION['language']);
include_once ($lang_file);
$lang = $_SESSION['language'];
if($_REQUEST['submit']=='Submit'){
$emailids=$_REQUEST['emailId'];
$names=$_REQUEST['name'];
foreach($_REQUEST['name'] as $key=>$val){

$sql_ins_result = mysql_query("INSERT INTO  friends_list (name,email_id,subscriber) value ('".$val."','".$emailids[$key]."','".$_SESSION[user_id]."')") or die(mysql_error());
    $ToEmail = $emailids[$key];
	$EmailSubject = $_SESSION['name'].' has recommended the "Titan Eye+ Online Eye Test" for you'; 
	$sender 	  = "info@titaneyeplus.net";
	$mailheader   = "From: ".$sender."\r\n";
    $mailheader  .= "Content-type: text/html; charset=iso-8859-1\r\n";	
	
	$nl =0;
	$mailtemp  ='<html xmlns="http://www.w3.org/1999/xhtml">';
	$mailtemp  .='<head>';
	$mailtemp  .='<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	$mailtemp  .='<title>Untitled Document</title>';
	$mailtemp  .='</head>';
	$mailtemp  .='<div>';
	$mailtemp .='Dear '.$val.', 
<br/> 
<br/>
I just got my eyes checked <b>through the Titan Eye+ Online Eye Test</b>.<br/> 
Why don\'t you get your eyes checked too?
<br/>  
<br/>
The link to the same is mentioned below:
<br/> 
http://www.titaneyeplus.net/ 
<br/> 
<br/>
Best regards, <br/> 
'.$_SESSION['name'];
	



$mailtemp  .='</html>';
$mails=mail($ToEmail, $EmailSubject, $mailtemp, $mailheader) or die ("Failure"); 
}

//
echo '<script type="text/javascript">	alert("Thank you for referring the Titan Eye+ Online Eye Test to your friend."); window.location.href="http://www.titaneyeplus.com/whatsnew.aspx"; </script>';
///header('Location: submit.php?err=1');
}else{
$bra_loc = $_REQUEST['bra_loc'];

$sql_ins_result = mysql_query("UPDATE profile_list SET bra_loc='$bra_loc'  WHERE sess='$susername'") or die(mysql_error());


}
$sql_city = mysql_query("SELECT bra_loc FROM profile_list WHERE sess='$susername'") or die(mysql_error()); 
list($bra_loc)=mysql_fetch_array($sql_city);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Titan Eye Plus</title>
<script type="text/javascript">
	window.history.forward();
	function noBack(){ window.history.forward(); }
</script>
<script language="javascript" src="js/jquery-latest.js"></script>
<script language="javascript" src="js/validate_enquiry.js"></script>
<link href="css/css.css" type="text/css" rel="stylesheet" media="screen" />
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=410563429025290";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
$(document).ready(function() {
  jQuery(window).unbind("beforeunload");
   $('.remove').live('click',function () {	
	$(this).parents("div:first").remove();
	return false;
	
  });
   $('#submit').live('click',function () {
   var cont=0;
   $(":input[type=text]").each(function() {

   if($(this).val() === ""){
    cont=1;
	return false;
	}
	
	if($(this).val() != "" && $(this).attr('name') =='emailId[]' ){
	 var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	if( !filter.test($(this).val() ) ) {
    cont=2;
	return false;
	}     	
	}
	});
    if( cont ==1){
	alert('enter empty fields'); 
	return false;
	}else if( cont ==2){
	alert('enter valid emails'); 
	return false;
	}else{
	return true;
	}
  });
    $('#Add').live('click',function () {	
	var vals= $('div.listdiv').length;
	if(vals != 5){
   $('<div class="list'+(vals+1)+' listdiv">Name : <input type="text" name="name[]" value="" /> Email Id : <input type="text" name="emailId[]" value="" />  <button class="remove" ></button></div>').prependTo('#Content');
   }else{
   alert("You can send Maximum five subscriber");
   }
	return false;
  });
});
//window.onbeforeunload = UnLoadTrigger;
</script>
</head>

<body background="images/results-bg.gif" style=" background-position:top left; background-repeat:no-repeat" onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">

<div class="main-body">
  <table width="200" border="0" cellspacing="0" cellpadding="0" align="right">
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>
	<div style="align:center" ><img src="images/results-logo.gif" /></div>
    <div class="store-box"><b class="thank"><?php echo $Dear; ?> <?php include("name.php"); ?>,<br/> <?php echo $Thank_you_for_getting_your_eyes_checked; ?><br/>
<?php echo $will_contact_you_shortly_to_fix_an_appointment; ?><br/>
<?php echo $discount_offers_to_you; ?> <br/>
<?php echo $continue_with_your_work; ?>.</b> </div>
     
     
     </td>
  </tr>
    <tr>
    <td><div align="center">&nbsp;</div></td>
  </tr>
  <tr>
    <td>
    <div class="store-box"><div class="fb-like" data-href="http://www.titaneyeplus.net/testing/" data-send="true" data-width="450" data-show-faces="true"></div><div id='fb-root'></div>
    <script src='http://connect.facebook.net/en_US/all.js'></script>
    <p><a onclick='postToFeed(); return false;'>
    
<?php   if ($lang ==0){ ?> <!--english-->
<img src="images/share-facebook.gif" alt="share facebook" />
<?php }else if ($lang ==1){ ?> <!--kannada-->
<img src="images/share-facebook_kannada.jpg" alt="share facebook" />
<?php }else if ($lang ==2){ ?> <!--hindhi-->
<img src="images/share-facebook_hindi.jpg" alt="share facebook" />
<?php }else if ($lang ==3) {?> <!--tamil-->
<img src="images/share-facebook_tamil.jpg" alt="share facebook" />
<?php }else if ($lang ==4){ ?> <!--telugu-->
<img src="images/share-facebook_telugu.jpg" alt="share facebook" />
<?php }else if ($lang ==5){ ?> <!--malayalam-->
<img src="images/share-facebook_malayalam.jpg" alt="share facebook" />
<?php }else if ($lang ==6){ ?> <!--bengali-->
<img src="images/share-facebook_bengali.jpg" alt="share facebook" />
<?php }else if ($lang ==7){ ?> <!--marati-->
<img src="images/share-facebook.gif" alt="share facebook" />
<?php }else if ($lang ==8){ ?> <!--urdhu-->
<img src="images/share-facebook_urdu.jpg" alt="share facebook" />
<?php } ?>
    
    </a></p>
    <p id='msg'></p>

    <script> 
      //FB.init({appId: "YOUR_APP_ID", status: true, cookie: true});

      function postToFeed() {

        // calling the API ...
        var obj = {
          method: 'feed',
          link: 'http://www.titaneyeplus.net/testing/',
          picture: 'http://www.titaneyeplus.net/testing/images/results-logo.gif',
          name: 'Titan Eye+',
          caption: 'Online Eye Test',
          description: 'Get your eyes tested online @ www.titaneyeplus.net/'
        };

        function callback(response) {
          document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
        }

        FB.ui(obj, callback);
      }
    
    </script>
	<br/>
	<div class="head-txt" ><?php echo $Recommend_this_eye_test; ?>.</div>
	<br/>
	<form action="" method="post" name="subscriber" onsubmit="InitUnload();" ><div style="text-align:center;color:green;" ><?php  if($_REQUEST['err']==1){echo $Mail_has_been_sent_your_friends;} ?></div><div id="Content">
	<div class="list1 listdiv"><?php echo $Res_Name; ?> : <input type="text" name="name[]" value="" /> <?php echo $Res_Email_Id; ?> : <input type="text" name="emailId[]" value="" />  <button id="Add" class="plus" /></button> </div>
 
<div style="padding-left:42px;" ><input type="submit" name="submit" id="submit" value="<?php echo $Res_Submit; ?>"/> </div>
</div></form> </div>
     
     
     </td>
  </tr>
  <tr>
    <td><div align="center"><input type="hidden"  class="fisub" value="NEXT" onclick="displayPrompt=false"/></div></td>
  </tr>
</td>
  </tr>
  <tr>
    <td align="right"></td>
  </tr>
</table>


<div class="footer">
  <br /><br /><br />
  <br /><br /><br />

</div>
</div>

<div class="footer-s">Copyright &copy; 2012. TITAN EYE +</div>
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
