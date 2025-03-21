<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $subject_count = $_POST['subject_count'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Grades</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Enter Grades</h2>
        <form action="result.php" method="POST">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="department" value="<?php echo $department; ?>">
            <input type="hidden" name="semester" value="<?php echo $semester; ?>">
            <input type="hidden" name="subject_count" value="<?php echo $subject_count; ?>">

            <?php for ($i = 1; $i <= $subject_count; $i++) { ?>
                <label>Subject <?php echo $i; ?>:</label>
                <select name="grade[]">
                    <option value="10">O (90-100)</option>
                    <option value="9">A+ (80-90)</option>
                    <option value="8">A (70-80)</option>
                    <option value="7">B+ (60-70)</option>
                    <option value="6">C (50-60)</option>
                    <option value="0">RA (Fail)</option>
                </select>
            <?php } ?>
            <button type="submit">Calculate CGPA</button>
        </form>
    </div>
</body>
</html>
