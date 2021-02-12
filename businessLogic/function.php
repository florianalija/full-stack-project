<?php
    class Contact{
        private $host="localhost";
        private $user="root";
        private $pass="";
        private $db="tange";
        public $mysqli;

        public function __construct(){
            return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
        }
        public function contact($data){
            $fname=$data['firstname'];
            $email=$data['email'];
            $country=$data['country'];
            $message=$data['subject'];
            $q="insert into contact set first_name='$fname', email='$email', country='$country', message='$message'";
            return $this->mysqli->query($q);
        }
    }

?>