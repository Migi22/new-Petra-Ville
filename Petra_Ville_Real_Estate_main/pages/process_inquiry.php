
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inquiry Form</title>
  <link rel="stylesheet" href="../css/inquiry.css">
</head>
<body>
  
  <!--PHP-->
  <div id="message">
      <?php include '../functions/inquiry.php';?>
  </div>

  <div class="inquiry-container">

  <div id="goback"><a href = "../index.php"><button>Go Back</button></a></div>

    <form action="process_inquiry.php" method="post">
      <label for="firstName">First Name:</label>
      <input type="text" name="firstName" id="firstName" required>

      <label for="lastName">Last Name:</label>
      <input type="text" name="lastName" id="lastName" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" readonly value="<?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; ?>">

      <label for="phone">Phone:</label>
      <input type="tel" name="phone" id="phone" required>

      <label for="province_id">Province:</label>
      <select name="province" id="province" required>
        <option value="1">None</option>
        <option value="2">Cebu</option>
        <option value="3">Cavite</option>
        <option value="4">Davao del Sur</option>
        <option value="5">Iloilo</option>
        <option value="6">Laguna</option>
        <option value="7">Metro Manila</option>
        <option value="8">Negros Occidental</option>
        <option value="9">Pampanga</option>
        <option value="10">Rizal</option>
        <option value="11">Batangas</option>
      </select>

      <label for="property_id">Property Name:</label>
      <select name="propertyName" id="propertyName" required>
        <option value="1">None</option>
        <option value="2">Azure Skies Residences</option>
        <option value="3">Blissful Breeze Apartments</option>
        <option value="4">Crestview Meadows</option>
        <option value="5">Eden Springs Residences</option>
        <option value="6">Enchanted Grove Estates</option>
        <option value="7">Golden Horizon Heights</option>
        <option value="8">Harmony Haven Residences</option>
        <option value="9">Horizon Haven Homes</option>
        <option value="10">Lush Haven Apartments</option>
        <option value="11">Majestic Pines Estates</option>
        <option value="12">Mystic Meadows Estates</option>
        <option value="13">Radiant Reflections Condos</option>
        <option value="14">Radiant Ridge Villas</option>
        <option value="15">Sapphire Shores Villas</option>
        <option value="16">Serenity Springs Estates</option>
        <option value="17">Solstice Sunsets Condos</option>
        <option value="18">Summit View Residences</option>
        <option value="19">Tranquil Terrace Homes</option>
        <option value="20">Whispering Oaks Residences</option>
      </select>

      <label for="inquiry_type_id">Inquiry Type:</label>
      <select name="inquiryType" id="inquiryType" required>
        <option value="1">None</option>
        <option value="2">Property Purchase Inquiries</option>
        <option value="3">Rental Inquiries</option>
      </select>

      <label for="unit_type_id">Unit Type:</label>
      <select name="unitType" id="unitType" required>
        <option value="0">None</option>
        <option value="1">Bungalow</option>
        <option value="2">Condominium</option>
        <option value="3">Tome Homes</option>
      </select>

      <label for="tcp_range_id">TCP Range:</label>
      <select name="tcpRange" id="tcpRange" required>
        <option value="1">None</option>
        <option value="2">Below Php 100,000</option>
        <option value="3">Php 100,000 - Php 200,000</option>
        <option value="4">Php 200,000 - Php 300,000</option>
      </select>

      <label for="product_interest_id">Product Interest:</label>
      <select name="productInterest" id="productInterest" required>
        <option value="1">None</option>  
        <option value="2">Lot Only</option>
        <option value="3">Studio Unit</option>
        <option value="4">1 Bedroom</option>
        <option value="5">2 Bedrooms</option>
        <option value="6">3 Bedrooms</option>
        <option value="7">4 Bedrooms</option>
        <option value="8">5 Bedrooms</option>
      </select>


      <label for="message">Message:</label>
      <textarea name="message" id="message" rows="4" required></textarea>

      <button type="submit">Submit</button>
      
    </form>
  </div>

  <div class="contact-container">
    <header>
      <h1>Contact Us</h1>
    </header>

    <section>
      <h3>Contact Details</h3>
      <p>Landline: (02) 3463-4337</p>
      <p>Mobile Number: 09457281011</p>
    
      <h3>Address</h3>
      <p>3rd Floor Worldwide Corporate Center, Shaw</p><br>
      <p>Boulevard, Mandaluyong City, 1552, Philippines</p>

    </section>
  </div>


</body>
</html>
