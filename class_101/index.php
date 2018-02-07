<?php 

/*
# encapsulation
public 
protected
private 

# inheritance
polymorphism

# overloading
# overriding

 */

class Baba {
  public $name = 'hello';
  public function hello () {
    echo 'hello world from baba';
  }
}

class Chele extends Baba {
  public $name = 'world';
  public function sayHello() {
    return $this->name;
  }
}


interface ammar_order {
  public function alo();
  public function patal();
  public function toamto();
}

class ami implements ammar_order {
  public function alo() {
    echo 'I purchsed alo';
  }
  public function patal() {
    echo 'I purchsed patal';
  }
  public function toamto() {
    echo 'I purchsed patal';
  }
}






