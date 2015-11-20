<html>
<head>
<style>
.secondary {
    display:none;
}
#chart_div {
    width:350px;
    height:150px;
    display:block;
    color: #fff;
    font-weight: bold;
}
.div0 {background-color:#800000;}
.div1 {background-color:#000088;}
</style>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script>
function drawPieChart(i) {
    $('.secondary').html('<div id="chart_div" class="div'+i+'">my graph '+(i+1)+' in fancybox</div>');
}

function showChart(i) {
    drawPieChart(i);
}

function showChartByEmpId(i) {
    showChart(i);
}
jQuery(function ($) {
    $(".doPiechart").each(function (i) {
        $(this).on("click", function () {
            showChartByEmpId(i);
            $.fancybox("#chart_div");
        }); // on click
    }); // each
});
</script>

</head>
<body>

<button class="doPiechart">pie chart 1</button>
<button class="doPiechart">pie chart 2</button>
<div class="secondary"></div>
<div id="results"></div>

</body>
</html>