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
            background-color: #dfecdf;
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




/* How It Works Section */
.how-it-works {
    background-color: white;
    padding: 3rem 2rem;
}

.works-container {
    max-width: 1200px;
    margin: 0 auto;
}

.works-title {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 800;
    color: #111827;
    margin-bottom: 3rem;
}

.steps-container {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
}

.step-box {
    flex: 1;
    min-width: 280px;
    max-width: 350px;
    background-color: #dfecdf;
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.step-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.step-image {
    width: 100px;
    height: 80px;
    margin: 0 auto 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.step-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.step-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #111827;
    margin-bottom: 1rem;
}

.step-description {
    color: #4b5563;
    line-height: 1.6;
}

/* Responsive Design */
@media (max-width: 768px) {
    .how-it-works {
        padding: 3rem 1rem;
    }
    
    .works-title {
        font-size: 2rem;
    }
    
    .steps-container {
        flex-direction: column;
        align-items: center;
    }
    
    .step-box {
        max-width: 100%;
    }
}


/* Why Choose Scrap Venture Section */
.why-choose-us {
    background-color: #269C26;
    padding: 4rem 1.5rem; /* Reduced padding and added side gaps */
}

.choose-container {
    max-width: 1200px;
    margin: 0 auto;
}

.choose-title {
    text-align: center;
    font-size: 2.2rem; /* Slightly smaller title */
    font-weight: 800;
    color: white;
    margin-bottom: 2.5rem; /* Reduced margin */
}

.benefits-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem; /* Reduced gap between boxes */
    justify-content: center;
    padding: 0 1rem; /* Added side padding */
}

.benefit-box {
    flex: 1;
    min-width: 220px; /* Smaller min-width */
    max-width: 240px; /* Smaller max-width */
    background-color: white;
    border-radius: 10px; /* Slightly smaller radius */
    padding: 1.5rem 1rem; /* Reduced padding */
    text-align: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); /* Lighter shadow */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.benefit-box:hover {
    transform: translateY(-3px); /* Smaller hover effect */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
}

.benefit-image {
    width: 80px; /* Smaller image container */
    height: 70px;
    margin: 0 auto 1rem; /* Reduced margin */
    display: flex;
    align-items: center;
    justify-content: center;
}

.benefit-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.benefit-title {
    font-size: 1.2rem; /* Smaller title */
    font-weight: 700;
    color: #111827;
    margin-bottom: 0.8rem; /* Reduced margin */
}

.benefit-description {
    color: #4b5563;
    line-height: 1.5;
    font-size: 0.9rem; /* Smaller text */
}

/* Responsive Design */
@media (max-width: 768px) {
    .why-choose-us {
        padding: 3rem 1rem;
    }
    
    .choose-title {
        font-size: 1.8rem;
    }
    
    .benefits-container {
        flex-direction: column;
        align-items: center;
        gap: 1rem; /* Smaller gap on mobile */
        padding: 0 0.5rem; /* Smaller side padding on mobile */
    }
    
    .benefit-box {
        max-width: 100%;
        min-width: 100%;
        padding: 1.5rem 1rem;
    }
}


/* Our Blogs Section */
.blogs-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    padding: 5rem 2rem;
    position: relative;
    overflow: hidden;
}

.blogs-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #269C26, #10b981);
}

.blogs-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.blogs-title {
    text-align: center;
    font-size: 2.8rem;
    font-weight: 800;
    color: #1a202c;
    margin-bottom: 1rem;
    position: relative;
}

.blogs-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: #269C26;
    border-radius: 2px;
}

.blogs-subtitle {
    text-align: center;
    font-size: 1.1rem;
    color: #64748b;
    max-width: 600px;
    margin: 0 auto 3rem;
    line-height: 1.6;
}

.blogs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2.5rem;
    margin-bottom: 3rem;
}

.blog-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    border: 1px solid #f1f5f9;
}

.blog-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
    border-color: #269C26;
}

.blog-image {
    position: relative;
    height: 220px;
    overflow: hidden;
}

.blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.blog-card:hover .blog-image img {
    transform: scale(1.05);
}

.blog-category {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: #269C26;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.blog-content {
    padding: 2rem;
}

.blog-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #1a202c;
    margin-bottom: 1rem;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.blog-excerpt {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 1.5rem;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.read-more {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #269C26;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    padding: 0.5rem 0;
    border-bottom: 2px solid transparent;
}

.read-more:hover {
    color: #1e7a1e;
    border-bottom-color: #269C26;
    gap: 0.8rem;
}

.read-more i {
    font-size: 0.8rem;
    transition: transform 0.3s ease;
}

.read-more:hover i {
    transform: translateX(3px);
}

.blogs-cta {
    text-align: center;
}

.view-all-blogs {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    background: #269C26;
    color: white;
    text-decoration: none;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(38, 156, 38, 0.3);
}

.view-all-blogs:hover {
    background: #1e7a1e;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(38, 156, 38, 0.4);
    gap: 1rem;
}

.view-all-blogs i {
    font-size: 0.9rem;
    transition: transform 0.3s ease;
}

.view-all-blogs:hover i {
    transform: translateX(3px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .blogs-section {
        padding: 3rem 1rem;
    }
    
    .blogs-title {
        font-size: 2.2rem;
    }
    
    .blogs-subtitle {
        font-size: 1rem;
        margin-bottom: 2rem;
    }
    
    .blogs-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .blog-image {
        height: 200px;
    }
    
    .blog-content {
        padding: 1.5rem;
    }
    
    .blog-title {
        font-size: 1.2rem;
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


 <!-- How It Works Section -->
<section class="how-it-works">
    <div class="works-container">
        <h2 class="works-title">How It Works</h2>
        <div class="steps-container">
            <!-- Step 1 -->
            <div class="step-box">
                <div class="step-image">
                    <img src="assets/images/schedule.svg" alt="Book a Pickup">
                </div>
                <h3 class="step-title">Book a Pickup</h3>
                <p class="step-description">Submit your phone number and we'll call to confirm a convenient pickup time.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="step-box">
                <div class="step-image">
                    <img src="assets/images/pickup.svg" alt="We Come to You">
                </div>
                <h3 class="step-title">We Come to You</h3>
                <p class="step-description">Our team arrives at your address and collects the recyclables right from your doorstep.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="step-box">
                <div class="step-image">
                    <img src="assets/images/payment.svg" alt="Get Paid Instantly">
                </div>
                <h3 class="step-title">Get Paid Instantly</h3>
                <p class="step-description">Receive quick, fair payments for your scrap without any hassle.</p>
            </div>
        </div>
    </div>
</section>
    

<!-- Why Choose Scrap Venture Section -->
<section class="why-choose-us">
    <div class="choose-container">
        <h2 class="choose-title">Why Choose Scrap Venture?</h2>
        <div class="benefits-container">
            <!-- Benefit 1 -->
            <div class="benefit-box">
                <div class="benefit-image">
                    <img src="assets/images/value.webp" alt="Top Payouts">
                </div>
                <h3 class="benefit-title">Top Payouts</h3>
                <p class="benefit-description">Get the best price for your scrap, powered by our local recycling network.</p>
            </div>
            
            <!-- Benefit 2 -->
            <div class="benefit-box">
                <div class="benefit-image">
                    <img src="assets/images/easy.webp" alt="Easy Scheduling">
                </div>
                <h3 class="benefit-title">Easy Scheduling</h3>
                <p class="benefit-description">Book pickups at your preferred time — right from your mobile.</p>
            </div>
            
            <!-- Benefit 3 -->
            <div class="benefit-box">
                <div class="benefit-image">
                    <img src="assets/images/trust.webp" alt="Reliable Team">
                </div>
                <h3 class="benefit-title">Reliable Team</h3>
                <p class="benefit-description">Trusted staff trained to provide safe, smooth pickup services every time.</p>
            </div>
            
            <!-- Benefit 4 -->
            <div class="benefit-box">
                <div class="benefit-image">
                    <img src="assets/images/eco.webp" alt="Eco Commitment">
                </div>
                <h3 class="benefit-title">Eco Commitment</h3>
                <p class="benefit-description">We recycle with care — ensuring your waste becomes sustainable value.</p>
            </div>
        </div>
    </div>
</section>


<!-- Our Blogs Section -->
<section class="blogs-section">
    <div class="blogs-container">
        <h2 class="blogs-title">Our Blogs</h2>
        <p class="blogs-subtitle">Stay updated with the latest insights, trends, and stories from the recycling world</p>
        
        <div class="blogs-grid">
            <!-- Blog 1 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="assets/images/blogs.webp" alt="Plastic Scrap Prices">
                    <div class="blog-category">Market Updates</div>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">Plastic Scrap Prices in Dhaka – Daily Update</h3>
                    <p class="blog-excerpt">Stay informed about plastic scrap rates in your area. With growing recycling awareness in Bangladesh, knowing market prices can help you get fair value.</p>
                    <a href="#" class="read-more">
                        Read More 
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            
            <!-- Blog 2 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="assets/images/local-vendors.jpg" alt="Local Scrap Vendors">
                    <div class="blog-category">Community</div>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">From Badda to Rampura: The Role of Local Scrap Vendors</h3>
                    <p class="blog-excerpt">Local scrap collectors in Dhaka play a huge role in the circular economy. Learn how Scrap Venture helps them scale their impact.</p>
                    <a href="#" class="read-more">
                        Read More 
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            
            <!-- Blog 3 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="assets/images/green-bangladesh.jpg" alt="Green Bangladesh">
                    <div class="blog-category">Sustainability</div>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title">Green Bangladesh Starts with You</h3>
                    <p class="blog-excerpt">Recycling isn't just for factories—it begins at home. Discover how your everyday scrap can help make Bangladesh greener.</p>
                    <a href="#" class="read-more">
                        Read More 
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
        </div>
        
        <div class="blogs-cta">
            <a href="#" class="view-all-blogs">
                View All Blog Posts
                <i class="fas fa-arrow-right"></i>
            </a>
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



        // Optional: Add animations or interactions for the How It Works section
document.addEventListener('DOMContentLoaded', function() {
    const stepBoxes = document.querySelectorAll('.step-box');
    
    // Add intersection observer for scroll animations
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Apply initial styles and observe each step box
    stepBoxes.forEach(box => {
        box.style.opacity = '0';
        box.style.transform = 'translateY(20px)';
        box.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(box);
    });
});

// Optional: Add animations for the Why Choose Us section
document.addEventListener('DOMContentLoaded', function() {
    const benefitBoxes = document.querySelectorAll('.benefit-box');
    
    // Add intersection observer for scroll animations
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Apply initial styles and observe each benefit box
    benefitBoxes.forEach(box => {
        box.style.opacity = '0';
        box.style.transform = 'translateY(20px)';
        box.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(box);
    });
});




// Blog section animations
document.addEventListener('DOMContentLoaded', function() {
    const blogCards = document.querySelectorAll('.blog-card');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Apply initial styles and observe each blog card
    blogCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease, box-shadow 0.3s ease';
        observer.observe(card);
    });
});
    </script>
</body>
</html>