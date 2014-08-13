<!DOCTYPE html>
<html>
	<head>
	<title>Welcome</title>
	<link type='text/css' rel='stylesheet' href='css/mainPageStyle.css'/>
	<script>window.onload=alert("Hi,Thank you for opening my file.");
	
	</script>
	</head>
	<body>
	<div id="header">
			<p id="name"><?php 
			echo "Rahul Sinha";
			?></p>
			<a href="mailto:cds12m006@iiitdm.ac.in","mailto:rahulsinhabspr@live.com"><p id="email"><?php 
			echo "cds12m006@iiitdm.ac.in" . " or " . "rahulsinhabspr@live.com";
			?></p></a>
		</div>
	<div class="left">
	<img src="image/myPhoto.jpg">
	</div>
	<div class="right">
	<h2>About Mee</h4>
	<p>I know that I lack experience but I am eager to learn new things and I am interested in new technology. I am a self motivated person, and I do not lack self confidence. I have good communication skills and I am able to perform well with a team. I am hardworking,active, patient, self confident, honest and I know i am technically good in my field but eager to improve my skills.</p>
	<h2>Skills</h4>
	<h3>Programming Languages</h5>
	<p><?php
	$skills=array("html","css","javascript","php","python","Matlab","C","xml","java","VHDL");
	foreach($skills as $skill){
	echo $skill .", ";		}
	?></p>
	<h3>Technical Computer Software</h5>
	<p>
	<?php 
	$software=array("Matlab","Awr","Microsoft visual studio 2012","Ecllipse","Awr","Multisim");
	foreach($software as $soft){echo $soft .", ";}
	?>
	</p>
	<h3>Currently Learning</h5>
	<p><?php
	$learning=array("Infrastructural Management Professional(System Administration)","Cryptography");
	foreach($learning as $learn){echo $learn .", ";}
	?></p>
	<h2>Academic Record</h4>
	<p><ul><?php
	$study=array('B.E'=>'Electronics & Telecommunication','MDES'=>'Communication Systems');
	foreach($study as $degree=>$branch){
	echo "<li />" . $degree . "  " .$branch;
	}
	?></ul></p>
	<h2>Achievements<h4>
	<p><ul><?php
	$achivement=array("Ranked among the top 5 students in the School","Topped all India mathematics examination organized by Together
with in 2005","Topped inter branch project exhibition(Tom& Terry game in c) in B.I.T (2007)");
	foreach($achivement as $achive){echo "<li />".$achive;}
	?></ul></p>
	<h2>My Software Projects</h2>
	<p><ul><?php
	$project=array('Title'=>'Tom& Terry game in c','Description'=>'Programming using simple c & graphic in c','Key Learning'=>'Structural C programming');
	foreach($project as $proj=>$discp){echo "<li />" . $proj."   :" . $discp;}
	?></ul></p>
	

	</div>
	<div id="footer">
			<p>Room number 306 IIITDM Kancheepuram Tamil Nadu 600127 | Mobile No.: +91-7401361223</p>
		</div>
	</body>
	
	
</html>