
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/wizard-form/public/css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<!--Google map-->
    <div id="map-container-google-1" class="container-fluid" style="height: 450px;">
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.7617225383497!2d-118.34368359999999!3d34.101244099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf20e4c82873%3A0x14015754d926dadb!2s7060%20Hollywood%20Blvd%2C%20Los%20Angeles%2C%20CA%2090028%2C%20USA!5e0!3m2!1sen!2sua!4v1663071805266!5m2!1sen!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <br/>
<!--Google Maps-->


<div class="firstStep" <?php if (empty($_SESSION['userId'])){
    echo "style=display:block";}
else { echo "style=display:none";} ?> >
    <h2>"To participate in the conference, please fill out the form”</h2>
            <p class="errormess" style="color: red"></p>
            <label>First Name</label>
            <input type="text" class="form-control firstName" placeholder="First Name" name="firstName" >
        <br/>

            <label>Last Name</label>
            <input type="text" class="form-control lastName" placeholder="Last Name" name="lastName">
        <br/>

            <label>Your Birthday</label>
            <input type="date" class="form-control birthdate" name="birthdate">
        <br/>

            <label>Report Subject</label>
            <input type="text" class="form-control reportSubject" placeholder="Report Subject" name="reportSubject">
        <br/>

            <label>Your Country</label>
            <select name="country" class="form-control country" >
                <option >Ukraine</option>
                <option >Poland</option>
                <option >Germany</option>
                <option >France</option>
                <option >Denmark</option>
            </select>
        <br/>

            <label>Your phone</label>
            <input type="tel" class="form-control phone" placeholder="+1(555)555-5555" name="phone">
        <br/>

            <label>Your email</label>
            <input type="email" class="form-control email" name="email">
        <br/>

            <button class="firstNext">Next</button>

    </div>


    <div class="secondStep" <?php if (!empty($_SESSION['userId'])) {
        echo "style=display:block";
    } else {
        echo "style=display:none";
    } ?> >
        <h2>"To participate in the conference, please fill out the form”</h2>
        <input type="hidden" name="userId" class="userId" value =" " >
        <label>Company</label>
        <input type="text" class="form-control company" placeholder="Company" name="company">
        <br/>

        <label>Position</label>
        <input type="text" class="form-control posittion" placeholder="Position" name="posittion">
        <br/>

        <label>About you</label>
        <textarea class="form-control aboutMe" rows="3" placeholder="About you .." name="aboutMe"></textarea>
        <br/>

        <label>Check your photo</label>
        <input type="file" class="form-control-file photo" name="photo">
        <br/>

        <button class="secondNext">Next</button>

    </div>

    <div class="social" style="display: none">
        <ul>
            <li>
                <a class="facebook" href="">
                    <i class="fa fa-facebook"></i>
                    <span>Facebook</span>
                </a>
            </li>

            <li>
                <a class="twitter" href="">
                    <i class="fa fa-twitter"></i>
                    <span>Twitter</span>
                </a>
            </li>
        </ul>

        <a class="btn btn-primary" href="/wizard-form/users" role="button">All members ()</a>

    </div>

    <script>
        $(document).ready(function (){
            $('button.firstNext').on('click',function() {
                var firstNameVal = $('input.firstName').val();
                var lastNameVal = $('input.lastName').val();
                var birthdateVal = $('input.birthdate').val();
                var reportSubjectVal = $('input.reportSubject').val();
                var countryVal = $('select.country').val();
                var phoneVal = $('input.phone').val();
                var emailVal = $('input.email').val();
                var userId = $('input.userId').val();

                if(firstNameVal=="") {
                    $('.errormess').text("All field must not be empty");
                    console.log("error");
                    return false;
                }
                else if (lastNameVal==""){
                    $('.errormess').text("All field must not be empty");
                    return false;
                }
                else if (birthdateVal==""){
                    $('.errormess').text("All field must not be empty");
                    return false;
                }
                else if (reportSubjectVal==""){
                    $('.errormess').text("All field must not be empty");
                    return false;
                }
                else if (countryVal==""){
                    $('.errormess').text("All field must not be empty");
                    return false;
                }
                else if (phoneVal==""){
                    $('.errormess').text("All field must not be empty");
                    return false;
                }
                else if (emailVal==""){
                    $('.errormess').text("All field must not be empty");
                    return false;
                }

                $('.errormess').text("");

               $('.firstStep').css('display', 'none');
               $('.secondStep').css('display', 'block');
                $.ajax({
                    method: "POST",
                    url: "/wizard-form/firstform",
                    data: { firstName: firstNameVal, lastName: lastNameVal, birthdate: birthdateVal,
                        reportSubject: reportSubjectVal, country: countryVal, phone: phoneVal, email: emailVal, userId:userId },
                    success: function (data){
                        console.log(data);
                        $('.userId').val(data);
                    }
                })
            })
            $(document).ready(function (){
                $('button.secondNext').on('click',function() {
                    //var userIdVal = $('input.userId').val();


                    var companyVal = $('input.company').val();
                    var posittionVal = $('input.posittion').val();
                    var aboutMeVal = $('textarea.aboutMe').val();
                    var photoVal = $('input.photo').val();


                    $('.social').css('display', 'block');
                    $('.secondStep').css('display', 'none');

                    $.ajax({
                        method: "POST",
                        url: "/wizard-form/secondform",
                        data: { company: companyVal, posittion: posittionVal, aboutMe: aboutMeVal,
                            photo: photoVal }
                        })
                })
            });
        });

    </script>

</body>
</html>