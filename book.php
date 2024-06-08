<?php
require "database.php";

// Checking for the button click
if (isset($_POST["submit-btn"])) {

    // Getting inputs from the form
    $full_name = $_POST["fullName"];
    $date_of_birth = $_POST["dob"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $destination = $_POST["destination"];
    $departure_date = $_POST["departureDate"];
    $return_date = $_POST["returnDate"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];
    $transportation = $_POST["transportation"];
    $accommodation = $_POST["accommodation"];
    $meal_preferences = $_POST["meal"];
    $activities = $_POST["activities"];
    $special_requests = $_POST["specialRequests"];
    $payment_method = $_POST["paymentMethod"];
    $billing_address = $_POST["billingAddress"];
    $card_details = $_POST["cardDetails"];
    $travel_insurance = $_POST["travelInsurance"];
    $passport_number = $_POST["passportNumber"];
    $passport_expiry = $_POST["passportExpiry"];
    $nationality = $_POST["nationality"];
    $emergency_contact_name = $_POST["emergencyContact"];
    $emergency_contact_phone = $_POST["emergencyPhone"];

    // Defining a SQL Insert Query Format
    $sql = "INSERT INTO bookings (
        full_name, date_of_birth, gender, email, phone, destination, departure_date, return_date,
        adults, children, transportation, accommodation, meal_preferences, activities,
        special_requests, payment_method, billing_address, card_details, travel_insurance,
        passport_number, passport_expiry, nationality, emergency_contact_name, emergency_contact_phone
    ) VALUES (
        '$full_name', '$date_of_birth', '$gender', '$email', '$phone', '$destination', '$departure_date', '$return_date',
        $adults, $children, '$transportation', '$accommodation', '$meal_preferences', '$activities',
        '$special_requests', '$payment_method', '$billing_address', '$card_details', '$travel_insurance',
        '$passport_number', '$passport_expiry', '$nationality', '$emergency_contact_name', '$emergency_contact_phone'
    )";

    // Run this Query Format as an SQL Query
    $result = $con->query($sql);

    // Checking for the Confirmation of Insertion
    if ($result === true) {
        echo "<script>alert('Booking Successful!'); location.replace('index.php');</script>";
    } else {
        echo "<script>alert('Booking Failed: " . $con->error . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css">
    <title>Trip Booking Form</title>
</head>
<body>
    <form action="" method="post">
        <h1>Book Your Trip</h1>

        <fieldset>
            <legend>Personal Information</legend>
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </fieldset>

        <fieldset>
            <legend>Trip Details</legend>
            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination" required>

            <label for="departureDate">Departure Date:</label>
            <input type="date" id="departureDate" name="departureDate" required>

            <label for="returnDate">Return Date:</label>
            <input type="date" id="returnDate" name="returnDate" required>

            <label for="adults">Number of Adults:</label>
            <input type="number" id="adults" name="adults" required>

            <label for="children">Number of Children:</label>
            <input type="number" id="children" name="children">
        </fieldset>

        <fieldset>
            <legend>Travel Preferences</legend>
            <label for="transportation">Mode of Transportation:</label>
            <select id="transportation" name="transportation" required>
                
                <option value="train">Train</option>
                <option value="bus">Bus</option>
                <option value="car">Car Rental</option>
            </select>

            <label for="accommodation">Accommodation Type:</label>
            <select id="accommodation" name="accommodation" required>
                <option value="hotel">Hotel</option>
                
                <option value="resort">Resort</option>
            </select>

            <label for="meal">Meal Preferences:</label>
            <input type="text" id="meal" name="meal">

            <label for="activities">Activities and Interests:</label>
            <textarea id="activities" name="activities" rows="4"></textarea>

            <label for="specialRequests">Special Requests:</label>
            <textarea id="specialRequests" name="specialRequests" rows="4"></textarea>
        </fieldset>

        <fieldset>
            <legend>Payment Information</legend>
            <label for="paymentMethod">Payment Method:</label>
            <select id="paymentMethod" name="paymentMethod" required>
                <option value="credit">Credit Card</option>
                <option value="debit">Debit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank">Bank Transfer</option>
            </select>

            <label for="billingAddress">Billing Address:</label>
            <input type="text" id="billingAddress" name="billingAddress" required>

            <label for="cardDetails">Card Details:</label>
            <input type="text" id="cardDetails" name="cardDetails" required>

            <label for="travelInsurance">Travel Insurance (Optional):</label>
            <input type="text" id="travelInsurance" name="travelInsurance">
        </fieldset>

        <fieldset>
            <legend>Additional Information</legend>
            <label for="passportNumber">Passport Number:</label>
            <input type="text" id="passportNumber" name="passportNumber">

            <label for="passportExpiry">Passport Expiry Date:</label>
            <input type="date" id="passportExpiry" name="passportExpiry">

            <label for="nationality">Nationality:</label>
            <input type="text" id="nationality" name="nationality">

            <label for="emergencyContact">Emergency Contact Name:</label>
            <input type="text" id="emergencyContact" name="emergencyContact" required>

            <label for="emergencyPhone">Emergency Contact Phone:</label>
            <input type="tel" id="emergencyPhone" name="emergencyPhone" required>
        </fieldset>

        <div class="submitSignupDiv">
            <button type="submit" name="submit-btn">Book Now</button>
        </div>
    </form>
</body>
</html>
