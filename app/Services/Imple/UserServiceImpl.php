<?php 
namespace App\Services\Imple;
use App\Services\UserService;

class UserServiceImple implements UserService{
    private array $users = [
        'kepo' => 'kepos'
    ];
    function login(string $user,string $password):bool{
        if(!isset($this->users[$user])){
            return false;
        }

        $correctPassword = $this->users[$user];
        return $password == $correctPassword;
    }
}

?>