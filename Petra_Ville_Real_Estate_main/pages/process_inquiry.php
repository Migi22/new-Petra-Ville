
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

      <label for="province">Province:</label>
      <select name="province" id="province" required>
        <option value="none">None</option>
        <option value="province1">Metro Manila</option>
        <option value="province2">Cavite</option>
        <option value="province3">Laguna</option>
        <option value="province4">Cebu</option>
        <option value="province5">Batangas</option>
        <option value="province6">Iloilo</option>
        <option value="province7">Davao del Sur</option>
        <option value="province8">Negros Occidental</option>
        <option value="province9">Rizal</option>
        <option value="province10">Pampanga</option>
      </select>

      <label for="propertyName">Property Name:</label>
      <select name="propertyName" id="propertyName" required>
        <option value="none">None</option>
        <option value="harmonyHaven">Harmony Haven Residences</option>
        <option value="serenitySprings">Serenity Springs Estates</option>
        <option value="crestviewMeadows">Crestview Meadows</option>
        <option value="radiantRidge">Radiant Ridge Villas</option>
        <option value="tranquilTerrace">Tranquil Terrace Homes</option>
        <option value="majesticPines">Majestic Pines Estates</option>
        <option value="azureSkies">Azure Skies Residences</option>
        <option value="goldenHorizon">Golden Horizon Heights</option>
        <option value="emeraldOasis">Emerald Oasis Gardens</option>
        <option value="summitView">Summit View Residences</option>
        <option value="enchantedGrove">Enchanted Grove Estates</option>
        <option value="lushHaven">Lush Haven Apartments</option>
        <option value="solsticeSunsets">Solstice Sunsets Condos</option>
        <option value="whisperingOaks">Whispering Oaks Residences</option>
        <option value="horizonHaven">Horizon Haven Homes</option>
        <option value="sapphireShores">Sapphire Shores Villas</option>
        <option value="edenSprings">Eden Springs Residences</option>
        <option value="radiantReflections">Radiant Reflections Condos</option>
        <option value="mysticMeadows">Mystic Meadows Estates</option>
        <option value="blissfulBreeze">Blissful Breeze Apartments</option>
      </select>

      <label for="inquiryType">Inquiry Type:</label>
      <select name="inquiryType" id="inquiryType" required>
        <option value="none">None</option>  
        <option value="propertyPurchase">Property Purchase Inquiries</option>
        <option value="rentalInquiries">Rental Inquiries</option>
      </select>

      <label for="unitType">Unit Type:</label>
      <select name="unitType" id="unitType" required>
        <option value="none">None</option>
        <option value="bungalow">Bungalow</option>
        <option value="condominium">Condominium</option>
        <option value="tomeHomes">Tome Homes</option>
      </select>

      <label for="tcpRange">TCP Range:</label>
      <select name="tcpRange" id="tcpRange" required>
        <option value="none">None</option>
        <option value="range1">Below Php 100,000</option>
        <option value="range2">Php 100,000 - Php 200,000</option>
        <option value="range3">Php 200,000 - Php 300,000</option>
      </select>

      <label for="productInterest">Product Interest:</label>
      <select name="productInterest" id="productInterest" required>
        <option value="none">None</option>  
        <option value="lotOnly">Lot Only</option>
        <option value="studioUnit">Studio Unit</option>
        <option value="bedroom1">1 Bedroom</option>
        <option value="bedroom2">2 Bedrooms</option>
        <option value="bedroom3">3 Bedrooms</option>
        <option value="bedroom4">4 Bedrooms</option>
        <option value="bedroom5">5 Bedrooms</option>
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
