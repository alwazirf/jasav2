<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'user_id' => 1,
            'member_no' => 20151216,
            'place_of_born' => 'Lhokseumawe',
            'gender' => 'Pria',
            'date_of_born' => $this->faker->date(),
            'district_id' => 1,
            'address' => $this->faker->address(),
            'number_child' => 2,
            'number_of_sibling' => 4,
            'status' => 'Kawin',
            'last_education' => 'SMP',
            'jobs' => 'Mocok-mocok',
            'skill' => 'Marketing',
            'phone' => '08228367213',
            'email' => $this->faker->unique()->safeEmail(),
            'facebook' => 'facebook.com',
            'instagram' => 'instagram.com',
            'father_name' => $this->faker->name(),
            'father_enc' => $this->faker->name(),
            'father_address' => $this->faker->address(),
            'father_place_of_born' => 'Lhokseumawe',
            'father_date_of_born' => $this->faker->date(),
            'father_place_of_death' => 'Lhokseumawe',
            'father_date_of_death' => $this->faker->date(),
            'mother_name' => $this->faker->name(),
            'mother_address' => $this->faker->address(),
            'mother_place_of_born' => 'Lhokseumawe',
            'mother_date_of_born' => $this->faker->date(),
        ];
    }
}
