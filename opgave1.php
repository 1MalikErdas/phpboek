<!DOCTYPE html>
<html lang="nl">

    <head>
        <title>Hello world</title>
    </head>
<body>
    <h1>
        <?php
            $today=date( format: "l d F Y.");
            echo "Het is vandaag: $today <br>";
            $DateOfTheYear=date(format: "z");
            echo "Vandaag is het de $DateOfTheYear dag van het jaar. <br>";
            $day=date(format: "l");
            $dayNumber=date(format: "w");
            echo "$day is de $dayNumber van de week. <br>";
            $month=date(format: "F");
            $monthDays=date(format: "t");
            echo "De maand $month heeft in totaal $monthDays dagen.";
        ?>
    </h1>
</body>
</html>