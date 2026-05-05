<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'id' => (string) Str::uuid(),
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $templates = [
            // Plain Template
            [
                'id' => (string) Str::uuid(),
                'name' => 'Plain Template',
                'thumbnail_url' => null,
                'project_data' => json_encode([
                    'components' => [
                        [
                            'type' => 'text',
                            'content' => 'Welcome to My Website',
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
        ];

        DB::table('templates')->insert($templates);

        // Seed the enhanced Modern Tech Company Profile template
        $this->call(CompanyProfileTemplateSeeder::class);
        $this->call(CompanyProfile2TemplateSeeder::class);
    }
}
