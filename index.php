<!DOCTYPE html>
<html>
<head>
    <title>Staff Attendance</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Restaurant Staff Attendance</h2>

    <form action="save_attendance.php" method="POST" class="mt-4">

        <input type="text" name="staff_name" class="form-control mb-3" placeholder="Staff Name" required>

        <select name="designation" class="form-control mb-3" required>
            <option value="">Select Designation</option>
            <option>Chef</option>
            <option>Waiter</option>
            <option>Cashier</option>
            <option>Cleaner</option>
        </select>

        <select name="shift" class="form-control mb-3" required>
            <option value="">Select Shift</option>
            <option>Morning</option>
            <option>Evening</option>
        </select>

        <select name="status" class="form-control mb-3" required>
            <option value="">Attendance Status</option>
            <option>Present</option>
            <option>Absent</option>
        </select>

        <button type="submit" class="btn btn-success w-100">Submit Attendance</button>
    </form>

    <a href="view.php" class="btn btn-primary mt-3 w-100">View Attendance</a>
</div>

</body>
</html>
