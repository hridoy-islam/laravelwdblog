<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt(1234),
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'addressline1' => $this->faker->streetAddress(),
            'addressline2' => $this->faker->secondaryAddress(),
            'state' => $this->faker->state(),
            'country' => $this->faker->country(),
            'postalcode' => $this->faker->postcode(),
            'thumbnail' => $this->faker->imageUrl($width = 200, $height = 200),
            'billingaddress' => $this->faker->address(),
            'shippingaddress' => $this->faker->address(),
        ];
    }
}
