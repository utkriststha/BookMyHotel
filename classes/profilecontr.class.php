<?php
// ProfileContr is the Control class from MVC model.
class ProfileContr extends Profile{
    //Method that updates user profile and user table records.
    public function updateUserProfile ($title, $firstName, $lastName, $gender, $DOB, $country, $username, $email, $phoneNumber){
        $userView = new UsersView();
        $userDetails=$userView->userLoginDetail($username,$email);

        $this->updateProfile($title, $firstName, $lastName, $gender, $DOB, $country, $username, $email, $phoneNumber,$userDetails["user_id"]);

        $userControl = new UsersControl();
        $userControl->updateUser($firstName, $lastName,$username, $email, $userDetails["user_id"]);
    }

    //Method that creates user profile records.
    public function setUserProfile($firstName,$lastName,$email,$username,$user_id){
        $this->userProfile($firstName,$lastName,$email,$username,$user_id);
    }

     //Method that retrieves user profile records based on username.
    public function getProfile($username){
        return $this->getUser($username,$username);  
    }

    //Method that retrieves user profile records.
    public function getUserDetails(){
        return $this->getAllRercords();
    } 

    //Method that retrieves user first and last name.
    public function getUserName(){
        return $this->getName();
    }

}