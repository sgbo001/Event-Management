<?php
class User {
    private $fname;
    private $lname;
    private $email;
    private $phoneNo;
    private $id;
    private $username;
    private $password;
    private $role;

    public function __construct($firstName, $lastName, $mail, $no,  $i, $uname, $pwd, $r) {
        $this->fname = $firstName;
        $this->lname = $lastName;
        $this->email = $mail;
        $this->phoneNo = $no;
        $this->id = $i;
        $this->username = $uname;
        $this->password = $pwd;
        $this->role = $r;
    }
    public function getFName() { return $this->fname; }
    public function getLName() { return $this->lname; }
    public function getEmail() { return $this->email; }
    public function getPhoneNo() { return $this->phoneNo; }
    public function getId() { return $this->id; }
    public function getUsername() { return $this->username; }
    public function getPassword() { return $this->password; }
    public function getRole() { return $this->role; }

    public function setFName($firstName) { $this->fname = $firstName; }
    public function setLName($lastName) { $this->lname = $lastName; }
    public function setEmail($mail) { $this->email = $mail; }
    public function setPhoneNo($no) { $this->phoneNo = $no; }
    public function setId($i) { $this->id = $i; }
    public function setUsername($n) { $this->username = $n; }
    public function setPassword($p) { $this->password = $p; }
    public function setRole($r) { $this->role = $r; }
}
?>
