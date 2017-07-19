$('#year').hide();
$('#sentense').hide();

//$('#adv').change(ab);

$(document).ready(function() {
    $("#radio input:radio").change(function() {

    	//console.log('awa1');

        if (this.value == 'overroll') {
        	//console.log('awa2');
            $('#year').hide();
            $('#sentense').hide();


        }
        else if (this.value == 'year') {
            $('#year').show();
            $('#sentense').show();
            //console.log('awa3');

        }
        else if (this.value == 'foodtype') {
            $('#year').hide();
            $('#sentense').hide();
            //console.log('awa4');

        }
    });
});