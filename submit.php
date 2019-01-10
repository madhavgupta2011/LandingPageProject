<?php

$Fname=$_POST['Fname'];
$Mname=$_POST['Mname'];
$Lname=$_POST['Lname'];
$gender=$_POST['Gender'];
$email=$_POST['email'];
$number=$_POST['number'];
$dob=$_POST['dob'];
$Fname2=$_POST['Fname2'];
$Mname2=$_POST['Mname2'];
$Lname2=$_POST['Lname2'];
$gender2=$_POST['Gender2'];
$dob2=$_POST['dob2'];
$Fname3=$_POST['Fname3'];
$Mname3=$_POST['Mname3'];
$Lname3=$_POST['Lname3'];
$gender3=$_POST['Gender3'];
$dob3=$_POST['dob3'];
$Fname3=$_POST['Fname3'];
$Mname3=$_POST['Mname3'];
$Lname3=$_POST['Lname3'];
$gender3=$_POST['Gender3'];
$dob3=$_POST['dob3'];
$Fname4=$_POST['Fname4'];
$Mname4=$_POST['Mname4'];
$Lname4=$_POST['Lname4'];
$gender4=$_POST['Gender4'];
$dob4=$_POST['dob4'];
$Fname5=$_POST['Fname5'];
$Mname5=$_POST['Mname5'];
$Lname5=$_POST['Lname5'];
$gender5=$_POST['Gender5'];
$dob5=$_POST['dob5'];
$Fname6=$_POST['Fname6'];
$Mname6=$_POST['Mname6'];
$Lname6=$_POST['Lname6'];
$gender6=$_POST['Gender6'];
$dob6=$_POST['dob6'];
$Fname7=$_POST['Fname7'];
$Mname7=$_POST['Mname7'];
$Lname7=$_POST['Lname7'];
$gender7=$_POST['Gender7'];
$dob7=$_POST['dob7'];
$Fname8=$_POST['Fname8'];
$Mname8=$_POST['Mname8'];
$Lname8=$_POST['Lname8'];
$gender8=$_POST['Gender8'];
$dob8=$_POST['dob8'];
$Fname9=$_POST['Fname9'];
$Mname9=$_POST['Mname9'];
$Lname9=$_POST['Lname9'];
$gender9=$_POST['Gender9'];
$dob9=$_POST['dob9'];
$preferences=$_POST['preferences'];
$wheelchair=$_POST['wheelchair'];
$basinet=$_POST['basinet'];
$paymentcardnumber=$_POST['paymentcardnumber'];
$paymentname=$_POST['paymentname'];
$paymentmonth=$_POST['paymentmonth'];
$paymentyear=$_POST['paymentyear'];
$paymentcvv=$_POST['paymentcvv'];
$billingcountry=$_POST['billingcountry'];
$billingaddress=$_POST['billingaddress'];
$billingcity=$_POST['billingcity'];
$billingstate=$_POST['billingstate'];
$billingzip=$_POST['billingzip'];
$billingphonenumber=$_POST['billingphonenumber'];

$email_subject="New Form Submission";

if($Fname2!=null)
{
    if($Fname3!=null)
    {
        if($Fname4!=null)
        {
            if($Fname5!=null)
            {
                if($Fname6!=null)
                {
                    if($Fname7!=null)
                    {
                        if($Fname8!=null)
                        {
                            if($Fname9!=null)
                            {
                                $email_body="Passenger(Traveller-1) Details - \nUser First Name: $Fname .\n".
                                        "User Middle Name: $Mname.\n".
                                        "User Last Name: $Lname.\n".
                                        "User Gender: $gender.\n".
                                        "User's email: $email.\n".
                                        "User's number: $number.\n".
                                        "User's Date Of Birth: $dob.\n".
                                        "Meals: $preferences.\n".
                                        "Wheelchair needed: $wheelchair.\n".
                                        "Basinet needed: $basinet.\n".
                                        "Payment Details - \nUser's Credit/Debit Card Number: $paymentcardnumber .\n".
                                        "User's Name as on card: $paymentname .\n".
                                        "Expiration Month: $paymentmonth .\n".
                                        "Expiration Year: $paymentyear .\n".
                                        "CVV: $paymentcvv \n\n".
                                        "Billing Details of CardHolder - \n Country: $billingcountry .\n".
                                        "Address: $billingaddress .\n".
                                        "City: $billingcity .\n".
                                        "State: $billingstate .\n".
                                        "Zip: $billingzip .\n".
                                        "Phone Number: $billingphonenumber .\n".
                                        "Traveller-2 Details - \n User First Name: $Fname2 .\n".
                                        "User Middle Name: $Mname2. \n".
                                        "User Last Name: $Lname2. \n".
                                        "User's Dob: $dob2. \n".
                                        "User's Gender: $gender2. \n".
                                        "Traveller-3 Details - \n User First Name: $Fname3 .\n".
                                        "User Middle Name: $Mname3. \n".
                                        "User Last Name: $Lname3. \n".
                                        "User's Dob: $dob3. \n".
                                        "User's Gender: $gender3. \n".
                                        "Traveller-4 Details - \n User First Name: $Fname4 .\n".
                                        "User Middle Name: $Mname4. \n".
                                        "User Last Name: $Lname4. \n".
                                        "User's Dob: $dob4. \n".
                                        "User's Gender: $gender4. \n".
                                        "Traveller-5 Details - \n User First Name: $Fname5 .\n".
                                        "User Middle Name: $Mname5. \n".
                                        "User Last Name: $Lname5. \n".
                                        "User's Dob: $dob5. \n".
                                        "User's Gender: $gender5. \n".
                                        "Traveller-6 Details - \n User First Name: $Fname6 .\n".
                                        "User Middle Name: $Mname6. \n".
                                        "User Last Name: $Lname6. \n".
                                        "User's Dob: $dob6. \n".
                                        "User's Gender: $gender6. \n".
                                        "Traveller-7 Details - \n User First Name: $Fname7 .\n".
                                        "User Middle Name: $Mname7. \n".
                                        "User Last Name: $Lname7. \n".
                                        "User's Dob: $dob7. \n".
                                        "User's Gender: $gender7. \n".
                                        "Traveller-8 Details - \n User First Name: $Fname8 .\n".
                                        "User Middle Name: $Mname8. \n".
                                        "User Last Name: $Lname8. \n".
                                        "User's Dob: $dob8. \n".
                                        "User's Gender: $gender8. \n".
                                        "Traveller-9 Details - \n User First Name: $Fname9 .\n".
                                        "User Middle Name: $Mname9. \n".
                                        "User Last Name: $Lname9. \n".
                                        "User's Dob: $dob9. \n".
                                        "User's Gender: $gender9. \n";
                            }
                            else
                            {
                                $email_body="Passenger(Traveller-1) Details - \nUser First Name: $Fname .\n".
                                        "User Middle Name: $Mname.\n".
                                        "User Last Name: $Lname.\n".
                                        "User Gender: $gender.\n".
                                        "User's email: $email.\n".
                                        "User's number: $number.\n".
                                        "User's Date Of Birth: $dob.\n".
                                        "Meals: $preferences.\n".
                                        "Wheelchair needed: $wheelchair.\n".
                                        "Basinet needed: $basinet.\n".
                                        "Payment Details - \nUser's Credit/Debit Card Number: $paymentcardnumber .\n".
                                        "User's Name as on card: $paymentname .\n".
                                        "Expiration Month: $paymentmonth .\n".
                                        "Expiration Year: $paymentyear .\n".
                                        "CVV: $paymentcvv \n\n".
                                        "Billing Details of CardHolder - \n Country: $billingcountry .\n".
                                        "Address: $billingaddress .\n".
                                        "City: $billingcity .\n".
                                        "State: $billingstate .\n".
                                        "Zip: $billingzip .\n".
                                        "Phone Number: $billingphonenumber .\n".
                                        "Traveller-2 Details - \n User First Name: $Fname2 .\n".
                                        "User Middle Name: $Mname2. \n".
                                        "User Last Name: $Lname2. \n".
                                        "User's Dob: $dob2. \n".
                                        "User's Gender: $gender2. \n".
                                        "Traveller-3 Details - \n User First Name: $Fname3 .\n".
                                        "User Middle Name: $Mname3. \n".
                                        "User Last Name: $Lname3. \n".
                                        "User's Dob: $dob3. \n".
                                        "User's Gender: $gender3. \n".
                                        "Traveller-4 Details - \n User First Name: $Fname4 .\n".
                                        "User Middle Name: $Mname4. \n".
                                        "User Last Name: $Lname4. \n".
                                        "User's Dob: $dob4. \n".
                                        "User's Gender: $gender4. \n".
                                        "Traveller-5 Details - \n User First Name: $Fname5 .\n".
                                        "User Middle Name: $Mname5. \n".
                                        "User Last Name: $Lname5. \n".
                                        "User's Dob: $dob5. \n".
                                        "User's Gender: $gender5. \n".
                                        "Traveller-6 Details - \n User First Name: $Fname6 .\n".
                                        "User Middle Name: $Mname6. \n".
                                        "User Last Name: $Lname6. \n".
                                        "User's Dob: $dob6. \n".
                                        "User's Gender: $gender6. \n".
                                        "Traveller-7 Details - \n User First Name: $Fname7 .\n".
                                        "User Middle Name: $Mname7. \n".
                                        "User Last Name: $Lname7. \n".
                                        "User's Dob: $dob7. \n".
                                        "User's Gender: $gender7. \n".
                                        "Traveller-8 Details - \n User First Name: $Fname8 .\n".
                                        "User Middle Name: $Mname8. \n".
                                        "User Last Name: $Lname8. \n".
                                        "User's Dob: $dob8. \n".
                                        "User's Gender: $gender8. \n";
                            }
                        }
                        else
                        {
                            $email_body="Passenger(Traveller-1) Details - \nUser First Name: $Fname .\n".
                            "User Middle Name: $Mname.\n".
                            "User Last Name: $Lname.\n".
                            "User Gender: $gender.\n".
                            "User's email: $email.\n".
                            "User's number: $number.\n".
                            "User's Date Of Birth: $dob.\n".
                            "Meals: $preferences.\n".
                            "Wheelchair needed: $wheelchair.\n".
                            "Basinet needed: $basinet.\n".
                            "Payment Details - \nUser's Credit/Debit Card Number: $paymentcardnumber .\n".
                            "User's Name as on card: $paymentname .\n".
                            "Expiration Month: $paymentmonth .\n".
                            "Expiration Year: $paymentyear .\n".
                            "CVV: $paymentcvv \n\n".
                            "Billing Details of CardHolder - \n Country: $billingcountry .\n".
                            "Address: $billingaddress .\n".
                            "City: $billingcity .\n".
                            "State: $billingstate .\n".
                            "Zip: $billingzip .\n".
                            "Phone Number: $billingphonenumber .\n".
                            "Traveller-2 Details - \n User First Name: $Fname2 .\n".
                            "User Middle Name: $Mname2. \n".
                            "User Last Name: $Lname2. \n".
                            "User's Dob: $dob2. \n".
                            "User's Gender: $gender2. \n".
                            "Traveller-3 Details - \n User First Name: $Fname3 .\n".
                            "User Middle Name: $Mname3. \n".
                            "User Last Name: $Lname3. \n".
                            "User's Dob: $dob3. \n".
                            "User's Gender: $gender3. \n".
                            "Traveller-4 Details - \n User First Name: $Fname4 .\n".
                            "User Middle Name: $Mname4. \n".
                            "User Last Name: $Lname4. \n".
                            "User's Dob: $dob4. \n".
                            "User's Gender: $gender4. \n".
                            "Traveller-5 Details - \n User First Name: $Fname5 .\n".
                            "User Middle Name: $Mname5. \n".
                            "User Last Name: $Lname5. \n".
                            "User's Dob: $dob5. \n".
                            "User's Gender: $gender5. \n".
                            "Traveller-6 Details - \n User First Name: $Fname6 .\n".
                            "User Middle Name: $Mname6. \n".
                            "User Last Name: $Lname6. \n".
                            "User's Dob: $dob6. \n".
                            "User's Gender: $gender6. \n".
                            "Traveller-7 Details - \n User First Name: $Fname7 .\n".
                            "User Middle Name: $Mname7. \n".
                            "User Last Name: $Lname7. \n".
                            "User's Dob: $dob7. \n".
                            "User's Gender: $gender7. \n";   
                        }
                    }
                    else
                    {
                        $email_body="Passenger(Traveller-1) Details - \nUser First Name: $Fname .\n".
                        "User Middle Name: $Mname.\n".
                        "User Last Name: $Lname.\n".
                        "User Gender: $gender.\n".
                        "User's email: $email.\n".
                        "User's number: $number.\n".
                        "User's Date Of Birth: $dob.\n".
                        "Meals: $preferences.\n".
                        "Wheelchair needed: $wheelchair.\n".
                        "Basinet needed: $basinet.\n".
                        "Payment Details - \nUser's Credit/Debit Card Number: $paymentcardnumber .\n".
                        "User's Name as on card: $paymentname .\n".
                        "Expiration Month: $paymentmonth .\n".
                        "Expiration Year: $paymentyear .\n".
                        "CVV: $paymentcvv \n\n".
                        "Billing Details of CardHolder - \n Country: $billingcountry .\n".
                        "Address: $billingaddress .\n".
                        "City: $billingcity .\n".
                        "State: $billingstate .\n".
                        "Zip: $billingzip .\n".
                        "Phone Number: $billingphonenumber .\n".
                        "Traveller-2 Details - \n User First Name: $Fname2 .\n".
                        "User Middle Name: $Mname2. \n".
                        "User Last Name: $Lname2. \n".
                        "User's Dob: $dob2. \n".
                        "User's Gender: $gender2. \n".
                        "Traveller-3 Details - \n User First Name: $Fname3 .\n".
                        "User Middle Name: $Mname3. \n".
                        "User Last Name: $Lname3. \n".
                        "User's Dob: $dob3. \n".
                        "User's Gender: $gender3. \n".
                        "Traveller-4 Details - \n User First Name: $Fname4 .\n".
                        "User Middle Name: $Mname4. \n".
                        "User Last Name: $Lname4. \n".
                        "User's Dob: $dob4. \n".
                        "User's Gender: $gender4. \n".
                        "Traveller-5 Details - \n User First Name: $Fname5 .\n".
                        "User Middle Name: $Mname5. \n".
                        "User Last Name: $Lname5. \n".
                        "User's Dob: $dob5. \n".
                        "User's Gender: $gender5. \n".
                        "Traveller-6 Details - \n User First Name: $Fname6 .\n".
                        "User Middle Name: $Mname6. \n".
                        "User Last Name: $Lname6. \n".
                        "User's Dob: $dob6. \n".
                        "User's Gender: $gender6. \n";
                    }
                }                
                else
                {
                    $email_body="Passenger(Traveller-1) Details - \nUser First Name: $Fname .\n".
                        "User Middle Name: $Mname.\n".
                        "User Last Name: $Lname.\n".
                        "User Gender: $gender.\n".
                        "User's email: $email.\n".
                        "User's number: $number.\n".
                        "User's Date Of Birth: $dob.\n".
                        "Meals: $preferences.\n".
                        "Wheelchair needed: $wheelchair.\n".
                        "Basinet needed: $basinet.\n".
                        "Payment Details - \nUser's Credit/Debit Card Number: $paymentcardnumber .\n".
                        "User's Name as on card: $paymentname .\n".
                        "Expiration Month: $paymentmonth .\n".
                        "Expiration Year: $paymentyear .\n".
                        "CVV: $paymentcvv \n\n".
                        "Billing Details of CardHolder - \n Country: $billingcountry .\n".
                        "Address: $billingaddress .\n".
                        "City: $billingcity .\n".
                        "State: $billingstate .\n".
                        "Zip: $billingzip .\n".
                        "Phone Number: $billingphonenumber .\n".
                        "Traveller-2 Details - \n User First Name: $Fname2 .\n".
                        "User Middle Name: $Mname2. \n".
                        "User Last Name: $Lname2. \n".
                        "User's Dob: $dob2. \n".
                        "User's Gender: $gender2. \n".
                        "Traveller-3 Details - \n User First Name: $Fname3 .\n".
                        "User Middle Name: $Mname3. \n".
                        "User Last Name: $Lname3. \n".
                        "User's Dob: $dob3. \n".
                        "User's Gender: $gender3. \n".
                        "Traveller-4 Details - \n User First Name: $Fname4 .\n".
                        "User Middle Name: $Mname4. \n".
                        "User Last Name: $Lname4. \n".
                        "User's Dob: $dob4. \n".
                        "User's Gender: $gender4. \n".
                        "Traveller-5 Details - \n User First Name: $Fname5 .\n".
                        "User Middle Name: $Mname5. \n".
                        "User Last Name: $Lname5. \n".
                        "User's Dob: $dob5. \n".
                        "User's Gender: $gender5. \n";
                }
            }
            else
            {
                $email_body="Passenger(Traveller-1) Details - \nUser First Name: $Fname .\n".
                "User Middle Name: $Mname.\n".
                "User Last Name: $Lname.\n".
                "User Gender: $gender.\n".
                "User's email: $email.\n".
                "User's number: $number.\n".
                "User's Date Of Birth: $dob.\n".
                "Meals: $preferences.\n".
                "Wheelchair needed: $wheelchair.\n".
                "Basinet needed: $basinet.\n".
                "Payment Details - \nUser's Credit/Debit Card Number: $paymentcardnumber .\n".
                "User's Name as on card: $paymentname .\n".
                "Expiration Month: $paymentmonth .\n".
                "Expiration Year: $paymentyear .\n".
                "CVV: $paymentcvv \n\n".
                "Billing Details of CardHolder - \n Country: $billingcountry .\n".
                "Address: $billingaddress .\n".
                "City: $billingcity .\n".
                "State: $billingstate .\n".
                "Zip: $billingzip .\n".
                "Phone Number: $billingphonenumber .\n".
                "Traveller-2 Details - \n User First Name: $Fname2 .\n".
                "User Middle Name: $Mname2. \n".
                "User Last Name: $Lname2. \n".
                "User's Dob: $dob2. \n".
                "User's Gender: $gender2. \n".
                "Traveller-3 Details - \n User First Name: $Fname3 .\n".
                "User Middle Name: $Mname3. \n".
                "User Last Name: $Lname3. \n".
                "User's Dob: $dob3. \n".
                "User's Gender: $gender3. \n".
                "Traveller-4 Details - \n User First Name: $Fname4 .\n".
                "User Middle Name: $Mname4. \n".
                "User Last Name: $Lname4. \n".
                "User's Dob: $dob4. \n".
                "User's Gender: $gender4. \n";
            }
        }
        else
        {
            $email_body="Passenger(Traveller-1) Details - \nUser First Name: $Fname .\n".
                "User Middle Name: $Mname.\n".
                "User Last Name: $Lname.\n".
                "User Gender: $gender.\n".
                "User's email: $email.\n".
                "User's number: $number.\n".
                "User's Date Of Birth: $dob.\n".
                "Meals: $preferences.\n".
                "Wheelchair needed: $wheelchair.\n".
                "Basinet needed: $basinet.\n".
                "Payment Details - \nUser's Credit/Debit Card Number: $paymentcardnumber .\n".
                "User's Name as on card: $paymentname .\n".
                "Expiration Month: $paymentmonth .\n".
                "Expiration Year: $paymentyear .\n".
                "CVV: $paymentcvv \n\n".
                "Billing Details of CardHolder - \n Country: $billingcountry .\n".
                "Address: $billingaddress .\n".
                "City: $billingcity .\n".
                "State: $billingstate .\n".
                "Zip: $billingzip .\n".
                "Phone Number: $billingphonenumber .\n".
                "Traveller-2 Details - \n User First Name: $Fname2 .\n".
                "User Middle Name: $Mname2. \n".
                "User Last Name: $Lname2. \n".
                "User's Dob: $dob2. \n".
                "User's Gender: $gender2. \n".
                "Traveller-3 Details - \n User First Name: $Fname3 .\n".
                "User Middle Name: $Mname3. \n".
                "User Last Name: $Lname3. \n".
                "User's Dob: $dob3. \n".
                "User's Gender: $gender3. \n";
        }
    }
    else
    {
    $email_body="Passenger(Traveller-1) Details - \nUser First Name: $Fname .\n".
            "User Middle Name: $Mname.\n".
            "User Last Name: $Lname.\n".
            "User Gender: $gender.\n".
            "User's email: $email.\n".
            "User's number: $number.\n".
            "User's Date Of Birth: $dob.\n".
            "Meals: $preferences.\n".
            "Wheelchair needed: $wheelchair.\n".
            "Basinet needed: $basinet.\n".
            "Payment Details - \nUser's Credit/Debit Card Number: $paymentcardnumber .\n".
            "User's Name as on card: $paymentname .\n".
            "Expiration Month: $paymentmonth .\n".
            "Expiration Year: $paymentyear .\n".
            "CVV: $paymentcvv \n\n".
            "Billing Details of CardHolder - \n Country: $billingcountry .\n".
            "Address: $billingaddress .\n".
            "City: $billingcity .\n".
            "State: $billingstate .\n".
            "Zip: $billingzip .\n".
            "Phone Number: $billingphonenumber .\n".
            "Traveller-2 Details - \n User First Name: $Fname2 .\n".
            "User Middle Name: $Mname2. \n".
            "User Last Name: $Lname2. \n".
            "User's Dob: $dob2. \n".
            "User's Gender: $gender2. \n";
    }
}
else
{
    $email_body="Passenger(Traveller-1) Details - \nUser First Name: $Fname .\n".
            "User Middle Name: $Mname.\n".
            "User Last Name: $Lname.\n".
            "User Gender: $gender.\n".
            "User's email: $email.\n".
            "User's number: $number.\n".
            "User's Date Of Birth: $dob.\n".
            "Meals: $preferences.\n".
            "Wheelchair needed: $wheelchair.\n".
            "Basinet needed: $basinet.\n".
            "Payment Details - \nUser's Credit/Debit Card Number: $paymentcardnumber .\n".
            "User's Name as on card: $paymentname .\n".
            "Expiration Month: $paymentmonth .\n".
            "Expiration Year: $paymentyear .\n".
            "CVV: $paymentcvv \n\n".
            "Billing Details of CardHolder - \n Country: $billingcountry .\n".
            "Address: $billingaddress .\n".
            "City: $billingcity .\n".
            "State: $billingstate .\n".
            "Zip: $billingzip .\n".
            "Phone Number: $billingphonenumber .\n";
}

$to="touretosupp@gmail.com";

$headers ="From: $email_from \r\n";
$headers ="Reply to: $email\r\n";

if(mail($to,$email_subject,$email_body,$headers))
{ 
 include 'successpage.html'; 
}
else
{
    echo "youre not";
}

?>