<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';

    //fetching the profile details from the database
    $user_id = $_SESSION['user_id'];

    $query = "SELECT * FROM students WHERE id = :id";
    $statement = $con->prepare($query);

    $statement->execute(
        array(
            ":id" => $user_id,
        )
    );

    $results = $statement->fetch();


?>
<div id="content">
    <div class="container">

        <style>
            @media (max-width: 1199px) {
                #personal_info {
                    width: 91%;
                }
            }

            @media (max-width: 991px) {
                #personal_info {
                    width: 100%;
                }
            }
        </style>
        <form enctype="multipart/form-data" id="the_profile_form" method="POST">
            <div class="grid_17">
                <div>
                    <div class="profile_box" style="margin-bottom:15px">
                        <div class="passport_pic_box">
                            <div id="studpic" style="text-align:center" class="passport_pic_box">
                                <img class="img-thumbnail" id="preview" alt="Student Picture"
                                    src="<?= $results['image']?>" style='width:200px ; height:200px;object-fit: cover;
                                    object-position: center center;align-self: center;' /></div>


                        </div>
                    </div>
                </div>

                <div id="personal_info" style="min-width:75% !important;">
                    <p id="pinfo">PERSONAL INFORMATION</p>

                    <ol>
                        <li>You are to verify, fill and complete all required fields as shown on this page.</li>
                        <li>Click on Update Profile &amp; Continue once you have completed this step.</li>

                    </ol>
                </div>
            </div>

            <!-- EOF span4 -->
            <div class="grid_17">
                <div id="personal_info_details">

                    <ul>
                        <li id="hidetxt">Upload a passport sized photograph by clicking on the "Browse..." or "Choose
                            File"
                            button to select and upload image</li>
                    </ul>
                    <div>
                        <div>
                            <div class="colspa2 form-group">
                                <p id="pinfo2">Please Review and Edit your Personal Information and make sure it is up
                                    to
                                    date</p>
                            </div>
                            <center>
                                <div style="color:red"><b></b></div>
                            </center>
                        </div>
                    </div>
                    <hr>

                    <div class="contain">
                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Student ID</div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" readonly id="studID" value="<?= $results['id']; ?>" />


                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Title</div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" readonly value="<?= $results['title']; ?>" />


                            </div>
                        </div>


                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Surname</div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" readonly value="<?= $results['lastname']; ?>" />

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Other Names</div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" readonly
                                    value="<?= $results['firstname'] . ' ' . $results['middlename']?>" />
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Birth Date</div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" readonly value="<?= $results['dob']; ?>" />
                            </div>
                        </div>

                        <div class="form-group" style="display: block" id="GroupOptions">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Denomination/Group
                            </div>
                            <div class="col-lg-offset-3">
                                <select class="form-control" data-target="#GroupEntry" data-val="true"
                                    data-val-number="The field PROGRAMID must be a number." id="PROGRAMID"
                                    name="PROGRAMID" onchange="ControlOptions(this);">
                                    <option value=""></option>
                                    <?php
                                    $program_query = "SELECT * FROM program";
                                    $program_statement = $con->prepare($program_query);

                                    $program_statement->execute();
                                    $program_result = $program_statement->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($program_result as $program_results){
                                        if($program_results['id'] == $results['program']){?>
                                    <option selected="selected" value="<?= $program_results['id'];?>">
                                        <?= $program_results['name'];?></option>
                                    <?php
                                        }
                                        else{?>
                                    <option value="<?= $program_results['id'];?>"><?= $program_results['name'];?></option>
                                    <?php
                                        }
                                    }
                                ?>
                                </select>
                                <span class="field-validation-valid" data-valmsg-for="DENOMINATIONID"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">School Email Address
                            </div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" readonly value="<?= $results['school_email']; ?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Primary Mobile Number
                            </div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" id="PRIMARYMOBILE" name="PRIMARYMOBILE" style="width: 95%;"
                                    type="text" value="<?= $results['phone_number']; ?>" />
                                <span class="field-validation-valid" data-valmsg-for="PHONE"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Other Phone Numbers
                            </div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" id="OTHER_PHONE" name="OTHER_PHONE" style="width: 95%;" type="text"
                                    value="<?= $results['other_phone_numbers']; ?>" />
                                <span class="field-validation-valid" data-valmsg-for="PHONE"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Other Email</div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" id="OTHER_EMAIL" name="OTHER_EMAIL" style="width: 95%;" type="text"
                                    value="<?= $results['other_email']; ?>" />
                                <span class="field-validation-valid" data-valmsg-for="EMAIL"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Region</div>
                            <div class="col-lg-offset-3">
                                <select class="form-control" data-val="true"
                                    data-val-number="The field REGIONID must be a number." id="REGIONID" name="REGIONID"
                                    style="width: 95%;">
                                    <option value=""></option>

                                    <?php
                                    //fetching the regions from the database

                                    $region_query = "SELECT * FROM regions";
                                    $regions_statement = $con->prepare($region_query);

                                    $regions_statement->execute();
                                    $regions_result = $regions_statement->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($regions_result as $regions_results){
                                        if($regions_results['id'] == $results['region']){?>
                                    <option selected="selected" value="<?= $regions_results['id'];?>">
                                        <?= strtoupper($regions_results['name']);?></option>
                                    <?php
                                        }
                                        else{?>
                                    <option value="<?= $regions_results['id'];?>">
                                        <?= strtoupper($regions_results['name']);?></option>
                                    <?php
                                        }
                                    }
                                ?>
                                </select>
                                <span class="field-validation-valid" data-valmsg-for="REGIONID"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Gender</div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" readonly value="<?= $results['gender']; ?>" />


                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Country</div>
                            <div class="col-lg-offset-3">
                                <input class="form-control" readonly value="<?= $results['country']; ?>" />


                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Residential Address
                            </div>
                            <div class="col-lg-offset-3">
                                <textarea class="form-control" id="RESADD1"
                                    name="RESADD1"><?= $results['residential_address']; ?></textarea>
                                <span class="field-validation-valid" data-valmsg-for="RESADD1"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Postal Address</div>
                            <div class="col-lg-offset-3">
                                <textarea class="form-control" id="POSTADD1"
                                    name="POSTADD1"><?= $results['postal_address']; ?></textarea>
                                <span class="field-validation-valid" data-valmsg-for="RESADD1"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Religion</div>
                            <div class="col-lg-offset-3">
                                <select class="form-control" data-target="#GroupOptions" data-target2="#GroupEntry"
                                    data-val="true" data-val-number="The field RELIGIONID must be a number."
                                    id="RELIGIONID" name="RELIGIONID" onchange="ControlOptions(this);">
                                    <option value=""></option>

                                    <?php
                                    $religion_query = "SELECT * FROM religion";
                                    $religion_statement = $con->prepare($religion_query);

                                    $religion_statement->execute();
                                    $religion_result = $religion_statement->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($religion_result as $religion_results){
                                        if($religion_results['id'] == $results['religion']){?>
                                    <option selected="selected" value="<?= $religion_results['id'];?>">
                                        <?= $religion_results['name'];?></option>

                                    <?php
                                        }
                                        else{?>
                                    <option value="<?= $religion_results['id'];?>"><?= $religion_results['name'];?>
                                    </option>
                                    <?php
                                        }
                                    }
                                ?>

                                </select>

                                <span class="field-validation-valid" data-valmsg-for="RELIGIONID"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="form-group" style="display: block" id="GroupOptions">
                            <div class="control-label col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">Denomination/Group
                            </div>
                            <div class="col-lg-offset-3">
                                <select class="form-control" data-target="#GroupEntry" data-val="true"
                                    data-val-number="The field DENOMINATIONID must be a number." id="DENOMINATIONID"
                                    name="DENOMINATIONID" onchange="ControlOptions(this);">
                                    <option value=""></option>
                                    <?php
                                    $deno_query = "SELECT * FROM church_denomination";
                                    $deno_statement = $con->prepare($deno_query);

                                    $deno_statement->execute();
                                    $deno_result = $deno_statement->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($deno_result as $deno_results){
                                        if($deno_results['id'] == $results['denomination']){?>
                                    <option selected="selected" value="<?= $deno_results['id'];?>">
                                        <?= $deno_results['name'];?></option>

                                    <?php
                                        }
                                        else{?>
                                    <option value="<?= $deno_results['id'];?>"><?= $deno_results['name'];?></option>
                                    <?php
                                        }
                                    }
                                ?>
                                </select>
                                <span class="field-validation-valid" data-valmsg-for="DENOMINATIONID"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>
        
                    </div>


                </div>
                <div class="container"></div>
                <br />

                <div class="container" style="margin:auto; text-align:center;">
                    <button class="btn-btn-primary" type="submit"
                        style="background:green; border-radius: 20px; padding: 10px; color: white">Update Profile &amp;
                        Continue</button>
                </div>
            </div>
        </form>
    </div>

</div>

<?php
    include_once 'partials/footer.php';
?>

<script>
    $(document).on('submit', '#the_profile_form', function (event) {
        event.preventDefault();
        $.ajax({
            url: "database/profile/edit_profile_details.php",
            method: "POST",
            data: new FormData(this),
            contentType: false, 
            cache: false,
                processData: false,
            success:function(data){
                if(data.includes('success')){
                    swal({
                        title: 'Success',
                        text: 'Profile was successfully updated',
                        icon: 'success',
                        buttons: ["OK"],
                        closeOnClickOutside: true,
                    });
                }
                else{
                    swal({
                        title: 'Error',
                        text: data,
                        icon: 'error',
                        buttons: ["OK"],
                        closeOnClickOutside: true,
                    });
                }
            }
        });
    });
</script>