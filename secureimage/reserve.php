<div id="wrap">

<form name="reservation" method="post" action="secureimage/process.php">

<!-- DO NOT change ANY of the php sections -->
<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>

<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />

<div class="heading_cont">Personal Details:</div>
<div class="text">Your Name:</div> 
<input name="name" type="text" class="box" size="35"/>
<br />
<div class="text">Your Email:</div>
<input name="visitormail" type="text" class="box" size="35" />
<br />

<div class="text">Address:</div>
<input name="add" type="text" class="box" size="35" />
<br />

<div class="text">Phone No.</div>
<input name="phone" type="text" class="box"  onKeyPress="return numbersonly(this, event)" size="35" />
<br />
<div class="heading_cont">Booking Details:</div>
<div class="text">Check In:</div> 

<select name="in_date" class="box" style="height:25px;">
  <option selected="selected">1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
  <option>25</option>
  <option>26</option>
  <option>27</option>
  <option>28</option>
  <option>29</option>
  <option>30</option>
  <option>31</option>
  <option>32</option>
</select>
<select name="in_month" class="box" style="width:100px; height:25px;">
  <option selected="selected">January </option>
  <option>February </option>
  <option>March </option>
  <option>April </option>
  <option>May </option>
  <option>June</option>
  <option>July</option>
  <option>August</option>
  <option>September</option>
  <option>October</option>
  <option>November</option>
  <option>December</option>
</select>
<br />
<div class="text">Check Out:</div>
<select name="out_date" class="box" style="height:25px;">
  <option>1</option>
  <option selected="selected">2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
  <option>25</option>
  <option>26</option>
  <option>27</option>
  <option>28</option>
  <option>29</option>
  <option>30</option>
  <option>31</option>
  <option>32</option>
</select>

<select name="out_month" class="box" style="width:100px; height:25px;">
  <option selected="selected">January </option>
  <option>February </option>
  <option>March </option>
  <option>April </option>
  <option>May </option>
  <option>June</option>
  <option>July</option>
  <option>August</option>
  <option>September</option>
  <option>October</option>
  <option>November</option>
  <option>December</option>
</select>

<br />
<div class="text">Room Type:</div>
<select name="type" class="box" style="width:100px; height:25px;">
  <option>Select</option>
  <option>Single</option>
  <option>Double</option>
</select>
<div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="22%" valign="top" class="text">Number of Rooms: </td>
      <td width="17%"><input name="roomno" type="text" class="box" onKeyPress="return numbersonly(this, event)" size="10" /></td>

      <td width="7%" valign="top" class="text">Pets:</td>
      <td width="54%"><select name="pet" class="box" style="width:80px; height:25px;">
        <option>Select</option>
        <option>Yes</option>
        <option>No</option>
      </select>      </td>
    </tr>
    <tr>
      <td valign="top" class="text">Number of Adults:</td>
      <td><select name="adults" class="box" style="width:80px; height:25px;">
        <option>Select</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>
      </td>
      <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="21%" valign="top" class="text">Childrens:</td>
          <td width="79%"><select name="childrens" class="box" style="width:80px; height:25px;">
        <option>Select</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<div class="heading_cont">Payment Details:</div>
<div class="text">Name on card:</div>
<input name="cardname" type="text" class="box" size="30"  />
<br />
<div class="text">Card type:</div>
<select name="cardtype" class="box" style="width:150px; height:25px;">
  <option selected="selected">Please Select</option>
  <option>Master</option>
  <option>Visa</option>
  <option>Amex</option>
  <option>Discover</option>
</select>
<br />
<div class="text">Card Number:</div>
<input name="cardno" type="text" class="box"  onKeyPress="return numbersonly(this, event)" size="30" />
<br />
<div class="text"> Security Code:</div>
<input name="cardcode" type="text" class="box"  onKeyPress="return numbersonly(this, event)" size="30" />
<br />
<div class="text">Expiration Date:</div>
<input name="expiredate" type="text" class="box" /><a href="javascript:showCal('expiredate')">Select Date</a>
<br />
<div class="text">Comments:</div>
<textarea name="notes" cols="50" rows="5" class="msg"  ></textarea>
<br />
<div style="width: 430px; float: left; height: 90px">
      <img id="siimage" align="left" style="padding-right: 5px; border: 0" src="securimage_show.php?sid=<?php echo md5(time()) ?>" />

        <object type="application/x-shockwave-flash"
                data="securimage_play.swf?audio=securimage_play.php&amp;bgColor1=#8E9CB6&amp;bgColor2=#fff&amp;iconColor=#000&amp;roundedCorner=5"
                id="SecurImage_as3" width="19" height="19" align="middle">
			    <param name="allowScriptAccess" value="sameDomain" />
			    <param name="allowFullScreen" value="false" />
			    <param name="movie" value="securimage_play.swf?audio=securimage_play.php&amp;bgColor1=#8E9CB6&amp;bgColor2=#fff&amp;iconColor=#000&amp;roundedCorner=5" />
			    <param name="quality" value="high" />
			    <param name="bgcolor" value="#ffffff" />
		 </object>


        <br />
        
        <!-- pass a session id to the query string of the script to prevent ie caching -->
        <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onClick="document.getElementById('siimage').src = 'securimage_show.php?sid=' + Math.random(); return false"><img src="images/refresh.gif" alt="Reload Image" border="0" onClick="this.blur()" align="bottom" /></a>
</div>
<br />
<input type="submit" class="box2" value="Send Mail" /> 
<input type="reset" class="box2" value="Reset" />
<br />
</form>
<?php
} else { //form is posted
  include("securimage.php");
  $img = new Securimage();
  $valid = $img->check($_POST['code']);

  if($valid == true) {
    echo "<center>Thanks, you entered the correct code.<br />Click <a href=\"{$_SERVER['PHP_SELF']}\">here</a> to go back.</center>";
  } else {
    echo "<center>Sorry, the code you entered was invalid.  <a href=\"javascript:history.go(-1)\">Go back</a> to try again.</center>";
  }
}

?>
</div>