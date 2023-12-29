<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PETRA VILLE REAL ESTATE</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src = "./script/header_script.js"></script>
</head>

<body>
    <div id="header-hero-container">
        <header>
            <div class="flex container">
                <a id="logo" href="/">PETRA VILLE REAL ESTATE</a>
                <nav>
                <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <ul id="nav-menu">
                        <li><a href="./index.php" class="active">Home</a></li>
                        <li><a href="./pages/property_listing.php" target="_blank">Properties</a></li>
                        <li><a href="./pages/about_page.php">About</a></li>
                        <li><a href="./pages/process_inquiry.php">Contact</a></li>
                        <a class="nav-inquire-btn" href="./pages/process_inquiry.php"><li class="nav-inquire">Inquire NOW</a></li>
                        <!-- email here-->
                        <li class="user-login"><?php include './functions/header_user.php'; ?></li>
                        
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                        
                        
                    </ul>
                </nav>
            </div>
        </header>
        
        <section id="hero">
            <div class="fade"></div>
            <div class="hero-text">
                <h1>Buy and Rent<br> Real Estate Properties</h1>
                <p>Discover the perfect home that suits your lifestyle. Explore a range of real estate properties available for purchase or rent, each designed to fulfill your dreams and aspirations.</p>
                <a href="./pages/property_listing.php"><button class="B-prop"> Properties</button></a>
            </div>
            
        </section>
    </div>

    <section id="how-it-works">
        <div class="container">
            <h2>How It Works</h2>
            <div class="flex">
                <div>
                    <span class="fas fa-home"></span>
                    <h4>Find a Property.</h4>
                    <p>Discover the perfect property that fits your lifestyle and preferences. Uncover a range of options tailored to meet your unique needs.</p>
                </div>

                <div>
                    <span class="fas fa-dollar-sign"></span>
                    <h4>Buy a Property.</h4>
                    <p>Embark on the journey to homeownership with confidence. Find your dream property among our diverse selection, designed to fulfill your aspirations.</p>
                </div>

                <div>
                    <span class="fas fa-chart-line"></span>
                    <h4>Investing.</h4>
                    <p>Explore lucrative investment opportunities that align with your financial goals and vision for the future.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="properties">
        <div class="container">
            <h2>Properties</h2>
            <div id="properties-slider" class="slick">
                <div>
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_1.jpg" alt="Property 1" />
                    <div class="property-details">
                        <p class="price">$3,400,000</p>
                        <span class="beds">6 beds</span>
                        <span class="baths">4 baths</span>
                        <span class="sqft">4,250 sqft.</span>
                        <address>
                            480 12th, Unit 14, San Francisco, CA
                        </address>
                    </div>
                </div>

                <div>
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_2.jpg" alt="Property 1" />
                    <div class="property-details">
                        <p class="price">$3,400,000</p>
                        <span class="beds">6 beds</span>
                        <span class="baths">4 baths</span>
                        <span class="sqft">4,250 sqft.</span>
                        <address>
                            480 12th, Unit 14, San Francisco, CA
                        </address>
                    </div>
                </div>

                <div>
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_3.jpg" alt="Property 1" />
                    <div class="property-details">
                        <p class="price">$3,400,000</p>
                        <span class="beds">6 beds</span>
                        <span class="baths">4 baths</span>
                        <span class="sqft">4,250 sqft.</span>
                        <address>
                            480 12th, Unit 14, San Francisco, CA
                        </address>
                    </div>
                </div>

                <div>
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_4.jpg" alt="Property 1" />
                    <div class="property-details">
                        <p class="price">$3,400,000</p>
                        <span class="beds">6 beds</span>
                        <span class="baths">4 baths</span>
                        <span class="sqft">4,250 sqft.</span>
                        <address>
                            480 12th, Unit 14, San Francisco, CA
                        </address>
                    </div>
                </div>

                <div>
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_1.jpg" alt="Property 1" />
                    <div class="property-details">
                        <p class="price">$3,400,000</p>
                        <span class="beds">6 beds</span>
                        <span class="baths">4 baths</span>
                        <span class="sqft">4,250 sqft.</span>
                        <address>
                            480 12th, Unit 14, San Francisco, CA
                        </address>
                    </div>
                </div>
            </div>

            <a href="./pages/property_listing.php" id="view-all-property-listings">
                <button class="rounded">View All Property Listings</button>
            </a>
        </div>
    </section>

   
    <section id="the-best">
        <div class="flex container">
            <img src="https://onclickwebdesign.com/wp-content/uploads/property_1.jpg" alt="Property 1" />
            <div class="best-second-container">
                <h2>We Are the Best Real Estate Company</h2>
                <p class="large-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit Quo suscipit omnis iste velit maxime.</p>
                <ul>
                    <li>Placeat maxime animi minus</li>
                    <li>Placeat maxime animi minus</li>
                    <li>Placeat maxime animi minus</li>
                    <li>Placeat maxime animi minus</li>
                    <li>Placeat maxime animi minus</li>
                </ul>
                <button class="rounded">Learn More</button>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Services</h2>
            <div class="flex">
                <div>
                    <div class="fas fa-home"></div>
                    <div class="services-card-right">
                        <h3>Search Property</h3>
                        <p>Explore real estate effortlessly. Find your dream property with our tailored search feature.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-dollar-sign"></div>
                    <div class="services-card-right">
                        <h3>Buy Property</h3>
                        <p>Discover your perfect home. Explore a diverse range of properties available for purchase.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-chart-line"></div>
                    <div class="services-card-right">
                        <h3>Investing</h3>
                        <p>Unlock investment opportunities. Explore properties with high potential returns for savvy investors.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-building"></div>
                    <div class="services-card-right">
                        <h3>List a Property</h3>
                        <p>Sell with confidence. Showcase your property to a wide audience by listing it with us.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-search"></div>
                    <div class="services-card-right">
                        <h3>Property Locator</h3>
                        <p>Effortless property search. Let our experts find the perfect property for you based on your preferences.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-mobile-alt"></div>
                    <div class="services-card-right">
                        <h3>Stated Apps</h3>
                        <p>Revolutionize your real estate experience. Explore our state-of-the-art apps for seamless property management.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class="container">
            <h2>What Our Clients Are Saying</h2>
            <div id="testimonials-slider">
                <div>
                    <blockquote>
                    <p>"The platform's commitment to clarity and simplicity truly sets it apart. Navigating through the different sections is seamless, and I find the property search process to be both efficient and enjoyable."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="./assets/images/clrk.jpg" alt="Client 7" />
                        <p>clark Xavier</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                    <p>"I've been thoroughly impressed with the PETRA VILLE REAL ESTATE services provided by this website. It's not just about finding the perfect property; it's about the speed and efficiency with which they handle inquiries."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="./assets/images/baste.jpg" alt="Client 7" />
                        <p>Junrey Baste</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                    <p>"I can't express enough how much I love using this PETRA VILLE REAL ESTATE website. The user experience is simply unparalleled, making the entire property search process a delight. Every visit to the site feels like a seamless journey of exploration and discovery.</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="./assets/images/ash.jpg" alt="Client 7" />
                        <p>Ashley Jolito</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

 

    <footer>
        <div class="flex container">
            <div class="footer-about">
                <h5>About Petra Ville Real Estate</h5>
                <p>Welcome to Petra Ville Real Estate, your gateway to effortless property transactions. Explore a world of real estate possibilities with our innovative and user-friendly platform.</p>
            </div>

            <div class="footer-quick-links">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="./pages/property_listing.php">Properties</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="./pages/process_inquiry.php">Contact Us</a></li>
                    
                </ul>
            </div>

           
        </div>

        <small>
           
        </small>
    </footer>

    
</body>
</html>