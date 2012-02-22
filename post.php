<?php
  
  //app information for the POST TO WALL Feed dialog.
  $app_id = "132299600209864";

  $canvas_page = "http://apps.facebook.com/thecellshack/";
  
   
  //if the user hasnt created a post from the app
  if (empty($_REQUEST["post_id"])) 
  {
	  //construct the url to redirect user to feed dialog
	  $feed_url = "http://www.facebook.com/dialog/feed?app_id=" 
	  . $app_id . "&redirect_uri=" . urlencode($canvas_page);
	  
	  //redirect the user
	  echo("<script> top.location.href='" . $feed_url . "'</script>");
  }


?>