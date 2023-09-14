<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ex1</title>
</head>
<body>
    <?php
        #first function
        function calSalary()
        {
            $month = 12*65000;
            echo "This is my Salary ".$month." Baht";
        }

        #calling function
        calSalary();
    ?>
</body>
</html>