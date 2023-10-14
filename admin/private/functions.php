<?php
function get_random_string($length) {
    $characters = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    
    $length = rand(4,$length);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $random = rand(0,61);
        $randomString .=$characters[$random];
    }
    return $randomString;
}

function esc($word){
	return addslashes($word);
}

function check_login($con){
    if(isset($_SESSION['admin_url'])){
        $arr['admin_url']=$_SESSION['admin_url'];
        $query = "select * from admin where admin_url = :admin_url limit 1";
        $stm = $con->prepare($query);
        $check = $stm->execute($arr);
        if(($check)){
                $data = $stm->fetchAll(PDO::FETCH_OBJ);
                if(is_array($data) && count($data)>0){
                    return $data[0];
                }
        }
    }else{
        echo "<script> window.location = 'login';</script>";
    }
}

function check_user_login($con){
    if(isset($_SESSION['user_token'])){
        $arr['user_token']=$_SESSION['user_token'];
        $query = "select * from users where token = :user_token limit 1";
        $stm = $con->prepare($query);
        $check = $stm->execute($arr);
        if(($check)){
                $data = $stm->fetchAll(PDO::FETCH_OBJ);
                if(is_array($data) && count($data)>0){
                    return $data[0];
                }
        }
    }else{
        echo "<script> window.location = 'login';</script>";
    }
}


function get_settings($con){

    $sql = 'SELECT * from general_settings where id=1 limit 1';
    $statement = $con->prepare($sql);
    $statement->execute();
    $set = $statement->fetchAll(PDO::FETCH_OBJ);
    if(count($set)==1){
        $set=$set[0];
    }
    return $set;
}

function get_banner($con){
    $sql = 'SELECT * FROM sliders order by id desc';
    $stm = $con->prepare($sql);
    $stm->execute();
    $banners = $stm->fetchAll(PDO::FETCH_OBJ);
    return $banners;
}

function get_services($con){
    $sql = 'SELECT * FROM services order by id desc';
    $stm = $con->prepare($sql);
    $stm->execute();
    $results = $stm->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function get_h_menus($con){
    $sql = 'SELECT * FROM header_menus';
    $stm = $con->prepare($sql);
    $stm->execute();
    $results = $stm->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function get_drop_menus($con,$menu_id){
    $sql = 'SELECT * FROM dropdown_menus where menu_id=:menu_id';
    $stm = $con->prepare($sql);
    $stm->execute(['menu_id'=>$menu_id]);
    $results = $stm->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function get_f_menus($con){
    $sql = 'SELECT * FROM footer';
    $stm = $con->prepare($sql);
    $stm->execute();
    $results = $stm->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function get_career($con){
    $sql = 'SELECT * from jobs';
    $statement = $con->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function get_in_career($con,$slug){
    $sql = 'SELECT * from jobs where slug=:slug';
    $statement = $con->prepare($sql);
    $statement->execute(['slug'=>$slug]);
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

?>