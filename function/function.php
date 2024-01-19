<?Php
class adminphp{
    private $conn; 

    //Databease Conncet
    
    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "intelbluehost";

        $this->conn = mysqli_connect( $db_host, $db_user, $db_pass, $db_name);

        if(!$this->conn){
            die("Database Connect Error!");
        }
    }

// Add data 

public function add_data($data){
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $number = $data['number'];
        $com_name = $data['com_name'];
        $stree_add = $data['stree_add'];
        $stree_add2 = $data['stree_add2'];
        $city = $data['city'];
        $state = $data['state'];
        $postcode = $data['postcode'];
        $country = $data['country'];
        $password = $data['password'];
        $com_password = $data['com_password'];

        $query = "INSERT INTO user (first_name, last_name, email, number, com_name, stree_add, stree_add2, city, state, postcode, country, password ) value ('$first_name', '$last_name', ' $email', ' $number' , ' $com_name', ' $stree_add', ' $stree_add2', ' $city', ' $state', ' $postcode', ' $country', ' $password')";

        if(mysqli_query($this->conn, $query)){
            
            return "Registration Successfully";
        }
}


}

?>