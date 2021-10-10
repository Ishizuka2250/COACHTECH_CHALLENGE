<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->email(),
            'postcode' => substr('00' . $this->faker->numberBetween(1,999), -3, 3) . '-' .
                            substr('000' . $this->faker->numberBetween(1,999), -4, 4),
            'address' => $this->faker->streetName(),
            'building_name' => $this->faker->city() . $this->faker->buildingNumber(),
            'opinion' => $this->faker->realText(120)
        ];
    }
}
