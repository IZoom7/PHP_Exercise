<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="insertstsuccess.php">
        <p>

            <label for="st_id ">รหัสนักแสดง</label>
            <input type="text" name="st_id" id="st_id">

        </p>

        <p>

            <label for="st_firstname">ชื่อ</label>

            <input type="text" name="st_firstname" id="st_firstname">

        </p>

        <p>

            <label for="st_lastname">นามสกุล</label>

            <input type="text" name="st_lastname" id="st_lastname">

        </p>

        <p>

            <label for="st_gender">เพศ</label>

            <input type="text" name="st_gender" id="st_gender">

        </p>

        <p>

            <label for="st_age">อายุ</label>

            <input type="text" name="st_age" id="st_age">

        </p>

        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>