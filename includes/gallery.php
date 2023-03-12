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
    
    
    <table width="700" border="0" style="margin-top:22px;">
  <tr>
    <td width="38%"><a rel="example_group" href="images/before after/9.jpg" title=""><img alt="" src="images/before/9.jpg" height="228" width="329" /></a></td>
    <td width="62%"><a rel="example_group" href="images/before after/10.jpg" title=""><img alt="" src="images/before/10.jpg" height="228" width="329" /></a></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><p style="font-family:'Trajan Pro'; font-size:18px; color:#003300; font-weight:bold; margin-bottom:10px;">In And Out</p></td>
    </tr>
  <tr>
    <td><a rel="example_group" href="images/before after/3.jpg" title=""><img alt="" src="images/before/3.jpg" height="228" width="329" /></a></td>
    <td><a rel="example_group" href="images/before after/4.jpg" title=""><img alt="" src="images/before/4.jpg" height="228" width="329"  /></a></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><p style="font-family:'Trajan Pro'; font-size:18px; color:#003300; font-weight:bold; margin-bottom:10px;"> I CLEAN CORNERS, I DON'T CUT THEM"</p></td>
    </tr>
  
   <tr>
    <td><a rel="example_group" href="images/before after/5.jpg" title=""><img alt="" src="images/before/5.jpg" height="228" width="329" /></a></td>
    <td><a rel="example_group" href="images/before after/6.jpg" title=""><img alt="" src="images/before/6.jpg" height="228" width="329" /></a></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><p style="font-family:'Trajan Pro'; font-size:18px; color:#003300; font-weight:bold; margin-bottom:10px;"> SERVING LAS VEGAS</p> </td>
    </tr>
   <tr>
    <td><a rel="example_group" href="images/before after/7.jpg" title=""><img alt="" src="images/before/7.jpg" height="228" width="329" /></a></td>
    <td><a rel="example_group" href="images/before after/8.jpg" title=""><img alt="" src="images/before/8.jpg" height="228" width="329"  /></a></td>
  </tr>
   <tr>
    <td colspan="2" align="center"><p style="font-family:'Trajan Pro'; font-size:18px; color:#003300; font-weight:bold; margin-bottom:10px;"> FULLY EQUIPPED FOR ON SITE SERVICE </p> </td>
    </tr>
</table>

    <p>&nbsp;</p>
    