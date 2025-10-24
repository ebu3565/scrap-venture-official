<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Footer with Green Theme</title>
    <style>
        :root {
            --primary-color: #269c26;
            --secondary-color: #1e7c1e;
            --accent-color: #34c234;
            --light-color: #ecf0f1;
            --dark-color: #1a531a;
            --text-color: #333;
            --text-light: #7f8c8d;
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: #f9f9f9;
        }

        
        .footer {
            background: linear-gradient(135deg, var(--dark-color) 0%, var(--primary-color) 100%);
            color: var(--light-color);
            padding: 60px 0 30px;
            position: relative;
            overflow: hidden;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 40px;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        
        .footer-section {
            flex: 1;
            min-width: 250px;
        }
        
        .footer-logo {
            max-width: 260px;
        }
        
        .footer-section h3 {
            color: var(--light-color);
            margin-bottom: 20px;
            font-size: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--accent-color);
            border-radius: 2px;
        }
        
        .footer-section p {
            margin: 12px 0;
            line-height: 1.7;
            color: #bdc3c7;
        }
        
        .address-info {
            margin-top: 20px;
        }
        
        .address-info p {
            display: flex;
            align-items: flex-start;
        }
        
        .address-info i {
            margin-right: 10px;
            color: var(--accent-color);
            margin-top: 4px;
        }
        
        .contact-info p {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }
        
        .contact-info i {
            margin-right: 12px;
            color: var(--accent-color);
            width: 20px;
            text-align: center;
        }
        
        .social-icons {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            color: var(--light-color);
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }
        
        .social-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--accent-color);
            border-radius: 50%;
            transform: scale(0);
            transition: var(--transition);
            z-index: -1;
        }
        
        .social-icon:hover::before {
            transform: scale(1);
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .social-icon.facebook:hover::before {
            background: #3b5998;
        }
        
        .social-icon.instagram:hover::before {
            background: #e4405f;
        }
        
        .social-icon.linkedin:hover::before {
            background: #0077b5;
        }
        
        .social-icon.twitter:hover::before {
            background: #1da1f2;
        }
        
        .quick-links {
            list-style: none;
        }
        
        .quick-links li {
            margin-bottom: 12px;
            position: relative;
            padding-left: 0;
            transition: var(--transition);
        }
        
        .quick-links li::before {
            content: '▸';
            position: absolute;
            left: 0;
            color: var(--accent-color);
            transition: var(--transition);
        }
        
        .quick-links li:hover {
            padding-left: 15px;
        }
        
        .quick-links li:hover::before {
            color: var(--light-color);
        }
        
        .quick-links a {
            color: #bdc3c7;
            text-decoration: none;
            transition: var(--transition);
            display: block;
            padding: 0px 0 0px 15px;
        }
        
        .quick-links a:hover {
            color: var(--light-color);
        }
        
        
        
        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                gap: 40px;
            }
            
            .footer-section {
                text-align: center;
            }
            
            .footer-section h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .contact-info p, .address-info p {
                justify-content: center;
            }
            
            .social-icons {
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .footer {
                padding: 40px 0 20px;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <footer class="footer">
        <div class="footer-container">
            <!-- Section 1: Logo and Address -->
            <div class="footer-section">
                <img src="assets/images/logo.png" alt="Company Logo" class="footer-logo">
                <p>We are committed to providing the best scrap management solutions for a sustainable future.</p>
                
                <div class="address-info">
                    <p>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>House #123, Road #12, Mirpur DOHS<br>Dhaka – 1216, Bangladesh</span>
                    </p>
                </div>
            </div>

            <!-- Section 2: Contact Us and Social Media -->
            <div class="footer-section">
                <h3>Contact Us</h3>
                <div class="contact-info">
                    <p>
                        <i class="fas fa-phone"></i>
                        <span>+8801XXXXXXXXX</span>
                    </p>
                    <p>
                        <i class="fas fa-envelope"></i>
                        <span>support@scrapventure.com</span>
                    </p>
                    <p>
                        <i class="fas fa-clock"></i>
                        <span>Customer Support: 10am – 7pm</span>
                    </p>
                </div>
                
                <div class="social-icons">
                    <a href="#" class="social-icon facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-icon twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <!-- Section 3: Quick Links -->
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="quick-links">
                    <li><a href="scrap-rates.php">Scrap Rates</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Our Services</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
      
    </footer>
</body>
</html>