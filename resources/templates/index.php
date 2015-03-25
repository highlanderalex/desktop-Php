<!DOCTYPE html>
<html>
<head>
<title>DeskTop</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="resources/css/style.css" />
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.item').click(function(event){
				event.preventDefault();
				event.stopPropagation(); 
				$('.item').find('>div').removeClass('active');
				$(this).find('>div').addClass('active');
			});
		
	});
</script>
</head>
<body>
<div id="container">
	<div id="top">
		<div id="enter">
			<form>
				Name: <input type="text" name="name"> 
				password: <input type="password" name="pass"> 
				<input type="submit" name="enter" value="enter" style="width:60px;"> 
				<a href="#">SignUp</a> 
			</form>
		</div>
	</div>
	<div id="header">
		
		<form>
			<p align="center"><input type="text" name="search" size="80"> 
			<select>
				<option disabled selected>Select Category</option>
				<option>Auto</option>
				<option>Real Estate</option>
				<option>Electronics</option>
			</select> 
			<input type="submit" name="" value="search" style="width:80px;"> </p> 
		</form>
		
	</div>
	<div id="content">
		<?php
			while ($item = mysql_fetch_assoc($result)) :
		?>
		<div class="item">
				<?=$item['date'];?> User:<?=$item['user_id'];?>
				<p align="justify"><b><?=$item['title'];?></b></p>
			<div class="desc">
				<p align="justify"><?=$item['description'];?></p>
				<br />
				<br />
				<div class="message">
					<form>
						Name: <input type="text" name="name"> 
						email: <input type="password" name="pass"> <br /><br />
						<textarea cols="80" rows="10"></textarea> <br />
						<input type="submit" name="enter" value="Send" style="width:100px;"> 
					</form>
				</div>
			</div>
		</div>
		<? endwhile;?>
		
	</div>
	<div id="footer">
		Design copyright &copy; 2015 HostingMaks by AlexSoft
	</div>
</div>
</body>
</html>
