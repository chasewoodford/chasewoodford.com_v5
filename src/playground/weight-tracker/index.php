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

    // connect to database
    $dbhandle = mysqli_connect($hostname, $username, $password, $database)
    or die("Unable to connect to MySQL");
    echo "Connected to MySQL<br>";

    // select database
    $selected = mysqli_select_db($dbhandle, $database)
    or die("Could not select database");

    $order = "SELECT id, date, weight FROM weight_tracker ORDER BY Date ASC";

    // execute query
    $result = mysqli_query($dbhandle, $order);

    // fetch data
    while ($row = mysqli_fetch_array($result)) {
        $entry .= "['".$row['date']."',".$row['weight']."],";
    }

    // close the connection
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
        <input type="text" id="pin" name="pin" class="form-text" autocapitalize="off" required/>
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

		// Raw data
		const rawData = [
			<?php echo $entry ?>
		];

		// Convert strings to Date objects
		const parsedData = rawData.map(([dateStr, weight]) => {
			const [year, month, day] = dateStr.split('-').map(Number);
			const date = new Date(year, month - 1, day);
			const tooltip = `${date.toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric' })}: ${weight} lbs`;
			return [date, weight, tooltip];
		});

		// Sort by date
		parsedData.sort((a, b) => a[0] - b[0]);

		// Determine start and end date
		const startDate = new Date("2010-08-01");
		const endDate = new Date(parsedData[parsedData.length - 1][0]);
		endDate.setDate(1); // round to first of month

		// Build a full array with nulls for empty months
		const monthlyTimeline = [];
		let current = new Date(startDate);
		while (current <= endDate) {
			monthlyTimeline.push(new Date(current)); // clone date
			current.setMonth(current.getMonth() + 1);
		}

		// Combine null months and real data
		const fullData = [['Date', 'Weight', { type: 'string', role: 'tooltip' }]];

		let lastYear = parsedData[0][0].getFullYear();
		let lastMonth = parsedData[0][0].getMonth();

		// Push the first real data point
		fullData.push(parsedData[0]);

		for (let i = 1; i < parsedData.length; i++) {
			const [date, weight, tooltip] = parsedData[i];
			const year = date.getFullYear();
			const month = date.getMonth();

			// Fill in any skipped months with null data
			while (lastYear < year || (lastYear === year && lastMonth < month - 1)) {
				lastMonth++;
				if (lastMonth > 11) {
					lastMonth = 0;
					lastYear++;
				}
				const missingDate = new Date(lastYear, lastMonth, 1);
                const missingTooltip = month + ' ' + year + ': No data';
				fullData.push([missingDate, null, missingTooltip]);
			}

			fullData.push([date, weight, tooltip]);
			lastYear = year;
			lastMonth = month;
		}

		const data = google.visualization.arrayToDataTable(fullData);

		const options = {
			title: 'Weight Tracker',
			curveType: 'function',
			hAxis: {
				format: 'MMM yyyy',
				textStyle: {
					fontSize: 14,
				},
				minorGridlines: {
					color: 'none'
				},
				gridlines: {

					count: -1
				}
			},
			vAxis: {
				minorGridlines: {
					color: 'none'
				},
				textStyle: {
					fontSize: 14
				}
			},
			tooltip: {
				textStyle: {
					color: '#6c757d',
					fontSize: 14
				}
			},
			legend: {
				position: 'none'
			},
			interpolateNulls: false
		};

		const chart = new google.visualization.LineChart(document.getElementById('chart_div'));
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