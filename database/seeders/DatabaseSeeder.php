<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $templates = [
            [
                'id' => (string) Str::uuid(),
                'name' => 'Plain Template',
                'thumbnail_url' => null,
                'project_data' => json_encode([
                    'components' => [
                        [
                            'type' => 'text',
                            'content' => 'Welcome to WIT.SBY',
                            'style' => [
                                'font-size' => '2rem',
                                'font-weight' => 'bold',
                                'color' => '#1e293b',
                                'text-align' => 'center',
                                'padding' => '2rem',
                            ],
                        ],
                        [
                            'type' => 'container',
                            'components' => [
                                [
                                    'type' => 'text',
                                    'content' => 'Your content here...',
                                    'style' => [
                                        'font-size' => '1rem',
                                        'color' => '#64748b',
                                        'padding' => '2rem',
                                    ],
                                ],
                            ],
                            'style' => [
                                'display' => 'flex',
                                'flex-direction' => 'column',
                                'align-items' => 'center',
                            ],
                        ],
                    ],
                    'styles' => [
                        'body' => [
                            'margin' => '0',
                            'padding' => '0',
                            'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif',
                        ],
                    ],
                    'canvas' => [
                        'width' => '100%',
                        'min-height' => '100vh',
                    ],
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Landing Page Hero',
                'thumbnail_url' => null,
                'project_data' => json_encode([
                    'components' => [
                        [
                            'type' => 'section',
                            'style' => [
                                'background' => 'linear-gradient(135deg, #dc2626 0%, #991b1b 100%)',
                                'color' => 'white',
                                'padding' => '6rem 2rem',
                                'text-align' => 'center',
                            ],
                            'components' => [
                                [
                                    'type' => 'text',
                                    'content' => 'Build Your Website Fast',
                                    'style' => [
                                        'font-size' => '3rem',
                                        'font-weight' => 'bold',
                                        'margin-bottom' => '1rem',
                                    ],
                                ],
                                [
                                    'type' => 'text',
                                    'content' => 'Create stunning websites with our drag-and-drop editor',
                                    'style' => [
                                        'font-size' => '1.25rem',
                                        'opacity' => '0.9',
                                        'margin-bottom' => '2rem',
                                    ],
                                ],
                                [
                                    'type' => 'button',
                                    'content' => 'Get Started',
                                    'style' => [
                                        'background' => 'white',
                                        'color' => '#dc2626',
                                        'padding' => '1rem 2rem',
                                        'border-radius' => '0.5rem',
                                        'font-weight' => 'bold',
                                        'cursor' => 'pointer',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'styles' => [
                        'body' => [
                            'margin' => '0',
                            'padding' => '0',
                            'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif',
                        ],
                    ],
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('templates')->insert($templates);
    }
}
