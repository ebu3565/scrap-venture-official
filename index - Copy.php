<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrap Venture - Sell Your Recyclables Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9fafb;
            color: #1f2937;
            line-height: 1.6;
        }

        .hero-section {
            background-color: #d1e0d1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            margin-top: 75px; 
        }

        .container {
            max-width: 1200px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            align-items: center;
            justify-content: center; /* Changed to center */
        }

        .content-section {
            flex: 1;
            min-width: 300px;
            padding: 2rem;
            max-width: 600px; /* Added max-width */
        }

        .tagline {
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            color: #111827;

        }

        .tagline span {
            color: #269C26;
        }

        .materials {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .material-tag {
            background-color: #d1fae5;
            color: #065f46;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
        }

        .description {
            font-size: 1rem;
            color: #4b5563;
            max-width: 500px;
            margin-bottom: 1rem; /* Reduced margin */
                }

        .logo-image {
            max-width: 200px;
            height: auto;
        }

        .pickup-section {
            flex: 1;
            min-width: 300px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            max-width: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center content vertically */
            margin: 0 auto; /* Center the section */
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #111827;
            text-align: center; /* Center the title */
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #374151;
        }

        .phone-input {
            display: flex;
            align-items: center;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
            transition: border-color 0.3s;
        }

        .phone-input:focus-within {
            border-color: #269C26;
        }

        .country-code {
            background-color: #f3f4f6;
            padding: 0.75rem 1rem;
            font-weight: 600;
            color: #374151;
            border-right: 2px solid #e5e7eb;
        }

        .phone-field {
            flex: 1;
            padding: 0.75rem 1rem;
            border: none;
            outline: none;
            font-size: 1rem;
            width: 100%;
        }

        .next-btn {
            background-color: #269C26;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 0.5rem;
        }

        .next-btn:hover {
            background-color: #269c26e7;
        }

        .help-text {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e5e7eb;
            text-align: center;
            color: #6b7280;
        }

        .help-text a {
            color: #269C26;
            text-decoration: none;
            font-weight: 600;
        }

        .help-text a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            
            .tagline {
                font-size: 2.2rem;
            }
            
            .pickup-section {
                width: 100%;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
  <?php require 'assets/navbar.php'; ?>
    
    <section class="hero-section">
        <div class="container">
            <div class="content-section">
                
                <h1 class="tagline">Sell your recyclables <br> online with <br> <span>Scrap Venture!</span></h1>
                
                <div class="materials">
                    <div class="material-tag">Paper</div>
                    <div class="material-tag">Plastics</div>
                    <div class="material-tag">Metals</div>
                    <div class="material-tag">Electronics</div>
                </div>
                
                <p class="description">Serving you with the easiest pickup experience. Schedule a pickup, we collect your recyclables, and you get paid - it's that simple!</p>
                
                <!-- Logo added here -->
                <div class="logo-container">
                    <img src="assets/images/BannerImage.png" alt="Scrap Venture Logo" class="logo-image">
                </div>
            </div>
            
            <div class="pickup-section">
                <h2 class="section-title">Schedule a Pickup</h2>
                
                <form id="pickupForm">
                    <div class="form-group">
                        <label class="form-label" for="mobile">Mobile Number</label>
                        <div class="phone-input">
                            <div class="country-code">+880</div>
                            <input type="tel" id="mobile" class="phone-field" placeholder="1XXXXXXXXX" pattern="[0-9]{10}" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="next-btn">Next</button>
                </form>
                
                <div class="help-text">
                    Facing problems? Call us at <a href="tel:+8801234567890">+8801234567890</a>
                </div>
            </div>
        </div>
    </section>
  <?php require 'assets/footer.php'; ?>
    <script>
        document.getElementById('pickupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const phoneNumber = document.getElementById('mobile').value;
            
            // Basic validation for Bangladeshi mobile numbers
            if (!/^1[0-9]{9}$/.test(phoneNumber)) {
                alert('Please enter a valid 10-digit Bangladeshi mobile number (without country code).');
                return;
            }
            
            // In a real application, you would send this data to a server
            alert(`Thank you! We'll contact you at +880${phoneNumber} to schedule your pickup.`);
            
            // Reset the form
            document.getElementById('pickupForm').reset();
        });
    </script>
</body>
</html>