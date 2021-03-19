<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "sqlquery";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . "<br>";

// Question 1
echo "Question 1" . "<br>";
$sql = "SELECT CustomerID ,Surname,Given,DOB, Suburb FROM  customer WHERE Suburb = 'CAULFIELD' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Customer Id: " . $row["CustomerID"] . " - Name: " . $row["Surname"] . " " . $row["Given"] . " - Date of Birth: " . $row["DOB"] . "Suburb: " . $row["Suburb"] . "<br>";
    }
} else {
    echo "0 results";
}



// Question 2
// echo "Question 2" . "<br>";
// $sql = "SELECT StaffID,Surname,Given,RatePerHour FROM  staff WHERE Resigned IS  NULL ";
// $q2result = $conn->query($sql);

// if ($q2result->num_rows > 0) {
//     while ($row = $q2result->fetch_assoc()) {
//         $weeklySalary = $row["RatePerHour"] * 38;
//         echo "Staff Id: " . $row["StaffID"] . " - Name: " . $row["Surname"] . " " . $row["Given"] . " - Weekly Salary: " . $weeklySalary . "<br>";
//     }
// } else {
//     echo "0 results";
// }



// Question 3
// echo "Question 3" . "<br>";
// $sql = "SELECT BreakFee, PlanName  FROM  plan WHERE BreakFee IN (SELECT MAX(BreakFee) FROM plan) ";
// $q3result = $conn->query($sql);

// if ($q3result->num_rows > 0) {
//     while ($row = $q3result->fetch_assoc()) {
//         echo "Plan Name: " . $row["PlanName"] . " - BreakFee: " . $row["BreakFee"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// Question 4
// echo "Question 4" . "<br>";
// $sql = "SELECT BrandName  FROM  mobile GROUP BY BrandName  ";
// $q4result = $conn->query($sql);
// if ($q4result->num_rows > 0) {
//     while ($row = $q4result->fetch_assoc()) {
//         echo "Brand Name: " . $row["BrandName"] .  "<br>";
//     }
// } else {
//     echo "0 results";
// }
// Question 5
// echo "Question 5" . "<br>";
// $sql = "SELECT BrandName  FROM  mobile GROUP BY BrandName  ";
// $q5result = $conn->query($sql);
// // var_dump($q3result);
// // exit;
// if ($q5result->num_rows > 0) {
//     while ($row = $q5result->fetch_assoc()) {
//         echo "Brand Name: " . $row["BrandName"] .  "<br>";
//     }
// } else {
//     echo "0 results";
// }
// Question 6
// echo "Question 6" . "<br>";
// $sql = "SELECT PlanName, COUNT(*) AS counter FROM mobile GROUP BY PlanName";
// $q6result = $conn->query($sql);

// if ($q6result->num_rows > 0) {
//     while ($row = $q6result->fetch_assoc()) {
//         echo "Plan Name: " . $row["PlanName"] . "  &nbsp;&nbsp;    " . "Total:" . $row["counter"] . "     &nbsp;&nbsp;   " .  "<br>";
//     }
// } else {
//     echo "0 results";
// }

// Question 7
// echo "Question 7" . "<br>";
// $sql = "SELECT mobile.BrandName, customer.DOB,AVG(YEAR(NOW())-YEAR(DOB))  as `Average` FROM mobile INNER JOIN customer ON mobile.CustomerID=customer.CustomerID WHERE mobile.Brandname ='Apple' ";
// $q7result = $conn->query($sql);

// if ($q7result->num_rows > 0) {
//     while ($row = $q7result->fetch_assoc()) {
//         echo "Brand Name: " . $row["BrandName"] . "  &nbsp;&nbsp;    " . "Average Age:" . $row["Average"] . "     &nbsp;&nbsp;   " .  "<br>";
//     }
// } else {
//     echo "0 results";
// }

// Question 8
// echo "Question 8" . "<br>";
// echo "Newest Phone Purchases" . "<br>";

// $sql = "SELECT BrandName,PhoneNumber FROM mobile ORDER BY Joined DESC LIMIT 1; ";
// $q8result = $conn->query($sql);

// if ($q8result->num_rows > 0) {
//     while ($row = $q8result->fetch_assoc()) {
//         echo "Brand Name: " . $row["BrandName"] . "  &nbsp;&nbsp;    " . "Phone Number:" . $row["PhoneNumber"] . "     &nbsp;&nbsp;   " .  "<br>";
//     }
// } else {
//     echo "0 results";
// }
// echo "Oldest Phone Purchases" . "<br>";

// $sql = "SELECT BrandName,PhoneNumber FROM mobile ORDER BY Joined ASC LIMIT 1; ";
// $q8result = $conn->query($sql);

// if ($q8result->num_rows > 0) {
//     while ($row = $q8result->fetch_assoc()) {
//         echo "Brand Name: " . $row["BrandName"] . "  &nbsp;&nbsp;    " . "Phone Number:" . $row["PhoneNumber"] . "     &nbsp;&nbsp;   " .  "<br>";
//     }
// } else {
//     echo "0 results";
// }


// Question 9
// echo "Question 9" . "<br>";
// $sql = "SELECT mobile.BrandName, customer.DOB,AVG(YEAR(NOW())-YEAR(DOB))  as `Average` FROM mobile INNER JOIN customer ON mobile.CustomerID=customer.CustomerID WHERE mobile.Brandname ='Apple' ";
// $q9result = $conn->query($sql);

// if ($q9result->num_rows > 0) {
//     while ($row = $q9result->fetch_assoc()) {
//         echo "Brand Name: " . $row["BrandName"] . "  &nbsp;&nbsp;    " . "Average Age:" . $row["Average"] . "     &nbsp;&nbsp;   " .  "<br>";
//     }
// } else {
//     echo "0 results";
// }
// Question 10
// echo "Question 10" . "<br>";
// $sql = 
// $sql = "SELECT * FROM tower ORDER BY MaxConn Desc";
// $q10result = $conn->query($sql);

// if ($q10result->num_rows > 0) {
//     while ($row = $q10result->fetch_assoc()) {
//         echo "Tower Location: " . $row["Location"] . "  &nbsp;&nbsp;    " . "Maximum Connection:" . $row["MaxConn"] . "     &nbsp;&nbsp;   " .  "<br>";
//     }
// } else {
//     echo "0 results";
// }

// Question 11
echo "Question 11" . "<br>";
$sql = "SELECT mobile.BrandName, customer.DOB,AVG(YEAR(NOW())-YEAR(DOB))  as `Average` FROM mobile INNER JOIN customer ON mobile.CustomerID=customer.CustomerID WHERE mobile.Brandname ='Apple' ";
$q11result = $conn->query($sql);

if ($q11result->num_rows > 0) {
    while ($row = $q11result->fetch_assoc()) {
        echo "Brand Name: " . $row["BrandName"] . "  &nbsp;&nbsp;    " . "Average Age:" . $row["Average"] . "     &nbsp;&nbsp;   " .  "<br>";
    }
} else {
    echo "0 results";
}


// Question 12
echo "Question 12" . "<br>";
echo "i" . "<br>";
$sql = "SELECT SignalType, COUNT(*) AS counter FROM tower WHERE SignalType	= '3G'";
$q12iresult = $conn->query($sql);

if ($q12iresult->num_rows > 0) {
    while ($row = $q12iresult->fetch_assoc()) {
        echo "Towers To be upgraded: " . $row["counter"] .   "<br>";
    }
} else {
    echo "0 results";
}
echo "ii" . "<br>";
$sql = "UPDATE tower SET SignalType='5G' WHERE SignalType='3G';
";

$q12iiresult1 = $conn->query($sql);
$sql = "SELECT SignalType, COUNT(*) AS counter FROM tower WHERE SignalType	= '3G'";
$q12iiresult = $conn->query($sql);

if ($q12iiresult->num_rows > 0) {
    while ($row = $q12iiresult->fetch_assoc()) {
        echo "Towers have  been upgraded to 5G: " .   "<br>";
        echo "Remaining 3G Towers: " . $row["counter"] .   "<br>";
    }
} else {
    echo "0 results";
}
// Question 13
echo "Question 13" . "<br>";
echo "i" . "<br>";
$sql = "SELECT Resigned,Joined,Given,SupervisorID,Surname FROM Staff WHERE SupervisorID != '0' ";
$q13iresult = $conn->query($sql);

if ($q13iresult->num_rows > 0) {
    while ($row = $q13iresult->fetch_assoc()) {
        echo "Employee Details: ". "Name : ". $row["Surname"] ."&nbsp;&nbsp; ". $row["Given"] ."&nbsp;&nbsp;&nbsp; ". "Joined Date :".$row["Joined"]." &nbsp;&nbsp;&nbsp;". "Resigned Date :".$row["Resigned"]. "<br><br>";
        $supervisor_id = $row["SupervisorID"];
       
        $sql = "SELECT Resigned,Joined,Given,StaffID,Surname FROM Staff WHERE StaffID = '".$supervisor_id."' " ;
        $q13SupervisorResult = $conn->query($sql);
        if ($q13SupervisorResult->num_rows > 0) {
            while ($row = $q13SupervisorResult->fetch_assoc()) {
                echo "Supervisor Details: ". "Name : ". $row["Surname"] ."&nbsp;&nbsp; ". $row["Given"] ."&nbsp;&nbsp;&nbsp; ". "Joined Date :".$row["Joined"]." &nbsp;&nbsp;&nbsp;". "Resigned Date :".$row["Resigned"]. "<br><br>";
            }
        }else{
            echo "No Supervisor";
        }

    }
} else {
    echo "0 results";
}
echo "ii" . "<br>";
$sql = "UPDATE tower SET SignalType='5G' WHERE SignalType='3G';
";

$q12iiresult1 = $conn->query($sql);
$sql = "SELECT SignalType, COUNT(*) AS counter FROM tower WHERE SignalType	= '3G'";
$q12iiresult = $conn->query($sql);

if ($q12iiresult->num_rows > 0) {
    while ($row = $q12iiresult->fetch_assoc()) {
        echo "Towers have  been upgraded to 5G: " .   "<br>";
        echo "Remaining 3G Towers: " . $row["counter"] .   "<br>";
    }
} else {
    echo "0 results";
}