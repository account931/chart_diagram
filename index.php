<!DOCTYPE html>
  <html>
    <head>
      <title>On-line chart</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  
	  
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="description" content="Create an on-line chart" />  <!-- Create an on-line chart-->
      <meta name="keywords" content="Create an on-line chart">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/myChart.js"></script><!--  Core Currency JS-->  
	  <script src="js/changeStyleTheme.js"></script><!-- Theme changer JS-->  
	  <script src="library/Chart_library/Chart.min.js"></script><!-- JS Chart library-->  
	  <script src="library/FileSaver_libary/FileSaver.js"></script><!-- JS FileSaver library-->
	  
	  
	 
      <link rel="stylesheet" type="text/css" media="all" href="css/myChart.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Icon lib-->
	  
	    <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

  </head>
  <body>
  
  
  
  
  
  
  
  
  
  

  
  
   <div id="headX" class=" text-center myShadow colorAnimate head-style"> <!--#2ba6cb;-->
       
	   
         <h1 id="h1Text">
             <img id ="wLogo" class="shrink-large" src="">	 
		     <span id="textChange" class="textShadow">On-line live Chart</span> 
			 &nbsp;
			 <i class="	fa fa-briefcase" style="font-size:59px"></i> <i class="fa fa-bar-chart-o" style="font-size:40px"></i>
		     
			<!-- <img id ="wLogo2" src="" style="width:44%;"/>-->
			 <br>
			 
			 
		 </h1> 
		   
           <!--<p class="header_p">All cities weather processor</p>-->  <!--generates random lists, ramdomizes integers, etc--> <!--<span class="glyphicon glyphicon-duplicate"></span>-->  
	   </div>
	   
	 



         <br>
		 <!--<div class="item contact padding-top-0 padding-bottom-0" id="contact1">-->
         <div class="wrapper grey">
    	     <div class="container">
		   
		   
		   
		         <div class="col-sm-12 col-xs-12 myShadow mainX head-style" style="background-color:;" id="targerDiv">
				     <i class="fa fa-bar-chart-o" style="font-size:40px"></i>&nbsp;&nbsp;<i class="fa fa-toggle-on" style="font-size:40px"></i>
					 Chart Title<br> <input type="text"   id="chartName" class="textBlack">
				 
				 	<!--<button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>-->
					
					
					

				     <!----------------------------------------- FORM ---------------------------------------------->
			         <form class="form-inline" action="" id="formN">
					 
					 <!--
                          <div class="form-group">
                              <label for="sum">&nbsp;Text</label>
                              <input type="text"  class="form-control">
                          </div>
					-->  
						 <!--Input fields, text, number--> 
					<!--
                         <div class="form-group">
                              <label for="sum">&nbsp;Number</label>
                              <input type="number" class="form-control">
                         </div><br>--><!-- br is a must to maintain symetri-->
					 	 
						 
						 
						 <!--<button class="btn addButton" id="addButton"><i class="fa fa-plus"></i> More</button>-->
						  
					      <br><!-- br is a must to maintain symetri-->
                          <!--<input id ="getFormSerialize" type="button" class="btn btn-default " style="font-size:20px" value="OK">-->
						  <!--<br><br><br>-->
                      </form>
					  
					 <!-- button to add fields, inputs--> 
					 <button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
					 <br><br><br>

					 
					 <!-- SELECT type of chart-->
					 <div class="form-group">
                         <label for="chartType">Type:</label>
                         <select class="form-control" id="chartType">
                             <option  value="bar" selected="selected">Bar</option>
                             <option  value="line">    Line     </option>
							 <option  value="pie">     Pie      </option> 
							 <option  value="doughnut">Doughnut </option>
							 <option  value="radar">Radar</option>  horizontalBar
							 <option  value="horizontalBar">HorizontalBar</option>
							 <!--<option  value="bubble">Bubble</option>-->
                         </select>
                     </div>


				     <!-- button to draw Chart--> 
				     <input id ="getFormSerialize" type="button" class="btn btn-default " style="font-size:20px" value="Draw Chart">

				   
			     </div> <!--END  <div class="col-sm-4 col-xs-12 myShadow mainX-->
				
				
				
				  <!-- Click to save Canvas chart to JPEG-->
				  <div class="col-sm-12 col-xs-12" id="jpegSaveButtonContainer"><!-- without this BS div it causes div horizontal overlap-->   
			      </div>
				  
				  
				  <!-- Canvas for Chart.js Library-->
				  <div class="col-sm-12 col-xs-12 myShadow" id="chartContainer"><!-- without this BS div it causes div horizontal overlap-->
				      <canvas id="popChart" style="width:;" height="200px"></canvas>
			      </div>

				  
				 

		 
				                 
     
    	     </div><!-- /.container -->			  		
    	 </div><!-- /.wrapper -->
      <!--</div>-->   <!-- /.item -->
	  
	     <div style="height:277px;width:90%;"></div><!-- just to press footer-->
                

       
		<!--------- PAGE LOADER SPINNER START, visible while the page is loading, uses js/main_layout.js, css is in yii2_mine.css --------------->
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
		
		
		
	
		
		
  
  
  
  
  
  
  
  
  
       <!-----------------  Button to change Style theme ------------------------->
	   <input type="button" class="btn" value=">>" id="changeStyle" style="position:absolute;top:0px;left:0px;" title="click to change theme"/>
	   <!-----------------  Button to change Style theme------------------------->
  
      
	   <!-----------------  Button with info------------------------------------>
	   <!-- data-toggle="modal" data-target="#myModalZ" is a Bootstrap trigger ---->
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
					  <h2> Chart</h2>
				      <img src="images/data.jpg" alt="" style="width:60%;"/>
					  <h3> How to draw your chart.</h3>
					  </center>
					  <p> 1.Select title of your chart .</p>
					  <p> 2.Click "Add new Fields" button to add up to 19 fields.</p>
					  <p> 3.Fill each field with text and number values.</p>
					  <p> 4.Select type of chart you would like to use.</p>
					  <p> 5.Click "Draw chart" button.</p>
					  <p> 6.If you need, you can save the chart as jpeg with "Save image" button.</p>
					  
                  </div>
                  <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>

         </div>
     </div>
      <!-----------------  END Modal window with info---------------------------->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
 <!----------------------- FB API  share---------------------->
 <br><br>
  
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