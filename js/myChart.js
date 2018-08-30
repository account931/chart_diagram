$(document).ready(function(){
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//NOT USED
	// Click to convert specified sum to specified currency  
	$(document).on("click", '.addButton', function() {   // this  click  is  used  to   react  to  newly generated cicles;
	    addRow(); //runs ajax request to get all JSON curr List
		
	}); 
	
	
	
	
	// Get Form values + Run Chart  
	$(document).on("click", '#getFormSerialize', function() {   // this  click  is  used  to   react  to  newly generated cicles;
	    serializeForm(); //
		//runChart();
		
	}); 
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	//NOT USED
	// Function that fires on ajax success of {myAjaxCurrencyRequest()} and forms the answer/constructs the answer
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	
	function serializeForm()
	{
		var arrayText = [];
		var arrayNumb = [];
		
		// Works, getting all input values
		var inputs = $(".form-control");  //contains all inputs [text, number, text, number], to put text and numbers to diffrent array, use {if (i % 2 == 0){}
		for(var i = 0; i < inputs.length; i++){
            //alert( $(inputs[i]).val() );
			if (i % 2 == 0){  
			    arrayText.push( $(inputs[i]).val() ); //adds to array Text
			} else {
				arrayNumb.push($(inputs[i]).val() ); //adds to array Numbers
			}
        }
		//
		
		alert("Text-> " + arrayText);
		
		
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
		  
		  
		  runChart(arrayText, arrayNumb);

	}
	
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	
	
	
	
	
	
	
	
	
	
	// adding new fields
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	
	
	    //e.preventDefault();
		var max_fields      = 19;
        var wrapper         = $("#formN");
        var add_button      = $(".add_form_field");

        var x = 1;
		
		var boxN = '<div><div class="form-group">' +
		           '<label for="sum">Text &nbsp; </label><input type="text"  class="form-control" id="" name="">' + 
				   '</div>' + 
				   '<div class="form-group">' + 
				   '<label for="sum">Number &nbsp; </label><input type="number" min="1" value="1" class="form-control" id="" name="">'+ 
				   '<a href="#" class="delete">Delete</a>' + 
				   '</div></div><br>';
				  
		
        $(".add_form_field").click(function(e){ 
            e.preventDefault();
            if(x < max_fields){
                x++;
                //$(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
				$(wrapper).append(boxN); //add input box

				        
            }
      else
      {
      alert('You Reached the limits')
      }
        });

        $(wrapper).on("click",".delete", function(e){
            e.preventDefault(); 
			
			//$(this).parent().parent('div').remove(); 
			$(this).parents(':eq(1)').remove(); 
			x--;
        })
	
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	
	
	
	
	
	
	
	
	
	
	
	
		
	// 
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	
	function runChart(arrayText, arrayNumb)
	{
	    var popCanvas = $("#popChart"); //gets the html canvas
	
	    var barChart = new Chart(popCanvas, {
            type: 'bar',
            data: {
            labels: arrayText,//["China", "India", "United States", "Indonesia", "Brazil", "Pakistan", "Nigeria", "Bangladesh"],
            datasets: [{
                label: 'Your built Chart',
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
	
		
	
	
});
// end ready	
	