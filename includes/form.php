<script src="DWConfiguration/ActiveContent/IncludeFiles/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #000000;
	font-size: 18px;
}
</style>
<font color="#FF0000">
	<?php 
		if(isset($_GET['msg']))
			{
			echo $_GET['msg'];
			}
	?> 
</font>
<form name="contact" method="post" action="process.php" onSubmit="return checkForm(this)">

	<!-- DO NOT change ANY of the php sections -->
	<?php
		$ipi = getenv("REMOTE_ADDR");
		$httprefi = getenv ("HTTP_REFERER");
		$httpagenti = getenv ("HTTP_USER_AGENT");
	?>

	<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
	<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
	<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
	<?php 
	if(isset($_GET['msg'])){ ?>
		<script language="javascript">
			alert("	<?php echo $_GET['msg'];?>");
		</script>
	<?php } ?>
	<input name="name" type="text" class="boox" style="background:#FFFFFF; border:1px #333333 solid; width:238px; height:28px; color:#000000; font-size:11px;" value="&nbsp;Name :&nbsp;"/>
	<input name="add" type="text" class="boox" style="background:#FFFFFF; border:1px #7a6a6a solid; width:238px; height:28px; color:#000000; font-size:12px" value="&nbsp;Address :&nbsp;"/>
	<input name="phone" type="text" class="boox"  onKeyPress="return numbersonly(this, event)" style="background:#FFFFFF; border:1px #7a6a6a solid; width:238px; height:28px; color:#000000; font-size:12px;" value="&nbsp;Phone :&nbsp;"/>
	<input name="email" type="text" class="box" size="35" style="background:#FFFFFF; border:1px #7a6a6a solid; width:238px; height:28px; color:#000000; font-size:12px;" value="&nbsp;Email Address :&nbsp;"/>
	<p>
	<textarea name="notes" cols="40" rows="5" class="msg" style="background:#FFFFFF; width:238px; height:115px; border:1px #7a6a6a solid; font-size:12px; color:#000000;">Short Msg :&nbsp;</textarea>
	</p>
	<div style="width: 238px;height: 50px">
	<p style="margin-top:14px;">
	<img src="secureimage/securimage_show.php?sid=<?php echo md5(time()) ?>" name="siimage" width="144" height="45" align="left" id="siimage" style="padding-right: 5px; border: 0" />
	<script type="text/javascript">
	AC_FL_RunContent( 'type','application/x-shockwave-flash','data','secureimage/securimage_play.swf?audio=secureimage/securimage_play.php&bgColor1=#8E9CB6&bgColor2=#fff&iconColor=#000&roundedCorner=5','id','SecurImage_as3','width','46','height','36','align','middle','allowscriptaccess','sameDomain','allowfullscreen','false','movie','secureimage/securimage_play?audio=secureimage/securimage_play.php&bgColor1=#8E9CB6&bgColor2=#fff&iconColor=#000&roundedCorner=5','quality','high','bgcolor','#ffffff' ); //end AC code
	</script>
	<noscript>
	<object type="application/x-shockwave-flash"
	data="secureimage/securimage_play.swf?audio=secureimage/securimage_play.php&amp;bgColor1=#8E9CB6&amp;bgColor2=#fff&amp;iconColor=#000&amp;roundedCorner=5"
	id="SecurImage_as3" width="46" height="36" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="secureimage/securimage_play.swf?audio=secureimage/securimage_play.php&amp;bgColor1=#8E9CB6&amp;bgColor2=#fff&amp;iconColor=#000&amp;roundedCorner=5" />
	<param name="quality" value="high" />
	<param name="bgcolor" value="#ffffff" />
	</object>
	</noscript>
	</p>
	<p>

	<!-- pass a session id to the query string of the script to prevent ie caching -->
	<a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onClick="document.getElementById('siimage').src = 'secureimage/securimage_show.php?sid=' + Math.random(); return false"><img src="secureimage/images/refresh.png" alt="Reload Image" width="40" height="30" border="0" align="middle" onClick="this.blur()" style="margin-top:5px" /></a><!--Secure Image Ends--></p>
	</div><br>
	<div class="text">
	<p style="color:#FFFFFF;">
		<span class="style1">Code:</span>
		<input name="code" type="text" class="box" size="12" style="background:#FFFFFF; border: 1px #7a6a6a solid; width:184px; height:28px;"/>
	</p>
	</div>


	<p>
		<input type="submit" class="box2" value="Send Mail" style="cursor:pointer;" /> 
		<input type="reset" class="box2" value="Reset" style="cursor:pointer;" />
	</p>
</form>
