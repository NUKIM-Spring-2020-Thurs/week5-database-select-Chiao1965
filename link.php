<?php
ob_start();
session_start();

$link = mysqli_connect(
    'localhost', //mysql主機名稱
    'root', //使用者名稱
    'password', //密碼
    'php2020' //預設使用的資料庫名稱
);


$SQL = "SELECT * FROM employee";

if ($result = mysqli_query($link,$SQL)){
    
    echo "<table border = '1'>";
    echo "<tr>";
    while( $fieldname = mysqli_fetch_field($result) ){ 
        echo "<th bgcolor='#78c0a8'>".$fieldname->name."</th>"; 
    }
    echo "</tr>";

    while($row = mysqli_fetch_assoc($result)){
        echo "<td>".$row['No']."</td>";
        echo "<td>".$row['Fname']."</td>";
        echo "<td>".$row['Minit']."</td>";
        echo "<td>".$row['Lname']."</td>";
        echo "<td>".$row['Bdate']."</td>";
        echo "<td>".$row['Address']."</td>";
        echo "<td>".$row['Sex']."</td>";
        echo "<td>".$row['Salary']."</td>";
        echo "<tr>";
    }
    echo "</table>";
}

?>