<?php

	class coffee {
		
		
		function __construct($milk, $art) {
			$this->boilCoffeeWater();
			$this->grindCoffeeBeans();
            $this->pressGroundCoffeeBeans();
            $this->makeCoffee();
            $this->addMilk($milk, $art);
		}
		
        private function boilCoffeeWater() {
           echo "Boiling water for the coffee";
           sleep(2);
           echo "Water boiled, waiting for it to cool";
           sleep(1);
           echo "Water has reached an appropriate temperature";
        }
        
        private function grindCoffeeBeans() {
           echo "Grinding coffee beans";
           sleep(2);
           echo "Coffee beans grounded successfully";

        }
        
        private function pressGroundCoffeeBeans() {
           echo "Pressing your ground coffee beans in the machine now";
           sleep(1);
           echo "Machine is heating up now";
        }
        
        private function makeCoffee() {
           echo "Coffe is pouring, it looks amazing!";

        }
        
        private function addMilk($milk, $art) {
           echo "Adding ".$milk."now and making a ".$art." with it";
            sleep(2);
        }
		

	public function giveCoffee() { //Displays coffee
		echo "Here is your coffee, that will be £10 thank you!".PHP_EOL;
        echo "                              ░░              ░░              ░░                                
        ░░              ░░              ░░                                
          ░░              ░░              ░░                              
          ░░              ░░              ░░                              
        ░░              ░░              ░░                                
        ░░              ░░              ░░                                
      ░░              ░░              ░░                                  
      ░░              ░░              ░░                                  
        ░░              ░░              ░░                                
        ░░              ░░              ░░                                
          ░░              ░░              ░░                              
          ░░              ░░              ░░                              
        ░░              ░░              ░░                                
        ░░              ░░              ░░                                
                                                                          
              ▓▓██████████████████████                                    
      ████████                        ████████                            
  ████        ████████████████████████        ████                        
██░░    ██████▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▒▒██▓▓██  ░░░░██                      
██    ████▒▒▓▓▓▓▓▓▓▓░░░░░░▓▓▓▓░░░░░░▓▓▓▓▒▒▓▓▓▓████    ██                    
██    ██▓▓▓▓▓▓▓▓▓▓▓▓░░▓▓▓▓▓▓░░░░▓▓▓▓▓▓░░▓▓▓▓▓▓▓▓▒▒▓▓██    ██                  
██  ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░▓▓▓▓▓▓▓▓▓▓▒▒▓▓▓▓  ██  ██▓▓▓▓▓▓██      
██  ██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░▓▓▓▓▓▓▓▓▓▓▓▓░░▓▓▓▓▓▓▓▓▓▓▓▓▓▓▒▒██  ████          ██    
██    ██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░▓▓▓▓▓▓▓▓░░▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██    ██              ██  
██  ░░████▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░▓▓▓▓▓▓▓▓▓▓▓▓▓▓████░░  ██░░    ████      ██  
██        ██████▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██████        ██  ████    ██    ██  
██              ████████████████████████              ████        ██    ██  
██                ░░  ░░░░░░░░░░░░░░░░░░              ██          ██    ██  
██████                                                    ██████    ██      ██  
████    ██                                                    ██    ██  ██    ██    
░░██▒▒░░    ▒▒▓▓                                                ▓▓▒▒    ░░██▒▒    ██    
▓▓  ░░          ██                                                ██  ██████      ▓▓      
██                ██                                                ████        ████  ██    
██                  ░░██                                            ██░░░░    ████░░░░  ░░██  
██                ██████                                            ██████████░░░░        ██  
██                ██▒▒░░▒▒██                                        ██▒▒▒▒██                  ██
██              ██▒▒██▒▒▒▒██                                        ██▒▒▒▒▒▒██                ██
██              ██░░▓▓████▒▒▓▓                                    ▓▓▒▒██░░▒▒██                ██
██            ██▒▒██▓▓░░▒▒▒▒██                                ██▒▒░░▒▒████                ██  
██              ██░░██▒▒████▒▒████                        ████▒▒██▒▒██▒▒██                ██  
██            ██▒▒▒▒██▓▓░░▒▒░░▒▒██▓▓▓▓            ▓▓▓▓██▒▒██▒▒░░██▒▒░░██              ██    
██            ██████▒▒▒▒▒▒██████▒▒▒▒████████████▒▒██▒▒▒▒▓▓██▒▒▒▒████░░            ██      
██                ██████░░▒▒██░░▒▒██▒▒▒▒░░▒▒██▒▒▒▒██░░▒▒▒▒████                ██        
████                ██▒▒▒▒▓▓▒▒▒▒██░░▒▒████▒▒░░▒▒▒▒██████                ████          
░░  ████              ████  ████░░████░░░░████████    ░░            ████              
████                                                    ████                  
██▓▓▓▓██                                    ▓▓▓▓▓▓██                      
        ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓                              
";
		
	}
	}
?> 
