<?php
	
	 //app information to authenticate user.
	 $app_id = "132299600209864";

     $canvas_page = "http://apps.facebook.com/thecellshack/"; 


	 //make the url to authenticate the app for the user
     $auth_url = "http://www.facebook.com/dialog/oauth?client_id=" 
            . $app_id . "&redirect_uri=" . urlencode($canvas_page)."&scope=email";

     $signed_request = $_REQUEST["signed_request"];

     list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

     $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

	//if user hasnt authenticated. Redirect to authenticate url
     if (empty($data["user_id"])) {
            echo("<script> top.location.href='" . $auth_url . "'</script>");
     } 
	 
	 //if user posted redirect them to their post
	 if (!empty($_REQUEST["post_id"]))
	 {	
	 	 //construct the url to redirect the user to.
		 $redir = "http://www.facebook.com/profile.php?post_id=";
		 $redir .= $_REQUEST["post_id"];
		 
		 //redriect to constructed url
		 echo("<script> top.location.href='" . $redir . "'</script>");
	 }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


</script>
<style type="text/css">
body,td,th {
	color: #34b4e3;
	font-family: "Times New Roman", Times, serif;
}
body {
	background-color: #000000;
}
a:link {
	color: #FFFFFF;
	font-weight: bold;
}
a:visited {
	color: #FFFFFF;
}
a:hover {
	color: #FFFFFF;
}
a:active {
	color: #FFFFFF;
}
</style>


<body>
<table width="100%" border="0" align="center">
  <tr>
    <td align="center"><a href="http://puzzle.sci.csueastbay.edu/~wj7356/thecellshack/home.html">The Cell Shack</a> Presents</td>
  </tr>
  <tr>
    <td align="center">What phone is right for <strong>YOU!</strong></td>
  </tr>
  <tr>
    <td align="center">This application will help pick out a phone from our huge online store, a phone that's right for you!</td>
  </tr>
  <tr>
    <td align="center"><a href="carrier.php">Click here to begin!</a></td>
  </tr>
</table>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27223807-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</head>
</html>
