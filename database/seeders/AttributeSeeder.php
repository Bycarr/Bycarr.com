<?php

namespace Database\Seeders;

use App\Models\Attribute as ModelsAttribute;
use Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes  = [
            [
                'id' => 1,
                'title' => 'Make Year',
                'type' => 'text',
                'show_in_filter' => 1,
                'options' => [],
                'created_by' => 1
            ],
            [
                'id' => 2,
                'title' => 'Registration Year',
                'type' => 'text',
                'show_in_filter' => 0,
                'options' => [],
                'created_by' => 1

            ],
            [
                'id' => 3,
                'title' => 'Fuel Type',
                'type' => 'select',
                'show_in_filter' => 0,
                'options' => ['Petrol', 'Diesel'],
                'created_by' => 1

            ],
            [
                'id' => 4,
                'title' => 'KM Driven',
                'type' => 'text',
                'show_in_filter' => 0,
                'options' => [],
                'created_by' => 1

            ],
            [
                'id' => 5,
                'title' => 'Transmission',
                'type' => 'text',
                'show_in_filter' => 0,
                'options' => [],
                'created_by' => 1

            ],
            [
                'id' => 6,
                'title' => 'No. of Owner',
                'type' => 'text',
                'show_in_filter' => 0,
                'options' => [],
                'created_by' => 1

            ],
            [
                'id' => 7,
                'title' => 'Warranty',
                'type' => 'text',
                'show_in_filter' => 0,
                'options' => [],
                'created_by' => 1

            ],
            [
                'id' => 8,
                'title' => 'Colour',
                'type' => 'text',
                'show_in_filter' => 1,
                'options' => [],
                'created_by' => 1

            ],
            [
                'id' => 9,
                'title' => 'Engine(CC)',
                'type' => 'text',
                'show_in_filter' => 0,
                'options' => [],
                'created_by' => 1

            ],
            [
                'id' => 10,
                'title' => 'Lot No.',
                'type' => 'text',
                'show_in_filter' => 0,
                'options' => [],
                'created_by' => 1

            ],
            [
                'id' => 11,
                'title' => 'Mileage',
                'type' => 'text',
                'show_in_filter' => 0,
                'options' => [],
                'created_by' => 1

            ],

        ];
        foreach ($attributes as $attr) {
            ModelsAttribute::updateOrCreate(['id' => $attr['id']], [
                'id' => $attr['id'],
                'title' => $attr['title'],
                'type' => $attr['type'],
                'show_in_filter' => $attr['show_in_filter'],
                'created_by' => $attr['created_by'],
                'options' => json_encode($attr['options']),
            ]);
        }
    }
}
