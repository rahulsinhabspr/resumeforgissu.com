
<!DOCTYPE html>
  <html>
  <head>
  <title>  Book Example   </title>
  <link type='text/css' rel='stylesheet' href='../css/secondPageStyle.css'/>
  <script>alert("This Page is an example of one of my Book.");</script>
  </head>
  <body>
  <div id="header">
			<p id="name"><?php 
			echo "Rahul Sinha";
			?></p>
			<a href="mailto:cds12m006@iiitdm.ac.in","mailto:rahulsinhabspr@live.com"><p id="email"><?php 
			echo "cds12m006@iiitdm.ac.in". " or " . "rahulsinhabspr@live.com";
			?></p></a>
  </div>
  <div class="left">
	<img src="../image/book.jpg" >
	</div>
  <div class="right">
  <p><ul>
  <?php
    $book=$_GET["Book"];
	$book=array('Author'=>'Rahul Sinha','Name'=>'Interesting Facts of Computer','Description'=>'This book will
		explain you about the details of the small thing in the computer it can be either 
		software or hardware.','ISBN number'=>$_GET["Book"]);
	
	foreach($book as $b=>$d){
	echo "  <li />" . $b ."  -  " . $d . "<br />";
	
	}
	?></ul>
  </p>
  
  </div>
 <h1>Interesting Facts of Computer </h1>
  <p>Read the book</p>
  <iframe src="computer.html"  style="border="0"" ><p>your browser donot support iframe please download it.</p>
  </iframe>
  <div id="footer">
			<p>Room number 306 IIITDM Kancheepuram Tamil Nadu 600127 | Mobile No.: +91-7401361223</p>
		</div>
  </body>
  </html>