<?php 
if(isset($_POST['create_member'])){
  $member_firstname =$_POST['member_firstname'];
   $member_lastname =$_POST['member_lastname'];
   $member_middlename =$_POST['member_middlename'];
   $member_type =$_POST['member_type'];

//    $post_image =$_FILES['image']['name'];
//    $post_image_temp =$_FILES['image']['tmp_name'];
//    $post_date = date('d-m-y');

// move_uploaded_file($post_image_temp, "../images/$post_image");

$query = "INSERT INTO members(member_lastname, member_firstname, member_middlename, member_type) ";
$query.= "VALUES('{$member_lastname}', '{$member_firstname}', '{$member_middlename}', '{$member_type}' ) ";

$create_member_query = mysqli_query($connection, $query);

confirm($create_member_query);

 echo "member Created: " . " ". $member_lastname ." ".',' ." " . $member_firstname . " " . $member_middlename . " " . "<a href='members.php'>View members</a> ";

}

?>

    <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Last Name</label>
                <input type="text" class="form-control" id="validationCustom01"  name="member_lastname"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please fill in Last Name!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">First Name</label>
                <input type="text" class="form-control" id="validationCustom02"  name="member_firstname"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please fill in First Name!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Middle Name</label>
                <input type="text" class="form-control" id="validationCustom02" name="member_middlename"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please fill in Middle Name!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12">
           <hr>
            </div> 
        </div>
        <div class="form-row">
            <div class="col-md-12">
            <h5><strong>Residential Address</strong></h5>
            </div> 
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">House Number / Blk / Sitio</label>
                <input type="text" class="form-control" id="validationCustom03" name="rsitio" required>
                <div class="invalid-feedback">
                    Please provide a valid Barangay.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="validationCustom03">Barangay</label>
                <input type="text" class="form-control" id="validationCustom03" name="rbarangay" required>
                <div class="invalid-feedback">
                    Please provide a valid Barangay.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">Municipality</label>
                <input type="text" class="form-control" id="validationCustom04" name="rmunicipality" required>
                <div class="invalid-feedback">
                    Please provide a valid Municipality.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Province</label>
                <input type="text" class="form-control" id="validationCustom05" name="rprovince" required>
                <div class="invalid-feedback">
                    Please provide a valid Province.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" name="rzip" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12">
            <h5><strong>Provincial Address</strong></h5>
            </div> 
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">House Number / Blk / Sitio</label>
                <input type="text" class="form-control" id="validationCustom03" name="psitio" required>
                <div class="invalid-feedback">
                    Please provide a valid Barangay.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="validationCustom03">Barangay</label>
                <input type="text" class="form-control" id="validationCustom03" name="pbarangay" required>
                <div class="invalid-feedback">
                    Please provide a valid Barangay.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">Municipality</label>
                <input type="text" class="form-control" id="validationCustom04" name="pmunicipality" required>
                <div class="invalid-feedback">
                    Please provide a valid Municipality.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Province</label>
                <input type="text" class="form-control" id="validationCustom05" name="pprovince" required>
                <div class="invalid-feedback">
                    Please provide a valid Province.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" name="pzip" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-12">
            <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">General Information</a></li>
    <li><a data-toggle="tab" href="#menu1">Beneficiary</a></li>
    <li><a data-toggle="tab" href="#menu2">Income</a></li>
    <li><a data-toggle="tab" href="#menu3">Income</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>General Information</h3>
      <div class="form-row">
            <div class="col-md-12">
            <h5><strong>Residential Address</strong></h5>
            </div> 
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">House Number / Blk / Sitio</label>
                <input type="text" class="form-control" id="validationCustom03" name="rsitio" required>
                <div class="invalid-feedback">
                    Please provide a valid Barangay.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="validationCustom03">Barangay</label>
                <input type="text" class="form-control" id="validationCustom03" name="rbarangay" required>
                <div class="invalid-feedback">
                    Please provide a valid Barangay.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">Municipality</label>
                <input type="text" class="form-control" id="validationCustom04" name="rmunicipality" required>
                <div class="invalid-feedback">
                    Please provide a valid Municipality.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Province</label>
                <input type="text" class="form-control" id="validationCustom05" name="rprovince" required>
                <div class="invalid-feedback">
                    Please provide a valid Province.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" name="rzip" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
      <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text" class="form-control" id="validationCustom01"  name="member_lastname"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Last name</label>
                <input type="text" class="form-control" id="validationCustom02"  name="member_lastname"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Middle name</label>
                <input type="text" class="form-control" id="validationCustom02" name="member_middlename"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
            </div>
        </div>
       
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
