# create a class Cat () that will have the following private properties:
 - First name (string of 3 to 20 characters) 
 - Age (int) 
 - Color (string of 3 to 10 characters) 
 - Sex (string: male or female) 
 - Race (string of 3 to 20 characters) 
 
# Make getters/setters to validate the data types above and the constructor to instantiate the class. 
 
 <?php 
 
 class Cat {
     
     private $firstName;
     private $age;
     private $color;
     private $sex;
     private $race;
     
     public function __construct($firstName, $age, $color, $sex, $race){
         $this->firstName = $firstName;
         $this->age = $age;
         $this->color = $color;
         $this->sex = $sex;
         $this->race = $race;
     }
     
     public function getFirstname()
     {
         return $this->firstname;
     }	
     public function getAge()
     {
         return $this->age;
     }	
     public function getColor()
     {
         return $this->color;
     }	
     public function getSex()
     {
         return $this->sex;
     }	
     public function getRace()
     {
         return $this->race;
     }	
     
     public function setFirstname(string $firstname)
     {
         $this->firstname = $firstname;
         return $this;         
     }
     
     public function setAge(int $age)
     {
         $this->age = $age;
         return $this;       
     }
     
     public function setColor(string $color)
     {
         $this->color = $color;
         return $this;
     }
     
     public function setSex(string $sex)
     {
         $this->sex = $sex;
         return $this;
     }
     public function setRace(string $race)
     {
         $this->race = $race;
         return $this;
     }
     
     public function getInfo() {
         $allCats = $cats->fetchAll();
         foreach ($allCats as $catInfo) {
             return $catInfo;
        }
         
     }
 }
 
 
 
 ?>