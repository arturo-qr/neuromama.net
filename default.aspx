﻿<%@ Page Title="Eurasia Las Vegas" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

<BR/><BR/>
<BR/><BR/>
<BR/><BR/>
<div id="PageContainerOuter">
	<div id="PageContainer">
		<!-- Home Left Column Begins -->
		<div id="HomeColumn1">
			<div id="flashvideo2">
				<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="450" height="300" >
					<param name="movie" value="videoplayer.swf" />
					<param name="quality" value="best" />
					<param name="bgcolor" value="#000000" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="transparent" />
					<param name="scale" value="tofit" />
					<param name="allowFullScreen" value="true" />
					<param name="flashvars" value="autoplay=true&amp;v=&amp;img=Untitled-6.png&amp;repeat=true&amp;btnIcon=#6CFF00&amp;playIcon=#6CFF00&amp;controlsBgAlpha=0.9&amp;bgGradient1=#000000&amp;bgGradient2=#101010" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="always" />
					<object type="application/x-shockwave-flash" data="videoplayer.swf" width="450" height="300">
						<param name="movie" value="videoplayer.swf" />
						<param name="quality" value="best" />
						<param name="bgcolor" value="#000000" />
						<param name="play" value="true" />
						<param name="loop" value="true" />
						<param name="allowFullScreen" value="true" />
						<param name="flashvars" value="autoplay=true&amp;v=&amp;img=Untitled-6.png&amp;repeat=true&amp;btnIcon=#6CFF00&amp;playIcon=#6CFF00&amp;controlsBgAlpha=0.9&amp;bgGradient1=#000000&amp;bgGradient2=#101010" />
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
					<center></center> 
					<br /><br />
			</div>
			<div id="HomeGallery">
				<div id="Detail">
					<div id="DetailHeader"></div>
					<div id="DetailCopy">
						<span class="style1" style="display: block; margin: 0px auto; text-align: center;">
							Neuromama 
						</span>
						<br/><br />
					
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
			<div class="HomePageRule"><img src="images/spacer_002.gif" height="1" width="470"></div>
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
</asp:Content>

