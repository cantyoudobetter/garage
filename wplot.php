<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://static.pureexample.com/js/flot/excanvas.min.js"></script>
<script src="http://static.pureexample.com/js/flot/jquery.flot.min.js"></script>
 
<!-- CSS -->
<style type="text/css">
#flotcontainer {
    width: 350px;
    height: 200px;
    text-align: center;
    margin: 0 auto;
}
</style>
 
 
<!-- Javascript -->
<script type="text/javascript">
 
$( document ).ready(function() {

	$.ajax({
            type: "GET",
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            url: 'wtget.php',
            error: function () {
                alert("An error occurred.");
            },
            success: function (data) {
                //alert("Success.");

                var dataset = [{ "label":"Temperature", "data":data}];

                var options = {
                    series: {
                        points: {
                            show: true
                        },
                        lines: {
                            show: true
                        }

                    },
	            xaxis: {
        	        mode: "time",
			twelveHourClock: true,
                	timeformat: "%0m/%0d %H %p"
            	    },
                    grid: {
	                backgroundColor: { colors: ["#B0D5FF", "#5CA8FF"] }
                    }
                };
//		var series = [{"label":"Scores","data":[[1999,3],[2000,3.9],[2001,2],[2002,1.2]]}];
                $.plot($("#flotcontainer"), dataset, options);
//                $.plot($("#flotcontainer"), series);
            }
        });

});
</script>
 
<!-- HTML -->
<div id="flotcontainer"></div>
