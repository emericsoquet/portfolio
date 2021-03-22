function createpassenger() {
        var passengernum = document.createElement('div');
        passengernum.innerHTML = "<label for='passenger' class='passenger'>Passenger:</label><select name='passenger' class='passenger'><option>Adult (25 years and older)</option><option>Young (12 – 24 years)</option><option>Child (2 – 11 years)</option><option>Snack</option><option>Refreshment</option><option>Infant (0 – 23 months)</option></select>";
        document.getElementById("newpassenger").appendChild(passengernum);
        }