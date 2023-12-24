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
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="./pages/propertylisting2.php" target="_blank">Properties</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
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
                <button class="B-prop" href="./pages/propertylisting.php"> Properties
                </button>
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

            <button class="rounded">View All Property Listings</button>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-dollar-sign"></div>
                    <div class="services-card-right">
                        <h3>Buy Property</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-chart-line"></div>
                    <div class="services-card-right">
                        <h3>Investing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-building"></div>
                    <div class="services-card-right">
                        <h3>List a Property</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-search"></div>
                    <div class="services-card-right">
                        <h3>Property Locator</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-mobile-alt"></div>
                    <div class="services-card-right">
                        <h3>Stated Apps</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
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
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum vitae explicabo dolore ratione. Quia iure quod ipsa blanditiis sint nulla a nam veritatis ex eos. Dicta molestiae dolorum laudantium."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/person_7.jpg" alt="Client 7" />
                        <p>Nick Andros</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum vitae explicabo dolore ratione. Quia iure quod ipsa blanditiis sint nulla a nam veritatis ex eos. Dicta molestiae dolorum laudantium."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/person_5.jpg" alt="Client 7" />
                        <p>Larry Underwood</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum vitae explicabo dolore ratione. Quia iure quod ipsa blanditiis sint nulla a nam veritatis ex eos. Dicta molestiae dolorum laudantium."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/person_8.jpg" alt="Client 7" />
                        <p>Fran Goldsmith</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>

            <div class="flex">
                <div id="form-container">
                    <h3>Contact Form</h3>
                    <form>
                        <label for="name">Name</label>
                        <input type="text" id="name" />

                        <label for="email">Email</label>
                        <input type="text" id="email" />

                        <label for="subject">Subject</label>
                        <input type="text" id="subject" />

                        <label for="message">Message</label>
                        <textarea id="message">Write your message here..</textarea>

                        <button class="rounded">Send Message</button>
                    </form>
                </div>

                <div id="address-container">
                    <label>Address</label>
                    <address>
                        20377 Evergreen Terrace Mountain View, California, USA 
                    </address>

                    <label>Phone</label>
                    <a href="#">232-232-2323</a>

                    <label>Email Address</label>
                    <a href="#">ouremail@domain.com</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="flex container">
            <div class="footer-about">
                <h5>About Stated</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
            </div>

            <div class="footer-quick-links">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact Us</a></li>
                    
                </ul>
            </div>

            <div class="footer-subscribe">
                <h5>Subscribe to our Newsletter</h5>
                <div id="subscribe-container">
                    <input type="text" placeholder="Enter Email" />
                    <button class="right-rounded">Send</button>
                </div>

                <h5 class="follow-us">Follow Us</h5>
                <ul>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>
        </div>

        <small>
           
        </small>
    </footer>

    
</body>
</html>