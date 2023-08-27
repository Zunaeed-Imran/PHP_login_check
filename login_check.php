<?php

class Login
{
  // gather email and password.
  // check user existance with email.
  // when user exist, match password with user input.
  // when user does not exist, show error.

  private $email;
  private $password;
  private $user = [
    'email' => 'akash@itlogiko.com',
    'password' => 'itlogiko',
  ];
  
  public function __construct($email, $password)
  {
    $this->email = $email;
    $this->password = $password;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function execute()
  {
    // if ($this->user['email'] === $this->email) {
    //   if ($this->user['password'] === $this->password) {
    //     echo "User logged in.";
    //   } else {
    //       echo "User log in failed, password did not match.";
    //   }
    // } else {
    //   echo "User log in failed, email did not match.";
    // }
    
    // $user = fetch from database filtering with email.
    // check if $user has value.
    // check if password matches.

    if ($this->user['email'] === $this->email && $this->user['password'] === $this->password) {
      echo "User logged in.";
    } else {
      echo "User log in failed, email or password did not match.";
    }
    echo PHP_EOL;
  }

}

$login = new Login('akash@itlogiko.com', 'itlogiko');
// $login = new Login();
// $login->setEmail('akash@itlogiko.com');
// $login->setPassword('itlogik1o');
$login->execute();
// var_dump($login);

?>