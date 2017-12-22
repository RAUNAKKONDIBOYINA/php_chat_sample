<?php




	function get_msg()
	{
		$db_name="chat";
		$mysql_username="root";
		$mysql_password="";
		$server_name="localhost";
		$conne=mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);
	
		$query="select  Sender,Message from chat";
		$run = mysqli_query($conne,$query);
		$messages=array();
		
		//while($message=mysqli_fetch_assoc($run))
		while($message=$run->fetch_assoc())
		{
			$messages[]=array('sender'=>$message['Sender'], 'message'=>$message['Message']);
		}
		return $messages;



	}
	
	function send_msg($sender,$message)
	{
		if(!empty($sender) && !empty($message))
		{
			$db_name="chat";
			$mysql_username="root";
			$mysql_password="";
			$server_name="localhost";
			$conne=mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);
		
			$sender = mysqli_real_escape_string($conne,$sender);
			$message = mysqli_real_escape_string($conne,$message);
			
			$query="insert into chat values(null, '{$sender}', '$message')";
			
			if($run = mysqli_query($conne,$query))
			{
				return true;
			}
			else
			{
				return false;
			}
			
		}
		else
		{
			return false;
		}
	}
?>