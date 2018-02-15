<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
<!-- ufl-template chem1 header -->
	<?php wp_head(); ?>

<script type="text/javascript">
<!--

function hideLayer(layerName){
 //if (ThisTest == true) {
	alert(layerName);
	if (menuActive == 0 && layerName && layerName != 'undefined') {
	// if (layerName && layerName != 'undefined') {
		//for (var i=0; i<8; i++) {
			//var thisKey = 'Sub' + i;
			//onLayer[layerName] = TRUE;
			//var layerName = 'Sub' + i;
 
			if (NS4 || IE4) {
				eval(layerRef+'["'+layerName+'"]'+styleSwitch+'.visibility="'+layerHid+'"');
			}
			else if (NS6) {
				eval(layerRef+'("'+layerName+'")'+styleSwitch+'.visibility="'+layerHid+'"');
			}
			//Change main nav backgrounds here?
			for (i = 0; i < 7; i++) {
				mouseOutStyle('rollimg'+i,'rolltxt'+i,'#0161b7',1);
			}

			for (i = 7; i < 10; i++) {
				mouseOutStyle('rollimg'+i,'rolltxt'+i,'none',2);
			}

			for (i = 24; i < 25; i++) {
				mouseOutStyle('rollimg'+i,'rolltxt'+i,'none',2);
			}
		//}
	}
 //}
}
		var compatMode = 0;
        var agentStr = navigator.userAgent;
		var agentName = 0;
        var mode;

		if (agentStr.indexOf("Chrome") > -1) {
			agentName = 'chrome';
		}
        else if (agentStr.indexOf("Safari") > -1) {
			agentName = 'safari';
		}
		else if (agentStr.indexOf("Mozilla") > -1) {
			agentName = 'mozilla';
		}
		else {
			agentName = 'ie';
		}
        if ((agentStr.indexOf("Trident/5.0") > -1) || (agentStr.indexOf("Trident/6.0") > -1)) {
            if (agentStr.indexOf("MSIE 7.0") > -1) {
                mode = "IE9 Compatibility View";
				compatMode = 1;
			}
            else {
                mode = "IE9";
			}
        }
        else if (agentStr.indexOf("Trident/4.0") > -1) {
            if (agentStr.indexOf("MSIE 7.0") > -1) {
                mode = "IE8 Compatibility View";
				compatMode = 1;
			}
            else {
                mode = "IE8";
			}
        }
        else {
            mode = "IE7";
		}
		if (compatMode) { alert("Internet Explorer Compatibility View detected.\nThis site is best viewed when your compatibility view is turned off.\nhttp://windows.microsoft.com/en-us/internet-explorer/use-compatibility-view#"); }

var ns4=document.layers;
var ie4=document.all;
var ns6=document.getElementById&&!document.all;
var closeOnClick = 'Y';

function hidediv(objId){
	if (ie4||ns6) {
		if (ns6) { crossobj=ns6? document.getElementById(objId) : document.all.showimage; }
		else { crossobj=document.getElementById(objId); }
		crossobj.style.visibility="hidden";
	}
	else if (ns4) { document.showimage.visibility="hide"; }
}

function showanydiv(thisbox){
	//alert('ns4=' + ns4 + '; ie4=' + ie4 + '; ns6=' + ns6);
	if (ie4||ns6) {
		if (ns6) { crossobj=ns6? document.getElementById(thisbox) : document.all.showimage; }
		else { crossobj=document.getElementById(thisbox); }
		crossobj.style.visibility="visible";
	}
	else if (ns4) { document.showimage.visibility="show"; }
}

function showdiv(objId, closeOnClick, thisPosition){
	/* If document.jobId is invisible, make visible. */
	/* If document.jobId is visible, make invisible. */
	if (!thisPosition) { thisPosition = 'relative'; }
	crossobj=ns6? document.getElementById(objId) : document.all[objId];
	if (ie4||ns6) {
		if ((crossobj.style.visibility=="visible") && (closeOnClick!="N")) {
			crossobj.style.visibility="hidden";
			crossobj.style.position="absolute";
			crossobj.style.top="-9000px";
			crossobj.style.padding="0px";
			crossobj.style.height="0px";
		}
		else {
			crossobj.style.visibility="visible";
			crossobj.style.position=thisPosition;
			crossobj.style.top="0px";
			crossobj.style.padding="7px";
			crossobj.style.height="auto";
		}
	}
	else if (ns4) {
		if ((document.showimage.visibility=="show") && (closeOnClick!="N")) {
			document.showimage.visibility="hide";
			document.showimage.position="absolute";
			document.showimage.top="-9000px";
			document.showimage.padding="0px";
			document.showimage.height="0px";
		}
		else {
			document.showimage.visibility="show";
			document.showimage.position=thisPosition;
			document.showimage.top="0px";
			document.showimage.padding="7px";
			document.showimage.height="auto";
		}
	}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

//-->
</script>
</head>

<body <?php body_class($class); ?> onload="MM_preloadImages('/wp-content/uploads/sites/3/2013/11/button_mag-over.png')">
		<ul class="screen-reader-text">
			<li><a href="http://assistive.usablenet.com/tt/<?php if (is_home()) { echo esc_url(home_url()); } else { echo esc_url(get_permalink( $post->ID )); } ?>" accesskey="t" title="Text-only version of this website">Text-only version of this website</a></li>
			<li><a href="#content" accesskey="s" title="Skip navigation">Skip navigation</a></li>
			<li><a href="<?php bloginfo( 'url' ); ?>" accesskey="1" title="Home page">Home page</a></li>
			<li><a href="<?php bloginfo( 'url' ); ?>/#secondary" accesskey="2" title="what's new">What's new</a></li>
			<li><a href="#search" accesskey="4" title="Search">Search</a></li>
			<?php $webmaster_email = of_get_option("opt_webmaster_email"); if( !empty($webmaster_email) && ufl_check_email_address($webmaster_email) ) { echo "<li><a id=\"contact-webmaster-srt\" accesskey=\"6\" href=\"mailto:".$webmaster_email."\">Contact Webmaster</a></li> "; } else { echo "<li><a id=\"contact-webmaster-srt\" accesskey=\"6\" href=\"".$webmaster_email."\">Contact Webmaster</a></li> "; } ?>
			<li><a href="#footer-links" accesskey="8" title="Website policies">Website policies</a></li>
			<li><a href="http://www.ufl.edu/disability/" accesskey="0" title="Disability services">Disability services</a></li>
		</ul>
	
  <?php include(get_theme_root() . '/' . get_stylesheet() . '/library/php/uf-chemistry-nav.php');  ?>

	<header role="banner">
	  <div class="container">
<a href="http://www.chem.ufl.edu"><img class="chemlogo" src="<?php print(get_stylesheet_directory_uri()); ?>/images/chem_logo_414x70.png"></a>
 
		
		<ul id="header-social">
			<li><a href="<?php ufandshands_get_socialnetwork_url("facebook"); ?>" class="facebook ir" target="_blank">Facebook</a></li>
			<li><a href="<?php ufandshands_get_socialnetwork_url("twitter"); ?>" class="twitter ir" target="_blank">Twitter</a></li><!--
			<li><a href="<?php ufandshands_get_socialnetwork_url("youtube"); ?>" class="youtube ir" target="_blank">Youtube</a></li>-->
		</ul>
		<div id="header-search-wrap">
			<?php if(has_nav_menu('header_links')) { //detects if the header_links menu is being used ?>
			  <nav id="utility-links" class="span-7half" role="navigation">
				<ul><?php wp_nav_menu( array('theme_location' => 'header_links', 'container' => false )); ?></ul>
			  </nav>
			<?php } ?>
		  <div id="searchform-wrap">
		  	<?php $opt_search_box_text = of_get_option("opt_search_box_text"); ?>
			<?php $opt_use_wp_search = of_get_option("opt_use_wp_search"); if(!empty($opt_use_wp_search)) { ?>
			<form method="get" id="searchform" action="<?php echo home_url('/'); ?>" role="search">
				<input type="text" value="<?php if (!empty($opt_search_box_text)) { echo $opt_search_box_text; } else { echo 'Search This Site'; }?>" id="header-search-field" name="s" />
				<input type="image" src="<?php print(get_stylesheet_directory_uri()); ?>/images/header-search-btn-orange.jpg" id="header-search-btn"  alt="Search Button" name="sa" />
			</form>
			<?php } else { ?>
			<form method="get" id="searchform" action="http://search.ufl.edu/search" role="search">
				<input type="hidden" name="source" id="source" value="web">
				<?php $opt_site_specific_search = of_get_option("opt_site_specific_search"); if(!empty($opt_site_specific_search)) { ?>
				<input type="hidden" name="site" id="site" value="<?php $parsed_url = parse_url( home_url() ); echo $parsed_url['host']; if ( $parsed_url['path'] ) { echo $parsed_url['path']; } ?>">
				<?php } ?>
				<input type="text" value="<?php if (!empty($opt_search_box_text)) { echo $opt_search_box_text; } else { echo 'Search UF Web'; } ?>" id="header-search-field" name="query" />
				<input type="image" src="<?php print(get_stylesheet_directory_uri()); ?>/images/header-search-btn-orange.jpg" id="header-search-btn"  alt="Search Button" name="sa" />
			</form>
			<?php } ?>
		  </div>
		</div><!-- end header-search-wrap -->
<p class="clearfloat">&nbsp;</p>
		<!-- begin website title logic -->
			<?php ufandshands_site_title(); ?>
		<!-- end website title logic -->

		<?php // orange header action item box
		
			$actionitem_text = of_get_option(opt_actionitem_text);
			$actionitem_url = of_get_option(opt_actionitem_url);
		
			if (!empty($actionitem_text)) {
				echo "<a id='header-actionitem' href='".$actionitem_url."'>".$actionitem_text."</a>";
			}
		
		?>
		
	  </div><!-- end header .container -->
	</header>

	<?php include(get_theme_root() . '/' . get_template() . '/library/php/menu.php'); //menu logic ?>