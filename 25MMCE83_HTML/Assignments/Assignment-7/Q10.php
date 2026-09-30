<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>
</head>
<body>

    <h1>Course Registration Form</h1>

    <?php

    $courses = array(
        "PHP" => 3000,
        "Java" => 4000,
        "Python" => 3500,
        "Web Development" => 3000,
        "Cloud Computing" => 5000
    );

    $semesters = array(
        "Semester 1",
        "Semester 2",
        "Semester 3",
        "Semester 4"
    );

    ?>

    <form method="post" action="">

        <label>Student Name:</label>
        <input type="text" name="student_name" required>

        <br><br>

        <label>Course:</label>

        <select name="course" required>

            <option value="">Select Course</option>

            <?php

            foreach($courses as $course => $fee){

                echo "<option value='".$course."'>".$course."</option>";

            }

            ?>

        </select>

        <br><br>

        <label>Semester:</label>

        <select name="semester" required>

            <option value="">Select Semester</option>

            <?php

            foreach($semesters as $semester){

                echo "<option value='".$semester."'>".$semester."</option>";

            }

            ?>

        </select>

        <br><br>

        <label>Mode of Study:</label>

        <select name="mode" required>

            <option value="">Select Mode</option>
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
            <option value="Hybrid">Hybrid</option>

        </select>

        <br><br>

        <input type="submit" name="register" value="Register">

    </form>

    <?php

    if(isset($_POST["register"])){

        $studentName = $_POST["student_name"];
        $course = $_POST["course"];
        $semester = $_POST["semester"];
        $mode = $_POST["mode"];

        $fee = $courses[$course];

        echo "<h2>Course Registration Details</h2>";

        echo "<p><b>Student Name:</b> ".$studentName."</p>";
        echo "<p><b>Course:</b> ".$course."</p>";
        echo "<p><b>Course Fee:</b> ₹".$fee."</p>";
        echo "<p><b>Semester:</b> ".$semester."</p>";
        echo "<p><b>Mode of Study:</b> ".$mode."</p>";

    }

    ?>

</body>
</html>