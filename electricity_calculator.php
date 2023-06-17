<!DOCTYPE html>
<html>
<head>
    <title>Electricity Consumption Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Electricity Consumption Calculator</h1>
        <form method="POST">
            <div class="form-group">
                <label for="voltage">Voltage (V)</label>
                <input type="number" step="0.01" class="form-control" id="voltage" name="voltage" required>
            </div>
            <div class="form-group">
                <label for="current">Current (A)</label>
                <input type="number" step="0.01" class="form-control" id="current" name="current" required>
            </div>
            <div class="form-group">
                <label for="rate">Current Rate</label>
                <input type="number" step="0.01" class="form-control" id="rate" name="rate" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
        <hr>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $voltage = $_POST["voltage"];
            $current = $_POST["current"];
            $rate = $_POST["rate"];
            
            $power = $voltage * $current;
            $energy = $power * 1 * 1000; // Assuming 1 hour
            $totalCharge = $energy * ($rate / 100);

            echo "<h3>Calculation Results:</h3>";
            echo "<p>Power: " . $power . " Watts</p>";
            echo "<p>Energy: " . $energy . " Watt/hours</p>";
            echo "<p>Total Charge: RM" . $totalCharge . "</p>";
        }
        ?>
    </div>
</body>
</html>