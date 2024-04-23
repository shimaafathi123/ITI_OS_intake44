<?php

require_once './connect_pdo.php';

function create_users_table($pdo) {
    // // Drop the table if it exists
    // $drop_table_query = "DROP TABLE IF EXISTS users";
    // $pdo->exec($drop_table_query);

    // Create the table
    $create_table_query = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255),
        email VARCHAR(255),
        password VARCHAR(255),
        room_no INT,
        image VARCHAR(255)
      )";
$pdo->exec($create_table_query);
}

function get_all_data(){

    $pdo = connect_to_db_pdo();

    $query = "select * from users";
    $statement = $pdo->prepare($query);
    $res=$statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
   
}
function display_data(){
    try{
        $pdo = connect_to_db_pdo();
        if ($pdo){
            $columns = "id, name, email, room_no, image";
            $select_query = "SELECT $columns FROM users;";
            $stmt= $pdo->prepare($select_query);
            $res= $stmt->execute();
    
            if($res){
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                display_in_table($rows);
            }
        }
    } catch(Exception $e){
        echo "<h3 style='color:red'>{$e->getMessage()}</h3>";
    }
}


function display_in_table($rows){
    echo "<div class = 'container mt-3'>";

    echo "<table class='table'> <tr> <th>ID</th>  <th>Name</th>  <th>Email</th>
<th>Room NO.:</th> <th>Image</th>  <th>Actions</th> 
</tr>";
    # id --> first parameter in the row
    foreach ($rows as $row){
        $url_query_string = $row['id'];
        $delete_url = "delete_user.php?id={$url_query_string}";
        $edit_url = "edit_user.php?id={$url_query_string}";
        // var_dump($row);

        echo "<tr>";
        foreach ($row as $value){
            echo "<td>{$value}</td>";
        }
        echo "<td><a href='{$edit_url}' class='btn btn-warning'>Edit</a> |  <a href='{$delete_url}'  class='btn btn-danger'> Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div";

}


// function select_users($conn){

//     try{
//         $select_query = "select * from `php`.`users`";
//         $res = $conn->query($select_query);
//         $rows = $res->fetch_all();
//         display_in_table($rows);
//         $res->free();
//         $conn->close();

//     }catch (Exception $e){
//         echo "<h3 style='color: red'> {$e->getMessage()}</h3>";
//     }

// }



// function display_in_table($rows){
//     echo "<table class='table'> <tr> <th>ID</th>  <th>Name</th>  <th>Email</th>
//     <th>Grade</th>
//     </tr>";
//     foreach ($rows as $row){
//         echo "<tr>";
//         foreach ($row as $value){
//             echo "<td>{$value}</td>";
//         }
//         echo "</tr>";
//     }
//     echo "</table>";
// }




function generatetitle($title, $color)
{
    echo "<h1 style='color: {$color}'>{$title}</h1>";
}




