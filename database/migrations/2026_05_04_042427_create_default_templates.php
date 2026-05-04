<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Insert default template
        DB::table('templates')->insert([
            'id' => Str::uuid()->toString(),
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
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('templates')->where('name', 'Plain Template')->delete();
    }
};
