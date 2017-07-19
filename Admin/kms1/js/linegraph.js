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

	var year1 = getUrlVars()["year"];
	var radio1 = getUrlVars()["radio"];
	$.ajax({
		url : "http://localhost/KMS/KMS/Admin/kms1/followersdata.php",
		data:{
       //year: 2017,
      		 year:year1,
      		 radio:radio1,
       
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

			for(var i in data) {
				//userid.push("UserID " + data[i].userid);
				//facebook_follower.push(data[i].facebook);
				//twitter_follower.push(data[i].twitter);
				//googleplus_follower.push(data[i].googleplus);

				month.push(data[i].month);
				monthTotal.push(data[i].monthTotal);




			}

			var chartdata = {
				labels: month,
				datasets: [
				/*
					{
						label: "facebook",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: facebook_follower
					}
				*/

					{
						label: "restSales",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: monthTotal
					}

					
				]
			};

			var ctx = $("#mycanvas");

			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error : function(data) {

		}
	});
});