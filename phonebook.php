<?php

/* 	
	https://www.hackerrank.com/challenges/30-dictionaries-and-maps/problem
	List name number
	sam 99912222|Jurong 
	tom 11122222| 
	harry 12299933|

	output tom = 11122222
	output = "Not found"
	

	setMethod(key, value)

	getMethod(key) 
	return output

	phonebook = []

	["kenny" => ["phone"=>"123", "address" => "Woodlands"], "sam" => "99912222"]
	
	setmethod 
	push new ("key" =>. "value") to phonebook[]

	getmethod
	if(phonebook[kenny] != null){
		
	}
*/	
class phonebook{


	public function __construct(){
		$this->phonebook_array = [];
	}

	public function setMethod($key, $value){
		$this->phonebook_array[$key] = $value;
	}

	public function getMethod($key){
		if($this->phonebook_array[$key] != NULL){
			$output = "";
			$output.= $key ." = " . $this->phonebook_array[$key];
			return $output;
		}
		else{
			return "Not found";
		}
	}


}



$phone = new phonebook();
var_dump($phone->phonebook_array);
$phone->setMethod("Kenny", "81283844");
$phone->setMethod("Sam", "99912222");

print("BREAK \n");

$result = $phone->getMethod("Sam");
print($result);
print("\n");

$result = $phone->getMethod("abc");
print($result);




?>