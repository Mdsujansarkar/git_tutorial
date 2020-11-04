<?php 
interface passwordHashInterface{
    function hash($data);
}
class MD5HasgEngin implements passwordHashInterface{
    function hash($data){
        return md5($data);
    }
}
class SHA1HashEngine implements passwordHashInterface{
    function hash($data){
        return SHA1($data);
    }
}
class NativeHashEngine implements passwordHashInterface{
    function hash($data){
        return password_hash($data, PASSWORD_BCRYPT);
    }
}
class PasswordHasher{
    private $hashEngine;
    function __construct(passwordHashInterface  $hashEngine){
        $this->hashEngine = $hashEngine;
    }
    function getHesh( $data ){
        return $this->hashEngine->hash($data);
    }
}
$md5 = new MD5HasgEngin();
$sha1 = new SHA1HashEngine();
$nativ = new NativeHashEngine();
$password = "somepassword";
$ph = new PasswordHasher($md5);
echo $ph->getHesh($password);