<?php

class Login {

    public function check ( $email , $password , $rememberMe = false ) {
         $pass   = get_hash_password ( $email , $password ) ;
        $query  = "select * from user where email='$email' and password='$pass' " ;
        $result = Db::get () -> query ( $query ) ;
        if ( $result -> num_rows == 1 ) {
            $user               = $result -> fetch_assoc () ;
            $_SESSION[ 'userId' ] = $user[ 'id' ] ;

            if ( $rememberMe ) {
                setcookie ( 'userId' , $user[ 'id' ] , time () + 3600 * 24 * 14 , "/" ) ;
                setcookie ( "secret" , $this -> get_secret ( $user ) , time () + 3600 * 24 * 14 , "/" ) ;
            }
            return TRUE ;
        }
        return FALSE ;
       
    }

    private function get_secret ( $user ) {
       
    }

    public function is_login () {
      
    }

    private function get_user_by_id ( $userId ) {
      
    }

    public function get_current_user () {
       
    }

    public function is_admin () {
      

}
}
