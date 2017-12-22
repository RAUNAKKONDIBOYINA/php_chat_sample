<?php
	
	require('includes/core.inc.php');

	if(isset($_POST['send']))
	{
		if(send_msg($_POST['sender'],$_POST['message']))
		{
			echo 'Message sent';
		}
		else
		{
			echo 'Message Failed to sent';
		}
	}
	
//name="sender"  name="message"

?>

<div id="messages">

</div><!-- Messages -->
<!-- Javascript -->
<script type="text/javascript" src="scripts/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="scripts/js/auto_chat.js"></script>


<form action="index.php" method="post">
	<lable>Enter Name:<input type="text" name="sender"/></lable>
	<lable>Enter Message:<input type="text" name="message"/></lable><br />
	<input type="submit" name="send" value="Send Message"/>
</form>

