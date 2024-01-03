<?php

namespace Database\Seeders;

use App\Models\ProductBrand;
use App\Models\ProductModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'id' => 1,
                'title' => 'Suzuki',
                'status' => 1,
                'created_by' => 1,
                'models' => [
                    [
                        'id' => 1,
                        'product_brand_id' => 1,
                        'title' => 'Suzuki Gixxer SF',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                    [
                        'id' => 2,
                        'product_brand_id' => 1,
                        'title' => 'Suzuki Access 125',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                ]
            ],
            [
                'id' => 2,
                'title' => 'Harley Davidson',
                'status' => 1,
                'created_by' => 1,
                'models' => [
                    [
                        'id' => 3,
                        'product_brand_id' => 2,
                        'title' => 'Harley-Davidson Nightster',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                    [
                        'id' => 4,
                        'product_brand_id' => 2,
                        'title' => 'Harley-Davidson Sportster S',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                ]

            ],
            [
                'id' => 3,
                'title' => 'Yamaha',
                'status' => 1,
                'created_by' => 1,
                'models' => [
                    [
                        'id' => 5,
                        'product_brand_id' => 3,
                        'title' => 'Yamaha MT 15 V2',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                    [
                        'id' => 6,
                        'product_brand_id' => 3,
                        'title' => 'Yamaha FZ S FI',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                ]

            ],
            [
                'id' => 4,
                'title' => 'Baja',
                'status' => 1,
                'created_by' => 1,
                'models' => [
                    [
                        'id' => 7,
                        'product_brand_id' => 4,
                        'title' => 'Bajaj Pulsar 125',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                    [
                        'id' => 8,
                        'product_brand_id' => 4,
                        'title' => 'Bajaj Pulsar 150',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                ]

            ],
            [
                'id' => 5,
                'title' => 'Honda',
                'status' => 1,
                'created_by' => 1,
                'models' => [
                    [
                        'id' => 9,
                        'product_brand_id' => 5,
                        'title' => 'Honda Activa 6G',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                    [
                        'id' => 10,
                        'product_brand_id' => 5,
                        'title' => 'Honda SP 125',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                ]

            ],
            [
                'id' => 6,
                'title' => 'Hero',
                'status' => 1,
                'created_by' => 1,
                'models' => [
                    [
                        'id' => 11,
                        'product_brand_id' => 6,
                        'title' => 'Hero Splender Plus',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                    [
                        'id' => 12,
                        'product_brand_id' => 6,
                        'title' => 'Hero HF Deluxe',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                ]

            ],
            [
                'id' => 7,
                'title' => 'TVS',
                'status' => 1,
                'created_by' => 1,
                'models' => [
                    [
                        'id' => 13,
                        'product_brand_id' => 7,
                        'title' => 'TVS Raider 125',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                    [
                        'id' => 14,
                        'product_brand_id' => 7,
                        'title' => 'TVS Apache RTR 160',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                ]

            ],
            [
                'id' => 8,
                'title' => 'Jawa',
                'status' => 1,
                'created_by' => 1,
                'models' => [
                    [
                        'id' => 15,
                        'product_brand_id' => 8,
                        'title' => 'Jawa 42',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                    [
                        'id' => 16,
                        'product_brand_id' => 8,
                        'title' => 'Jawa 42 Bobber',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                ]

            ],
            [
                'id' => 9,
                'title' => 'KTM',
                'status' => 1,
                'created_by' => 1,
                'models' => [
                    [
                        'id' => 17,
                        'product_brand_id' => 9,
                        'title' => 'KTM 200 Duke',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                    [
                        'id' => 18,
                        'product_brand_id' => 9,
                        'title' => 'KTM 390 Duke',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                ]

            ],
            [
                'id' => 10,
                'title' => 'Royal Enfield',
                'status' => 1,
                'created_by' => 1,
                'models' => [
                    [
                        'id' => 19,
                        'product_brand_id' => 10,
                        'title' => 'Royal Enfield Hunter 350',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                    [
                        'id' => 20,
                        'product_brand_id' => 10,
                        'title' => 'Royal Enfield Classic 350',
                        'status' => 1,
                        'created_by' => 1,
                    ],
                ]

            ]
        ];

        foreach ($brands as $brand) {
            ProductBrand::updateOrCreate(['id' => $brand['id']], [
                'id' => $brand['id'],
                'title' => $brand['title'],
                'status' => $brand['status'],
                'created_by' => $brand['created_by'],
            ]);
            foreach ($brand['models'] as $model) {
                // dd($model);
                ProductModel::updateOrCreate(['id' => $model['id']], $model);
            }
        }
    }
}
