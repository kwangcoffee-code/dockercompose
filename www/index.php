<!DOCTYPE html>
<html>
<body>

<?php
echo "My first docker compose PHP script!";
?>

  <div class="container">

    <?php

    $conn = mysqli_connect('db', 'user', 'test', "myDb");


    $query = 'SELECT * From Person';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }

        echo '</tr>';
    }
    echo '</table>';

    $result->close();

    mysqli_close($conn);

    ?>
    </div>


</body>
</html