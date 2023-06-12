<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="forProjPHPcss.css" />
</head>
<body bgcolor="#87cefa">

    <div id="page">

        <div id="header">
            <div id="head-h">MedicalMVP</div>
            <div id="logo">
                <a href="#"><img src="m.jpg" width="200" height="200" /> </a>
            </div>
            <div id="navbar">
                <a class="nav-w" href="forProjPHPmedical.php"> Medical &nbsp;&nbsp; </a></li>
                <a class="nav-w" href="forProjPHPdocs.php"> Our Doctors &nbsp;&nbsp;  </a></li>
                <a class="nav-w" href="forProjPHPabout.php"> About &nbsp;&nbsp;  </a></li>
                <a class="nav-w" href="forProjPHPcom.php"> Communication &nbsp;&nbsp;  </a></li>
                <a class="nav-w" href="#about"> &nbsp;  0255 555 55 55  &nbsp;&nbsp; </a></li>
            </div>
        </div>

        <div id="main">
            <div id="date-head">Find Appointment</div>
            <div id="date-body">
                <form class="text1" action="forProjPHPMain.php" method="post">
                    <p><b>Patient Name:</b></p>
                    <input class="ptName" type="text" name="name" placeholder="Name Surname">

                    <p><b>ID Number:</b></p>
                    <input type="number" name="pnumber" placeholder="ID">

                    <p><b>Phone Number:</b></p>
                    <input type="tel" name="tel" placeholder="Phone Number">

                    <p><b>E-Mail:</b></p>
                    <input type="email" name="email" placeholder="E-Mail">

                    <p><b>Clinic:</b></p>
                    <select style="display: block;" name="clinic" >
                        <option value="Surgical Oncology">Surgical Oncology</option>
                        <option value="Pediatric Endocrinology">Pediatric Endocrinology</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="Hematology">Hematology</option>
                        <option value="Gynecology">Gynecology</option>
                        <option value="Nephrology">Nephrology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Oncology">Oncology</option>
                        <option value="Pediatrics">Pediatrics</option>
                        <option value="Rheumatology">Rheumatology</option>
                    </select>

                    <p><b>Date:</b></p>
                    <input type="date" name="date" placeholder="dd-mm-yyyy" value="">
                    <br><br>
            
                    <input type="submit" style="color: rgb(82, 82, 149);" value="Approve" >
            
                </form>
            </div>
        </div>

        <footer class="footer py-4 mt-5">
            <div class="container">
                <div class="footerD1">
                    <div class="footerD2">Copyright © Your Website 2020</div>
                    <div >
                        <a href="#">
                          <i ></i></a>
                          <a href="#">
                            <i ></i></a>
                            <a href="#">
                              <i ></i></a>
                    </div>
                    <div>
                        <div id="adInfo">
                            <p>
                                It is our duty to provide the best service for you in the best hospital in the city. 
                                That's why we try to serve you in the best comfort with our private doctors and employees. 
                                Thanks for choosing us. 
                                Please send us your ideas.
                            </p>
                        </div>

                    </div>
                    <div >
                      <a href="#">Privacy Policy</a>
                      <a href="#">Terms of Use</a></div>
                </div>
            </div>
        </footer>

    </div>
    
</body>
</html>

<?php

include("baglantıproj.php");

if(isset($_POST["name"], $_POST["pnumber"], $_POST["tel"], $_POST["email"], $_POST["clinic"], $_POST["date"]))
{
    $namesurname = $_POST["name"];
    $personelID = $_POST["pnumber"];
    $telephone = $_POST["tel"];
    $email = $_POST["email"];
    $clinic = $_POST["clinic"];
    $date = $_POST["date"];

    $ekle = "INSERT INTO randevu (Patient Name, ID, Telephone, Email, Clinic, date) VALUES ('".$namesurname."', '".$personelID."', '".$telephone."', '".$email."', '".$clinic."', '".$date."')";

    if($baglan->query($ekle)){
        echo "<script>alert('Mesajınız onaylandı.')</script>";
    }
    
    else{
        echo "<script>alert('ERROR 101')</script>";
    }
}

?>