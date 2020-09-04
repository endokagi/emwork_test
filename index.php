<!doctype html>
<html lang="en">

<head>
    <title>Emwork_test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    $connect = mysqli_connect("localhost", "root", "", "emwork_test");
    $sql = 'SELECT p.Name, pt.Name, pv.Name, r.Name, p.StartData from project p inner join project_type pt on pt.ID = p.ID inner join province pv on pv.id = p.id inner join region r on r.id = p.id';
    $result = mysqli_query($connect, $sql);
    echo '<table class="table">';
    echo '<form action="edit_table.php" method="post" enctype="multipart/form-data">';
    
    echo '<th>ชื่อโครงการ</th><th>ประเภท</th><th>จังหวัด</th><th>ภาค</th><th>เริ่มต้น</th>';
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row[0] . '</td><a href="edit_table.php"></a>';
        echo '<td>' . $row[1] . '</td>';
        echo '<td>' . $row[2] . '</td>';
        echo '<td>' . $row[3] . '</td>';
        echo '<td>' . $row[4] . '</td>';
        echo '</tr>';
    }
    echo '</form>';
    echo '</table>';
    mysqli_close($connect);

    ?>
    <button type="button" class="btn btn-primary"><a href="add_table.php" style="color:red">Add</a></button>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>