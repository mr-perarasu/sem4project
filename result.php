<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $subject_count = $_POST['subject_count'];
    $grades = $_POST['grade'];

    $totalPoints = array_sum($grades);
    $cgpa = $totalPoints / $subject_count;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>CGPA Result</h2>
        <table border="1">
            <tr>
                <th>Name</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Department</th>
                <td><?php echo $department; ?></td>
            </tr>
            <tr>
                <th>Semester</th>
                <td><?php echo $semester; ?></td>
            </tr>
            <tr>
                <th>CGPA</th>
                <td><?php echo number_format($cgpa, 2); ?></td>
            </tr>
        </table>
        <a href="index.html"><button>Calculate Again</button></a>
    </div>
</body>
</html>
