<html>
	<head>
		<link rel="shortcut icon" href="images/neuro_ico.ico" type="image/x-icon" />
		<link rel="icon" href="images/neuro_ico.ico" type="image/ico" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<!-- JS --><script type="text/javascript" src="js/commoncode.js"></script>		
		<script type="text/javascript" src="js/jquery-1.js"></script>
		<!-- JS --><script type="text/javascript" src="js/jquery_004.js"></script> 
		<script type="text/javascript" src="js/jquery.js"></script>

		<!-- TEST DELETE IF NECESARY-->

		<script type="text/javascript" src="js/base.js"></script>

		<script src="AC_RunActiveContent.js" language="javascript"></script>
		<!-- CSS -->
		<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
		<link href="css/nav-book-gui.css" rel="stylesheet" type="text/css" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
		<!-- TESTING PDFVIEWER-->
		<link rel="stylesheet" href="style.css" />
		<script type="text/javascript" src="tinybox.js"></script>
		<!-- Scripts -->
		<script type="text/javascript">
			
			/*To put ON state on the selected tab when the tab or the subtabs are active*/
			function painttab(tab){
				switch(tab){
					//Tab 1 EURASIA OVERVIEW AND PHILOSOPHY
					case 1: $("a.btn-euover").css("background-image","url('/images4/on/1.png')"); break;
					//Tab 2 ISSUES AND OPPORTUNITIES
					case 2: $("a.btn-isop").css("background-image","url('/images4/on/2.png')"); break;
					//Tab 3 EURASIA BETTER IDEAS
					case 3: $("a.btn-euideas").css("background-image","url('/images4/on/3.png')"); break;
					//Tab 4 THE PEOPLE AND RESOURCES
					case 4: $("a.btn-people").css("background-image","url('/images4/on/4.png')"); break;
					//Tab 5 IMAGINE EURASIA
					case 5: $("a.btn-imagine").css("background-image","url('/images4/on/5.png')"); break;
					//Tab 6 MARKETING STRATEGIES
					case 6: $("a.btn-marketing").css("background-image","url('/images4/on/6.png')"); break;
					//Tab 7 TV/MOVIE STUDIOS AND LIVE ENTERTAINMENT
					case 7: $("a.btn-livent").css("background-image","url('/images4/on/7.png')"); break;
					//Tab 8 EURASIA DEVELOPMENT & RESOURCES
					case 8: $("a.btn-develop").css("background-image","url('/images4/on/8.png')"); break;
					//Tab 9 EURASIA AMUSEMENT CENTERS
					case 9: $("a.btn-amuse").css("background-image","url('/images4/on/9.png')"); break;
				}
			}
			/*To put OFF state on the selected tab when the tab or the subtabs are active*/
			function unpainttab(tab){
				switch(tab){
					//Tab 1 EURASIA OVERVIEW AND PHILOSOPHY
					case 1: $("a.btn-euover").css("background-image","url('/images4/off/1.png')"); break;
					//Tab 2 ISSUES AND OPPORTUNITIES
					case 2: $("a.btn-isop").css("background-image","url('/images4/off/2.png')"); break;
					//Tab 3 EURASIA BETTER IDEAS
					case 3: $("a.btn-euideas").css("background-image","url('/images4/off/3.png')"); break;
					//Tab 4 THE PEOPLE AND RESOURCES
					case 4: $("a.btn-people").css("background-image","url('/images4/off/4.png')"); break;
					//Tab 5 IMAGINE EURASIA
					case 5: $("a.btn-imagine").css("background-image","url('/images4/off/5.png')"); break;
					//Tab 6 MARKETING STRATEGIES
					case 6: $("a.btn-marketing").css("background-image","url('/images4/off/6.png')"); break;
					//Tab 7 TV/MOVIE STUDIOS AND LIVE ENTERTAINMENT
					case 7: $("a.btn-livent").css("background-image","url('/images4/off/7.png')"); break;
					//Tab 8 EURASIA DEVELOPMENT & RESOURCES
					case 8: $("a.btn-develop").css("background-image","url('/images4/off/8.png')"); break;
					//Tab 9 EURASIA AMUSEMENT CENTERS
					case 9: $("a.btn-amuse").css("background-image","url('/images4/off/9.png')"); break;
				}
			}
		</script>
		<script type="text/javascript">
			function getXMLTagName(a_doc, a_attribute) {
				var sep = '</' + a_attribute + '>';
				var arraytags = a_doc.toString().split('</' + a_attribute + '>');
				arraytags.length = arraytags.length - 1;
				for (var i = 0; i < arraytags.length; i++) {
					arraytags[i] = arraytags[i] + sep;
					//alert(arraytags[i]);
				}
				return arraytags;
			}

			function getXMLFirstNode(a_doc, a_attribute) {
				return getXMLNodeValue(a_doc, a_attribute);
			}
			function getXMLNodeValue2(a_node, a_attribute,a_attribute2) {
				var theXML = a_node.toString();
				var aStr = a_attribute.toString();
				var aStr2 = a_attribute2.toString();
				var sStart = '<' + aStr + '>';
				var sEnd = '</' + aStr2 + '>';
				var index1 = -1;
				var index2 = 0;
				index1 = theXML.indexOf(sStart);
				index2 = theXML.indexOf(sEnd, index1);
				if (index1 != -1 && index2 > index1) {
					output = theXML.substring(index1 + sStart.length, index2);
					return output; //OUTPUT IT PROPERLY.
				}
				else {
					return undefined;
				}
			}
			function isValid(a_obj) {
				return (a_obj != undefined && a_obj != null);
			}
			function getXMLNodeValue(a_node, a_attribute) {
				var theXML = a_node.toString();
				var aStr = a_attribute.toString();
				var sStart = '<' + aStr + '>';
				var sEnd = '</' + aStr + '>';
				var index1 = -1;
				var index2 = 0;
				index1 = theXML.indexOf(sStart);
				index2 = theXML.indexOf(sEnd);
				if (index1 != -1 && index2 > index1) {
					output = theXML.substring(index1 + sStart.length, index2);
					return output; //OUTPUT IT PROPERLY.
				}
				else {
					return undefined;
				}
			}
			var f_curFinishFunction = function(response) {
				//jQuery('#flashvideo').fadeIn('slow');
				jQuery('#HomeGallery').hide();
				var Details22 = document.getElementById('HomeGallery');
				Details22.innerHTML = "<div id=\"Detail\">        <div id=\"DetailHeader\"> </div>        <div id=\"DetailCopy\"></div></div>    ";
				document.title = getXMLNodeValue(response, ('title'));
				var Details1 = document.getElementById('DetailCopy');
				Details1.innerHTML = getXMLNodeValue2(response, ('div id="DetailCopy"'), ('div'));
				//DetailHeader
				var Details3 = document.getElementById('DetailHeader');
				Details3.innerHTML = getXMLNodeValue2(response, ('div id="DetailHeader"'), ('div'));
				jQuery('#HomeGallery').fadeIn('slow');
				jQuery('#Detail1').hide();
				jQuery('#Detail3').hide();
			}
			var f_curFinishFunction2 = function(response) {
				//jQuery('#flashvideo').fadeIn('slow');
				jQuery('#HomeGallery').hide();
				var Details22 = document.getElementById('HomeGallery');
				Details22.innerHTML = getXMLNodeValue2(response, ('div id="DetailCopy"'), ('div'));     		
				document.title = getXMLNodeValue(response, ('title'));
				jQuery('#HomeGallery').fadeIn('slow');
			}
		function getNewPage(page_url) {
			if(page_url.toString().indexOf("index.php") != -1){
				//jQuery('#HomeGallery').hide();
				ajax(page_url, '', f_curFinishFunction2);
				//jQuery('#HomeGallery').fadeIn('slow');
			}
			else{
				//jQuery('#HomeGallery').hide();
				ajax(page_url, '', f_curFinishFunction);
				//jQuery('#HomeGallery').fadeIn('slow');
			}
		}
		</script>
		<script language="javascript">
			function getFlashMovie(movieName) {
				var isIE = navigator.appName.indexOf("Microsoft") != -1;
				return (isIE) ? window[movieName] : document[movieName];
  			}
  			
  			function pauseVideo(){
  				//var movie = getFlashMovie('player');
  				var movie = document.getElementById("player");
				movie.Pause();
				return false;

  			}
		</script>
		<!--End of block of pdftesting-->
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
	</head>

	<body>
		<div id="HeaderContainer">
			<div id="HeaderContent">
				<div id="Branding">
					<div style="float: left; height: 29px;">
						<a href="#" onclick=getNewPage('index.php');>
						<div style="position: relative; left: 17px; float: left; height: 29px;">
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
				<div id="SubHeader"><span style="font-family: 'Didact Gothic',sans-serif; font-size: 13px; color: #fff"><strong style="font-size: 16px;">Fewer duplicates, more accurate returns, faster results, Frequent Searcher Rewards for gift certificates. Join now!</strong></span></div>
				<!-- /HeaderNavigation -->

			</div>
		</div>
		
		
<div id="PageContainerOuter">
	<div id="PageContainer">
		<!-- Home Left Column Begins -->
		<div id="HomeColumn1">
			<div id="flashvideo2">
				<object width="450" height="300" >
					<param name="movie" value="videoplayer.swf" />
					<param name="quality" value="best" />
					<param name="bgcolor" value="#000000" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="transparent" />
					<param name="scale" value="tofit" />
					<param name="allowFullScreen" value="true" />
					<param name="flashvars" value="autoplay=true&amp;v=media/rock_video.flv&amp;img=Untitled-6.png&amp;repeat=true&amp;btnIcon=#6CFF00&amp;playIcon=#6CFF00&amp;controlsBgAlpha=0.9&amp;bgGradient1=#000000&amp;bgGradient2=#101010" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="always" />
					<object id="player" type="application/x-shockwave-flash" data="videoplayer.swf" width="450" height="300">
						<param name="movie" value="videoplayer.swf" />
						<param name="quality" value="best" />
						<param name="bgcolor" value="#000000" />
						<param name="play" value="true" />
						<param name="loop" value="true" />
						<param name="allowFullScreen" value="true" />
						<param name="flashvars" value="autoplay=true&amp;v=media/rock_video.flv&amp;img=Untitled-6.png&amp;repeat=true&amp;btnIcon=#6CFF00&amp;playIcon=#6CFF00&amp;controlsBgAlpha=0.9&amp;bgGradient1=#000000&amp;bgGradient2=#101010" />
						<param name="wmode" value="transparent" />
						<param name="scale" value="tofit" />
						<param name="menu" value="true" />
						<param name="devicefont" value="false" />
						<param name="salign" value="" />
						<param name="allowScriptAccess" value="always" />
					</object>
				</object>
			</div>
			<div id="flashvideo2holder"></div>	
			<div id="HomeGalleryDetailsContainer">
				<!-- Item 1 -->	
				<div class="newsdiv">
					<!--a class="eurasiapdf" href="#" onclick="TINY.box.show({url:'viewerpdf.html',width:1028,height:450})"><img  style="border:0px"src="images2/eurasiapdf.png" height="100%" width="80%"/></a-->
					<!--a class="eurasiapdf" href="viewerpdf.html" target="_blank"><img  src="images2/eurasiapdf.png" height="100%" width="80%"/></a-->
				</div>
			</div><!-- Home Left Column Ends -->

				<!-- Home Right Column Begins -->
		</div>
		<div id="HomeColumn2">
			<div id="HomeGalleryNavigation"> 
					
					<br /><br />
			</div>
			<div id="HomeGallery">
				<div id="Detail">
					<div id="DetailHeader"></div>
					<div id="DetailCopy">
						<span class="style1" style="display: block; margin: 0px auto; text-align: center;">
							NeuroMama 
						</span>
						<br/><br />
						June 19..... NeuroMama, Ltd. .... your company will start trading on NASDAQ BB with the stock symbol "NERO"
						<br/><br />
						July 19.... 200th day of the year.
						<br/><br />
						On this 200th day NeuroMama.com will open its first Las Vegas Vacation Club in Fashion Show Mall.
						<br/><br />
						On this 200th day NeuroMama and EURASIA will announce its $1 Billion dollar Joint Marketing Agreement.
						<br/><br />
						On this 200th day of the year will be announced the Las Vegas location of the largest in the world EURASIA LIVE ENTERTAINMENT HOTEL CASINO MEGA RESORT.
						<br/><br />
						On this 200th day of the year will be announced the location of the World Largest "Las Vegas Dream Mall"
						<br/><br />
						On this 200th day of the year will be announced the location of the World Largest "Las Vegas Dream Convention Center" with the World Tallest Ferris Wheel along with all 7 replicas of Wonders of the Ancient World.  
						<br/><br />
						On July 19th NeuroMama.com will launch its Live Entertainment Fundraising Marathon that will take 6 days - 144 hours of continuous live entertainment. 
						<br/><br />
						During this 144 hours performers from around the world will perform, and those performances will be broadcasted on television around the world and streamed live on NeuroMama.com
						<br/><br />
						During this 144 hours NeuroMama.com will raise $1 Billion dollars to fund its philanthropic initiatives.
						<br/><br />
						On July 19th. NeuroMama.com will launch this fundraising event with the most incredible Cirque Style Production in Fashion Show Mall in Las Vegas and St. Petersburg, Russia.
						<br/><br />
						From Kim Kardashian to the present and the former Governor of Nevada will attend.
						<br/><br />
						All politicians of Las Vegas from the former Mayor of Las Vegas to the present Mayor will attend.
						<br/><br />
						There at Fashion Show Mall you'll see the legendary cast of Saturday Night Live..... And the cast of the new "Live from Las Vegas" will be there.
						<br/><br />
						On July 19th the simila magnitude of politicians and celebrities will attend special performance "NeuroMama" in "Licedei Theather" in St. Petersburg, Russia.
						<br/><br />
						This is the sample of productions of Leonid Leikin the former star of Cirque De Soleil and Anatoliy Myagkostoupv, the father of Vladislav Myagkoustoupov the current star of Cirque De Soleil and  the President and CEO of Global Live Entertainment, Ltd.,'s Aces of Acts with 54 of Global Fortune 500 companies among its 250 clients.
					</div>
				</div>
			</div>
			<div id="TwitterFeedHeader"></div>
			<div id="TwitterFeedContainer" style="width: 380px;  padding: 0px 0px 10px 70px; height: 87px; ">
			<!-- <a title="Live the M life" rel="lightbox[southchapel]" href="/peelad/interior_popup.swf?width=252&amp;height=525"><img src="images/home/Mlife-Banner.jpg" width="300" height="87" border="0" style="margin: 0px; float: left;"/></a> -->
			</div>
			<div class="HomePageRule"></div>
			<!-- Twitter Feed -->
			<!--div id="TwitterFeedContainer"><img src="images/btn-Twitter-on.jpg">
				<span id="lblDisplayTweet_LblTweet"> 
					<p>#FF #GlobalLtd @MarginInvestors @PennyStock @AcesOfACTS </p>
				</span>
			</div-->
			<!-- /Twitter Feed -->	
			<div class="HomePageRule"><img src="images/spacer_002.gif" alt="lol" height="1" width="470"></div>
			<!-- Facebook Feed -->
			<div id="TwitterFeedContainer"></div>
			<!-- /Facebook Feed -->
			<div class="HomePageRule"></div>
			<div id="TwitterFeedViewAllNews" style="float: right;"></div>
		</div><!-- /Twitter Feed -->	
		<!-- Home Right Column Ends -->
		<div id="SpacerDiv" style="height: 2px; width: 710px;"></div>
	</div>
</div>
		<div id="flashvideoholder2"></div>
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
									<img src="images/footer/btn-corporate-links-off.jpg" alt="Corporate Links" id="corporatebtn" class="img-swap"onmouseover="this.src='images/footer/btn-corporate-links-on1.jpg'" onmouseout="this.src='images/footer/btn-corporate-links-off.jpg'" height="24" width="150">
									</a>
								</div>		
							</div>	
						</div>
						
					</div>
					<div id="PropertyLinks1" >
						<div style="width: 150px; height:24px; position:relative;">
							<div id="CorporateContainer1">
								<div id="CorporateInner1">
									<a href="#" onclick="pauseVideo();TINY.box.show({url:'media/v1.html',width:720,height:480})">VIDEO 1</a><br>
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
		
	</body>
</html>