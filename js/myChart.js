$(document).ready(function(){
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//NOT USED
	// Click to convert specified sum to specified currency  
	/*
	$(document).on("click", '.addButton', function() {   // this  click  is  used  to   react  to  newly generated cicles;
	    addRow(); //runs ajax request to get all JSON curr List
		
	}); 
	*/
	
	
	
	// Get Form values + Run Chart  
	$(document).on("click", '#getFormSerialize', function() {   // this  click  is  used  to   react  to  newly generated cicles;
	    getFormValuesToArray_andRunChart(); //
		//drawChart();
		
	}); 
	
	

	
	
	// onClick adding new fields to Form
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	
	
	    //e.preventDefault();
		var max_fields      = 19;  //maximum fields to add
        var wrapper         = $("#formN");  // Div id to which append new fields
        var add_button      = $(".add_form_field"); //button to click to trigger adding new fields

        var x = 1;
		
		//Decribe the Field sample to append/add
		var boxN = '<div><div class="form-group selector-for-scroll">' +
		           '<label for="sum">&nbsp;Text&nbsp;</label><input type="text"  class="form-control">' + 
				   '</div>' + 
				   '<div class="form-group">' + 
				   '<label for="sum"> &nbsp; Number&nbsp;</label><input type="number" class="form-control">'+ 
				   '<a href="#" class="delete">Delete</a>' + 
				   '</div></div><br>';
				  
		//click add button
        $(".add_form_field").click(function(e){ 
            e.preventDefault();
            if(x < max_fields){
                x++;
                //$(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
				//$(wrapper).append(boxN); //adds input field box->WORKKS
				
				//adds input field box with animation
				$(wrapper).stop().fadeOut(/* "slow" */ 200,function(){ $(this).append(boxN)}).fadeIn(500);
				
				if(screen.width <= 640){  //in mobile only
				    //scroll down to last added / appended fields div
				    scrollResults(".selector-for-scroll:last");  
				}

				        
            }
      else
      {
      alert('You Reached the limits')
      }
        });
        
		//delete the field
        $(wrapper).on("click",".delete", function(e){
            e.preventDefault(); 
			
			//$(this).parent().parent('div').remove(); 
			$(this).parents(':eq(1)').remove();  // delete parent div 2 levels up
			x--;
			
			if(screen.width <= 640){  //in mobile only
			    //scroll down to last added / appended fields div
			    scrollResults(".selector-for-scroll:last"); 
			}
        })
	
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// Function that gets values from form and pass them to two arrays
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	
	function getFormValuesToArray_andRunChart()
	{
		var arrayText = [];  //array will content text inputs
		var arrayNumb = [];
		
		// Works, getting all input values
		var inputs = $(".form-control");  //contains all inputs [text, number, text, number], to put text and numbers to diffrent array, use {if (i % 2 == 0){}
		for(var i = 0; i < inputs.length; i++){
            //alert( $(inputs[i]).val() );
			if (i % 2 == 0){  
			    arrayText.push( $(inputs[i]).val() ); //adds to array Text odd array elem
			} else {
				arrayNumb.push($(inputs[i]).val() ); //adds to array Numbers non-odd array elem
			}
        }
		//
		
		//alert("Text-> " + arrayText);
		
		
        /*
		//var collection = document.getElementById("formN").elements;
		var myForm = document.getElementById("formN");
        //Extract Each Element Value
        for (var i = 0; i < myForm.elements.length; i++) {
            alert(myForm.elements[i].value);
        }
		alert(JSON.stringify(myForm , null, 4));
		
		//$("p").append(" <b>Appended text</b>."); 
		 var str = $("formN").serialize();
        */
		  
		  //draw chart
		  drawChart(arrayText, arrayNumb);
		  
		  //scroll to chart
	      scrollResults("#popChart");

	}
	
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	// 
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	
	function drawChart(arrayText, arrayNumb)
	{
		var barChart;
	    var popCanvas = $("#popChart"); //gets the html canvas
		
		/*
		if (typeof barChart !== 'undefined') {
			alert("ex");
			delete barChart;
         }
		 */
	
	      barChart = new Chart(popCanvas, {
            type:  $("#chartType").val() , // value from SELECT // 'bar',
            data: {
                labels: arrayText,//["China", "India", "United States", "Indonesia", "Brazil", "Pakistan", "Nigeria", "Bangladesh"],
                datasets: [{
                    label: 'Your chart',
                    data:  arrayNumb,//[1379302771, 1281935911, 326625791, 260580739, 207353391, 204924861, 190632261, 157826578],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)'
                    ]
              }]
            }
      });
	   
	}
	
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	
		
	
	
	
	
	
	
	
	
	
	
	
	
	// Scroll the page to results  #resultFinal
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	function scrollResults(divName) 
	{
		 
         $('html, body').animate({  
            scrollTop: $(divName).offset().top
			//scrollTop: $('.footer').offset().top
            //scrollTop: $('.your-class').offset().top
        }, 'slow'); 
		// END Scroll the page to results
	}
	
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	
	
	
	
	
	
	function scroll_toTop() 
	{
	    $("html, body").animate({ scrollTop: 0 }, "slow");	
	}
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	
	
	
	
	
	
	
});
// end ready	
	