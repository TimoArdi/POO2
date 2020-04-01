<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES =[
        'fuel',
        'electric',
    ];

    private $energyLevel = 100;
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    private $energy;
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    private $stockCapacity;
    public function getstockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function setstockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }

    private $chargement = 0;
    public function getchargement(): int
    {
        return $this->chargement;
    }

    public function setchargement(int $chargement): void
    {
        $this->chargement = $chargement;
    }

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->stockCapacity = $stockCapacity;
    }
    public function is_full(): string
    {
        if ($this->chargement === $this->stockCapacity){
            return "Full!";
        }
        else {
            return "in filling";
        }
    }
}
