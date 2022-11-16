<?php
Class User{
   private $db;
   private int $id;
   private string $login;
   private string $password;
   private string $firstName;
   private string $lastName;


   public function __construct(string $login, string $password)
   {
       $this->login = $login;
       $this->password_hash = $password;
       // referencing global DB connection
       global $db;
       $this->db = &$db;
   }
   public function isAuth() : bool {
       //function returns true if the id of the user has been set (has been pulled from db)
       if(isset($this->id) && $this->id != null)
           return true;
       else
           return false;
   }
   public function login() {
       $query = "SELECT * FROM user WHERE login = ? LIMIT 1";
       $preparedQuery = $this->db->prepare($query);
       $preparedQuery->bind_param('s', $this->login);
       $preparedQuery->execute();
       $result = $preparedQuery->get_result();
       $row = $result->fetch_assoc();
       if(password_verify($this->password, $row['password'])) {
           $this->id = $row['id'];
           $this->firstName = $row['firstName'];
           $this->lastName = $row['lastName'];
       }
   }
   public function logout() {

   }
   public function register() {

   }
}
?>

