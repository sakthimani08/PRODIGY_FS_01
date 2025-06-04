<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            height: 100%; width: 100%;
            background: rgba(255, 255, 255, 0.88);
            z-index: 0;
        }

        .sidebar {
            position: relative;
            z-index: 2;
            width: 240px;
            background: #0d6efd;
            color: white;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            height: 100vh;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .sidebar h2 {
            font-size: 22px;
            margin-bottom: 40px;
            text-align: center;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 10px 0;
            padding: 12px 15px;
            border-radius: 10px;
            font-size: 16px;
            display: flex;
            align-items: center;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .sidebar a i {
            margin-right: 10px;
            font-size: 18px;
        }

        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
            padding: 40px;
        }

        .container {
            background: white;
            padding: 40px 50px;
            border-radius: 25px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
            text-align: center;
            animation: slideFade 0.7s ease forwards;
            max-width: 500px;
            width: 100%;
        }

        @keyframes slideFade {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #222;
        }

        .role-badge {
            display: inline-block;
            background: #0d6efd;
            color: white;
            padding: 6px 14px;
            font-size: 13px;
            border-radius: 14px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .welcome-icon {
            font-size: 48px;
            color: #0d6efd;
            margin-bottom: 15px;
            animation: pulse 1.5s infinite ease-in-out;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        a.logout-btn {
            display: inline-block;
            margin-top: 25px;
            background: #e63946;
            color: white;
            text-decoration: none;
            padding: 12px 26px;
            font-size: 15px;
            border-radius: 10px;
            font-weight: bold;
            transition: transform 0.3s, background 0.3s;
        }

        a.logout-btn:hover {
            background: #c82333;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2><i class="fas fa-user-circle"></i> Dashboard</h2>
        <a href="#"><i class="fas fa-home"></i> Home</a>
        <a href="#"><i class="fas fa-user"></i> Profile</a>
        <a href="#"><i class="fas fa-envelope"></i> Messages</a>
        <a href="#"><i class="fas fa-cog"></i> Settings</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="main-content">
        <div class="container">
            <div class="welcome-icon"><i class="fas fa-user-shield"></i></div>
            <span class="role-badge"><?= ucfirst($_SESSION['role']) ?> Panel</span>
            <h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
            <a href="logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>
</body>
</html>
