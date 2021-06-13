<?php
interface iUserlist
{
    public function login(User $user,string $password) : bool;
}
class Userlist implements iUserlist
{
    private $userlist;

    public function __construct()
    {
        $this->userlist = Model::getAllUsers();
    }

    public function addUser(User $user) : bool
    {
        foreach($this->userlist as $registered)
        {
            if($registered->getUsername() == $user->getUsername())
            {
                // user already registered
                return false;
            }
        }
        Model::addUser($user);
        return true;
    }

    public function delete(User $user) :bool
    {
        foreach ($this->userlist as $registered)
        {
            if($registered->getUsername() == $user->getUsername()) // Checks if user is registered
            {
                Model::Delete($user);
                return true;
            }

        }
        return false;


    }

    public function login(User $user, string $password) : bool
    {
        foreach($this->userlist as $registered)
        {
            if($registered->getUsername() == $user->getUsername())
            {
                // user is registered
                $passwordhash = $registered->getPassword();

                if(password_verify($password,$passwordhash))
                {
                    //password is correct
                    $user->setUsertype($registered->getUsertype());
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        // user not registered
        return false;
    }
}