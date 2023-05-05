<?php @include 'config.php';
 ?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data

    $id = $_POST['id'];
    $name = $_POST['name'];
    $nrx = $_POST['nrx'];
    

    // Call update_item function
    if (!update_item($name, $nrx, $conn,$id)) {
        echo "Error updating item";    }  
}
function update_item($name, $nrx, $conn,$id)
{
    echo 'fun';
    // Prepare SQL statement to update item in database
    $sql = "UPDATE `lacost` SET `name`='$name',`nrx`='$nrx' where `id`= '$id' ";

    // Execute SQL statement
    if (mysqli_query($conn, $sql)) {
        return true; // Item updated successfully
    }  
}