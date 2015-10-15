<div class="imgbox">
	<ul id="imgshow">
	<?php foreach($banner_info as $key=>$value){?>
		<li><img src="<?php echo $value['ad_imgurl'];?>" /></li>
	<?php }?>
	</ul>
</div>
<div class="changeimg">
	<ul id="change">
		<li onmouseover="changeimg(0,'stop')" onmouseout="runshowimg(1)"><a href="javsscript:void(0)">1</a></li>
		<li onmouseover="changeimg(1,'stop')" onmouseout="runshowimg(2)"><a href="javsscript:void(0)">2</a></li>
		<li onmouseover="changeimg(2,'stop')" onmouseout="runshowimg(3)"><a href="javsscript:void(0)">3</a></li>
		<li onmouseover="changeimg(3,'stop')" onmouseout="runshowimg(4)"><a href="javsscript:void(0)">4</a></li>
	</ul>
</div>