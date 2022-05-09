<!DOCTYPE html>
<?php
// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $phone = $_POST['phone_1'] . "-" . $_POST['phone_2'] . "-" . $_POST['phone_3'];
// $usename = $_POST['email'];
// $pword = $_POST['pword'];
// $address = $_POST['address'];
// $state = $_POST['state'];
// $zip = $_POST['zip'];
// $city = $_POST['city'];
// $birthday = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];

//require_once "DataBaseConnection.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Client Completed Page</title>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- stylesheets -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    </head>
    </head>
    <body>
        <?php
        // $insert = "Insert into Clients(`fname`, `lname`, `phone`, `address`, `city`, `state`, `zip`, "
        //         . "`birthday`, `email`, `thepassword`, `createdate`) "
        //         . "values ('" . $fname . "', '" . $lname . "', '" . $phone . "', '" . $address . "', '" . $city . "', '"
        //         . $state . "', '" . $zip . "', '" . $birthday . "', '" . $usename . "', '" . hash("ripemd128", $pword)
        //         . "', CURRENT_DATE())";
    //echo $insert;
        // if ($conndb->query($insert) === TRUE) {
        //     $search = "select * from Clients where email ='" . $usename .  "'";
        //     //$message = "Whole query ".$search;
        //     //echo $message;
        //     $return = $conndb->query($search);
        //     //print_r($return);
        //
        //     echo "<table><tr><th>Firstname</th><th>Lastname</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Phone</th></tr>";
        //     while ($row = $return->fetch_assoc()) {
        //         echo "<tr><td> " . $row['fname'] . "</td>";
        //         echo "<td> " . $row['lname'] . "</td>";
        //         echo "<td>" . $row['address'] . "</td>";
        //         echo "<td> " . $row['city'] . "</td>";
        //         echo "<td> " . $row['state'] . "</td>";
        //         echo "<td> " . $row['zip'] . "</td>";
        //         echo "<td> " . $row['phone'] . "</td></tr>";
        //     }
        //     echo "</table>";
        // } else {
        //     echo "Error updating record: " . $conndb->error;
        // }
        // $conndb->close();
        ?>
        <h1 class="text-center m-4">Sign up for our newsletter!</h1>

        <div class="container mb-3" >
          <form action=# method="post">
              <label class="form-label" for="fname">First Name</label>
            <input class="form-control" type="text" id="fname"><br>
              <label class="form-label" for="lname">Last Name</label>
            <input class="form-control" type="text" id="lname"><br>
              <label class="form-label" for="phone_1">Phone Number</lable>
            <input class="form-control" type="number" id="phone_1" maxlength="3">-<input class="form-control" type="number" id="phone_2" maxlength="3">-<input class="form-control"  type="number" id="phone_3" maxlength="4"><br>
              <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" id="email"><br>
              <label class="form-label" for="pword">Password</label>
            <input class="form-control" type="password" id="pword"><br>
              <label class="form-label" for="address">Address</label>
            <input class="form-control" type="text" id="address" ><br>
              <label class="form-label" for="state">State</label>
            <input class="form-control" type="text" id="state"  maxlength="2" placeholder="UT"><br>
              <label class="form-label" for="zip">Zip</label>
            <input class="form-control" type="number" id="zip"  maxlength="5"><br>
              <label class="form-label" for="city">City</label>
            <input class="form-control" type="text" id="city" ><br>
              <label class="form-label" for="year">Birthday</label>
            <input class="form-control" type="number" id="year" maxlength="4" placeholder="Year-0000" >-<input class="form-control" type="number" id="month" maxlength="2" placeholder="Month-00" >-<input class="form-control" type="number" id="day" maxlength="2" placeholder="Day-00">  <br>
<div class="btn-group" role="group" style="margin-bottom:70px;">
            <input class="btn btn-outline-dark" type="reset" onclick="location.reload();"><input class="btn btn-outline-dark" type="submit" id="submit" onclick="return validateForm();">
<div>
          </form>
        </div>

                <script>

                function validateForm(){
                  var isvalid = true;
                // validate that first and last names are filled out. validate they are letters
                var isLetter = /^[a-zA-Z]+$/;
                if(isLetter.test(document.getElementById('fname')).value && isLetter.test(document.getElementById('lname').value)){
                  return isvalid;
                } else {
                  document.getElementById('fname').style.border = "red solid 3px";
                  document.getElementById('lname').style.border = "red solid 3px";
                  isvalid = false;
                }

                // if(isLetter.test(document.getElementById('lname').value)){
                //   return true;
                // } else {
                //   document.getElementById('lname').style.border = "red solid 3px";
                //   return false;
                // }

                //validate email
                var emailExpression = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
                  if(emailExpression.test(document.getElementById('email').value)){
                    return isvalid;
                  } else {
                    document.getElementById('email').style.border = "red solid 3px";
                    isvalid = false;
                  }

//ensures other fields are filled out

                  if(document.getElementById('phone_1').value == "" && document.getElementById('phone_2').value == "" && document.getElementById('phone_3').value == ''){
                    document.getElementById('phone_1').style.border = "red solid 3px";
                    document.getElementById('phone_2').style.border = "red solid 3px";
                     document.getElementById('phone_3').style.border = "red solid 3px";
                     isvalid = false;
                  } else { return isvalid; }

                  if(document.getElementById('address').value == ""){
                    document.getElementById('address').style.border = "red solid 3px";
                    isvalid = false;
                  } else { return isvalid; }

                  if(document.getElementById('state').value == ""){
                    document.getElementById('state').style.border = "red solid 3px";
                    isvalid = false;
                  } else { return isvalid; }

                  if(document.getElementById('zip').value == ""){
                    document.getElementById('zip').style.border = "red solid 3px";
                    isvalid = false;
                  } else { return isvalid; }

                  if(document.getElementById('city').value == ""){
                    document.getElementById('city').style.border = "red solid 3px";
                    isvalid = false;
                  } else { return isvalid; }

                  if(document.getElementById('year').value == "" && document.getElementById('month').value == "" && document.getElementById('day').value == ''){
                    document.getElementById('year').style.border = "red solid 3px";
                    document.getElementById('month').style.border = "red solid 3px";
                     document.getElementById('day').style.border = "red solid 3px";
                     isvalid = false;
                  } else { return isvalid; }
return isvalid;
              }
                </script>
    </body>
</html>
