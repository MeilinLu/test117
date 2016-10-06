<?php
  echo 'hello world';
  $myvar = 'some text store in the variable';
  echo '<br>';
  echo '$myvar';
  echo '<br>';
  echo "$myvar";
  echo '<br>';
  
  $url = 'http://www.google.com';
  $linkName = 'Google';
  echo '< a href="'.$url.'>"'.$lineName.'</a>';
  echo '<br>';
  
  $myarray = array();
  $myarray[] = 'some value 1';
  $myarray[] = 'some value 2';
  $myarray[] = 'some value 3';
//print_r($myarray);
  $myAssoc['value1'] = array('LinkName'=>'NJIT','URL'=>'www.njit.edu');
  $myAssoc['value2'] = array('LinkName'=>'Facebook','URL'=>'www.facebook.com');
  $myAssoc['value3'] = array('LinkName'=>'Google','URL'=>'www.google.com');
  print_r($myAssoc);
  echo '<br>';
  
  foreach($myAssoc as $link){
    echo '<a href="http://'.$link['URL'].'">' .$link['linkName'].'</a><br>';
  }

  foreach($myAssoc as $link){
    foreach($link as $key=>$value){
      echo $key.' '.$value."\n";
    }
  }
  echo '<br>';

  class myclass{
    public $myPublic;
    private $myPrivate;
    protected $myProtected;

    public function __construct(){
      $this->myPublic = 1;
      $this->myPrivate = 2;
      $this->myProtected = 3;
      $this->sayHello('Meilin');
      $this->noPass();
      $this->sayGoodBye();
    }
    public function noPass(){}
    public function sayHello($name){
      echo 'Hello'.$name.'<br>';
    }
    public function sayGoodBye($name){
      echo 'Goodbye'.$name.'<br>';
    }
    public function __destruct(){
      $this->sayGoodBye('Meilin');
    }
  }

  $obj = new myclass;
  $obj->sayHello('Theresa');
  $obj->myPublic = 'swamp gas';
  print_r($obj);
  echo 'done';

?>
