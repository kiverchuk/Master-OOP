<?
header('Content-Type: text/html; charset=utf-8');
$client = new Client(18,79868579,"Anton","Chiverciuc");

$client->personInformation();
echo "<hr>";

echo "Some setters<hr>";
$client->__set("age", 31);
$client->__set("phone", "123456789");
$client->__set("name", "Sergiu");
$client->__set("surName", "Chilat");

echo "Getters<br>";
echo "Getter age: ".$client->__get("age")."<br>";	
echo "Getter phone: ".$client->__get("phone")."<br>";	
echo "Getter name: ".$client->__get("name")."<br>";	
echo "Getter surName: ".$client->__get("surName")."<hr>";

$client->personInformation();



class Client
{
	private $age;
	private $phone;
	private $name;
	private $surName;
	
	function __construct($newAge, $newPhone, $newName, $newSurName)
	{
		$this->age = $newAge;
		$this->phone = $newPhone;
		$this->name = $newName;
		$this->surName = $newSurName;
	}
	
	public function __get($property) {
		if (property_exists($this, $property)) {
		  return $this->$property;
		}
	}

	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
		return $this;
	}

	public function personInformation(){
		echo "Persoana: ".$this->name." ".$this->surName."<br>";
		echo "Virsta: ".$this->age."<br>";
		echo "Telefon: ".$this->phone."<br>";
	}
}

