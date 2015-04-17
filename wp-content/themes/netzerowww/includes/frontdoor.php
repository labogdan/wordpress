<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ng-showDevices.js"></script>

<style>
a      {
       color:#fff;
}
a:focus, a:hover {
    color: #ff8f12;
}
.white {
       color:#fff;
}
.height288    {
       height:288px;
}
.height400    {
       height:400px;
}
.width1175    {
       width:1175px;
}
.font12White{font-size:12px;font-family : nexa_bookregular;font-weight:normal !important;color:#ffffff !important;text-decoration:none;}
 
#v2navbar     {
       padding-top:40px;
       background-color:#242121;
       border-radius: 0 !important;
       -moz-border-radius: 0 !important;
}
#small-topnav.navbar {
       margin-bottom: 0px;
}
#textbar1     {
       background-color:#2e2925;
       height:200px;
       padding-top:30px;
}
#textbar2     {
       background-image: url("/wp-includes/images/NetZero/byod_bkgrnd.jpg");
       height:360px;
       padding-top:30px;
}
#emailDiv     {
       background-image: url("/wp-includes/images/NetZero/email_bkgrnd.jpg");
       height:320px;
       margin-top:30px;
}
#EmailSubmit  {
       margin-top: -52px;
}
#mapDiv       {
       background-image: url("/wp-includes/images/NetZero/map-drop.jpg");
       height:320px;
}
#MoreTime     {
       padding-top:60px;
}
#peachprice   {
       padding-top:60px;
       font-wight:bold;
       font-size: 44px;
      
}
.glyphicon {
    font-size: 34px;
    color:#ff8f12;
    margin-bottom: 5px;
    margin-top: 8px;
}
.glyphicon-menu-right      {
       font-size: 16px;
       color:#5adbc8;
}
.fLeft {
  float:left;
}
.fRight {
  float : right;
}
.5adbc8       {
       background-color:#5adbc8;
}
.ff6a4d       {
       color:#ff6a4d;
}
.41424a       {
       background-color:#41424a;
}
.ff8f12       {
       color:#ff8f12;
}
.unlmtd       {
       font-wight:bold;
       font-size:1.286em;  
       padding-top:70px;
}
.faq   {
       font-size:2.929em;
       color:#cc5400;
}
.faqbold      {
       font-size:1.143em;
       font-weight:bold;
}
.faqhiddencopy      {
       padding-left:20px;
}
.learnbtn-info {
       background-image: linear-gradient(to bottom, #5adbc8 0px, #5adbc8 100%);
       background-repeat: repeat-x;
       color: #fff;
}   
.mTop50       {
       margin-top:50px;
       }
#planscontainer      {
       margin-top:45px;
}     
#plansbox1, #plansbox2, #plansbox3, #plansbox4  {
       float:left;  
       padding:15px;
}     
#plansbox2    {
       height: 430px;
}
#plansbox1    {
       margin-left: -10px;
}
#innerleft    {
       padding-right:20px;
       width:400px;
       display:block;
       height:100%;
}     
#innerright   {
       margin-right:20px;
       width:600px;
       display:block;
}
.planboxmiddle       {
       width: 270px;
       border-left: 2px solid #c24d01;
       border-right: 2px solid #c24d01;
}
.planboxtop   {
       height:72px;
       width:270px;
       background-color:#2e2925;
       text-align:center;
       color:#fff;
       padding-top:5px;
}     
#addtocartbox {
       height:70px;
       background-color:#c24d01;
       border-radius: 0px 0px 5px 5px;
       width:270px;
       color: #fff;
       font-wight:bold;
       font-size:18px;
       padding-top:25px;
}
.godiv, .submitdiv   {
       color: #fff;
       font-weight:bold;
       border-radius: 0px 5px 5px 0px;
       background-color:#ff9016;
       font-size: 24px;
}
.submitdiv    {
       font-size: 18px;
}
.vcenter {
    display: inline-block;
    vertical-align: middle;
    float: none;
}
#frame2       {
       height:500px;
}
#accordion.paneldesign {
     border: none;
}
 
.panel, .paneldesign, .panel-group .panel-heading+.panel-collapse>.panel-body{
    border: none;
}
.paneldesign  {
       width:460px;
       background-color:#ffffff; 
       border: 0px;
}
 
.paneldesign-default > .paneldesign-heading {
       color: #41424a;
}
.panel-body   {
       border: 0px;
}
#left-accordian      {
       //height:500px;
}
#social       {
       vertical-align:text-bottom;
       padding-top:120px;
}

	.deviceName {
		font-weight : bold;
		font-size : 1.5rem;
		text-transform: uppercase;
		margin-top : 20px;
	}
	
	.deviceText {
		font-size : 1.2rem;
		margin-top : 10px;
	}
	
	.specialPrice {
		color : #ff8f12;
		font-size : 2.2rem;
	}
	
	.originalPrice {
	}
	
	.devicePrice {
		margin-top : 30px;
	}
	
	.buttonWrapper {
		margin-top : 20px;
	}

	.fleft {
		float : left;
	}
	
	.btn-primary {
		background : #c14d00;
		text-transform: uppercase;
		border : 2px #d47134 solid;
	}
	
</style>

<div data-ng-app="deviceList">

	<div ng-controller="FetchController">
                
		<div>{{loading == false? 'all data loaded!':'loading...'}}</div>
                	




<div class="row" id="v2navbar">  
    <div class="col-md-2 col-md-offset-2"><img src="/wp-includes/images/NetZero/logo_header.png" border="0" /></div>
           <div id="small-topnav" class="navbar">
           <div class="navbar-inner col-md-offset-6">
           <ul class="nav navbar-nav">
                  <li><a href="#"><strong>PHONES</strong></a></li>
                  <li><a href="#"><strong>PLANS</strong></a></li>
                  <li><a href="#"><strong>COVERAGE</strong></a></li>
                  <li><a href="#">ACCOUNT</a></li>
                  <li><a href="#">SUPPORT</a></li>
                 
           </ul>
           <div class="5adbc8 active"><span class="glyphicon glyphicon-shopping-cart 5adbc8"> </span></div>
           </div>
    </div>
</div>
<div class="row">
       <div class="hero-unit">   
           <div id="myCarousel" class="carousel slide">
           <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
           </ol>
           <!-- Carousel items -->
           <div class="carousel-inner">
                  <div class="active item"><img src="/wp-includes/images/NetZero/tile_01_bkgrnd.jpg" />
                     <div class="carousel-caption">
                     <h3>DON'T LIMIT YOURSELF</h3>
                     <p>Go Ahead. Talk, text and surf all you want. With our affordable unlimited plans, you can do it all - with no contracts or hidden fees. </p>
                           </div>
                  </div>
                  <div class="item"><img src="/wp-includes/images/NetZero/tile_02_bkgrnd.jpg" />
                     <div class="carousel-caption">
                     <h3>DON'T LIMIT YOURSELF</h3>
                     <p>Go Ahead. Talk, text and surf all you want. With our affordable unlimited plans, you can do it all - with no contracts or hidden fees. </p>
                           </div>
                  </div>
                  <div class="item"><img src="/wp-includes/images/NetZero/tile_01_bkgrnd.jpg" />
                     <div class="carousel-caption">
                     <h3>DON'T LIMIT YOURSELF</h3>
                     <p>Go Ahead. Talk, text and surf all you want. With our affordable unlimited plans, you can do it all - with no contracts or hidden fees. </p>
                           </div>
                  </div>
           </div>
           <!-- Carousel nav -->
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
           <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
           </div>       
       </div>
</div> 
    
<div class="row">
    <div id="textbar1" class="white">
       <div class="ff8f12"><h1 class="text-center">THE RIGHT PHONE FOR YOU</h1></div>
       <div><p class="text-center small">Simple or Smart, we've got a phone to fit your needs and your budget.</p></div>
    </div>
    <div><p class="text-center"><img src="/wp-includes/images/NetZero/down-point2e2925.png" /></p></div>              
</div>
 

		<div class="row" ng-repeat="devices in data" ng-show="$index === 0">
			
			<div class="col-md-offset-2 col-md-9">
				<div class="row">
					<div class="col-md-5 margin-small" ng-repeat-start="device in devices | orderBy: 'displayOrder'" style="margin-bottom: 70px;">
						<div class="row">
							<div class="col-xs-4"><img src='/wp-includes/images/NetZero/{{device.offerId}}.png' class='m-top-10 img-responsive'>{{device.offerId}}</div>
							<div class="col-xs-8">
								<div class="deviceName" ng-bind-html="device.shortName | to_trusted"></div>
								
								<div class="deviceText">
									This fun, affordable smartphone packed with great features.
								</div>
								
								<div class="devicePrice">
									<div class="fleft specialPrice">{{device.specialPrice == 0.0?'FREE':'$' + device.specialPrice}}</div>
									<div class="fleft originalPrice">${{device.price}}</div>
								</div>
								<br clear="all"/>
								<div class="buttonWrapper">
									<button type="button" class="btn btn-primary">add to cart</button>
									Learn More >
								</div>
								 
							</div>
						</div>
					</div>
					<div ng-if="$index %2 != 0" class="clearfix"></div>
					<div ng-repeat-end ng-if="$index %2 === 0" class="col-md-1"></div>
				</div>
			</div>
			
		</div>


 
<div class="row mTop50">
    <div id="textbar2" class="white mTop50">
       <div class=""><h1 class="text-center">ALREADY HAVE THE PERFECT DEVICE?</h1></div>
       <div><p class="text-center small">We can port your current phone to service in a snap!</p></div>
    </div>          
</div>
      
<div class="row">
    <div id="textbar1" class="white">
       <div class="ff8f12"><h1 class="text-center">THE SIMPLE CHOICE</h1></div>
       <div><p class="text-center small">Flexible, no contract plans with no hidden taxes or fees.</p></div>
    </div>
    <div><p class="text-center"><img src="/wp-includes/images/NetZero/down-point2e2925.png" /></p></div>              
</div>
 
<!-- Plans Row -->
<div class="row">   
       <div id="planscontainer" class="text-center col-md-offset-1">
              <div class="row">
                     <div class="col-md-3" id="plansbox1">
                            <div class="planboxtop vcenter"><h2>BASIC</h2></div>
                           <div class="height288 text-center">
                                  <div class="unlmtd">UNLIMITED</div>
                                  <div><h6>minutes, text messages, and data</h6></div>                
                                  <div id="peachprice" class="ff6a4d">$25</div>
                            </div>
                            <div id="addtocartbox" class="text-center">ADD TO CART</div>
                     </div>
                     <div class="col-md-3" id="plansbox2">
                            <div class="planboxtop vcenter"><h2>PRO</h2></div>
                           <div class="planboxmiddle height288 text-center">
                                  <div class="unlmtd">UNLIMITED</div>
                                  <div><h6>minutes, text messages, and data</h6></div>                
                                  <div id="peachprice" class="ff6a4d">$40</div>
                            </div>
                            <div id="addtocartbox" class="text-center">ADD TO CART</div>
                     </div>
                     <div class="col-md-3" id="plansbox3">
                            <div class="planboxtop vcenter"><h2>PLATINUM</h2></div>
                           <div class=" height288 text-center">
                                  <div class="unlmtd">UNLIMITED</div>
                                  <div><h6>minutes, text messages, and data</h6></div>                
                                  <div id="peachprice" class="ff6a4d">$55</div>
                            </div>
                            <div id="addtocartbox" class="text-center">ADD TO CART</div>
                     </div>              
                     <div class="col-md-3" id="plansbox4">
                            <div class="planboxtop vcenter"><h2>TALK + TEXT</h2></div>
                           <div class="height288 text-center">
                                  <div class="unlmtd">UNLIMITED</div>
                                  <div><h6>minutes, text messages, and data</h6></div>                
                                  <div id="peachprice" class="ff6a4d">$8</div>
                            </div>
                            <div id="addtocartbox" class="text-center">ADD TO CART</div>
                     </div> 
              </div>
       </div>
       <!-- End of Plans Row -->
</div>
<div style="clear:both"></div>
 
<div class="row">   
    <div id="textbar1" class="white mTop50">
       <div class="ff8f12"><h1 class="text-center">COVERAGE YOU CAN COUNT ON</h1></div>
       <div><p class="text-center small">Reliable nationwide talk, text and data, wherever you go.</p></div>
    </div>
</div>
<div style="clear:both"></div>   
    
<div class="row">
    <div class="41424a" style="height:40px;background-color:#41424a;"><p class="text-center"><img src="/wp-includes/images/NetZero/down-point2e2925.png" /></p></div>  
    <div style="background-color:#41424a; color:#fff; height:140px;" class="text-center">
              <div class="fLeft col-md-4 col-md-offset-2">
                     <div class="input-group" style="width:500px;">
                        <input type="text" class="form-control" style="height:68px;" placeholder="Enter Zip Code or Street Address">
                        <span class="input-group-btn">
                             <button class="godiv btn" style="width:70px;height:68px;" type="button">GO</button>
                        </span>
                     </div>
              </div>
              <div class="" style="padding-top:30px;padding-left:-20px;">           
                  <label class="checkbox-inline">
                    <input type="checkbox" value="4GLTE" style="color: green;background-color: green;">4G LTE
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="3GVoice">3G & Voice
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="Voice">Voice
                  </label>          
              </div>
       </div>
</div>
<div style="clear:both"></div>
 
<div class="row">
    <section id="">
              <div id="mapDiv" class="q">
              <!-- <iframe id="frame2" src="http://netzero.cellmaps.com?titlecolor=white&statecolor=white&citycolor=rgb(255,51,51)" allowTransparency="true" frameborder="0" width="1170" height="500" marginheight="0" marginwidth="0" scrolling="no" ></iframe> -->              
              </div>
       </section>
</div>
<div class="row mTop50">
       <div class="col-md-8 col-md-offset-2 faq">Frequently Asked Questions</div>
</div>
<div class="row">
       <div id="left-accordian" class="fLeft">
           <div class="col-md-offset-3 col-md-2 panel-group paneldesign" id="accordion">
               <div class="panel paneldesign-default paneldesign">
                   <div class="panel-heading paneldesign-heading">
                       <h4 class="panel-title" style="line-height: 0.8;">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. What is HTML?</a>
                       </h4>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse">
                       <div class="panel-body">
                           <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                       </div>
                   </div>
               </div>
               <div class="panel paneldesign-default paneldesign">
                   <div class="panel-heading paneldesign-heading">
                       <h4 class="panel-title" style="line-height: 0.8;">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. What is Bootstrap?</a>
                       </h4>
                   </div>
                   <div id="collapseTwo" class="panel-collapse collapse">
                       <div class="panel-body">
                           <p>Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                       </div>
                   </div>
               </div>
               <div class="panel paneldesign-default paneldesign">
                   <div class="panel-heading paneldesign-heading">
                       <h4 class="panel-title" style="line-height: 0.8;">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. What is CSS?</a>
                       </h4>
                   </div>
                   <div id="collapseThree" class="panel-collapse collapse">
                       <div class="panel-body">
                           <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                       </div>
                   </div>
               </div>
               <div class="panel paneldesign-default paneldesign">
                   <div class="panel-heading paneldesign-heading">
                       <h4 class="panel-title" style="line-height: 0.8;">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">What is CSS?</a>
                       </h4>
                   </div>
                   <div id="collapseFour" class="panel-collapse collapse">
                       <div class="panel-body">
                           <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                       </div>
                   </div>
               </div>       
           </div>
       </div>
       <div id="right-accordian" class="col-md-offset-6">
           <div class="panel-group paneldesign" id="accordion2">
               <div class="panel paneldesign-default paneldesign">
                   <div class="panel-heading paneldesign-heading">
                       <h4 class="panel-title" style="line-height: 0.8;">
                           <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">5. What is HTML?</a>
                       </h4>
                   </div>
                   <div id="collapseFive" class="panel-collapse collapse">
                       <div class="panel-body">
                           <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                       </div>
                   </div>
               </div>
               <div class="panel paneldesign-default paneldesign">
                   <div class="panel-heading paneldesign-heading">
                       <h4 class="panel-title" style="line-height: 0.8;">
                           <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">6. What is Bootstrap?</a>
                       </h4>
                   </div>
                   <div id="collapseSix" class="panel-collapse collapse">
                       <div class="panel-body">
                           <p>Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                       </div>
                   </div>
               </div>
               <div class="panel paneldesign-default paneldesign">
                   <div class="panel-heading paneldesign-heading">
                       <h4 class="panel-title" style="line-height: 0.8;">
                           <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven">7. What is CSS?</a>
                       </h4>
                   </div>
                   <div id="collapseSeven" class="panel-collapse collapse">
                       <div class="panel-body">
                           <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                       </div>
                   </div>
               </div>
               <div class="panel paneldesign-default paneldesign">
                   <div class="panel-heading paneldesign-heading">
                       <h4 class="panel-title" style="line-height: 0.8;">
                           <a data-toggle="collapse" data-parent="#accordion2" href="#collapseEight">8. What is CSS?</a>
                       </h4>
                   </div>
                   <div id="collapseEight" class="panel-collapse collapse">
                       <div class="panel-body">
                           <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                       </div>
                   </div>
               </div>       
           </div>
       </div>
</div>
<div style="clear:both"></div>
 
<div class="row">
    <section id="">
              <div id="emailDiv" class="q">
              <!-- <iframe id="frame2" src="http://netzero.cellmaps.com?titlecolor=white&statecolor=white&citycolor=rgb(255,51,51)" allowTransparency="true" frameborder="0" width="1170" height="500" marginheight="0" marginwidth="0" scrolling="no" ></iframe> -->              
                  <div id="MoreTime" class="col-md-offset-2 fLeft">
                         <div class=""><h1 class="">Need More Time?</h1></div>
                     <div><p class="small">Blah Blab Lorem Ipsum Blah Blab Lorem Ipsum<br> Lorem Ipsum Blah Blab Lorem Ipsum Lorem Ipsum Blah Blab Lorem Ipsum</p></div>
                  </div>
                  <div style="clear:both"></div>
              <div id="EmailSubmit" class="col-md-4 col-md-offset-6">
                           <div class="input-group" style="width:500px;">
                              <input type="text" class="form-control" style="height:40px;" placeholder="Enter your email address">
                              <span class="input-group-btn">
                                   <button class="submitdiv btn" style="width:170px;height:40px;" type="button">SUBMIT</button>
                              </span>
                           </div>
                     </div>
              </div>
       </section>
</div>
<div class="row">
       <div id="textbar1" class="white">
              <div class="fLeft col-md-offset-3">
                     <div class="fLeft" style="width:130px;padding:50px 0px 0px 0px;">                       
                           <div><a class="font12White" href="http://my.stg2.netzero.net" target="_blank">My NetZero</a></div>
                           <div><a class="font12White" href="http://account.stg2.netzero.net/s/account" target="_blank">My Account</a></div>
                           <div><a class="font12White" href="http://account.stg2.netzero.net/s/landing" target="_blank">Our Services</a></div>
                           <div><a class="font12White" href="http://www.unitedonline.net/advertisers.html" target="_blank">Advertisers</a></div>
                           <div><script>document.write('<'+'a '+'class="font12White"'+'h'+'r'+'e'+'f'+'='+'"ht'+'tp://'+'www.stg2.netzero.net'+
                                  '/start/'+'landi'+'ng.do?pa'+'ge=w'+'ww/leg'+'al/pri'+'vacy"'+' tar'+'get="_bl'+
                                  'ank">Priv'+'acy Policy</a>');</script></div>                
                     </div>
                     <div class="fLeft" style="width:130px;padding:50px 0px 0px 0px;">
                           <div><script>document.write('<'+'a '+'class="font12White"'+'h'+'r'+'e'+'f'+'='+'"ht'+'tp://'+'www.stg2.netzero.net'+
                                                       '/start/'+'landi'+'ng.do?pa'+'ge=w'+'ww/leg'+'al/cali'+'forniapri'+'vacyri'+'ghts"'+' tar'+'get="_bl'+
                                                       'ank">You'+'r Priv'+'acy Rig'+'hts</a>');</script></div>
             
                           <div><script>document.write('<'+'a '+'class="font12White"'+'h'+'r'+'e'+'f'+'='+'"ht'+'tp://'+'www.stg2.netzero.net'+
                                  '/start/'+'landi'+'ng.do?pa'+'ge=w'+'ww/leg'+'al/privacy#III"'+' tar'+'get="_bl'+
                                  'ank">About'+' Ads'+'</a>');</script></div>
             
                           <div><script>document.write('<'+'a '+'class="font12White"'+'h'+'r'+'e'+'f'+'='+'"ht'+'tp://'+'www.stg2.netzero.net'+
                                  '/start/'+'landi'+'ng.do?pa'+'ge=w'+'ww/leg'+'al/terms"'+' tar'+'get="_bl'+
                                  'ank">Te'+'rms of Se'+'rvice</a>');</script></div>           
                           <div style="border-right:0px;"><a class="font12White" href="http://www.untd.com/netzero" target="_blank">Press Center</a></div>
                     </div>
              </div>
              <div class="fLeft font12White col-md-offset-1" style="padding-top:100px;">
                     <img src="/wp-includes/images/NetZero/logo_footer.png" /><br>
                     <span style="font-family: verdana;">&copy;</span>&nbsp;2015&nbsp;NetZero, Inc.
              </div>
              <div id="social" class="col-md-offset-10">
                     Follow Us<br>
                     <a href="">F</a> <a href="">T</a>
              </div>
             
       </div>






              
        <hr />
              
              <div style="height:25px; overflow: hidden;" onclick="$(this).css('height','auto');">
              <pre>http status code: {{status}}</pre>
                <pre>http response data: {{data}}</pre>
              

		<hr />
			
			
			 <ol ng-repeat="devices in data">
              	<li ng-repeat="device in devices">
              		<ul>
              			<div ng-repeat="attr in device">{{attr}}</div>
              		</ul>
              	</li>
              </ol>
             </div> 
	</div> <!-- /controller -->
             
       
</div> <!-- /app -->
