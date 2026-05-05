<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanyProfileTemplateSeeder extends Seeder
{
    public function run(): void
    {
        $templates = [
            [
                'id' => (string) Str::uuid(),
                'name' => 'Modern Tech Company Profile',
                'thumbnail_url' => null,
                'project_data' => json_encode([
                    'components' => [
                        // Hero Section
                        [
                            'type' => 'container',
                            'components' => [
                                [
                                    'type' => 'text',
                                    'content' => 'Innovate. Transform. Succeed.',
                                    'style' => [
                                        'font-size' => '3.5rem',
                                        'font-weight' => '800',
                                        'color' => '#ffffff',
                                        'text-align' => 'center',
                                        'margin-bottom' => '1.5rem',
                                        'line-height' => '1.2',
                                        'letter-spacing' => '-0.02em',
                                    ],
                                ],
                                [
                                    'type' => 'text',
                                    'content' => 'We build cutting-edge digital solutions that drive business growth and innovation',
                                    'style' => [
                                        'font-size' => '1.25rem',
                                        'color' => '#e2e8f0',
                                        'text-align' => 'center',
                                        'margin-bottom' => '2.5rem',
                                        'max-width' => '700px',
                                        'margin-left' => 'auto',
                                        'margin-right' => 'auto',
                                        'line-height' => '1.6',
                                    ],
                                ],
                                [
                                    'type' => 'button',
                                    'content' => 'Get Started',
                                    'style' => [
                                        'background' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                                        'color' => '#ffffff',
                                        'padding' => '1rem 2.5rem',
                                        'border' => 'none',
                                        'border-radius' => '50px',
                                        'font-size' => '1.1rem',
                                        'font-weight' => '600',
                                        'cursor' => 'pointer',
                                        'box-shadow' => '0 10px 30px rgba(102, 126, 234, 0.4)',
                                    ],
                                ],
                            ],
                            'style' => [
                                'background' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                                'padding' => '8rem 2rem',
                                'display' => 'flex',
                                'flex-direction' => 'column',
                                'align-items' => 'center',
                                'justify-content' => 'center',
                                'min-height' => '100vh',
                            ],
                        ],
                        // About Section
                        [
                            'type' => 'container',
                            'components' => [
                                [
                                    'type' => 'text',
                                    'content' => 'About Us',
                                    'style' => [
                                        'font-size' => '2.5rem',
                                        'font-weight' => '700',
                                        'color' => '#1e293b',
                                        'text-align' => 'center',
                                        'margin-bottom' => '1rem',
                                    ],
                                ],
                                [
                                    'type' => 'text',
                                    'content' => 'Leading the Digital Transformation',
                                    'style' => [
                                        'font-size' => '1.1rem',
                                        'color' => '#64748b',
                                        'text-align' => 'center',
                                        'margin-bottom' => '3rem',
                                        'max-width' => '800px',
                                        'margin-left' => 'auto',
                                        'margin-right' => 'auto',
                                        'line-height' => '1.8',
                                    ],
                                ],
                                [
                                    'type' => 'container',
                                    'components' => [
                                        [
                                            'type' => 'container',
                                            'components' => [
                                                ['type' => 'text', 'content' => 'Innovation First', 'style' => ['font-size' => '1.5rem', 'font-weight' => '600', 'color' => '#1e293b', 'margin-bottom' => '0.5rem']],
                                                ['type' => 'text', 'content' => 'We leverage cutting-edge technologies to create innovative solutions', 'style' => ['font-size' => '1rem', 'color' => '#64748b', 'line-height' => '1.6']],
                                            ],
                                            'style' => ['background' => '#ffffff', 'padding' => '2.5rem', 'border-radius' => '20px', 'box-shadow' => '0 10px 40px rgba(0,0,0,0.08)', 'text-align' => 'center'],
                                        ],
                                        [
                                            'type' => 'container',
                                            'components' => [
                                                ['type' => 'text', 'content' => 'Client-Centric', 'style' => ['font-size' => '1.5rem', 'font-weight' => '600', 'color' => '#1e293b', 'margin-bottom' => '0.5rem']],
                                                ['type' => 'text', 'content' => 'Your success is our priority. We build solutions tailored to your needs', 'style' => ['font-size' => '1rem', 'color' => '#64748b', 'line-height' => '1.6']],
                                            ],
                                            'style' => ['background' => '#ffffff', 'padding' => '2.5rem', 'border-radius' => '20px', 'box-shadow' => '0 10px 40px rgba(0,0,0,0.08)', 'text-align' => 'center'],
                                        ],
                                        [
                                            'type' => 'container',
                                            'components' => [
                                                ['type' => 'text', 'content' => 'Fast Delivery', 'style' => ['font-size' => '1.5rem', 'font-weight' => '600', 'color' => '#1e293b', 'margin-bottom' => '0.5rem']],
                                                ['type' => 'text', 'content' => 'Agile methodology ensures rapid development and deployment', 'style' => ['font-size' => '1rem', 'color' => '#64748b', 'line-height' => '1.6']],
                                            ],
                                            'style' => ['background' => '#ffffff', 'padding' => '2.5rem', 'border-radius' => '20px', 'box-shadow' => '0 10px 40px rgba(0,0,0,0.08)', 'text-align' => 'center'],
                                        ],
                                    ],
                                    'style' => ['display' => 'grid', 'grid-template-columns' => 'repeat(auto-fit, minmax(300px, 1fr))', 'gap' => '2rem', 'max-width' => '1200px', 'margin' => '0 auto'],
                                ],
                            ],
                            'style' => ['padding' => '6rem 2rem', 'background' => '#f8fafc'],
                        ],
                        // Services Section
                        [
                            'type' => 'container',
                            'components' => [
                                [
                                    'type' => 'text',
                                    'content' => 'Our Services',
                                    'style' => ['font-size' => '2.5rem', 'font-weight' => '700', 'color' => '#1e293b', 'text-align' => 'center', 'margin-bottom' => '1rem'],
                                ],
                                [
                                    'type' => 'text',
                                    'content' => 'Comprehensive solutions for your digital needs',
                                    'style' => ['font-size' => '1.1rem', 'color' => '#64748b', 'text-align' => 'center', 'margin-bottom' => '4rem'],
                                ],
                                [
                                    'type' => 'container',
                                    'components' => [
                                        [
                                            'type' => 'container',
                                            'components' => [
                                                ['type' => 'text', 'content' => 'Web Development', 'style' => ['font-size' => '1.5rem', 'font-weight' => '600', 'color' => '#ffffff', 'margin-bottom' => '1rem']],
                                                ['type' => 'text', 'content' => 'Modern, responsive websites built with the latest technologies', 'style' => ['font-size' => '1rem', 'color' => '#e2e8f0', 'line-height' => '1.6']],
                                            ],
                                            'style' => ['background' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)', 'padding' => '3rem 2rem', 'border-radius' => '20px', 'text-align' => 'center', 'box-shadow' => '0 20px 60px rgba(102,126,234,0.3)'],
                                        ],
                                        [
                                            'type' => 'container',
                                            'components' => [
                                                ['type' => 'text', 'content' => 'Mobile Apps', 'style' => ['font-size' => '1.5rem', 'font-weight' => '600', 'color' => '#ffffff', 'margin-bottom' => '1rem']],
                                                ['type' => 'text', 'content' => 'Native and cross-platform mobile applications for iOS and Android', 'style' => ['font-size' => '1rem', 'color' => '#e2e8f0', 'line-height' => '1.6']],
                                            ],
                                            'style' => ['background' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)', 'padding' => '3rem 2rem', 'border-radius' => '20px', 'text-align' => 'center', 'box-shadow' => '0 20px 60px rgba(240,147,251,0.3)'],
                                        ],
                                        [
                                            'type' => 'container',
                                            'components' => [
                                                ['type' => 'text', 'content' => 'Cloud Solutions', 'style' => ['font-size' => '1.5rem', 'font-weight' => '600', 'color' => '#ffffff', 'margin-bottom' => '1rem']],
                                                ['type' => 'text', 'content' => 'Scalable cloud infrastructure and migration services', 'style' => ['font-size' => '1rem', 'color' => '#e2e8f0', 'line-height' => '1.6']],
                                            ],
                                            'style' => ['background' => 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)', 'padding' => '3rem 2rem', 'border-radius' => '20px', 'text-align' => 'center', 'box-shadow' => '0 20px 60px rgba(79,172,254,0.3)'],
                                        ],
                                        [
                                            'type' => 'container',
                                            'components' => [
                                                ['type' => 'text', 'content' => 'UI/UX Design', 'style' => ['font-size' => '1.5rem', 'font-weight' => '600', 'color' => '#ffffff', 'margin-bottom' => '1rem']],
                                                ['type' => 'text', 'content' => 'Beautiful, intuitive interfaces that users love', 'style' => ['font-size' => '1rem', 'color' => '#e2e8f0', 'line-height' => '1.6']],
                                            ],
                                            'style' => ['background' => 'linear-gradient(135deg, #fa709a 0%, #fee140 100%)', 'padding' => '3rem 2rem', 'border-radius' => '20px', 'text-align' => 'center', 'box-shadow' => '0 20px 60px rgba(250,112,154,0.3)'],
                                        ],
                                    ],
                                    'style' => ['display' => 'grid', 'grid-template-columns' => 'repeat(auto-fit, minmax(280px, 1fr))', 'gap' => '2rem', 'max-width' => '1200px', 'margin' => '0 auto'],
                                ],
                            ],
                            'style' => ['padding' => '6rem 2rem', 'background' => '#ffffff'],
                        ],
                        // Stats Section
                        [
                            'type' => 'container',
                            'components' => [
                                ['type' => 'container', 'components' => [['type' => 'text', 'content' => '500+', 'style' => ['font-size' => '3rem', 'font-weight' => '800', 'color' => '#ffffff', 'margin-bottom' => '0.5rem']], ['type' => 'text', 'content' => 'Projects Completed', 'style' => ['font-size' => '1.1rem', 'color' => '#e2e8f0']]], 'style' => ['text-align' => 'center']],
                                ['type' => 'container', 'components' => [['type' => 'text', 'content' => '200+', 'style' => ['font-size' => '3rem', 'font-weight' => '800', 'color' => '#ffffff', 'margin-bottom' => '0.5rem']], ['type' => 'text', 'content' => 'Happy Clients', 'style' => ['font-size' => '1.1rem', 'color' => '#e2e8f0']]], 'style' => ['text-align' => 'center']],
                                ['type' => 'container', 'components' => [['type' => 'text', 'content' => '50+', 'style' => ['font-size' => '3rem', 'font-weight' => '800', 'color' => '#ffffff', 'margin-bottom' => '0.5rem']], ['type' => 'text', 'content' => 'Team Members', 'style' => ['font-size' => '1.1rem', 'color' => '#e2e8f0']]], 'style' => ['text-align' => 'center']],
                                ['type' => 'container', 'components' => [['type' => 'text', 'content' => '10+', 'style' => ['font-size' => '3rem', 'font-weight' => '800', 'color' => '#ffffff', 'margin-bottom' => '0.5rem']], ['type' => 'text', 'content' => 'Years Experience', 'style' => ['font-size' => '1.1rem', 'color' => '#e2e8f0']]], 'style' => ['text-align' => 'center']],
                            ],
                            'style' => ['background' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)', 'padding' => '5rem 2rem', 'display' => 'grid', 'grid-template-columns' => 'repeat(auto-fit, minmax(200px, 1fr))', 'gap' => '3rem'],
                        ],
                        // Contact Section
                        [
                            'type' => 'container',
                            'components' => [
                                ['type' => 'text', 'content' => 'Get In Touch', 'style' => ['font-size' => '2.5rem', 'font-weight' => '700', 'color' => '#1e293b', 'text-align' => 'center', 'margin-bottom' => '1rem']],
                                ['type' => 'text', 'content' => 'Ready to start your next project? Let\'s talk!', 'style' => ['font-size' => '1.1rem', 'color' => '#64748b', 'text-align' => 'center', 'margin-bottom' => '3rem']],
                                [
                                    'type' => 'container',
                                    'components' => [
                                        ['type' => 'text', 'content' => 'contact@company.com', 'style' => ['font-size' => '1.1rem', 'color' => '#1e293b', 'margin-bottom' => '1rem']],
                                        ['type' => 'text', 'content' => '+1 (555) 123-4567', 'style' => ['font-size' => '1.1rem', 'color' => '#1e293b', 'margin-bottom' => '1rem']],
                                        ['type' => 'text', 'content' => '123 Tech Street, Silicon Valley, CA', 'style' => ['font-size' => '1.1rem', 'color' => '#1e293b', 'margin-bottom' => '2rem']],
                                        ['type' => 'button', 'content' => 'Contact Us', 'style' => ['background' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)', 'color' => '#ffffff', 'padding' => '1rem 3rem', 'border' => 'none', 'border-radius' => '50px', 'font-size' => '1.1rem', 'font-weight' => '600', 'cursor' => 'pointer', 'box-shadow' => '0 10px 30px rgba(102,126,234,0.4)']],
                                    ],
                                    'style' => ['max-width' => '600px', 'margin' => '0 auto', 'text-align' => 'center', 'background' => '#ffffff', 'padding' => '3rem', 'border-radius' => '20px', 'box-shadow' => '0 20px 60px rgba(0,0,0,0.1)'],
                                ],
                            ],
                            'style' => ['padding' => '6rem 2rem', 'background' => '#f8fafc'],
                        ],
                        // Footer
                        [
                            'type' => 'container',
                            'components' => [
                                ['type' => 'text', 'content' => '2026 Your Company. All rights reserved.', 'style' => ['font-size' => '0.95rem', 'color' => '#94a3b8', 'text-align' => 'center']],
                            ],
                            'style' => ['background' => '#1e293b', 'padding' => '2rem', 'text-align' => 'center'],
                        ],
                    ],
                    'styles' => [
                        'body' => [
                            'margin' => '0',
                            'padding' => '0',
                            'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif',
                            'scroll-behavior' => 'smooth',
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
    }
}