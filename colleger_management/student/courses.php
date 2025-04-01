<?php
require '../includes/auth.php';
if (!isLoggedIn() || $_SESSION['user']['role'] != 'student') {
    header("Location: ../login.php");
    exit();
}

// Get enrolled courses
$stmt = $pdo->prepare("
    SELECT c.course_code, c.course_name 
    FROM enrollments e
    JOIN courses c ON e.course_id = c.id
    WHERE e.student_id = ?
");
$stmt->execute([$_SESSION['user']['student_id']]);
$courses = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Courses</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    
    <div class="container">
        <h2>My Courses</h2>
        
        <table>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
            </tr>
            <?php foreach ($courses as $course): ?>
            <tr>
                <td><?= $course['course_code'] ?></td>
                <td><?= $course['course_name'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <a href="dashboard.php">Back to Dashboard</a>
    </div>
    
    <?php include '../includes/footer.php'; ?>
</body>
</html>