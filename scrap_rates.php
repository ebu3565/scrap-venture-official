<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Scrap Rates - Scrap Venture</title>
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
        padding: 0 !important; /* Remove body padding */
    }

    /* Fix only navbar container gaps - leave footer as is */
    .navbar-container,
    nav .container { /* Target navbar container specifically */
        max-width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    /* Keep footer with its original container styling */
    .footer-container {
        /* Don't override footer styles - let it use its original container */
    }

    .rates-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px; /* Add padding only to content */
    }

    /* Header */
    .header {
        text-align: center;
        margin-bottom: 3rem;
        padding: 2rem 0;
        margin-top: 100px;
    }

    .header h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: #111827;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .header h1 span {
        color: #269C26;
    }

    .subtitle {
        font-size: 1.3rem;
        color: #4b5563;
        margin-bottom: 2rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .date-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem 2rem;
        display: inline-flex;
        align-items: center;
        gap: 1rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        border: 2px solid #e5e7eb;
    }

    .date-icon {
        width: 50px;
        height: 50px;
        background: #269C26;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.3rem;
    }

    .date-info h3 {
        color: #111827;
        font-size: 1.1rem;
        margin-bottom: 0.25rem;
    }

    .date-info p {
        color: #6b7280;
        font-size: 0.9rem;
    }

    /* Rest of your existing CSS remains the same */
    .rates-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        margin-bottom: 3rem;
    }

    .rate-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: 2px solid #f1f5f9;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .rate-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #269C26, #10b981);
    }

    .rate-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        border-color: #269C26;
    }

    .material-header {
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
    }

    .material-icon {
        width: 70px;
        height: 70px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1.5rem;
        font-size: 2rem;
        color: white;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .plastic .material-icon { background: linear-gradient(135deg, #3498db, #2980b9); }
    .metal .material-icon { background: linear-gradient(135deg, #95a5a6, #7f8c8d); }
    .paper .material-icon { background: linear-gradient(135deg, #f39c12, #e67e22); }
    .glass .material-icon { background: linear-gradient(135deg, #1abc9c, #16a085); }
    .electronics .material-icon { background: linear-gradient(135deg, #9b59b6, #8e44ad); }
    .copper .material-icon { background: linear-gradient(135deg, #e74c3c, #c0392b); }

    .material-info h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 0.5rem;
    }

    .material-info .category {
        color: #6b7280;
        font-size: 0.9rem;
        font-weight: 500;
    }

    /* Price Section */
    .price-section {
        text-align: center;
        margin: 2rem 0;
        padding: 1.5rem;
        background: #f8fafc;
        border-radius: 12px;
        border: 2px solid #e5e7eb;
    }

    .price {
        font-size: 3rem;
        font-weight: 800;
        color: #111827;
        margin-bottom: 0.5rem;
        line-height: 1;
    }

    .price span {
        font-size: 1.5rem;
        color: #6b7280;
        font-weight: 600;
    }

    .price-change {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1.2rem;
        border-radius: 25px;
        font-weight: 600;
        font-size: 0.9rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .price-up {
        background: #d1fae5;
        color: #065f46;
        border: 1px solid #a7f3d0;
    }

    .price-down {
        background: #fee2e2;
        color: #991b1b;
        border: 1px solid #fecaca;
    }

    .price-stable {
        background: #f3f4f6;
        color: #374151;
        border: 1px solid #e5e7eb;
    }

    /* Variations */
    .variations {
        margin-top: 1.5rem;
    }

    .variations h4 {
        color: #374151;
        margin-bottom: 1rem;
        font-size: 1.1rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .variations h4 i {
        color: #269C26;
    }

    .variation-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.8rem 0;
        border-bottom: 1px solid #f1f5f9;
    }

    .variation-item:last-child {
        border-bottom: none;
    }

    .variation-name {
        color: #4b5563;
        font-weight: 500;
    }

    .variation-price {
        color: #111827;
        font-weight: 600;
    }

    /* Market Insights */
    .market-info {
        background: white;
        border-radius: 20px;
        padding: 3rem;
        margin-top: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: 2px solid #f1f5f9;
    }

    .market-info h2 {
        color: #111827;
        margin-bottom: 2rem;
        font-size: 2.2rem;
        font-weight: 700;
        text-align: center;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .info-card {
        background: #f8fafc;
        padding: 2rem;
        border-radius: 16px;
        border-left: 4px solid #269C26;
        transition: all 0.3s ease;
    }

    .info-card:hover {
        background: #f0f9f0;
        transform: translateX(5px);
    }

    .info-card h4 {
        color: #111827;
        margin-bottom: 1rem;
        font-size: 1.2rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .info-card p {
        color: #4b5563;
        line-height: 1.6;
    }

    /* Last Updated */
    .last-updated {
        text-align: center;
        margin-top: 3rem;
        padding: 1.5rem;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        margin-bottom: 2rem; /* Add space before footer */
    }

    .last-updated p {
        color: #6b7280;
        font-weight: 500;
    }

    .last-updated strong {
        color: #269C26;
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

    @keyframes pricePulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .price-changing {
        animation: pricePulse 0.6s ease-in-out;
    }

    .rate-card {
        animation: fadeInUp 0.6s ease-out;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .rates-container {
            padding: 0 15px;
        }
        
        .header h1 {
            font-size: 2.5rem;
        }
        
        .rates-grid {
            grid-template-columns: 1fr;
        }
        
        .rate-card {
            padding: 2rem;
        }
        
        .price {
            font-size: 2.5rem;
        }
        
        .market-info {
            padding: 2rem;
        }
        
        .material-header {
            flex-direction: column;
            text-align: center;
        }
        
        .material-icon {
            margin-right: 0;
            margin-bottom: 1rem;
        }
    }

    @media (max-width: 480px) {
        .rates-container {
            padding: 0 10px;
        }
        
        .header h1 {
            font-size: 2rem;
        }
        
        .rate-card {
            padding: 1.5rem;
        }
        
        .price {
            font-size: 2rem;
        }
        
        .date-card {
            flex-direction: column;
            text-align: center;
            gap: 0.5rem;
        }
    }
</style>
</head>
<body>

  <?php require 'assets/navbar.php'; ?>
    <div class="rates-container">
        <!-- Header -->
        <div class="header">
            <h1>Daily Scrap <span>Market Rates</span></h1>
            <p class="subtitle">Get real-time pricing for your recyclables. Updated regularly to ensure you get the best value for your scrap materials.</p>
            <div class="date-card">
                <div class="date-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="date-info">
                    <h3>Today's Rates</h3>
                    <p id="currentDate">Loading...</p>
                </div>
            </div>
        </div>

        <!-- Rates Grid -->
        <div class="rates-grid">
            <!-- Plastic -->
            <div class="rate-card plastic">
                <div class="material-header">
                    <div class="material-icon">
                        <i class="fas fa-bottle-water"></i>
                    </div>
                    <div class="material-info">
                        <h3>Plastic</h3>
                        <p class="category">PET, HDPE, PVC Materials</p>
                    </div>
                </div>
                <div class="price-section">
                    <div class="price">৳25<span>/kg</span></div>
                    <div class="price-change price-up">
                        <i class="fas fa-arrow-up"></i>
                        +2.5% Today
                    </div>
                </div>
                <div class="variations">
                    <h4><i class="fas fa-list"></i> Price Breakdown</h4>
                    <div class="variation-item">
                        <span class="variation-name">PET Bottles</span>
                        <span class="variation-price">৳28/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">HDPE Containers</span>
                        <span class="variation-price">৳26/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">PVC Materials</span>
                        <span class="variation-price">৳22/kg</span>
                    </div>
                </div>
            </div>

            <!-- Metal -->
            <div class="rate-card metal">
                <div class="material-header">
                    <div class="material-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="material-info">
                        <h3>Metal</h3>
                        <p class="category">Steel, Aluminum, Brass</p>
                    </div>
                </div>
                <div class="price-section">
                    <div class="price">৳45<span>/kg</span></div>
                    <div class="price-change price-stable">
                        <i class="fas fa-minus"></i>
                        Market Stable
                    </div>
                </div>
                <div class="variations">
                    <h4><i class="fas fa-list"></i> Price Breakdown</h4>
                    <div class="variation-item">
                        <span class="variation-name">Steel Scrap</span>
                        <span class="variation-price">৳40/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">Aluminum</span>
                        <span class="variation-price">৳55/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">Brass Items</span>
                        <span class="variation-price">৳65/kg</span>
                    </div>
                </div>
            </div>

            <!-- Paper -->
            <div class="rate-card paper">
                <div class="material-header">
                    <div class="material-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="material-info">
                        <h3>Paper</h3>
                        <p class="category">Newspaper, Cardboard, Office</p>
                    </div>
                </div>
                <div class="price-section">
                    <div class="price">৳12<span>/kg</span></div>
                    <div class="price-change price-down">
                        <i class="fas fa-arrow-down"></i>
                        -1.2% Today
                    </div>
                </div>
                <div class="variations">
                    <h4><i class="fas fa-list"></i> Price Breakdown</h4>
                    <div class="variation-item">
                        <span class="variation-name">Newspaper</span>
                        <span class="variation-price">৳10/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">Cardboard</span>
                        <span class="variation-price">৳14/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">Office Paper</span>
                        <span class="variation-price">৳15/kg</span>
                    </div>
                </div>
            </div>

            <!-- Glass -->
            <div class="rate-card glass">
                <div class="material-header">
                    <div class="material-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <div class="material-info">
                        <h3>Glass</h3>
                        <p class="category">Bottles, Containers, Broken</p>
                    </div>
                </div>
                <div class="price-section">
                    <div class="price">৳8<span>/kg</span></div>
                    <div class="price-change price-up">
                        <i class="fas fa-arrow-up"></i>
                        +0.8% Today
                    </div>
                </div>
                <div class="variations">
                    <h4><i class="fas fa-list"></i> Price Breakdown</h4>
                    <div class="variation-item">
                        <span class="variation-name">Clear Glass</span>
                        <span class="variation-price">৳9/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">Colored Glass</span>
                        <span class="variation-price">৳7/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">Broken Glass</span>
                        <span class="variation-price">৳6/kg</span>
                    </div>
                </div>
            </div>

            <!-- Electronics -->
            <div class="rate-card electronics">
                <div class="material-header">
                    <div class="material-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="material-info">
                        <h3>Electronics</h3>
                        <p class="category">E-waste, Components, Wires</p>
                    </div>
                </div>
                <div class="price-section">
                    <div class="price">৳85<span>/kg</span></div>
                    <div class="price-change price-up">
                        <i class="fas fa-arrow-up"></i>
                        +3.2% Today
                    </div>
                </div>
                <div class="variations">
                    <h4><i class="fas fa-list"></i> Price Breakdown</h4>
                    <div class="variation-item">
                        <span class="variation-name">Circuit Boards</span>
                        <span class="variation-price">৳120/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">Copper Wires</span>
                        <span class="variation-price">৳95/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">Batteries</span>
                        <span class="variation-price">৳70/kg</span>
                    </div>
                </div>
            </div>

            <!-- Copper -->
            <div class="rate-card copper">
                <div class="material-header">
                    <div class="material-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="material-info">
                        <h3>Copper</h3>
                        <p class="category">Pure Copper Items</p>
                    </div>
                </div>
                <div class="price-section">
                    <div class="price">৳320<span>/kg</span></div>
                    <div class="price-change price-up">
                        <i class="fas fa-arrow-up"></i>
                        +4.1% Today
                    </div>
                </div>
                <div class="variations">
                    <h4><i class="fas fa-list"></i> Price Breakdown</h4>
                    <div class="variation-item">
                        <span class="variation-name">Copper Wire</span>
                        <span class="variation-price">৳350/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">Copper Pipe</span>
                        <span class="variation-price">৳340/kg</span>
                    </div>
                    <div class="variation-item">
                        <span class="variation-name">Copper Sheet</span>
                        <span class="variation-price">৳330/kg</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Market Insights -->
        <div class="market-info">
            <h2><i class="fas fa-chart-line"></i> Market Insights & Trends</h2>
            <div class="info-grid">
                <div class="info-card">
                    <h4><i class="fas fa-trending-up"></i> Market Overview</h4>
                    <p>Overall market showing positive growth with 2.3% average increase across all materials this week. High demand continues for copper and electronic components.</p>
                </div>
                <div class="info-card">
                    <h4><i class="fas fa-lightbulb"></i> Selling Tips</h4>
                    <p>Current rates are favorable for plastic and metal scrap. Consider separating materials by type to get maximum value for your recyclables.</p>
                </div>
                <div class="info-card">
                    <h4><i class="fas fa-info-circle"></i> Important Note</h4>
                    <p>Rates are indicative and may vary based on quality, quantity, and current market conditions. Contact us for bulk pricing and special arrangements.</p>
                </div>
            </div>
        </div>

        <!-- Last Updated -->
        <div class="last-updated">
            <p><i class="fas fa-sync-alt"></i> Last updated: <strong id="lastUpdated">Loading...</strong> • Rates update every 30 minutes</p>
        </div>
            </div>
        <?php require 'assets/footer.php'; ?>


    <script>
        // Set current date and time
        function updateDateTime() {
            const now = new Date();
            
            // Format date
            const dateOptions = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            };
            document.getElementById('currentDate').textContent = now.toLocaleDateString('en-US', dateOptions);
            
            // Format time for last updated
            const timeOptions = { 
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit',
                hour12: true 
            };
            document.getElementById('lastUpdated').textContent = now.toLocaleTimeString('en-US', timeOptions);
        }

        // Simulate price change animations
        function simulateMarketActivity() {
            const prices = document.querySelectorAll('.price');
            const changes = document.querySelectorAll('.price-change');
            
            prices.forEach((price, index) => {
                if (Math.random() > 0.8) {
                    price.classList.add('price-changing');
                    setTimeout(() => {
                        price.classList.remove('price-changing');
                    }, 600);
                }
            });
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            updateDateTime();
            
            // Update time every minute
            setInterval(updateDateTime, 60000);
            
            // Simulate market activity every 20 seconds
            setInterval(simulateMarketActivity, 20000);
            
            // Add staggered animation to cards
            const cards = document.querySelectorAll('.rate-card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
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
    </script>
</body>
</html>