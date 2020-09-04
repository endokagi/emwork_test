<!doctype html>
<html lang="en">

<head>
    <title>Add Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="col">
        <?php
        $date = date('Y-m-d');
        echo '<form action="" method="post">';
        echo '<div class="form-group">';
        echo   '<label>ชื่อโครงการ</label>';
        echo  '<input class="form-control" id="exampleFormControlTextarea1" rows="3"></input>';
        echo   '</div>';
        echo    '<div class="form-group">';
        echo           '<label>รายละเอียดโครงการ</label>';
        echo          '<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>';
        echo     '</div>';
        echo     '<div class="form-group">';
        echo        '<div class="dropdown">';
        echo            '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
        echo             'ประเภท';
        echo           '</button>';
        echo            '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
        echo            '<a class="dropdown-item">001</a>';
        echo               '<a class="dropdown-item">002</a>';
        echo            '<a class="dropdown-item">003</a>';
        echo         '</div>';
        echo       '</div>';
        echo     '</div>';
        echo      '<div class="form-group">';
        echo          '<div class="dropdown">';
        echo             '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
        echo             'จังหวัด';
        echo        '</button>';
        echo        '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
        echo           '<a class="dropdown-item">ภูเก็ต</a>';
        echo           '<a class="dropdown-item">กรุงเทพฯ</a>';
        echo            '<a class="dropdown-item">เชียงใหม่</a>';
        echo         '</div>';
        echo     '</div>';
        echo   '</div>';
        echo   '<div class="form-group">';
        echo           '<label>เริ่มต้น</label>&nbsp';
        echo           '<input type="date" name="date1">';
        echo    '</div>';
        echo   '<div class="form-group">';
        echo           '<label>สิ้นสุด</label>&nbsp';
        echo           '<input type="date" name="date1">';
        echo    '</div>';
        echo   '<div class="input-group">';
        echo     '<div class="input-group-prepend">';
        echo         '<div class="input-group-text">';
        echo           '<input type="radio" name="select">&nbspมี';
        echo        '</div>';
        echo     '</div>';
        echo      '<div class="input-group-prepend">';
        echo         '<div class="input-group-text">';
        echo             '<input type="radio" name="select">&nbspไม่มี';
        echo          '</div>';
        echo     '</div>';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label>งบสนับสนุนอื่น</label>';
        echo '<input class="form-control" id="exampleFormControlTextarea1" rows="3"></input>';
        echo '</div>';
        echo '<button type="submit" class="btn btn-primary">Submit</button>';
        echo '<button type="button" class="btn btn-secondary"><a href="index.php" style="color:black">Back</a></button>';
        echo '</form>';
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>