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




/* Testimonials Section */
.testimonials-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    padding: 5rem 2rem;
    position: relative;
    overflow: hidden;
}

.testimonials-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.testimonials-header {
    text-align: center;
    margin-bottom: 3rem;
}

.testimonials-title {
    font-size: 2.8rem;
    font-weight: 800;
    color: #1a202c;
    margin-bottom: 1rem;
    position: relative;
}

.testimonials-title::after {
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

.testimonials-subtitle {
    font-size: 1.1rem;
    color: #64748b;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 4rem;
}

.testimonial-card {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    border: 1px solid #f1f5f9;
}

.testimonial-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
    border-color: #269C26;
}

.testimonial-rating {
    color: #fbbf24;
    margin-bottom: 1.5rem;
    font-size: 1.1rem;
}

.testimonial-text {
    color: #4b5563;
    line-height: 1.7;
    margin-bottom: 1.5rem;
    font-style: italic;
    position: relative;
    padding-left: 1.5rem;
}

.testimonial-text::before {
    content: '"';
    position: absolute;
    left: 0;
    top: -10px;
    font-size: 3rem;
    color: #269C26;
    opacity: 0.3;
    font-family: Georgia, serif;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.author-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid #dfecdf;
}

.author-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.author-info h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #1a202c;
    margin-bottom: 0.25rem;
}

.author-info p {
    color: #64748b;
    font-size: 0.9rem;
}

.testimonials-stats {
    display: flex;
    justify-content: center;
    gap: 3rem;
    flex-wrap: wrap;
    padding-top: 2rem;
    border-top: 1px solid #e2e8f0;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #269C26;
    margin-bottom: 0.5rem;
}

.stat-label {
    color: #64748b;
    font-weight: 600;
    font-size: 1rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .testimonials-section {
        padding: 3rem 1rem;
    }
    
    .testimonials-title {
        font-size: 2.2rem;
    }
    
    .testimonials-subtitle {
        font-size: 1rem;
        margin-bottom: 2rem;
    }
    
    .testimonials-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .testimonial-card {
        padding: 1.5rem;
    }
    
    .testimonials-stats {
        gap: 2rem;
    }
    
    .stat-number {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .testimonials-stats {
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .testimonial-author {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
    }
    
    .author-info {
        text-align: center;
    }
}


/* Households & Businesses Section */
.audience-section {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    padding: 5rem 2rem;
    position: relative;
    overflow: hidden;
}

.audience-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.audience-header {
    text-align: center;
    margin-bottom: 4rem;
}

.audience-title {
    font-size: 2.8rem;
    font-weight: 800;
    color: #1a202c;
    margin-bottom: 1rem;
    position: relative;
}

.audience-title::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: #269C26;
    border-radius: 2px;
}

.audience-subtitle {
    font-size: 1.4rem;
    color: #269C26;
    font-weight: 700;
    margin-top: 2rem;
    letter-spacing: 1px;
}

.audience-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2.5rem;
    margin-bottom: 3rem;
}

.audience-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    display: flex;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    border: 1px solid #f1f5f9;
    min-height: 400px;
}

.audience-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.households-card:hover {
    border-color: #3b82f6;
}

.businesses-card:hover {
    border-color: #269C26;
}

.card-content {
    flex: 1;
    padding: 2.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.card-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    font-size: 1.8rem;
}

.households-card .card-icon {
    background: rgba(59, 130, 246, 0.1);
    color: #3b82f6;
}

.businesses-card .card-icon {
    background: rgba(38, 156, 38, 0.1);
    color: #269C26;
}

.card-title {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: #1a202c;
}

.households-card .card-title {
    color: #3b82f6;
}

.businesses-card .card-title {
    color: #269C26;
}

.card-features {
    list-style: none;
    margin-bottom: 0;
    flex-grow: 1;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1.2rem;
    padding: 0.5rem 0;
}

.feature-item i {
    margin-right: 1rem;
    margin-top: 0.2rem;
    flex-shrink: 0;
}

.households-card .feature-item i {
    color: #3b82f6;
}

.businesses-card .feature-item i {
    color: #269C26;
}

.feature-item span {
    color: #4b5563;
    line-height: 1.6;
    font-size: 1.05rem;
    font-weight: 500;
}

.card-image {
    flex: 1;
    position: relative;
    overflow: hidden;
    min-height: 300px;
}

.audience-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.audience-card:hover .audience-image {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
    opacity: 0.7;
    transition: opacity 0.3s ease;
}

.audience-card:hover .image-overlay {
    opacity: 0.4;
}

.households-card .card-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(59, 130, 246, 0) 50%);
    z-index: 1;
}

.businesses-card .card-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(38, 156, 38, 0.1) 0%, rgba(38, 156, 38, 0) 50%);
    z-index: 1;
}

/* Responsive Design */
@media (max-width: 968px) {
    .audience-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .audience-card {
        flex-direction: column;
        min-height: auto;
    }
    
    .card-image {
        min-height: 250px;
        order: -1;
    }
    
    .card-content {
        padding: 2rem;
    }
}

@media (max-width: 768px) {
    .audience-section {
        padding: 3rem 1rem;
    }
    
    .audience-title {
        font-size: 2.2rem;
    }
    
    .audience-subtitle {
        font-size: 1.2rem;
    }
    
    .card-content {
        padding: 1.5rem;
    }
    
    .card-title {
        font-size: 1.6rem;
    }
    
    .feature-item span {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .audience-title {
        font-size: 1.8rem;
    }
    
    .card-content {
        padding: 1.5rem;
    }
    
    .card-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
    
    .card-image {
        min-height: 200px;
    }
}

/* Multi-step Form Styles */
.form-step {
    display: none;
}

.form-step.active {
    display: block;
}

.form-navigation {
    display: flex;
    gap: 1rem;
    margin-top: 1.5rem;
}

.back-btn {
    background-color: #6b7280;
    color: white;
    border: none;
    border-radius: 8px;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s;
    flex: 1;
}

.back-btn:hover {
    background-color: #4b5563;
}

.confirm-btn {
    background-color: #059669;
    color: white;
    border: none;
    border-radius: 8px;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s;
    flex: 1;
}

.confirm-btn:hover {
    background-color: #047857;
}

/* Material Options */
.material-options {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-top: 1rem;
}

.material-option {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
}

.material-option:hover {
    border-color: #269C26;
    background-color: #f0f9f0;
}

.material-option.selected {
    border-color: #269C26;
    background-color: #dfecdf;
}

.material-option i {
    font-size: 1.25rem;
    color: #269C26;
    width: 24px;
}

.material-option span {
    font-weight: 600;
    color: #374151;
}

/* Weight Input */
.form-input {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s;
}

.form-input:focus {
    outline: none;
    border-color: #269C26;
}

/* Photo Options */
.photo-options {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-top: 1rem;
}

.photo-btn {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    background: white;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1rem;
    font-weight: 600;
}

.photo-btn:hover {
    border-color: #269C26;
    background-color: #f0f9f0;
}

.photo-btn.cancel {
    color: #ef4444;
}

.photo-btn.cancel:hover {
    border-color: #ef4444;
    background-color: #fef2f2;
}

.photo-btn i {
    font-size: 1.1rem;
    width: 20px;
}

.photo-preview {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1rem;
}

.photo-preview-item {
    position: relative;
    aspect-ratio: 1;
    border-radius: 8px;
    overflow: hidden;
    border: 2px solid #e5e7eb;
}

.photo-preview-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.remove-photo {
    position: absolute;
    top: 4px;
    right: 4px;
    background: rgba(239, 68, 68, 0.9);
    color: white;
    border: none;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
}

/* Progress Indicator */
.form-progress {
    display: flex;
    justify-content: space-between;
    margin-bottom: 2rem;
    position: relative;
}

.form-progress::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background: #e5e7eb;
    transform: translateY(-50%);
    z-index: 1;
}

.progress-step {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: white;
    border: 2px solid #e5e7eb;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    color: #9ca3af;
    position: relative;
    z-index: 2;
}

.progress-step.active {
    border-color: #269C26;
    background: #269C26;
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .material-options {
        grid-template-columns: 1fr;
    }
    
    .photo-options {
        gap: 0.5rem;
    }
    
    .photo-btn {
        padding: 0.75rem;
        font-size: 0.9rem;
    }
    
    .form-navigation {
        flex-direction: column;
    }
}

/* Date and Time Inputs */
.form-input[type="date"],
.form-input[type="time"],
.form-input[type="datetime-local"] {
    padding: 0.75rem 1rem;
}

.form-input[type="date"]:invalid,
.form-input[type="time"]:invalid {
    color: #9ca3af;
}

/* Location Section */
.location-section {
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    padding: 1rem;
    background: #f9fafb;
}

.location-btn {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1rem;
    background: #269C26;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    transition: background-color 0.3s;
    width: 100%;
    justify-content: center;
}

.location-btn:hover {
    background-color: #1e7a1e;
}

.location-btn:disabled {
    background-color: #9ca3af;
    cursor: not-allowed;
}

.location-btn i {
    font-size: 1.1rem;
}

.location-status {
    margin-top: 0.75rem;
    padding: 0.5rem;
    border-radius: 4px;
    text-align: center;
    font-size: 0.9rem;
    background: white;
    border: 1px solid #e5e7eb;
}

.location-status.loading {
    background: #fef3c7;
    border-color: #f59e0b;
    color: #92400e;
}

.location-status.success {
    background: #d1fae5;
    border-color: #10b981;
    color: #065f46;
}

.location-status.error {
    background: #fee2e2;
    border-color: #ef4444;
    color: #991b1b;
}

.manual-location textarea {
    resize: vertical;
    min-height: 80px;
}

/* Order Summary */
.order-summary {
    background: #f8fafc;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    padding: 1.5rem;
    margin: 1.5rem 0;
}

.order-summary h4 {
    margin-bottom: 1rem;
    color: #1f2937;
    font-size: 1.1rem;
    border-bottom: 2px solid #269C26;
    padding-bottom: 0.5rem;
}

.summary-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
    padding: 0.25rem 0;
}

.summary-item span:first-child {
    font-weight: 600;
    color: #4b5563;
}

.summary-item span:last-child {
    color: #1f2937;
    font-weight: 500;
}

.confirm-order-btn {
    background-color: #059669;
    color: white;
    border: none;
    border-radius: 8px;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s;
    flex: 1;
}

.confirm-order-btn:hover {
    background-color: #047857;
}

.confirm-order-btn:disabled {
    background-color: #9ca3af;
    cursor: not-allowed;
}

/* Time Slot Select */
.form-input[type="time"],
.form-input select {
    cursor: pointer;
}

/* Loading Animation */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.loading-spinner {
    animation: spin 1s linear infinite;
}

/* Success Animation */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
    40% {transform: translateY(-10px);}
    60% {transform: translateY(-5px);}
}

.success-bounce {
    animation: bounce 1s;
}


/* Validation Error Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeOut {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    to {
        opacity: 0;
        transform: translateY(-10px);
    }
}

.validation-error {
    animation: fadeIn 0.3s ease-in;
}

/* Add red border to invalid fields */
.form-input:invalid,
.phone-input:has(.phone-field:invalid) {
    border-color: #ef4444;
}

.material-options:not(:has(.selected)) {
    border: 2px solid #ef4444;
    border-radius: 8px;
    padding: 0.5rem;
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
        <!-- Step 1: Phone Number -->
        <div class="form-step active" id="step1">
            <div class="form-group">
                <label class="form-label" for="mobile">Mobile Number</label>
                <div class="phone-input">
                    <div class="country-code">+880</div>
                    <input type="tel" id="mobile" class="phone-field" placeholder="1XXXXXXXXX" pattern="[0-9]{10}" required>
                </div>
            </div>
           <button type="button" class="next-btn" onclick="validateStep1()">Next</button>
        </div>

        <!-- Step 2: Material Selection -->
        <div class="form-step" id="step2">
            <div class="form-group">
                <label class="form-label">Choose Material Type</label>
                <div class="material-options">
                    <div class="material-option" onclick="selectMaterial('plastic')">
                        <i class="fas fa-bottle-water"></i>
                        <span>Plastic</span>
                    </div>
                    <div class="material-option" onclick="selectMaterial('glass')">
                        <i class="fas fa-wine-glass"></i>
                        <span>Glass</span>
                    </div>
                    <div class="material-option" onclick="selectMaterial('metal')">
                        <i class="fas fa-cogs"></i>
                        <span>Metal</span>
                    </div>
                    <div class="material-option" onclick="selectMaterial('paper')">
                        <i class="fas fa-file"></i>
                        <span>Paper</span>
                    </div>
                </div>
                <input type="hidden" id="selectedMaterial" required>
            </div>
            <div class="form-navigation">
                <button type="button" class="back-btn" onclick="showStep(1)">Back</button>
               <button type="button" class="next-btn" onclick="validateStep2()">Next</button>
            </div>
        </div>

        <!-- Step 3: Weight & Photos -->
        <div class="form-step" id="step3">
            <div class="form-group">
                <label class="form-label" for="weight">Estimated Weight (kg)</label>
                <input type="number" id="weight" class="form-input" placeholder="Enter weight in kg" min="0.1" step="0.1" required>
            </div>
            
            <div class="form-group">
                <label class="form-label">Add Photos</label>
                <div class="photo-options">
                    <button type="button" class="photo-btn" onclick="takePicture()">
                        <i class="fas fa-camera"></i>
                        Take Picture
                    </button>
                    <button type="button" class="photo-btn" onclick="chooseFromGallery()">
                        <i class="fas fa-images"></i>
                        Choose from Gallery
                    </button>
                    <button type="button" class="photo-btn cancel" onclick="cancelPhotos()">
                        <i class="fas fa-times"></i>
                        Cancel
                    </button>
                </div>
                <div id="photoPreview" class="photo-preview"></div>
            </div>
            
            <div class="form-navigation">
                <button type="button" class="back-btn" onclick="showStep(2)">Back</button>
               <button type="button" class="confirm-btn" onclick="validateStep3()">Confirm Pickup</button>
            </div>
        </div>

        <!-- Step 4: Date, Time & Location -->
<div class="form-step" id="step4">
    <div class="form-group">
        <label class="form-label" for="pickupDate">Pickup Date</label>
        <input type="date" id="pickupDate" class="form-input" min="<?php echo date('Y-m-d'); ?>" required>
    </div>
    
<div class="form-group">
    <label class="form-label" for="pickupTime">Pickup Time</label>
    <input type="time" id="pickupTime" class="form-input" min="09:00" max="19:00" required>
    <small style="color: #6b7280; font-size: 0.8rem; margin-top: 0.25rem; display: block;">
        Available: 9:00 AM - 7:00 PM
    </small>
</div>
    
    <div class="form-group">
        <label class="form-label">Pickup Location</label>
        <div class="location-section">
            <button type="button" class="location-btn" onclick="getCurrentLocation()">
                <i class="fas fa-location-crosshairs"></i>
                Use Current Location
            </button>
            <div id="locationStatus" class="location-status">Location not selected</div>
            <input type="hidden" id="userLatitude">
            <input type="hidden" id="userLongitude">
            <input type="hidden" id="userAddress">
        </div>
        
        <div class="manual-location" style="margin-top: 1rem;">
            <label class="form-label" for="manualAddress">Or Enter Address Manually</label>
            <textarea id="manualAddress" class="form-input" placeholder="Enter your complete address..." rows="3"></textarea>
        </div>
    </div>
    
    <div class="order-summary">
        <h4>Order Summary</h4>
        <div class="summary-item">
            <span>Material:</span>
            <span id="summaryMaterial">-</span>
        </div>
        <div class="summary-item">
            <span>Weight:</span>
            <span id="summaryWeight">-</span>
        </div>
        <div class="summary-item">
            <span>Photos:</span>
            <span id="summaryPhotos">0</span>
        </div>
    </div>
    
    <div class="form-navigation">
        <button type="button" class="back-btn" onclick="showStep(3)">Back</button>
        <button type="button" class="confirm-order-btn" onclick="confirmOrder()">Confirm Order</button>
    </div>
</div>
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


<!-- Households & Businesses Section -->
<section class="audience-section">
    <div class="audience-container">
        <div class="audience-header">
            <h2 class="audience-title">Households & Businesses Have Different Needs</h2>
            <p class="audience-subtitle">— We Serve Both!</p>
        </div>
        
        <div class="audience-grid">
            <!-- Households Card -->
            <div class="audience-card households-card">
                <div class="card-content">
                    <div class="card-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="card-title">For Households</h3>
                    <ul class="card-features">
                        <li class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Flexible On-Demand Pickup at Your Door</span>
                        </li>
                        <li class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digital Weighing & Instant Confirmation</span>
                        </li>
                        <li class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Safe & Verified Pickup Team</span>
                        </li>
                    </ul>
                </div>
                <div class="card-image">
                    <img src="assets/images/household-recycle.webp" alt="Household Recycling" class="audience-image">
                    <div class="image-overlay"></div>
                </div>
            </div>
            
            <!-- Businesses Card -->
            <div class="audience-card businesses-card">
                <div class="card-content">
                    <div class="card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="card-title">For Businesses</h3>
                    <ul class="card-features">
                        <li class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Proper Billing & Documentation</span>
                        </li>
                        <li class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Monthly Recycling Reports</span>
                        </li>
                        <li class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Competitive Corporate Scrap Pricing</span>
                        </li>
                    </ul>
                </div>
                <div class="card-image">
                    <img src="assets/images/business-recycle.webp" alt="Business Recycling" class="audience-image">
                    <div class="image-overlay"></div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="testimonials-container">
        <div class="testimonials-header">
            <h2 class="testimonials-title">What Our Customers Say</h2>
            <p class="testimonials-subtitle">Join thousands of satisfied customers who have transformed their scrap into cash</p>
        </div>
        
        <div class="testimonials-grid">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">"Scrap Venture made selling my old electronics so easy! They picked up from my home in Mirpur and paid me instantly. Highly recommended!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="assets/images/user1.jpg" alt="Rahim Ahmed">
                    </div>
                    <div class="author-info">
                        <h4 class="author-name">Rahim Ahmed</h4>
                        <p class="author-location">Mirpur, Dhaka</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">"As a small shop owner, I accumulate lots of cardboard and plastic waste. Scrap Venture gives me the best prices and regular pickups. Great service!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="assets/images/user2.jpg" alt="Fatima Begum">
                    </div>
                    <div class="author-info">
                        <h4 class="author-name">Fatima Begum</h4>
                        <p class="author-location">Uttara, Dhaka</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="testimonial-text">"I was skeptical at first, but their team was professional and paid fairly for my metal scraps. Will definitely use again!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="assets/images/user3.jpg" alt="Karim Hossain">
                    </div>
                    <div class="author-info">
                        <h4 class="author-name">Karim Hossain</h4>
                        <p class="author-location">Gulshan, Dhaka</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="testimonials-stats">
            <div class="stat-item">
                <div class="stat-number">10,000+</div>
                <div class="stat-label">Happy Customers</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">4.8/5</div>
                <div class="stat-label">Average Rating</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">50+ Tons</div>
                <div class="stat-label">Recycled Monthly</div>
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
                    <img src="assets/images/green home.jpg" alt="Green Bangladesh">
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
let selectedMaterial = '';
let photos = [];

// Form step navigation
function showStep(stepNumber) {
    console.log('Moving to step:', stepNumber);
    
    // Hide all steps
    document.querySelectorAll('.form-step').forEach(step => {
        step.classList.remove('active');
    });
    
    // Show selected step
    document.getElementById(`step${stepNumber}`).classList.add('active');
    
    // Update progress indicator
    updateProgress(stepNumber);
    
    // If going to step 4, update order summary
    if (stepNumber === 4) {
        updateOrderSummary();
        
        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('pickupDate').min = today;
        
        // Set default date to tomorrow
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        document.getElementById('pickupDate').value = tomorrow.toISOString().split('T')[0];
    }
}

function updateProgress(currentStep) {
    const progressSteps = document.querySelectorAll('.progress-step');
    if (progressSteps.length > 0) {
        progressSteps.forEach((step, index) => {
            if (index + 1 <= currentStep) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
        });
    }
}

// Material selection
function selectMaterial(material) {
    selectedMaterial = material;
    document.getElementById('selectedMaterial').value = material;
    
    // Update UI
    document.querySelectorAll('.material-option').forEach(option => {
        option.classList.remove('selected');
    });
    event.currentTarget.classList.add('selected');
}

// Photo handling functions
function takePicture() {
    const input = document.createElement('input');
    input.type = 'file';
    input.accept = 'image/*';
    input.capture = 'environment';
    input.onchange = (e) => handlePhotoSelection(e);
    input.click();
}

function chooseFromGallery() {
    const input = document.createElement('input');
    input.type = 'file';
    input.accept = 'image/*';
    input.multiple = true;
    input.onchange = (e) => handlePhotoSelection(e);
    input.click();
}

function cancelPhotos() {
    photos = [];
    updatePhotoPreview();
}

function handlePhotoSelection(event) {
    const files = event.target.files;
    if (files) {
        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    photos.push(e.target.result);
                    updatePhotoPreview();
                };
                reader.readAsDataURL(file);
            }
        });
    }
}

function removePhoto(index) {
    photos.splice(index, 1);
    updatePhotoPreview();
}

function updatePhotoPreview() {
    const preview = document.getElementById('photoPreview');
    preview.innerHTML = '';
    
    photos.forEach((photo, index) => {
        const item = document.createElement('div');
        item.className = 'photo-preview-item';
        item.innerHTML = `
            <img src="${photo}" alt="Preview ${index + 1}">
            <button type="button" class="remove-photo" onclick="removePhoto(${index})">
                <i class="fas fa-times"></i>
            </button>
        `;
        preview.appendChild(item);
    });
}

// Location Services
function getCurrentLocation() {
    const locationBtn = document.querySelector('.location-btn');
    const locationStatus = document.getElementById('locationStatus');
    
    // Show loading state
    locationBtn.disabled = true;
    locationBtn.innerHTML = '<i class="fas fa-spinner loading-spinner"></i> Getting Location...';
    locationStatus.className = 'location-status loading';
    locationStatus.textContent = 'Getting your location...';
    
    if (!navigator.geolocation) {
        locationStatus.className = 'location-status error';
        locationStatus.textContent = 'Geolocation is not supported by your browser';
        locationBtn.disabled = false;
        locationBtn.innerHTML = '<i class="fas fa-location-crosshairs"></i> Use Current Location';
        return;
    }
    
    navigator.geolocation.getCurrentPosition(
        function(position) {
            const lat = position.coords.latitude;
            const lng = position.coords.longitude;
            
            document.getElementById('userLatitude').value = lat;
            document.getElementById('userLongitude').value = lng;
            
            getAddressFromCoordinates(lat, lng);
        },
        function(error) {
            locationBtn.disabled = false;
            locationBtn.innerHTML = '<i class="fas fa-location-crosshairs"></i> Use Current Location';
            
            let errorMessage = 'Unable to get your location. ';
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    errorMessage += 'Please allow location access and try again.';
                    break;
                case error.POSITION_UNAVAILABLE:
                    errorMessage += 'Location information is unavailable.';
                    break;
                case error.TIMEOUT:
                    errorMessage += 'Location request timed out.';
                    break;
                default:
                    errorMessage += 'An unknown error occurred.';
                    break;
            }
            
            locationStatus.className = 'location-status error';
            locationStatus.textContent = errorMessage;
        },
        {
            enableHighAccuracy: true,
            timeout: 10000,
            maximumAge: 60000
        }
    );
}

function getAddressFromCoordinates(lat, lng) {
    const locationStatus = document.getElementById('locationStatus');
    
    // Show more detailed location fetching
    locationStatus.className = 'location-status loading';
    locationStatus.textContent = 'Getting exact address...';
    
    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&zoom=18&addressdetails=1`)
        .then(response => response.json())
        .then(data => {
            const address = data.display_name;
            document.getElementById('userAddress').value = address;
            document.getElementById('manualAddress').value = address;
            
            // Get more specific address components
            const addressParts = [];
            if (data.address.road) addressParts.push(data.address.road);
            if (data.address.neighbourhood) addressParts.push(data.address.neighbourhood);
            if (data.address.suburb) addressParts.push(data.address.suburb);
            if (data.address.city) addressParts.push(data.address.city);
            
            const specificLocation = addressParts.length > 0 ? addressParts.join(', ') : 'Your exact location';
            
            locationStatus.className = 'location-status success';
            locationStatus.textContent = `📍 ${specificLocation}`;
            
            const locationBtn = document.querySelector('.location-btn');
            locationBtn.disabled = false;
            locationBtn.innerHTML = '<i class="fas fa-check"></i> Location Found';
            
            setTimeout(() => {
                locationBtn.innerHTML = '<i class="fas fa-location-crosshairs"></i> Use Current Location';
            }, 3000);
        })
        .catch(error => {
            console.error('Geocoding error:', error);
            // Fallback to coordinates if address fails
            const coordinatesLocation = `Lat: ${lat.toFixed(6)}, Lng: ${lng.toFixed(6)}`;
            document.getElementById('userAddress').value = coordinatesLocation;
            document.getElementById('manualAddress').value = coordinatesLocation;
            
            locationStatus.className = 'location-status success';
            locationStatus.textContent = `📍 Location: ${coordinatesLocation}`;
            
            const locationBtn = document.querySelector('.location-btn');
            locationBtn.disabled = false;
            locationBtn.innerHTML = '<i class="fas fa-location-crosshairs"></i> Use Current Location';
        });
}

// Update Order Summary
function updateOrderSummary() {
    document.getElementById('summaryMaterial').textContent = 
        document.getElementById('selectedMaterial').value || '-';
    document.getElementById('summaryWeight').textContent = 
        document.getElementById('weight').value ? document.getElementById('weight').value + ' kg' : '-';
    document.getElementById('summaryPhotos').textContent = photos.length;
}

// Final Order Confirmation
function confirmOrder() {
    const pickupDate = document.getElementById('pickupDate').value;
    const pickupTime = document.getElementById('pickupTime').value;
    const manualAddress = document.getElementById('manualAddress').value;
    const userLatitude = document.getElementById('userLatitude').value;
    const userLongitude = document.getElementById('userLongitude').value;
    
    // Validation
    if (!pickupDate) {
        showValidationError('Please select a pickup date.');
        return;
    }
    
    if (!pickupTime) {
        showValidationError('Please select a pickup time.');
        return;
    }
    
    if (!manualAddress && (!userLatitude || !userLongitude)) {
        showValidationError('Please provide your pickup location or use current location.');
        return;
    }
    
    // Get all form data
    const formData = {
        phone: `+880${document.getElementById('mobile').value}`,
        material: document.getElementById('selectedMaterial').value,
        weight: parseFloat(document.getElementById('weight').value),
        photos: photos.length,
        date: pickupDate,
        time: pickupTime,
        address: manualAddress || document.getElementById('userAddress').value,
        coordinates: {
            lat: userLatitude ? parseFloat(userLatitude) : null,
            lng: userLongitude ? parseFloat(userLongitude) : null
        }
    };
    
    console.log('Sending data to server:', formData);
    
    // Send data to PHP backend
    submitPickupRequest(formData);
}

// Function to submit data to PHP backend
function submitPickupRequest(formData) {
    // Show loading state
    const confirmBtn = document.querySelector('.confirm-order-btn');
    const originalText = confirmBtn.innerHTML;
    confirmBtn.innerHTML = '<i class="fas fa-spinner loading-spinner"></i> Submitting...';
    confirmBtn.disabled = true;
    
    fetch('process_pickup.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Server response:', data);
            // Show success animation with server data
            showSuccessAnimation(formData, data.request_id);
        } else {
            throw new Error(data.message || 'Failed to submit request');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showValidationError('Failed to submit pickup request. Please try again. Error: ' + error.message);
        
        // Reset button
        confirmBtn.innerHTML = originalText;
        confirmBtn.disabled = false;
    });
    
    // Show success animation directly (no alert)
    showSuccessAnimation(formData);
}

function showValidationError(message) {
    // Create a temporary error message
    const errorDiv = document.createElement('div');
    errorDiv.style.cssText = `
        background: #fee2e2;
        color: #dc2626;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        border: 1px solid #fecaca;
        text-align: center;
        font-weight: 600;
    `;
    errorDiv.textContent = message;
    
    const form = document.getElementById('pickupForm');
    form.insertBefore(errorDiv, form.firstChild);
    
    // Remove error message after 3 seconds
    setTimeout(() => {
        errorDiv.remove();
    }, 3000);
}

function showSuccessAnimation(formData, requestId = null) {
    const pickupSection = document.querySelector('.pickup-section');
    
    // Format the date for display
    const formattedDate = new Date(formData.date).toLocaleDateString('en-US', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
    
    // Format the time for display
    const [hours, minutes] = formData.time.split(':');
    const formattedTime = new Date(2000, 0, 1, hours, minutes).toLocaleTimeString('en-US', {
        hour: 'numeric',
        minute: '2-digit',
        hour12: true
    });
    
    let requestInfo = '';
    if (requestId) {
        requestInfo = `
            <div style="background: #dbeafe; border-radius: 8px; padding: 1rem; margin: 1rem 0; border: 2px solid #3b82f6;">
                <div style="font-weight: 600; color: #1e40af; margin-bottom: 0.5rem;">
                    <i class="fas fa-ticket-alt"></i> Request ID: #${requestId}
                </div>
                <div style="font-size: 0.9rem; color: #374151;">
                    Use this ID for any inquiries
                </div>
            </div>
        `;
    }
    
    pickupSection.innerHTML = `
        <div class="success-animation" style="text-align: center; padding: 2rem;">
            <div style="font-size: 4rem; color: #269C26; margin-bottom: 1rem;">✅</div>
            <h2 style="color: #065f46; margin-bottom: 1.5rem; font-size: 2rem;">Order Confirmed!</h2>
            
            ${requestInfo}
            
            <div style="background: #f0f9f0; border-radius: 12px; padding: 1.5rem; margin: 1.5rem 0; border: 2px solid #dcfce7;">
                <h3 style="color: #065f46; margin-bottom: 1rem; border-bottom: 2px solid #269C26; padding-bottom: 0.5rem;">Order Details</h3>
                
                <div style="text-align: left; color: #374151;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Material:</span>
                        <span>${formData.material}</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Weight:</span>
                        <span>${formData.weight} kg</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Photos:</span>
                        <span>${formData.photos}</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Date:</span>
                        <span>${formattedDate}</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Time:</span>
                        <span>${formattedTime}</span>
                    </div>
                    <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #dcfce7;">
                        <div style="font-weight: 600; margin-bottom: 0.25rem;">Pickup Location:</div>
                        <div style="font-size: 0.9rem; color: #4b5563;">${formData.address}</div>
                    </div>
                </div>
            </div>
            
            <p style="color: #4b5563; margin-bottom: 0.5rem; font-weight: 600;">
                We'll contact you at <span style="color: #269C26;">${formData.phone}</span>
            </p>
            <p style="color: #6b7280; margin-bottom: 2rem; font-size: 0.9rem;">
                Our team will call you 30 minutes before pickup
            </p>
            
            <button onclick="location.reload()" class="next-btn" style="background: #269C26; margin-bottom: 1rem;">
                Schedule Another Pickup
            </button>
            <br>
            <button onclick="printOrder()" class="back-btn" style="background: #6b7280;">
                <i class="fas fa-print"></i> Print Order Summary
            </button>
        </div>
    `;
}

// Optional: Print function
function printOrder() {
    window.print();
}

function resetForm() {
    document.getElementById('pickupForm').reset();
    photos = [];
    selectedMaterial = '';
    updatePhotoPreview();
    document.querySelectorAll('.material-option').forEach(option => {
        option.classList.remove('selected');
    });
    document.getElementById('locationStatus').className = 'location-status';
    document.getElementById('locationStatus').textContent = 'Location not selected';
    const locationBtn = document.querySelector('.location-btn');
    locationBtn.disabled = false;
    locationBtn.innerHTML = '<i class="fas fa-location-crosshairs"></i> Use Current Location';
    showStep(1);
}

// Initialize everything when page loads
document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded - initializing form');
    
    // Add progress indicator
    const pickupSection = document.querySelector('.pickup-section');
    const sectionTitle = pickupSection.querySelector('.section-title');
    
    if (!pickupSection.querySelector('.form-progress')) {
        const progressHTML = `
            <div class="form-progress">
                <div class="progress-step active">1</div>
                <div class="progress-step">2</div>
                <div class="progress-step">3</div>
                <div class="progress-step">4</div>
            </div>
        `;
        sectionTitle.insertAdjacentHTML('afterend', progressHTML);
    }
    
    // Remove the old form submission handler that was causing issues
    const form = document.getElementById('pickupForm');
    form.onsubmit = function(e) {
        e.preventDefault();
        console.log('Form submission prevented - using step navigation instead');
        return false;
    };
    
    // Add animations
    initializeAnimations();
});

// Animation functions
function initializeAnimations() {
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
    
    // Animate step boxes
    const stepBoxes = document.querySelectorAll('.step-box');
    stepBoxes.forEach(box => {
        box.style.opacity = '0';
        box.style.transform = 'translateY(20px)';
        box.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(box);
    });
    
    // Animate benefit boxes
    const benefitBoxes = document.querySelectorAll('.benefit-box');
    benefitBoxes.forEach(box => {
        box.style.opacity = '0';
        box.style.transform = 'translateY(20px)';
        box.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(box);
    });
    
    // Animate blog cards
    const blogCards = document.querySelectorAll('.blog-card');
    blogCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease, box-shadow 0.3s ease';
        observer.observe(card);
    });
    
    // Animate testimonials
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    const statItems = document.querySelectorAll('.stat-item');
    
    testimonialCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease, box-shadow 0.3s ease';
        observer.observe(card);
    });
    
    statItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(item);
    });
    
    // Animate audience cards
    const audienceCards = document.querySelectorAll('.audience-card');
    audienceCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease, box-shadow 0.3s ease';
        observer.observe(card);
    });
    
    // Image fallback
    const images = document.querySelectorAll('.audience-image');
    images.forEach(img => {
        img.addEventListener('error', function() {
            this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgZmlsbD0iI2Y4ZmFmYyIvPjx0ZXh0IHg9IjIwMCIgeT0iMTUwIiBmb250LWZhbWlseT0iQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMTgiIGZpbGw9IiM2NDc0OGIiIHRleHQtYW5jaG9yPSJtaWRkbGUiPkltYWdlIE5vdCBGb3VuZDwvdGV4dD48L3N2Zz4=';
        });
    });
}



// Validation functions
function validateStep1() {
    const phoneNumber = document.getElementById('mobile').value;
    
    if (!/^1[0-9]{9}$/.test(phoneNumber)) {
        showValidationError('Please enter a valid 10-digit Bangladeshi mobile number (without country code).');
        return;
    }
    
    showStep(2);
}

function validateStep2() {
    const material = document.getElementById('selectedMaterial').value;
    
    if (!material) {
        showValidationError('Please select a material type.');
        return;
    }
    
    showStep(3);
}

function validateStep3() {
    const weight = document.getElementById('weight').value;
    
    if (!weight || weight <= 0) {
        showValidationError('Please enter a valid weight (minimum 0.1 kg).');
        return;
    }
    
    showStep(4);
}

function showValidationError(message) {
    const existingErrors = document.querySelectorAll('.validation-error');
    existingErrors.forEach(error => error.remove());
    
    const errorDiv = document.createElement('div');
    errorDiv.className = 'validation-error';
    errorDiv.style.cssText = `
        background: #fee2e2;
        color: #dc2626;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        border: 1px solid #fecaca;
        text-align: center;
        font-weight: 600;
        animation: fadeIn 0.3s ease-in;
    `;
    errorDiv.textContent = message;
    
    const currentStep = document.querySelector('.form-step.active');
    currentStep.insertBefore(errorDiv, currentStep.firstChild);
    
    setTimeout(() => {
        if (errorDiv.parentNode) {
            errorDiv.style.animation = 'fadeOut 0.3s ease-out';
            setTimeout(() => errorDiv.remove(), 300);
        }
    }, 4000);
}


// Real-time validation for phone number
document.getElementById('mobile').addEventListener('input', function(e) {
    const phoneNumber = e.target.value;
    const phoneInput = document.querySelector('.phone-input');
    
    if (/^1[0-9]{9}$/.test(phoneNumber)) {
        phoneInput.style.borderColor = '#10b981';
    } else {
        phoneInput.style.borderColor = phoneNumber.length > 0 ? '#ef4444' : '#e5e7eb';
    }
});

// Real-time validation for weight
document.getElementById('weight').addEventListener('input', function(e) {
    const weight = e.target.value;
    const weightInput = document.getElementById('weight');
    
    if (weight > 0) {
        weightInput.style.borderColor = '#10b981';
    } else {
        weightInput.style.borderColor = weight.length > 0 ? '#ef4444' : '#e5e7eb';
    }
});

// Real-time validation for material selection
function selectMaterial(material) {
    selectedMaterial = material;
    document.getElementById('selectedMaterial').value = material;
    
    // Update UI
    document.querySelectorAll('.material-option').forEach(option => {
        option.classList.remove('selected');
    });
    event.currentTarget.classList.add('selected');
    
    // Remove any material selection error border
    const materialOptions = document.querySelector('.material-options');
    materialOptions.style.border = 'none';
}

</script>