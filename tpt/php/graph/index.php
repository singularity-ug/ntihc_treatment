<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Graph</title>

    </head>
    <script src="js/jquery.js" type="text/javascript"></script>


    <script type="application/javascript" src="js/awesomechart.js"> </script>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php
mysql_select_db('product',mysql_connect('localhost','root',''))or die(mysql_error());
?>
  
<body>
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="hero-unit-table">
                            <div class="charts_container">
                                <div class="chart_container">
                                    <div class="alert alert-info">Different Motorcycles with Quantity</div>  
                                    <canvas id="motorcycle_graph" width="1100" height="400">
                                        Your web-browser does not support the HTML 5 canvas element.
                                    </canvas>
                                </div>
                            </div>
						</div>




<script type="application/javascript">
    var motorcycle_chart = new AwesomeChart('motorcycle_graph');
    motorcycle_chart.data = [
    <?php
    $query = mysql_query("select * from product") or die(mysql_error());
    while ($row = mysql_fetch_array($query)) {
        ?>
        <?php echo $row['Qty'] . ','; ?>	
    <?php }; ?>
    ];

    motorcycle_chart.labels = [
    <?php
    $query = mysql_query("select * from product") or die(mysql_error());
    while ($row = mysql_fetch_array($query)) {
        ?>
        <?php echo "'" . $row['name'] . "'" . ','; ?>	
    <?php }; ?>
    ];
    motorcycle_chart.colors = ['gold', 'skyblue', '#FF6600', 'pink', 'darkblue', 'lightpink', 'green'];
    motorcycle_chart.randomColors = true;
    motorcycle_chart.animate = true;
    motorcycle_chart.animationFrames = 30;
    motorcycle_chart.draw();
</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



   
</body>
</html>


