<!-- Getting the information when the user clicks submit-btn -->
<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");
require_once 'emailController.php';

global $conn;
/* Defining empty strings $ array */
$errors = array();
$username = '';
$email = '';
$comments = '';
$issue = '';
$password = '';
$passwordConf = '';
$sn = '';
$assets = '';

//Fetching all the admin users
$hjh_data = selectAll('hjh');
$hjh_workstations = selectAll('hjh_workstations');
$hjh_workstations_printer = selectAll('hjh_workstations_printer');
$hjh_workstations_monitor = selectAll('hjh_workstations_monitor');
$cmjah_data = selectAll('cmjah');
$cmjah_workstations = selectAll('cmjah_workstations');
$cmjah_workstations_printer = selectAll('cmjah_workstations_printer');
$cmjah_workstations_monitor = selectAll('cmjah_workstations_monitor');
$chbah_data = selectAll('chbah');
$chbah_workstations = selectAll('chbah_workstations');
$chbah_workstations_printer = selectAll('chbah_workstations_printer');
$chbah_workstations_monitor = selectAll('chbah_workstations_monitor');
$individual_data = selectAll('individual_hardware');
$dispute_data = selectAll('deleted_items');

// SQL queries for returning union the workstation data
$all_worksatations = "SELECT * FROM hjh_workstations UNION SELECT * FROM cmjah_workstations UNION SELECT * FROM chbah_workstations";
$statement = $conn->prepare($all_worksatations);
$statement->execute();
$all_worksatations = $statement->get_result()->fetch_all(MYSQLI_ASSOC);

$all_monitors = "SELECT * FROM hjh_workstations_monitor UNION SELECT * FROM cmjah_workstations_monitor UNION SELECT * FROM chbah_workstations_monitor";
$statement_monitor = $conn->prepare($all_monitors);
$statement_monitor->execute();
$all_monitors = $statement_monitor->get_result()->fetch_all(MYSQLI_ASSOC);

$all_printers = "SELECT * FROM hjh_workstations_printer UNION SELECT * FROM cmjah_workstations_printer UNION SELECT * FROM chbah_workstations_printer";
$statement_printer = $conn->prepare($all_printers);
$statement_printer->execute();
$all_printers = $statement_printer->get_result()->fetch_all(MYSQLI_ASSOC);
// End of SQL for returning the combined data

$todo_data = selectAll('todo');
$undone_todo_data = "SELECT * FROM todo WHERE done = 0";
$stmt = $conn->prepare($undone_todo_data);
$stmt->execute();
$undone_todo_data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

$users_action = selectAll('users');


// Adding Support Record
if (isset($_POST['create-hjh'])){

    $errors = validateUser($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-hjh'] );

        $sql = "INSERT INTO hjh SET  username='".$_POST['username']."', ward='".$_POST['ward']."', replaced_toner='".$_POST['replaced_toner']."', type_of_toner='".$_POST['type_of_toner']."', issued_paper='".$_POST['issued_paper']."', quality_of_paper='".$_POST['quality_of_paper']."', other_issue='".$_POST['other_issue']."', specify_issue='".$_POST['specify_issue']."', comments='".$_POST['comments']."'";
        $user_added = mysqli_query($conn, $sql);

        if($user_added){
            $_SESSION['message'] = "Record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/postsCreate.php');
            exit();
        }
         else {
             array_push($errors, "Record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $comments = $_POST['comments'];
    }
}
if (isset($_POST['create-hjh1'])){

    $errors = validateUser1($_POST);


    if ((count($errors) === 0)){

        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-hjh1'] );

        $sql = "INSERT INTO hjh SET  username='".$_POST['username']."', ward='".$_POST['ward']."', replaced_toner='".$_POST['replaced_toner']."', type_of_toner='".$_POST['type_of_toner']."', issued_paper='".$_POST['issued_paper']."', quality_of_paper='".$_POST['quality_of_paper']."', other_issue='".$_POST['other_issue']."', specify_issue='".$_POST['specify_issue']."', comments='".$_POST['comments']."'";
        $user_added = mysqli_query($conn, $sql);

        if($user_added){
            $_SESSION['message'] = "Record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersHJHcreate.php');
            exit();
        }
        else {
            array_push($errors, "Record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $comments = $_POST['comments'];
        //header('location: '. BASE_URL . '/usersHJHcreate.php');
    }
}


if (isset($_POST['create-cmjah'])){

    $errors = validateUser($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-cmjah'] );

        $sql = "INSERT INTO cmjah SET  username='".$_POST['username']."', ward='".$_POST['ward']."', replaced_toner='".$_POST['replaced_toner']."', type_of_toner='".$_POST['type_of_toner']."', issued_paper='".$_POST['issued_paper']."', quality_of_paper='".$_POST['quality_of_paper']."', other_issue='".$_POST['other_issue']."', specify_issue='".$_POST['specify_issue']."', comments='".$_POST['comments']."'";
        $user_added = mysqli_query($conn, $sql);

        if($user_added){
            $_SESSION['message'] = "Record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersCreate.php');
            exit();
        }
        else {
            array_push($errors, "Record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $comments = $_POST['comments'];
    }
}
if (isset($_POST['create-cmjah1'])){

    $errors = validateUser1($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-cmjah1'] );

        $sql = "INSERT INTO cmjah SET  username='".$_POST['username']."', ward='".$_POST['ward']."', replaced_toner='".$_POST['replaced_toner']."', type_of_toner='".$_POST['type_of_toner']."', issued_paper='".$_POST['issued_paper']."', quality_of_paper='".$_POST['quality_of_paper']."', other_issue='".$_POST['other_issue']."', specify_issue='".$_POST['specify_issue']."', comments='".$_POST['comments']."'";
        $user_added = mysqli_query($conn, $sql);

        if($user_added){
            $_SESSION['message'] = "Record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersCMJAHcreate.php');
            exit();
        }
        else {
            array_push($errors, "Record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $comments = $_POST['comments'];
    }
}


if (isset($_POST['create-chbah'])){

    $errors = validateUser($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-chbah'] );

        $sql = "INSERT INTO chbah SET  username='".$_POST['username']."', ward='".$_POST['ward']."', replaced_toner='".$_POST['replaced_toner']."', type_of_toner='".$_POST['type_of_toner']."', issued_paper='".$_POST['issued_paper']."', quality_of_paper='".$_POST['quality_of_paper']."', other_issue='".$_POST['other_issue']."', specify_issue='".$_POST['specify_issue']."', comments='".$_POST['comments']."'";
        $user_added = mysqli_query($conn, $sql);

        if($user_added){
            $_SESSION['message'] = "Record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/topicsCreate.php');
            exit();
        }
        else {
            array_push($errors, "Record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $comments = $_POST['comments'];
    }
}
if (isset($_POST['create-chbah1'])){

    $errors = validateUser1($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-chbah1'] );

        $sql = "INSERT INTO chbah SET  username='".$_POST['username']."', ward='".$_POST['ward']."', replaced_toner='".$_POST['replaced_toner']."', type_of_toner='".$_POST['type_of_toner']."', issued_paper='".$_POST['issued_paper']."', quality_of_paper='".$_POST['quality_of_paper']."', other_issue='".$_POST['other_issue']."', specify_issue='".$_POST['specify_issue']."', comments='".$_POST['comments']."'";
        $user_added = mysqli_query($conn, $sql);

        if($user_added){
            $_SESSION['message'] = "Record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersCHBAHcreate.php');
            exit();
        }
        else {
            array_push($errors, "Record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $comments = $_POST['comments'];
    }
}
// End Here


//Deleting user account
if(isset($_GET['users_delete_id'])){
    $count = delete('users', $_GET['users_delete_id']);

    $_SESSION['message'] = "Users account deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/users.php');
    exit();
}
//End of deleting user account

// Deleting Records for individual Hospitals
if(isset($_GET['hjh_delete_id'])){
    $count = delete('hjh', $_GET['hjh_delete_id']);

    $_SESSION['message'] = "Record deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/postsIndex.php');
    exit();
}
if(isset($_GET['cmjah_delete_id'])){
    $count = delete('cmjah', $_GET['cmjah_delete_id']);

    $_SESSION['message'] = "Record deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/usersIndex.php');
    exit();
}
if(isset($_GET['chbah_delete_id'])){
    $count = delete('chbah', $_GET['chbah_delete_id']);

    $_SESSION['message'] = "Record deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/topicsIndex.php');
    exit();
}

if(isset($_GET['team_delete_id'])){
    $dispute_data = selectOne('individual_hardware', ['id' => $_GET['team_delete_id']]);
    //dd($dispute_data);

    $_POST['username'] = $_SESSION['username'];
    $_POST['name'] = $dispute_data['individual_holder_name'];
    $_POST['computer'] = $dispute_data['computer_name'];
    $_POST['sn'] = $dispute_data['serial_number'];
    $_POST['assets'] = $dispute_data['assets_number'];
    //dd($_POST['sn']);

    $sql = "INSERT INTO deleted_items SET  username='".$_POST['username']."', individual_holder_name='".$_POST['name']."', computer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
    $individual_added_hardware = mysqli_query($conn, $sql);

    $count = delete('individual_hardware', $_GET['team_delete_id']);

    $_SESSION['message'] = "Record deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/teamIndex.php');
    exit();
}

if(isset($_GET['dispute_delete_id'])){
    $count = delete('deleted_items', $_GET['dispute_delete_id']);

    $_SESSION['message'] = "Record deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/dispute.php');
    exit();
}
// Delete end here

// Updating records
if (isset($_GET['hjh_update_id'])){
    $user = selectOne('hjh', ['id' => $_GET['hjh_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $ward = $user['ward'];
    $replaced_toner = $user['replaced_toner'];
    $issued_paper = $user['issued_paper'];
    $other_issue = $user['other_issue'];
    $type_of_toner = $user['type_of_toner'];
    $quality_of_paper = $user['quality_of_paper'];
    $specify_issue = $user['specify_issue'];
    $comments = $user['comments'];
}
if (isset($_GET['chbah_update_id'])){
    $user = selectOne('chbah', ['id' => $_GET['chbah_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $ward = $user['ward'];
    $replaced_toner = $user['replaced_toner'];
    $issued_paper = $user['issued_paper'];
    $other_issue = $user['other_issue'];
    $comments = $user['comments'];
}
if (isset($_GET['cmjah_update_id'])){
    $user = selectOne('cmjah', ['id' => $_GET['cmjah_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $ward = $user['ward'];
    $replaced_toner = $user['replaced_toner'];
    $issued_paper = $user['issued_paper'];
    $other_issue = $user['other_issue'];
    $comments = $user['comments'];
}

// HJH workstation updates
if (isset($_GET['hjhTower_update_id'])){
    $user = selectOne('hjh_workstations', ['id' => $_GET['hjhTower_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $computer_name = $user['computer_name'];
    $windows_type = $user['windows_type'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['hjhPrinter_update_id'])){
    $user = selectOne('hjh_workstations_printer', ['id' => $_GET['hjhPrinter_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $printer_name  = $user['printer_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['hjhMonitor_update_id'])){
    $user = selectOne('hjh_workstations_monitor', ['id' => $_GET['hjhMonitor_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $monitor_name  = $user['monitor_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}

if (isset($_GET['hjhUserTower_update_id'])){
    $user = selectOne('hjh_workstations', ['id' => $_GET['hjhUserTower_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $computer_name = $user['computer_name'];
    $windows_type = $user['windows_type'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['hjhUserPrinter_update_id'])){
    $user = selectOne('hjh_workstations_printer', ['id' => $_GET['hjhUserPrinter_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $printer_name  = $user['printer_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['hjhUserMonitor_update_id'])){
    $user = selectOne('hjh_workstations_monitor', ['id' => $_GET['hjhUserMonitor_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $monitor_name  = $user['monitor_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
// End of hjh workstations updates

// chbah workstation updates
if (isset($_GET['chbahTower_update_id'])){
    $user = selectOne('chbah_workstations', ['id' => $_GET['chbahTower_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $computer_name = $user['computer_name'];
    $windows_type = $user['windows_type'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['chbahPrinter_update_id'])){
    $user = selectOne('chbah_workstations_printer', ['id' => $_GET['chbahPrinter_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $printer_name  = $user['printer_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['chbahMonitor_update_id'])){
    $user = selectOne('chbah_workstations_monitor', ['id' => $_GET['chbahMonitor_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $monitor_name  = $user['monitor_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}

if (isset($_GET['chbahUserTower_update_id'])){
    $user = selectOne('chbah_workstations', ['id' => $_GET['chbahUserTower_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $computer_name = $user['computer_name'];
    $windows_type = $user['windows_type'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['chbahUserPrinter_update_id'])){
    $user = selectOne('chbah_workstations_printer', ['id' => $_GET['chbahUserPrinter_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $printer_name  = $user['printer_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['chbahUserMonitor_update_id'])){
    $user = selectOne('chbah_workstations_monitor', ['id' => $_GET['chbahUserMonitor_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $monitor_name  = $user['monitor_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
// End of chbah workstations updates

// cmjah workstation updates
if (isset($_GET['cmjahTower_update_id'])){
    $user = selectOne('cmjah_workstations', ['id' => $_GET['cmjahTower_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $computer_name = $user['computer_name'];
    $windows_type = $user['windows_type'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['cmjahPrinter_update_id'])){
    $user = selectOne('cmjah_workstations_printer', ['id' => $_GET['cmjahPrinter_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $printer_name  = $user['printer_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['cmjahMonitor_update_id'])){
    $user = selectOne('cmjah_workstations_monitor', ['id' => $_GET['cmjahMonitor_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $monitor_name  = $user['monitor_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}

if (isset($_GET['cmjahUserTower_update_id'])){
    $user = selectOne('cmjah_workstations', ['id' => $_GET['cmjahUserTower_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $computer_name = $user['computer_name'];
    $windows_type = $user['windows_type'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['cmjahUserPrinter_update_id'])){
    $user = selectOne('cmjah_workstations_printer', ['id' => $_GET['cmjahUserPrinter_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $printer_name  = $user['printer_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['cmjahUserMonitor_update_id'])){
    $user = selectOne('cmjah_workstations_monitor', ['id' => $_GET['cmjahUserMonitor_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $hospital = $user['hospital'];
    $ward = $user['ward'];
    $monitor_name  = $user['monitor_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
// End of cmjah workstations updates

if (isset($_GET['team_update_id'])){
    $user = selectOne('individual_hardware', ['id' => $_GET['team_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $name = $user['individual_holder_name'];
    $computer_name = $user['computer_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
if (isset($_GET['user_team_update_id'])){
    $user = selectOne('individual_hardware', ['id' => $_GET['user_team_update_id']]);

    $id = $user['id'];
    $username = $user['username'];
    $name = $user['individual_holder_name'];
    $computer_name = $user['computer_name'];
    $serial_number = $user['serial_number'];
    $assets_number = $user['assets_number'];
}
// End of updating records

// Registering user
if (isset($_POST['register-btn']) || isset($_POST['create-admin'])){

    $errors = validateUserRegistration($_POST);


    if ((count($errors) === 0)){
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);
        /* Hashing the password in case the DB is hacked/compromised */
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if(isset($_POST['admin'])){
            $_POST['admin'] = 1;
            $user_id = create('users', $_POST);
            $_SESSION['message'] = "Admin user created successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersIndex.php');
            exit();
        } else{
            /* Adding admin that takes value of false(0) when registering by default */
            $_POST['admin'] = 0;
            /* Outputting the data in the form of readable array */

            /* Calling the create() under "db.php" & assign it to "user_id" to INSERT the user */
            $user_id = create('users', $_POST);
            /* Calling the selectOne() under "db.php" & assign it to "user" to SELECT the user INFO/DATA */
            $user = selectOne('users', ['id' => $user_id]);

            /* Returning the result using the id after registering a user in the DB  */
            //dd($user);

            // Log user in immediately after creating account "Registering"
            loginUser($user);
        }

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}
// End of registering user

// Logging user
if (isset($_POST['login-btn'])){
    $errors = validateLogin($_POST);

    if ((count($errors) === 0)){
        $user = selectOne('users', ['username' => $_POST['username']]);

        if($user && password_verify($_POST['password'], $user['password'])){

            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email']; // Sending email
            $_SESSION['username'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            // Login redirect
            header('location: '. BASE_URL . '/dashboard.php');
        } else{
            array_push($errors, "Wrong credentials");
        }
    }

    /* If there where errors we store the values that the user enters to save time for user while registering  */
    $username = $_POST['username'];
    $password = $_POST['password'];

}

function loginUser($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['email'] = $user['email']; // Sending email
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    //$_SESSION['verified'] = $user['verified']; // checking if user verified their email

    //if ($user['verified'] == 0 ) {
    $_SESSION['message'] = "You are now signed up with this <strong>" . $_SESSION['email'] . "</strong> email.";
    $_SESSION['type'] = "success";

    header('location: '. BASE_URL . '/login.php');
    exit();
}
// End of logging user


// Adding List Record
if (isset($_POST['add-list'])){

    $errors = validateList($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['add-list'] );

        $sql = "INSERT INTO todo SET  username='".$_POST['username']."', ward='".$_POST['ward']."', hospital='".$_POST['hospital']."',issue='".$_POST['issue']."'";
        $user_added = mysqli_query($conn, $sql);

        if($user_added){
            $_SESSION['message'] = "Todo List added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/todo.php');
            exit();
        }
        else {
            array_push($errors, "Record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $issue = $_POST['issue'];
    }
}
if (isset($_POST['add-list1'])){

    $errors = validateList($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['add-list1'] );

        $sql = "INSERT INTO todo SET  username='".$_POST['username']."', ward='".$_POST['ward']."', hospital='".$_POST['hospital']."',issue='".$_POST['issue']."'";
        $user_added = mysqli_query($conn, $sql);

        if($user_added){
            $_SESSION['message'] = "Todo List added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersTodo.php');
            exit();
        }
        else {
            array_push($errors, "Record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $issue = $_POST['issue'];
    }
}
// End of adding list


//Changing the List and user_admin status action after solving the issue
if(isset($_GET['done']) && isset($_GET['done_id'])){
    $done_id = $_GET['done_id'];
    $done = $_GET['done'];
    // ... update published
    $count = update('todo', $done_id, ['done' => $done]);

    $_SESSION['message'] = 'Todo list done action status changed';
    $_SESSION['type'] = 'success';
    header('location: '. BASE_URL . '/todo.php');
    exit();
}
if(isset($_GET['user_done']) && isset($_GET['user_done_id'])){
    $user_done_id = $_GET['user_done_id'];
    $user_done = $_GET['user_done'];
    // ... update published
    $count = update('todo', $user_done_id, ['done' => $user_done]);

    $_SESSION['message'] = 'Todo list done action status changed';
    $_SESSION['type'] = 'success';
    header('location: '. BASE_URL . '/usersTodo.php');
    exit();
}
if(isset($_GET['admin']) && isset($_GET['admin_id'])){
    $admin_id = $_GET['admin_id'];
    $admin = $_GET['admin'];
    // ... update users status
    $count = update('users', $admin_id, ['admin' => $admin]);

    $_SESSION['message'] = 'user action status changed';
    $_SESSION['type'] = 'success';
    header('location: '. BASE_URL . '/users.php');
    exit();
}
//End of list status

// if user clicks on the forgot password button
if (isset($_POST['forgot-password'])){
    global $conn;
    $email = $_POST['email'];

    if(empty($email)){
        array_push($errors, "Email required");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email address is invalid");
    }

    $existingUser = selectOne('users', ['email' => $email]);
    if ($existingUser){

        sendPasswordResetLink($existingUser['email'], $existingUser['id']);
        $_SESSION['message'] = "An email has been sent to your email address with a link to reset your password. Please also check in your spam, Thanks!";
        $_SESSION['type'] = "success";
        header('location: '. BASE_URL . '/login.php');
        exit(0);
    } else{
        array_push($errors, "Email address does not exist in our database");
    }
}
// End of forgot password

//if user clicks on the reset password button
if (isset($_POST['reset-password-btn'])){

    if(empty($_POST['password']) || empty($_POST['passwordConf'])){
        array_push($errors, "Password required");
    }
    if($_POST['password'] !== $_POST['passwordConf']){
        array_push($errors, "Passwords do not match");
    }
    unset($_POST['reset-password-btn'], $_POST['passwordConf']);
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    //$sql = "UPDATE $table SET  id=".$_POST['id'].", admin=".$_POST['admin'].", username=".$_POST['username'].", email=".$_POST['email'].", verified=".$_POST['verified'].", password=".$_POST['password']."  WHERE id=".$_POST['id']." ";
    // prepare and bind
    $stmt = $conn -> prepare("UPDATE users SET admin=?, username=?, email=?,password=? WHERE id=".$_POST['id']."");
    $stmt -> bind_param("ssss", $admin, $username, $email, $password);

    // set parameters and execute
    $admin = $_POST['admin'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt -> execute();

    if ($stmt) {
        $_SESSION['message'] = "Your password was reset successfully you can now log in";
        $_SESSION['type'] = "success";
        header('location: '. BASE_URL . '/login.php');
        exit(0);
    } else {
        array_push($errors, "Update failed");
    }
    $conn->close();

}
// End of reset password

// Updating the records
if (isset($_POST['update-post'])){

    $errors = validateUser1($_POST);


    if ((count($errors) === 0)){

        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-post'] );

        $sql = "UPDATE hjh SET  username='".$_POST['username']."', ward='".$_POST['ward']."', replaced_toner='".$_POST['replaced_toner']."', type_of_toner='".$_POST['type_of_toner']."', issued_paper='".$_POST['issued_paper']."', quality_of_paper='".$_POST['quality_of_paper']."', other_issue='".$_POST['other_issue']."', specify_issue='".$_POST['specify_issue']."', comments='".$_POST['comments']."' WHERE id=".$_POST['id']."";

        $user_updated = mysqli_query($conn, $sql);

        if($user_updated){
            $_SESSION['message'] = "Record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/postsIndex.php');
            exit();
        }
        else {
            array_push($errors, "Record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $comments = $_POST['comments'];
        header('location: '. BASE_URL . '/postsEdit.php');
    }
}

if (isset($_POST['update-user'])){

    $errors = validateUser1($_POST);


    if ((count($errors) === 0)){

        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-post'] );

        $sql = "UPDATE cmjah SET  username='".$_POST['username']."', ward='".$_POST['ward']."', replaced_toner='".$_POST['replaced_toner']."', type_of_toner='".$_POST['type_of_toner']."', issued_paper='".$_POST['issued_paper']."', quality_of_paper='".$_POST['quality_of_paper']."', other_issue='".$_POST['other_issue']."', specify_issue='".$_POST['specify_issue']."', comments='".$_POST['comments']."' WHERE id=".$_POST['id']."";

        $user_updated = mysqli_query($conn, $sql);

        if($user_updated){
            $_SESSION['message'] = "Record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersIndex.php');
            exit();
        }
        else {
            array_push($errors, "Record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $comments = $_POST['comments'];
        header('location: '. BASE_URL . '/usersEdit.php');
    }
}

if (isset($_POST['update-topic'])){

    $errors = validateUser1($_POST);


    if ((count($errors) === 0)){

        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-post'] );

        $sql = "UPDATE chbah SET  username='".$_POST['username']."', ward='".$_POST['ward']."', replaced_toner='".$_POST['replaced_toner']."', type_of_toner='".$_POST['type_of_toner']."', issued_paper='".$_POST['issued_paper']."', quality_of_paper='".$_POST['quality_of_paper']."', other_issue='".$_POST['other_issue']."', specify_issue='".$_POST['specify_issue']."', comments='".$_POST['comments']."' WHERE id=".$_POST['id']."";

        $user_updated = mysqli_query($conn, $sql);

        if($user_updated){
            $_SESSION['message'] = "Record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/topicsIndex.php');
            exit();
        }
        else {
            array_push($errors, "Record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $comments = $_POST['comments'];
        header('location: '. BASE_URL . '/topicsEdit.php');
    }
}
// End of updating the records


// Adding the workstations, printers and monitors
if (isset($_POST['create-hjh-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-hjh'] );

        $sql = "INSERT INTO hjh_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation = mysqli_query($conn, $sql);

        if($hjh_added_workstation){
            $_SESSION['message'] = "Workstation record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/postsTowerCreate.php');
            exit();
        }
        else {
            array_push($errors, "Workstation record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
if (isset($_POST['create-user-hjh-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-user-hjh-workstation'] );

        $sql = "INSERT INTO hjh_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation = mysqli_query($conn, $sql);

        if($hjh_added_workstation){
            $_SESSION['message'] = "Workstation record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/postsUserTowerCreate.php');
            exit();
        }
        else {
            array_push($errors, "Workstation record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}


if (isset($_POST['create-hjh-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-hjh'] );

        $sql = "INSERT INTO hjh_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_monitor = mysqli_query($conn, $sql);

        if($hjh_added_workstation_monitor){
            $_SESSION['message'] = "Monitor record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/postsMonitorCreate.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
if (isset($_POST['create-user-hjh-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-user-hjh-monitor'] );

        $sql = "INSERT INTO hjh_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_monitor = mysqli_query($conn, $sql);

        if($hjh_added_workstation_monitor){
            $_SESSION['message'] = "Monitor record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/postsUserMonitorCreate.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}

if (isset($_POST['create-hjh-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-hjh'] );

        $sql = "INSERT INTO hjh_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_printer = mysqli_query($conn, $sql);

        if($hjh_added_workstation_printer){
            $_SESSION['message'] = "Printer record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/postsPrinterCreate.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
if (isset($_POST['create-user-hjh-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-user-hjh-printer'] );

        $sql = "INSERT INTO hjh_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_printer = mysqli_query($conn, $sql);

        if($hjh_added_workstation_printer){
            $_SESSION['message'] = "Printer record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/postsUserPrinterCreate.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}




if (isset($_POST['create-cmjah-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-cmjah'] );

        $sql = "INSERT INTO cmjah_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation = mysqli_query($conn, $sql);

        if($hjh_added_workstation){
            $_SESSION['message'] = "Workstation record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersTowerCreate.php');
            exit();
        }
        else {
            array_push($errors, "Workstation record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
if (isset($_POST['create-user-cmjah-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-user-cmjah-workstation'] );

        $sql = "INSERT INTO cmjah_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation = mysqli_query($conn, $sql);

        if($hjh_added_workstation){
            $_SESSION['message'] = "Workstation record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersUserTowerCreate.php');
            exit();
        }
        else {
            array_push($errors, "Workstation record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}


if (isset($_POST['create-cmjah-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-cmjah'] );

        $sql = "INSERT INTO cmjah_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_monitor = mysqli_query($conn, $sql);

        if($hjh_added_workstation_monitor){
            $_SESSION['message'] = "Monitor record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersMonitorCreate.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
if (isset($_POST['create-user-cmjah-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-user-cmjah-monitor'] );

        $sql = "INSERT INTO cmjah_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_monitor = mysqli_query($conn, $sql);

        if($hjh_added_workstation_monitor){
            $_SESSION['message'] = "Monitor record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersUserMonitorCreate.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}


if (isset($_POST['create-cmjah-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-cmjah'] );

        $sql = "INSERT INTO cmjah_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_printer = mysqli_query($conn, $sql);

        if($hjh_added_workstation_printer){
            $_SESSION['message'] = "Printer record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersPrinterCreate.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
if (isset($_POST['create-user-cmjah-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-user-cmjah-printer'] );

        $sql = "INSERT INTO cmjah_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_printer = mysqli_query($conn, $sql);

        if($hjh_added_workstation_printer){
            $_SESSION['message'] = "Printer record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/usersUserPrinterCreate.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}




if (isset($_POST['create-chbah-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-chbah'] );

        $sql = "INSERT INTO chbah_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation = mysqli_query($conn, $sql);

        if($hjh_added_workstation){
            $_SESSION['message'] = "Workstation record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/topicsTowerCreate.php');
            exit();
        }
        else {
            array_push($errors, "Workstation record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
if (isset($_POST['create-user-chbah-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-user-chbah-workstation'] );

        $sql = "INSERT INTO chbah_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation = mysqli_query($conn, $sql);

        if($hjh_added_workstation){
            $_SESSION['message'] = "Workstation record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/topicsUserTowerCreate.php');
            exit();
        }
        else {
            array_push($errors, "Workstation record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}


if (isset($_POST['create-chbah-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-chbah'] );

        $sql = "INSERT INTO chbah_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_monitor = mysqli_query($conn, $sql);

        if($hjh_added_workstation_monitor){
            $_SESSION['message'] = "Monitor record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/topicsMonitorCreate.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
if (isset($_POST['create-user-chbah-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-user-chbah-monitor'] );

        $sql = "INSERT INTO chbah_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_monitor = mysqli_query($conn, $sql);

        if($hjh_added_workstation_monitor){
            $_SESSION['message'] = "Monitor record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/topicsUserMonitorCreate.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}

if (isset($_POST['create-chbah-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-chbah'] );

        $sql = "INSERT INTO chbah_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_printer = mysqli_query($conn, $sql);

        if($hjh_added_workstation_printer){
            $_SESSION['message'] = "Printer record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/topicsPrinterCreate.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
if (isset($_POST['create-user-chbah-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['create-user-chbah-printer'] );

        $sql = "INSERT INTO chbah_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $hjh_added_workstation_printer = mysqli_query($conn, $sql);

        if($hjh_added_workstation_printer){
            $_SESSION['message'] = "Printer record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/topicsUserPrinterCreate.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
// End of adding the workstations

//Adding individual hardware(PC, Monitor or Router)
if (isset($_POST['team-create'])){

    $errors = validateTeam($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['team-create'] );

        $sql = "INSERT INTO individual_hardware SET  username='".$_POST['username']."', individual_holder_name='".$_POST['name']."', computer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."'";
        $individual_added_hardware = mysqli_query($conn, $sql);

        if($individual_added_hardware){
            $_SESSION['message'] = "Indidual hardware record added successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/teamCreate.php');
            exit();
        }
        else {
            array_push($errors, "Indidual hardware record not added");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
//End of adding individual hardware



//admin  Updating workstations
if (isset($_POST['update-hjh-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-hjh-workstation'] );

        $sql = "UPDATE hjh_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $hjh_update_workstation = mysqli_query($conn, $sql);

        if($hjh_update_workstation){
            $_SESSION['message'] = "Tower record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/hjh_Tower_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Tower record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }

}
if (isset($_POST['update-hjh-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-hjh-monitor'] );

        $sql = "UPDATE hjh_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $hjh_update_workstation_monitor = mysqli_query($conn, $sql);

        if($hjh_update_workstation_monitor){
            $_SESSION['message'] = "Monitor record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/hjh_Monitor_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}

if (isset($_POST['update-hjh-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-hjh-printer'] );

        $sql = "UPDATE hjh_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $hjh_update_workstation_printer = mysqli_query($conn, $sql);

        if($hjh_update_workstation_printer){
            $_SESSION['message'] = "Printer record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/hjh_Printer_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}



if (isset($_POST['update-chbah-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-chbah-workstation'] );

        $sql = "UPDATE chbah_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $chbah_update_workstation = mysqli_query($conn, $sql);

        if($chbah_update_workstation){
            $_SESSION['message'] = "Tower record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/chbah_Tower_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Tower record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }

}
if (isset($_POST['update-chbah-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-chbah-monitor'] );

        $sql = "UPDATE chbah_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $chbah_update_workstation_monitor = mysqli_query($conn, $sql);

        if($chbah_update_workstation_monitor){
            $_SESSION['message'] = "Monitor record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/chbah_Monitor_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}

if (isset($_POST['update-chbah-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-chbah-printer'] );

        $sql = "UPDATE chbah_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $hjh_update_workstation_printer = mysqli_query($conn, $sql);

        if($hjh_update_workstation_printer){
            $_SESSION['message'] = "Printer record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/chbah_Printer_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}




if (isset($_POST['update-cmjah-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-cmjah-workstation'] );

        $sql = "UPDATE cmjah_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $cmjah_update_workstation = mysqli_query($conn, $sql);

        if($cmjah_update_workstation){
            $_SESSION['message'] = "Tower record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/cmjah_Tower_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Tower record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }

}
if (isset($_POST['update-cmjah-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-cmjah-monitor'] );

        $sql = "UPDATE cmjah_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $cmjah_update_workstation_monitor = mysqli_query($conn, $sql);

        if($cmjah_update_workstation_monitor){
            $_SESSION['message'] = "Monitor record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/cmjah_Monitor_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}

if (isset($_POST['update-cmjah-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-cmjah-printer'] );

        $sql = "UPDATE cmjah_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $cmjah_update_workstation_printer = mysqli_query($conn, $sql);

        if($cmjah_update_workstation_printer){
            $_SESSION['message'] = "Printer record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/cmjah_Printer_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
// End of admin updating workstations

//User Updating workstations
if (isset($_POST['update-user-hjh-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-user-hjh-workstation'] );

        $sql = "UPDATE hjh_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $hjh_update_workstation = mysqli_query($conn, $sql);

        if($hjh_update_workstation){
            $_SESSION['message'] = "Tower record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/hjh_user_Tower_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Tower record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }

}
if (isset($_POST['update-user-hjh-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-user-hjh-monitor'] );

        $sql = "UPDATE hjh_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $hjh_update_workstation_monitor = mysqli_query($conn, $sql);

        if($hjh_update_workstation_monitor){
            $_SESSION['message'] = "Monitor record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/hjh_user_Monitor_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}

if (isset($_POST['update-user-hjh-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-user-hjh-printer'] );

        $sql = "UPDATE hjh_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $hjh_update_workstation_printer = mysqli_query($conn, $sql);

        if($hjh_update_workstation_printer){
            $_SESSION['message'] = "Printer record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/hjh_user_Printer_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}



if (isset($_POST['update-user-chbah-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-user-chbah-workstation'] );

        $sql = "UPDATE chbah_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $chbah_update_workstation = mysqli_query($conn, $sql);

        if($chbah_update_workstation){
            $_SESSION['message'] = "Tower record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/chbah_user_Tower_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Tower record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }

}
if (isset($_POST['update-user-chbah-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-user-chbah-monitor'] );

        $sql = "UPDATE chbah_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $chbah_update_workstation_monitor = mysqli_query($conn, $sql);

        if($chbah_update_workstation_monitor){
            $_SESSION['message'] = "Monitor record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/chbah_user_Monitor_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}

if (isset($_POST['update-user-chbah-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-user-chbah-printer'] );

        $sql = "UPDATE chbah_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $hjh_update_workstation_printer = mysqli_query($conn, $sql);

        if($hjh_update_workstation_printer){
            $_SESSION['message'] = "Printer record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/chbah_user_Printer_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}




if (isset($_POST['update-user-cmjah-workstation'])){

    $errors = validateUserWorkstation($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-user-cmjah-workstation'] );

        $sql = "UPDATE cmjah_workstations SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', computer_name='".$_POST['computer']."', windows_type='".$_POST['windows']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $cmjah_update_workstation = mysqli_query($conn, $sql);

        if($cmjah_update_workstation){
            $_SESSION['message'] = "Tower record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/cmjah_user_Tower_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Tower record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }

}
if (isset($_POST['update-user-cmjah-monitor'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-user-cmjah-monitor'] );

        $sql = "UPDATE cmjah_workstations_monitor SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', monitor_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $cmjah_update_workstation_monitor = mysqli_query($conn, $sql);

        if($cmjah_update_workstation_monitor){
            $_SESSION['message'] = "Monitor record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/cmjah_user_Monitor_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Monitor record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}

if (isset($_POST['update-user-cmjah-printer'])){

    $errors = validateUserWorkstation_type($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-user-cmjah-printer'] );

        $sql = "UPDATE cmjah_workstations_printer SET  username='".$_POST['username']."', hospital='".$_POST['hospital']."', ward='".$_POST['ward']."', printer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $cmjah_update_workstation_printer = mysqli_query($conn, $sql);

        if($cmjah_update_workstation_printer){
            $_SESSION['message'] = "Printer record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/cmjah_user_Printer_workstations.php');
            exit();
        }
        else {
            array_push($errors, "Printer record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }
}
// End of user updating workstations

//Updating individual hardware holder
if (isset($_POST['update-team'])){

    $errors = validateTeam($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['update-team'] );

        $sql = "UPDATE individual_hardware SET  username='".$_POST['username']."', individual_holder_name='".$_POST['name']."', computer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $individual_update_hardware = mysqli_query($conn, $sql);

        if($individual_update_hardware){
            $_SESSION['message'] = "Individual hardware record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/teamIndex.php');
            exit();
        }
        else {
            array_push($errors, "Individual hardware record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }

}

if (isset($_POST['user-update-team'])){

    $errors = validateTeam($_POST);


    if ((count($errors) === 0)){
        //dd($_POST);
        /* Removing the register-btn & passwordConf values using unset() from Register.php since in our DB we don't have them */
        unset($_POST['user-update-team'] );

        $sql = "UPDATE individual_hardware SET  username='".$_POST['username']."', individual_holder_name='".$_POST['name']."', computer_name='".$_POST['computer']."', serial_number='".$_POST['sn']."', assets_number='".$_POST['assets']."' WHERE id=".$_POST['id']."";
        $individual_update_hardware = mysqli_query($conn, $sql);

        if($individual_update_hardware){
            $_SESSION['message'] = "Individual hardware record updated successfully";
            $_SESSION['type'] = "success";
            header('location: '. BASE_URL . '/user_teamIndex.php');
            exit();
        }
        else {
            array_push($errors, "Individual hardware record not updated");
        }

        $conn->close();

    } else{
        /* If there where errors we store the values that the user enters to save time for user while registering  */
        $username = $_POST['username'];
        $sn = $_POST['sn'];
        $assets = $_POST['assets'];
    }

}
// End of updating the individual hardware holders


// Deleting Workstation Records for individual Hospitals
if(isset($_GET['hjhTower_delete_id'])){
    $count = delete('hjh_workstations', $_GET['hjhTower_delete_id']);

    $_SESSION['message'] = "Tower deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/hjh_Tower_workstations.php');
    exit();
}
if(isset($_GET['hjhPrinter_delete_id'])){
    $count = delete('hjh_workstations_printer', $_GET['hjhPrinter_delete_id']);

    $_SESSION['message'] = "Printer deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/hjh_Printer_workstations.php');
    exit();
}
if(isset($_GET['hjhMonitor_delete_id'])){
    $count = delete('hjh_workstations_monitor', $_GET['hjhMonitor_delete_id']);

    $_SESSION['message'] = "Monitor deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/hjh_Monitor_workstations.php');
    exit();
}

if(isset($_GET['chbahTower_delete_id'])){
    $count = delete('chbah_workstations', $_GET['chbahTower_delete_id']);

    $_SESSION['message'] = "Tower deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/chbah_Tower_workstations.php');
    exit();
}
if(isset($_GET['chbahPrinter_delete_id'])){
    $count = delete('chbah_workstations_printer', $_GET['chbahPrinter_delete_id']);

    $_SESSION['message'] = "Printer deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/chbah_Printer_workstations.php');
    exit();
}
if(isset($_GET['chbahMonitor_delete_id'])){
    $count = delete('chbah_workstations_monitor', $_GET['chbahMonitor_delete_id']);

    $_SESSION['message'] = "Monitor deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/chbah_Monitor_workstations.php');
    exit();
}

if(isset($_GET['cmjahTower_delete_id'])){
    $count = delete('cmjah_workstations', $_GET['cmjahTower_delete_id']);

    $_SESSION['message'] = "Tower deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/cmjah_Tower_workstations.php');
    exit();
}
if(isset($_GET['cmjahPrinter_delete_id'])){
    $count = delete('cmjah_workstations_printer', $_GET['cmjahPrinter_delete_id']);

    $_SESSION['message'] = "Printer deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/cmjah_Printer_workstations.php');
    exit();
}
if(isset($_GET['cmjahMonitor_delete_id'])){
    $count = delete('cmjah_workstations_monitor', $_GET['cmjahMonitor_delete_id']);

    $_SESSION['message'] = "Monitor deleted successfully";
    $_SESSION['type'] = "success";
    header('location: '. BASE_URL . '/cmjah_Monitor_workstations.php');
    exit();
}
// Delete end here