<?php 
session_start();

require_once('..\Init\config.php');



$sql="SELECT * FROM User u, Academic_Information, College, Approval";
$result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<br><b>Name                    :</b>", $row["First_Name"] . " " . $row["Last_Name"];
        echo "<br><b>Identification Number   :</b>", $row["IdentificationID"];
        echo "<br><b>Study Level             :</b>", $row["Study_Level"];
        echo "<br><b>Year                    :</b>", $row["Year"];
        echo "<br><b>Semester                :</b>", $row["Semester"];

        echo "<hr>";

        echo "<br><b>College Name            :</b>", $row["College_Name"];
        echo "<br><b>Building Number         :</b>", $row["Building_No"];
        echo "<br><b>Room Number             :</b>", $row["Room_No"];
        echo "<br><b>Approve by              :</b>", $row["ManagerID"];
    }
}
else
{
    echo "0 results";
}
