<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Attendance</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Attendance Records</h2>

    <table class="table table-bordered mt-4">
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Shift</th>
            <th>Status</th>
            <th>Date</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM staff_attendance");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['staff_name']}</td>
                <td>{$row['designation']}</td>
                <td>{$row['shift']}</td>
                <td>{$row['status']}</td>
                <td>{$row['attendance_date']}</td>
            </tr>";
        }
        ?>
    </table>

    <a href="index.php" class="btn btn-secondary">Back</a>
</div>

</body>
</html>
