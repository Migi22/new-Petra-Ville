<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PETRA VILLE REAL ESTATE</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/propertys.css">
    <link rel="stylesheet" href="../css/propertys2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src = "../script/header_script.js"></script>
</head>

<body>
    <div id="header-hero-container">
        <header>
            <div class="flex container">
                <a id="logo" href="../index.php">PETRA VILLE REAL ESTATE</a>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>

                    <ul id="nav-menu">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../pages/property_listing.php"  class="active">Properties</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="../pages/process_inquiry.php">Contact</a></li>
                        <a class="nav-inquire-btn" href="./pages/process_inquiry.php"><li class="nav-inquire">Inquire NOW</a></li>
                        <!-- email here-->
                        
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                        
                        
                    </ul>
                </nav>
            </div>
        </header>
        
        <section id="hero">
            <div class="fade"></div>
                
        </section>
        
    </div>
    <section class="property-container">

        <div>
            <!-- listing-settings -->
            <div class="listing-set">
            <!-- Search Bar -->
            <input type="text" id="nameInput" placeholder="Search by name...">
               <!-- Select for types-->
            <select id="listingTypeSelect" onchange="updatePropertyList()">
            <option value="all">All Listings</option>
            <option value="sale">For buy</option>
            <option value="rent">For Rent</option>
            </select>
            <!-- Select for Price -->
            <select id="priceSelect">
                <option value="0">Any Price</option>
                <option value="500000">500,000 PHP</option>
                <option value="1000000">1,000,000 PHP</option>
                <option value="2000000">2,000,000 PHP</option>
                <option value="3000000">3,000,000 PHP</option>
                <option value="5000000">5,000,000 PHP</option>
                <!-- Add more options as needed -->
            </select>
            
            <button class="search-click" onclick="updatePropertyList()">Search</button>
            </div>

            <div id="propertyListings">
                <!-- Property Listing Template 1 -->
                <div class="property-listing" data-name="Downtown House" data-location="Downtown" data-price="2000000">
                <img src="https://onclickwebdesign.com/wp-content/uploads/property_2.jpg" alt="For Rent Image">
                    <h2 class="title-listing">House for Sale - 3 BR / 2 BA - Downtown</h2>
                    <p class="p-listing">Welcome to this beautiful house located in the heart of downtown. This 3-bedroom, 2-bathroom home is perfect for families looking for modern amenities and convenience.</p>
                    <ul>
                        <li><strong>Bedrooms:</strong> 3</li>
                        <li><strong>Bathrooms:</strong> 2</li>
                        <li><strong>Type:</strong> House</li>
                        <li><strong>Location:</strong> Downtown</li>
                        <li><strong>Square Footage:</strong> 2000 sq. ft.</li>
                        <li><strong>Year Built:</strong> 2020</li>
                    </ul>
                    <p><strong>Key Features:</strong> Spacious living area, modern kitchen, hardwood floors, backyard garden.</p>
                    <p><strong>Price:</strong> 2,000,000 PHP</p>
                </div>
                <!-- Property Listing Template 2 -->
                <div class="property-listing" data-name="Suburban Condo" data-location="Suburb" data-price="3000000">
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_2.jpg" alt="For Rent Image">
                    <h2 class="title-listing">Condo for Rent - 2 BR / 1 BA - Suburb</h2>
                    <p class="p-listing">Enjoy suburban living in this cozy 2-bedroom, 1-bathroom condo. Conveniently located in a quiet suburb with easy access to local amenities.</p>
                    <ul>
                        <li><strong>Bedrooms:</strong> 2</li>
                        <li><strong>Bathrooms:</strong> 1</li>
                        <li><strong>Type:</strong> Condo</li>
                        <li><strong>Location:</strong> Suburb</li>
                        <li><strong>Square Footage:</strong> 1200 sq. ft.</li>
                        <li><strong>Year Built:</strong> 2015</li>
                    </ul>
                    <p><strong>Key Features:</strong> Modern design, balcony with a view, community pool.</p>
                    <p><strong>Price:</strong> 3,000,000 PHP</p>
                </div>
                <!-- Property Listing Template 3 -->
               <div class="property-listing" data-name="Luxury Villa" data-location="Exclusive Area" data-price="5000000" data-type="rent">
               <a class="d-link" href="listdetails.php">
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_3.jpg" alt="For Sale Image">
                    <h2 class="title-listing">Luxury Villa for Sale - 5 BR / 4 BA - Exclusive Area</h2>
                    <p class="p-listing">Experience luxury living in this exquisite 5-bedroom, 4-bathroom villa located in an exclusive area. The property features top-notch amenities and stunning views.</p>
                    <ul>
                        <li><strong>Bedrooms:</strong> 5</li>
                        <li><strong>Bathrooms:</strong> 4</li>
                        <li><strong>Type:</strong> Villa</li>
                        <li><strong>Location:</strong> Exclusive Area</li>
                        <li><strong>Square Footage:</strong> 4000 sq. ft.</li>
                        <li><strong>Year Built:</strong> 2018</li>
                    </ul>
                    <p><strong>Key Features:</strong> Private pool, spacious interiors, beautiful landscaping.</p>
                    <p><strong>Price:</strong> 5,000,000 PHP</p>
                    </a>
                </div>
                
                <!-- Property Listing Template 4 -->
                <div class="property-listing" data-name="Apartment with a View" data-location="City Center" data-price="5000000" data-type="rent">
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_4.jpg" alt="For Rent Image">
                    <h2 class="title-listing">Apartment for Rent - 1 BR / 1 BA - City Center</h2>
                    <p class="p-listing">Live in style in this modern 1-bedroom, 1-bathroom apartment located in the heart of the city center. Enjoy breathtaking views and convenient access to urban amenities.</p>
                    <ul>
                        <li><strong>Bedrooms:</strong> 1</li>
                        <li><strong>Bathrooms:</strong> 1</li>
                        <li><strong>Type:</strong> Apartment</li>
                        <li><strong>Location:</strong> City Center</li>
                        <li><strong>Square Footage:</strong> 800 sq. ft.</li>
                        <li><strong>Year Built:</strong> 2019</li>
                    </ul>
                    <p><strong>Key Features:</strong> City views, modern design, close to public transportation.</p>
                    <p><strong>Price:</strong> 5,000,000 PHP</p>
                </div>
                <div class="property-listing" data-name="Apartment with a View" data-location="City Center" data-price="2000000" data-type="sale">
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_4.jpg" alt="For Rent Image">
                    <h2 class="title-listing">Apartment for Rent - 1 BR / 1 BA - City Center</h2>
                    <p class="p-listing">Live in style in this modern 1-bedroom, 1-bathroom apartment located in the heart of the city center. Enjoy breathtaking views and convenient access to urban amenities.</p>
                    <ul>
                        <li><strong>Bedrooms:</strong> 1</li>
                        <li><strong>Bathrooms:</strong> 1</li>
                        <li><strong>Type:</strong> Apartment</li>
                        <li><strong>Location:</strong> City Center</li>
                        <li><strong>Square Footage:</strong> 800 sq. ft.</li>
                        <li><strong>Year Built:</strong> 2019</li>
                    </ul>
                    <p><strong>Key Features:</strong> City views, modern design, close to public transportation.</p>
                    <p><strong>Price:</strong> 5,000,000 PHP</p>
                </div>
                <div class="property-listing" data-name="Apartment with a View" data-location="City Center" data-price="3000000" data-type="sale">
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_1.jpg" alt="For Rent Image">
                    <h2 class="title-listing">Apartment for Rent - 1 BR / 1 BA - City Center</h2>
                    <p class="p-listing">Live in style in this modern 1-bedroom, 1-bathroom apartment located in the heart of the city center. Enjoy breathtaking views and convenient access to urban amenities.</p>
                    <ul>
                        <li><strong>Bedrooms:</strong> 1</li>
                        <li><strong>Bathrooms:</strong> 1</li>
                        <li><strong>Type:</strong> Apartment</li>
                        <li><strong>Location:</strong> City Center</li>
                        <li><strong>Square Footage:</strong> 800 sq. ft.</li>
                        <li><strong>Year Built:</strong> 2019</li>
                    </ul>
                    <p><strong>Key Features:</strong> City views, modern design, close to public transportation.</p>
                    <p><strong>Price:</strong> 1,000,000 PHP</p>
                </div>
                <div class="property-listing" data-name="Modern Loft" data-location="Downtown" data-price="1000000" data-type="rent">
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_1.jpg" alt="For Sale Image">
                    <h2 class="title-listing">Modern Loft for Sale - 2 BR / 2 BA - Downtown</h2>
                    <p class="p-listing">Explore this stylish modern loft featuring 2 bedrooms and 2 bathrooms. Located in the vibrant downtown area, this property offers a unique and contemporary living space.</p>
                    <ul>
                        <li><strong>Bedrooms:</strong> 2</li>
                        <li><strong>Bathrooms:</strong> 2</li>
                        <li><strong>Type:</strong> Loft</li>
                        <li><strong>Location:</strong> Downtown</li>
                        <li><strong>Square Footage:</strong> 1500 sq. ft.</li>
                        <li><strong>Year Built:</strong> 2022</li>
                    </ul>
                    <p><strong>Key Features:</strong> Open floor plan, high ceilings, large windows.</p>
                    <p><strong>Price:</strong> 1,000,000 PHP</p>
                </div>
                <div class="property-listing" data-name="Suburban Home" data-location="Suburb" data-price="3500000" data-type="sale">
                    <img src="https://onclickwebdesign.com/wp-content/uploads/property_4.jpg" alt="For Sale Image">
                    <h2 class="title-listing">Suburban Home for Sale - 4 BR / 3 BA - Suburb</h2>
                    <p class="p-listing">Discover this spacious suburban home with 4 bedrooms and 3 bathrooms. Enjoy a peaceful neighborhood and a large backyard, perfect for family gatherings.</p>
                    <ul>
                        <li><strong>Bedrooms:</strong> 4</li>
                        <li><strong>Bathrooms:</strong> 3</li>
                        <li><strong>Type:</strong> House</li>
                        <li><strong>Location:</strong> Suburb</li>
                        <li><strong>Square Footage:</strong> 2800 sq. ft.</li>
                        <li><strong>Year Built:</strong> 2010</li>
                    </ul>
                    <p><strong>Key Features:</strong> Spacious interiors, backyard, attached garage.</p>
                    <p><strong>Price:</strong> 3,500,000 PHP</p>
                </div>
                <!-- Additional property listings can be added similarly -->
            </div>
            
            <script>
    function contactAgent(propertyName) {
        alert("For more information or to schedule a viewing of " + propertyName + ", please contact Agent Smith at 555-1234 or agent@example.com.");
    }

    function updatePropertyList() {
        const nameValue = document.getElementById('nameInput').value.toLowerCase();
        const selectedPrice = document.getElementById('priceSelect').value;
        const selectedType = document.getElementById('listingTypeSelect').value;

        const propertyListings = document.querySelectorAll('.property-listing');

        propertyListings.forEach(function(listing) {
            const name = listing.getAttribute('data-name').toLowerCase();
            const price = parseInt(listing.getAttribute('data-price'));
            const type = listing.getAttribute('data-type');

            const matchesName = name.includes(nameValue);
            const matchesPrice = selectedPrice === '0' || price === parseInt(selectedPrice);
            const matchesType = selectedType === 'all' || type === selectedType;

            if (matchesName && matchesPrice && matchesType) {
                listing.style.display = 'block';
            } else {
                listing.style.display = 'none';
            }
        });
    }

    // Initial update to show all properties
    updatePropertyList();
</script>
            
        </div>
    </section>
   



   


    

    <footer>
        <div class="flex container">
            <div class="footer-about">
                <h5>About Stated</h5>
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