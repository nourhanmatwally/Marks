<?php
if ($_POST) {
    $first_no = $_POST["first_no"];
    $second_no = $_POST["second_no"];
    $third_no = $_POST["third_no"];
    $forth_no = $_POST["forth_no"];
    $fifth_no = $_POST["fifth_no"];
    $grade = $_POST["grade"];

    if (isset($grade)) [$first_no, $second_no, $third_no, $forth_no, $fifth_no];
    $grade = (($first_no + $second_no + $third_no + $forth_no + $fifth_no) / 500) * 100; {
        $msg = "$grade";
    }
    if (($grade >= '90%')) {
        $msg = "$grade A ";
    } elseif (($grade >= '70%')) {
        $msg = "$grade C ";
    } elseif (($grade >= '60%')) {
        $msg = "$grade D";
    } elseif (($grade >= '40%')) {
        $msg = "$grade E ";
    } elseif (($grade < '40%')) {
        $msg = "$grade F ";
    }
}

?>
<!-- Percentage >= 80%: Grade B
Percentage >= 70%: Grade C
Percentage >= 60%: Grade D
Percentage >= 40%: Grade E
Percentage < 40%: Grade F  -->
<!doctype html>
<html lang="en">

<head>
    <title>Marks</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center">Enter a grade:</h1>
    <form method="post" style="text-align: center">
        <h5 style="text-align: center">Physics:</h5>
        <input type="text" name="first_no">
        <br>
        <br>
        <h5 style="text-align: center">Chemistry:</h5>
        <input type="text" name="second_no">
        <br>
        <br>
        <h5 style="text-align: center">Biology:</h5>
        <input type="text" name="third_no">
        <br>
        <br>
        <h5 style="text-align: center">Mathematics:</h5>
        <input type="text" name="forth_no">
        <br>
        <br>
        <h5 style="text-align: center">Computer:</h5>
        <input type="text" name="fifth_no">
        <br>
        <br>
        <input type="submit" name="submit">
        <br>
        <br>
        <h5 style="text-align: center">result:</h5>
        <input type="text" name="grade" value="<?php echo (isset($msg) ? $msg : '') ?>">
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

