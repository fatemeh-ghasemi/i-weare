<?php

class Register {

    public function add_new_user ( $fname , $lname , $email , $password ) {
        $pass = get_hash_password ( $email , $password ) ;
        Db::get () -> query ( "insert into user set firstname='$fname' , lastname = '$lname' ,email = '$email' , password='$pass' , role='user' " ) ;
        return Db::get () -> insert_id ;
    }

    public function change_password_request ( $email ) {
        
    }

    public function is_valid_token ( $token , $id ) {
        
    }

    public function set_password ( $id , $email , $password ) {
        
    }

    public function remove_token ( $id , $token ) {
        
    }

    private function create_token ( $id ) {
        
    }

    private function save_token ( $id , $token ) {
        
    }

    private function email_change_password ( $id , $email , $token ) {
        
    }

}
