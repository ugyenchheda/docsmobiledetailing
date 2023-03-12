<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doc's Mobile Detail</title>
<br />
<link href="csss/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.easing.1.1.1.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.cycle.all.2.72.js"></script>

<script type="text/javascript" language="javascript">

$(document).ready(function(){

$.fn.cycle.defaults.speed = 1300;
$.fn.cycle.defaults.timeout = 1500;

$('.fadeImage').cycle({
fx: 'fade',
});
});

</script>
</head>

<body>
<div id="wrapper">  

                <div id="banner">
                  <div id="logo">
                  <a href="index.php" title="Doc's Mobile Detail"><img src="images/logo.png" /></a>
                  </div><!--logo end shere-->
                  
                  <div id="callus">
                  <p>Call us: (702) 370-0181<br />
                               (702) 370-6973</p>
                  </div><!--calllus end here-->
                  
                  <div id="facebookss">
                  <img src="images/facebooks.png" border="0" usemap="#Map" />
            <map name="Map" id="Map">
              <area shape="rect" coords="0,2,34,42" href="#" title="Facebook" />
              <area shape="rect" coords="-5,7,23,37" href="#" title="Facebook" /><area shape="rect" coords="43,5,71,33" href="#" title="Twitter" /></map>
                  </div><!--facebooks ends here-->
                 
                </div><!--banner ends here-->
                
                <div id="menu-content">
                 <div id="menu">
                   <ul>
                     <li><a href="index.php" title="Home" >Home</a></li>
                     <li><a href="beforeafter.php" title="Before $ After">Before & After</a></li>
                     <li style="border:none"><a href="contactus.php" title="Contact us" class="activate">Contact us</a></li>
                         <li style="border:none"><a href="carpet-cleaning.php" title="carpet cleaning">carpet cleaning</a></li>
                  </ul>
                 </div><!--menu ends here-->
            
            </div><!--menu_content ends here-->
                
                <div id="content">
                  
                
                  <div style="margin-top:5px; width:300px;" id="welcome">
                     <h1><span style="font-size:24px">Contact Info !</span></h1>
                     <div class="contact">
                        <p>&nbsp;</p>
                        <p>Doc;s Mobile Detail</p>
                        <p> Las Vegas, NV 89106-2603 </p>
                        <p>Phone : ( 702 ) 370 -0181</p>
                        <p> ( 702 ) 370 -6973</p>
                        <p>Email :    docsmobiledetail@yahoo.com  <br />
                        </p>
                        <p>&nbsp;</p>
                       <p style="color:#006600; font-family:'Trajan Pro'; font-size:18px; font-weight:bold;">Feedback Us</p>
                        </div><!--contact ends here-->
                        <div style="background-image:none; width:250px; margin-bottom:10px" id="welcometxt">
                        <?php include "includes/contactform.php"; ?>
                 
                       </div><!--welocmetxt ends here--> 
                       
      </div><!--welcome ends here-->
                     
                  <div style="width:700px;" id="slide">
                  
                  <div class="map"><br />
                    <img src="images/docs.png" width="550" height="697" /></div><!--map ends here-->
                   
                  </div><!--slide ends here-->
                </div> 
                <!--content ends here-->
               </div><!--wrapper ends here-->
           </div>  <!--largercontent ends here-->
                <div id="footer">
                <div id="footertop">
                 <div id="copyright">
                 <p>Copyright © 2012 Doc's Mobile Detail  All Rights Reserved.</p>
                 </div><!--copyright ends heree-->
                 
                 <div id="designed">
                 <p>Designed by: <span style="color:#00FF66"><a href="http://uniwebus.com/" target="_blank">UNIweb</a></span></p>
                 </div><!--designed ends here-->
                </div> <!--footer top ends here-->
                </div><!--footer ends here-->

</body>
</html>
