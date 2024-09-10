<?php

namespace src\Product;

use Override;

class ServiceProduct extends AbstractProduct
{
    private float $hourlyRate;
    private int $hour;

    /**
     * @param $name
     * @param $hourlyRate
     * @param $hour
     */
    public function __construct($name, $hourlyRate, $hour)
    {
        parent::__construct($name, $hourlyRate, $hour);
        $this->hour = $hour;
        $this->hourlyRate = $hourlyRate;
    }

    /**
     * @return float
     */
    public function getHourlyRate(): float
    {
        return $this->hourlyRate;
    }

    /**
     * @param float $hourlyRate
     * @return void
     */
    public function setHourlyRate(float $hourlyRate): void
    {
        $this->hourlyRate = $hourlyRate;
    }

    /**
     * @return int
     */
    public function getHour(): int
    {
        return $this->hour;
    }

    /**
     * @param int $hour
     * @return void
     */
    public function setHour(int $hour): void
    {
        $this->hour = $hour;
    }

    /**
     * @return float
     */
    #[Override] public function calculateTotalPrice(): float
    {
        $total = $this->hourlyRate * $this->getQuantity();
        if ($this->getQuantity() > 8) {
            $total *= 1.1;
        }
        return $total;
    }

    /**
     * @return string
     */
    #[Override] public function getDetails(): string
    {
        return "Product Name : " . $this->getName() . "\n" .
            "Hourly Rate : " . $this->getHourlyRate() . "\n" .
            "Hour : " . $this->getQuantity() . "\n" .
            "Total Price : " . $this->calculateTotalPrice() . "\n";
    }
}