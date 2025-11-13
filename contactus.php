<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Scrap Venture</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #dfecdf 0%, #c8e6c9 100%);
            min-height: 100vh;
            padding: 0 !important;
        }

        /* Fix only navbar container gaps */
        .navbar-container,
        nav .container {
            max-width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .contact-header {
            text-align: center;
            margin-bottom: 4rem;
            padding: 2rem 0;
            margin-top: 100px;
        }

        .contact-header h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: #111827;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .contact-header h1 span {
            color: #269C26;
        }

        .contact-subtitle {
            font-size: 1.3rem;
            color: #4b5563;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        /* Contact Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-bottom: 4rem;
        }

        /* Contact Form */
        .contact-form-section {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 2px solid #f1f5f9;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .contact-form-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            border-color: #269C26;
        }

        .form-header {
            margin-bottom: 2rem;
        }

        .form-header h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .form-header p {
            color: #6b7280;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #374151;
            font-size: 1rem;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 1rem 1.5rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #269C26;
            background: white;
            box-shadow: 0 0 0 3px rgba(38, 156, 38, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
            font-family: inherit;
        }

        .submit-btn {
            background: #269C26;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 1.2rem 2rem;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }

        .submit-btn:hover {
            background: #1e7a1e;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(38, 156, 38, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Contact Info */
        .contact-info-section {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .info-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 2px solid #f1f5f9;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #269C26, #10b981);
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            border-color: #269C26;
        }

        .info-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            gap: 1rem;
        }

        .info-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #269C26, #10b981);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 8px 20px rgba(38, 156, 38, 0.3);
        }

        .info-header h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
        }

        .info-content p {
            color: #4b5563;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.75rem 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .contact-item:last-child {
            border-bottom: none;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background: #f0f9f0;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #269C26;
            font-size: 1.1rem;
        }

        .contact-text {
            flex: 1;
        }

        .contact-text strong {
            color: #111827;
            font-weight: 600;
            display: block;
            margin-bottom: 0.25rem;
        }

        .contact-text span {
            color: #6b7280;
            font-size: 0.95rem;
        }

        /* Business Hours */
        .hours-list {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .hour-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .hour-item:last-child {
            border-bottom: none;
        }

        .day {
            color: #374151;
            font-weight: 500;
        }

        .time {
            color: #269C26;
            font-weight: 600;
        }

                /* Map Section */
        .map-section {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 2px solid #f1f5f9;
            margin-bottom: 4rem;
        }

        .map-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .map-header h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 0.5rem;
        }

        .map-header p {
            color: #6b7280;
            font-size: 1.1rem;
        }

        .map-container {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            border: 2px solid #e5e7eb;
        }

        .map-overlay {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 1000;
        }

        .map-info-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            border: 2px solid #269C26;
            max-width: 280px;
            backdrop-filter: blur(10px);
        }

        .map-info-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid #f1f5f9;
        }

        .map-info-header i {
            color: #269C26;
            font-size: 1.3rem;
        }

        .map-info-header h4 {
            color: #111827;
            font-size: 1.2rem;
            font-weight: 700;
            margin: 0;
        }

        .map-info-content p {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: #4b5563;
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
        }

        .map-info-content i {
            color: #269C26;
            width: 16px;
        }

        .get-directions-btn {
            background: linear-gradient(135deg, #269C26, #10b981);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }

        .get-directions-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(38, 156, 38, 0.4);
        }
         
        /* FAQ Section */
        .faq-section {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 2px solid #f1f5f9;
            margin-bottom: 4rem;
        }

        .faq-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .faq-header h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 1rem;
        }

        .faq-header p {
            color: #6b7280;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .faq-grid {
            display: grid;
            gap: 1.5rem;
        }

        .faq-item {
            background: #f8fafc;
            border-radius: 12px;
            padding: 2rem;
            border-left: 4px solid #269C26;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            background: #f0f9f0;
            transform: translateX(5px);
        }

        .faq-question {
            font-size: 1.2rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .faq-question i {
            color: #269C26;
        }

        .faq-answer {
            color: #4b5563;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .contact-header h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .contact-container {
                padding: 0 15px;
            }
            
            .contact-header {
                margin-top: 80px;
            }
            
            .contact-header h1 {
                font-size: 2.3rem;
            }
            
            .contact-form-section,
            .map-section,
            .faq-section {
                padding: 2rem;
            }
            
            .info-card {
                padding: 2rem;
            }
        }

        @media (max-width: 480px) {
            .contact-container {
                padding: 0 10px;
            }
            
            .contact-header h1 {
                font-size: 2rem;
            }
            
            .contact-form-section,
            .map-section,
            .faq-section {
                padding: 1.5rem;
            }
            
            .info-card {
                padding: 1.5rem;
            }
            
            .info-header {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .contact-form-section,
        .info-card,
        .map-section,
        .faq-section {
            animation: fadeInUp 0.6s ease-out;
        }
    </style>
</head>
<body>
    <?php require 'assets/navbar.php'; ?>
    
    <div class="contact-container">
        <!-- Header -->
        <div class="contact-header">
            <h1>Get In <span>Touch</span></h1>
            <p class="contact-subtitle">Have questions about scrap recycling? We're here to help! Reach out to us for pricing, pickup schedules, or any other inquiries.</p>
        </div>

        <!-- Contact Grid -->
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-section">
                <div class="form-header">
                    <h2><i class="fas fa-paper-plane"></i> Send us a Message</h2>
                    <p>Fill out the form below and we'll get back to you within 24 hours.</p>
                </div>
                <form id="contactForm">
                    <div class="form-group">
                        <label class="form-label" for="name">Full Name</label>
                        <input type="text" id="name" class="form-input" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address</label>
                        <input type="email" id="email" class="form-input" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-input" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="subject">Subject</label>
                        <input type="text" id="subject" class="form-input" placeholder="What is this regarding?" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Message</label>
                        <textarea id="message" class="form-textarea" placeholder="Tell us how we can help you..." required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i>
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info-section">
                <!-- Contact Details Card -->
                <div class="info-card">
                    <div class="info-header">
                        <div class="info-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>Contact Details</h3>
                    </div>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <strong>Phone Number</strong>
                                <span>+880 1234 567890</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <strong>Email Address</strong>
                                <span>hello@scrapventure.com</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <strong>Office Address</strong>
                                <span>123 Green Street, Dhaka 1212, Bangladesh</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <strong>Emergency Line</strong>
                                <span>+880 1712 345678 (24/7)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Hours Card -->
                <div class="info-card">
                    <div class="info-header">
                        <div class="info-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3>Business Hours</h3>
                    </div>
                    <div class="hours-list">
                        <div class="hour-item">
                            <span class="day">Monday - Friday</span>
                            <span class="time">8:00 AM - 7:00 PM</span>
                        </div>
                        <div class="hour-item">
                            <span class="day">Saturday</span>
                            <span class="time">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="hour-item">
                            <span class="day">Sunday</span>
                            <span class="time">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="hour-item">
                            <span class="day">Emergency Pickup</span>
                            <span class="time">24/7 Available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

               <!-- Map Section -->
        <div class="map-section">
            <div class="map-header">
                <h2><i class="fas fa-map-marked-alt"></i> Find Our Location</h2>
                <p>Visit our main office or schedule a pickup from your location</p>
            </div>
            <div class="map-container">
                <!-- Google Maps Iframe -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.837240932881!2d90.4066593154304!3d23.79086869322616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70c15ea1de1%3A0x97856381e88fb311!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2s!4v1621234567890!5m2!1sen!2s" 
                    width="100%" 
                    height="400" 
                    style="border:0; border-radius: 16px;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                
                <!-- Map Overlay Info -->
                <div class="map-overlay">
                    <div class="map-info-card">
                        <div class="map-info-header">
                            <i class="fas fa-building"></i>
                            <h4>Scrap Venture Office</h4>
                        </div>
                        <div class="map-info-content">
                            <p><i class="fas fa-map-marker-alt"></i> 123 Green Street, Dhaka 1212</p>
                            <p><i class="fas fa-phone"></i> +880 1234 567890</p>
                            <p><i class="fas fa-clock"></i> Open 8:00 AM - 7:00 PM</p>
                            <button class="get-directions-btn" onclick="openDirections()">
                                <i class="fas fa-directions"></i>
                                Get Directions
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="faq-section">
            <div class="faq-header">
                <h2>Frequently Asked Questions</h2>
                <p>Quick answers to common questions about our services</p>
            </div>
            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">
                        <i class="fas fa-question-circle"></i>
                        How quickly can you schedule a pickup?
                    </div>
                    <div class="faq-answer">
                        We typically schedule pickups within 24-48 hours. Emergency pickups are available within 4 hours for urgent requests.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <i class="fas fa-question-circle"></i>
                        What types of materials do you accept?
                    </div>
                    <div class="faq-answer">
                        We accept all major recyclables including plastic, metal, paper, glass, electronics, and copper. Check our rates page for detailed pricing.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <i class="fas fa-question-circle"></i>
                        Do you provide containers for scrap collection?
                    </div>
                    <div class="faq-answer">
                        Yes! We provide free collection bins for regular customers and bulk generators. Contact us to arrange container delivery.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <i class="fas fa-question-circle"></i>
                        How are payments processed?
                    </div>
                    <div class="faq-answer">
                        Payments are made instantly after weighing your materials. We offer cash, mobile banking, and bank transfer options.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'assets/footer.php'; ?>

    <script>
        // Contact form handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value
            };
            
            // Validate form
            if (!formData.name || !formData.email || !formData.phone || !formData.subject || !formData.message) {
                showNotification('Please fill in all required fields.', 'error');
                return;
            }
            
            // Simulate form submission
            const submitBtn = document.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                showNotification('Message sent successfully! We\'ll get back to you within 24 hours.', 'success');
                document.getElementById('contactForm').reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

        // Notification function
        function showNotification(message, type) {
            // Remove existing notifications
            const existingNotifications = document.querySelectorAll('.notification');
            existingNotifications.forEach(notification => notification.remove());
            
            // Create notification
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                background: ${type === 'success' ? '#d1fae5' : '#fee2e2'};
                color: ${type === 'success' ? '#065f46' : '#991b1b'};
                padding: 1rem 1.5rem;
                border-radius: 12px;
                border: 2px solid ${type === 'success' ? '#a7f3d0' : '#fecaca'};
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
                z-index: 1000;
                max-width: 400px;
                animation: slideIn 0.3s ease-out;
            `;
            
            notification.innerHTML = `
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                    <span>${message}</span>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            // Remove notification after 5 seconds
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.style.animation = 'slideOut 0.3s ease-in';
                    setTimeout(() => notification.remove(), 300);
                }
            }, 5000);
        }

        // Add CSS animations for notifications
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideIn {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            
            @keyframes slideOut {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(100%);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.contact-form-section, .info-card, .map-section, .faq-section');
            animatedElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
            });
        });

        // Smooth page load
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Open Google Maps directions
        function openDirections() {
            const address = "123 Green Street, Dhaka 1212, Bangladesh";
            const googleMapsUrl = `https://www.google.com/maps/dir/?api=1&destination=${encodeURIComponent(address)}`;
            window.open(googleMapsUrl, '_blank');
        }

        // Current Location Button
        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        const userLat = position.coords.latitude;
                        const userLng = position.coords.longitude;
                        const googleMapsUrl = `https://www.google.com/maps/dir/?api=1&origin=${userLat},${userLng}&destination=23.8103,90.4125`;
                        window.open(googleMapsUrl, '_blank');
                    },
                    function(error) {
                        showNotification('Unable to get your location. Please enable location services.', 'error');
                    }
                );
            } else {
                showNotification('Geolocation is not supported by your browser.', 'error');
            }
        }

    </script>
</body>
</html>