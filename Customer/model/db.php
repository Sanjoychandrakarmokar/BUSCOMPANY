<?php

class db
{
    function openConn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employees";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // ✅ Proper error handling
        if ($conn->connect_error) {
            die("Database connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
    // working
    function insertapplicant($name, $email, $nid, $phone,$gender,$address, $password, $conn)
    {
        // ✅ Fix: Ensure $conn is a valid connection
        if (!$conn || gettype($conn) !== "object") {
            die("Database connection error.");
        }

        // ✅ Fix: Include `cpassword` & `cv` in SQL statement if needed
        $sqlstr = "INSERT INTO customer_reg (name, email, nid, phone, gender,address, password) 
                   VALUES ('$name', '$email', '$nid', '$phone','$gender','$address', '$password')";

        return $conn->query($sqlstr);
    }
    // working
    function customer_login($conn, $table, $email, $password) {
        $sqlstr = "SELECT email, password FROM customer_reg WHERE email = '$email' AND password = '$password'";
        return $conn->query($sqlstr);
    }

    // working
    function getUserdata($conn,$email)
    {
      $sql="SELECT * FROM customer_reg WHERE email = '$email'";
      $result=$conn->query($sql);
      return $result;
    }


    // working
    function updateUser($conn, $email, $name, $nid, $phone, $address, $password)
    {
       
        $sql = "UPDATE customer_reg SET name='$name', nid='$nid', phone='$phone',address='$address', password='$password' WHERE email='$email'";
  
        if ($conn->query($sql) === TRUE) {
            return true;  
        } else {
            return false;  
        }
    }
    

    function insertBooking($email, $bus, $date, $time, $busType, $tickets, $available_seats, $conn) {
        if (!$conn) {
            die("Database connection error");
        }

        $sqlstr = "INSERT INTO ticket_bookings (email, bus, travel_date, travel_time, bus_type, ticket_count,available_seats) 
                   VALUES ('$email','$bus', '$date', '$time', '$busType', '$tickets','$available_seats')";

        return $conn->query($sqlstr);
    }

    function getUserTickets($email, $conn) {   
        $sqlstr = "SELECT * FROM ticket_bookings WHERE email = '$email'";
        return $conn->query($sqlstr);
    }

    function deleteTicket($ticket_id, $conn) {
        $sqlstr = "DELETE FROM ticket_bookings WHERE id = '$ticket_id'";
        return $conn->query($sqlstr);
    }
    
    
    
    
    
}

?>
