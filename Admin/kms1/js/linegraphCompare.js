function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}








$(document).ready(function(){

	var year1 = getUrlVars()["year1"];
	var year2 = getUrlVars()["year2"];
	$.ajax({

		
		url : "http://localhost/KMS/KMS/Admin/kms1/yearCompareData.php",
		data:{
       //year: 2017,
      		 year1:year1,
      		 year2:year2,
       
   		},
		type : "GET",
		success : function(data){
			console.log(data);

			data = JSON.parse(data);
			var userid = [];
			var facebook_follower = [];
			var twitter_follower = [];
			var googleplus_follower = [];

			
			var month = [];
			var monthTotal = [];

			var year11 = [];
			var year22 = [];



			var i = 0;
			year111 = data[i].year;

			while (i < data.length) { 
				if(data[i].month == data[i+1].month){
					month.push(data[i].month);
					if(data[i].year == year111){
						year11.push(data[i].monthTotal);
						year22.push(data[i+1].monthTotal);
					}
					else{
						year22.push(data[i].monthTotal);
						year11.push(data[i+1].monthTotal);

					}
					i = i+2;

				}
				else{
					month.push(data[i].month);

					if(data[i].year = year1){
						year11.push(data[i].monthTotal);
						year22.push(0);
					}
					else{
						year22.push(data[i].monthTotal)	;
						year11.push(0);	

					}
					i++;

				}
    			 
   				 
			}

			var chartdata = {
				labels: month,
				datasets: [
				
					{
						label: year1,
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(29, 202, 255, 0.75)",
						borderColor: "rgba(29, 202, 255, 1)",
						pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
						pointHoverBorderColor: "rgba(29, 202, 255, 1)",
						data: year11
					},
					{
						label: year2,
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: year22
					}



					
				]
			};

			var ctx = $("#mycanvas1");

			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error : function(data) {

		}
	});
});