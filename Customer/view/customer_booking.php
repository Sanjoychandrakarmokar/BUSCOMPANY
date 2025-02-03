<?php
include('../control/customer_booking.php');
?>

<html>

<head>
   <title>Booking</title>
   <link rel="stylesheet" href="../css/customer_booking.css">
</head>

<body>
   <div class="container">
      <h1>Ticket Booking Form</h1>
      <fieldset>
         <form id="bookingForm" method="POST" action="" onsubmit="return form_check_booking();">
            <table>
               <tr>
                  <td>Available Bus:</td>
                  <td>
                     <select id="available_bus" name="available_bus">
                        <option value="">Select Bus</option>
                        <option id="bus1" value="Bus1">Bus1</option>
                        <option id="bus2" value="Bus2">Bus2</option>
                        <option id="bus3" value="Bus3">Bus3</option>
                        <option id="bus4" value="Bus4">Bus4</option>
                     </select>
                     <span id="buserr"></span>
                  </td>
               </tr>

               <tr>
                  <td>Bus Type:</td>
                  <td>
                     <select id="bus_type" name="bus_type">
                        <option value="">Select Bus Type</option>
                        <option value="AC">AC</option>
                        <option value="Non AC">Non AC</option>
                     </select>
                     <span id="typeerr"></span>
                  </td>
               </tr>

               <tr>
                  <td>Available Seats:</td>
                  <td>
                     <select id="available_seats" name="available_seats">
                        <option value="">Select Seat</option>
                     </select>
                     <span id="seatsErr"></span>
                  </td>
               </tr>

               <tr>
                  <td>Date:</td>
                  <td><input type="date" id="date" name="date">
                     <span id="dateerr"></span>
                  </td>
               </tr>
               <tr>
                  <td>Time:</td>
                  <td>
                     <select id="time" name="time">
                        <option value="">Select Time</option>
                        <option value="8pm to 6am">8pm to 6am</option>
                        <option value="10pm to 7am">10pm to 7am</option>
                        <option value="11pm to 8am">11pm to 8am</option>
                     </select>
                     <span id="timeerr"></span>
                  </td>
               </tr>

               <tr>
                  <td>Total Ticket :</td>
                  <td><input type="number" id="ticket_number" name="ticket_number">
                     <span id="ticketerr"></span>
                  </td>
               </tr>
            </table>
            <div class="form-footer">
               <input type="submit" name="submit" value="Confirm Ticket">
            </div>
         </form>
      </fieldset>
   </div>

   <!-- ✅ Ensure JavaScript file is loaded correctly -->
   <script src="../js/customer_booking.js"></script>

</body>

</html>