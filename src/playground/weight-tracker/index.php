<html>
<head>
    <title>Weight Tracker</title>
    <link rel="stylesheet" type="text/css" href="weight-tracker.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
</head>
<body>
<?php
$username = "";
$password = "";
$hostname = "";
$database = "";

//connect to database
$dbhandle = mysqli_connect($hostname, $username, $password, $database)
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select database
$selected = mysqli_select_db($dbhandle, $database)
or die("Could not select database");

$order = "SELECT id, date, weight FROM weight_tracker ORDER BY Date ASC";

//execute query
$result = mysqli_query($dbhandle, $order);

//fetch data
while ($row = mysqli_fetch_array($result)) {
    $entry .= "['".$row['date']."',".$row['weight']."],";
}

//close the connection
mysqli_close($dbhandle);
?>

<div id="chart_div" style="width: 100%; height: 400px;"></div>

<form method="post" action="input.php">
    <fieldset>
        <label for="date">Date</label>
        <input type="datetime" id="date" name="date" class="form-text" required/>
        <p class="form-help">Enter date of entry in YYYY-MM-DD format.</p>
    </fieldset>

    <fieldset>
        <label for="weight">Weight</label>
        <input type="text" id="weight" name="weight" class="form-text" maxlength="6" size="6" required/>
        <p class="form-help">Enter weight on date of entry.</p>
    </fieldset>

    <fieldset>
        <label for="pin">Secret</label>
        <input type="text" id="pin" name="pin" class="form-text" required/>
        <p class="form-help">No hints here.</p>
    </fieldset>

    <div class="clearfix"></div>

    <fieldset class="form-actions">
        <input type="submit" value="Submit" />
    </fieldset>
</form>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Date', 'Weight'],
            <?php echo $entry ?>
        ]);

        var options = {
            title: 'Weight Tracker',
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#date").datepicker({ dateFormat: 'yy-mm-dd' });
    });
</script>

</body>
</html>