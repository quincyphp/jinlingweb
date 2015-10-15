<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>Simpla Admin</title>
	
	<!--                       CSS                       -->
  
	<!-- Reset Stylesheet -->
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
  
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/invalid.css" type="text/css" media="screen" />	
	
	<!--                       Javascripts                       -->

	<!-- jQuery -->
	<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
	
	<!-- jQuery Configuration -->
	<script type="text/javascript" src="scripts/simpla.jquery.configuration.js"></script>
	
	<!-- Facebox jQuery Plugin -->
	<script type="text/javascript" src="scripts/facebox.js"></script>
	
	<!-- jQuery WYSIWYG Plugin -->
	<script type="text/javascript" src="scripts/jquery.wysiwyg.js"></script>
	
	<!-- jQuery Datepicker Plugin 
	<script type="text/javascript" src="scripts/jquery.datePicker.js"></script>
	<script type="text/javascript" src="scripts/jquery.date.js"></script>-->
	<style type="text/css">
	body{
		background:#f0f0f0;
	}
	</style>
</head>
<body> <!-- Wrapper for the radial gradient background -->
<div id="main-content"> <!-- Main Content Section with everything -->
	
	<noscript> <!-- Show a notification if the user has disabled javascript -->
		<div class="notification error png_bg">
			<div>
				Javascript is disabled or is not supported by your browser. Please <a href="" title="Upgrade to a better browser">upgrade</a> your browser or <a href="" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
			Download From <a href="">exet.tk</a></div>
		</div>
	</noscript>
	<div class="clear"></div> <!-- End .clear -->
	
	<div class="content-box"><!-- Start Content Box -->
		
		<div class="content-box-header" >
			
			<h3>添加页</h3>
			
			<ul class="content-box-tabs">
				<li><a href="list.php" class="current">返回列表页</a></li>
			</ul>
			
			<div class="clear"></div>
			
		</div> <!-- End .content-box-header -->
		
		<div class="content-box-content">		
			<div class="tab-content" id="tab1">
				<form action="#" method="post">
					<fieldset> 
						<p>
							<label>Small form input</label>
								<input class="text-input small-input" type="text" id="small-input" name="small-input" /> <span class="input-notification success png_bg">Successful message</span> 
								<br /><small>A small description of the field</small>
						</p>
						
						<p>
							<label>Medium form input</label>
							<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" /> <span class="input-notification error png_bg">Error message</span>
						</p>
						
						<p>
							<label>Large form input</label>
							<input class="text-input large-input" type="text" id="large-input" name="large-input" />
						</p>
						
						<p>
							<label>Checkboxes</label>
							<input type="checkbox" name="checkbox1" /> This is a checkbox <input type="checkbox" name="checkbox2" /> And this is another checkbox
						</p>
						
						<p>
							<label>Radio buttons</label>
							<input type="radio" name="radio1" /> This is a radio button<br />
							<input type="radio" name="radio2" /> This is another radio button
						</p>
						
						<p>
							<label>This is a drop down list</label>              
							<select name="dropdown" class="small-input">
								<option value="option1">Option 1</option>
								<option value="option2">Option 2</option>
								<option value="option3">Option 3</option>
								<option value="option4">Option 4</option>
							</select> 
						</p>
						
						<p>
							<label>Textarea with WYSIWYG</label>
							<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
						</p>
						
						<p>
							<input class="button" type="submit" value="Submit" />
						</p>
						
					</fieldset>
					
					<div class="clear"></div><!-- End .clear -->
					
				</form>
				
			</div> <!-- End #tab2 -->        
			
		</div> <!-- End .content-box-content -->
		
	</div> <!-- End .content-box -->	
	
	<div class="clear"></div>
	<div id="footer">
		<small> <!-- Remove this notice or replace it with whatever you want -->
				&#169; Copyright 2009 Your Company | Powered by <a href="">Simpla Admin</a> | <a href="#">Top</a>
		</small>
	</div><!-- End #footer -->
	
</div> <!-- End #main-content -->
		
</body>
</html>
