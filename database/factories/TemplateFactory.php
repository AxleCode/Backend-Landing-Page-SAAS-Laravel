<?php

namespace Database\Factories;

use App\Models\Template;
use Illuminate\Database\Eloquent\Factories\Factory;

class TemplateFactory extends Factory
{
    protected $model = Template::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'thumbnail_url' => $this->faker->imageUrl(600, 400),
            'project_data' => [
                'pages' => [
                    [
                        'name' => 'Home',
                        'component' => '<h1>' . $this->faker->sentence . '</h1>',
                        'style' => 'body { color: #333; }',
                    ],
                ],
            ],
        ];
    }
}
