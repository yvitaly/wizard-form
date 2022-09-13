<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../../public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type='text/javascript' src='../../../public/js/main.js'></script>
<!--Google map-->
<div id="map-container-google-1" class="container-fluid" style="height: 450px;">
    <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.7617225383497!2d-118.34368359999999!3d34.101244099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf20e4c82873%3A0x14015754d926dadb!2s7060%20Hollywood%20Blvd%2C%20Los%20Angeles%2C%20CA%2090028%2C%20USA!5e0!3m2!1sen!2sua!4v1663071805266!5m2!1sen!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!--Google Maps-->

    <form class="steps-form" action="">
        <div class="steps-box">
            <h2>Account information</h2>
            <label for="Name">Name</label>
            <input id="Name" type="text" class="required" />
            <label for="Email">Email</label>
            <input id="Email" type="text"  />
            <label for="Password">Password</label>
            <input id="Password" type="password" />
        </div>
        <div class="steps-box">
            <h2>Company information</h2>
            <label for="CompanyName">Company Name</label>
            <input id="CompanyName" type="text" class="required" />
            <label for="Website">Website</label>
            <input id="Website" type="text" />
            <label for="CompanyEmail">CompanyEmail</label>
            <input id="CompanyEmail" type="text" />
        </div>
        <div class="steps-box">
            <h2>Billing information</h2>
            <label for="NameOnCard">Name on Card</label>
            <input id="NameOnCard" type="text" class="required"/>
            <label for="CardNumber">Card Number</label>
            <input id="CardNumber" type="text" />
            <label for="CreditcardMonth">Expiration</label>
            <select id="CreditcardMonth">
                <option value="1">1</option>
                <option value="12">12</option>
            </select>
            <select id="CreditcardYear">
                <option value="2009">2009</option>
            </select>
            <label for="Address1">Address 1</label>
            <input id="Address1" type="text" />
            <label for="Address2">Address 2</label>
            <input id="Address2" type="text" />
            <label for="City">City</label>
            <input id="City" type="text" />
            <label for="City">City</label>
            <select id="Country">
                <option value="CA">Canada</option>
            </select>
        </div>
        <input class="SaveAccount" type="submit" value="Submit form" />
    </form>

</body>
</html>
