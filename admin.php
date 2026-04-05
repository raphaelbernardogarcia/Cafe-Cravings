<?php
    session_start();
    include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href = "Admin/admin-style.css" rel = "stylesheet">
    <title>Document</title>
</head>
<body>
    <a href = "index.php" class = "home">Home</a>
    <p class = "reminder">***NOTE PRICE CAN ONLY REACH UP TO ₱9999***</p>
        <table class = "content-table">
                <tr class = "table_head">
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Update</th>
                </tr>

            <?php
                $sql = "SELECT * FROM prices";
                $result = mysqli_query($con, $sql);
                $i = 1;
                //While Loop for table
                while ($row = mysqli_fetch_array($result)){
                    $pPrice = $row['productPrice'];
                    if (isset($_POST['update'.$i])){
                        $newPrice = $_POST['price'.$i];
                        $id = $row['id'];
                        $query = "UPDATE prices SET productPrice = '$newPrice' WHERE id = $id";
                        $var =mysqli_query($con, $query);
                        $pPrice = $newPrice;
                    }
                    echo "<tr>";
                            echo "<form method = 'POST'>";
                            echo "<td class = 'row_id'>".$row['id']."</td>";
                            echo "<td class = 'row_name'>".$row['productName']."</td>";
                            echo "<td class = 'row_price'><input type = 'number' name = 'price$i'  class = 'input_box' value = '$pPrice' max = '9999'></td>";
                            echo "<td class = 'updt'><input type = 'submit' name = 'update$i' value = 'Update' class = 'update_button'></td>";
                            echo "</form>";
                    echo "</tr>";
                    $i+=1;
                }
            ?>
        </table>

<script> 

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>