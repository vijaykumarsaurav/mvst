<?php 
include "database.php"; 
error_reporting(1);


$status = false;
$data = '';
//$userid = $_SESSION['userid'] = 1;
if($_REQUEST['q'] == 1)
{
    $sql = "SELECT * FROM musers ORDER BY id DESC";
    $res = $conn->query($sql);

    $user_res = array();
    while($user_data = $res->fetch_assoc()){
        array_push($user_res, $user_data);
    }


    $imgsql = "SELECT * FROM images";
    $imgres = $conn->query($imgsql);

    $img_res = array();
    while($img_data = $imgres->fetch_assoc()){
        array_push($img_res, $img_data);
    }
    $output = array("status"=> true, "users"=> json_encode($user_res), "images"=> json_encode($img_res));
    echo json_encode($output);

}

if($_REQUEST['q'] == 2)
{
    $name = mysqli_real_escape_string($conn,$_REQUEST['name']);
    $gender = mysqli_real_escape_string($conn,$_REQUEST['gender']);
    $created_by = mysqli_real_escape_string($conn,$_REQUEST['created_by']);

    $email = mysqli_real_escape_string($conn,$_REQUEST['email']);
    $mobile = mysqli_real_escape_string($conn,$_REQUEST['mobile']);
    $password = mysqli_real_escape_string($conn,$_REQUEST['password']);
    $cpassword = mysqli_real_escape_string($conn,$_REQUEST['cpassword']);

    $sql = "INSERT `musers` SET `name` = '$name',created_by='$created_by', gender='$gender', `mobile` = '$mobile', `email` = '$email', `password` = '$password' "; 

if ($conn->query($sql) === TRUE) {
       $last_id = $conn->insert_id;
       $_SESSION['userid'] = $last_id;
       $output = array("status"=> true, "data"=> $last_id);
       echo json_encode($output);
    }
    
}

if($_REQUEST['q'] == 3)
{
 
    // $userid = mysqli_real_escape_string($conn,$_REQUEST['userid']);
    // $password = mysqli_real_escape_string($conn,$_REQUEST['login_password']);

    // $sql = "SELECT * FROM musers WHERE id like '$userid' AND password = '$password' ";
    // $res = $conn->query($sql);
    // if ($res->num_rows > 0) 
    // {
    //     $data =  $res->fetch_assoc();
    //     echo json_encode($data);
    // }

    echo "vijay 3";
    
}




if($_REQUEST['q'] == 4)
{
    $userid =  $_SESSION['userid']; 

  echo  $sql = "SELECT * FROM musers WHERE id = $userid";
    $res = $conn->query($sql);
    $res->num_rows;
    if ($res->num_rows > 0) 
    {
        $data =  $res->fetch_assoc();

        $sql1 = "SELECT * FROM images WHERE pid = $userid";
        $res1 = $conn->query($sql1);
        $img_res = array();
        while($img_data = $res1->fetch_assoc()){
            array_push($img_res, $img_data);
        }
       // $img_res = mysqli_fetch_all($res1,MYSQLI_ASSOC);
        $data['images']  =  $img_res;
        echo json_encode($data);
    }
    
}



if($_REQUEST['q'] == 5)
{
    $name = mysqli_real_escape_string($conn,$_REQUEST['name']);
    $gender = mysqli_real_escape_string($conn,$_REQUEST['gender']);
    $complexion = mysqli_real_escape_string($conn,$_REQUEST['complexion']);
    $dob = mysqli_real_escape_string($conn,$_REQUEST['dob']);
    $height = mysqli_real_escape_string($conn,$_REQUEST['height']);
    $weight = mysqli_real_escape_string($conn,$_REQUEST['weight']);
    $caste = mysqli_real_escape_string($conn,$_REQUEST['caste']);
    $weight = mysqli_real_escape_string($conn,$_REQUEST['weight']);
    $manglik = mysqli_real_escape_string($conn,$_REQUEST['manglik']);
    $mool = mysqli_real_escape_string($conn,$_REQUEST['mool']);

    $today = date('Y/m/d');

    $dobtime = strtotime($dob);
    $todaytime = strtotime($today);

     $year1 = (int) date('Y', $dobtime);
     $year2 = (int) date('Y', $todaytime);

   // $month1 = date('m', $dob);
   // $month2 = date('m', $today);
    
    $diff_age = $year2 - $year1;
   //  $diff_age = (($year2 - $year1) * 12) + ($month2 - $month1);


   $sql = "UPDATE `musers` SET `name` = '$name', `gender` = '$gender', `dob` = '$dob', `age` = $diff_age, complexion ='$complexion' , `height` = '$height', `weight` = '$weight',caste='$caste', `mool` = '$mool', `manglik` = '$manglik' WHERE `id` = $userid"; 

    //    $sql = "UPDATE SET `musers` SET  `maritial_status` = 'never married', `job_type` = 'private', `job_details` = 'software engineer', `income` = '15 L', `previous_job_details` = 'zensar', `current_city` = 'bangalore', `current_state` = 'karnataka', `current_address` = 'bellendur', `permanent_city` = 'muzaffapur', `permanent_state` = 'bihar', `permanent_address` = 'deoria', `education` = 'mca', `education_details` = 'computer application', `father_name` = 'ganpat sah', `father_job` = 'farmar', `mother_name` = 'sunila devi', `mother_job` = 'housemaker', `no_of_sister` = '1', `no_of_sister_merried` = '1', `no_of_brother` = '2', `other_details` = 'nothing', `patner_pref_age` = '20 to 25', `patner_pref_education` = 'mca', `patner_pref_job_details` = 'nothing', patner_pref_location = 'bagalore', patner_pref_other_details = 'nothig' WHERE `id` = $userid"; 

if ($conn->query($sql) === TRUE) { 
        $output = array("status"=> true, "data"=> '');
        echo json_encode($output);
    }else{
        echo $conn->error;
    }
    
}


if($_REQUEST['q'] == 6)
{

    $images = $_FILES['image'];
    $uploads_dir = '/uploads';

   $filename =  'uploads/'.'IMG'. time(). $_FILES["image"]['name'];
   $title = $_FILES["image"]['name'];

    if (move_uploaded_file($_FILES['image']['tmp_name'], $filename)) {
       // echo "Uploaded";
       $time = date('Y/m/d h:m:i');

        $sql = "INSERT `images` SET `pid` = '$userid', `big_url` = '$filename', `thumbnail_url` = '$filename', `title` = '$title', `uploaded_on` = '$time', `status` = '1'";

        if ($conn->query($sql) === TRUE) { 

            $sql = "SELECT * FROM images WHERE pid = $userid";
            $res = $conn->query($sql);
          //  $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
          $img_res = array();
            while($img_data = $res->fetch_assoc()){
                array_push($img_res, $img_data);
            }
            $output = array("status"=> true, "images"=> json_encode($img_res));
            echo json_encode($output);

        }else{
            echo $conn->error;
        }
    


    } else {
       echo "File was not uploaded";
    }

    
}

?>