<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Certificate of Completion',
            ],
            [
                'camp_id' => 1,
                'name' => 'Access to Techstack Community',
            ],
            [
                'camp_id' => 1,
                'name' => '1 on 1 Mentorship',
            ],
            [
                'camp_id' => 1,
                'name' => 'Job Placement Assistance',
            ],
            [
                'camp_id' => 1,
                'name' => 'Lifetime Access to Course Material',
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder',
            ],

            [
                'camp_id' => 2,
                'name' => '1 on 1 Mentorship',
            ],
            [
                'camp_id' => 2,
                'name' => 'Certificate of Completion',
            ],
            [
                'camp_id' => 2,
                'name' => 'Job Placement Assistance',
            ],
            [
                'camp_id' => 2,
                'name' => 'Lifetime Access to Course Material',
            ]
        ];

        foreach ($campBenefits as $key => $campBenefit) {
            CampBenefit::create($campBenefit);
        }
    }
}
