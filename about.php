<?php
// about.php - Professional About Page with Single Half-Slider for Flylense
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="FlyLensee Media Production">
    <meta name="description" content="Flylense is a leading media production company in Hyderabad, specializing in creative video production, photography, branding, and digital storytelling.">
    <meta name="keywords" content="Flylense, Media Production, Video Production Hyderabad, Photography, Branding, Creative Studio">
    <title>About Us | Flylense - Media Production Company</title>
    <style>
        /* ===== GLOBAL RESET & TYPOGRAPHY ===== */
        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            font-family: "Poppins", sans-serif;
            color: white;
            margin: 0;
            letter-spacing: 0.5px;
        }
        body { background: #000; }

        /* ===== HEADER ===== */
        #header .header-inner, #header #header-wrap {
            height: 80px;
            background-color: black;
            left: 0;
            right: 0;
            transition: all .4s ease-in-out;
        }
        #mainMenu nav > ul > li > a {
            position: relative;
            font-family: "Poppins", sans-serif;
            padding: 10px 12px;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.6px;
            color: #fff;
            border-radius: 0;
            transition: all .3s ease;
            line-height: normal;
        }
        #mainMenu nav > ul > li > a:hover { color: #56c473; }

        /* ===== HALF SLIDER - SINGLE SLIDE WITH BACKGROUND IMAGE ===== */
        .half-slider-wrapper {
            position: relative;
            width: 100%;
            height: 50vh;
            min-height: 320px;
            max-height: 500px;
            overflow: hidden;
            background: #000;
            padding: 10px;
        }
        .half-slider {
            display: flex;
            height: 100%;
            width: 100%;
            gap: 0;
        }
        .half-slide {
            flex: 1;
            position: relative;
            overflow: hidden;
            border-radius: 16px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .half-slide::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.4) 100%);
            z-index: 1;
        }
        .half-slide .slide-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
            padding: 40px;
            max-width: 800px;
        }
        .half-slide .slide-content .tag {
            display: inline-block;
            background: rgba(86, 196, 115, 0.15);
            color: #006ded;
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 4px;
            text-transform: uppercase;
            padding: 6px 20px;
            border-radius: 30px;
            margin-bottom: 20px;
            border: 1px solid #006ded;
        }
        .half-slide .slide-content h1 {
            font-size: 4rem;
            font-weight: 700;
            color: #fff;
            text-shadow: 0 4px 40px rgba(0,0,0,0.8);
            margin-bottom: 15px;
            letter-spacing: 4px;
        }
        .half-slide .slide-content .line {
            width: 80px;
            height: 3px;
            background: #0066d9;
            margin: 15px auto;
            border-radius: 2px;
        }
        .half-slide .slide-content .subtitle {
            font-size: 1.2rem;
            color: #ddd;
            font-weight: 300;
            letter-spacing: 8px;
            text-transform: uppercase;
            text-shadow: 0 2px 20px rgba(0,0,0,0.6);
        }

        /* ===== MOBILE SLIDER ===== */
        .half-slider-mobile {
            display: none;
            position: relative;
            width: 100%;
            height: 45vh;
            min-height: 280px;
            overflow: hidden;
            background: #000;
            padding: 8px;
        }
        .half-slider-mobile .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 30px 25px;
            border-radius: 16px;
            opacity: 0;
            transition: opacity 0.8s ease;
        }
        .half-slider-mobile .slide.active {
            opacity: 1;
        }
        .half-slider-mobile .slide::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.4) 100%);
            z-index: 1;
            border-radius: 16px;
        }
        .half-slider-mobile .slide .slide-content {
            position: relative;
            z-index: 2;
            color: #fff;
        }
        .half-slider-mobile .slide .slide-content .tag {
            display: inline-block;
            background: rgba(86, 196, 115, 0.15);
            color: #56c473;
            font-size: 0.6rem;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            padding: 4px 16px;
            border-radius: 30px;
            margin-bottom: 15px;
            border: 1px solid rgba(86, 196, 115, 0.2);
        }
        .half-slider-mobile .slide .slide-content h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #fff;
            text-shadow: 0 4px 40px rgba(0,0,0,0.8);
            margin-bottom: 10px;
            letter-spacing: 3px;
        }
        .half-slider-mobile .slide .slide-content .line {
            width: 60px;
            height: 3px;
            background: #56c473;
            margin: 12px auto;
            border-radius: 2px;
        }
        .half-slider-mobile .slide .slide-content .subtitle {
            font-size: 0.85rem;
            color: #ddd;
            font-weight: 300;
            letter-spacing: 5px;
            text-transform: uppercase;
        }
        .slider-dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 5;
        }
        .slider-dots .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255,255,255,0.15);
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            padding: 0;
        }
        .slider-dots .dot.active {
            background: #56c473;
            width: 30px;
            border-radius: 4px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1024px) {
            .half-slide .slide-content h1 { font-size: 3rem; }
            .half-slide .slide-content .subtitle { font-size: 1rem; letter-spacing: 5px; }
        }
        @media (max-width: 768px) {
            .half-slider-wrapper { display: none; }
            .half-slider-mobile { display: block; }
        }

        /* ===== ABOUT CONTENT ===== */
        .background-black { background-color: #000; color: #fff; }
        .text-white { color: white; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 15px; }
        .text-center { text-align: center; }
        .p-t-60 { padding-top: 60px; }
        .p-b-60 { padding-bottom: 60px; }
        .p-t-80 { padding-top: 80px; }
        .p-b-80 { padding-bottom: 80px; }
        .services-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 50px;
            color: #fff;
        }
        .about-card {
            background: #111;
            border-radius: 1.25rem;
            padding: 40px 30px;
            transition: 0.3s ease-in-out;
            height: 100%;
            border: 1px solid #222;
        }
        .about-card:hover { transform: translateY(-8px); border-color: #56c473; box-shadow: 0 15px 30px rgba(0,0,0,0.5); }
        .about-icon { font-size: 2.5rem; color: #56c473; margin-bottom: 20px; }
        .about-title { font-weight: 600; font-size: 1.3rem; margin-bottom: 10px; color: #fff; }
        .about-text { font-size: 0.98rem; line-height: 1.8; color: #aaa; }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }
        .team-member {
            background: #111;
            border-radius: 16px;
            padding: 30px 20px;
            text-align: center;
            border: 1px solid #222;
            transition: 0.3s;
        }
        .team-member:hover { border-color: #006ef4; transform: scale(1.02); }
        .team-member img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid #006ef4;
        }
        .team-member h4 { color: #fff; font-size: 1.2rem; margin-bottom: 5px; }
        .team-member .role { color:#006ef4; font-size: 0.9rem; font-weight: 500; }
        .team-member p { color: #aaa; font-size: 0.9rem; margin-top: 10px; }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .value-item {
            background: #111;
            padding: 30px 20px;
            border-radius: 12px;
            text-align: center;
            border: 1px solid #222;
            transition: 0.3s;
        }
        .value-item:hover { border-color: #006ef4; }
        .value-item .num { font-size: 2.5rem; font-weight: 700; color: #006ef4; }
        .value-item h5 { color: #fff; margin-top: 10px; font-size: 1.1rem; }
        .value-item p { color: #aaa; font-size: 0.9rem; }

        .about-story {
            background: #0a0a0a;
            border-radius: 20px;
            padding: 50px;
            border-left: 5px solid #0066d9;
            margin: 40px 0;
        }
        .about-story p { font-size: 1.1rem; line-height: 1.9; color: #ccc; }

        .btn-about {
            background: #006ef4;
            color: #fff;
            border: none;
            padding: 14px 40px;
            border-radius: 50px;
            font-weight: 600;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-about:hover { background: #fff; color: #000; transform: scale(1.05); }

        /* ===== FAQS SECTION ===== */
        .faq-section {
            background: #0a0a0a;
            padding: 80px 0;
        }
        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }
        .faq-item {
            background: #111;
            border-radius: 12px;
            margin-bottom: 15px;
            border: 1px solid #1a1a1a;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .faq-item:hover {
            border-color: #006ef4;
        }
        .faq-question {
            padding: 20px 30px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            user-select: none;
        }
        .faq-question h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #fff;
            margin: 0;
            transition: color 0.3s ease;
        }
        .faq-item.active .faq-question h3 {
            color: #006ef4;
        }
        .faq-question .faq-icon {
            font-size: 1.5rem;
            color: #006ef4;
            transition: transform 0.3s ease;
            flex-shrink: 0;
            margin-left: 15px;
            font-weight: 300;
        }
        .faq-item.active .faq-question .faq-icon {
            transform: rotate(45deg);
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), padding 0.3s ease;
        }
        .faq-item.active .faq-answer {
            max-height: 500px;
        }
        .faq-answer .faq-answer-inner {
            padding: 0 30px 25px 30px;
            color: #aaa;
            line-height: 1.8;
            font-size: 0.98rem;
        }
        .faq-answer .faq-answer-inner p {
            margin: 0;
        }
        .faq-answer .faq-answer-inner ul {
            margin: 10px 0 0 20px;
            color: #aaa;
        }
        .faq-answer .faq-answer-inner ul li {
            margin-bottom: 5px;
        }
        .faq-answer .faq-answer-inner strong {
            color: #ddd;
        }

        /* ===== FOOTER & SOCIAL ===== */
        .social-icons .icon { width: 60px; object-fit: contain; }
        .inter, .inters { position: fixed; bottom: 50px; z-index: 1000; }
        .inter { right: 20px; }
        .inters { left: 20px; }
        @media (max-width: 768px) {
            .social-icons .icon { width: 40px; }
            .inter, .inters { bottom: 60px; }
            .about-story { padding: 30px; }
            .team-grid { gap: 20px; }
            .faq-question { padding: 15px 20px; }
            .faq-question h3 { font-size: 0.95rem; }
            .faq-answer .faq-answer-inner { padding: 0 20px 20px 20px; font-size: 0.9rem; }
        }
        footer { background-color: #000; padding: 50px 0; color: #fff; }
        footer a { color: #ccc; margin: 0 10px; text-decoration: none; }
        footer a:hover { color: #006ef4; }

        /* Page title under slider */
        .page-title-section {
            background: #000;
            padding: 30px 0 20px;
            border-bottom: 1px solid #1a1a1a;
        }
        .page-title-section h1 {
            font-size: 2.6rem;
            font-weight: 700;
            color: #fff;
        }
        .page-title-section p {
            color: #aaa;
            font-size: 1.15rem;
            max-width: 650px;
            margin: 8px auto 0;
        }
    </style>
</head>
<body>
    <div class="body-inner">
        <!-- ===== HEADER ===== -->
        <?php include "header.php"; ?> 

        <!-- ===== HALF SLIDER - SINGLE SLIDE WITH BACKGROUND IMAGE (Desktop) ===== -->
        <div class="half-slider-wrapper">
            <div class="half-slider">
                <div class="half-slide" style="background-image: url('img/slider/4.png');">
                    <div class="slide-content">
                        <span class="tag">Welcome to Flylense</span>
                        <h1>About Us</h1>
                        <div class="line"></div>
                        <span class="subtitle">Crafting Stories That Inspire &amp; Elevate Brands</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== MOBILE SLIDER ===== -->
        <div class="half-slider-mobile" id="mobileSlider">
            <div class="slide active" style="background-image: url('img/slider/4.png');">
                <div class="slide-content">
                    <span class="tag">Welcome to Flylense</span>
                    <h1>About Us</h1>
                    <div class="line"></div>
                    <span class="subtitle">Crafting Stories That Inspire &amp; Elevate Brands</span>
                </div>
            </div>
            <div class="slider-dots" id="sliderDots">
                <button class="dot active" data-index="0"></button>
            </div>
        </div>

        <!-- ===== PAGE TITLE ===== -->
        <!-- <div class="page-title-section">
            <div class="container text-center">
                <h1>About Flylense</h1>
                <p>Crafting stories that inspire, engage, and elevate brands.</p>
            </div>
        </div> -->

        <!-- ===== OUR STORY ===== -->
        <section class="background-black p-t-60 p-b-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="img/1.png" alt="About Flylense" class="img-fluid rounded" style="border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
                    </div>
                    <div class="col-lg-6">
                        <h2 style="color: #fff; font-size: 2.2rem; margin-bottom: 20px;">Who We Are</h2>
                        <div class="about-story" style="border-left-color: #0066d9; background: transparent; padding: 0 0 0 30px; margin: 0;">
                            <p style="color: #ddd; font-size: 1.05rem;">
                                <strong>Flylense</strong> is a premier media production company based in Hyderabad, India. 
                                We are a collective of visionary filmmakers, photographers, designers, and digital strategists 
                                who are passionate about visual storytelling. Our mission is to transform ideas into compelling 
                                cinematic experiences that resonate with audiences and drive real impact for brands.
                            </p>
                            <p style="color: #ccc; margin-top: 15px;">
                                From concept to completion, we handle every aspect of production — scripting, direction, 
                                cinematography, editing, and digital distribution. Whether it's a commercial ad film, 
                                a corporate documentary, or a social media campaign, we bring the same level of dedication 
                                and creativity to every project.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CORE VALUES ===== -->
        <section style="background: #0a0a0a; padding: 80px 0;">
            <div class="container">
                <h2 class="services-title">Our Core Values</h2>
                <div class="values-grid">
                    <div class="value-item">
                        <div class="num">01</div>
                        <h5>Creativity</h5>
                        <p>We push boundaries to deliver fresh, innovative ideas that stand out.</p>
                    </div>
                    <div class="value-item">
                        <div class="num">02</div>
                        <h5>Excellence</h5>
                        <p>We are committed to the highest quality in every frame and every project.</p>
                    </div>
                    <div class="value-item">
                        <div class="num">03</div>
                        <h5>Integrity</h5>
                        <p>We build trust through transparency, honesty, and reliability.</p>
                    </div>
                    <div class="value-item">
                        <div class="num">04</div>
                        <h5>Collaboration</h5>
                        <p>We work closely with clients to bring their unique vision to life.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== OUR TEAM ===== -->
        <section class="background-black p-t-60 p-b-60">
            <div class="container">
                <h2 class="services-title">Meet the Team</h2>
                <p style="text-align: center; color: #aaa; max-width: 700px; margin: -20px auto 40px;">The creative minds behind Flylense — each one bringing unique expertise and passion to the table.</p>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="img/3.png" alt="Founder">
                        <h4>Rajesh Kumar</h4>
                        <div class="role">Founder & Creative Director</div>
                        <p>With over 15 years of experience in film and advertising, Rajesh leads the creative vision at Flylense.</p>
                    </div>
                    <div class="team-member">
                        <img src="img/2.png" alt="Co-Founder">
                        <h4>Priya Sharma</h4>
                        <div class="role">Co-Founder & Head of Production</div>
                        <p>Priya is a dynamic producer with a keen eye for detail, overseeing all production workflows.</p>
                    </div>
                    <div class="team-member">
                        <img src="img/3.png" alt="Cinematographer">
                        <h4>Vikram Reddy</h4>
                        <div class="role">Director of Photography</div>
                        <p>Vikram's cinematography brings depth and emotion to every frame with expert lighting and composition.</p>
                    </div>
                    <div class="team-member">
                        <img src="img/2.png" alt="Editor">
                        <h4>Ananya Desai</h4>
                        <div class="role">Lead Editor & Post-Production</div>
                        <p>Ananya crafts the final narrative with precision, turning raw footage into impactful stories.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FOUNDERS / VISION ===== -->
        <section style="background: #0a0a0a; padding: 80px 0 40px 0;">
            <div class="container">
                <h2 class="services-title">The Vision Behind Flylense</h2>
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                        <img src="img/4.png" alt="Founders" class="img-fluid rounded shadow" style="max-width: 450px; border-radius: 20px;">
                    </div>
                    <div class="col-lg-6">
                        <p style="color: #ccc; font-size: 1.1rem; line-height: 1.9;">
                            At Flylense Media Production, everything starts with a bold vision. The founders came together with a shared passion for visual storytelling, a drive for innovation, and a deep understanding of the media landscape. Their combined leadership and dedication have shaped Flylense into a creative powerhouse known for delivering high-quality production across film, digital, and advertising.
                            <br><br>
                            With a clear mission to elevate content through cinematic excellence, the founders continue to lead the company with creativity, integrity, and a commitment to client success.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FAQS SECTION ===== -->
        <section class="faq-section">
            <div class="container">
                <h2 class="services-title">Frequently Asked Questions</h2>
                <p style="text-align: center; color: #aaa; max-width: 700px; margin: -20px auto 50px;">Find answers to the most common questions about our services and process.</p>
                
                <div class="faq-container">
                    <!-- FAQ 1 -->
                    <div class="faq-item active">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <h3>What types of video production services do you offer?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>We offer a comprehensive range of video production services including:</p>
                                <ul>
                                    <li><strong>Commercial Ad Films</strong> – High-impact ads for TV, web, and social media</li>
                                    <li><strong>Corporate Videos</strong> – Brand stories, company culture, and promotional content</li>
                                    <li><strong>Documentaries &amp; Short Films</strong> – Cinematic storytelling with depth and emotion</li>
                                    <li><strong>Social Media Content</strong> – Reels, shorts, and engaging content for digital platforms</li>
                                    <li><strong>Aerial Drone Footage</strong> – Stunning cinematic shots from unique perspectives</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <h3>How long does a typical project take from start to finish?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>Project timelines vary based on the scope and complexity. A typical corporate video or commercial ad film takes <strong>2-4 weeks</strong> from pre-production to final delivery. Social media content and smaller projects can be completed in <strong>5-10 days</strong>. We always provide a detailed timeline during the planning phase and keep you updated throughout the process.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <h3>Do you provide scriptwriting and creative direction?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>Absolutely! We offer <strong>end-to-end creative services</strong> including scriptwriting, storyboarding, creative direction, and concept development. Our team works closely with you to understand your brand, message, and goals, then crafts a compelling narrative that resonates with your target audience. We handle everything from the initial idea to the final cut.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <h3>What is the cost of producing a video with Flylense?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>Video production costs vary based on several factors including:</p>
                                <ul>
                                    <li><strong>Video length and format</strong> – Short-form vs. long-form content</li>
                                    <li><strong>Production complexity</strong> – Location shoots, animation, special effects</li>
                                    <li><strong>Equipment and crew</strong> – Number of cameras, drones, lighting, and team members</li>
                                    <li><strong>Post-production</strong> – Editing, color grading, sound design, and motion graphics</li>
                                </ul>
                                <p style="margin-top: 10px;">We provide <strong>customized quotes</strong> based on your specific requirements. Contact us for a free consultation and we'll work within your budget to deliver exceptional results.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <h3>Can you help with digital marketing and content distribution?</h3>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>Yes! We offer <strong>integrated digital marketing services</strong> to help you maximize the reach and impact of your content. Our services include:</p>
                                <ul>
                                    <li><strong>Social Media Strategy</strong> – Content planning, scheduling, and engagement</li>
                                    <li><strong>Paid Advertising</strong> – Campaign management on Google, Facebook, Instagram, and YouTube</li>
                                    <li><strong>SEO &amp; Content Optimization</strong> – Ensuring your videos rank well and reach the right audience</li>
                                    <li><strong>Analytics &amp; Reporting</strong> – Tracking performance and optimizing for better results</li>
                                </ul>
                                <p style="margin-top: 10px;">We help you get the most out of your investment by ensuring your content reaches the right people at the right time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CTA ===== -->
        <section style="padding: 60px 0; background: #000;">
            <div class="container">
                <div style="background: linear-gradient(135deg, #006ff6, #0040c1); border-radius: 20px; box-shadow: 0 8px 20px rgba(0,111,246,0.4); padding: 50px 30px; text-align: center;">
                    <h2 style="color: #fff; font-size: 2.2rem; font-weight: 600;">Ready to Create Something Amazing?</h2>
                    <p style="color: #e0e0ff; font-size: 1.2rem; margin-bottom: 30px;">Let's collaborate and bring your vision to life.</p>
                    <a href="index.php#section-5" class="btn-about" style="background: #fff; color: #000;">Start Your Project</a>
                </div>
            </div>
        </section>

        <!-- ===== FOOTER ===== -->
        <?php include "footer.php"; ?>

        <!-- ===== FLOATING SOCIAL ICONS ===== -->
        <div class="social-icons">
            <div class="inter">
                <a href="https://www.instagram.com/flylensemediapartner/" target="_blank">
                    <img class="icon" src="img/7.png" alt="Instagram">
                </a>
            </div>
            <div class="inters">
                <a onclick="window.open('https://api.whatsapp.com/send?phone=+919989571223&text=Hi,%20I%20got%20your%20number%20from%20your%20website')" target="_blank">
                    <img class="icon" src="img/8.png" alt="WhatsApp">
                </a>
            </div>
        </div>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </div>

    <!-- ===== SCROLL TOP ===== -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <!-- ===== SCRIPTS ===== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/functions.js"></script>
    <link href="https://fonts.cdnfonts.com/css/aileron" rel="stylesheet">

    <!-- ===== FAQ TOGGLE SCRIPT ===== -->
    <script>
        function toggleFaq(element) {
            const faqItem = element.closest('.faq-item');
            const isActive = faqItem.classList.contains('active');
            
            // Close all other FAQs
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Toggle the clicked one
            if (!isActive) {
                faqItem.classList.add('active');
            }
        }
    </script>

    <!-- ===== MOBILE SLIDER AUTO-PLAY ===== -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('#mobileSlider .slide');
            const dots = document.querySelectorAll('#sliderDots .dot');
            let current = 0;
            let interval;

            function goTo(index) {
                slides.forEach((s, i) => s.classList.toggle('active', i === index));
                dots.forEach((d, i) => d.classList.toggle('active', i === index));
                current = index;
            }

            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    clearInterval(interval);
                    goTo(parseInt(this.dataset.index));
                    startAutoPlay();
                });
            });

            function startAutoPlay() {
                interval = setInterval(() => {
                    goTo((current + 1) % slides.length);
                }, 5000);
            }

            if (slides.length > 1) {
                startAutoPlay();
            }
        });
    </script>
</body>
</html>