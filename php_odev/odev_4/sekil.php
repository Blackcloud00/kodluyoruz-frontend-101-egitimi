<?php
class sekil{
  public $s1; # dikdortgen kısa kenar,
  public $s2; # dikdortgen uzun kenar,

  public $s3; # kare kenar,

  public $s4; # ucgen kenar,
  public $s5; # ucgen kenar,
  public $s6; # ucgen kenar,

  public function dikdrtgen(){
    return $this->s1*$this->s2;
  }
  public function kare(){
    return $this->s3 * $this->s3;
  }
  public function ucgen(){
    $ch = $this->s4 + $this->s5 + $this->s6;
    return $ch/2;
  }
}
$sekil = new sekil();

$sekil->s1 = 10;
$sekil->s2 = 30;

$sekil->s3 = 10;

$sekil->s4 = 10;
$sekil->s5 = 10;
$sekil->s6 = 10;

echo "dikdörtgen alanı :".$sekil->dikdrtgen()."<br>";
echo "kare alanı :". $sekil->kare()."<br>";
echo "üçgen alanı :". $sekil->ucgen();
?>