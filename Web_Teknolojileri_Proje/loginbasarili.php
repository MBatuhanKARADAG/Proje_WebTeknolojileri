<!Doctype html>

<html>
 <head>
  <title>PHP Denemesi</title>
 </head>
 <body>
 <?php 

 		if ($_POST["userName"]=="b201210381") 
 		{
 			echo "<h1>GİRİS BAŞARILI  HOSGELDİNİZ   <h1>".$_POST["userName"];
 		}
 		else
 		{
 			echo "<h1>Giriş Başarısız<h1>";
 		}




  ?>
 </body>
</html>