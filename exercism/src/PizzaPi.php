<?php

class PizzaPi
{
    public function calculateDoughRequirement($number_of_pizzas, $people_per_pizza): float|int
    {
        // grams = pizzas * ((persons * 20) + 200)
        return $number_of_pizzas * (($people_per_pizza * 20) + 200);
    }

    public function calculateSauceRequirement($number_of_pizzas, $sauce_can_volume): float|int
    {
        // cans of sauce = pizzas * sauce per pizza / sauce can volume
        $sauce_per_pizza = 125;
        return $number_of_pizzas * $sauce_per_pizza / $sauce_can_volume;
    }

    // Force int return type here, tests did not like the digits after the decimal point. Does no rounding, just drops
    // everything after the decimal point. Alternative is to floor it.
    public function calculateCheeseCubeCoverage($cheese_cube_dimension, $desired_cheese_thickness, $pizza_diameter): int
    {
        /*
         * many pizzas of some diameter (diameter)
         * can be made from a cheese cube of some side-length (cheese_dimension)
         * pizzas = (cheese_dimension³) / (thickness * PI * diameter)
         */
        return $cheese_cube_dimension ** 3 / ($desired_cheese_thickness * pi() * $pizza_diameter);
    }

    public function calculateLeftOverSlices($number_of_pizzas, $number_of_friends): int
    {
        $slices = $number_of_pizzas * 8;
        return $slices % $number_of_friends;
    }
}
