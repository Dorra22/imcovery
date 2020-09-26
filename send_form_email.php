<?  



// Enter your contact email address here
$adminaddress = "anotovska@axentrix.com"; 

// Enter the address of your website here include http://www. 
$siteaddress ="imcovery.com"; 

// Enter your company name or site name here 
$sitename = "Imcovery"; 

$name = htmlentities($_POST["first_name"]);
$email = htmlentities($_POST["email"]);
$subject = htmlentities($_POST["subject"]);
$message = htmlentities($_POST["comments"]);


$date = date("m/d/Y H:i:s");

if ($REMOTE_ADDR == "") $ip = "no ip";
else $ip = getHostByAddr($REMOTE_ADDR);

$subject=$name." new message from ".$siteaddress." subject:".$subject;
$body= nl2br("You have 1 new message from ". $sitename."\r\n".
"Name:". $first_name."\r\n".
"Å-mail:".$email."\r\n".
"Message:"."\r\n".

$message);


$headers ="Content-Type: text/html; charset=UTF-8";
mail($adminaddress, $subject, $body, $headers); 









		
			
		
		




?>

