<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Day</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div>
    <div class='selectedDay bg-primary'>Today is: <span id='todayValue' class="todayValue"></span></div>
    
    <div class='bg-secondary flex' id="daysContainer">
        <?php
            $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
            $today = date("l");

            foreach ($days as $day) {
                $class = ($day == $today) ? 'green' : 'blue';
                echo "<div class='day $class' id='{$day}'>$day</div>";
            }
        ?>
    </div>
    
    <div class='selectedDay bg-primary'>Selected day is: <span id='selectedDayValue'></span></div>
</div>

<script src="script.js"></script>

</body>
</html>
