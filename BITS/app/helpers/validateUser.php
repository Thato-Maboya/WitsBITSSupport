<?php

function validateUser($user){
    $errors = array();

    // Validating the username
    if(empty($user['username'])){
        array_push($errors, "Username is required");
    }

    // Validating the ward
    if(empty($user['ward'])){
        array_push($errors, "Select ward");
    }

    // Validating if there issue was selected
    if(empty($user['replaced_toner']) && empty($user['issued_paper']) && empty($user['other_issue'])){
        array_push($errors, "Consumables issued is required");
    }

    // Validating if there issue selected was provided
    if(empty($user['type_of_toner']) && empty($user['quality_of_paper']) && empty($user['specify_issue'])){
        array_push($errors, "Provide Consumables issued selected above");
    }

    return $errors;
}
function validateUser1($user){
    $errors = array();

    // Validating the username
    if(empty($user['username'])){
        array_push($errors, "Username is required");
    }

    // Validating the ward
    if(empty($user['ward'])){
        array_push($errors, "Select ward");
    }

    // Validating if there issue was selected
    if(empty($user['replaced_toner']) && empty($user['issued_paper']) && empty($user['other_issue'])){
        array_push($errors, "Consumables issued is required");
    }

    // Validating if there issue selected was provided
    if(empty($user['type_of_toner']) && empty($user['quality_of_paper']) && empty($user['specify_issue'])){
        array_push($errors, "Provide Consumables issued selected above");
    }

    return $errors;
}


function validateUserRegistration($user){
    $errors = array();

    // Validating the username
    if(empty($user['username'])){
        array_push($errors, "Username is required");
    }

    // Validating the email
    if(empty($user['email'])){
        array_push($errors, "Email is required");
    }

    // Validating the password
    if(empty($user['password'])){
        array_push($errors, "Password is required");
    }

    // Checking if the passwords match
    if($user['passwordConf'] !== $user['password']){
        array_push($errors, "Password do not match");
    }

    /* $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser){
        array_push($errors, "Email already exists");
    } */
    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser){
        //if(isset($user['email']) && $existingUser['id'] != $user['id']){
        if(isset($existingUser['email'])){
            array_push($errors, "Email already exists");
            //dd($existingUser);
        }

        if(isset($post['create-admin'])){
            array_push($errors, "Email already exists");
        }
    }

    return $errors;
}


function validateLogin($user){
    $errors = array();

    // Validating the username
    if(empty($user['username'])){
        array_push($errors, "Username is required");
    }

    // Validating the password
    if(empty($user['password'])){
        array_push($errors, "Password is required");
    }


    return $errors;
}


function validateList($user){
    $errors = array();

    // Validating the username
    if(empty($user['username'])){
        array_push($errors, "Username is required");
    }

    // Validating the ward
    if(empty($user['issue'])){
        array_push($errors, "Specify the issue of the ward");
    }

    // Validating if there issue was selected
    if(empty($user['hospital'])){
        array_push($errors, "Hospital name is required");
    }

    // Validating if there issue selected was provided
    if(empty($user['ward'])){
        array_push($errors, "Hospital ward is required");
    }

    return $errors;
}

function validateUserWorkstation($user){
    $errors = array();

    // Validating the username
    if(empty($user['username'])){
        array_push($errors, "Username is required");
    }

    //Validating hospital name
    if(empty($user['hospital'])){
        array_push($errors, "hospital name is required");
    }

    // Validating the ward
    if(empty($user['ward'])){
        array_push($errors, "Select ward");
    }

    // Validating the Name of the computer
    if(empty($user['computer'])){
        array_push($errors, "Select computer name");
    }

    // Validating the windows type of the computer
    if(empty($user['windows'])){
        array_push($errors, "Select the windows of the computer");
    }

    // Validating the serial number of the computer
    if(empty($user['sn'])){
        array_push($errors, "Serial Number is required");
    }

    // Validating the assets number of the computer
    if(empty($user['assets'])){
        array_push($errors, "Assets Number is required");
    }

    return $errors;
}

// Validation of adding printers and monitor since they dont compose of windows type like tower/built in computer
function validateUserWorkstation_type($user){
    $errors = array();

    // Validating the username
    if(empty($user['username'])){
        array_push($errors, "Username is required");
    }

    //Validating hospital name
    if(empty($user['hospital'])){
        array_push($errors, "hospital name is required");
    }

    // Validating the ward
    if(empty($user['ward'])){
        array_push($errors, "Select ward");
    }

    // Validating the Name of the computer
    if(empty($user['computer'])){
        array_push($errors, "Select computer name");
    }

    // Validating the serial number of the computer
    if(empty($user['sn'])){
        array_push($errors, "Serial Number is required");
    }

    // Validating the assets number of the computer
    if(empty($user['assets'])){
        array_push($errors, "Assets Number is required");
    }

    return $errors;
}

function validateTeam($user){
    $errors = array();

    // Validating the username
    if(empty($user['username'])){
        array_push($errors, "Username is required");
    }

    //Validating Individual name
    if(empty($user['name'])){
        array_push($errors, "Select individual name");
    }

    // Validating the Name of the computer
    if(empty($user['computer'])){
        array_push($errors, "Select computer name");
    }

    // Validating the serial number of the computer
    if(empty($user['sn'])){
        array_push($errors, "Serial Number is required");
    }

    // Validating the assets number of the computer
    if(empty($user['assets'])){
        array_push($errors, "Assets Number is required");
    }

    return $errors;
}
// End of printer and monitor