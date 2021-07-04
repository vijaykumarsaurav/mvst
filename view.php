<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />



    <title>MVST Matrimony‎</title>
</head>

<body>

        <?php
            include "api/database.php"; 
            $userid = 1;

          //  $userid =  $_SESSION['userid']; 

            $sql = "SELECT * FROM musers WHERE id = $userid";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) 
            {
                $data =  $res->fetch_assoc();
                $sql = "SELECT * FROM images WHERE pid = $userid";
                $res = $conn->query($sql);
                $images = mysqli_fetch_all($res,MYSQLI_ASSOC);
            //    $data['images']  =  $res;
               //  json_encode($data);
            }
        ?>
    <div class="container" id="register" style="display: ;">

    <h3>  <?=$data['name']?> : Profile Details</h3>


        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="form-group">
                <table class="table table-striped">
                    <tbody>
                            <tr >
                                <th colspan="2" scope="row" class="header_title"><b> Personal Details </b></th>
                            </tr>
                            <tr>
                                <th scope="row">Name</th>
                                <td id="name"><?=$data['name']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Gender</th>
                                <td id="name"><?=$data['gender']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Complexion</th>
                                <td id="name"><?=$data['complexion']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Date of Birth (Age)</th>
                                <td id="name"><?=$data['dob'].'('.$data['age']?>)</td>
                            </tr>

                            <tr>
                                <th scope="row">Height</th>
                                <td id="name"><?=$data['height']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Weight</th>
                                <td id="name"><?=$data['weight']?></td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Caste</th>
                                <td id="name"><?=$data['caste']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Manglik</th>
                                <td id="name"><?=$data['manglik']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mool/Star</th>
                                <td id="name"><?=$data['mool']?></td>
                            </tr>


                            <tr>
                                <th colspan="2" scope="row" class="header_title"><b> Educational Details </b></th>
                            </tr>
                            <tr>
                                <th scope="row">Higher Education</th>
                                <td id="name"><?=$data['education']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Degree</th>
                                <td id="name"><?=$data['degree']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Education In Details</th>
                                <td id="name"><?=$data['education_details']?></td>
                            </tr>


                            <tr>
                                <th colspan="2" scope="row" class="header_title"><b> Professional Details </b></th>
                            </tr>
                            <tr>
                                <th scope="row">Job Type</th>
                                <td id="name"><?=$data['job_type']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Degree</th>
                                <td id="name"><?=$data['degree']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Job Details</th>
                                <td id="name"><?=$data['job_details']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Income</th>
                                <td id="name"><?=$data['income']?>L </td>
                            </tr>
                            <tr>
                                <th scope="row">Previous Job Details</th>
                                <td id="name"><?=$data['previous_job_details']?></td>
                            </tr>
                            
                            <tr>
                                <th colspan="2" scope="row" class="header_title"><b> Family Details </b></th>
                            </tr>
                            <tr>
                                <th scope="row">Father Name</th>
                                <td id="name"><?=$data['father_name']?>(<?=$data['father_job']?>)</td>
                            </tr>
                            <tr>
                                <th scope="row">Mother Name</th>
                                <td id="name"><?=$data['mother_name']?>()</td>
                            </tr>
                            <tr>
                                <th scope="row">Mother Name</th>
                                <td id="name"><?=$data['job_details']?>(<?=$data['mother_job']?>)</td>
                            </tr>
                            <tr>
                                <th scope="row">Number of Siter(s)</th>
                                <td id="name"><?=$data['no_of_sister']?>(<?=$data['no_of_sister_merried']?> Married) </td>
                            </tr>
                            <tr>
                                <th scope="row">Number of Brother(s)</th>
                                <td id="name"><?=$data['no_of_brother']?>(<?=$data['no_of_brother_merried']?> Married) </td>
                            </tr>
                            

                            <tr>
                                <th colspan="2" scope="row" class="header_title"><b> Contact & Others Details </b></th>
                            </tr>
                            <tr>
                                <th scope="row">Current Address</th>
                                <td id="name"><?=$data['current_city']?> , <?=$data['current_state']?> <br><?=$data['current_address']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">Permanent Address</th>
                                <td id="name"><?=$data['permanent_city']?> , <?=$data['permanent_state']?> <br><?=$data['permanent_address']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">Mobile Number(s)</th>
                                <td id="name"><?=$data['mobile']?>()</td>
                            </tr>
                            <tr>
                                <th scope="row">Email id(s)</th>
                                <td id="name"><?=$data['email']?></td>
                            </tr>
                         
                            <tr>
                                <th scope="row">Others Details</th>
                                <td id="name"><?=$data['other_details']?></td>
                            </tr>
                            

                            
                    </tbody>
                </table>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <!-- <label for="gender">Photos</label> -->
                <div class="form-group">
                    <?php 
                    //print_r($images); 
                    for($i=0; $i< count($images); $i++){
                        echo '<a title="Click to Zoom" data-fancybox="gallery" href="api/'.$images[$i]['big_url'].'"> <img class="img_custom" src="api/'.$images[$i]['thumbnail_url'].'"></a>';
                    }
                    ?>
                </div>
            </div>
        </div>





    </div>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <script src="public/javascript/static-data.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

    <script src="public/javascript/main.js"></script>


</body>

</html>