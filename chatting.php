<?php
 $name=$_POST['t1'];    
 echo $name;
 if(isset($name))
  {
  	$na=$name;
  	//echo 'xxxx';
   } 
   else
   {
   //echo "zzzzzz";
   }      
?>

<script type="text/javascript">
	function fun()
	{

		var obj= new XMLHttpRequest();
		obj.open("POST","message.txt",true);
		obj.send();
		obj.onreadystatechange=function(){
			if(obj.readyState==4)
			{

			document.getElementById('div1').innerHTML=obj.responseText;
			}
	}
			}
	setInterval("fun()",0);	

</script>

<div style="float:left;background-color:white;width:20%;height:100%">
	<form method="post" accept="">
<input name='msg'>
<input type="submit" onclick="fun()" value="send" name='sub'>
</form>

</div>

<div id='div1' style="background-color:lightblue;float:left;width:60%;height:100%">
</div> 

<div style="float:left;background-color:pink;width:20%;height:100%">c</div>


<?php
if(isset($_POST['sub']))
{
	$mess=$_POST['msg'];
	echo $mess;

$fp = fopen("message.txt","a+");
fwrite($fp,"\n".$na." ".$mess."<br>");
fclose($fp);


}

?>