<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Thống kê</a></li>
            <li><a href="#">Cài đặt</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Welcome to Dashboard</h1>
        </header>

        <section class="stats">
            <div class="card">Tổng số bài viết:
                <?php
                $result = $conn->query("SELECT COUNT(*) AS total FROM posts");
                $row = $result->fetch_assoc();
                echo $row['total'];
                ?>
            </div>
            <div class="card">Tổng số người dùng:
                <?php
                $result = $conn->query("SELECT COUNT(*) AS total FROM users");
                $row = $result->fetch_assoc();
                echo $row['total'];
                ?>
            </div>
        </section>

        <section class="chart">
            <canvas id="myChart"></canvas>
        </section>
    </div>

    <script src="script.js"></script>
</body>

</html>