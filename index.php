<!DOCTYPE html>
  <html>
    <head>
      <title>Live chart</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  
	  <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="description" content="Онлайн конвертер валют" />  <!-- Currency exchange rate data and currency conversion-->
      <meta name="keywords" content="Currency calculator, exchange rate data and currency conversion">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/myChart.js"></script><!--  Core Currency JS-->  
	  <script src="js/changeStyleTheme.js"></script><!-- Theme changer JS-->  
	  <script src="library/Chart.min.js"></script><!-- JS Chart library-->  
	  
	  
	 
      <link rel="stylesheet" type="text/css" media="all" href="css/myChart.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Icon lib-->
	  
	    <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

  </head>
  <body>
  
  
  
  
  
  
  
  
  
  

  
  
   <div id="headX" class=" text-center myShadow colorAnimate head-style"> <!--#2ba6cb;-->
       
	   
         <h1 id="h1Text">
             <img id ="wLogo" class="shrink-large" src="">	 
		     <span id="textChange" class="textShadow"> Chart</span> 
			 <i class="	fa fa-briefcase" style="font-size:59px"></i> 
		     
			 <img id ="wLogo2" src="" style="width:44%;"/>
			 <br>
			 
			 
		 </h1> 
		   
           <!--<p class="header_p">All cities weather processor</p>-->  <!--generates random lists, ramdomizes integers, etc--> <!--<span class="glyphicon glyphicon-duplicate"></span>-->  
	   </div>
	   
	 



         <br>
		 <!--<div class="item contact padding-top-0 padding-bottom-0" id="contact1">-->
         <div class="wrapper grey">
    	     <div class="container">
		   
		   
		   
		         <div class="col-sm-12 col-xs-12 myShadow mainX head-style" style="background-color:;" id="targerDiv">
				     <i class="	fa fa-dollar" style="font-size:40px"></i>&nbsp;&nbsp;<i class="fa fa-toggle-on" style="font-size:40px"></i>
				 
				 	<button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>

				 
			         <form class="form-inline" action="" id="formN">
					 
                          <div class="form-group">
                              <label for="sum">Text</label>
                              <input type="text"  class="form-control" id="" name="">
                          </div>
						  
                         <div class="form-group">
                              <label for="sum">Number</label>
                              <input type="number" min="1" value="1" class="form-control" id="" name="">
                         </div>
						 
						 <button class="btn addButton" id="addButton"><i class="fa fa-plus"></i> More</button>
						  
					      <br><br><br>
                          <input id ="getFormSerialize" type="button" class="btn btn-default " style="font-size:20px" value="OK">
						  <br><br><br>
                      </form>
				   
			     </div> <!--END  <div class="col-sm-4 col-xs-12 myShadow mainX-->
				
				
				
				
				  
				  
				  <!-- Canvas for Chart.js Library-->
				  <canvas id="popChart" width="600" height="400"></canvas>

				  
				 

		 
				                 
     
    	     </div><!-- /.container -->			  		
    	 </div><!-- /.wrapper -->
      <!--</div>-->   <!-- /.item -->
	  
	     <div style="height:277px;"></div><!-- just to press footer-->
                

       
		<!---------PAGE LOADER SPINNER START, visible while the page is loading, uses js/main_layout.js, css is in yii2_mine.css--------------->
	    <div id="overlay" class="col-sm-12 col-xs-12 myShadow">
		    <center>
		        <img src="images/spinner.gif" alt="" style="width:33%;"/>
			</center>
        </div>
        <!---------END PAGE LOADER SPINNER------------------------------------------------------------------------------------------------------>
	
	
	
		
		
		  <!-----Footer ---->
		        
				<div class="footer "> <!--navbar-fixed-bottom  fixxes bootom problem-->
				    <!--Contact: --> <strong>dimmm931@gmail.com</strong><br>
					<?php  echo date("Y"); ?>
				</div>
		<!--END Footer ---->  
		
		
		
	
		
		
  
  
  
  
  
  
  
  
  
       <!-----------------  Button to change Style theme------------------------->
	   <input type="button" class="btn" value=">>" id="changeStyle" style="position:absolute;top:0px;left:0px;" title="click to change theme"/>
	   <!-----------------  Button to change Style theme------------------------->
  
      
	   <!-----------------  Button with info------------------------------------>
	   <!--data-toggle="modal" data-target="#myModalZ" is a Bootstrap trigger---->
	   <button data-toggle="modal" data-target="#myModalZ" class="btn" style="font-size:17px; position:absolute;top:0px;right:0px;" title="click to see info">
	       &nbsp;<i class="fa fa-info-circle"></i>&nbsp;
	   </button>    
	   <!-----------------  Button with info------------------------------------>
  
  
  
  
  
  
      <!-----------------  Modal window with info------------------------------>
      <div id="myModalZ" class="modal fade" role="dialog">
          <div class="modal-dialog">
          <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">Chart </h4>
                  </div>
                  <div class="modal-body">
				      <center>
					  <p> Chart</p>
				      <img src="images/data.jpg" alt=""/>
					  </center>
                  </div>
                  <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>

         </div>
     </div>
      <!-----------------  END Modal window with info---------------------------->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
 <!----------------------- FB API  share---------------------->
 <center><br><br>
  
 <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<!--
  <div class="fb-share-button large" 
    data-href="=http://waze.zzz.com.ua/store_locator/" 
    data-layout="button_count">
  </div>
  -->
  <!----------------------- END FB API  share---------------------->

 <br>
 
 
 

 

</body>
</html>