<?php
// Navigation configuration
$nav_items = [
    'Home' => 'index.php',
    'Scrap Rates' => 'scrap-rates.php',
    'Why Us?' => 'why-us.php',
    'Contact' => 'contact.php',
    'Login' => 'login.php'
];

$logo_path = 'images/logo.png'; // Update this path to your actual logo
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navigation Bar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .navbar.active {
            opacity: 1;
            visibility: visible;
        }



        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100px;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            margin-left: 60px;
        }

        .nav-logo img {
            height: 80px;
            width: auto;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            align-items: center;
        }

        .nav-item {
            margin: 0 15px;
            margin-left: 30px;
        }

        .nav-link {
            text-decoration: none;
            color: #333333;
            font-size: 18px;
            font-weight: 700;
            font-family: Arial, Helvetica, sans-serif;
            color: #5c705c;
            padding: 10px 0;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #269c26;;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #269c26;;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .login-btn {
            background-color: #269c26;
            color: white !important;
            padding: 8px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #269c26b4;
        }

        .login-btn::after {
            display: none;
        }

        /* Mobile Styles */
        .hamburger {
            display: none;
            cursor: pointer;
            background: none;
            border: none;
            padding: 5px;
            z-index: 1001;
        }

        .hamburger span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: #333;
            margin: 5px 0;
            transition: 0.3s;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 998;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        @media screen and (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .nav-menu {
                position: fixed;
                background-color: #dfecdf;
                right: -66.66%;
                top: 0;
                flex-direction: column;
                background-color: white;
                width: 66.66%;
                height: 100vh;
                text-align: left;
                transition: 0.4s ease;
                padding: 100px 30px 30px;
                z-index: 999;
                box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
            }

            .nav-menu.active {
                right: 0;
                background-color: #dfecdf;
            }

            .nav-item {
                margin: 5px 0;
                width: 100%;
            }

            .nav-link {
                display: block;
                text-align: left;
                font-size: 18px;
                border-bottom: 1px solid #f0f0f0;
                color: black;
            }

            .nav-link:hover {
                background-color: #f8f9fa;
            }

            /* Center the login button in mobile view */
            .nav-item:last-child {
                margin-top: 30px;
                text-align: center;
            }

            .nav-item:last-child .nav-link {
                text-align: center;
                border-bottom: none;
                display: inline-block;
                padding: 12px 30px;
            }

            .hamburger.active span:nth-child(1) {
                transform: rotate(-45deg) translate(-5px, 6px);
            }

            .hamburger.active span:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active span:nth-child(3) {
                transform: rotate(45deg) translate(-5px, -6px);
            }
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }

        p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .instructions {
            background: #e9f5ff;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
        }

        .instructions h2 {
            color: #0056b3;
            margin-bottom: 15px;
        }

        .instructions ol {
            margin-left: 20px;
        }

        .instructions li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <!-- Logo -->
            <div class="nav-logo">
                <a href="#">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>

            <!-- Navigation Menu -->
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Scrap Rates</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Why Us?</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link login-btn">Login</a>
                </li>
            </ul>

            <!-- Mobile Menu Button -->
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Overlay for mobile menu -->
    <div class="overlay" id="overlay"></div>
        
        <div class="instructions">
            <h2>How to Use</h2>
            <ol>
                <li>Resize your browser window to see the responsive behavior</li>
                <li>On mobile view, click the hamburger icon to open the menu</li>
                <li>Notice how the menu slides in from the right side</li>
                <li>See how the login button is centered at the bottom</li>
                <li>Click anywhere outside the menu or the hamburger icon to close it</li>
            </ol>
        </div>
    </div>

    <script>
        // Mobile menu toggle functionality
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');
        const overlay = document.getElementById('overlay');

        function toggleMenu() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
            overlay.classList.toggle('active');
            
            // Prevent body scrolling when menu is open
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        }

        hamburger.addEventListener('click', toggleMenu);
        
        // Close menu when clicking on overlay
        overlay.addEventListener('click', toggleMenu);
        
        // Close menu when clicking on a link (for navigation)
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                if (navMenu.classList.contains('active')) {
                    toggleMenu();
                }
            });
        });

        // Close menu when pressing Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                toggleMenu();
            }
        });
    </script>
</body>
</html>