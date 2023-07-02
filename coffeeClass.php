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
           echo "Boiling water for the coffee\n";
           echo "Water boiled, waiting for it to cool\n";
           echo "Water has reached an appropriate temperature\n";
        }
        
        private function grindCoffeeBeans() {
           echo "Grinding coffee beans\n";
           echo "Coffee beans grounded successfully\n";

        }
        
        private function pressGroundCoffeeBeans() {
           echo "Pressing your ground coffee beans in the machine now\n";
           echo "Machine is heating up now\n";
        }
        
        private function makeCoffee() {
           echo "Coffee is pouring, it looks amazing!\n";

        }
        
        private function addMilk($milk, $art) {
           echo "Adding ".$milk." now and making a ".$art." with it\n";
        }
		

	public function giveCoffee() { //Displays coffee
		echo "Here is your coffee, that will be £10 thank you!\n";
        echo "☕\n";
        echo "Hmm thats a bit small...\n";
        echo "Heres a bigger one\n";
        echo "             ) (\n";
        echo "            (   ) )\n";
        echo "              ) ( (\n";
        echo "           _______)_\n";
        echo "        .-'---------|  \n";
        echo "       ( C|/\/\/\/\/|\n";
        echo "        '-./\/\/\/\/|\n";
        echo "          '_________'\n";
        echo "           '-------'\n";
		
	}
	}
?> 
