<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>

<body>
    <div class="container">
        <h2>Apply For a Position</h2>
        <h4 class="text-muted pb-4">Please Complete the form below to apply for a position with us.</h4>
        <form action="store.php" method="post">
            <div class="row">
                <label for="name" id="myrow">Name:</label>
                <div class="col-sm-3">
                    <input type="text" name="firstname" class="form-control" id="fname">
                    <label for="fname">FirstName</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="lastname" class="form-control" id="lname">
                    <label for="lname">LastName</label>
                </div>
            </div>
            <div class="row"><label id="show_error" class="myrow5"></label></div>

            <div class="row">
                <label for="name" id="myrow1">Profile Link</label>
                <div class="col-sm-6">
                    <input type="text" name="profile" class="form-control" placeholder="LinkedIn Or Drupal">
                    <label for="fname"></label>
                </div>
            </div>

            <div class="row">
                <label for="name" id="myrow2">Email:</label>
                <div class="col-sm-6">
                    <input type="text" name="email" class="form-control" id="uemail">
                    <label for="fname">example@example.com</label>
                </div>
            </div>
            <div class="row"><label id="show_error_email" class="myrow5"></label></div>


            <div class="row">
                <label for="name" id="myrow3">Phone Number</label>
                <div class="col-sm-2">
                    <input type="text" name="areacode" class="form-control" id="uphone">
                    <label for="areacode">Area Code</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="phone" class="form-control" id="uphone">
                    <label for="phone">Phone Number</label>
                </div>
            </div>
            <div class="row"><label id="show_error_phone" class="myrow5"></label></div>


            <div class="row">
                <label for="name" id="myrow4">Applying For Position :</label>
                <div class="col-sm-6">
                    <input type="text" name="applypost" class="form-control" id="uposition">
                </div>
            </div>
            <div class="row"><label id="show_error_post" class="myrow5"></label></div>

            <div class="row pt-4">
                <label for="name" id="myrow5">When you can Start :</label>
                <div class="col-sm-6">
                    <input type="text" name="notice" class="form-control" id="ustart">
                </div>
            </div>
            <div class="row"><label id="show_error_start" class="myrow5"></label></div>


            <div class="row pt-4">
                <div class="form-inline">
                    <label for="example1" class="" id="myrow6">State</label>
                    <select class="form-control" name="state" id="exampleCity">
                        <option>Select</option>
                        <option value="delhi">Delhi</option>
                        <option value="other">other</option>
                    </select>

                    <label for="example1" class="pl-3 pr-2">City</label>
                    <select class="form-control" name="city" id="optionDelhi">
                        <option value="northdelhi">North Delhi</option>
                        <option value="southdelhi">South Delhi</option>
                        <option value="westdelhi">West Delhi</option>
                        <option value="eastdelhi">East Delhi</option>
                    </select>

                    <div class="col-sm-1">
                        <input type="text" name="othercity" class="form-control" id="othercity" Placeholder="Enter City Here">
                    </div>
                </div>
            </div>

            <div class="row" id="relocate">
                <div class="form-inline">
                    <label for="example1" class="pr-5 pt-4">Are you willing to relocate?</label>
                    <div class="form-check">
                        <input class="form-check-input ml-4" name="relocatecity" type="radio"   id="exampleRadios1" value="Yes">
                        <label class="form-check-label pr-3" for="exampleRadios1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="relocatecity" type="radio" id="exampleRadios2" value="No">
                        <label class="form-check-label pr-3" for="exampleRadios2">
                            No
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="relocatecity" type="radio"   id="exampleRadios2" value="Not_Sure">
                        <label class="form-check-label pr-3" for="exampleRadios2">
                            Not Sure
                        </label>
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <label for="name" id="myrow7">Last Company you worked :</label>
                <div class="col-sm-6">
                    <input type="text" name="lastcom" class="form-control" id="workexp">
                </div>
            </div>
            <div class="row"><label id="show_error_experience" class="myrow5"></label></div>

            <div class="row pt-4">
                <div class="form-group">
                    <label for="inputAddress">Comments</label>
                    <textarea type="text" name="comments" class="form-control" id="inputcomments" rows="4" cols="90"></textarea>
                </div>
            </div>





            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var user = $('#fname').val();
                if (user == "") {
                    $('#show_error').html('Username is Required');
                    $('#show_error').css('color', 'red');
                }
                var useremail = $('#uemail').val();
                if (useremail == "") {
                    $('#show_error_email').html('Email is Required');
                    $('#show_error_email').css('color', 'red');
                }

                var userphone = $('#uphone').val();
                if (userphone == "") {
                    $('#show_error_phone').html('Phone is Required');
                    $('#show_error_phone').css('color', 'red');
                }

                var userposition = $('#uposition').val();
                if (userposition == "") {
                    $('#show_error_post').html('Position is Required');
                    $('#show_error_post').css('color', 'red');
                }

                var userstart = $('#ustart').val();
                if (userstart == "") {
                    $('#show_error_start').html('Enter Start Date is Required');
                    $('#show_error_start').css('color', 'red');
                }

                var userwork = $('#workexp').val();
                if (userwork == "") {
                    $('#show_error_experience').html('Field is Required Or Enter Fresher');
                    $('#show_error_experience').css('color', 'red');
                }


            })
        })

        //        Show and Hide the Item
        $(document).ready(function() {
            $("#exampleCity").change(function() {
                $("#relocate").hide();

                var cityname = $("#exampleCity").val();
                if (cityname == "Delhi") {
                    $("#relocate").hide();
                    $("#othercity").hide();
                    $("#optionDelhi").show();

                } else if (cityname == "other") {
                    $("#optionDelhi").hide();
                    $("#othercity").show();

                    $("#relocate").show();
                } else {
                    $("#optionDelhi").show();
                    $("#relocate").hide();
                }
            })
        })

    </script>
</body>

</html>
