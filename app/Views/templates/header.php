<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGLaundry Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Sidebar Styling */
        #sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #1d3557;
            color: white;
            overflow: hidden;
            transition: width 0.3s ease, transform 0.3s ease;
            z-index: 999;
        }

        #sidebar.collapsed {
            width: 80px;
        }

        #sidebar h4 {
            font-size: 1.6rem;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            border-bottom: 1px solid #457b9d;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        #sidebar.collapsed h4 {
            opacity: 0;
            transform: translateX(-20px);
        }

        #sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #sidebar ul li {
            padding: 12px 20px;
        }

        #sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1rem;
            transition: all 0.2s ease-in-out;
        }

        #sidebar ul li a:hover {
            background-color: #457b9d;
            border-radius: 5px;
        }

        /* Main Content */
        #main-content {
            margin-left: 250px;
            transition: margin-left 0.3s ease-in-out;
        }

        #main-content.collapsed {
            margin-left: 80px;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            z-index: 998;
        }

        .navbar .search-bar {
            margin-left: auto;
            margin-right: 15px;
            max-width: 400px;
        }

        .navbar .dropdown img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 50%;
        }

        .navbar .btn-outline-secondary:hover {
            background-color: #457b9d;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #sidebar {
                width: 0;
                transform: translateX(-100%);
            }

            #sidebar.collapsed {
                width: 0;
            }

            #main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
