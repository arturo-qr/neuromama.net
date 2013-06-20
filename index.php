<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="shortcut icon" href="/images/neuro_ico.ico" type="image/x-icon" />
		<link rel="icon" href="/images/neuro_ico.ico" type="image/ico" />
		<meta name="description" content="Neuromama Information"/>
		<!-- JS --><script type="text/javascript" src="/js/commoncode.js"></script>
		<script type="text/javascript" src="/js/jquery-1.js"></script>
		<!-- JS --><script type="text/javascript" src="/js/jquery_004.js"></script> 
		<script type="text/javascript" src="/js/jquery.js"></script>

		<!-- TEST DELETE IF NECESARY-->

		<script type="text/javascript" src="/js/base.js"></script>
        <script type="text/javascript" src="/js/tabs.js"></script>

		<script type="text/javascript" src="AC_RunActiveContent.js"></script>
		<!-- CSS -->
		<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
		<link href="css/nav-book-gui.css" rel="stylesheet" type="text/css" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
		<!-- TESTING PDFVIEWER-->
		<link rel="stylesheet" href="style.css" />
		<nav>
			<ul onmouseover=painttab(1); onmouseout=unpainttab(1);>
						<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/introduction.aspx');>Eurasia Introduction</a></li>
						<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/overview.aspx');>Eurasia Overview</a></li>
						<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/philosophy.aspx');>Eurasia Philosophy</a></li>
						<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/mission.aspx');>Eurasia Mission</a></li>
						<li style="padding-top: 8px; padding-bottom: 5px;"><a href="#"  onclick=getNewPage('tabs/1-overview/reestablishing.aspx');>Reestablishing Las Vegas As The Cross-Trail Of The World</a></li>
					</ul> 
		</nav>
		<!--End of block of pdftesting
        <script type="text/javascript" src="tinybox.js"></script>
		<asp:ContentPlaceHolder id="head" runat="server">
		</asp:ContentPlaceHolder>
        -->
	</head>
<body>
<div id="HeaderContainer">
	<div id="HeaderContent">
		<div id="Branding">
			<div style="float: left; height: 29px;">
				<a href="#" onclick=getNewPage('default.aspx');><div style="position: relative; left: 17px; float: left; height: 29px;">
					<img src="images/NeuroMama_small.png" alt="NEUROMAMA" height="31" width="108">
				</div>
				</a>
				<span style="position: relative; left: 25px; font-family: 'Didact Gothic', sans-serif; font-size: 18px; color: #ffffff">The 21st Century Search Engine, Based on Neuro Technology.</span>
			</div>
		</div>
		<!-- Logged in Navigation Items -->
		<!-- Language Links 
		<div id="LanguageLinks">
			<div>
				<a href="#" class="LanguageSubNavigation">
					<img src="images/us.png" border="0">&nbsp;&nbsp;English
				</a>
				<a href="#" class="LanguageSubNavigation">
					<img src="images/mx.png" border="0">&nbsp;&nbsp;Espa&Ntilde;ol
				</a>	
			</div>
		</div>
		-->
		
		
		<!-- Navigation Items -->
		<div id="HeaderNavigation">
			<!-- Tabs Panel -->
			<!--<ul id="nav"></li-->
				<!--li onmouseover=painttab(1); onmouseout=unpainttab(1);><a href="#" onclick="return false;" class="btn-euover">EURASIA OVERVIEW AND PHILOSOPHY</a-->
					<!--First Tab
					
					<ul onmouseover=painttab(1); onmouseout=unpainttab(1);>
						<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/introduction.aspx');>Eurasia Introduction</a></li>
						<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/overview.aspx');>Eurasia Overview</a></li>
						<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/philosophy.aspx');>Eurasia Philosophy</a></li>
						<li style="padding-top: 8px;"><a href="#"  onclick=getNewPage('tabs/1-overview/mission.aspx');>Eurasia Mission</a></li>
						<li style="padding-top: 8px; padding-bottom: 5px;"><a href="#"  onclick=getNewPage('tabs/1-overview/reestablishing.aspx');>Reestablishing Las Vegas As The Cross-Trail Of The World</a></li>
					</ul> 
				  -->
			<!--</ul>-->
		</div>
		<div id="SubHeader"><span style="font-family: 'Didact Gothic',sans-serif; font-size: 13px; color: #ffffff"><strong style="font-size: 16px; color: #C5A88D">Fewer duplicates, more accurate returns, faster results, Frequent Searcher Rewards for gift certificates. Join now!</strong></span></div>
		<!-- /HeaderNavigation -->
	</div>
</div>
<!-- include virtual="/include/main-navigation-ie6.ascx" -->
<div id="newpagecontent"></div>
<div id="flashvideoholder2"></div>
	<!-- Corporate Script -->
	<script type="text/javascript">
		// When the DOM is ready, initialize the scripts.
		jQuery(function($) {
			// Get a reference to the container.
			var CorporateInner = $("#CorporateInner");
			// Bind the link to toggle the slide.
			$("#CorporateButton").click(
				function(event) {
					// Prevent the default event.
					event.preventDefault();
					// Toggle the slide based on its current
					// visibility.
					if (CorporateInner.is(":visible")) {
						// Hide - slide up.
						CorporateInner.slideUp(500);
					} else {
						// Show - slide down.
						CorporateInner.slideDown(500);
					}
				}
			);
		});
	</script>
	<!-- VIDEO LINKS SCRIP-->
	<script type="text/javascript">
		// When the DOM is ready, initialize the scripts.
		jQuery(function($) {
			// Get a reference to the container.
			var CorporateInner = $("#CorporateInner1");
			// Bind the link to toggle the slide.
			$("#CorporateButton1").click(
				function(event) {
					// Prevent the default event.
					event.preventDefault();
					// Toggle the slide based on its current
					// visibility.
					if (CorporateInner.is(":visible")) {
						// Hide - slide up.
						CorporateInner.slideUp(500);
					} else {
						// Show - slide down.
						CorporateInner.slideDown(500);
					}
				}
			);
		});
	</script>

	<!-- Language Script -->
	<script type="text/javascript">
		// When the DOM is ready, initialize the scripts.
		jQuery(function($) {
			// Get a reference to the container.
			var LanguageInner = $("#LanguageInner");
			// Bind the link to toggle the slide.
			$("#LanguageButton").click(
				function(event) {
					// Prevent the default event.
					event.preventDefault();
					// Toggle the slide based on its current
					// visibility.
					if (LanguageInner.is(":visible")) {
						// Hide - slide up.
						LanguageInner.slideUp(500);
					} else {
						// Show - slide down.
						LanguageInner.slideDown(500);
					}
				}
			);
		});
	</script>

<div id="FooterContainer">
	<div id="Footer">
		<!--div id="FooterTools">
        	<ul>
				<li><a href="http://www.globalentertainmentandmedia.com/News.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('pressroom','','images/footer/press-room-on.gif',1)"><img src="images/footer/press-room-off.gif" alt="Press Room" name="pressroom" id="pressroom" border="0" height="15" width="87"></a></li>
				<li><a href="http://tvimama.net/Global_and_Aces_of_Acts.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('sitemap','','images/footer/Site-Map-on.gif',0)"><img src="images/footer/Site-Map-off.gif" alt="Site Map" name="sitemap" id="sitemap" border="0" height="15" width="69"></a></li>
				
        	</ul>
		</div-->
		<div id="floatright">
			<!-- Property Links -->
			<div id="PropertyLinks" >
				<div style="width: 150px; height:24px; position:relative;">
					<div id="CorporateContainer">
						<div id="CorporateInner">
							<a href="http://www.acesofacts.com/" target="_blank">Aces of Acts</a><br>
							<a href="http://www.tvimama.com/" target="_blank">TVIMAMA.COM</a><br>
							<a href="http://www.tvimama.net" target="_blank">TVIMAMA.NET</a><br>
							<a href="http://www.eurasialasvegas.com/" target="_blank">EURASIA</a><br>
				
						</div>
						<div id="CorporateButton">
							<a href="#">
							<img src="images/footer/btn-corporate-links-off.jpg" alt="Corporate Links" id="corporatebtn" class="img-swap"onmouseover="this.src='images/footer/btn-corporate-links-on1.jpg'" onmouseout="this.src='images/footer/btn-corporate-links-off.jpg'" height="24" width="150"></a>
						</div>		
					</div>	
				</div>
				
			</div>
			<div id="PropertyLinks1" >
				<div style="width: 150px; height:24px; position:relative;">
					<div id="CorporateContainer1">
						<div id="CorporateInner1">
							<a href="#" onclick="pauseVideo();TINY.box.show({url:'media/video1.html',width:720,height:480})">VIDEO 1</a><br>
						</div>
						<div id="CorporateButton1">
							<a href="#">
								<img src="images/footer/btn-video-links-off.png" alt="1" id="corporatebtn" class="img-swap" onmouseover="this.src='images/footer/btn-video-links-on.png'" onmouseout="this.src='images/footer/btn-video-links-off.png'" height="24" width="150">
							</a>
						</div>		
					</div>
				</div>
			</div>
			<div id="FooterTools2">
				<div id="FooterSocial"><img src="images/Follow-Us.gif" alt="Follow Us:" height="16" width="55">
					<a href="http://twitter.com/GlobalLtd" target="_blank" onmouseover="MM_swapImage('twitter','','images/footer/btn-Twitter-on.jpg',1)" onmouseout="MM_swapImgRestore()">
						<img src="images/footer/btn-Twitter-off.jpg" alt="Twitter" id="twitter" height="16" width="17">
					</a>
					<a href="http://www.facebook.com/pages/Global-Entertainment-Media-LTD/140161319418555?sk=info" target="_blank" onmouseover="MM_swapImage('facebook','','images/footer/btn-Facebook-on.jpg',1)" onmouseout="MM_swapImgRestore()">
						<img src="images/footer/btn-Facebook-off.jpg" alt="Facebook" id="facebook" height="16" width="17">
					</a>
					<a href="http://www.youtube.com/Globalltd" target="_blank" onmouseover="MM_swapImage('youtube','','images/footer/btn-YouTube-on.jpg',1)" onmouseout="MM_swapImgRestore()">
						<img src="images/footer/btn-YouTube-off.jpg" alt="YouTube" id="youtube" height="16" width="17">
					</a>
				</div>
			</div>
		</div>
		<div id="FooterCopyright"><br><br> <br><h2 style="text-align:right; margin-right:180px;">Novosibirsk, 182/1 Krasny Prospekt, 7th floor, 630049, Russia</h2>
		</div>
	</div>
</div>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-helper-hidden-accessible"></div>
</body>
</html>
