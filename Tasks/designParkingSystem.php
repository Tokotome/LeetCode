<?php 
//https://leetcode.com/problems/design-parking-system

//Design a parking system for a parking lot. The parking lot has three kinds of parking spaces: big, medium, and small, 
//with a fixed number of slots for each size.
//Implement the ParkingSystem class:
//ParkingSystem(int big, int medium, int small) Initializes object of the ParkingSystem class. The number of slots 
//for each parking space are given as part of the constructor.
//bool addCar(int carType) Checks whether there is a parking space of carType for the car that wants to get into the parking lot. 
//carType can be of three kinds: big, medium, or small, which are represented by 1, 2, and 3 respectively. 
//A car can only park in a parking space of its carType. If there is no space available, return false, 
//else park the car in that size space and return true.


class ParkingSystem {
    /**
     * @param Integer $big
     * @param Integer $medium
     * @param Integer $small
     */
    private array $data;
    function __construct($big, $medium, $small) {
        $this->data[1] = $big;
        $this->data[2] = $medium;
        $this->data[3] = $small;
    }
  
    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType) {
        if($this->data[$carType] == 0)
        {
            return false;
        }
        $this->data[$carType] -= 1;
        return true;
    }
}


?>