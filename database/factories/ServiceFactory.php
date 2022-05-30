<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $service_name =$this ->faker ->unique()->words($nb=4,$astext=true);
        $slug=str::slug($service_name,"-");
        $imagename ='service_'.$this->faker->unique()->numberBetween(1,200). '.jpg';
        return [
           'name' =>$service_name,
           'slug' => $slug ,
           'tagline' => $this -> faker->text(20),
            'service_category_id'=> $this->faker->numberBetween(1,20),
           'price' => $this ->faker->numberBetween(100,500),
           'image'=>$imagename,
           'thumbnail' => $imagename,
           'description' => $this ->faker->text(500),
           'inclusion' => $this->faker->text(20).'|'. $this->faker->text(20).'|' .$this->faker->text(20).'|'. $this->faker->text(20),
           'exclusion' => $this->faker->text(20) . '|' . $this->faker->text(20) . '|' . $this->faker->text(20) . '|' . $this->faker->text(20),




        ];
    }
}