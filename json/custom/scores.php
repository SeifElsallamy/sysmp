<?php
//Seif Elsallamy
require("../../db.php");
if (isset($_GET["year"]) ){
$year = $_GET["year"];
$course_id = $_GET["course_id"];

$sql="SELECT students.code, students_score.course_id, students.name as 'Student name', students_score.score
FROM students_score
INNER JOIN students
ON students_score.code = students.code
WHERE year = '$year' AND course_id='$course_id';
";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

	echo json_encode($data);
} else {
    echo "0 results";
}


$conn->close();
}
?>