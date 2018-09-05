Draw your custom Chart

1. Uses Library Chart.js to draw a chart
2. Uses Library Filesaver.js to download jpeg img

1. How to create a chart:
// create/initialize Object {new Chart} from Library {Chart.js}, which draws the chart
	      var barChart = new Chart(popCanvas, {
            type:  $("#chartType").val() , // value from SELECT // 'bar',
            data: {
                labels: arrayText,//["China", "India", "United States", "Indonesia", "Brazil", "Pakistan", "Nigeria", "Bangladesh"],
                datasets: [{
                    label: yourChartName , //'Your chart',
                    data:  arrayNumb,//[1379302771, 1281935911, 326625791, 260580739, 207353391, 204924861, 190632261, 157826578],......etc
					
					


2. How to save jpeg:
           //Using Filesaver Library
	       var canvas = document.getElementById("popChart"), ctx = canvas.getContext("2d");
           // draw to canvas...
           canvas.toBlob(function(blob) {
           saveAs(blob, "chartMine.jpeg");
           }); 