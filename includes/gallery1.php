<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>
    
    
    <table width="915" border="0" style="width:900px; margin-top:15px; background-color:#b9e1df">
      <tr>
      <td width="35%"><a rel="example_group" href="images/before2/1.jpg" title=""><img alt="" src="images/before/1.jpg" height="201" width="278" /></a></td>
      <td width="34%"><a rel="example_group" href="images/before2/2.jpg" title=""><img alt="" src="images/before/2.jpg" height="201" width="278" /></a></td>
      <td width="34%"><a rel="example_group" href="images/before2/3.jpg" title=""><img alt="" src="images/before/3.jpg" height="201" width="278" /></a></td>
      </tr>
      <tr>
        <td colspan="3"></td>
      </tr>
      
      <tr>
        <td colspan="3" ><p style="font-family:Georgia, 'Times New Roman', Times, serif; color:#000000; font-size:25px; text-align:center "> I CLEAN CORNERS, I DON'T CUT THEM&quot; </p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="35%"><a rel="example_group" href="images/before2/4.jpg" title=""><img alt="" src="images/before/4.jpg" height="201" width="278" /></a></td>
      <td width="34%"><a rel="example_group" href="images/before2/5.jpg" title=""><img alt="" src="images/before/5.jpg" height="201" width="278" /></a></td>
      <td width="34%"><a rel="example_group" href="images/before2/6.jpg" title=""><img alt="" src="images/before/6.jpg" height="201" width="278" /></a></td>
      </tr>
      <tr>
         <td colspan="3" ><p style="font-family:Georgia, 'Times New Roman', Times, serif; color:#000000; font-size:25px; text-align:center "> SERVING LAS VEGAS </p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a rel="example_group" href="images/before2/7.jpg" title=""><img alt="" src="images/before/7.jpg" height="201" width="278" /></a></td>
        <td><a rel="example_group" href="images/before2/8.jpg" title=""><img alt="" src="images/before/8.jpg" height="201" width="278" /></a></td>
        <td><a rel="example_group" href="images/before2/9.jpg" title=""><img alt="" src="images/before/9.jpg" height="201" width="278" /></a></td>
      </tr>
      <tr>
         <td colspan="3" ><p style="font-family:Georgia, 'Times New Roman', Times, serif; color:#000000; font-size:25px; text-align:center "> FULLY EQUIPPED FOR ON SITE SERVICE </p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a rel="example_group" href="images/before2/10.jpg" title=""><img alt="" src="images/before/10.jpg" height="201" width="278" /></a></td>
        <td><a rel="example_group" href="images/before2/11.jpg" title=""><img alt="" src="images/before/11.jpg" height="201" width="278" /></a></td>
        <td><a rel="example_group" href="images/before2/12.jpg" title=""><img alt="" src="images/before/12.jpg" height="201" width="278" /></a></td>
      </tr>
      <tr>
         <td colspan="3" ><p style="font-family:Georgia, 'Times New Roman', Times, serif; color:#000000; font-size:25px; text-align:center ">I CLEAN CORNERS, I DON'T CUT THEM&quot; </p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a rel="example_group" href="images/before2/13.jpg" title=""><img alt="" src="images/before/13.jpg" height="201" width="278" /></a></td>
        <td><a rel="example_group" href="images/before2/14.jpg" title=""><img alt="" src="images/before/14.jpg" height="201" width="278" /></a></td>
        <td><a rel="example_group" href="images/before2/15.jpg" title=""><img alt="" src="images/before/15.jpg" height="201" width="278" /></a></td>
      </tr>
      <tr>
         <td colspan="3" ><p style="font-family:Georgia, 'Times New Roman', Times, serif; color:#000000; font-size:25px; text-align:center ">SERVING LAS VEGAS </p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a rel="example_group" href="images/before2/16.jpg" title=""><img alt="" src="images/before/16.jpg" height="201" width="278" /></a></td>
        <td><a rel="example_group" href="images/before2/17.jpg" title=""><img alt="" src="images/before/17.jpg" height="201" width="278" /></a></td>
        <td><a rel="example_group" href="images/before2/18.jpg" title=""><img alt="" src="images/before/18.jpg" height="201" width="278" /></a></td>
      </tr>
      <tr>
         <td colspan="3" ><p style="font-family:Georgia, 'Times New Roman', Times, serif; color:#000000; font-size:25px; text-align:center ">In And Out</p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a rel="example_group" href="images/before2/19.jpg" title=""><img alt="" src="images/before/19.jpg" height="201" width="278" /></a></td>
        <td><a rel="example_group" href="images/before2/20.jpg" title=""><img alt="" src="images/before/20.jpg" height="201" width="278" /></a></td>
        <td><a rel="example_group" href="images/before2/21.jpg" title=""><img alt="" src="images/before/21.jpg" height="201" width="278" /></a></td>
      </tr>
      <tr>
         <td colspan="3" ><p style="font-family:Georgia, 'Times New Roman', Times, serif; color:#000000; font-size:25px; text-align:center ">Serving Las Vegas</p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    