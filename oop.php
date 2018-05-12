<?php 
	class Person{

		private $name;
		private $email;

		//we can create static variable as well as methods to acces without instatiatoin, ther in place of this, we use self, and -> => ::
		public static $ageLimit = 40;

		public function __construct($name, $email){
			$this->name = $name;
			$this->email = $email;
			echo __CLASS__.' created<br>';
		}

		public function __destruct(){
			echo __CLASS__.' destructed<br>';
		}

		public function setName($name){
			$this->name = $name;
		}
		public function getName(){
			return $this->name.' <br>';
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getEmail(){
			return $this->email.' <br>';
		}
	}

	//$person1 = new Person; only if public
	//$person1->name = 'John Doe';
	//echo $person1->name;

	//$person1 = new Person;
	//$person1->setName('John Doee');
	//echo $person1->getName();

	$person1 = new Person('Saurav','bhagat6969@gmail.com');
	echo Person::$ageLimit;
	class Customers extends Person{
		private $balance;

		public function __construct($name, $email, $balance){
			parent::__construct($name, $email, $balance);
			$this->balance = $balance;
			echo 'A new '. __CLASS__.' has been created';
		}

		public function setBalance($balance) {
			$this->balance = $balance;
		}

		public function getBalance() {
			return $this->balance.' <br>';
		}
	}

	//$customer1 = new Customers('saurav', 'saurav@gmail.com',300);

	//echo $customer1->getBalance();
?>

