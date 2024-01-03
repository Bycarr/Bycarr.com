<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Locality;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localstates = [
            [
                "id" =>  1,
                "name" =>  "Koshi Province",
                "area_sq_km" =>  "25906",
                "website" =>  "https:\/\/koshi.gov.np\/",
                "headquarter" =>  "Biratnagar",
                "districts" =>  [
                    [
                        "id" =>  1,
                        "province_id" =>  1,
                        "name" =>  "Bhojpur",
                        "area_sq_km" =>  "1507",
                        "website" =>  "https:\/\/www.ddcbhojpur.gov.np",
                        "headquarter" =>  "Bhojpur",
                        "municipalities" =>  [
                            [
                                "id" =>  1,
                                "district_id" =>  1,
                                "category_id" =>  3,
                                "name" =>  "Shadanand Municipality",
                                "area_sq_km" =>  "241.15",
                                "website" =>  "http:\/\/www.shadanandamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            [
                                "id" =>  2,
                                "district_id" =>  1,
                                "category_id" =>  3,
                                "name" =>  "Bhojpur Municipality",
                                "area_sq_km" =>  "159.51",
                                "website" =>  "http:\/\/www.bhojpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            [
                                "id" =>  3,
                                "district_id" =>  1,
                                "category_id" =>  4,
                                "name" =>  "Hatuwagadhi Rural Municipality",
                                "area_sq_km" =>  "142.61",
                                "website" =>  "http:\/\/www.hatuwagadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            [
                                "id" =>  4,
                                "district_id" =>  1,
                                "category_id" =>  4,
                                "name" =>  "Ramprasad Rai Rural Municipality",
                                "area_sq_km" =>  "158.83",
                                "website" =>  "http:\/\/www.ramprasadraimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            [
                                "id" =>  5,
                                "district_id" =>  1,
                                "category_id" =>  4,
                                "name" =>  "Aamchok Rural Municipality",
                                "area_sq_km" =>  "184.89",
                                "website" =>  "http:\/\/www.aamchowkmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            [
                                "id" =>  6,
                                "district_id" =>  1,
                                "category_id" =>  4,
                                "name" =>  "Tyamke Maiyum Rural Municipality",
                                "area_sq_km" =>  "173.41",
                                "website" =>  "http:\/\/www.tyamkemaiyummun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            [
                                "id" =>  7,
                                "district_id" =>  1,
                                "category_id" =>  4,
                                "name" =>  "Arun Rural Municipality",
                                "area_sq_km" =>  "154.76",
                                "website" =>  "http:\/\/www.arunmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            [
                                "id" =>  8,
                                "district_id" =>  1,
                                "category_id" =>  4,
                                "name" =>  "Pauwadungma Rural Municipality",
                                "area_sq_km" =>  "118.86",
                                "website" =>  "http:\/\/www.pauwadungmamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            [
                                "id" =>  9,
                                "district_id" =>  1,
                                "category_id" =>  4,
                                "name" =>  "Salpasilichho Rural Municipality",
                                "area_sq_km" =>  "193.33",
                                "website" =>  "http:\/\/www.salpasilichhomun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  2,
                        "province_id" =>  1,
                        "name" =>  "Dhankuta",
                        "area_sq_km" =>  "892",
                        "website" =>  "https:\/\/www.ddcdhankuta.gov.np",
                        "headquarter" =>  "Dhankuta",
                        "municipalities" =>  [
                            "9" =>  [
                                "id" =>  10,
                                "district_id" =>  2,
                                "category_id" =>  3,
                                "name" =>  "Dhankuta Municipality",
                                "area_sq_km" =>  "111",
                                "website" =>  "http:\/\/www.dhankutamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "10" =>  [
                                "id" =>  11,
                                "district_id" =>  2,
                                "category_id" =>  3,
                                "name" =>  "Pakhribas Municipality",
                                "area_sq_km" =>  "144.29",
                                "website" =>  "https:\/\/pakhribasmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "11" =>  [
                                "id" =>  12,
                                "district_id" =>  2,
                                "category_id" =>  3,
                                "name" =>  "Mahalaxmi Municipality",
                                "area_sq_km" =>  "129.39",
                                "website" =>  "https:\/\/mahalaxmimundhankuta.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "12" =>  [
                                "id" =>  13,
                                "district_id" =>  2,
                                "category_id" =>  4,
                                "name" =>  "Sangurigadhi Rural Municipality",
                                "area_sq_km" =>  "166.44",
                                "website" =>  "https:\/\/sangurigadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "13" =>  [
                                "id" =>  14,
                                "district_id" =>  2,
                                "category_id" =>  4,
                                "name" =>  "Chaubise Rural Municipality",
                                "area_sq_km" =>  "147.6",
                                "website" =>  "https:\/\/choubisemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "14" =>  [
                                "id" =>  15,
                                "district_id" =>  2,
                                "category_id" =>  4,
                                "name" =>  "Sahidbhumi Rural Municipality",
                                "area_sq_km" =>  "99.55",
                                "website" =>  "https:\/\/shahidbhumimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "15" =>  [
                                "id" =>  16,
                                "district_id" =>  2,
                                "category_id" =>  4,
                                "name" =>  "Chhathar Jorpati Rural Municipality",
                                "area_sq_km" =>  "102.83",
                                "website" =>  "https:\/\/chhatharjorpatimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  3,
                        "province_id" =>  1,
                        "name" =>  "Ilam",
                        "area_sq_km" =>  "1703",
                        "website" =>  "https:\/\/www.ddcilam.gov.np",
                        "headquarter" =>  "Ilam",
                        "municipalities" =>  [
                            "16" =>  [
                                "id" =>  17,
                                "district_id" =>  3,
                                "category_id" =>  3,
                                "name" =>  "Suryodaya Municipality",
                                "area_sq_km" =>  "252.52",
                                "website" =>  "http:\/\/www.suryodayamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "17" =>  [
                                "id" =>  18,
                                "district_id" =>  3,
                                "category_id" =>  3,
                                "name" =>  "Ilam Municipality",
                                "area_sq_km" =>  "173.32",
                                "website" =>  "http:\/\/www.ilammun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "18" =>  [
                                "id" =>  19,
                                "district_id" =>  3,
                                "category_id" =>  3,
                                "name" =>  "Deumai Municipality",
                                "area_sq_km" =>  "191.63",
                                "website" =>  "http:\/\/www.deumaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "19" =>  [
                                "id" =>  20,
                                "district_id" =>  3,
                                "category_id" =>  4,
                                "name" =>  "Maijogmai Rural Municipality",
                                "area_sq_km" =>  "172.41",
                                "website" =>  "http:\/\/www.maijogmaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "20" =>  [
                                "id" =>  21,
                                "district_id" =>  3,
                                "category_id" =>  4,
                                "name" =>  "Phakphokthum Rural Municipality",
                                "area_sq_km" =>  "108.79",
                                "website" =>  "\u092b\u093e\u0915\u092b\u094b\u0915\u0925\u0941\u092e",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "21" =>  [
                                "id" =>  22,
                                "district_id" =>  3,
                                "category_id" =>  3,
                                "name" =>  "Mai Municipality",
                                "area_sq_km" =>  "246.11",
                                "website" =>  "http:\/\/www.maimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "22" =>  [
                                "id" =>  23,
                                "district_id" =>  3,
                                "category_id" =>  4,
                                "name" =>  "Chulachuli Rural Municipality",
                                "area_sq_km" =>  "108.46",
                                "website" =>  "http:\/\/www.chulachulimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "23" =>  [
                                "id" =>  24,
                                "district_id" =>  3,
                                "category_id" =>  4,
                                "name" =>  "Rong Rural Municipality",
                                "area_sq_km" =>  "155.06",
                                "website" =>  "http:\/\/www.rongmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "24" =>  [
                                "id" =>  25,
                                "district_id" =>  3,
                                "category_id" =>  4,
                                "name" =>  "Mangsebung Rural Municipality",
                                "area_sq_km" =>  "142.41",
                                "website" =>  "http:\/\/www.mansebungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "25" =>  [
                                "id" =>  26,
                                "district_id" =>  3,
                                "category_id" =>  4,
                                "name" =>  "Sandakpur Rural Municipality",
                                "area_sq_km" =>  "156.01",
                                "website" =>  "http:\/\/www.sandakpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  4,
                        "province_id" =>  1,
                        "name" =>  "Jhapa",
                        "area_sq_km" =>  "1606",
                        "website" =>  "https:\/\/www.ddcjhapa.gov.np",
                        "headquarter" =>  "Bhadrapur",
                        "municipalities" =>  [
                            "26" =>  [
                                "id" =>  27,
                                "district_id" =>  4,
                                "category_id" =>  3,
                                "name" =>  "Mechinagar Municipality",
                                "area_sq_km" =>  "192.85",
                                "website" =>  "http:\/\/www.mechinagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15
                                ]
                            ],
                            "27" =>  [
                                "id" =>  28,
                                "district_id" =>  4,
                                "category_id" =>  3,
                                "name" =>  "Birtamod Municipality",
                                "area_sq_km" =>  "78.24",
                                "website" =>  "http:\/\/www.birtamodmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "28" =>  [
                                "id" =>  29,
                                "district_id" =>  4,
                                "category_id" =>  3,
                                "name" =>  "Damak Municipality",
                                "area_sq_km" =>  "70.76",
                                "website" =>  "http:\/\/www.damakmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "29" =>  [
                                "id" =>  30,
                                "district_id" =>  4,
                                "category_id" =>  3,
                                "name" =>  "Bhadrapur Municipality",
                                "area_sq_km" =>  "93.35",
                                "website" =>  "http:\/\/www.bhadrapurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "30" =>  [
                                "id" =>  31,
                                "district_id" =>  4,
                                "category_id" =>  3,
                                "name" =>  "Shivasatakshi Municipality",
                                "area_sq_km" =>  "145.87",
                                "website" =>  "http:\/\/www.shivasatakshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "31" =>  [
                                "id" =>  32,
                                "district_id" =>  4,
                                "category_id" =>  3,
                                "name" =>  "Arjundhara Municipality",
                                "area_sq_km" =>  "109.86",
                                "website" =>  "http:\/\/www.arjundharamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "32" =>  [
                                "id" =>  33,
                                "district_id" =>  4,
                                "category_id" =>  3,
                                "name" =>  "Gauradaha Municipality",
                                "area_sq_km" =>  "149.86",
                                "website" =>  "http:\/\/www.gauradahamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "33" =>  [
                                "id" =>  34,
                                "district_id" =>  4,
                                "category_id" =>  3,
                                "name" =>  "Kankai Municipality",
                                "area_sq_km" =>  "80.98",
                                "website" =>  "http:\/\/www.kankaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "34" =>  [
                                "id" =>  35,
                                "district_id" =>  4,
                                "category_id" =>  4,
                                "name" =>  "Kamal Rural Municipality",
                                "area_sq_km" =>  "104.57",
                                "website" =>  "http:\/\/www.kamalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "35" =>  [
                                "id" =>  36,
                                "district_id" =>  4,
                                "category_id" =>  4,
                                "name" =>  "Buddha Shanti Rural Municipality",
                                "area_sq_km" =>  "79.78",
                                "website" =>  "http:\/\/www.buddhashantimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "36" =>  [
                                "id" =>  37,
                                "district_id" =>  4,
                                "category_id" =>  4,
                                "name" =>  "Kachankawal Rural Municipality",
                                "area_sq_km" =>  "109.45",
                                "website" =>  "http:\/\/www.kachankawalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "37" =>  [
                                "id" =>  38,
                                "district_id" =>  4,
                                "category_id" =>  4,
                                "name" =>  "Jhapa Rural Municipality",
                                "area_sq_km" =>  "94.12",
                                "website" =>  "http:\/\/www.jhapamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "38" =>  [
                                "id" =>  39,
                                "district_id" =>  4,
                                "category_id" =>  4,
                                "name" =>  "Barhadashi Rural Municipality",
                                "area_sq_km" =>  "88.44",
                                "website" =>  "http:\/\/www.bahradashimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "39" =>  [
                                "id" =>  40,
                                "district_id" =>  4,
                                "category_id" =>  4,
                                "name" =>  "Gaurigunj Rural Municipality",
                                "area_sq_km" =>  "101.35",
                                "website" =>  "http:\/\/www.gaurigunjmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "40" =>  [
                                "id" =>  41,
                                "district_id" =>  4,
                                "category_id" =>  4,
                                "name" =>  "Haldibari Rural Municipality",
                                "area_sq_km" =>  "117.34",
                                "website" =>  "http:\/\/www.haldibarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  5,
                        "province_id" =>  1,
                        "name" =>  "Khotang",
                        "area_sq_km" =>  "1591",
                        "website" =>  "https:\/\/www.dcckhotang.gov.np",
                        "headquarter" =>  "Diktel",
                        "municipalities" =>  [
                            "41" =>  [
                                "id" =>  42,
                                "district_id" =>  5,
                                "category_id" =>  3,
                                "name" =>  "Diktel Rupakot Majhuwagadhi Municipality",
                                "area_sq_km" =>  "246.51",
                                "website" =>  "http:\/\/www.rupakotmajhuwagadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15
                                ]
                            ],
                            "42" =>  [
                                "id" =>  43,
                                "district_id" =>  5,
                                "category_id" =>  3,
                                "name" =>  "Halesi Tuwachung Municipality",
                                "area_sq_km" =>  "280.17",
                                "website" =>  "http:\/\/www.halesituwachungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "43" =>  [
                                "id" =>  44,
                                "district_id" =>  5,
                                "category_id" =>  4,
                                "name" =>  "Khotehang Rural Municipality",
                                "area_sq_km" =>  "164.09",
                                "website" =>  "http:\/\/www.khotehangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "44" =>  [
                                "id" =>  45,
                                "district_id" =>  5,
                                "category_id" =>  4,
                                "name" =>  "Diprung Chuichumma Rural Municipality",
                                "area_sq_km" =>  "136.48",
                                "website" =>  "http:\/\/www.diprungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "45" =>  [
                                "id" =>  46,
                                "district_id" =>  5,
                                "category_id" =>  4,
                                "name" =>  "Aiselukharka Rural Municipality",
                                "area_sq_km" =>  "125.93",
                                "website" =>  "http:\/\/www.aiselukharkamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "46" =>  [
                                "id" =>  47,
                                "district_id" =>  5,
                                "category_id" =>  4,
                                "name" =>  "Jantedhunga Rural Municipality",
                                "area_sq_km" =>  "128.62",
                                "website" =>  "http:\/\/www.jantedhungamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "47" =>  [
                                "id" =>  48,
                                "district_id" =>  5,
                                "category_id" =>  4,
                                "name" =>  "Kepilasgadhi Rural Municipality",
                                "area_sq_km" =>  "191.28",
                                "website" =>  "http:\/\/www.kepilasgadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "48" =>  [
                                "id" =>  49,
                                "district_id" =>  5,
                                "category_id" =>  4,
                                "name" =>  "Barahpokhari Rural Municipality",
                                "area_sq_km" =>  "141.6",
                                "website" =>  "http:\/\/www.barahapokharimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "49" =>  [
                                "id" =>  50,
                                "district_id" =>  5,
                                "category_id" =>  4,
                                "name" =>  "Rawa Besi Rural Municipality",
                                "area_sq_km" =>  "97.44",
                                "website" =>  "http:\/\/www.lamidandamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "50" =>  [
                                "id" =>  51,
                                "district_id" =>  5,
                                "category_id" =>  4,
                                "name" =>  "Sakela Rural Municipality",
                                "area_sq_km" =>  "79.99",
                                "website" =>  "http:\/\/www.sakelamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  6,
                        "province_id" =>  1,
                        "name" =>  "Morang",
                        "area_sq_km" =>  "1855",
                        "website" =>  "https:\/\/www.ddcmorang.gov.np",
                        "headquarter" =>  "Biratnagar",
                        "municipalities" =>  [
                            "51" =>  [
                                "id" =>  52,
                                "district_id" =>  6,
                                "category_id" =>  3,
                                "name" =>  "Sundar Haraicha Municipality",
                                "area_sq_km" =>  "110.16",
                                "website" =>  "http:\/\/www.sundarharaichamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "52" =>  [
                                "id" =>  53,
                                "district_id" =>  6,
                                "category_id" =>  3,
                                "name" =>  "Belbari Municipality",
                                "area_sq_km" =>  "132.79",
                                "website" =>  "http:\/\/www.belbarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "53" =>  [
                                "id" =>  54,
                                "district_id" =>  6,
                                "category_id" =>  3,
                                "name" =>  "Pathari Shanischare Municipality",
                                "area_sq_km" =>  "79.81",
                                "website" =>  "http:\/\/www.patharishanishcharemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "54" =>  [
                                "id" =>  55,
                                "district_id" =>  6,
                                "category_id" =>  3,
                                "name" =>  "Ratuwamai Municipality",
                                "area_sq_km" =>  "142.15",
                                "website" =>  "http:\/\/www.ratuwamaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "55" =>  [
                                "id" =>  56,
                                "district_id" =>  6,
                                "category_id" =>  3,
                                "name" =>  "Urlabari Municipality",
                                "area_sq_km" =>  "74.62",
                                "website" =>  "http:\/\/www.urlabarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "56" =>  [
                                "id" =>  57,
                                "district_id" =>  6,
                                "category_id" =>  3,
                                "name" =>  "Rangeli Municipality",
                                "area_sq_km" =>  "111.78",
                                "website" =>  "http:\/\/www.rangelimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "57" =>  [
                                "id" =>  58,
                                "district_id" =>  6,
                                "category_id" =>  3,
                                "name" =>  "Sunawarshi Municipality",
                                "area_sq_km" =>  "106.4",
                                "website" =>  "http:\/\/www.sunawarshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "58" =>  [
                                "id" =>  59,
                                "district_id" =>  6,
                                "category_id" =>  3,
                                "name" =>  "Letang Municipality",
                                "area_sq_km" =>  "119.23",
                                "website" =>  "http:\/\/www.letangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "59" =>  [
                                "id" =>  60,
                                "district_id" =>  6,
                                "category_id" =>  1,
                                "name" =>  "Biratnagar Metropolitan City",
                                "area_sq_km" =>  "77",
                                "website" =>  "http:\/\/www.biratnagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19
                                ]
                            ],
                            "60" =>  [
                                "id" =>  61,
                                "district_id" =>  6,
                                "category_id" =>  4,
                                "name" =>  "Jahada Rural Municipality",
                                "area_sq_km" =>  "62.38",
                                "website" =>  "http:\/\/www.jahadamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "61" =>  [
                                "id" =>  62,
                                "district_id" =>  6,
                                "category_id" =>  4,
                                "name" =>  "Budi Ganga Rural Municipality",
                                "area_sq_km" =>  "56.41",
                                "website" =>  "https:\/\/budhigangamunmorang.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "62" =>  [
                                "id" =>  63,
                                "district_id" =>  6,
                                "category_id" =>  4,
                                "name" =>  "Katahari Rural Municipality",
                                "area_sq_km" =>  "51.59",
                                "website" =>  "http:\/\/www.kataharimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "63" =>  [
                                "id" =>  64,
                                "district_id" =>  6,
                                "category_id" =>  4,
                                "name" =>  "Dhanpalthan Rural Municipality",
                                "area_sq_km" =>  "70.26",
                                "website" =>  "http:\/\/www.dhanapalthanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "64" =>  [
                                "id" =>  65,
                                "district_id" =>  6,
                                "category_id" =>  4,
                                "name" =>  "Kanepokhari Rural Municipality",
                                "area_sq_km" =>  "82.83",
                                "website" =>  "http:\/\/www.kanepokharimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "65" =>  [
                                "id" =>  66,
                                "district_id" =>  6,
                                "category_id" =>  4,
                                "name" =>  "Gramthan Rural Municipality",
                                "area_sq_km" =>  "71.84",
                                "website" =>  "http:\/\/www.gramthanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "66" =>  [
                                "id" =>  67,
                                "district_id" =>  6,
                                "category_id" =>  4,
                                "name" =>  "Kerabari Rural Municipality",
                                "area_sq_km" =>  "219.83",
                                "website" =>  "http:\/\/www.kerabarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "67" =>  [
                                "id" =>  68,
                                "district_id" =>  6,
                                "category_id" =>  4,
                                "name" =>  "Miklajung Rural Municipality",
                                "area_sq_km" =>  "157.98",
                                "website" =>  "http:\/\/www.miklajungmunmorang.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  7,
                        "province_id" =>  1,
                        "name" =>  "Okhaldhunga",
                        "area_sq_km" =>  "1074",
                        "website" =>  "https:\/\/www.dccokhaldhunga.gov.np\/en",
                        "headquarter" =>  "Siddhicharan",
                        "municipalities" =>  [
                            "68" =>  [
                                "id" =>  69,
                                "district_id" =>  7,
                                "category_id" =>  3,
                                "name" =>  "Siddhicharan Municipality",
                                "area_sq_km" =>  "167.88",
                                "website" =>  "http:\/\/www.siddhicharanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "69" =>  [
                                "id" =>  70,
                                "district_id" =>  7,
                                "category_id" =>  4,
                                "name" =>  "Khiji Demba Rural Municipality",
                                "area_sq_km" =>  "179.77",
                                "website" =>  "http:\/\/www.khijidembamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "70" =>  [
                                "id" =>  71,
                                "district_id" =>  7,
                                "category_id" =>  4,
                                "name" =>  "Chisankhugadhi Rural Municipality",
                                "area_sq_km" =>  "126.91",
                                "website" =>  "http:\/\/www.chishankhugadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "71" =>  [
                                "id" =>  72,
                                "district_id" =>  7,
                                "category_id" =>  4,
                                "name" =>  "Molung Rural Municipality",
                                "area_sq_km" =>  "112",
                                "website" =>  "http:\/\/www.molungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "72" =>  [
                                "id" =>  73,
                                "district_id" =>  7,
                                "category_id" =>  4,
                                "name" =>  "Sunkoshi Rural Municipality",
                                "area_sq_km" =>  "143.75",
                                "website" =>  "http:\/\/www.sunkoshimunokhaldhunga.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "73" =>  [
                                "id" =>  74,
                                "district_id" =>  7,
                                "category_id" =>  4,
                                "name" =>  "Champadevi Rural Municipality",
                                "area_sq_km" =>  "126.91",
                                "website" =>  "http:\/\/www.champadevimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "74" =>  [
                                "id" =>  75,
                                "district_id" =>  7,
                                "category_id" =>  4,
                                "name" =>  "Manebhanjyang Rural Municipality",
                                "area_sq_km" =>  "146.61",
                                "website" =>  "http:\/\/www.manebhanjyangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "75" =>  [
                                "id" =>  76,
                                "district_id" =>  7,
                                "category_id" =>  4,
                                "name" =>  "Likhu Rural Municipality",
                                "area_sq_km" =>  "88.03",
                                "website" =>  "https:\/\/likhumunokhaldhunga.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  8,
                        "province_id" =>  1,
                        "name" =>  "Pachthar",
                        "area_sq_km" =>  "1241",
                        "website" =>  "https:\/\/www.ddcpanchthar.gov.np",
                        "headquarter" =>  "Phidim",
                        "municipalities" =>  [
                            "76" =>  [
                                "id" =>  77,
                                "district_id" =>  8,
                                "category_id" =>  3,
                                "name" =>  "Phidim Municipality",
                                "area_sq_km" =>  "192.5",
                                "website" =>  "http:\/\/www.phidimmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "77" =>  [
                                "id" =>  78,
                                "district_id" =>  8,
                                "category_id" =>  4,
                                "name" =>  "Miklajung Rural Municipality",
                                "area_sq_km" =>  "166.61",
                                "website" =>  "http:\/\/www.miklajungmunpanchthar.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "78" =>  [
                                "id" =>  79,
                                "district_id" =>  8,
                                "category_id" =>  4,
                                "name" =>  "Phalgunanda Rural Municipality",
                                "area_sq_km" =>  "107.53",
                                "website" =>  "http:\/\/www.phalgunandamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "79" =>  [
                                "id" =>  80,
                                "district_id" =>  8,
                                "category_id" =>  4,
                                "name" =>  "Hilihang Rural Municipality",
                                "area_sq_km" =>  "123.01",
                                "website" =>  "http:\/\/www.hilihangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "80" =>  [
                                "id" =>  81,
                                "district_id" =>  8,
                                "category_id" =>  4,
                                "name" =>  "Phalelung Rural Municipality",
                                "area_sq_km" =>  "207.14",
                                "website" =>  "http:\/\/www.phalelungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "81" =>  [
                                "id" =>  82,
                                "district_id" =>  8,
                                "category_id" =>  4,
                                "name" =>  "Yangwarak Rural Municipality",
                                "area_sq_km" =>  "208.63",
                                "website" =>  "http:\/\/www.yangwarakmunpanchthar.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "82" =>  [
                                "id" =>  83,
                                "district_id" =>  8,
                                "category_id" =>  4,
                                "name" =>  "Kummayak Rural Municipality",
                                "area_sq_km" =>  "129.3",
                                "website" =>  "http:\/\/www.kummayakmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "83" =>  [
                                "id" =>  84,
                                "district_id" =>  8,
                                "category_id" =>  4,
                                "name" =>  "Tumbewa Rural Municipality",
                                "area_sq_km" =>  "117.34",
                                "website" =>  "http:\/\/www.tumwewamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  9,
                        "province_id" =>  1,
                        "name" =>  "Sankhuwasabha",
                        "area_sq_km" =>  "3480",
                        "website" =>  "https:\/\/www.ddcsankhuwasabha.gov.np",
                        "headquarter" =>  "Khandbari",
                        "municipalities" =>  [
                            "84" =>  [
                                "id" =>  85,
                                "district_id" =>  9,
                                "category_id" =>  3,
                                "name" =>  "Khandbari Municipality",
                                "area_sq_km" =>  "122.78",
                                "website" =>  "http:\/\/www.khandbarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "85" =>  [
                                "id" =>  86,
                                "district_id" =>  9,
                                "category_id" =>  3,
                                "name" =>  "Chainpur Municipality",
                                "area_sq_km" =>  "223.69",
                                "website" =>  "http:\/\/www.chainpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "86" =>  [
                                "id" =>  87,
                                "district_id" =>  9,
                                "category_id" =>  3,
                                "name" =>  "Dharmadevi Municipality",
                                "area_sq_km" =>  "132.82",
                                "website" =>  "http:\/\/www.dharmadevimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "87" =>  [
                                "id" =>  88,
                                "district_id" =>  9,
                                "category_id" =>  3,
                                "name" =>  "Panchkhapan Municipality",
                                "area_sq_km" =>  "148.03",
                                "website" =>  "http:\/\/www.panchkhapanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "88" =>  [
                                "id" =>  89,
                                "district_id" =>  9,
                                "category_id" =>  3,
                                "name" =>  "Madi Municipality",
                                "area_sq_km" =>  "110.1",
                                "website" =>  "http:\/\/www.madimunsankhuwasabha.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "89" =>  [
                                "id" =>  90,
                                "district_id" =>  9,
                                "category_id" =>  4,
                                "name" =>  "Makalu Rural Municipality",
                                "area_sq_km" =>  "519.45",
                                "website" =>  "http:\/\/www.makalumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "90" =>  [
                                "id" =>  91,
                                "district_id" =>  9,
                                "category_id" =>  4,
                                "name" =>  "Silichong Rural Municipality",
                                "area_sq_km" =>  "293.26",
                                "website" =>  "http:\/\/www.silichongmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "91" =>  [
                                "id" =>  92,
                                "district_id" =>  9,
                                "category_id" =>  4,
                                "name" =>  "Sabhapokhari Rural Municipality",
                                "area_sq_km" =>  "222.08",
                                "website" =>  "http:\/\/www.savapokharimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "92" =>  [
                                "id" =>  93,
                                "district_id" =>  9,
                                "category_id" =>  4,
                                "name" =>  "Chichila Rural Municipality",
                                "area_sq_km" =>  "88.63",
                                "website" =>  "http:\/\/www.chichilamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "93" =>  [
                                "id" =>  94,
                                "district_id" =>  9,
                                "category_id" =>  4,
                                "name" =>  "BhotKhola Rural Municipality",
                                "area_sq_km" =>  "639.01",
                                "website" =>  "http:\/\/www.bhotkholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  10,
                        "province_id" =>  1,
                        "name" =>  "Solukhumbu",
                        "area_sq_km" =>  "3312",
                        "website" =>  "https:\/\/www.ddcsolukhumbu.gov.np",
                        "headquarter" =>  "Salleri",
                        "municipalities" =>  [
                            "94" =>  [
                                "id" =>  95,
                                "district_id" =>  10,
                                "category_id" =>  3,
                                "name" =>  "Solu Dudhkunda Municipality",
                                "area_sq_km" =>  "538.09",
                                "website" =>  "http:\/\/www.solududhkundamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "95" =>  [
                                "id" =>  96,
                                "district_id" =>  10,
                                "category_id" =>  4,
                                "name" =>  "Mapya Dudhkoshi Rural Municipality",
                                "area_sq_km" =>  "167.67",
                                "website" =>  "http:\/\/www.dudhkoshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "96" =>  [
                                "id" =>  97,
                                "district_id" =>  10,
                                "category_id" =>  4,
                                "name" =>  "Necha Salyan Rural Municipality",
                                "area_sq_km" =>  "94.49",
                                "website" =>  "http:\/\/www.nechasalyanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "97" =>  [
                                "id" =>  98,
                                "district_id" =>  10,
                                "category_id" =>  4,
                                "name" =>  "Thulung Dudhkoshi Rural Municipality",
                                "area_sq_km" =>  "144.6",
                                "website" =>  "http:\/\/www.thulungdudhkoshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "98" =>  [
                                "id" =>  99,
                                "district_id" =>  10,
                                "category_id" =>  4,
                                "name" =>  "Maha Kulung Rural Municipality",
                                "area_sq_km" =>  "648.05",
                                "website" =>  "http:\/\/www.mahakulungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "99" =>  [
                                "id" =>  100,
                                "district_id" =>  10,
                                "category_id" =>  4,
                                "name" =>  "Sotang Rural Municipality",
                                "area_sq_km" =>  "103",
                                "website" =>  "http:\/\/www.sotangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "100" =>  [
                                "id" =>  101,
                                "district_id" =>  10,
                                "category_id" =>  4,
                                "name" =>  "Khumbu PasangLhamu Rural Municipality",
                                "area_sq_km" =>  "1539.11",
                                "website" =>  "http:\/\/www.khumbupasanglhamumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "101" =>  [
                                "id" =>  102,
                                "district_id" =>  10,
                                "category_id" =>  4,
                                "name" =>  "Likhu Pike Rural Municipality",
                                "area_sq_km" =>  "124.38",
                                "website" =>  "http:\/\/www.likhupikemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  11,
                        "province_id" =>  1,
                        "name" =>  "Sunsari",
                        "area_sq_km" =>  "1257",
                        "website" =>  "https:\/\/www.ddcsunsari.gov.np",
                        "headquarter" =>  "Inaruwa",
                        "municipalities" =>  [
                            "102" =>  [
                                "id" =>  103,
                                "district_id" =>  11,
                                "category_id" =>  3,
                                "name" =>  "BarahaKshetra Municipality",
                                "area_sq_km" =>  "222.09",
                                "website" =>  "http:\/\/www.barahamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "103" =>  [
                                "id" =>  104,
                                "district_id" =>  11,
                                "category_id" =>  3,
                                "name" =>  "Inaruwa Municipality",
                                "area_sq_km" =>  "77.92",
                                "website" =>  "http:\/\/www.inaruwamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "104" =>  [
                                "id" =>  105,
                                "district_id" =>  11,
                                "category_id" =>  3,
                                "name" =>  "Duhabi Municipality",
                                "area_sq_km" =>  "76.67",
                                "website" =>  "http:\/\/www.duhabimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "105" =>  [
                                "id" =>  106,
                                "district_id" =>  11,
                                "category_id" =>  3,
                                "name" =>  "Ramdhuni Municipality",
                                "area_sq_km" =>  "91.69",
                                "website" =>  "http:\/\/www.ramdhunimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "106" =>  [
                                "id" =>  107,
                                "district_id" =>  11,
                                "category_id" =>  2,
                                "name" =>  "Itahari Sub-Metropolitan City",
                                "area_sq_km" =>  "93.78",
                                "website" =>  "http:\/\/www.itaharimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20
                                ]
                            ],
                            "107" =>  [
                                "id" =>  108,
                                "district_id" =>  11,
                                "category_id" =>  2,
                                "name" =>  "Dharan Sub-Metropolitan City",
                                "area_sq_km" =>  "192.32",
                                "website" =>  "http:\/\/www.dharan.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20
                                ]
                            ],
                            "108" =>  [
                                "id" =>  109,
                                "district_id" =>  11,
                                "category_id" =>  4,
                                "name" =>  "Koshi Rural Municipality",
                                "area_sq_km" =>  "75.98",
                                "website" =>  "http:\/\/www.koshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "109" =>  [
                                "id" =>  110,
                                "district_id" =>  11,
                                "category_id" =>  4,
                                "name" =>  "Harinagar Rural Municipality",
                                "area_sq_km" =>  "52.29",
                                "website" =>  "http:\/\/www.harinagaramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "110" =>  [
                                "id" =>  111,
                                "district_id" =>  11,
                                "category_id" =>  4,
                                "name" =>  "Bhokraha Narsingh Rural Municipality",
                                "area_sq_km" =>  "63.37",
                                "website" =>  "http:\/\/www.bhokrahamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "111" =>  [
                                "id" =>  112,
                                "district_id" =>  11,
                                "category_id" =>  4,
                                "name" =>  "Dewangunj Rural Municipality",
                                "area_sq_km" =>  "53.56",
                                "website" =>  "http:\/\/www.dewanganjmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "112" =>  [
                                "id" =>  113,
                                "district_id" =>  11,
                                "category_id" =>  4,
                                "name" =>  "Gadhi Rural Municipality",
                                "area_sq_km" =>  "67.7",
                                "website" =>  "http:\/\/www.gadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "113" =>  [
                                "id" =>  114,
                                "district_id" =>  11,
                                "category_id" =>  4,
                                "name" =>  "Barju Rural Municipality",
                                "area_sq_km" =>  "69.43",
                                "website" =>  "http:\/\/www.barjumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  12,
                        "province_id" =>  1,
                        "name" =>  "Taplejung",
                        "area_sq_km" =>  "3646",
                        "website" =>  "https:\/\/www.ddctaplejung.gov.np",
                        "headquarter" =>  "Taplejung",
                        "municipalities" =>  [
                            "114" =>  [
                                "id" =>  115,
                                "district_id" =>  12,
                                "category_id" =>  3,
                                "name" =>  "Phungling Municipality",
                                "area_sq_km" =>  "125.57",
                                "website" =>  "http:\/\/www.phunglingmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "115" =>  [
                                "id" =>  116,
                                "district_id" =>  12,
                                "category_id" =>  4,
                                "name" =>  "Sirijangha Rural Municipality",
                                "area_sq_km" =>  "481.09",
                                "website" =>  "http:\/\/www.sirijanghamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "116" =>  [
                                "id" =>  117,
                                "district_id" =>  12,
                                "category_id" =>  4,
                                "name" =>  "Aathrai Triveni Rural Municipality",
                                "area_sq_km" =>  "88.83",
                                "website" =>  "http:\/\/www.aathraitribenimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "117" =>  [
                                "id" =>  118,
                                "district_id" =>  12,
                                "category_id" =>  4,
                                "name" =>  "Pathibhara Yangwarak Rural Municipality",
                                "area_sq_km" =>  "93.76",
                                "website" =>  "http:\/\/www.yangwarakmuntaplejung.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "118" =>  [
                                "id" =>  119,
                                "district_id" =>  12,
                                "category_id" =>  4,
                                "name" =>  "Meringden Rural Municipality",
                                "area_sq_km" =>  "210.33",
                                "website" =>  "http:\/\/www.meringdenmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "119" =>  [
                                "id" =>  120,
                                "district_id" =>  12,
                                "category_id" =>  4,
                                "name" =>  "Sidingwa Rural Municipality",
                                "area_sq_km" =>  "206",
                                "website" =>  "http:\/\/www.sidingbamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "120" =>  [
                                "id" =>  121,
                                "district_id" =>  12,
                                "category_id" =>  4,
                                "name" =>  "Phaktanglung Rural Municipality",
                                "area_sq_km" =>  "1858.51",
                                "website" =>  "http:\/\/www.phaktanglungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "121" =>  [
                                "id" =>  122,
                                "district_id" =>  12,
                                "category_id" =>  4,
                                "name" =>  "Maiwa Khola Rural Municipality",
                                "area_sq_km" =>  "138",
                                "website" =>  "http:\/\/www.maiwakholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "122" =>  [
                                "id" =>  123,
                                "district_id" =>  12,
                                "category_id" =>  4,
                                "name" =>  "Mikwa Khola Rural Municipality",
                                "area_sq_km" =>  "442.96",
                                "website" =>  "http:\/\/www.mikwakholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  13,
                        "province_id" =>  1,
                        "name" =>  "Terhathum",
                        "area_sq_km" =>  "679",
                        "website" =>  "https:\/\/www.ddctehrathum.gov.np",
                        "headquarter" =>  "Myanglung",
                        "municipalities" =>  [
                            "123" =>  [
                                "id" =>  124,
                                "district_id" =>  13,
                                "category_id" =>  3,
                                "name" =>  "Myanglung Municipality",
                                "area_sq_km" =>  "100.21",
                                "website" =>  "http:\/\/www.myanglungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "124" =>  [
                                "id" =>  125,
                                "district_id" =>  13,
                                "category_id" =>  3,
                                "name" =>  "Laligurans Municipality",
                                "area_sq_km" =>  "90.27",
                                "website" =>  "http:\/\/www.laliguransmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "125" =>  [
                                "id" =>  126,
                                "district_id" =>  13,
                                "category_id" =>  4,
                                "name" =>  "Aathrai Rural Municipality",
                                "area_sq_km" =>  "167.07",
                                "website" =>  "http:\/\/www.aathraimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "126" =>  [
                                "id" =>  127,
                                "district_id" =>  13,
                                "category_id" =>  4,
                                "name" =>  "Phedap Rural Municipality",
                                "area_sq_km" =>  "110.83",
                                "website" =>  "http:\/\/www.phedapmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "127" =>  [
                                "id" =>  128,
                                "district_id" =>  13,
                                "category_id" =>  4,
                                "name" =>  "Chhathar Rural Municipality",
                                "area_sq_km" =>  "133.93",
                                "website" =>  "http:\/\/www.chhatharmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "128" =>  [
                                "id" =>  129,
                                "district_id" =>  13,
                                "category_id" =>  4,
                                "name" =>  "Menchayayem Rural Municipality",
                                "area_sq_km" =>  "70.09",
                                "website" =>  "http:\/\/www.menchhayayemmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" =>  14,
                        "province_id" =>  1,
                        "name" =>  "Udayapur",
                        "area_sq_km" =>  "2063",
                        "website" =>  "https:\/\/www.ddcudayapur.gov.np",
                        "headquarter" =>  "Gaighat",
                        "municipalities" =>  [
                            "129" =>  [
                                "id" =>  130,
                                "district_id" =>  14,
                                "category_id" =>  3,
                                "name" =>  "Triyuga Municipality",
                                "area_sq_km" =>  "547.43",
                                "website" =>  "http:\/\/www.triyugamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16
                                ]
                            ],
                            "130" =>  [
                                "id" =>  131,
                                "district_id" =>  14,
                                "category_id" =>  3,
                                "name" =>  "Katari Municipality",
                                "area_sq_km" =>  "424.89",
                                "website" =>  "http:\/\/www.katarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "131" =>  [
                                "id" =>  132,
                                "district_id" =>  14,
                                "category_id" =>  3,
                                "name" =>  "Chaudandigadhi Municipality",
                                "area_sq_km" =>  "283.78",
                                "website" =>  "http:\/\/www.chaudandigadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "132" =>  [
                                "id" =>  133,
                                "district_id" =>  14,
                                "category_id" =>  3,
                                "name" =>  "Belaka Municipality",
                                "area_sq_km" =>  "344.73",
                                "website" =>  "http:\/\/www.belakamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "133" =>  [
                                "id" =>  134,
                                "district_id" =>  14,
                                "category_id" =>  4,
                                "name" =>  "Udayapurgadhi Rural Municipality",
                                "area_sq_km" =>  "269.51",
                                "website" =>  "http:\/\/www.udayapurgadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "134" =>  [
                                "id" =>  135,
                                "district_id" =>  14,
                                "category_id" =>  4,
                                "name" =>  "Rautamai Rural Municipality",
                                "area_sq_km" =>  "204.08",
                                "website" =>  "http:\/\/www.rautamaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "135" =>  [
                                "id" =>  136,
                                "district_id" =>  14,
                                "category_id" =>  4,
                                "name" =>  "Tapli Rural Municipality",
                                "area_sq_km" =>  "119.11",
                                "website" =>  "http:\/\/www.taplimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "136" =>  [
                                "id" =>  137,
                                "district_id" =>  14,
                                "category_id" =>  4,
                                "name" =>  "Limchungbung Rural Municipality",
                                "area_sq_km" =>  "106.8",
                                "website" =>  "http:\/\/www.sunkoshimunudayapur.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                "id" =>  2,
                "name" =>  "Madhesh Province",
                "area_sq_km" =>  "9661",
                "website" =>  "https:\/\/madhesh.gov.np\/",
                "headquarter" =>  "Janakpur",
                "districts" =>  [
                    "14" =>  [
                        "id" =>  15,
                        "province_id" =>  2,
                        "name" =>  "Parsa",
                        "area_sq_km" =>  "1353",
                        "website" =>  "https:\/\/dccparsa.gov.np\/",
                        "headquarter" =>  "Birgunj",
                        "municipalities" =>  [
                            "137" =>  [
                                "id" =>  138,
                                "district_id" =>  15,
                                "category_id" =>  1,
                                "name" =>  "Birgunj Metropolitan City",
                                "area_sq_km" =>  "132.07",
                                "website" =>  "http:\/\/www.birgunjmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22,
                                    23,
                                    24,
                                    25,
                                    26,
                                    27,
                                    28,
                                    29,
                                    30,
                                    31,
                                    32
                                ]
                            ],
                            "138" =>  [
                                "id" =>  139,
                                "district_id" =>  15,
                                "category_id" =>  3,
                                "name" =>  "Bahudarmai Municipality",
                                "area_sq_km" =>  "31.55",
                                "website" =>  "http:\/\/www.bahudarmaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "139" =>  [
                                "id" =>  140,
                                "district_id" =>  15,
                                "category_id" =>  3,
                                "name" =>  "Parsagadhi Municipality",
                                "area_sq_km" =>  "99.69",
                                "website" =>  "http:\/\/www.parsagadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "140" =>  [
                                "id" =>  141,
                                "district_id" =>  15,
                                "category_id" =>  3,
                                "name" =>  "Pokhariya Municipality",
                                "area_sq_km" =>  "32.47",
                                "website" =>  "http:\/\/www.pokhariyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "141" =>  [
                                "id" =>  142,
                                "district_id" =>  15,
                                "category_id" =>  4,
                                "name" =>  "Bindabasini Rural Municipality",
                                "area_sq_km" =>  "26.04",
                                "website" =>  "http:\/\/www.bindabasinimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "142" =>  [
                                "id" =>  143,
                                "district_id" =>  15,
                                "category_id" =>  4,
                                "name" =>  "Dhobini Rural Municipality",
                                "area_sq_km" =>  "24.41",
                                "website" =>  "http:\/\/www.dhobinimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "143" =>  [
                                "id" =>  144,
                                "district_id" =>  15,
                                "category_id" =>  4,
                                "name" =>  "Chhipaharmai Rural Municipality",
                                "area_sq_km" =>  "24.9",
                                "website" =>  "http:\/\/www.chhipaharmaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "144" =>  [
                                "id" =>  145,
                                "district_id" =>  15,
                                "category_id" =>  4,
                                "name" =>  "Jagarnathpur Rural Municipality",
                                "area_sq_km" =>  "45.29",
                                "website" =>  "http:\/\/www.jagarnathpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "145" =>  [
                                "id" =>  146,
                                "district_id" =>  15,
                                "category_id" =>  4,
                                "name" =>  "Jirabhawani Rural Municipality",
                                "area_sq_km" =>  "55.39",
                                "website" =>  "http:\/\/www.jirabhawanimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "146" =>  [
                                "id" =>  147,
                                "district_id" =>  15,
                                "category_id" =>  4,
                                "name" =>  "Kalikamai Rural Municipality",
                                "area_sq_km" =>  "24.33",
                                "website" =>  "http:\/\/www.kalikamaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "147" =>  [
                                "id" =>  148,
                                "district_id" =>  15,
                                "category_id" =>  4,
                                "name" =>  "Pakaha Mainpur Rural Municipality",
                                "area_sq_km" =>  "21.26",
                                "website" =>  "http:\/\/www.pakahamainpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "148" =>  [
                                "id" =>  149,
                                "district_id" =>  15,
                                "category_id" =>  4,
                                "name" =>  "Paterwa Sugauli Rural Municipality",
                                "area_sq_km" =>  "64.29",
                                "website" =>  "http:\/\/www.paterwasugaulimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "149" =>  [
                                "id" =>  150,
                                "district_id" =>  15,
                                "category_id" =>  4,
                                "name" =>  "Sakhuwa Prasauni Rural Municipality",
                                "area_sq_km" =>  "74.27",
                                "website" =>  "http:\/\/www.sakhuwaprasaunimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "150" =>  [
                                "id" =>  151,
                                "district_id" =>  15,
                                "category_id" =>  4,
                                "name" =>  "Thori Rural Municipality",
                                "area_sq_km" =>  "128.67",
                                "website" =>  "http:\/\/www.thorimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "15" =>  [
                        "id" =>  16,
                        "province_id" =>  2,
                        "name" =>  "Bara",
                        "area_sq_km" =>  "1190",
                        "website" =>  "https:\/\/dccbara.gov.np\/",
                        "headquarter" =>  "Kalaiya",
                        "municipalities" =>  [
                            "151" =>  [
                                "id" =>  152,
                                "district_id" =>  16,
                                "category_id" =>  2,
                                "name" =>  "Kalaiya Sub-Metropolitan City",
                                "area_sq_km" =>  "108.94",
                                "website" =>  "http:\/\/www.kalaiyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22,
                                    23,
                                    24,
                                    25,
                                    26,
                                    27
                                ]
                            ],
                            "152" =>  [
                                "id" =>  153,
                                "district_id" =>  16,
                                "category_id" =>  2,
                                "name" =>  "Jitpur Simara Sub-Metropolitan City",
                                "area_sq_km" =>  "312.18",
                                "website" =>  "http:\/\/www.jeetpursimaramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22,
                                    23,
                                    24
                                ]
                            ],
                            "153" =>  [
                                "id" =>  154,
                                "district_id" =>  16,
                                "category_id" =>  3,
                                "name" =>  "Kolhabi Municipality",
                                "area_sq_km" =>  "157.4",
                                "website" =>  "http:\/\/www.kolhabimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "154" =>  [
                                "id" =>  155,
                                "district_id" =>  16,
                                "category_id" =>  3,
                                "name" =>  "Nijgadh Municipality",
                                "area_sq_km" =>  "289.43",
                                "website" =>  "http:\/\/www.nijgadhmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "155" =>  [
                                "id" =>  156,
                                "district_id" =>  16,
                                "category_id" =>  3,
                                "name" =>  "Mahagadhimai Municipality",
                                "area_sq_km" =>  "55.32",
                                "website" =>  "http:\/\/www.mahagadimaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "156" =>  [
                                "id" =>  157,
                                "district_id" =>  16,
                                "category_id" =>  3,
                                "name" =>  "Simaraungadh Municipality",
                                "area_sq_km" =>  "42.65",
                                "website" =>  "http:\/\/www.simraungadhmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "157" =>  [
                                "id" =>  158,
                                "district_id" =>  16,
                                "category_id" =>  3,
                                "name" =>  "Pacharauta Municipality",
                                "area_sq_km" =>  "44.01",
                                "website" =>  "http:\/\/www.pachrautamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "158" =>  [
                                "id" =>  159,
                                "district_id" =>  16,
                                "category_id" =>  4,
                                "name" =>  "Pheta Rural Municipality",
                                "area_sq_km" =>  "23.65",
                                "website" =>  "http:\/\/www.phetamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "159" =>  [
                                "id" =>  160,
                                "district_id" =>  16,
                                "category_id" =>  4,
                                "name" =>  "Bishrampur Rural Municipality",
                                "area_sq_km" =>  "19.81",
                                "website" =>  "http:\/\/www.bishrampurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "160" =>  [
                                "id" =>  161,
                                "district_id" =>  16,
                                "category_id" =>  4,
                                "name" =>  "Prasauni Rural Municipality",
                                "area_sq_km" =>  "20.24",
                                "website" =>  "http:\/\/www.prasaunimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "161" =>  [
                                "id" =>  162,
                                "district_id" =>  16,
                                "category_id" =>  4,
                                "name" =>  "Adarsh Kotwal Rural Municipality",
                                "area_sq_km" =>  "36.25",
                                "website" =>  "http:\/\/www.aadarshakotwalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "162" =>  [
                                "id" =>  163,
                                "district_id" =>  16,
                                "category_id" =>  4,
                                "name" =>  "Karaiyamai Rural Municipality",
                                "area_sq_km" =>  "47.69",
                                "website" =>  "http:\/\/www.karaiyamaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "163" =>  [
                                "id" =>  164,
                                "district_id" =>  16,
                                "category_id" =>  4,
                                "name" =>  "Devtal Rural Municipality",
                                "area_sq_km" =>  "23.31",
                                "website" =>  "http:\/\/www.devtalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "164" =>  [
                                "id" =>  165,
                                "district_id" =>  16,
                                "category_id" =>  4,
                                "name" =>  "Parwanipur Rural Municipality",
                                "area_sq_km" =>  "15.48",
                                "website" =>  "http:\/\/www.parwanipurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "165" =>  [
                                "id" =>  166,
                                "district_id" =>  16,
                                "category_id" =>  4,
                                "name" =>  "Baragadhi Rural Municipality",
                                "area_sq_km" =>  "39.29",
                                "website" =>  "http:\/\/www.baragadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "166" =>  [
                                "id" =>  167,
                                "district_id" =>  16,
                                "category_id" =>  4,
                                "name" =>  "Suwarna Rural Municipality",
                                "area_sq_km" =>  "36.84",
                                "website" =>  "http:\/\/www.suwarnamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ]
                        ]
                    ],
                    "16" =>  [
                        "id" =>  17,
                        "province_id" =>  2,
                        "name" =>  "Rautahat",
                        "area_sq_km" =>  "1126",
                        "website" =>  "https:\/\/dccrautahat.gov.np\/",
                        "headquarter" =>  "Gaur",
                        "municipalities" =>  [
                            "167" =>  [
                                "id" =>  168,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Baudhimai Municipality",
                                "area_sq_km" =>  "35.343",
                                "website" =>  "http:\/\/www.baudhimaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "168" =>  [
                                "id" =>  169,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Brindaban Municipality",
                                "area_sq_km" =>  "95.4",
                                "website" =>  "http:\/\/www.brindawanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "169" =>  [
                                "id" =>  170,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Chandrapur Municipality",
                                "area_sq_km" =>  "249.96",
                                "website" =>  "http:\/\/www.chandrapurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "170" =>  [
                                "id" =>  171,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Dewahi Gonahi Municipality",
                                "area_sq_km" =>  "33.99",
                                "website" =>  "http:\/\/www.dewahigonahimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "171" =>  [
                                "id" =>  172,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Gadhimai Municipality",
                                "area_sq_km" =>  "49.44",
                                "website" =>  "http:\/\/www.gadhimaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "172" =>  [
                                "id" =>  173,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Guruda Municipality",
                                "area_sq_km" =>  "44.46",
                                "website" =>  "http:\/\/www.garudamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "173" =>  [
                                "id" =>  174,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Gaur Municipality",
                                "area_sq_km" =>  "21.53",
                                "website" =>  "http:\/\/www.gaurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "174" =>  [
                                "id" =>  175,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Gujara Municipality",
                                "area_sq_km" =>  "150.33",
                                "website" =>  "http:\/\/www.gujaramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "175" =>  [
                                "id" =>  176,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Ishanath Municipality",
                                "area_sq_km" =>  "35.17",
                                "website" =>  "http:\/\/www.ishnathmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "176" =>  [
                                "id" =>  177,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Katahariya Municipality",
                                "area_sq_km" =>  "40.69",
                                "website" =>  "http:\/\/www.katahariyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "177" =>  [
                                "id" =>  178,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Madhav Narayan Municipality",
                                "area_sq_km" =>  "48.53",
                                "website" =>  "http:\/\/www.madhavnarayanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "178" =>  [
                                "id" =>  179,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Maulapur Municipality",
                                "area_sq_km" =>  "34.75",
                                "website" =>  "http:\/\/www.maulapurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "179" =>  [
                                "id" =>  180,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Paroha Municipality",
                                "area_sq_km" =>  "37.45",
                                "website" =>  "http:\/\/www.parohamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "180" =>  [
                                "id" =>  181,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Phatuwa Bijayapur Municipality",
                                "area_sq_km" =>  "65.24",
                                "website" =>  "http:\/\/www.phatuwabijaypurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "181" =>  [
                                "id" =>  182,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Rajdevi Municipality",
                                "area_sq_km" =>  "28.21",
                                "website" =>  "http:\/\/www.rajdevimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "182" =>  [
                                "id" =>  183,
                                "district_id" =>  17,
                                "category_id" =>  3,
                                "name" =>  "Rajpur Municipality",
                                "area_sq_km" =>  "31.41",
                                "website" =>  "https:\/\/rajpurmunrautahat.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "183" =>  [
                                "id" =>  184,
                                "district_id" =>  17,
                                "category_id" =>  4,
                                "name" =>  "Durga Bhagwati Rural Municipality",
                                "area_sq_km" =>  "19.8",
                                "website" =>  "http:\/\/www.durgabhagawatimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "184" =>  [
                                "id" =>  185,
                                "district_id" =>  17,
                                "category_id" =>  4,
                                "name" =>  "Yamunamai Rural Municipality",
                                "area_sq_km" =>  "16.7",
                                "website" =>  "http:\/\/www.yamunamaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "17" =>  [
                        "id" =>  18,
                        "province_id" =>  2,
                        "name" =>  "Sarlahi",
                        "area_sq_km" =>  "1259",
                        "website" =>  "https:\/\/dccsarlahi.gov.np\/",
                        "headquarter" =>  "Malangawa",
                        "municipalities" =>  [
                            "185" =>  [
                                "id" =>  186,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Bagmati Municipality",
                                "area_sq_km" =>  "101.18",
                                "website" =>  "http:\/\/www.bagmatimunsarlahi.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "186" =>  [
                                "id" =>  187,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Balara Municipality",
                                "area_sq_km" =>  "48.55",
                                "website" =>  "http:\/\/www.balramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "187" =>  [
                                "id" =>  188,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Barahathwa Municipality",
                                "area_sq_km" =>  "107.05",
                                "website" =>  "http:\/\/www.barhathwamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18
                                ]
                            ],
                            "188" =>  [
                                "id" =>  189,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Godaita Municipality",
                                "area_sq_km" =>  "48.62",
                                "website" =>  "http:\/\/www.godaitamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "189" =>  [
                                "id" =>  190,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Hariwan Municipality",
                                "area_sq_km" =>  "86.12",
                                "website" =>  "http:\/\/www.harionmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "190" =>  [
                                "id" =>  191,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Haripur Municipality",
                                "area_sq_km" =>  "66.86",
                                "website" =>  "http:\/\/www.haripurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "191" =>  [
                                "id" =>  192,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Haripurwa Municipality",
                                "area_sq_km" =>  "30.5",
                                "website" =>  "http:\/\/www.haripurwamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "192" =>  [
                                "id" =>  193,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Ishowrpur Municipality",
                                "area_sq_km" =>  "163.83",
                                "website" =>  "http:\/\/www.ishworpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15
                                ]
                            ],
                            "193" =>  [
                                "id" =>  194,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Kabilasi Municipality",
                                "area_sq_km" =>  "48.11",
                                "website" =>  "http:\/\/www.kawilasimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "194" =>  [
                                "id" =>  195,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Lalbandi Municipality",
                                "area_sq_km" =>  "238.5",
                                "website" =>  "http:\/\/www.lalbandimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17
                                ]
                            ],
                            "195" =>  [
                                "id" =>  196,
                                "district_id" =>  18,
                                "category_id" =>  3,
                                "name" =>  "Malangawa Municipality",
                                "area_sq_km" =>  "30.44",
                                "website" =>  "http:\/\/www.malangwamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "196" =>  [
                                "id" =>  197,
                                "district_id" =>  18,
                                "category_id" =>  4,
                                "name" =>  "Basbariya Rural Municipality",
                                "area_sq_km" =>  "29.42",
                                "website" =>  "http:\/\/www.basbariyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "197" =>  [
                                "id" =>  198,
                                "district_id" =>  18,
                                "category_id" =>  4,
                                "name" =>  "Bisnu Rural Municipality",
                                "area_sq_km" =>  "28.09",
                                "website" =>  "http:\/\/www.bishnumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "198" =>  [
                                "id" =>  199,
                                "district_id" =>  18,
                                "category_id" =>  4,
                                "name" =>  "Brahampuri Rural Municipality",
                                "area_sq_km" =>  "33.89",
                                "website" =>  "http:\/\/www.brahmapurimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "199" =>  [
                                "id" =>  200,
                                "district_id" =>  18,
                                "category_id" =>  4,
                                "name" =>  "Chakraghatta Rural Municipality",
                                "area_sq_km" =>  "25.14",
                                "website" =>  "http:\/\/www.chakraghattamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "200" =>  [
                                "id" =>  201,
                                "district_id" =>  18,
                                "category_id" =>  4,
                                "name" =>  "Chandranagar Rural Municipality",
                                "area_sq_km" =>  "47.5",
                                "website" =>  "http:\/\/www.chandranagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "201" =>  [
                                "id" =>  202,
                                "district_id" =>  18,
                                "category_id" =>  4,
                                "name" =>  "Dhankaul Rural Municipality",
                                "area_sq_km" =>  "45.94",
                                "website" =>  "http:\/\/www.dhankaulmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "202" =>  [
                                "id" =>  203,
                                "district_id" =>  18,
                                "category_id" =>  4,
                                "name" =>  "Kaudena Rural Municipality",
                                "area_sq_km" =>  "25.33",
                                "website" =>  "http:\/\/www.kaudenamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "203" =>  [
                                "id" =>  204,
                                "district_id" =>  18,
                                "category_id" =>  4,
                                "name" =>  "Parsa Rural Municipality",
                                "area_sq_km" =>  "23.12",
                                "website" =>  "http:\/\/www.parsamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "204" =>  [
                                "id" =>  205,
                                "district_id" =>  18,
                                "category_id" =>  4,
                                "name" =>  "Ramnagar Rural Municipality",
                                "area_sq_km" =>  "26.44",
                                "website" =>  "http:\/\/www.ramnagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "18" =>  [
                        "id" =>  19,
                        "province_id" =>  2,
                        "name" =>  "Siraha",
                        "area_sq_km" =>  "1188",
                        "website" =>  "https:\/\/dccsiraha.gov.np\/",
                        "headquarter" =>  "Siraha",
                        "municipalities" =>  [
                            "205" =>  [
                                "id" =>  206,
                                "district_id" =>  19,
                                "category_id" =>  3,
                                "name" =>  "Lahan Municipality",
                                "area_sq_km" =>  "167.17",
                                "website" =>  "http:\/\/www.lahanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22,
                                    23,
                                    24
                                ]
                            ],
                            "206" =>  [
                                "id" =>  207,
                                "district_id" =>  19,
                                "category_id" =>  3,
                                "name" =>  "Dhangadhimai Municipality",
                                "area_sq_km" =>  "159.51",
                                "website" =>  "http:\/\/www.dhangadhimaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "207" =>  [
                                "id" =>  208,
                                "district_id" =>  19,
                                "category_id" =>  3,
                                "name" =>  "Siraha Municipality",
                                "area_sq_km" =>  "94.2",
                                "website" =>  "http:\/\/www.sirahamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22
                                ]
                            ],
                            "208" =>  [
                                "id" =>  209,
                                "district_id" =>  19,
                                "category_id" =>  3,
                                "name" =>  "Golbazar Municipality",
                                "area_sq_km" =>  "111.94",
                                "website" =>  "http:\/\/www.golbazarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "209" =>  [
                                "id" =>  210,
                                "district_id" =>  19,
                                "category_id" =>  3,
                                "name" =>  "Mirchaiya Municipality",
                                "area_sq_km" =>  "91.97",
                                "website" =>  "http:\/\/www.mirchaiyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "210" =>  [
                                "id" =>  211,
                                "district_id" =>  19,
                                "category_id" =>  3,
                                "name" =>  "Kalyanpur Municipality",
                                "area_sq_km" =>  "76.81",
                                "website" =>  "http:\/\/www.kalyanpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "211" =>  [
                                "id" =>  212,
                                "district_id" =>  19,
                                "category_id" =>  3,
                                "name" =>  "Karjanha Municipality",
                                "area_sq_km" =>  "76.84",
                                "website" =>  "http:\/\/www.karjanhamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "212" =>  [
                                "id" =>  213,
                                "district_id" =>  19,
                                "category_id" =>  3,
                                "name" =>  "Sukhipur Municipality",
                                "area_sq_km" =>  "54.78",
                                "website" =>  "http:\/\/www.sukhipurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "213" =>  [
                                "id" =>  214,
                                "district_id" =>  19,
                                "category_id" =>  4,
                                "name" =>  "Bhagwanpur Rural Municipality",
                                "area_sq_km" =>  "33.03",
                                "website" =>  "http:\/\/www.bhagwanpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "214" =>  [
                                "id" =>  215,
                                "district_id" =>  19,
                                "category_id" =>  4,
                                "name" =>  "Aurahi Rural Municipality",
                                "area_sq_km" =>  "35.87",
                                "website" =>  "http:\/\/www.aurahimunsiraha.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "215" =>  [
                                "id" =>  216,
                                "district_id" =>  19,
                                "category_id" =>  4,
                                "name" =>  "Bishnupur Rural Municipality",
                                "area_sq_km" =>  "26.34",
                                "website" =>  "http:\/\/www.bishnupurmunsiraha.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "216" =>  [
                                "id" =>  217,
                                "district_id" =>  19,
                                "category_id" =>  4,
                                "name" =>  "Bariyarpatti Rural Municipality",
                                "area_sq_km" =>  "37.72",
                                "website" =>  "http:\/\/www.bariyapattimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "217" =>  [
                                "id" =>  218,
                                "district_id" =>  19,
                                "category_id" =>  4,
                                "name" =>  "Lakshmipur Patari Rural Municipality",
                                "area_sq_km" =>  "42.33",
                                "website" =>  "http:\/\/www.laxmipurpatarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "218" =>  [
                                "id" =>  219,
                                "district_id" =>  19,
                                "category_id" =>  4,
                                "name" =>  "Naraha Rural Municipality",
                                "area_sq_km" =>  "29.28",
                                "website" =>  "http:\/\/www.narahamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "219" =>  [
                                "id" =>  220,
                                "district_id" =>  19,
                                "category_id" =>  4,
                                "name" =>  "SakhuwanankarKatti Rural Municipality",
                                "area_sq_km" =>  "32.84",
                                "website" =>  "http:\/\/www.sakhuwanankarkattimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "220" =>  [
                                "id" =>  221,
                                "district_id" =>  19,
                                "category_id" =>  4,
                                "name" =>  "Arnama Rural Municipality",
                                "area_sq_km" =>  "37.76",
                                "website" =>  "http:\/\/www.anarmamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "221" =>  [
                                "id" =>  222,
                                "district_id" =>  19,
                                "category_id" =>  4,
                                "name" =>  "Navarajpur Rural Municipality",
                                "area_sq_km" =>  "32.18",
                                "website" =>  "http:\/\/www.nawarajpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "19" =>  [
                        "id" =>  20,
                        "province_id" =>  2,
                        "name" =>  "Dhanusha",
                        "area_sq_km" =>  "1180",
                        "website" =>  "https:\/\/dccdhanusha.gov.np\/",
                        "headquarter" =>  "Janakpur",
                        "municipalities" =>  [
                            "222" =>  [
                                "id" =>  223,
                                "district_id" =>  20,
                                "category_id" =>  2,
                                "name" =>  "Janakpurdham Sub-Metropolitan City",
                                "area_sq_km" =>  "91.97",
                                "website" =>  "http:\/\/www.janakpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22,
                                    23,
                                    24,
                                    25
                                ]
                            ],
                            "223" =>  [
                                "id" =>  224,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "Chhireshwarnath Municipality",
                                "area_sq_km" =>  "50.85",
                                "website" =>  "http:\/\/www.kshireshwornathmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "224" =>  [
                                "id" =>  225,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "Ganeshman Charnath Municipality",
                                "area_sq_km" =>  "244.31",
                                "website" =>  "http:\/\/www.ganeshmancharnathmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "225" =>  [
                                "id" =>  226,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "Dhanushadham Municipality",
                                "area_sq_km" =>  "91.64",
                                "website" =>  "http:\/\/www.dhanushadhammun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "226" =>  [
                                "id" =>  227,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "Nagarain Municipality",
                                "area_sq_km" =>  "39",
                                "website" =>  "http:\/\/www.nagrainmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "227" =>  [
                                "id" =>  228,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "Bideha Municipality",
                                "area_sq_km" =>  "45.51",
                                "website" =>  "http:\/\/www.bidehamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "228" =>  [
                                "id" =>  229,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "Mithila Municipality",
                                "area_sq_km" =>  "187.93",
                                "website" =>  "http:\/\/www.mithilamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "229" =>  [
                                "id" =>  230,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "Sahidnagar Municipality",
                                "area_sq_km" =>  "57.37",
                                "website" =>  "http:\/\/www.shahidnagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "230" =>  [
                                "id" =>  231,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "Sabaila Municipality",
                                "area_sq_km" =>  "64.47",
                                "website" =>  "http:\/\/www.sabailamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "231" =>  [
                                "id" =>  232,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "Kamala Municipality",
                                "area_sq_km" =>  "65.85",
                                "website" =>  "http:\/\/www.kamalamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "232" =>  [
                                "id" =>  233,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "MithilaBihari Municipality",
                                "area_sq_km" =>  "37.6",
                                "website" =>  "http:\/\/www.mithilabiharimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "233" =>  [
                                "id" =>  234,
                                "district_id" =>  20,
                                "category_id" =>  3,
                                "name" =>  "Hansapur Municipality",
                                "area_sq_km" =>  "48.71",
                                "website" =>  "http:\/\/www.hansapurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "234" =>  [
                                "id" =>  235,
                                "district_id" =>  20,
                                "category_id" =>  4,
                                "name" =>  "Janaknandani Rural Municipality",
                                "area_sq_km" =>  "27.62",
                                "website" =>  "http:\/\/www.janaknandinimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "235" =>  [
                                "id" =>  236,
                                "district_id" =>  20,
                                "category_id" =>  4,
                                "name" =>  "Bateshwar Rural Municipality",
                                "area_sq_km" =>  "31.66",
                                "website" =>  "http:\/\/www.bateshwormun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "236" =>  [
                                "id" =>  237,
                                "district_id" =>  20,
                                "category_id" =>  4,
                                "name" =>  "Mukhiyapatti Musharniya Rural Municipality",
                                "area_sq_km" =>  "26.84",
                                "website" =>  "http:\/\/www.mukhiyapattimusaharmiyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "237" =>  [
                                "id" =>  238,
                                "district_id" =>  20,
                                "category_id" =>  4,
                                "name" =>  "Lakshminya Rural Municipality",
                                "area_sq_km" =>  "30.66",
                                "website" =>  "http:\/\/www.laxminiyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "238" =>  [
                                "id" =>  239,
                                "district_id" =>  20,
                                "category_id" =>  4,
                                "name" =>  "Aaurahi Rural Municipality",
                                "area_sq_km" =>  "25.56",
                                "website" =>  "http:\/\/www.aurahimundhanusha.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "239" =>  [
                                "id" =>  240,
                                "district_id" =>  20,
                                "category_id" =>  4,
                                "name" =>  "Dhanauji Rural Municipality",
                                "area_sq_km" =>  "22",
                                "website" =>  "http:\/\/www.dhanaujimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "20" =>  [
                        "id" =>  21,
                        "province_id" =>  2,
                        "name" =>  "Saptari",
                        "area_sq_km" =>  "1363",
                        "website" =>  "https:\/\/dccsaptari.gov.np\/",
                        "headquarter" =>  "Rajbiraj",
                        "municipalities" =>  [
                            "240" =>  [
                                "id" =>  241,
                                "district_id" =>  21,
                                "category_id" =>  3,
                                "name" =>  "Bodebarsain Municipality",
                                "area_sq_km" =>  "58.93",
                                "website" =>  "http:\/\/www.bodebarsainmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "241" =>  [
                                "id" =>  242,
                                "district_id" =>  21,
                                "category_id" =>  3,
                                "name" =>  "Dakneshwori Municipality",
                                "area_sq_km" =>  "69.11",
                                "website" =>  "http:\/\/www.dakneshworimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "242" =>  [
                                "id" =>  243,
                                "district_id" =>  21,
                                "category_id" =>  3,
                                "name" =>  "Hanumannagar Kankalini Municipality",
                                "area_sq_km" =>  "118.19",
                                "website" =>  "http:\/\/www.hanumannagarkankalinimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "243" =>  [
                                "id" =>  244,
                                "district_id" =>  21,
                                "category_id" =>  3,
                                "name" =>  "Kanchanrup Municipality",
                                "area_sq_km" =>  "117.34",
                                "website" =>  "http:\/\/www.kanchanrupmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "244" =>  [
                                "id" =>  245,
                                "district_id" =>  21,
                                "category_id" =>  3,
                                "name" =>  "Khadak Municipality",
                                "area_sq_km" =>  "96.77",
                                "website" =>  "http:\/\/www.khadakmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "245" =>  [
                                "id" =>  246,
                                "district_id" =>  21,
                                "category_id" =>  3,
                                "name" =>  "Shambhunath Municipality",
                                "area_sq_km" =>  "108.71",
                                "website" =>  "http:\/\/www.shambhunathmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "246" =>  [
                                "id" =>  247,
                                "district_id" =>  21,
                                "category_id" =>  3,
                                "name" =>  "Saptakoshi Municipality",
                                "area_sq_km" =>  "60.25",
                                "website" =>  "http:\/\/www.saptakoshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "247" =>  [
                                "id" =>  248,
                                "district_id" =>  21,
                                "category_id" =>  3,
                                "name" =>  "Surunga Municipality",
                                "area_sq_km" =>  "107.04",
                                "website" =>  "http:\/\/www.surungamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "248" =>  [
                                "id" =>  249,
                                "district_id" =>  21,
                                "category_id" =>  3,
                                "name" =>  "Rajbiraj Municipality",
                                "area_sq_km" =>  "55",
                                "website" =>  "http:\/\/www.rajbirajmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16
                                ]
                            ],
                            "249" =>  [
                                "id" =>  250,
                                "district_id" =>  21,
                                "category_id" =>  4,
                                "name" =>  "Agnisaira Krishnasavaran Rural Municipality",
                                "area_sq_km" =>  "103.08",
                                "website" =>  "http:\/\/www.agnisairkrishnasawaranmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "250" =>  [
                                "id" =>  251,
                                "district_id" =>  21,
                                "category_id" =>  4,
                                "name" =>  "Balan-Bihul Rural Municipality",
                                "area_sq_km" =>  "33.04",
                                "website" =>  "http:\/\/www.balanbihulmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "251" =>  [
                                "id" =>  252,
                                "district_id" =>  21,
                                "category_id" =>  4,
                                "name" =>  "Rajgadh Rural Municipality",
                                "area_sq_km" =>  "47.9",
                                "website" =>  "http:\/\/www.rajgadhmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "252" =>  [
                                "id" =>  253,
                                "district_id" =>  21,
                                "category_id" =>  4,
                                "name" =>  "Bishnupur Rural Municipality",
                                "area_sq_km" =>  "37",
                                "website" =>  "http:\/\/www.bishnupurmunsaptari.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "253" =>  [
                                "id" =>  254,
                                "district_id" =>  21,
                                "category_id" =>  4,
                                "name" =>  "Chhinnamasta Rural Municipality",
                                "area_sq_km" =>  "38.71",
                                "website" =>  "http:\/\/www.chhinnamastamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "254" =>  [
                                "id" =>  255,
                                "district_id" =>  21,
                                "category_id" =>  4,
                                "name" =>  "Mahadeva Rural Municipality",
                                "area_sq_km" =>  "34.97",
                                "website" =>  "http:\/\/www.mahadevamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "255" =>  [
                                "id" =>  256,
                                "district_id" =>  21,
                                "category_id" =>  4,
                                "name" =>  "Rupani Rural Municipality",
                                "area_sq_km" =>  "56.08",
                                "website" =>  "http:\/\/www.rupanimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "256" =>  [
                                "id" =>  257,
                                "district_id" =>  21,
                                "category_id" =>  4,
                                "name" =>  "Tilathi Koiladi Rural Municipality",
                                "area_sq_km" =>  "32.91",
                                "website" =>  "http:\/\/www.tilathikoiladimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "257" =>  [
                                "id" =>  258,
                                "district_id" =>  21,
                                "category_id" =>  4,
                                "name" =>  "Tirhut Rural Municipality",
                                "area_sq_km" =>  "37.81",
                                "website" =>  "http:\/\/www.tirahutmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "21" =>  [
                        "id" =>  22,
                        "province_id" =>  2,
                        "name" =>  "Mahottari",
                        "area_sq_km" =>  "1002",
                        "website" =>  "https:\/\/dccmahottari.gov.np\/",
                        "headquarter" =>  "Jaleshwar",
                        "municipalities" =>  [
                            "258" =>  [
                                "id" =>  259,
                                "district_id" =>  22,
                                "category_id" =>  3,
                                "name" =>  "Aaurahi Municipality",
                                "area_sq_km" =>  "35.76",
                                "website" =>  "http:\/\/www.aurahimunmahottari.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "259" =>  [
                                "id" =>  260,
                                "district_id" =>  22,
                                "category_id" =>  3,
                                "name" =>  "Balawa Municipality",
                                "area_sq_km" =>  "44.07",
                                "website" =>  "http:\/\/www.balwamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "260" =>  [
                                "id" =>  261,
                                "district_id" =>  22,
                                "category_id" =>  3,
                                "name" =>  "Bardibas Municipality",
                                "area_sq_km" =>  "315.57",
                                "website" =>  "http:\/\/www.bardibasmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "261" =>  [
                                "id" =>  262,
                                "district_id" =>  22,
                                "category_id" =>  3,
                                "name" =>  "Bhangaha Municipality",
                                "area_sq_km" =>  "77.21",
                                "website" =>  "http:\/\/www.bhagahamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "262" =>  [
                                "id" =>  263,
                                "district_id" =>  22,
                                "category_id" =>  3,
                                "name" =>  "Gaushala Municipality",
                                "area_sq_km" =>  "144.73",
                                "website" =>  "http:\/\/www.gaushalamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "263" =>  [
                                "id" =>  264,
                                "district_id" =>  22,
                                "category_id" =>  3,
                                "name" =>  "Jaleshor Municipality",
                                "area_sq_km" =>  "44.26",
                                "website" =>  "http:\/\/www.jaleshwormun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "264" =>  [
                                "id" =>  265,
                                "district_id" =>  22,
                                "category_id" =>  3,
                                "name" =>  "Loharpatti Municipality",
                                "area_sq_km" =>  "50.06",
                                "website" =>  "http:\/\/www.loharpattimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "265" =>  [
                                "id" =>  266,
                                "district_id" =>  22,
                                "category_id" =>  3,
                                "name" =>  "Manara Shiswa Municipality",
                                "area_sq_km" =>  "49.73",
                                "website" =>  "http:\/\/www.manrashiswamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "266" =>  [
                                "id" =>  267,
                                "district_id" =>  22,
                                "category_id" =>  3,
                                "name" =>  "Matihani Municipality",
                                "area_sq_km" =>  "29.02",
                                "website" =>  "http:\/\/www.matihanimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "267" =>  [
                                "id" =>  268,
                                "district_id" =>  22,
                                "category_id" =>  3,
                                "name" =>  "Ramgopalpur Municipality",
                                "area_sq_km" =>  "39.54",
                                "website" =>  "http:\/\/www.ramgopalpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "268" =>  [
                                "id" =>  269,
                                "district_id" =>  22,
                                "category_id" =>  4,
                                "name" =>  "Ekdara Rural Municipality",
                                "area_sq_km" =>  "24",
                                "website" =>  "http:\/\/www.ekdaramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "269" =>  [
                                "id" =>  270,
                                "district_id" =>  22,
                                "category_id" =>  4,
                                "name" =>  "Mahottari Rural Municipality",
                                "area_sq_km" =>  "28.08",
                                "website" =>  "http:\/\/www.mahottarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "270" =>  [
                                "id" =>  271,
                                "district_id" =>  22,
                                "category_id" =>  4,
                                "name" =>  "Pipara Rural Municipality",
                                "area_sq_km" =>  "39.98",
                                "website" =>  "http:\/\/www.pipramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "271" =>  [
                                "id" =>  272,
                                "district_id" =>  22,
                                "category_id" =>  4,
                                "name" =>  "Samsi Rural Municipality",
                                "area_sq_km" =>  "21.57",
                                "website" =>  "http:\/\/www.samsimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "272" =>  [
                                "id" =>  273,
                                "district_id" =>  22,
                                "category_id" =>  4,
                                "name" =>  "Sonama Rural Municipality",
                                "area_sq_km" =>  "57.77",
                                "website" =>  "http:\/\/www.sonmamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                "id" =>  3,
                "name" =>  "Bagmati",
                "area_sq_km" =>  "20300",
                "website" =>  "https:\/\/ocmcm.bagamati.gov.np\/",
                "headquarter" =>  "Hetauda",
                "districts" =>  [
                    "22" =>  [
                        "id" =>  23,
                        "province_id" =>  3,
                        "name" =>  "Bhaktapur",
                        "area_sq_km" =>  "119",
                        "website" =>  "https:\/\/dccbhaktapur.gov.np\/",
                        "headquarter" =>  "Bhaktapur",
                        "municipalities" =>  [
                            "273" =>  [
                                "id" =>  274,
                                "district_id" =>  23,
                                "category_id" =>  3,
                                "name" =>  "Bhaktapur Municipality",
                                "area_sq_km" =>  "6.89",
                                "website" =>  "http:\/\/www.bhaktapurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "274" =>  [
                                "id" =>  275,
                                "district_id" =>  23,
                                "category_id" =>  3,
                                "name" =>  "Changunarayan Municipality",
                                "area_sq_km" =>  "62.98",
                                "website" =>  "http:\/\/www.changunarayanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "275" =>  [
                                "id" =>  276,
                                "district_id" =>  23,
                                "category_id" =>  3,
                                "name" =>  "Suryabinayak Municipality",
                                "area_sq_km" =>  "42.45",
                                "website" =>  "http:\/\/www.suryabinayakmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "276" =>  [
                                "id" =>  277,
                                "district_id" =>  23,
                                "category_id" =>  3,
                                "name" =>  "Madhyapur Thimi Municipality",
                                "area_sq_km" =>  "11.47",
                                "website" =>  "http:\/\/www.madhyapurthimimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ]
                        ]
                    ],
                    "23" =>  [
                        "id" =>  24,
                        "province_id" =>  3,
                        "name" =>  "Chitwan",
                        "area_sq_km" =>  "2218",
                        "website" =>  "https:\/\/dccchitwan.gov.np\/",
                        "headquarter" =>  "Bharatpur",
                        "municipalities" =>  [
                            "277" =>  [
                                "id" =>  278,
                                "district_id" =>  24,
                                "category_id" =>  1,
                                "name" =>  "Bharatpur Metropolitan City",
                                "area_sq_km" =>  "432.95",
                                "website" =>  "http:\/\/www.bharatpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22,
                                    23,
                                    24,
                                    25,
                                    26,
                                    27,
                                    28,
                                    29
                                ]
                            ],
                            "278" =>  [
                                "id" =>  279,
                                "district_id" =>  24,
                                "category_id" =>  3,
                                "name" =>  "Kalika Municipality",
                                "area_sq_km" =>  "149.08",
                                "website" =>  "http:\/\/www.kalikamunchitwan.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "279" =>  [
                                "id" =>  280,
                                "district_id" =>  24,
                                "category_id" =>  3,
                                "name" =>  "Khairhani Municipality",
                                "area_sq_km" =>  "85.55",
                                "website" =>  "http:\/\/www.khairhanimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "280" =>  [
                                "id" =>  281,
                                "district_id" =>  24,
                                "category_id" =>  3,
                                "name" =>  "Madi Municipality",
                                "area_sq_km" =>  "218.24",
                                "website" =>  "http:\/\/www.madimunchitwan.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "281" =>  [
                                "id" =>  282,
                                "district_id" =>  24,
                                "category_id" =>  3,
                                "name" =>  "Ratnagar Municipality",
                                "area_sq_km" =>  "68.68",
                                "website" =>  "http:\/\/www.ratnanagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16
                                ]
                            ],
                            "282" =>  [
                                "id" =>  283,
                                "district_id" =>  24,
                                "category_id" =>  3,
                                "name" =>  "Rapti Municipality",
                                "area_sq_km" =>  "212.31",
                                "website" =>  "http:\/\/www.raptimunchitwan.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "283" =>  [
                                "id" =>  284,
                                "district_id" =>  24,
                                "category_id" =>  4,
                                "name" =>  "Ichchhakamana Rural Municipality",
                                "area_sq_km" =>  "166.73",
                                "website" =>  "http:\/\/www.ichchhakamanamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "24" =>  [
                        "id" =>  25,
                        "province_id" =>  3,
                        "name" =>  "Dhading",
                        "area_sq_km" =>  "1926",
                        "website" =>  "https:\/\/dccdhading.gov.np\/",
                        "headquarter" =>  "Nilkantha",
                        "municipalities" =>  [
                            "284" =>  [
                                "id" =>  285,
                                "district_id" =>  25,
                                "category_id" =>  3,
                                "name" =>  "Dhunibeshi Municipality",
                                "area_sq_km" =>  "96.3",
                                "website" =>  "http:\/\/www.dhunibeshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "285" =>  [
                                "id" =>  286,
                                "district_id" =>  25,
                                "category_id" =>  3,
                                "name" =>  "Nilkantha Municipality",
                                "area_sq_km" =>  "197.7",
                                "website" =>  "http:\/\/www.neelakanthamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "286" =>  [
                                "id" =>  287,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Khaniyabas Rural Municipality",
                                "area_sq_km" =>  "120.8",
                                "website" =>  "http:\/\/www.khaniyabasmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "287" =>  [
                                "id" =>  288,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Gajuri Rural Municipality",
                                "area_sq_km" =>  "138.66",
                                "website" =>  "http:\/\/www.gajurimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "288" =>  [
                                "id" =>  289,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Galchhi Rural Municipality",
                                "area_sq_km" =>  "129.08",
                                "website" =>  "http:\/\/www.galchhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "289" =>  [
                                "id" =>  290,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Gangajamuna Rural Municipality",
                                "area_sq_km" =>  "152.72",
                                "website" =>  "http:\/\/www.gangajamunamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "290" =>  [
                                "id" =>  291,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Jwalamukhi Rural Municipality",
                                "area_sq_km" =>  "114.04",
                                "website" =>  "http:\/\/www.jwalamukhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "291" =>  [
                                "id" =>  292,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Thakre Rural Municipality",
                                "area_sq_km" =>  "96.41",
                                "website" =>  "http:\/\/www.thakremun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "292" =>  [
                                "id" =>  293,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Netrawati Dabjong Rural Municipality",
                                "area_sq_km" =>  "181.78",
                                "website" =>  "http:\/\/www.netrawatimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "293" =>  [
                                "id" =>  294,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Benighat Rorang Rural Municipality",
                                "area_sq_km" =>  "206.52",
                                "website" =>  "http:\/\/www.benighatrorangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "294" =>  [
                                "id" =>  295,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Rubi Valley Rural Municipality",
                                "area_sq_km" =>  "401.85",
                                "website" =>  "http:\/\/www.rubivalleymun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "295" =>  [
                                "id" =>  296,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Siddhalek Rural Municipality",
                                "area_sq_km" =>  "106.09",
                                "website" =>  "http:\/\/www.siddhalekmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "296" =>  [
                                "id" =>  297,
                                "district_id" =>  25,
                                "category_id" =>  4,
                                "name" =>  "Tripurasundari Rural Municipality",
                                "area_sq_km" =>  "271.23",
                                "website" =>  "http:\/\/www.tripurasundarimundhading.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "25" =>  [
                        "id" =>  26,
                        "province_id" =>  3,
                        "name" =>  "Dolakha",
                        "area_sq_km" =>  "2191",
                        "website" =>  "https:\/\/dccdolakha.gov.np\/",
                        "headquarter" =>  "Bhimeshwar",
                        "municipalities" =>  [
                            "297" =>  [
                                "id" =>  298,
                                "district_id" =>  26,
                                "category_id" =>  3,
                                "name" =>  "Bhimeswor Municipality",
                                "area_sq_km" =>  "132.5",
                                "website" =>  "http:\/\/www.bhimeshwormun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "298" =>  [
                                "id" =>  299,
                                "district_id" =>  26,
                                "category_id" =>  3,
                                "name" =>  "Jiri Municipality",
                                "area_sq_km" =>  "211.27",
                                "website" =>  "http:\/\/www.jirimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "299" =>  [
                                "id" =>  300,
                                "district_id" =>  26,
                                "category_id" =>  4,
                                "name" =>  "Kalinchok Rural Municipality",
                                "area_sq_km" =>  "132.49",
                                "website" =>  "http:\/\/www.kalinchowkmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "300" =>  [
                                "id" =>  301,
                                "district_id" =>  26,
                                "category_id" =>  4,
                                "name" =>  "Melung Rural Municipality",
                                "area_sq_km" =>  "86.54",
                                "website" =>  "http:\/\/www.melungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "301" =>  [
                                "id" =>  302,
                                "district_id" =>  26,
                                "category_id" =>  4,
                                "name" =>  "Bigu Rural Municipality",
                                "area_sq_km" =>  "663.2",
                                "website" =>  "http:\/\/www.bigumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "302" =>  [
                                "id" =>  303,
                                "district_id" =>  26,
                                "category_id" =>  4,
                                "name" =>  "Gaurishankar Rural Municipality",
                                "area_sq_km" =>  "681.39",
                                "website" =>  "http:\/\/www.gaurishankarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "303" =>  [
                                "id" =>  304,
                                "district_id" =>  26,
                                "category_id" =>  4,
                                "name" =>  "Baiteshowr Rural Municipality",
                                "area_sq_km" =>  "80.41",
                                "website" =>  "http:\/\/www.baiteshwormun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "304" =>  [
                                "id" =>  305,
                                "district_id" =>  26,
                                "category_id" =>  4,
                                "name" =>  "Sailung Rural Municipality",
                                "area_sq_km" =>  "128.67",
                                "website" =>  "http:\/\/www.shailungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "305" =>  [
                                "id" =>  306,
                                "district_id" =>  26,
                                "category_id" =>  4,
                                "name" =>  "Tamakoshi Rural Municipality",
                                "area_sq_km" =>  "153.06",
                                "website" =>  "http:\/\/www.tamakoshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "26" =>  [
                        "id" =>  27,
                        "province_id" =>  3,
                        "name" =>  "Kathmandu",
                        "area_sq_km" =>  "395",
                        "website" =>  "https:\/\/dccktm.gov.np\/",
                        "headquarter" =>  "Kathmandu",
                        "municipalities" =>  [
                            "306" =>  [
                                "id" =>  307,
                                "district_id" =>  27,
                                "category_id" =>  1,
                                "name" =>  "Kathmandu Metropolitan City",
                                "area_sq_km" =>  "49.45",
                                "website" =>  "http:\/\/www.kathmandu.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22,
                                    23,
                                    24,
                                    25,
                                    26,
                                    27,
                                    28,
                                    29,
                                    30,
                                    31,
                                    32
                                ]
                            ],
                            "307" =>  [
                                "id" =>  308,
                                "district_id" =>  27,
                                "category_id" =>  3,
                                "name" =>  "Gokarneshwar Municipality",
                                "area_sq_km" =>  "58.5",
                                "website" =>  "http:\/\/www.gokarneshwormun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "308" =>  [
                                "id" =>  309,
                                "district_id" =>  27,
                                "category_id" =>  3,
                                "name" =>  "Kirtipur Municipality",
                                "area_sq_km" =>  "14.76",
                                "website" =>  "http:\/\/www.kirtipurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "309" =>  [
                                "id" =>  310,
                                "district_id" =>  27,
                                "category_id" =>  3,
                                "name" =>  "Kageshwari-Manohara Municipality",
                                "area_sq_km" =>  "27.38",
                                "website" =>  "http:\/\/www.kageshworimanoharamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "310" =>  [
                                "id" =>  311,
                                "district_id" =>  27,
                                "category_id" =>  3,
                                "name" =>  "Chandragiri Municipality",
                                "area_sq_km" =>  "43.92",
                                "website" =>  "http:\/\/www.chandragirimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15
                                ]
                            ],
                            "311" =>  [
                                "id" =>  312,
                                "district_id" =>  27,
                                "category_id" =>  3,
                                "name" =>  "Tokha Municipality",
                                "area_sq_km" =>  "17.11",
                                "website" =>  "http:\/\/www.tokhamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "312" =>  [
                                "id" =>  313,
                                "district_id" =>  27,
                                "category_id" =>  3,
                                "name" =>  "Tarakeshwar Municipality",
                                "area_sq_km" =>  "54.95",
                                "website" =>  "http:\/\/www.tarakeshwormunkathmandu.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "313" =>  [
                                "id" =>  314,
                                "district_id" =>  27,
                                "category_id" =>  3,
                                "name" =>  "Dakshinkali Municipality",
                                "area_sq_km" =>  "42.68",
                                "website" =>  "http:\/\/www.dakshinkalimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "314" =>  [
                                "id" =>  315,
                                "district_id" =>  27,
                                "category_id" =>  3,
                                "name" =>  "Nagarjun Municipality",
                                "area_sq_km" =>  "29.85",
                                "website" =>  "http:\/\/www.nagarjunmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "315" =>  [
                                "id" =>  316,
                                "district_id" =>  27,
                                "category_id" =>  3,
                                "name" =>  "Budhalikantha Municipality",
                                "area_sq_km" =>  "34.8",
                                "website" =>  "http:\/\/www.budhanilkanthamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "316" =>  [
                                "id" =>  317,
                                "district_id" =>  27,
                                "category_id" =>  3,
                                "name" =>  "Shankharapur Municipality",
                                "area_sq_km" =>  "60.21",
                                "website" =>  "http:\/\/www.shankharapurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ]
                        ]
                    ],
                    "27" =>  [
                        "id" =>  28,
                        "province_id" =>  3,
                        "name" =>  "Kavrepalanchok",
                        "area_sq_km" =>  "1396",
                        "website" =>  "https:\/\/dcckavre.gov.np\/",
                        "headquarter" =>  "Dhulikhel",
                        "municipalities" =>  [
                            "317" =>  [
                                "id" =>  318,
                                "district_id" =>  28,
                                "category_id" =>  3,
                                "name" =>  "Dhulikhel Municipality",
                                "area_sq_km" =>  "55",
                                "website" =>  "http:\/\/www.dhulikhelmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "318" =>  [
                                "id" =>  319,
                                "district_id" =>  28,
                                "category_id" =>  3,
                                "name" =>  "Namobuddha Municipality",
                                "area_sq_km" =>  "102",
                                "website" =>  "http:\/\/www.namobuddhamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "319" =>  [
                                "id" =>  320,
                                "district_id" =>  28,
                                "category_id" =>  3,
                                "name" =>  "Panauti Municipality",
                                "area_sq_km" =>  "118",
                                "website" =>  "http:\/\/www.panautimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "320" =>  [
                                "id" =>  321,
                                "district_id" =>  28,
                                "category_id" =>  3,
                                "name" =>  "Panchkhal Municipality",
                                "area_sq_km" =>  "103",
                                "website" =>  "http:\/\/www.panchkhalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "321" =>  [
                                "id" =>  322,
                                "district_id" =>  28,
                                "category_id" =>  3,
                                "name" =>  "Banepa Municipality",
                                "area_sq_km" =>  "55",
                                "website" =>  "http:\/\/www.banepamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "322" =>  [
                                "id" =>  323,
                                "district_id" =>  28,
                                "category_id" =>  3,
                                "name" =>  "Mandandeupur Municipality",
                                "area_sq_km" =>  "89",
                                "website" =>  "http:\/\/www.mandandeupurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "323" =>  [
                                "id" =>  324,
                                "district_id" =>  28,
                                "category_id" =>  4,
                                "name" =>  "Khani Khola Rural Municipality",
                                "area_sq_km" =>  "132",
                                "website" =>  "http:\/\/www.khanikholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "324" =>  [
                                "id" =>  325,
                                "district_id" =>  28,
                                "category_id" =>  4,
                                "name" =>  "Chauri Deurali Rural Municipality",
                                "area_sq_km" =>  "98",
                                "website" =>  "http:\/\/www.chaurideuralimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "325" =>  [
                                "id" =>  326,
                                "district_id" =>  28,
                                "category_id" =>  4,
                                "name" =>  "Temal Rural Municipality",
                                "area_sq_km" =>  "89",
                                "website" =>  "http:\/\/www.temalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "326" =>  [
                                "id" =>  327,
                                "district_id" =>  28,
                                "category_id" =>  4,
                                "name" =>  "Bethanchok Rural Municipality",
                                "area_sq_km" =>  "101",
                                "website" =>  "http:\/\/www.bethanchowkmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4
                                ]
                            ],
                            "327" =>  [
                                "id" =>  328,
                                "district_id" =>  28,
                                "category_id" =>  4,
                                "name" =>  "Bhumlu Rural Municipality",
                                "area_sq_km" =>  "91",
                                "website" =>  "http:\/\/www.bhumlumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "328" =>  [
                                "id" =>  329,
                                "district_id" =>  28,
                                "category_id" =>  4,
                                "name" =>  "Mahabharat Rural Municipality",
                                "area_sq_km" =>  "186",
                                "website" =>  "http:\/\/www.mahabharatmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "329" =>  [
                                "id" =>  330,
                                "district_id" =>  28,
                                "category_id" =>  4,
                                "name" =>  "Roshi Rural Municipality",
                                "area_sq_km" =>  "176",
                                "website" =>  "http:\/\/www.roshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ]
                        ]
                    ],
                    "28" =>  [
                        "id" =>  29,
                        "province_id" =>  3,
                        "name" =>  "Lalitpur",
                        "area_sq_km" =>  "385",
                        "website" =>  "https:\/\/dcclalitpur.gov.np\/",
                        "headquarter" =>  "Lalitpur",
                        "municipalities" =>  [
                            "330" =>  [
                                "id" =>  331,
                                "district_id" =>  29,
                                "category_id" =>  1,
                                "name" =>  "Lalitpur Metropolitan City",
                                "area_sq_km" =>  "36.12",
                                "website" =>  "http:\/\/www.lalitpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22,
                                    23,
                                    24,
                                    25,
                                    26,
                                    27,
                                    28,
                                    29
                                ]
                            ],
                            "331" =>  [
                                "id" =>  332,
                                "district_id" =>  29,
                                "category_id" =>  3,
                                "name" =>  "Mahalaxmi Municipality",
                                "area_sq_km" =>  "26.51",
                                "website" =>  "http:\/\/www.mahalaxmimunlalitpur.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "332" =>  [
                                "id" =>  333,
                                "district_id" =>  29,
                                "category_id" =>  3,
                                "name" =>  "Godawari Municipality",
                                "area_sq_km" =>  "96.11",
                                "website" =>  "http:\/\/www.godawarimunlalitpur.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "333" =>  [
                                "id" =>  334,
                                "district_id" =>  29,
                                "category_id" =>  4,
                                "name" =>  "Konjyosom Rural Municipality",
                                "area_sq_km" =>  "44.16",
                                "website" =>  "http:\/\/www.konjyosommun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "334" =>  [
                                "id" =>  335,
                                "district_id" =>  29,
                                "category_id" =>  4,
                                "name" =>  "Bagmati Rural Municipality",
                                "area_sq_km" =>  "111.49",
                                "website" =>  "http:\/\/www.bagmatimunlalitpur.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "335" =>  [
                                "id" =>  336,
                                "district_id" =>  29,
                                "category_id" =>  4,
                                "name" =>  "Mahankal Rural Municipality",
                                "area_sq_km" =>  "82.44",
                                "website" =>  "http:\/\/www.mahankalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    "29" =>  [
                        "id" =>  30,
                        "province_id" =>  3,
                        "name" =>  "Makwanpur",
                        "area_sq_km" =>  "2426",
                        "website" =>  "https:\/\/dccmakwanpur.gov.np\/",
                        "headquarter" =>  "Hetauda",
                        "municipalities" =>  [
                            "336" =>  [
                                "id" =>  337,
                                "district_id" =>  30,
                                "category_id" =>  2,
                                "name" =>  "Hetauda Sub-Metropolitan City",
                                "area_sq_km" =>  "261.59",
                                "website" =>  "http:\/\/www.hetaudamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19
                                ]
                            ],
                            "337" =>  [
                                "id" =>  338,
                                "district_id" =>  30,
                                "category_id" =>  3,
                                "name" =>  "Thaha Municipality",
                                "area_sq_km" =>  "191.12",
                                "website" =>  "http:\/\/www.thahamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "338" =>  [
                                "id" =>  339,
                                "district_id" =>  30,
                                "category_id" =>  4,
                                "name" =>  "Bhimphedi Rural Municipality",
                                "area_sq_km" =>  "245.27",
                                "website" =>  "http:\/\/www.bhimphedimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "339" =>  [
                                "id" =>  340,
                                "district_id" =>  30,
                                "category_id" =>  4,
                                "name" =>  "Makawanpurgadhi Rural Municipality",
                                "area_sq_km" =>  "148.72",
                                "website" =>  "http:\/\/www.makawanpurgadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "340" =>  [
                                "id" =>  341,
                                "district_id" =>  30,
                                "category_id" =>  4,
                                "name" =>  "Manahari Rural Municipality",
                                "area_sq_km" =>  "199.52",
                                "website" =>  "http:\/\/www.manaharimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "341" =>  [
                                "id" =>  342,
                                "district_id" =>  30,
                                "category_id" =>  4,
                                "name" =>  "Raksirang Rural Municipality",
                                "area_sq_km" =>  "226.7",
                                "website" =>  "http:\/\/www.raksirangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "342" =>  [
                                "id" =>  343,
                                "district_id" =>  30,
                                "category_id" =>  4,
                                "name" =>  "Bakaiya Rural Municipality",
                                "area_sq_km" =>  "393.75",
                                "website" =>  "http:\/\/www.bakaiyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "343" =>  [
                                "id" =>  344,
                                "district_id" =>  30,
                                "category_id" =>  4,
                                "name" =>  "Bagmati Rural Municipality",
                                "area_sq_km" =>  "311.79",
                                "website" =>  "http:\/\/www.bagmatimunmakawanpur.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "344" =>  [
                                "id" =>  345,
                                "district_id" =>  30,
                                "category_id" =>  4,
                                "name" =>  "Kailash Rural Municipality",
                                "area_sq_km" =>  "204.48",
                                "website" =>  "http:\/\/www.kailashmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "345" =>  [
                                "id" =>  346,
                                "district_id" =>  30,
                                "category_id" =>  4,
                                "name" =>  "Indrasarowar Rural Municipality",
                                "area_sq_km" =>  "97.34",
                                "website" =>  "http:\/\/www.indrasarowarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "30" =>  [
                        "id" =>  31,
                        "province_id" =>  3,
                        "name" =>  "Nuwakot",
                        "area_sq_km" =>  "1121",
                        "website" =>  "https:\/\/dccnuwakot.gov.np\/",
                        "headquarter" =>  "Bidur",
                        "municipalities" =>  [
                            "346" =>  [
                                "id" =>  347,
                                "district_id" =>  31,
                                "category_id" =>  3,
                                "name" =>  "Bidur Municipality",
                                "area_sq_km" =>  "130.01",
                                "website" =>  "http:\/\/www.bidurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "347" =>  [
                                "id" =>  348,
                                "district_id" =>  31,
                                "category_id" =>  3,
                                "name" =>  "Belkotgadhi Municipality",
                                "area_sq_km" =>  "155.6",
                                "website" =>  "http:\/\/www.belkotgadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "348" =>  [
                                "id" =>  349,
                                "district_id" =>  31,
                                "category_id" =>  4,
                                "name" =>  "Kakani Rural Municipality",
                                "area_sq_km" =>  "87.97",
                                "website" =>  "http:\/\/www.kakanimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "349" =>  [
                                "id" =>  350,
                                "district_id" =>  31,
                                "category_id" =>  4,
                                "name" =>  "Panchakanya Rural Municipality",
                                "area_sq_km" =>  "53.47",
                                "website" =>  "http:\/\/www.panchakanyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "350" =>  [
                                "id" =>  351,
                                "district_id" =>  31,
                                "category_id" =>  4,
                                "name" =>  "Likhu Rural Municipality",
                                "area_sq_km" =>  "47.88",
                                "website" =>  "http:\/\/www.likhumunnuwakot.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "351" =>  [
                                "id" =>  352,
                                "district_id" =>  31,
                                "category_id" =>  4,
                                "name" =>  "Dupcheshwar Rural Municipality",
                                "area_sq_km" =>  "131.62",
                                "website" =>  "http:\/\/www.dupcheshwormun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "352" =>  [
                                "id" =>  353,
                                "district_id" =>  31,
                                "category_id" =>  4,
                                "name" =>  "Shivapuri Rural Municipality",
                                "area_sq_km" =>  "101.5",
                                "website" =>  "http:\/\/www.shivapurimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "353" =>  [
                                "id" =>  354,
                                "district_id" =>  31,
                                "category_id" =>  4,
                                "name" =>  "Tadi Rural Municipality",
                                "area_sq_km" =>  "69.8",
                                "website" =>  "http:\/\/www.tadimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "354" =>  [
                                "id" =>  355,
                                "district_id" =>  31,
                                "category_id" =>  4,
                                "name" =>  "Suryagadhi Rural Municipality",
                                "area_sq_km" =>  "49.09",
                                "website" =>  "http:\/\/www.suryagadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "355" =>  [
                                "id" =>  356,
                                "district_id" =>  31,
                                "category_id" =>  4,
                                "name" =>  "Tarkeshwar Rural Municipality",
                                "area_sq_km" =>  "72.62",
                                "website" =>  "http:\/\/www.tarakeshwormunnuwakot.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "356" =>  [
                                "id" =>  357,
                                "district_id" =>  31,
                                "category_id" =>  4,
                                "name" =>  "Kispang Rural Municipality",
                                "area_sq_km" =>  "82.57",
                                "website" =>  "http:\/\/www.kispangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "357" =>  [
                                "id" =>  358,
                                "district_id" =>  31,
                                "category_id" =>  4,
                                "name" =>  "Myagang Rural Municipality",
                                "area_sq_km" =>  "97.83",
                                "website" =>  "http:\/\/www.meghangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    "31" =>  [
                        "id" =>  32,
                        "province_id" =>  3,
                        "name" =>  "Ramechap",
                        "area_sq_km" =>  "1546",
                        "website" =>  "https:\/\/dccramechhap.gov.np\/",
                        "headquarter" =>  "Manthali",
                        "municipalities" =>  [
                            "358" =>  [
                                "id" =>  359,
                                "district_id" =>  32,
                                "category_id" =>  3,
                                "name" =>  "Manthali Municipality",
                                "area_sq_km" =>  "211.78",
                                "website" =>  "http:\/\/www.manthalimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "359" =>  [
                                "id" =>  360,
                                "district_id" =>  32,
                                "category_id" =>  3,
                                "name" =>  "Ramechhap Municipality",
                                "area_sq_km" =>  "202.45",
                                "website" =>  "http:\/\/www.ramechhapmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "360" =>  [
                                "id" =>  361,
                                "district_id" =>  32,
                                "category_id" =>  4,
                                "name" =>  "Umakunda Rural Municipality",
                                "area_sq_km" =>  "451.99",
                                "website" =>  "http:\/\/www.umakundamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "361" =>  [
                                "id" =>  362,
                                "district_id" =>  32,
                                "category_id" =>  4,
                                "name" =>  "Khandadevi Rural Municipality",
                                "area_sq_km" =>  "150.7",
                                "website" =>  "http:\/\/www.khandadevimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "362" =>  [
                                "id" =>  363,
                                "district_id" =>  32,
                                "category_id" =>  4,
                                "name" =>  "Doramba Rural Municipality",
                                "area_sq_km" =>  "140.88",
                                "website" =>  "http:\/\/www.dorambamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "363" =>  [
                                "id" =>  364,
                                "district_id" =>  32,
                                "category_id" =>  4,
                                "name" =>  "Gokulganga Rural Municipality",
                                "area_sq_km" =>  "198.4",
                                "website" =>  "http:\/\/www.gokulgangamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "364" =>  [
                                "id" =>  365,
                                "district_id" =>  32,
                                "category_id" =>  4,
                                "name" =>  "LikhuTamakoshi Rural Municipality",
                                "area_sq_km" =>  "124.51",
                                "website" =>  "http:\/\/www.likhumunramechhap.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "365" =>  [
                                "id" =>  366,
                                "district_id" =>  32,
                                "category_id" =>  4,
                                "name" =>  "Sunapati Rural Municipality",
                                "area_sq_km" =>  "86.98",
                                "website" =>  "http:\/\/www.sunapatimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "32" =>  [
                        "id" =>  33,
                        "province_id" =>  3,
                        "name" =>  "Rasuwa",
                        "area_sq_km" =>  "1544",
                        "website" =>  "https:\/\/dccrasuwa.gov.np\/",
                        "headquarter" =>  "Dhunche",
                        "municipalities" =>  [
                            "366" =>  [
                                "id" =>  367,
                                "district_id" =>  33,
                                "category_id" =>  4,
                                "name" =>  "Kalika Rural Municipality",
                                "area_sq_km" =>  "192.54",
                                "website" =>  "http:\/\/www.kalikamunrasuwa.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "367" =>  [
                                "id" =>  368,
                                "district_id" =>  33,
                                "category_id" =>  4,
                                "name" =>  "Gosaikunda Rural Municipality",
                                "area_sq_km" =>  "978.77",
                                "website" =>  "http:\/\/www.gosaikundamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "368" =>  [
                                "id" =>  369,
                                "district_id" =>  33,
                                "category_id" =>  4,
                                "name" =>  "Naukunda Rural Municipality",
                                "area_sq_km" =>  "126.99",
                                "website" =>  "http:\/\/www.naukundamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "369" =>  [
                                "id" =>  370,
                                "district_id" =>  33,
                                "category_id" =>  4,
                                "name" =>  "Parbatikunda Rural Municipality",
                                "area_sq_km" =>  "682.23",
                                "website" =>  "http:\/\/www.parbatikundamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "370" =>  [
                                "id" =>  371,
                                "district_id" =>  33,
                                "category_id" =>  4,
                                "name" =>  "Uttargaya Rural Municipality",
                                "area_sq_km" =>  "104.51",
                                "website" =>  "http:\/\/www.uttargayamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "33" =>  [
                        "id" =>  34,
                        "province_id" =>  3,
                        "name" =>  "Sindhuli",
                        "area_sq_km" =>  "2491",
                        "website" =>  "https:\/\/dccsindhuli.gov.np\/",
                        "headquarter" =>  "Kamalamai",
                        "municipalities" =>  [
                            "371" =>  [
                                "id" =>  372,
                                "district_id" =>  34,
                                "category_id" =>  3,
                                "name" =>  "Kamalamai Municipality",
                                "area_sq_km" =>  "428.57",
                                "website" =>  "http:\/\/www.kamalamaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "372" =>  [
                                "id" =>  373,
                                "district_id" =>  34,
                                "category_id" =>  3,
                                "name" =>  "Dudhauli Municipality",
                                "area_sq_km" =>  "390.39",
                                "website" =>  "http:\/\/www.dudhaulimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "373" =>  [
                                "id" =>  374,
                                "district_id" =>  34,
                                "category_id" =>  4,
                                "name" =>  "Sunkoshi Rural Municipality",
                                "area_sq_km" =>  "154.68",
                                "website" =>  "http:\/\/www.sunkoshimunsindhuli.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "374" =>  [
                                "id" =>  375,
                                "district_id" =>  34,
                                "category_id" =>  4,
                                "name" =>  "Hariharpurgadhi Rural Municipality",
                                "area_sq_km" =>  "343.9",
                                "website" =>  "http:\/\/www.hariharpurgadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "375" =>  [
                                "id" =>  376,
                                "district_id" =>  34,
                                "category_id" =>  4,
                                "name" =>  "Tinpatan Rural Municipality",
                                "area_sq_km" =>  "280.26",
                                "website" =>  "http:\/\/www.tinpatanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "376" =>  [
                                "id" =>  377,
                                "district_id" =>  34,
                                "category_id" =>  4,
                                "name" =>  "Marin Rural Municipality",
                                "area_sq_km" =>  "324.55",
                                "website" =>  "http:\/\/www.marinmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "377" =>  [
                                "id" =>  378,
                                "district_id" =>  34,
                                "category_id" =>  4,
                                "name" =>  "Golanjor Rural Municipality",
                                "area_sq_km" =>  "184.13",
                                "website" =>  "http:\/\/www.golanjormun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "378" =>  [
                                "id" =>  379,
                                "district_id" =>  34,
                                "category_id" =>  4,
                                "name" =>  "Phikkal Rural Municipality",
                                "area_sq_km" =>  "186.06",
                                "website" =>  "http:\/\/www.phikkalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "379" =>  [
                                "id" =>  380,
                                "district_id" =>  34,
                                "category_id" =>  4,
                                "name" =>  "Ghyanglekh Rural Municipality",
                                "area_sq_km" =>  "166.77",
                                "website" =>  "http:\/\/www.ghyanglekhmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "34" =>  [
                        "id" =>  35,
                        "province_id" =>  3,
                        "name" =>  "Sindhupalchok",
                        "area_sq_km" =>  "2542",
                        "website" =>  "https:\/\/dccsindhupalchowk.gov.np\/",
                        "headquarter" =>  "Chautara",
                        "municipalities" =>  [
                            "380" =>  [
                                "id" =>  381,
                                "district_id" =>  35,
                                "category_id" =>  3,
                                "name" =>  "Chautara Sangachowkgadi Municipality",
                                "area_sq_km" =>  "165.25",
                                "website" =>  "http:\/\/www.chautarasangachowkgadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "381" =>  [
                                "id" =>  382,
                                "district_id" =>  35,
                                "category_id" =>  3,
                                "name" =>  "Bahrabise Municipality",
                                "area_sq_km" =>  "96.73",
                                "website" =>  "http:\/\/www.bahrabisemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "382" =>  [
                                "id" =>  383,
                                "district_id" =>  35,
                                "category_id" =>  3,
                                "name" =>  "Melamchi Municipality",
                                "area_sq_km" =>  "158.17",
                                "website" =>  "http:\/\/www.melamchimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "383" =>  [
                                "id" =>  384,
                                "district_id" =>  35,
                                "category_id" =>  4,
                                "name" =>  "Balephi Rural Municipality",
                                "area_sq_km" =>  "61.6",
                                "website" =>  "http:\/\/www.balephimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "384" =>  [
                                "id" =>  385,
                                "district_id" =>  35,
                                "category_id" =>  4,
                                "name" =>  "Sunkoshi Rural Municipality",
                                "area_sq_km" =>  "71.84",
                                "website" =>  "http:\/\/www.sunkoshimunsindhupalchowk.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "385" =>  [
                                "id" =>  386,
                                "district_id" =>  35,
                                "category_id" =>  4,
                                "name" =>  "Indrawati Rural Municipality",
                                "area_sq_km" =>  "105.09",
                                "website" =>  "http:\/\/www.indrawatimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "386" =>  [
                                "id" =>  387,
                                "district_id" =>  35,
                                "category_id" =>  4,
                                "name" =>  "Jugal Rural Municipality",
                                "area_sq_km" =>  "273.62",
                                "website" =>  "http:\/\/www.jugalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "387" =>  [
                                "id" =>  388,
                                "district_id" =>  35,
                                "category_id" =>  4,
                                "name" =>  "Panchpokhari Rural Municipality",
                                "area_sq_km" =>  "187.29",
                                "website" =>  "http:\/\/www.panchpokharithangpalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "388" =>  [
                                "id" =>  389,
                                "district_id" =>  35,
                                "category_id" =>  4,
                                "name" =>  "Bhotekoshi Rural Municipality",
                                "area_sq_km" =>  "278.31",
                                "website" =>  "http:\/\/www.bhotekoshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "389" =>  [
                                "id" =>  390,
                                "district_id" =>  35,
                                "category_id" =>  4,
                                "name" =>  "Lisankhu Rural Municipality",
                                "area_sq_km" =>  "98.61",
                                "website" =>  "http:\/\/www.lisankhupakharmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "390" =>  [
                                "id" =>  391,
                                "district_id" =>  35,
                                "category_id" =>  4,
                                "name" =>  "Helambu Rural Municipality",
                                "area_sq_km" =>  "287.26",
                                "website" =>  "http:\/\/www.helambumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "391" =>  [
                                "id" =>  392,
                                "district_id" =>  35,
                                "category_id" =>  4,
                                "name" =>  "Tripurasundari Rural Municipality",
                                "area_sq_km" =>  "94.28",
                                "website" =>  "http:\/\/www.tripurasundarimunsindhupalchowk.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                "id" =>  4,
                "name" =>  "Gandaki",
                "area_sq_km" =>  "21856",
                "website" =>  "https:\/\/gandaki.gov.np\/",
                "headquarter" =>  "Pokhara",
                "districts" =>  [
                    "35" =>  [
                        "id" =>  36,
                        "province_id" =>  4,
                        "name" =>  "Baglung",
                        "area_sq_km" =>  "1784",
                        "website" =>  "https:\/\/dccbaglung.gov.np\/",
                        "headquarter" =>  "Baglung",
                        "municipalities" =>  [
                            "392" =>  [
                                "id" =>  393,
                                "district_id" =>  36,
                                "category_id" =>  3,
                                "name" =>  "Baglung Municipality",
                                "area_sq_km" =>  "98.01",
                                "website" =>  "http:\/\/www.baglungmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "393" =>  [
                                "id" =>  394,
                                "district_id" =>  36,
                                "category_id" =>  3,
                                "name" =>  "Dhorpatan Municipality",
                                "area_sq_km" =>  "222.85",
                                "website" =>  "http:\/\/www.dhorpatanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "394" =>  [
                                "id" =>  395,
                                "district_id" =>  36,
                                "category_id" =>  3,
                                "name" =>  "Galkot Municipality",
                                "area_sq_km" =>  "194.39",
                                "website" =>  "http:\/\/www.galkotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "395" =>  [
                                "id" =>  396,
                                "district_id" =>  36,
                                "category_id" =>  3,
                                "name" =>  "Jaimuni Municipality",
                                "area_sq_km" =>  "118.71",
                                "website" =>  "http:\/\/www.jaiminimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "396" =>  [
                                "id" =>  397,
                                "district_id" =>  36,
                                "category_id" =>  4,
                                "name" =>  "Bareng Rural Municipality",
                                "area_sq_km" =>  "75.28",
                                "website" =>  "http:\/\/www.barengmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "397" =>  [
                                "id" =>  398,
                                "district_id" =>  36,
                                "category_id" =>  4,
                                "name" =>  "Khathekhola Rural Municipality",
                                "area_sq_km" =>  "82.88",
                                "website" =>  "http:\/\/www.kathekholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "398" =>  [
                                "id" =>  399,
                                "district_id" =>  36,
                                "category_id" =>  4,
                                "name" =>  "Taman Khola Rural Municipality",
                                "area_sq_km" =>  "178.02",
                                "website" =>  "http:\/\/www.tamankholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "399" =>  [
                                "id" =>  400,
                                "district_id" =>  36,
                                "category_id" =>  4,
                                "name" =>  "Tara Khola Rural Municipality",
                                "area_sq_km" =>  "129.53",
                                "website" =>  "http:\/\/www.tarakholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "400" =>  [
                                "id" =>  401,
                                "district_id" =>  36,
                                "category_id" =>  4,
                                "name" =>  "Nishi Khola Rural Municipality",
                                "area_sq_km" =>  "244.37",
                                "website" =>  "http:\/\/www.nisikholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "401" =>  [
                                "id" =>  402,
                                "district_id" =>  36,
                                "category_id" =>  4,
                                "name" =>  "Badigad Rural Municipality",
                                "area_sq_km" =>  "178.68",
                                "website" =>  "http:\/\/www.badigadmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ]
                        ]
                    ],
                    "36" =>  [
                        "id" =>  37,
                        "province_id" =>  4,
                        "name" =>  "Gorkha",
                        "area_sq_km" =>  "3610",
                        "website" =>  "https:\/\/dccgorkha.gov.np\/",
                        "headquarter" =>  "Gorkha",
                        "municipalities" =>  [
                            "402" =>  [
                                "id" =>  403,
                                "district_id" =>  37,
                                "category_id" =>  3,
                                "name" =>  "Gorkha Municipality",
                                "area_sq_km" =>  "131.86",
                                "website" =>  "http:\/\/www.gorkhamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "403" =>  [
                                "id" =>  404,
                                "district_id" =>  37,
                                "category_id" =>  3,
                                "name" =>  "Palungtar Municipality",
                                "area_sq_km" =>  "158.62",
                                "website" =>  "http:\/\/www.palungtarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "404" =>  [
                                "id" =>  405,
                                "district_id" =>  37,
                                "category_id" =>  4,
                                "name" =>  "Sulikot Rural Municipality",
                                "area_sq_km" =>  "200.63",
                                "website" =>  "http:\/\/www.sulikotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "405" =>  [
                                "id" =>  406,
                                "district_id" =>  37,
                                "category_id" =>  4,
                                "name" =>  "Siranchowk Rural Municipality",
                                "area_sq_km" =>  "121.66",
                                "website" =>  "http:\/\/www.siranchowkmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "406" =>  [
                                "id" =>  407,
                                "district_id" =>  37,
                                "category_id" =>  4,
                                "name" =>  "Ajirkot Rural Municipality",
                                "area_sq_km" =>  "198.05",
                                "website" =>  "http:\/\/www.ajirkotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "407" =>  [
                                "id" =>  408,
                                "district_id" =>  37,
                                "category_id" =>  4,
                                "name" =>  "Chumnubri Rural Municipality",
                                "area_sq_km" =>  "1648.65",
                                "website" =>  "http:\/\/www.chumanuwrimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "408" =>  [
                                "id" =>  409,
                                "district_id" =>  37,
                                "category_id" =>  4,
                                "name" =>  "Dharche Rural Municipality",
                                "area_sq_km" =>  "651.52",
                                "website" =>  "http:\/\/www.dharchemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "409" =>  [
                                "id" =>  410,
                                "district_id" =>  37,
                                "category_id" =>  4,
                                "name" =>  "Bhimsen Thapa Rural Municipality",
                                "area_sq_km" =>  "101.25",
                                "website" =>  "http:\/\/www.bhimsenmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "410" =>  [
                                "id" =>  411,
                                "district_id" =>  37,
                                "category_id" =>  4,
                                "name" =>  "Sahid Lakhan Rural Municipality",
                                "area_sq_km" =>  "147.97",
                                "website" =>  "http:\/\/www.shahidlakhanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "411" =>  [
                                "id" =>  412,
                                "district_id" =>  37,
                                "category_id" =>  4,
                                "name" =>  "Aarughat Rural Municipality",
                                "area_sq_km" =>  "160.79",
                                "website" =>  "http:\/\/www.aarughatmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "412" =>  [
                                "id" =>  413,
                                "district_id" =>  37,
                                "category_id" =>  4,
                                "name" =>  "Gandaki Rural Municipality",
                                "area_sq_km" =>  "123.86",
                                "website" =>  "http:\/\/www.gandakimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ]
                        ]
                    ],
                    "37" =>  [
                        "id" =>  38,
                        "province_id" =>  4,
                        "name" =>  "Kaski",
                        "area_sq_km" =>  "2017",
                        "website" =>  "https:\/\/dcckaski.gov.np\/",
                        "headquarter" =>  "Pokhara",
                        "municipalities" =>  [
                            "413" =>  [
                                "id" =>  414,
                                "district_id" =>  38,
                                "category_id" =>  1,
                                "name" =>  "Pokhara Metropolitan City",
                                "area_sq_km" =>  "464.24",
                                "website" =>  "http:\/\/www.pokharamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22,
                                    23,
                                    24,
                                    25,
                                    26,
                                    27,
                                    28,
                                    29,
                                    30,
                                    31,
                                    32,
                                    33
                                ]
                            ],
                            "414" =>  [
                                "id" =>  415,
                                "district_id" =>  38,
                                "category_id" =>  4,
                                "name" =>  "Annapurna Rural Municipality",
                                "area_sq_km" =>  "417.73",
                                "website" =>  "http:\/\/www.annapurnamunkaski.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "415" =>  [
                                "id" =>  416,
                                "district_id" =>  38,
                                "category_id" =>  4,
                                "name" =>  "Machhapuchchhre Rural Municipality",
                                "area_sq_km" =>  "544.58",
                                "website" =>  "http:\/\/www.machhapuchhremun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "416" =>  [
                                "id" =>  417,
                                "district_id" =>  38,
                                "category_id" =>  4,
                                "name" =>  "Madi Rural Municipality",
                                "area_sq_km" =>  "563",
                                "website" =>  "http:\/\/www.madimunkaski.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "417" =>  [
                                "id" =>  418,
                                "district_id" =>  38,
                                "category_id" =>  4,
                                "name" =>  "Rupa Rural Municipality",
                                "area_sq_km" =>  "94.81",
                                "website" =>  "http:\/\/www.rupamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "38" =>  [
                        "id" =>  39,
                        "province_id" =>  4,
                        "name" =>  "Lamjung",
                        "area_sq_km" =>  "1692",
                        "website" =>  "https:\/\/dcclamjung.gov.np\/",
                        "headquarter" =>  "Besisahar",
                        "municipalities" =>  [
                            "418" =>  [
                                "id" =>  419,
                                "district_id" =>  39,
                                "category_id" =>  3,
                                "name" =>  "Besisahar Municipality",
                                "area_sq_km" =>  "127.64",
                                "website" =>  "http:\/\/www.besishaharmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "419" =>  [
                                "id" =>  420,
                                "district_id" =>  39,
                                "category_id" =>  3,
                                "name" =>  "Madhya Nepal Municipality",
                                "area_sq_km" =>  "113.86",
                                "website" =>  "http:\/\/www.madhyanepalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "420" =>  [
                                "id" =>  421,
                                "district_id" =>  39,
                                "category_id" =>  3,
                                "name" =>  "Rainas Municipality",
                                "area_sq_km" =>  "71.97",
                                "website" =>  "http:\/\/www.rainasmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "421" =>  [
                                "id" =>  422,
                                "district_id" =>  39,
                                "category_id" =>  3,
                                "name" =>  "Sundarbazar Municipality",
                                "area_sq_km" =>  "72.05",
                                "website" =>  "http:\/\/www.sundarbazarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "422" =>  [
                                "id" =>  423,
                                "district_id" =>  39,
                                "category_id" =>  4,
                                "name" =>  "Dordi Rural Municipality",
                                "area_sq_km" =>  "350.93",
                                "website" =>  "http:\/\/www.dordimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "423" =>  [
                                "id" =>  424,
                                "district_id" =>  39,
                                "category_id" =>  4,
                                "name" =>  "Dudhpokhari Rural Municipality",
                                "area_sq_km" =>  "155.33",
                                "website" =>  "http:\/\/www.dudhpokharimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "424" =>  [
                                "id" =>  425,
                                "district_id" =>  39,
                                "category_id" =>  4,
                                "name" =>  "Kwhlosothar Rural Municipality",
                                "area_sq_km" =>  "175.37",
                                "website" =>  "http:\/\/www.kwholasotharmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "425" =>  [
                                "id" =>  426,
                                "district_id" =>  39,
                                "category_id" =>  4,
                                "name" =>  "Marsyangdi Rural Municipality",
                                "area_sq_km" =>  "597.25",
                                "website" =>  "http:\/\/www.marsyangdimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ]
                        ]
                    ],
                    "39" =>  [
                        "id" =>  40,
                        "province_id" =>  4,
                        "name" =>  "Manang",
                        "area_sq_km" =>  "2246",
                        "website" =>  "https:\/\/dccmanang.gov.np\/",
                        "headquarter" =>  "Chame",
                        "municipalities" =>  [
                            "426" =>  [
                                "id" =>  427,
                                "district_id" =>  40,
                                "category_id" =>  4,
                                "name" =>  "Chame Rural Municipality",
                                "area_sq_km" =>  "78.86",
                                "website" =>  "http:\/\/www.chamemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "427" =>  [
                                "id" =>  428,
                                "district_id" =>  40,
                                "category_id" =>  4,
                                "name" =>  "Nason Rural Municipality",
                                "area_sq_km" =>  "709.58",
                                "website" =>  "http:\/\/www.nasonmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "428" =>  [
                                "id" =>  429,
                                "district_id" =>  40,
                                "category_id" =>  4,
                                "name" =>  "NarpaBhumi Rural Municipality",
                                "area_sq_km" =>  "837.54",
                                "website" =>  "http:\/\/www.narpabhumimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "429" =>  [
                                "id" =>  430,
                                "district_id" =>  40,
                                "category_id" =>  4,
                                "name" =>  "Manang Ngisyang Rural Municipality",
                                "area_sq_km" =>  "694.63",
                                "website" =>  "http:\/\/www.manangngisyangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ]
                        ]
                    ],
                    "40" =>  [
                        "id" =>  41,
                        "province_id" =>  4,
                        "name" =>  "Mustang",
                        "area_sq_km" =>  "3573",
                        "website" =>  "https:\/\/dccmustang.gov.np\/",
                        "headquarter" =>  "Jomsom",
                        "municipalities" =>  [
                            "430" =>  [
                                "id" =>  431,
                                "district_id" =>  41,
                                "category_id" =>  4,
                                "name" =>  "Gharpajhong Rural Municipality",
                                "area_sq_km" =>  "316",
                                "website" =>  "http:\/\/www.gharapjhongmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "431" =>  [
                                "id" =>  432,
                                "district_id" =>  41,
                                "category_id" =>  4,
                                "name" =>  "Thasang Rural Municipality",
                                "area_sq_km" =>  "289",
                                "website" =>  "http:\/\/www.thasangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "432" =>  [
                                "id" =>  433,
                                "district_id" =>  41,
                                "category_id" =>  4,
                                "name" =>  "Barhagaun Muktichhetra Rural Municipality",
                                "area_sq_km" =>  "886",
                                "website" =>  "http:\/\/www.bahragaumuktichhetramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "433" =>  [
                                "id" =>  434,
                                "district_id" =>  41,
                                "category_id" =>  4,
                                "name" =>  "Lomanthang Rural Municipality",
                                "area_sq_km" =>  "727",
                                "website" =>  "http:\/\/www.lomanthangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "434" =>  [
                                "id" =>  435,
                                "district_id" =>  41,
                                "category_id" =>  4,
                                "name" =>  "Lo-Ghekar Damodarkunda Rural Municipality",
                                "area_sq_km" =>  "1344",
                                "website" =>  "http:\/\/www.dalomemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "41" =>  [
                        "id" =>  42,
                        "province_id" =>  4,
                        "name" =>  "Myagdi",
                        "area_sq_km" =>  "2297",
                        "website" =>  "https:\/\/dccmyagdi.gov.np\/",
                        "headquarter" =>  "Beni",
                        "municipalities" =>  [
                            "435" =>  [
                                "id" =>  436,
                                "district_id" =>  42,
                                "category_id" =>  3,
                                "name" =>  "Beni Municipality",
                                "area_sq_km" =>  "76.57",
                                "website" =>  "http:\/\/www.benimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "436" =>  [
                                "id" =>  437,
                                "district_id" =>  42,
                                "category_id" =>  4,
                                "name" =>  "Annapurna Rural Municipality",
                                "area_sq_km" =>  "556.41",
                                "website" =>  "http:\/\/www.annapurnamunmyagdi.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "437" =>  [
                                "id" =>  438,
                                "district_id" =>  42,
                                "category_id" =>  4,
                                "name" =>  "Dhaulagiri Rural Municipality",
                                "area_sq_km" =>  "1037",
                                "website" =>  "http:\/\/www.dhawalagirimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "438" =>  [
                                "id" =>  439,
                                "district_id" =>  42,
                                "category_id" =>  4,
                                "name" =>  "Mangala Rural Municipality",
                                "area_sq_km" =>  "89",
                                "website" =>  "http:\/\/www.mangalamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "439" =>  [
                                "id" =>  440,
                                "district_id" =>  42,
                                "category_id" =>  4,
                                "name" =>  "Malika Rural Municipality",
                                "area_sq_km" =>  "147",
                                "website" =>  "http:\/\/www.malikamunmyagdi.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "440" =>  [
                                "id" =>  441,
                                "district_id" =>  42,
                                "category_id" =>  4,
                                "name" =>  "Raghuganga Rural Municipality",
                                "area_sq_km" =>  "379",
                                "website" =>  "http:\/\/www.raghugangamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ]
                        ]
                    ],
                    "42" =>  [
                        "id" =>  43,
                        "province_id" =>  4,
                        "name" =>  "Nawalpur",
                        "area_sq_km" =>  "1043.1",
                        "website" =>  "https:\/\/dccnawalparasi.gov.np\/",
                        "headquarter" =>  "Kawasoti",
                        "municipalities" =>  [
                            "441" =>  [
                                "id" =>  442,
                                "district_id" =>  43,
                                "category_id" =>  3,
                                "name" =>  "Kawasoti Municipality",
                                "area_sq_km" =>  "108.34",
                                "website" =>  "http:\/\/www.kawasotimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17
                                ]
                            ],
                            "442" =>  [
                                "id" =>  443,
                                "district_id" =>  43,
                                "category_id" =>  3,
                                "name" =>  "Gaindakot Municipality",
                                "area_sq_km" =>  "159.93",
                                "website" =>  "http:\/\/www.gaindakotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18
                                ]
                            ],
                            "443" =>  [
                                "id" =>  444,
                                "district_id" =>  43,
                                "category_id" =>  3,
                                "name" =>  "Devachuli Municipality",
                                "area_sq_km" =>  "112.72",
                                "website" =>  "http:\/\/www.devchulimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17
                                ]
                            ],
                            "444" =>  [
                                "id" =>  445,
                                "district_id" =>  43,
                                "category_id" =>  3,
                                "name" =>  "Madhya Bindu Municipality",
                                "area_sq_km" =>  "233.35",
                                "website" =>  "http:\/\/www.madhyabindumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15
                                ]
                            ],
                            "445" =>  [
                                "id" =>  446,
                                "district_id" =>  43,
                                "category_id" =>  4,
                                "name" =>  "Baudikali Rural Municipality",
                                "area_sq_km" =>  "91.87",
                                "website" =>  "http:\/\/www.bungdikalimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "446" =>  [
                                "id" =>  447,
                                "district_id" =>  43,
                                "category_id" =>  4,
                                "name" =>  "Bulingtar Rural Municipality",
                                "area_sq_km" =>  "147.68",
                                "website" =>  "http:\/\/www.bulingtarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "447" =>  [
                                "id" =>  448,
                                "district_id" =>  43,
                                "category_id" =>  4,
                                "name" =>  "Binayi Tribeni Rural Municipality",
                                "area_sq_km" =>  "288.06",
                                "website" =>  "http:\/\/www.binayitribenimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "448" =>  [
                                "id" =>  449,
                                "district_id" =>  43,
                                "category_id" =>  4,
                                "name" =>  "Hupsekot Rural Municipality",
                                "area_sq_km" =>  "189.21",
                                "website" =>  "http:\/\/www.hupsekotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    "43" =>  [
                        "id" =>  44,
                        "province_id" =>  4,
                        "name" =>  "Parwat",
                        "area_sq_km" =>  "494",
                        "website" =>  "https:\/\/dccparbat.gov.np\/",
                        "headquarter" =>  "Kusma",
                        "municipalities" =>  [
                            "449" =>  [
                                "id" =>  450,
                                "district_id" =>  44,
                                "category_id" =>  3,
                                "name" =>  "Kushma Municipality",
                                "area_sq_km" =>  "93.18",
                                "website" =>  "http:\/\/www.kushmamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "450" =>  [
                                "id" =>  451,
                                "district_id" =>  44,
                                "category_id" =>  3,
                                "name" =>  "Phalewas Municipality",
                                "area_sq_km" =>  "85.7",
                                "website" =>  "http:\/\/www.phalewasmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "451" =>  [
                                "id" =>  452,
                                "district_id" =>  44,
                                "category_id" =>  4,
                                "name" =>  "Jaljala Rural Municipality",
                                "area_sq_km" =>  "82.26",
                                "website" =>  "http:\/\/www.jaljalamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "452" =>  [
                                "id" =>  453,
                                "district_id" =>  44,
                                "category_id" =>  4,
                                "name" =>  "Paiyun Rural Municipality",
                                "area_sq_km" =>  "42.65",
                                "website" =>  "http:\/\/www.paiyunmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "453" =>  [
                                "id" =>  454,
                                "district_id" =>  44,
                                "category_id" =>  4,
                                "name" =>  "Mahashila Rural Municipality",
                                "area_sq_km" =>  "49.38",
                                "website" =>  "http:\/\/www.mahashilamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "454" =>  [
                                "id" =>  455,
                                "district_id" =>  44,
                                "category_id" =>  4,
                                "name" =>  "Modi Rural Municipality",
                                "area_sq_km" =>  "143.6",
                                "website" =>  "http:\/\/www.modimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "455" =>  [
                                "id" =>  456,
                                "district_id" =>  44,
                                "category_id" =>  4,
                                "name" =>  "Bihadi Rural Municipality",
                                "area_sq_km" =>  "44.8",
                                "website" =>  "http:\/\/www.bihadimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    "44" =>  [
                        "id" =>  45,
                        "province_id" =>  4,
                        "name" =>  "Syangja",
                        "area_sq_km" =>  "1164",
                        "website" =>  "https:\/\/dccsyangja.gov.np\/",
                        "headquarter" =>  "Putalibazar",
                        "municipalities" =>  [
                            "456" =>  [
                                "id" =>  457,
                                "district_id" =>  45,
                                "category_id" =>  3,
                                "name" =>  "Galyang Municipality",
                                "area_sq_km" =>  "122.71",
                                "website" =>  "http:\/\/www.galyangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "457" =>  [
                                "id" =>  458,
                                "district_id" =>  45,
                                "category_id" =>  3,
                                "name" =>  "Chapakot Municipality",
                                "area_sq_km" =>  "120.59",
                                "website" =>  "http:\/\/www.chapakotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "458" =>  [
                                "id" =>  459,
                                "district_id" =>  45,
                                "category_id" =>  3,
                                "name" =>  "Putalibazar Municipality",
                                "area_sq_km" =>  "147.21",
                                "website" =>  "http:\/\/www.putalibazarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "459" =>  [
                                "id" =>  460,
                                "district_id" =>  45,
                                "category_id" =>  3,
                                "name" =>  "Bheerkot Municipality",
                                "area_sq_km" =>  "78.23",
                                "website" =>  "http:\/\/www.bheerkotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "460" =>  [
                                "id" =>  461,
                                "district_id" =>  45,
                                "category_id" =>  3,
                                "name" =>  "Waling Municipality",
                                "area_sq_km" =>  "128.4",
                                "website" =>  "http:\/\/www.walingmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "461" =>  [
                                "id" =>  462,
                                "district_id" =>  45,
                                "category_id" =>  4,
                                "name" =>  "Arjun Chaupari Rural Municipality",
                                "area_sq_km" =>  "57.22",
                                "website" =>  "http:\/\/www.arjunchauparimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "462" =>  [
                                "id" =>  463,
                                "district_id" =>  45,
                                "category_id" =>  4,
                                "name" =>  "Aandhikhola Rural Municipality",
                                "area_sq_km" =>  "69.61",
                                "website" =>  "http:\/\/www.aandhikholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "463" =>  [
                                "id" =>  464,
                                "district_id" =>  45,
                                "category_id" =>  4,
                                "name" =>  "Kaligandaki Rural Municipality",
                                "area_sq_km" =>  "73.51",
                                "website" =>  "http:\/\/www.kaligandakimunsyangja.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "464" =>  [
                                "id" =>  465,
                                "district_id" =>  45,
                                "category_id" =>  4,
                                "name" =>  "Phedikhola Rural Municipality",
                                "area_sq_km" =>  "56.73",
                                "website" =>  "http:\/\/www.phedikholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "465" =>  [
                                "id" =>  466,
                                "district_id" =>  45,
                                "category_id" =>  4,
                                "name" =>  "Harinas Rural Municipality",
                                "area_sq_km" =>  "87.48",
                                "website" =>  "http:\/\/www.harinasmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "466" =>  [
                                "id" =>  467,
                                "district_id" =>  45,
                                "category_id" =>  4,
                                "name" =>  "Biruwa Rural Municipality",
                                "area_sq_km" =>  "95.79",
                                "website" =>  "http:\/\/www.biruwamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ]
                        ]
                    ],
                    "45" =>  [
                        "id" =>  46,
                        "province_id" =>  4,
                        "name" =>  "Tanahun",
                        "area_sq_km" =>  "1546",
                        "website" =>  "https:\/\/dcctanahun.gov.np\/",
                        "headquarter" =>  "Damauli",
                        "municipalities" =>  [
                            "467" =>  [
                                "id" =>  468,
                                "district_id" =>  46,
                                "category_id" =>  3,
                                "name" =>  "Bhanu Municipality",
                                "area_sq_km" =>  "184",
                                "website" =>  "http:\/\/www.bhanumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "468" =>  [
                                "id" =>  469,
                                "district_id" =>  46,
                                "category_id" =>  3,
                                "name" =>  "Bhimad Municipality",
                                "area_sq_km" =>  "129",
                                "website" =>  "http:\/\/www.bhimadmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "469" =>  [
                                "id" =>  470,
                                "district_id" =>  46,
                                "category_id" =>  3,
                                "name" =>  "Byas Municipality",
                                "area_sq_km" =>  "248",
                                "website" =>  "http:\/\/www.vyasmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "470" =>  [
                                "id" =>  471,
                                "district_id" =>  46,
                                "category_id" =>  3,
                                "name" =>  "Suklagandaki Municipality",
                                "area_sq_km" =>  "165",
                                "website" =>  "http:\/\/www.shuklagandakimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "471" =>  [
                                "id" =>  472,
                                "district_id" =>  46,
                                "category_id" =>  4,
                                "name" =>  "AnbuKhaireni Rural Municipality",
                                "area_sq_km" =>  "128",
                                "website" =>  "http:\/\/www.aanbookhairenimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "472" =>  [
                                "id" =>  473,
                                "district_id" =>  46,
                                "category_id" =>  4,
                                "name" =>  "Devghat Rural Municipality",
                                "area_sq_km" =>  "159",
                                "website" =>  "http:\/\/www.devghatmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "473" =>  [
                                "id" =>  474,
                                "district_id" =>  46,
                                "category_id" =>  4,
                                "name" =>  "Bandipur Rural Municipality",
                                "area_sq_km" =>  "102",
                                "website" =>  "http:\/\/www.bandipurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "474" =>  [
                                "id" =>  475,
                                "district_id" =>  46,
                                "category_id" =>  4,
                                "name" =>  "Rishing Rural Municipality",
                                "area_sq_km" =>  "215",
                                "website" =>  "http:\/\/www.rishingmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "475" =>  [
                                "id" =>  476,
                                "district_id" =>  46,
                                "category_id" =>  4,
                                "name" =>  "Ghiring Rural Municipality",
                                "area_sq_km" =>  "126",
                                "website" =>  "http:\/\/www.ghiringmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "476" =>  [
                                "id" =>  477,
                                "district_id" =>  46,
                                "category_id" =>  4,
                                "name" =>  "Myagde Rural Municipality",
                                "area_sq_km" =>  "115",
                                "website" =>  "http:\/\/www.myagdemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                "id" =>  5,
                "name" =>  "Lumbini",
                "area_sq_km" =>  "19707",
                "website" =>  "https:\/\/ocmcm.lumbini.gov.np\/",
                "headquarter" =>  "Deukhuri",
                "districts" =>  [
                    "46" =>  [
                        "id" =>  47,
                        "province_id" =>  5,
                        "name" =>  "Kapilvastu",
                        "area_sq_km" =>  "1738",
                        "website" =>  "https:\/\/dcckapilvastu.gov.np\/",
                        "headquarter" =>  "Taulihawa",
                        "municipalities" =>  [
                            "477" =>  [
                                "id" =>  478,
                                "district_id" =>  47,
                                "category_id" =>  3,
                                "name" =>  "Kapilvastu Municipality",
                                "area_sq_km" =>  "136.91",
                                "website" =>  "http:\/\/www.kapilvastumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "478" =>  [
                                "id" =>  479,
                                "district_id" =>  47,
                                "category_id" =>  3,
                                "name" =>  "Banganga Municipality",
                                "area_sq_km" =>  "233.68",
                                "website" =>  "http:\/\/www.bangangamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "479" =>  [
                                "id" =>  480,
                                "district_id" =>  47,
                                "category_id" =>  3,
                                "name" =>  "Buddhabhumi Municipality",
                                "area_sq_km" =>  "366.67",
                                "website" =>  "http:\/\/www.buddhabhumimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "480" =>  [
                                "id" =>  481,
                                "district_id" =>  47,
                                "category_id" =>  3,
                                "name" =>  "Shivaraj Municipality",
                                "area_sq_km" =>  "284.07",
                                "website" =>  "http:\/\/www.shivrajmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "481" =>  [
                                "id" =>  482,
                                "district_id" =>  47,
                                "category_id" =>  3,
                                "name" =>  "Krishnanagar Municipality",
                                "area_sq_km" =>  "96.66",
                                "website" =>  "http:\/\/www.krishnanagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "482" =>  [
                                "id" =>  483,
                                "district_id" =>  47,
                                "category_id" =>  3,
                                "name" =>  "Maharajgunj Municipality",
                                "area_sq_km" =>  "112.21",
                                "website" =>  "http:\/\/www.maharajgunjmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "483" =>  [
                                "id" =>  484,
                                "district_id" =>  47,
                                "category_id" =>  4,
                                "name" =>  "Mayadevi Rural Municipality",
                                "area_sq_km" =>  "88.53",
                                "website" =>  "http:\/\/www.mayadevimunkapilvastu.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "484" =>  [
                                "id" =>  485,
                                "district_id" =>  47,
                                "category_id" =>  4,
                                "name" =>  "Yashodhara Rural Municipality",
                                "area_sq_km" =>  "67.56",
                                "website" =>  "http:\/\/www.yasodharamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "485" =>  [
                                "id" =>  486,
                                "district_id" =>  47,
                                "category_id" =>  4,
                                "name" =>  "Suddhodan Rural Municipality",
                                "area_sq_km" =>  "91.69",
                                "website" =>  "http:\/\/www.shuddhodhanmunkapilvastu.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "486" =>  [
                                "id" =>  487,
                                "district_id" =>  47,
                                "category_id" =>  4,
                                "name" =>  "Bijaynagar Rural Municipality",
                                "area_sq_km" =>  "173.19",
                                "website" =>  "http:\/\/www.bijaynagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "47" =>  [
                        "id" =>  48,
                        "province_id" =>  5,
                        "name" =>  "Parasi",
                        "area_sq_km" =>  "634.88",
                        "website" =>  "https:\/\/dccnawalparasi.gov.np\/",
                        "headquarter" =>  "Ramgram",
                        "municipalities" =>  [
                            "487" =>  [
                                "id" =>  488,
                                "district_id" =>  48,
                                "category_id" =>  3,
                                "name" =>  "Bardaghat Municipality",
                                "area_sq_km" =>  "162.05",
                                "website" =>  "http:\/\/www.bardghatmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16
                                ]
                            ],
                            "488" =>  [
                                "id" =>  489,
                                "district_id" =>  48,
                                "category_id" =>  3,
                                "name" =>  "Ramgram Municipality",
                                "area_sq_km" =>  "128.32",
                                "website" =>  "http:\/\/www.ramgrammun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18
                                ]
                            ],
                            "489" =>  [
                                "id" =>  490,
                                "district_id" =>  48,
                                "category_id" =>  3,
                                "name" =>  "Sunwal Municipality",
                                "area_sq_km" =>  "139.1",
                                "website" =>  "http:\/\/www.sunwalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "490" =>  [
                                "id" =>  491,
                                "district_id" =>  48,
                                "category_id" =>  4,
                                "name" =>  "Susta Rural Municipality",
                                "area_sq_km" =>  "91.24",
                                "website" =>  "http:\/\/www.sustamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "491" =>  [
                                "id" =>  492,
                                "district_id" =>  48,
                                "category_id" =>  4,
                                "name" =>  "Palhi Nandan Rural Municipality",
                                "area_sq_km" =>  "44.67",
                                "website" =>  "http:\/\/www.palhinandanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "492" =>  [
                                "id" =>  493,
                                "district_id" =>  48,
                                "category_id" =>  4,
                                "name" =>  "Pratappur Rural Municipality",
                                "area_sq_km" =>  "87.55",
                                "website" =>  "http:\/\/www.pratappurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "493" =>  [
                                "id" =>  494,
                                "district_id" =>  48,
                                "category_id" =>  4,
                                "name" =>  "Sarawal Rural Municipality",
                                "area_sq_km" =>  "73.19",
                                "website" =>  "http:\/\/www.sarawalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "48" =>  [
                        "id" =>  49,
                        "province_id" =>  5,
                        "name" =>  "Rupandehi",
                        "area_sq_km" =>  "1360",
                        "website" =>  "https:\/\/dccrupandehi.gov.np\/",
                        "headquarter" =>  "Siddharthanagar",
                        "municipalities" =>  [
                            "494" =>  [
                                "id" =>  495,
                                "district_id" =>  49,
                                "category_id" =>  2,
                                "name" =>  "Butwal Sub-Metropolitan City",
                                "area_sq_km" =>  "101.61",
                                "website" =>  "http:\/\/www.butwalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19
                                ]
                            ],
                            "495" =>  [
                                "id" =>  496,
                                "district_id" =>  49,
                                "category_id" =>  3,
                                "name" =>  "Devdaha Municipality",
                                "area_sq_km" =>  "136.95",
                                "website" =>  "http:\/\/www.devdahamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "496" =>  [
                                "id" =>  497,
                                "district_id" =>  49,
                                "category_id" =>  3,
                                "name" =>  "Lumbini Sanskritik Municipality",
                                "area_sq_km" =>  "112.21",
                                "website" =>  "http:\/\/www.lumbinisanskritikmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "497" =>  [
                                "id" =>  498,
                                "district_id" =>  49,
                                "category_id" =>  3,
                                "name" =>  "Sainamaina Municipality",
                                "area_sq_km" =>  "162.18",
                                "website" =>  "http:\/\/www.sainamainamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "498" =>  [
                                "id" =>  499,
                                "district_id" =>  49,
                                "category_id" =>  3,
                                "name" =>  "Siddharthanagar Municipality",
                                "area_sq_km" =>  "36.03",
                                "website" =>  "http:\/\/www.siddharthanagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "499" =>  [
                                "id" =>  500,
                                "district_id" =>  49,
                                "category_id" =>  3,
                                "name" =>  "Tilottama Municipality",
                                "area_sq_km" =>  "126.19",
                                "website" =>  "http:\/\/www.tilottamamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17
                                ]
                            ],
                            "500" =>  [
                                "id" =>  501,
                                "district_id" =>  49,
                                "category_id" =>  4,
                                "name" =>  "Gaidahawa Rural Municipality",
                                "area_sq_km" =>  "96.79",
                                "website" =>  "http:\/\/www.gaidahawamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "501" =>  [
                                "id" =>  502,
                                "district_id" =>  49,
                                "category_id" =>  4,
                                "name" =>  "Kanchan Rural Municipality",
                                "area_sq_km" =>  "58.51",
                                "website" =>  "http:\/\/www.kanchanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "502" =>  [
                                "id" =>  503,
                                "district_id" =>  49,
                                "category_id" =>  4,
                                "name" =>  "Kotahimai Rural Municipality",
                                "area_sq_km" =>  "58.26",
                                "website" =>  "http:\/\/www.kotahimaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "503" =>  [
                                "id" =>  504,
                                "district_id" =>  49,
                                "category_id" =>  4,
                                "name" =>  "Marchawari Rural Municipality",
                                "area_sq_km" =>  "48.55",
                                "website" =>  "http:\/\/www.marchawarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "504" =>  [
                                "id" =>  505,
                                "district_id" =>  49,
                                "category_id" =>  4,
                                "name" =>  "Mayadevi Rural Municipality",
                                "area_sq_km" =>  "72.44",
                                "website" =>  "http:\/\/www.mayadevimunrupandehi.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "505" =>  [
                                "id" =>  506,
                                "district_id" =>  49,
                                "category_id" =>  4,
                                "name" =>  "Omsatiya Rural Municipality",
                                "area_sq_km" =>  "48.54",
                                "website" =>  "http:\/\/www.omsatiyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "506" =>  [
                                "id" =>  507,
                                "district_id" =>  49,
                                "category_id" =>  4,
                                "name" =>  "Rohini Rural Municipality",
                                "area_sq_km" =>  "64.62",
                                "website" =>  "http:\/\/www.rohinimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "507" =>  [
                                "id" =>  508,
                                "district_id" =>  49,
                                "category_id" =>  4,
                                "name" =>  "Sammarimai Rural Municipality",
                                "area_sq_km" =>  "50.78",
                                "website" =>  "http:\/\/www.sammarimaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "508" =>  [
                                "id" =>  509,
                                "district_id" =>  49,
                                "category_id" =>  4,
                                "name" =>  "Siyari Rural Municipality",
                                "area_sq_km" =>  "66.17",
                                "website" =>  "http:\/\/www.siyarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "509" =>  [
                                "id" =>  510,
                                "district_id" =>  49,
                                "category_id" =>  4,
                                "name" =>  "Suddodhan Rural Municipality",
                                "area_sq_km" =>  "57.66",
                                "website" =>  "http:\/\/www.shuddhodhanmunrupandehi.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "49" =>  [
                        "id" =>  50,
                        "province_id" =>  5,
                        "name" =>  "Arghakhanchi",
                        "area_sq_km" =>  "1193",
                        "website" =>  "https:\/\/dccargakhanchi.gov.np\/",
                        "headquarter" =>  "Sandhikharka",
                        "municipalities" =>  [
                            "510" =>  [
                                "id" =>  511,
                                "district_id" =>  50,
                                "category_id" =>  3,
                                "name" =>  "Sandhikharka Municipality",
                                "area_sq_km" =>  "129.42",
                                "website" =>  "http:\/\/www.sandhikharkamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "511" =>  [
                                "id" =>  512,
                                "district_id" =>  50,
                                "category_id" =>  3,
                                "name" =>  "Sitganga Municipality",
                                "area_sq_km" =>  "610.43",
                                "website" =>  "http:\/\/www.shitagangamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "512" =>  [
                                "id" =>  513,
                                "district_id" =>  50,
                                "category_id" =>  3,
                                "name" =>  "Bhumikasthan Municipality",
                                "area_sq_km" =>  "159.13",
                                "website" =>  "http:\/\/www.bhumikasthanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "513" =>  [
                                "id" =>  514,
                                "district_id" =>  50,
                                "category_id" =>  4,
                                "name" =>  "Chhatradev Rural Municipality",
                                "area_sq_km" =>  "87.62",
                                "website" =>  "http:\/\/www.chhatradevmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "514" =>  [
                                "id" =>  515,
                                "district_id" =>  50,
                                "category_id" =>  4,
                                "name" =>  "Panini Rural Municipality",
                                "area_sq_km" =>  "151.42",
                                "website" =>  "http:\/\/www.paninimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "515" =>  [
                                "id" =>  516,
                                "district_id" =>  50,
                                "category_id" =>  4,
                                "name" =>  "Malarani Rural Municipality",
                                "area_sq_km" =>  "101.06",
                                "website" =>  "http:\/\/www.malaranimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ]
                        ]
                    ],
                    "50" =>  [
                        "id" =>  51,
                        "province_id" =>  5,
                        "name" =>  "Gulmi",
                        "area_sq_km" =>  "1149",
                        "website" =>  "https:\/\/dccgulmi.gov.np\/",
                        "headquarter" =>  "Tamghas",
                        "municipalities" =>  [
                            "516" =>  [
                                "id" =>  517,
                                "district_id" =>  51,
                                "category_id" =>  3,
                                "name" =>  "Resunga Municipality",
                                "area_sq_km" =>  "83.74",
                                "website" =>  "http:\/\/www.resungamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "517" =>  [
                                "id" =>  518,
                                "district_id" =>  51,
                                "category_id" =>  3,
                                "name" =>  "Musikot Municipality",
                                "area_sq_km" =>  "114.74",
                                "website" =>  "http:\/\/www.musikotmungulmi.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "518" =>  [
                                "id" =>  519,
                                "district_id" =>  51,
                                "category_id" =>  4,
                                "name" =>  "Rurukshetra Rural Municipality",
                                "area_sq_km" =>  "67.38",
                                "website" =>  "http:\/\/www.rurumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "519" =>  [
                                "id" =>  520,
                                "district_id" =>  51,
                                "category_id" =>  4,
                                "name" =>  "Chhatrakot Rural Municipality",
                                "area_sq_km" =>  "87.01",
                                "website" =>  "http:\/\/www.chhatrakotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "520" =>  [
                                "id" =>  521,
                                "district_id" =>  51,
                                "category_id" =>  4,
                                "name" =>  "Gulmidarbar Rural Municipality",
                                "area_sq_km" =>  "79.99",
                                "website" =>  "http:\/\/www.gulmidarbarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "521" =>  [
                                "id" =>  522,
                                "district_id" =>  51,
                                "category_id" =>  4,
                                "name" =>  "Chandrakot Rural Municipality",
                                "area_sq_km" =>  "105.73",
                                "website" =>  "http:\/\/www.chandrakotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "522" =>  [
                                "id" =>  523,
                                "district_id" =>  51,
                                "category_id" =>  4,
                                "name" =>  "Satyawati Rural Municipality",
                                "area_sq_km" =>  "115.92",
                                "website" =>  "http:\/\/www.satyawatimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "523" =>  [
                                "id" =>  524,
                                "district_id" =>  51,
                                "category_id" =>  4,
                                "name" =>  "Dhurkot Rural Municipality",
                                "area_sq_km" =>  "86.32",
                                "website" =>  "http:\/\/www.dhurkotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "524" =>  [
                                "id" =>  525,
                                "district_id" =>  51,
                                "category_id" =>  4,
                                "name" =>  "Kaligandaki Rural Municipality",
                                "area_sq_km" =>  "101.04",
                                "website" =>  "http:\/\/www.kaligandakimungulmi.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "525" =>  [
                                "id" =>  526,
                                "district_id" =>  51,
                                "category_id" =>  4,
                                "name" =>  "Isma Rural Municipality",
                                "area_sq_km" =>  "81.88",
                                "website" =>  "http:\/\/www.ishmamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "526" =>  [
                                "id" =>  527,
                                "district_id" =>  51,
                                "category_id" =>  4,
                                "name" =>  "Malika Rural Municipality",
                                "area_sq_km" =>  "92.49",
                                "website" =>  "http:\/\/www.malikamungulmi.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "527" =>  [
                                "id" =>  528,
                                "district_id" =>  51,
                                "category_id" =>  4,
                                "name" =>  "Madane Rural Municipality",
                                "area_sq_km" =>  "94.52",
                                "website" =>  "http:\/\/www.madanemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "51" =>  [
                        "id" =>  52,
                        "province_id" =>  5,
                        "name" =>  "Palpa",
                        "area_sq_km" =>  "1373",
                        "website" =>  "https:\/\/dccpalpa.gov.np\/",
                        "headquarter" =>  "Tansen",
                        "municipalities" =>  [
                            "528" =>  [
                                "id" =>  529,
                                "district_id" =>  52,
                                "category_id" =>  3,
                                "name" =>  "Tansen Municipality",
                                "area_sq_km" =>  "109.8",
                                "website" =>  "http:\/\/www.tansenmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "529" =>  [
                                "id" =>  530,
                                "district_id" =>  52,
                                "category_id" =>  3,
                                "name" =>  "Rampur Municipality",
                                "area_sq_km" =>  "123.34",
                                "website" =>  "http:\/\/www.rampurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "530" =>  [
                                "id" =>  531,
                                "district_id" =>  52,
                                "category_id" =>  4,
                                "name" =>  "Rainadevi Chhahara Rural Municipality",
                                "area_sq_km" =>  "175.78",
                                "website" =>  "http:\/\/www.rainadevichhaharamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "531" =>  [
                                "id" =>  532,
                                "district_id" =>  52,
                                "category_id" =>  4,
                                "name" =>  "Ripdikot Rural Municipality",
                                "area_sq_km" =>  "124.55",
                                "website" =>  "http:\/\/www.ribdikotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "532" =>  [
                                "id" =>  533,
                                "district_id" =>  52,
                                "category_id" =>  4,
                                "name" =>  "Bagnaskali Rural Municipality",
                                "area_sq_km" =>  "84.17",
                                "website" =>  "http:\/\/www.baganaskalimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "533" =>  [
                                "id" =>  534,
                                "district_id" =>  52,
                                "category_id" =>  4,
                                "name" =>  "Rambha Rural Municipality",
                                "area_sq_km" =>  "94.12",
                                "website" =>  "http:\/\/www.rambhamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "534" =>  [
                                "id" =>  535,
                                "district_id" =>  52,
                                "category_id" =>  4,
                                "name" =>  "Purbakhola Rural Municipality",
                                "area_sq_km" =>  "138.05",
                                "website" =>  "http:\/\/www.purbakholamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "535" =>  [
                                "id" =>  536,
                                "district_id" =>  52,
                                "category_id" =>  4,
                                "name" =>  "Nisdi Rural Municipality",
                                "area_sq_km" =>  "194.5",
                                "website" =>  "http:\/\/www.nisdimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "536" =>  [
                                "id" =>  537,
                                "district_id" =>  52,
                                "category_id" =>  4,
                                "name" =>  "Mathagadhi Rural Municipality",
                                "area_sq_km" =>  "215.49",
                                "website" =>  "http:\/\/www.mathagadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "537" =>  [
                                "id" =>  538,
                                "district_id" =>  52,
                                "category_id" =>  4,
                                "name" =>  "Tinahu Rural Municipality",
                                "area_sq_km" =>  "202",
                                "website" =>  "http:\/\/www.tinaumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    "52" =>  [
                        "id" =>  53,
                        "province_id" =>  5,
                        "name" =>  "Dang",
                        "area_sq_km" =>  "2955",
                        "website" =>  "https:\/\/dccdang.gov.np\/",
                        "headquarter" =>  "Ghorahi",
                        "municipalities" =>  [
                            "538" =>  [
                                "id" =>  539,
                                "district_id" =>  53,
                                "category_id" =>  2,
                                "name" =>  "Ghorahi Sub-Metropolitan City",
                                "area_sq_km" =>  "522.21",
                                "website" =>  "http:\/\/www.ghorahimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19
                                ]
                            ],
                            "539" =>  [
                                "id" =>  540,
                                "district_id" =>  53,
                                "category_id" =>  2,
                                "name" =>  "Tulsipur Sub-Metropolitan City",
                                "area_sq_km" =>  "384.63",
                                "website" =>  "http:\/\/www.tulsipurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19
                                ]
                            ],
                            "540" =>  [
                                "id" =>  541,
                                "district_id" =>  53,
                                "category_id" =>  3,
                                "name" =>  "Lamahi Municipality",
                                "area_sq_km" =>  "326.66",
                                "website" =>  "http:\/\/www.lamahimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "541" =>  [
                                "id" =>  542,
                                "district_id" =>  53,
                                "category_id" =>  4,
                                "name" =>  "Gadhawa Rural Municipality",
                                "area_sq_km" =>  "358.57",
                                "website" =>  "http:\/\/www.gadhawamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "542" =>  [
                                "id" =>  543,
                                "district_id" =>  53,
                                "category_id" =>  4,
                                "name" =>  "Rajpur Rural Municipality",
                                "area_sq_km" =>  "577.33",
                                "website" =>  "http:\/\/www.rajpurmundang.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "543" =>  [
                                "id" =>  544,
                                "district_id" =>  53,
                                "category_id" =>  4,
                                "name" =>  "Shantinagar Rural Municipality",
                                "area_sq_km" =>  "116.02",
                                "website" =>  "http:\/\/www.shantinagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "544" =>  [
                                "id" =>  545,
                                "district_id" =>  53,
                                "category_id" =>  4,
                                "name" =>  "Rapti Rural Municipality",
                                "area_sq_km" =>  "161.07",
                                "website" =>  "http:\/\/www.raptimundang.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "545" =>  [
                                "id" =>  546,
                                "district_id" =>  53,
                                "category_id" =>  4,
                                "name" =>  "Banglachuli Rural Municipality",
                                "area_sq_km" =>  "245.14",
                                "website" =>  "http:\/\/www.bangalachulimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "546" =>  [
                                "id" =>  547,
                                "district_id" =>  53,
                                "category_id" =>  4,
                                "name" =>  "Dangisharan Rural Municipality",
                                "area_sq_km" =>  "110.7",
                                "website" =>  "http:\/\/www.dangisharanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "547" =>  [
                                "id" =>  548,
                                "district_id" =>  53,
                                "category_id" =>  4,
                                "name" =>  "Babai Rural Municipality",
                                "area_sq_km" =>  "257.48",
                                "website" =>  "http:\/\/www.babaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "53" =>  [
                        "id" =>  54,
                        "province_id" =>  5,
                        "name" =>  "Pyuthan",
                        "area_sq_km" =>  "1309",
                        "website" =>  "https:\/\/dccpyuthan.gov.np\/",
                        "headquarter" =>  "Pyuthan",
                        "municipalities" =>  [
                            "548" =>  [
                                "id" =>  549,
                                "district_id" =>  54,
                                "category_id" =>  3,
                                "name" =>  "Sworgadwari Municipality",
                                "area_sq_km" =>  "224.7",
                                "website" =>  "http:\/\/www.swargadwarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "549" =>  [
                                "id" =>  550,
                                "district_id" =>  54,
                                "category_id" =>  3,
                                "name" =>  "Pyuthan Municipality",
                                "area_sq_km" =>  "128.96",
                                "website" =>  "http:\/\/www.pyuthanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "550" =>  [
                                "id" =>  551,
                                "district_id" =>  54,
                                "category_id" =>  4,
                                "name" =>  "Mandavi Rural Municipality",
                                "area_sq_km" =>  "113.08",
                                "website" =>  "http:\/\/www.mandavimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "551" =>  [
                                "id" =>  552,
                                "district_id" =>  54,
                                "category_id" =>  4,
                                "name" =>  "Sarumarani Rural Municipality",
                                "area_sq_km" =>  "157.97",
                                "website" =>  "http:\/\/www.sarumaranimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "552" =>  [
                                "id" =>  553,
                                "district_id" =>  54,
                                "category_id" =>  4,
                                "name" =>  "Ayirawati Rural Municipality",
                                "area_sq_km" =>  "156.75",
                                "website" =>  "http:\/\/www.airawatimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "553" =>  [
                                "id" =>  554,
                                "district_id" =>  54,
                                "category_id" =>  4,
                                "name" =>  "Mallarani Rural Municipality",
                                "area_sq_km" =>  "80.09",
                                "website" =>  "http:\/\/www.mallaranimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "554" =>  [
                                "id" =>  555,
                                "district_id" =>  54,
                                "category_id" =>  4,
                                "name" =>  "Jhimruk Rural Municipality",
                                "area_sq_km" =>  "106.93",
                                "website" =>  "http:\/\/www.jhimrukmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "555" =>  [
                                "id" =>  556,
                                "district_id" =>  54,
                                "category_id" =>  4,
                                "name" =>  "Naubahini Rural Municipality",
                                "area_sq_km" =>  "213.41",
                                "website" =>  "http:\/\/www.naubahinimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "556" =>  [
                                "id" =>  557,
                                "district_id" =>  54,
                                "category_id" =>  4,
                                "name" =>  "Gaumukhi Rural Municipality",
                                "area_sq_km" =>  "139.04",
                                "website" =>  "http:\/\/www.gaumukhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "54" =>  [
                        "id" =>  55,
                        "province_id" =>  5,
                        "name" =>  "Rolpa",
                        "area_sq_km" =>  "1879",
                        "website" =>  "https:\/\/dccrolpa.gov.np\/",
                        "headquarter" =>  "Liwang",
                        "municipalities" =>  [
                            "557" =>  [
                                "id" =>  558,
                                "district_id" =>  55,
                                "category_id" =>  3,
                                "name" =>  "Rolpa Municipality",
                                "area_sq_km" =>  "270.42",
                                "website" =>  "http:\/\/www.rolpamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "558" =>  [
                                "id" =>  559,
                                "district_id" =>  55,
                                "category_id" =>  4,
                                "name" =>  "Runtigadi Rural Municipality",
                                "area_sq_km" =>  "232.69",
                                "website" =>  "http:\/\/www.runtigadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "559" =>  [
                                "id" =>  560,
                                "district_id" =>  55,
                                "category_id" =>  4,
                                "name" =>  "Triveni Rural Municipality",
                                "area_sq_km" =>  "205.39",
                                "website" =>  "http:\/\/www.trivenimunrolpa.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "560" =>  [
                                "id" =>  561,
                                "district_id" =>  55,
                                "category_id" =>  4,
                                "name" =>  "Sunil Smiriti Rural Municipality",
                                "area_sq_km" =>  "156.55",
                                "website" =>  "http:\/\/www.sunilsmritimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "561" =>  [
                                "id" =>  562,
                                "district_id" =>  55,
                                "category_id" =>  4,
                                "name" =>  "Lungri Rural Municipality",
                                "area_sq_km" =>  "135.23",
                                "website" =>  "http:\/\/www.lungrimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "562" =>  [
                                "id" =>  563,
                                "district_id" =>  55,
                                "category_id" =>  4,
                                "name" =>  "Sunchhahari Rural Municipality",
                                "area_sq_km" =>  "277.62",
                                "website" =>  "http:\/\/www.sunchhaharimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "563" =>  [
                                "id" =>  564,
                                "district_id" =>  55,
                                "category_id" =>  4,
                                "name" =>  "Thawang Rural Municipality",
                                "area_sq_km" =>  "191.07",
                                "website" =>  "http:\/\/www.thabangmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "564" =>  [
                                "id" =>  565,
                                "district_id" =>  55,
                                "category_id" =>  4,
                                "name" =>  "Madi Rural Municipality",
                                "area_sq_km" =>  "129.05",
                                "website" =>  "http:\/\/www.madimunrolpa.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "565" =>  [
                                "id" =>  566,
                                "district_id" =>  55,
                                "category_id" =>  4,
                                "name" =>  "GangaDev Rural Municipality",
                                "area_sq_km" =>  "124.38",
                                "website" =>  "http:\/\/www.sukidahamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "566" =>  [
                                "id" =>  567,
                                "district_id" =>  55,
                                "category_id" =>  4,
                                "name" =>  "Pariwartan Rural Municipality",
                                "area_sq_km" =>  "163.01",
                                "website" =>  "http:\/\/www.duikholimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    "55" =>  [
                        "id" =>  56,
                        "province_id" =>  5,
                        "name" =>  "Eastern Rukum",
                        "area_sq_km" =>  "1161.13",
                        "website" =>  "https:\/\/dccrukum.gov.np\/",
                        "headquarter" =>  "Rukumkot",
                        "municipalities" =>  [
                            "567" =>  [
                                "id" =>  568,
                                "district_id" =>  56,
                                "category_id" =>  4,
                                "name" =>  "Putha Uttarganga Rural Municipality",
                                "area_sq_km" =>  "560.34",
                                "website" =>  "http:\/\/www.puthauttargangamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "568" =>  [
                                "id" =>  569,
                                "district_id" =>  56,
                                "category_id" =>  4,
                                "name" =>  "Bhume Rural Municipality",
                                "area_sq_km" =>  "273.67",
                                "website" =>  "http:\/\/www.bhumemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "569" =>  [
                                "id" =>  570,
                                "district_id" =>  56,
                                "category_id" =>  4,
                                "name" =>  "Sisne Rural Municipality",
                                "area_sq_km" =>  "327.12",
                                "website" =>  "http:\/\/www.sisnemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ]
                        ]
                    ],
                    "56" =>  [
                        "id" =>  57,
                        "province_id" =>  5,
                        "name" =>  "Banke",
                        "area_sq_km" =>  "2337",
                        "website" =>  "https:\/\/dccbanke.gov.np\/",
                        "headquarter" =>  "Nepalganj",
                        "municipalities" =>  [
                            "570" =>  [
                                "id" =>  571,
                                "district_id" =>  57,
                                "category_id" =>  2,
                                "name" =>  "Nepalgunj Sub-Metropolitan City",
                                "area_sq_km" =>  "85.94",
                                "website" =>  "http:\/\/www.nepalgunjmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19,
                                    20,
                                    21,
                                    22,
                                    23
                                ]
                            ],
                            "571" =>  [
                                "id" =>  572,
                                "district_id" =>  57,
                                "category_id" =>  3,
                                "name" =>  "Kohalpur Municipality",
                                "area_sq_km" =>  "184.26",
                                "website" =>  "http:\/\/www.kohalpurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15
                                ]
                            ],
                            "572" =>  [
                                "id" =>  573,
                                "district_id" =>  57,
                                "category_id" =>  4,
                                "name" =>  "Rapti-Sonari Rural Municipality",
                                "area_sq_km" =>  "1041.73",
                                "website" =>  "http:\/\/www.raptisonarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "573" =>  [
                                "id" =>  574,
                                "district_id" =>  57,
                                "category_id" =>  4,
                                "name" =>  "Narainapur Rural Municipality",
                                "area_sq_km" =>  "172.34",
                                "website" =>  "http:\/\/www.narainapurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "574" =>  [
                                "id" =>  575,
                                "district_id" =>  57,
                                "category_id" =>  4,
                                "name" =>  "Duduwa Rural Municipality",
                                "area_sq_km" =>  "91.1",
                                "website" =>  "http:\/\/www.duduwamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "575" =>  [
                                "id" =>  576,
                                "district_id" =>  57,
                                "category_id" =>  4,
                                "name" =>  "Janaki Rural Municipality",
                                "area_sq_km" =>  "63.32",
                                "website" =>  "http:\/\/www.janakimunbanke.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "576" =>  [
                                "id" =>  577,
                                "district_id" =>  57,
                                "category_id" =>  4,
                                "name" =>  "Khajura Rural Municipality",
                                "area_sq_km" =>  "101.91",
                                "website" =>  "http:\/\/www.khajuramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "577" =>  [
                                "id" =>  578,
                                "district_id" =>  57,
                                "category_id" =>  4,
                                "name" =>  "Baijanath Rural Municipality",
                                "area_sq_km" =>  "141.67",
                                "website" =>  "http:\/\/www.baijanathmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ]
                        ]
                    ],
                    "57" =>  [
                        "id" =>  58,
                        "province_id" =>  5,
                        "name" =>  "Bardiya",
                        "area_sq_km" =>  "2025",
                        "website" =>  "https:\/\/dccbardiya.gov.np\/",
                        "headquarter" =>  "Gulariya",
                        "municipalities" =>  [
                            "578" =>  [
                                "id" =>  579,
                                "district_id" =>  58,
                                "category_id" =>  3,
                                "name" =>  "Gulariya Municipality",
                                "area_sq_km" =>  "118.21",
                                "website" =>  "http:\/\/www.gulariyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "579" =>  [
                                "id" =>  580,
                                "district_id" =>  58,
                                "category_id" =>  3,
                                "name" =>  "Rajapur Municipality",
                                "area_sq_km" =>  "127.08",
                                "website" =>  "http:\/\/www.rajapurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "580" =>  [
                                "id" =>  581,
                                "district_id" =>  58,
                                "category_id" =>  3,
                                "name" =>  "Madhuwan Municipality",
                                "area_sq_km" =>  "129.73",
                                "website" =>  "http:\/\/www.madhuwanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "581" =>  [
                                "id" =>  582,
                                "district_id" =>  58,
                                "category_id" =>  3,
                                "name" =>  "Thakurbaba Municipality",
                                "area_sq_km" =>  "104.57",
                                "website" =>  "http:\/\/www.thakurbabamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "582" =>  [
                                "id" =>  583,
                                "district_id" =>  58,
                                "category_id" =>  3,
                                "name" =>  "Basgadhi Municipality",
                                "area_sq_km" =>  "206.08",
                                "website" =>  "http:\/\/www.bansgadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "583" =>  [
                                "id" =>  584,
                                "district_id" =>  58,
                                "category_id" =>  3,
                                "name" =>  "Barbardiya Municipality",
                                "area_sq_km" =>  "226.09",
                                "website" =>  "http:\/\/www.barbardiyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "584" =>  [
                                "id" =>  585,
                                "district_id" =>  58,
                                "category_id" =>  4,
                                "name" =>  "Badhaiyatal Rural Municipality",
                                "area_sq_km" =>  "115.19",
                                "website" =>  "http:\/\/www.badhaiyatalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "585" =>  [
                                "id" =>  586,
                                "district_id" =>  58,
                                "category_id" =>  4,
                                "name" =>  "Geruwa Rural Municipality",
                                "area_sq_km" =>  "78.41",
                                "website" =>  "http:\/\/www.geruwamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                "id" =>  6,
                "name" =>  "Karnali",
                "area_sq_km" =>  "30213",
                "website" =>  "https:\/\/karnali.gov.np\/",
                "headquarter" =>  "Birendranagar",
                "districts" =>  [
                    "58" =>  [
                        "id" =>  59,
                        "province_id" =>  6,
                        "name" =>  "Western Rukum",
                        "area_sq_km" =>  "1213.49",
                        "website" =>  "https:\/\/dccrukum.gov.np\/",
                        "headquarter" =>  "Musikot",
                        "municipalities" =>  [
                            "586" =>  [
                                "id" =>  587,
                                "district_id" =>  59,
                                "category_id" =>  3,
                                "name" =>  "Aathabiskot Municipality",
                                "area_sq_km" =>  "560.34",
                                "website" =>  "http:\/\/www.aathbiskotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "587" =>  [
                                "id" =>  588,
                                "district_id" =>  59,
                                "category_id" =>  3,
                                "name" =>  "Musikot Municipality",
                                "area_sq_km" =>  "136.06",
                                "website" =>  "http:\/\/www.musikotmunrukum.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "588" =>  [
                                "id" =>  589,
                                "district_id" =>  59,
                                "category_id" =>  3,
                                "name" =>  "Chaurjahari Municipality",
                                "area_sq_km" =>  "107.38",
                                "website" =>  "http:\/\/www.chaurjaharimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "589" =>  [
                                "id" =>  590,
                                "district_id" =>  59,
                                "category_id" =>  4,
                                "name" =>  "SaniBheri Rural Municipality",
                                "area_sq_km" =>  "133.8",
                                "website" =>  "http:\/\/www.sanibherimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "590" =>  [
                                "id" =>  591,
                                "district_id" =>  59,
                                "category_id" =>  4,
                                "name" =>  "Triveni Rural Municipality",
                                "area_sq_km" =>  "85.49",
                                "website" =>  "http:\/\/www.trivenimunrukum.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "591" =>  [
                                "id" =>  592,
                                "district_id" =>  59,
                                "category_id" =>  4,
                                "name" =>  "Banphikot Rural Municipality",
                                "area_sq_km" =>  "190.42",
                                "website" =>  "http:\/\/www.banphikotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ]
                        ]
                    ],
                    "59" =>  [
                        "id" =>  60,
                        "province_id" =>  6,
                        "name" =>  "Salyan",
                        "area_sq_km" =>  "1462",
                        "website" =>  "https:\/\/dccsalyan.gov.np\/",
                        "headquarter" =>  "Salyan",
                        "municipalities" =>  [
                            "592" =>  [
                                "id" =>  593,
                                "district_id" =>  60,
                                "category_id" =>  4,
                                "name" =>  "Kumakh Rural Municipality",
                                "area_sq_km" =>  "177.28",
                                "website" =>  "http:\/\/www.kumakhmalikamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "593" =>  [
                                "id" =>  594,
                                "district_id" =>  60,
                                "category_id" =>  4,
                                "name" =>  "Kalimati Rural Municipality",
                                "area_sq_km" =>  "500.72",
                                "website" =>  "http:\/\/www.kalimatimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "594" =>  [
                                "id" =>  595,
                                "district_id" =>  60,
                                "category_id" =>  4,
                                "name" =>  "Chhatreshwari Rural Municipality",
                                "area_sq_km" =>  "150.69",
                                "website" =>  "http:\/\/www.chhatreshworimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "595" =>  [
                                "id" =>  596,
                                "district_id" =>  60,
                                "category_id" =>  4,
                                "name" =>  "Darma Rural Municipality",
                                "area_sq_km" =>  "81.46",
                                "website" =>  "http:\/\/www.darmamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "596" =>  [
                                "id" =>  597,
                                "district_id" =>  60,
                                "category_id" =>  4,
                                "name" =>  "Kapurkot Rural Municipality",
                                "area_sq_km" =>  "119.21",
                                "website" =>  "http:\/\/www.kapurkotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "597" =>  [
                                "id" =>  598,
                                "district_id" =>  60,
                                "category_id" =>  4,
                                "name" =>  "Triveni Rural Municipality",
                                "area_sq_km" =>  "119.11",
                                "website" =>  "http:\/\/www.trivenimunsalyan.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "598" =>  [
                                "id" =>  599,
                                "district_id" =>  60,
                                "category_id" =>  4,
                                "name" =>  "Siddha Kumakh Rural Municipality",
                                "area_sq_km" =>  "89.36",
                                "website" =>  "http:\/\/www.siddhakumakhmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "599" =>  [
                                "id" =>  600,
                                "district_id" =>  60,
                                "category_id" =>  3,
                                "name" =>  "Bagchaur Municipality",
                                "area_sq_km" =>  "163.14",
                                "website" =>  "http:\/\/www.bagchaurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "600" =>  [
                                "id" =>  601,
                                "district_id" =>  60,
                                "category_id" =>  3,
                                "name" =>  "Shaarda Municipality",
                                "area_sq_km" =>  "198.34",
                                "website" =>  "http:\/\/www.shaaradamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15
                                ]
                            ],
                            "601" =>  [
                                "id" =>  602,
                                "district_id" =>  60,
                                "category_id" =>  3,
                                "name" =>  "Bangad Kupinde Municipality",
                                "area_sq_km" =>  "338.21",
                                "website" =>  "http:\/\/www.bangadkupindemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ]
                        ]
                    ],
                    "60" =>  [
                        "id" =>  61,
                        "province_id" =>  6,
                        "name" =>  "Dolpa",
                        "area_sq_km" =>  "7889",
                        "website" =>  "https:\/\/dccdolpa.gov.np\/",
                        "headquarter" =>  "Dunai",
                        "municipalities" =>  [
                            "602" =>  [
                                "id" =>  603,
                                "district_id" =>  61,
                                "category_id" =>  4,
                                "name" =>  "Mudkechula Rural Municipality",
                                "area_sq_km" =>  "250.08",
                                "website" =>  "http:\/\/www.mudkechulamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "603" =>  [
                                "id" =>  604,
                                "district_id" =>  61,
                                "category_id" =>  4,
                                "name" =>  "Kaike Rural Municipality",
                                "area_sq_km" =>  "466.6",
                                "website" =>  "http:\/\/www.kaikemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "604" =>  [
                                "id" =>  605,
                                "district_id" =>  61,
                                "category_id" =>  4,
                                "name" =>  "She Phoksundo Rural Municipality",
                                "area_sq_km" =>  "123.07",
                                "website" =>  "http:\/\/www.shephoksundomun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "605" =>  [
                                "id" =>  606,
                                "district_id" =>  61,
                                "category_id" =>  4,
                                "name" =>  "Jagadulla Rural Municipality",
                                "area_sq_km" =>  "83.31",
                                "website" =>  "http:\/\/www.jagdullamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "606" =>  [
                                "id" =>  607,
                                "district_id" =>  61,
                                "category_id" =>  4,
                                "name" =>  "Dolpo Buddha Rural Municipality",
                                "area_sq_km" =>  "377.38",
                                "website" =>  "http:\/\/www.dolpobuddhamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "607" =>  [
                                "id" =>  608,
                                "district_id" =>  61,
                                "category_id" =>  4,
                                "name" =>  "Chharka Tongsong Rural Municipality",
                                "area_sq_km" =>  "345.57",
                                "website" =>  "http:\/\/www.chharkatangsongmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "608" =>  [
                                "id" =>  609,
                                "district_id" =>  61,
                                "category_id" =>  3,
                                "name" =>  "Thuli Bheri Municipality",
                                "area_sq_km" =>  "421.34",
                                "website" =>  "http:\/\/www.thulibherimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "609" =>  [
                                "id" =>  610,
                                "district_id" =>  61,
                                "category_id" =>  3,
                                "name" =>  "Tripurasundari Municipality",
                                "area_sq_km" =>  "393.54",
                                "website" =>  "http:\/\/www.tripurasundarimundolpa.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ]
                        ]
                    ],
                    "61" =>  [
                        "id" =>  62,
                        "province_id" =>  6,
                        "name" =>  "Humla",
                        "area_sq_km" =>  "5655",
                        "website" =>  "https:\/\/dcchumla.gov.np\/",
                        "headquarter" =>  "Simikot",
                        "municipalities" =>  [
                            "610" =>  [
                                "id" =>  611,
                                "district_id" =>  62,
                                "category_id" =>  4,
                                "name" =>  "Simkot Rural Municipality",
                                "area_sq_km" =>  "785.89",
                                "website" =>  "http:\/\/www.simkotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "611" =>  [
                                "id" =>  612,
                                "district_id" =>  62,
                                "category_id" =>  4,
                                "name" =>  "Sarkegad Rural Municipality",
                                "area_sq_km" =>  "306.7",
                                "website" =>  "http:\/\/www.sarkegadmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "612" =>  [
                                "id" =>  613,
                                "district_id" =>  62,
                                "category_id" =>  4,
                                "name" =>  "Adanchuli Rural Municipality",
                                "area_sq_km" =>  "150.61",
                                "website" =>  "http:\/\/www.adanchulimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "613" =>  [
                                "id" =>  614,
                                "district_id" =>  62,
                                "category_id" =>  4,
                                "name" =>  "Kharpunath Rural Municipality",
                                "area_sq_km" =>  "880",
                                "website" =>  "http:\/\/www.kharpunathmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "614" =>  [
                                "id" =>  615,
                                "district_id" =>  62,
                                "category_id" =>  4,
                                "name" =>  "Tanjakot Rural Municipality",
                                "area_sq_km" =>  "159.1",
                                "website" =>  "http:\/\/www.tajakotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "615" =>  [
                                "id" =>  616,
                                "district_id" =>  62,
                                "category_id" =>  4,
                                "name" =>  "Chankheli Rural Municipality",
                                "area_sq_km" =>  "1310.41",
                                "website" =>  "http:\/\/www.chankhelimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "616" =>  [
                                "id" =>  617,
                                "district_id" =>  62,
                                "category_id" =>  4,
                                "name" =>  "Namkha Rural Municipality",
                                "area_sq_km" =>  "2419.64",
                                "website" =>  "http:\/\/www.namkhamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    "62" =>  [
                        "id" =>  63,
                        "province_id" =>  6,
                        "name" =>  "Jumla",
                        "area_sq_km" =>  "2531",
                        "website" =>  "https:\/\/dccjumla.gov.np\/",
                        "headquarter" =>  "Chandannath",
                        "municipalities" =>  [
                            "617" =>  [
                                "id" =>  618,
                                "district_id" =>  63,
                                "category_id" =>  4,
                                "name" =>  "Tatopani Rural Municipality",
                                "area_sq_km" =>  "525.56",
                                "website" =>  "http:\/\/www.tatopanimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "618" =>  [
                                "id" =>  619,
                                "district_id" =>  63,
                                "category_id" =>  4,
                                "name" =>  "Patarasi Rural Municipality",
                                "area_sq_km" =>  "814.07",
                                "website" =>  "http:\/\/www.patarasimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "619" =>  [
                                "id" =>  620,
                                "district_id" =>  63,
                                "category_id" =>  4,
                                "name" =>  "Tila Rural Municipality",
                                "area_sq_km" =>  "175.49",
                                "website" =>  "http:\/\/www.tilamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "620" =>  [
                                "id" =>  621,
                                "district_id" =>  63,
                                "category_id" =>  4,
                                "name" =>  "Kanaka Sundari Rural Municipality",
                                "area_sq_km" =>  "225.39",
                                "website" =>  "http:\/\/www.kankasundarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "621" =>  [
                                "id" =>  622,
                                "district_id" =>  63,
                                "category_id" =>  4,
                                "name" =>  "Sinja Rural Municipality",
                                "area_sq_km" =>  "153.29",
                                "website" =>  "http:\/\/www.sinjamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "622" =>  [
                                "id" =>  623,
                                "district_id" =>  63,
                                "category_id" =>  4,
                                "name" =>  "Hima Rural Municipality",
                                "area_sq_km" =>  "132.32",
                                "website" =>  "http:\/\/www.himamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "623" =>  [
                                "id" =>  624,
                                "district_id" =>  63,
                                "category_id" =>  4,
                                "name" =>  "Guthichaur Rural Municipality",
                                "area_sq_km" =>  "427",
                                "website" =>  "http:\/\/www.guthichaurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "624" =>  [
                                "id" =>  625,
                                "district_id" =>  63,
                                "category_id" =>  3,
                                "name" =>  "Chandannath Municipality",
                                "area_sq_km" =>  "102.03",
                                "website" =>  "http:\/\/www.chandannathmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ]
                        ]
                    ],
                    "63" =>  [
                        "id" =>  64,
                        "province_id" =>  6,
                        "name" =>  "Kalikot",
                        "area_sq_km" =>  "1741",
                        "website" =>  "https:\/\/dcckalikot.gov.np\/",
                        "headquarter" =>  "Manma",
                        "municipalities" =>  [
                            "625" =>  [
                                "id" =>  626,
                                "district_id" =>  64,
                                "category_id" =>  3,
                                "name" =>  "Khandachakra Municipality",
                                "area_sq_km" =>  "133.29",
                                "website" =>  "http:\/\/www.khandachakramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "626" =>  [
                                "id" =>  627,
                                "district_id" =>  64,
                                "category_id" =>  3,
                                "name" =>  "Raskot Municipality",
                                "area_sq_km" =>  "59.73",
                                "website" =>  "http:\/\/www.raskotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "627" =>  [
                                "id" =>  628,
                                "district_id" =>  64,
                                "category_id" =>  3,
                                "name" =>  "Tilagufa Municipality",
                                "area_sq_km" =>  "262.56",
                                "website" =>  "http:\/\/www.tilagufamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "628" =>  [
                                "id" =>  629,
                                "district_id" =>  64,
                                "category_id" =>  4,
                                "name" =>  "Narharinath Rural Municipality",
                                "area_sq_km" =>  "143.86",
                                "website" =>  "http:\/\/www.narharinathmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "629" =>  [
                                "id" =>  630,
                                "district_id" =>  64,
                                "category_id" =>  4,
                                "name" =>  "Palata Rural Municipality",
                                "area_sq_km" =>  "318.84",
                                "website" =>  "http:\/\/www.palatamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "630" =>  [
                                "id" =>  631,
                                "district_id" =>  64,
                                "category_id" =>  4,
                                "name" =>  "Shubha Kalika Rural Municipality",
                                "area_sq_km" =>  "97.32",
                                "website" =>  "http:\/\/www.kalikamunkalikot.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "631" =>  [
                                "id" =>  632,
                                "district_id" =>  64,
                                "category_id" =>  4,
                                "name" =>  "Sanni Triveni Rural Municipality",
                                "area_sq_km" =>  "136.71",
                                "website" =>  "http:\/\/www.sannitrivenimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "632" =>  [
                                "id" =>  633,
                                "district_id" =>  64,
                                "category_id" =>  4,
                                "name" =>  "Pachaljharana Rural Municipality",
                                "area_sq_km" =>  "166.92",
                                "website" =>  "http:\/\/www.pachaljharanamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "633" =>  [
                                "id" =>  634,
                                "district_id" =>  64,
                                "category_id" =>  4,
                                "name" =>  "Mahawai Rural Municipality",
                                "area_sq_km" =>  "322.07",
                                "website" =>  "http:\/\/www.mahawaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ]
                        ]
                    ],
                    "64" =>  [
                        "id" =>  65,
                        "province_id" =>  6,
                        "name" =>  "Mugu",
                        "area_sq_km" =>  "3535",
                        "website" =>  "https:\/\/dccmugu.gov.np\/",
                        "headquarter" =>  "Gamgadhi",
                        "municipalities" =>  [
                            "634" =>  [
                                "id" =>  635,
                                "district_id" =>  65,
                                "category_id" =>  4,
                                "name" =>  "Khatyad Rural Municipality",
                                "area_sq_km" =>  "281.12",
                                "website" =>  "http:\/\/www.khatyadmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "635" =>  [
                                "id" =>  636,
                                "district_id" =>  65,
                                "category_id" =>  4,
                                "name" =>  "Soru Rural Municipality",
                                "area_sq_km" =>  "365.8",
                                "website" =>  "http:\/\/www.sorumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "636" =>  [
                                "id" =>  637,
                                "district_id" =>  65,
                                "category_id" =>  4,
                                "name" =>  "Mugum Karmarong Rural Municipality",
                                "area_sq_km" =>  "2106.91",
                                "website" =>  "http:\/\/www.mugumkarmarongmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "637" =>  [
                                "id" =>  638,
                                "district_id" =>  65,
                                "category_id" =>  3,
                                "name" =>  "Chhayanath Rara Municipality",
                                "area_sq_km" =>  "480.67",
                                "website" =>  "http:\/\/www.chhayanathraramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ]
                        ]
                    ],
                    "65" =>  [
                        "id" =>  66,
                        "province_id" =>  6,
                        "name" =>  "Surkhet",
                        "area_sq_km" =>  "2451",
                        "website" =>  "https:\/\/dccsurkhet.gov.np\/",
                        "headquarter" =>  "Birendranagar",
                        "municipalities" =>  [
                            "638" =>  [
                                "id" =>  639,
                                "district_id" =>  66,
                                "category_id" =>  4,
                                "name" =>  "Simta Rural Municipality",
                                "area_sq_km" =>  "241.64",
                                "website" =>  "http:\/\/www.simtamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "639" =>  [
                                "id" =>  640,
                                "district_id" =>  66,
                                "category_id" =>  4,
                                "name" =>  "Barahatal Rural Municipality",
                                "area_sq_km" =>  "455.09",
                                "website" =>  "http:\/\/www.barahatalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "640" =>  [
                                "id" =>  641,
                                "district_id" =>  66,
                                "category_id" =>  4,
                                "name" =>  "Chaukune Rural Municipality",
                                "area_sq_km" =>  "381.01",
                                "website" =>  "http:\/\/www.chaukunemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "641" =>  [
                                "id" =>  642,
                                "district_id" =>  66,
                                "category_id" =>  4,
                                "name" =>  "Chingad Rural Municipality",
                                "area_sq_km" =>  "170.19",
                                "website" =>  "http:\/\/www.chingadmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "642" =>  [
                                "id" =>  643,
                                "district_id" =>  66,
                                "category_id" =>  3,
                                "name" =>  "Gurbhakot Municipality",
                                "area_sq_km" =>  "228.62",
                                "website" =>  "http:\/\/www.gurbhakotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "643" =>  [
                                "id" =>  644,
                                "district_id" =>  66,
                                "category_id" =>  3,
                                "name" =>  "Birendranagar Municipality",
                                "area_sq_km" =>  "245.06",
                                "website" =>  "http:\/\/www.birendranagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16
                                ]
                            ],
                            "644" =>  [
                                "id" =>  645,
                                "district_id" =>  66,
                                "category_id" =>  3,
                                "name" =>  "Bheriganga Municipality",
                                "area_sq_km" =>  "256.2",
                                "website" =>  "http:\/\/www.bherigangamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "645" =>  [
                                "id" =>  646,
                                "district_id" =>  66,
                                "category_id" =>  3,
                                "name" =>  "Panchapuri Municipality",
                                "area_sq_km" =>  "329.9",
                                "website" =>  "http:\/\/www.panchapurimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "646" =>  [
                                "id" =>  647,
                                "district_id" =>  66,
                                "category_id" =>  3,
                                "name" =>  "Lekbeshi Municipality",
                                "area_sq_km" =>  "180.92",
                                "website" =>  "http:\/\/www.lekbeshimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ]
                        ]
                    ],
                    "66" =>  [
                        "id" =>  67,
                        "province_id" =>  6,
                        "name" =>  "Dailekh",
                        "area_sq_km" =>  "1502",
                        "website" =>  "https:\/\/dccdailekh.gov.np\/",
                        "headquarter" =>  "Dailekh",
                        "municipalities" =>  [
                            "647" =>  [
                                "id" =>  648,
                                "district_id" =>  67,
                                "category_id" =>  3,
                                "name" =>  "Dullu Municipality",
                                "area_sq_km" =>  "156.77",
                                "website" =>  "http:\/\/www.dullumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "648" =>  [
                                "id" =>  649,
                                "district_id" =>  67,
                                "category_id" =>  4,
                                "name" =>  "Gurans Rural Municipality",
                                "area_sq_km" =>  "164.79",
                                "website" =>  "http:\/\/www.guransmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "649" =>  [
                                "id" =>  650,
                                "district_id" =>  67,
                                "category_id" =>  4,
                                "name" =>  "Bhairabi Rural Municipality",
                                "area_sq_km" =>  "110.46",
                                "website" =>  "http:\/\/www.bhairabimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "650" =>  [
                                "id" =>  651,
                                "district_id" =>  67,
                                "category_id" =>  4,
                                "name" =>  "Naumule Rural Municipality",
                                "area_sq_km" =>  "228.59",
                                "website" =>  "http:\/\/www.naumulemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "651" =>  [
                                "id" =>  652,
                                "district_id" =>  67,
                                "category_id" =>  4,
                                "name" =>  "Mahabu Rural Municipality",
                                "area_sq_km" =>  "110.8",
                                "website" =>  "http:\/\/www.mahabumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "652" =>  [
                                "id" =>  653,
                                "district_id" =>  67,
                                "category_id" =>  4,
                                "name" =>  "Thantikandh Rural Municipality",
                                "area_sq_km" =>  "88.22",
                                "website" =>  "http:\/\/www.thantikandhmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "653" =>  [
                                "id" =>  654,
                                "district_id" =>  67,
                                "category_id" =>  4,
                                "name" =>  "Bhagawatimai Rural Municipality",
                                "area_sq_km" =>  "151.52",
                                "website" =>  "http:\/\/www.bhagawatimaimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "654" =>  [
                                "id" =>  655,
                                "district_id" =>  67,
                                "category_id" =>  4,
                                "name" =>  "Dungeshwar Rural Municipality",
                                "area_sq_km" =>  "105.19",
                                "website" =>  "http:\/\/www.dungeshwormun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "655" =>  [
                                "id" =>  656,
                                "district_id" =>  67,
                                "category_id" =>  3,
                                "name" =>  "Aathabis Municipality",
                                "area_sq_km" =>  "168",
                                "website" =>  "http:\/\/www.aathabismun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "656" =>  [
                                "id" =>  657,
                                "district_id" =>  67,
                                "category_id" =>  3,
                                "name" =>  "Narayan Municipality",
                                "area_sq_km" =>  "110.63",
                                "website" =>  "http:\/\/www.narayanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "657" =>  [
                                "id" =>  658,
                                "district_id" =>  67,
                                "category_id" =>  3,
                                "name" =>  "Chamunda Bindrasaini Municipality",
                                "area_sq_km" =>  "90.6",
                                "website" =>  "http:\/\/www.chamundabindrasainimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ]
                        ]
                    ],
                    "67" =>  [
                        "id" =>  68,
                        "province_id" =>  6,
                        "name" =>  "Jajarkot",
                        "area_sq_km" =>  "2230",
                        "website" =>  "https:\/\/dccjajarkot.gov.np\/",
                        "headquarter" =>  "Khalanga",
                        "municipalities" =>  [
                            "658" =>  [
                                "id" =>  659,
                                "district_id" =>  68,
                                "category_id" =>  3,
                                "name" =>  "Chhedagad Municipality",
                                "area_sq_km" =>  "284.2",
                                "website" =>  "http:\/\/www.chhedagadmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "659" =>  [
                                "id" =>  660,
                                "district_id" =>  68,
                                "category_id" =>  3,
                                "name" =>  "Bheri Municipality",
                                "area_sq_km" =>  "219.77",
                                "website" =>  "http:\/\/www.bherimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "660" =>  [
                                "id" =>  661,
                                "district_id" =>  68,
                                "category_id" =>  3,
                                "name" =>  "Nalgad Municipality",
                                "area_sq_km" =>  "387.44",
                                "website" =>  "http:\/\/www.tribeninalgaadmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13
                                ]
                            ],
                            "661" =>  [
                                "id" =>  662,
                                "district_id" =>  68,
                                "category_id" =>  4,
                                "name" =>  "Junichande Rural Municipality",
                                "area_sq_km" =>  "346.21",
                                "website" =>  "http:\/\/www.junichaandemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "662" =>  [
                                "id" =>  663,
                                "district_id" =>  68,
                                "category_id" =>  4,
                                "name" =>  "Kuse Rural Municipality",
                                "area_sq_km" =>  "273.97",
                                "website" =>  "http:\/\/www.kushemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "663" =>  [
                                "id" =>  664,
                                "district_id" =>  68,
                                "category_id" =>  4,
                                "name" =>  "Barekot Rural Municipality",
                                "area_sq_km" =>  "577.5",
                                "website" =>  "http:\/\/www.barekotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "664" =>  [
                                "id" =>  665,
                                "district_id" =>  68,
                                "category_id" =>  4,
                                "name" =>  "Shivalaya Rural Municipality",
                                "area_sq_km" =>  "134.26",
                                "website" =>  "http:\/\/www.shibalayamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                "id" =>  7,
                "name" =>  "Sudur Paschimanchal",
                "area_sq_km" =>  "19539",
                "website" =>  "https:\/\/sudurpashchim.gov.np\/",
                "headquarter" =>  "Godawari",
                "districts" =>  [
                    "68" =>  [
                        "id" =>  69,
                        "province_id" =>  7,
                        "name" =>  "Darchula",
                        "area_sq_km" =>  "2344.61",
                        "website" =>  "https:\/\/ddcdarchula.gov.np\/",
                        "headquarter" =>  "Darchula",
                        "municipalities" =>  [
                            "665" =>  [
                                "id" =>  666,
                                "district_id" =>  69,
                                "category_id" =>  3,
                                "name" =>  "Mahakali Municipality",
                                "area_sq_km" =>  "135.11",
                                "website" =>  "http:\/\/www.mahakalimundarchula.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "666" =>  [
                                "id" =>  667,
                                "district_id" =>  69,
                                "category_id" =>  3,
                                "name" =>  "Shailyashikhar Municipality",
                                "area_sq_km" =>  "117.81",
                                "website" =>  "http:\/\/www.shailyashikharmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "667" =>  [
                                "id" =>  668,
                                "district_id" =>  69,
                                "category_id" =>  4,
                                "name" =>  "Naugad Rural Municipality",
                                "area_sq_km" =>  "180.27",
                                "website" =>  "http:\/\/www.naugadmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "668" =>  [
                                "id" =>  669,
                                "district_id" =>  69,
                                "category_id" =>  4,
                                "name" =>  "Malikarjun Rural Municipality",
                                "area_sq_km" =>  "100.82",
                                "website" =>  "http:\/\/www.malikarjunmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "669" =>  [
                                "id" =>  670,
                                "district_id" =>  69,
                                "category_id" =>  4,
                                "name" =>  "Marma Rural Municipality",
                                "area_sq_km" =>  "208.06",
                                "website" =>  "http:\/\/www.marmamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "670" =>  [
                                "id" =>  671,
                                "district_id" =>  69,
                                "category_id" =>  4,
                                "name" =>  "Lekam Rural Municipality",
                                "area_sq_km" =>  "83.98",
                                "website" =>  "http:\/\/www.lekammun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "671" =>  [
                                "id" =>  672,
                                "district_id" =>  69,
                                "category_id" =>  4,
                                "name" =>  "Duhun Rural Municipality",
                                "area_sq_km" =>  "65.35",
                                "website" =>  "http:\/\/www.duhunmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "672" =>  [
                                "id" =>  673,
                                "district_id" =>  69,
                                "category_id" =>  4,
                                "name" =>  "Vyans Rural Municipality",
                                "area_sq_km" =>  "839.26",
                                "website" =>  "http:\/\/www.vyansmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "673" =>  [
                                "id" =>  674,
                                "district_id" =>  69,
                                "category_id" =>  4,
                                "name" =>  "Apihimal Rural Municipality",
                                "area_sq_km" =>  "613.95",
                                "website" =>  "http:\/\/www.apihimalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    "69" =>  [
                        "id" =>  70,
                        "province_id" =>  7,
                        "name" =>  "Bajhang",
                        "area_sq_km" =>  "3394.21",
                        "website" =>  "https:\/\/dccbajhang.gov.np\/",
                        "headquarter" =>  "Jayaprithvi",
                        "municipalities" =>  [
                            "674" =>  [
                                "id" =>  675,
                                "district_id" =>  70,
                                "category_id" =>  3,
                                "name" =>  "Jayaprithvi Municipality",
                                "area_sq_km" =>  "166.79",
                                "website" =>  "http:\/\/www.jayaprithvimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "675" =>  [
                                "id" =>  676,
                                "district_id" =>  70,
                                "category_id" =>  3,
                                "name" =>  "Bungal Municipality",
                                "area_sq_km" =>  "447.59",
                                "website" =>  "http:\/\/www.bungalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "676" =>  [
                                "id" =>  677,
                                "district_id" =>  70,
                                "category_id" =>  4,
                                "name" =>  "Kedarsyu Rural Municipality",
                                "area_sq_km" =>  "113.91",
                                "website" =>  "http:\/\/www.kedarasyumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "677" =>  [
                                "id" =>  678,
                                "district_id" =>  70,
                                "category_id" =>  4,
                                "name" =>  "Thalara Rural Municipality",
                                "area_sq_km" =>  "105.51",
                                "website" =>  "http:\/\/www.thalaramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "678" =>  [
                                "id" =>  679,
                                "district_id" =>  70,
                                "category_id" =>  4,
                                "name" =>  "Bitthadchir Rural Municipality",
                                "area_sq_km" =>  "86.15",
                                "website" =>  "http:\/\/www.bitthadchirmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "679" =>  [
                                "id" =>  680,
                                "district_id" =>  70,
                                "category_id" =>  4,
                                "name" =>  "Chhabis Pathibhera Rural Municipality",
                                "area_sq_km" =>  "116.34",
                                "website" =>  "http:\/\/www.chhabispathiveramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "680" =>  [
                                "id" =>  681,
                                "district_id" =>  70,
                                "category_id" =>  4,
                                "name" =>  "Khaptadchhanna Rural Municipality",
                                "area_sq_km" =>  "113.52",
                                "website" =>  "http:\/\/www.khaptadchhannamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "681" =>  [
                                "id" =>  682,
                                "district_id" =>  70,
                                "category_id" =>  4,
                                "name" =>  "Masta Rural Municipality",
                                "area_sq_km" =>  "109.24",
                                "website" =>  "http:\/\/www.mastamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "682" =>  [
                                "id" =>  683,
                                "district_id" =>  70,
                                "category_id" =>  4,
                                "name" =>  "Durgathali Rural Municipality",
                                "area_sq_km" =>  "61.83",
                                "website" =>  "http:\/\/www.durgathalimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "683" =>  [
                                "id" =>  684,
                                "district_id" =>  70,
                                "category_id" =>  4,
                                "name" =>  "Talkot Rural Municipality",
                                "area_sq_km" =>  "335.26",
                                "website" =>  "http:\/\/www.talkotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "684" =>  [
                                "id" =>  685,
                                "district_id" =>  70,
                                "category_id" =>  4,
                                "name" =>  "Surma Rural Municipality",
                                "area_sq_km" =>  "270.8",
                                "website" =>  "http:\/\/www.surmamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "685" =>  [
                                "id" =>  686,
                                "district_id" =>  70,
                                "category_id" =>  4,
                                "name" =>  "Saipal Rural Municipality",
                                "area_sq_km" =>  "1467.27",
                                "website" =>  "http:\/\/www.kandamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "70" =>  [
                        "id" =>  71,
                        "province_id" =>  7,
                        "name" =>  "Bajura",
                        "area_sq_km" =>  "2300.34",
                        "website" =>  "https:\/\/dccbajura.gov.np\/",
                        "headquarter" =>  "Badimalika",
                        "municipalities" =>  [
                            "686" =>  [
                                "id" =>  687,
                                "district_id" =>  71,
                                "category_id" =>  3,
                                "name" =>  "Badimalika Municipality",
                                "area_sq_km" =>  "276",
                                "website" =>  "http:\/\/www.badimalikamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "687" =>  [
                                "id" =>  688,
                                "district_id" =>  71,
                                "category_id" =>  3,
                                "name" =>  "Triveni Municipality",
                                "area_sq_km" =>  "170.32",
                                "website" =>  "http:\/\/www.trivenimunbajura.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "688" =>  [
                                "id" =>  689,
                                "district_id" =>  71,
                                "category_id" =>  3,
                                "name" =>  "Budhiganga Municipality",
                                "area_sq_km" =>  "59.2",
                                "website" =>  "http:\/\/www.budhigangamunbajura.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "689" =>  [
                                "id" =>  690,
                                "district_id" =>  71,
                                "category_id" =>  3,
                                "name" =>  "Budhinanda Municipality",
                                "area_sq_km" =>  "232.48",
                                "website" =>  "http:\/\/www.budhinandamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "690" =>  [
                                "id" =>  691,
                                "district_id" =>  71,
                                "category_id" =>  4,
                                "name" =>  "Khaptad Chhededaha Rural Municipality",
                                "area_sq_km" =>  "135.08",
                                "website" =>  "http:\/\/www.chhededahamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "691" =>  [
                                "id" =>  692,
                                "district_id" =>  71,
                                "category_id" =>  4,
                                "name" =>  "Swami Kartik Khapar Rural Municipality",
                                "area_sq_km" =>  "110.55",
                                "website" =>  "http:\/\/www.swamikartikmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "692" =>  [
                                "id" =>  693,
                                "district_id" =>  71,
                                "category_id" =>  4,
                                "name" =>  "Jagannath Rural Municipality",
                                "area_sq_km" =>  "171.72",
                                "website" =>  "http:\/\/www.jagganathmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "693" =>  [
                                "id" =>  694,
                                "district_id" =>  71,
                                "category_id" =>  4,
                                "name" =>  "Himali Rural Municipality",
                                "area_sq_km" =>  "830.33",
                                "website" =>  "http:\/\/www.himalimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "694" =>  [
                                "id" =>  695,
                                "district_id" =>  71,
                                "category_id" =>  4,
                                "name" =>  "Gaumul Rural Municipality",
                                "area_sq_km" =>  "314.66",
                                "website" =>  "http:\/\/www.gaumulmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    "71" =>  [
                        "id" =>  72,
                        "province_id" =>  7,
                        "name" =>  "Baitadi",
                        "area_sq_km" =>  "1496.04",
                        "website" =>  "https:\/\/dccbaitadi.gov.np\/",
                        "headquarter" =>  "Dasharathchand",
                        "municipalities" =>  [
                            "695" =>  [
                                "id" =>  696,
                                "district_id" =>  72,
                                "category_id" =>  3,
                                "name" =>  "Dashrathchanda Municipality",
                                "area_sq_km" =>  "135.15",
                                "website" =>  "http:\/\/www.dasharathchandmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "696" =>  [
                                "id" =>  697,
                                "district_id" =>  72,
                                "category_id" =>  3,
                                "name" =>  "Patan Municipality",
                                "area_sq_km" =>  "219.26",
                                "website" =>  "http:\/\/www.patanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "697" =>  [
                                "id" =>  698,
                                "district_id" =>  72,
                                "category_id" =>  3,
                                "name" =>  "Melauli Municipality",
                                "area_sq_km" =>  "119.43",
                                "website" =>  "http:\/\/www.melaulimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "698" =>  [
                                "id" =>  699,
                                "district_id" =>  72,
                                "category_id" =>  3,
                                "name" =>  "Purchaudi Municipality",
                                "area_sq_km" =>  "198.52",
                                "website" =>  "http:\/\/www.purchaudimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "699" =>  [
                                "id" =>  700,
                                "district_id" =>  72,
                                "category_id" =>  4,
                                "name" =>  "Dogdakedar Rural Municipality",
                                "area_sq_km" =>  "126.38",
                                "website" =>  "http:\/\/www.dogdakedarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "700" =>  [
                                "id" =>  701,
                                "district_id" =>  72,
                                "category_id" =>  4,
                                "name" =>  "Dilashaini Rural Municipality",
                                "area_sq_km" =>  "125.28",
                                "website" =>  "http:\/\/www.dilasainimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "701" =>  [
                                "id" =>  702,
                                "district_id" =>  72,
                                "category_id" =>  4,
                                "name" =>  "Sigas Rural Municipality",
                                "area_sq_km" =>  "245.44",
                                "website" =>  "http:\/\/www.sigasmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "702" =>  [
                                "id" =>  703,
                                "district_id" =>  72,
                                "category_id" =>  4,
                                "name" =>  "Pancheshwar Rural Municipality",
                                "area_sq_km" =>  "120.41",
                                "website" =>  "http:\/\/www.pancheshwormun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "703" =>  [
                                "id" =>  704,
                                "district_id" =>  72,
                                "category_id" =>  4,
                                "name" =>  "Surnaya Rural Municipality",
                                "area_sq_km" =>  "124.52",
                                "website" =>  "http:\/\/www.sunaryamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "704" =>  [
                                "id" =>  705,
                                "district_id" =>  72,
                                "category_id" =>  4,
                                "name" =>  "Shivanath Rural Municipality",
                                "area_sq_km" =>  "81.65",
                                "website" =>  "http:\/\/www.shivanathmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ]
                        ]
                    ],
                    "72" =>  [
                        "id" =>  73,
                        "province_id" =>  7,
                        "name" =>  "Doti",
                        "area_sq_km" =>  "2295.71",
                        "website" =>  "https:\/\/dccdoti.gov.np\/",
                        "headquarter" =>  "Dipayal Silgadhi",
                        "municipalities" =>  [
                            "705" =>  [
                                "id" =>  706,
                                "district_id" =>  73,
                                "category_id" =>  3,
                                "name" =>  "Dipayal Silgadhi Municipality",
                                "area_sq_km" =>  "162.62",
                                "website" =>  "http:\/\/www.dipayalsilgadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "706" =>  [
                                "id" =>  707,
                                "district_id" =>  73,
                                "category_id" =>  3,
                                "name" =>  "Shikhar Municipality",
                                "area_sq_km" =>  "585.37",
                                "website" =>  "http:\/\/www.shikharmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "707" =>  [
                                "id" =>  708,
                                "district_id" =>  73,
                                "category_id" =>  4,
                                "name" =>  "Aadarsha Rural Municipality",
                                "area_sq_km" =>  "128.47",
                                "website" =>  "http:\/\/www.aadarshamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "708" =>  [
                                "id" =>  709,
                                "district_id" =>  73,
                                "category_id" =>  4,
                                "name" =>  "Purbichauki Rural Municipality",
                                "area_sq_km" =>  "117.66",
                                "website" =>  "http:\/\/www.purbichaukimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "709" =>  [
                                "id" =>  710,
                                "district_id" =>  73,
                                "category_id" =>  4,
                                "name" =>  "K.I.Singh Rural Municipality",
                                "area_sq_km" =>  "127.01",
                                "website" =>  "http:\/\/www.kisinghmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "710" =>  [
                                "id" =>  711,
                                "district_id" =>  73,
                                "category_id" =>  4,
                                "name" =>  "Jorayal Rural Municipality",
                                "area_sq_km" =>  "419.09",
                                "website" =>  "http:\/\/www.jorayalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "711" =>  [
                                "id" =>  712,
                                "district_id" =>  73,
                                "category_id" =>  4,
                                "name" =>  "Sayal Rural Municipality",
                                "area_sq_km" =>  "122.72",
                                "website" =>  "http:\/\/www.sayalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "712" =>  [
                                "id" =>  713,
                                "district_id" =>  73,
                                "category_id" =>  4,
                                "name" =>  "Bogatan-Phudsil Rural Municipality",
                                "area_sq_km" =>  "300.22",
                                "website" =>  "http:\/\/www.bogatanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "713" =>  [
                                "id" =>  714,
                                "district_id" =>  73,
                                "category_id" =>  4,
                                "name" =>  "Badikedar Rural Municipality",
                                "area_sq_km" =>  "332.55",
                                "website" =>  "http:\/\/www.badikedarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "73" =>  [
                        "id" =>  74,
                        "province_id" =>  7,
                        "name" =>  "Acham",
                        "area_sq_km" =>  "1692",
                        "website" =>  "https:\/\/dccacham.gov.np\/",
                        "headquarter" =>  "Mangalsen",
                        "municipalities" =>  [
                            "714" =>  [
                                "id" =>  715,
                                "district_id" =>  74,
                                "category_id" =>  4,
                                "name" =>  "Ramaroshan Rural Municipality",
                                "area_sq_km" =>  "173.33",
                                "website" =>  "http:\/\/www.ramaroshanmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "715" =>  [
                                "id" =>  716,
                                "district_id" =>  74,
                                "category_id" =>  4,
                                "name" =>  "Chaurpati Rural Municipality",
                                "area_sq_km" =>  "182.16",
                                "website" =>  "http:\/\/www.chaurpatimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "716" =>  [
                                "id" =>  717,
                                "district_id" =>  74,
                                "category_id" =>  4,
                                "name" =>  "Turmakhand Rural Municipality",
                                "area_sq_km" =>  "232.07",
                                "website" =>  "http:\/\/www.turmakhadmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "717" =>  [
                                "id" =>  718,
                                "district_id" =>  74,
                                "category_id" =>  4,
                                "name" =>  "Mellekh Rural Municipality",
                                "area_sq_km" =>  "134.78",
                                "website" =>  "http:\/\/www.mellekhmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "718" =>  [
                                "id" =>  719,
                                "district_id" =>  74,
                                "category_id" =>  4,
                                "name" =>  "Dhakari Rural Municipality",
                                "area_sq_km" =>  "227.88",
                                "website" =>  "http:\/\/www.dhakarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "719" =>  [
                                "id" =>  720,
                                "district_id" =>  74,
                                "category_id" =>  4,
                                "name" =>  "Bannigadi Jayagad Rural Municipality",
                                "area_sq_km" =>  "58.26",
                                "website" =>  "http:\/\/www.bannigadhijaygadhmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "720" =>  [
                                "id" =>  721,
                                "district_id" =>  74,
                                "category_id" =>  3,
                                "name" =>  "Mangalsen Municipality",
                                "area_sq_km" =>  "220.14",
                                "website" =>  "http:\/\/www.mangalsenmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "721" =>  [
                                "id" =>  722,
                                "district_id" =>  74,
                                "category_id" =>  3,
                                "name" =>  "Kamalbazar Municipality",
                                "area_sq_km" =>  "120.78",
                                "website" =>  "http:\/\/www.kamalbazarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "722" =>  [
                                "id" =>  723,
                                "district_id" =>  74,
                                "category_id" =>  3,
                                "name" =>  "Sanfebagar Municipality",
                                "area_sq_km" =>  "166.71",
                                "website" =>  "http:\/\/www.sanfebagarmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14
                                ]
                            ],
                            "723" =>  [
                                "id" =>  724,
                                "district_id" =>  74,
                                "category_id" =>  3,
                                "name" =>  "Panchadewal Binayak Municipality",
                                "area_sq_km" =>  "147.75",
                                "website" =>  "http:\/\/www.panchadewalbinayakmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ]
                        ]
                    ],
                    "74" =>  [
                        "id" =>  75,
                        "province_id" =>  7,
                        "name" =>  "Dadeldhura",
                        "area_sq_km" =>  "1506.09",
                        "website" =>  "https:\/\/dccdadeldhura.gov.np\/",
                        "headquarter" =>  "Amargadhi",
                        "municipalities" =>  [
                            "724" =>  [
                                "id" =>  725,
                                "district_id" =>  75,
                                "category_id" =>  4,
                                "name" =>  "Navadurga Rural Municipality",
                                "area_sq_km" =>  "141.89",
                                "website" =>  "http:\/\/www.navadurgamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "725" =>  [
                                "id" =>  726,
                                "district_id" =>  75,
                                "category_id" =>  4,
                                "name" =>  "Aalitaal Rural Municipality",
                                "area_sq_km" =>  "292.87",
                                "website" =>  "http:\/\/www.aalitalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8
                                ]
                            ],
                            "726" =>  [
                                "id" =>  727,
                                "district_id" =>  75,
                                "category_id" =>  4,
                                "name" =>  "Ganyapadhura Rural Municipality",
                                "area_sq_km" =>  "135.65",
                                "website" =>  "http:\/\/www.ganyapadhuramun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "727" =>  [
                                "id" =>  728,
                                "district_id" =>  75,
                                "category_id" =>  4,
                                "name" =>  "Bhageshwar Rural Municipality",
                                "area_sq_km" =>  "233.38",
                                "website" =>  "http:\/\/www.bhageshwormun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ],
                            "728" =>  [
                                "id" =>  729,
                                "district_id" =>  75,
                                "category_id" =>  4,
                                "name" =>  "Ajaymeru Rural Municipality",
                                "area_sq_km" =>  "148.9",
                                "website" =>  "http:\/\/www.ajayamerumun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "729" =>  [
                                "id" =>  730,
                                "district_id" =>  75,
                                "category_id" =>  3,
                                "name" =>  "Amargadhi Municipality",
                                "area_sq_km" =>  "139.33",
                                "website" =>  "http:\/\/www.amargadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "730" =>  [
                                "id" =>  731,
                                "district_id" =>  75,
                                "category_id" =>  3,
                                "name" =>  "Parshuram Municipality",
                                "area_sq_km" =>  "414.07",
                                "website" =>  "http:\/\/www.parshurammun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ]
                        ]
                    ],
                    "75" =>  [
                        "id" =>  76,
                        "province_id" =>  7,
                        "name" =>  "Kanchanpur",
                        "area_sq_km" =>  "1222.31",
                        "website" =>  "https:\/\/dcckanchanpur.gov.np\/",
                        "headquarter" =>  "Bheemdatta",
                        "municipalities" =>  [
                            "731" =>  [
                                "id" =>  732,
                                "district_id" =>  76,
                                "category_id" =>  3,
                                "name" =>  "Bhimdatta Municipality",
                                "area_sq_km" =>  "171.8",
                                "website" =>  "http:\/\/www.bheemdattamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19
                                ]
                            ],
                            "732" =>  [
                                "id" =>  733,
                                "district_id" =>  76,
                                "category_id" =>  3,
                                "name" =>  "Punarbas Municipality",
                                "area_sq_km" =>  "103.71",
                                "website" =>  "http:\/\/www.punarbasmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "733" =>  [
                                "id" =>  734,
                                "district_id" =>  76,
                                "category_id" =>  3,
                                "name" =>  "Bedkot Municipality",
                                "area_sq_km" =>  "159.92",
                                "website" =>  "http:\/\/www.bedkotmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "734" =>  [
                                "id" =>  735,
                                "district_id" =>  76,
                                "category_id" =>  3,
                                "name" =>  "Mahakali Municipality",
                                "area_sq_km" =>  "56.84",
                                "website" =>  "https:\/\/mahakalimunkanchanpur.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "735" =>  [
                                "id" =>  736,
                                "district_id" =>  76,
                                "category_id" =>  3,
                                "name" =>  "Shuklaphanta Municipality",
                                "area_sq_km" =>  "162.57",
                                "website" =>  "http:\/\/www.shuklaphantamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "736" =>  [
                                "id" =>  737,
                                "district_id" =>  76,
                                "category_id" =>  3,
                                "name" =>  "Belauri Municipality",
                                "area_sq_km" =>  "123.37",
                                "website" =>  "http:\/\/www.belaurimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "737" =>  [
                                "id" =>  738,
                                "district_id" =>  76,
                                "category_id" =>  3,
                                "name" =>  "Krishnapur Municipality",
                                "area_sq_km" =>  "252.75",
                                "website" =>  "http:\/\/www.krishnapurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "738" =>  [
                                "id" =>  739,
                                "district_id" =>  76,
                                "category_id" =>  4,
                                "name" =>  "Laljhadi Rural Municipality",
                                "area_sq_km" =>  "154.65",
                                "website" =>  "http:\/\/www.laljhadimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "739" =>  [
                                "id" =>  740,
                                "district_id" =>  76,
                                "category_id" =>  4,
                                "name" =>  "Beldandi Rural Municipality",
                                "area_sq_km" =>  "36.7",
                                "website" =>  "http:\/\/www.beldandimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5
                                ]
                            ]
                        ]
                    ],
                    "76" =>  [
                        "id" =>  77,
                        "province_id" =>  7,
                        "name" =>  "Kailali",
                        "area_sq_km" =>  "3292.35",
                        "website" =>  "https:\/\/dcckailali.gov.np\/",
                        "headquarter" =>  "Dhangadhi",
                        "municipalities" =>  [
                            "740" =>  [
                                "id" =>  741,
                                "district_id" =>  77,
                                "category_id" =>  4,
                                "name" =>  "Janaki Rural Municipality",
                                "area_sq_km" =>  "107.27",
                                "website" =>  "http:\/\/www.janakimunkailali.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "741" =>  [
                                "id" =>  742,
                                "district_id" =>  77,
                                "category_id" =>  4,
                                "name" =>  "Kailari Rural Municipality",
                                "area_sq_km" =>  "233.27",
                                "website" =>  "http:\/\/www.kailarimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "742" =>  [
                                "id" =>  743,
                                "district_id" =>  77,
                                "category_id" =>  4,
                                "name" =>  "Joshipur Rural Municipality",
                                "area_sq_km" =>  "65.57",
                                "website" =>  "http:\/\/www.joshipurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "743" =>  [
                                "id" =>  744,
                                "district_id" =>  77,
                                "category_id" =>  4,
                                "name" =>  "Bardagoriya Rural Municipality",
                                "area_sq_km" =>  "77.26",
                                "website" =>  "http:\/\/www.bardgoriyamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "744" =>  [
                                "id" =>  745,
                                "district_id" =>  77,
                                "category_id" =>  4,
                                "name" =>  "Mohanyal Rural Municipality",
                                "area_sq_km" =>  "626.95",
                                "website" =>  "http:\/\/www.mohanyalmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7
                                ]
                            ],
                            "745" =>  [
                                "id" =>  746,
                                "district_id" =>  77,
                                "category_id" =>  4,
                                "name" =>  "Chure Rural Municipality",
                                "area_sq_km" =>  "493.18",
                                "website" =>  "http:\/\/www.churemun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6
                                ]
                            ],
                            "746" =>  [
                                "id" =>  747,
                                "district_id" =>  77,
                                "category_id" =>  3,
                                "name" =>  "Tikapur Municipality",
                                "area_sq_km" =>  "118.33",
                                "website" =>  "http:\/\/www.tikapurmun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "747" =>  [
                                "id" =>  748,
                                "district_id" =>  77,
                                "category_id" =>  3,
                                "name" =>  "Ghodaghodi Municipality",
                                "area_sq_km" =>  "354.45",
                                "website" =>  "http:\/\/www.ghodaghodimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "748" =>  [
                                "id" =>  749,
                                "district_id" =>  77,
                                "category_id" =>  3,
                                "name" =>  "Lamkichuha Municipality",
                                "area_sq_km" =>  "225",
                                "website" =>  "http:\/\/www.lamkichuhamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10
                                ]
                            ],
                            "749" =>  [
                                "id" =>  750,
                                "district_id" =>  77,
                                "category_id" =>  3,
                                "name" =>  "Bhajni Municipality",
                                "area_sq_km" =>  "176.25",
                                "website" =>  "http:\/\/www.bhajanimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9
                                ]
                            ],
                            "750" =>  [
                                "id" =>  751,
                                "district_id" =>  77,
                                "category_id" =>  3,
                                "name" =>  "Godawari Municipality",
                                "area_sq_km" =>  "308.63",
                                "website" =>  "http:\/\/www.godawarimunkailali.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12
                                ]
                            ],
                            "751" =>  [
                                "id" =>  752,
                                "district_id" =>  77,
                                "category_id" =>  3,
                                "name" =>  "Gauriganga Municipality",
                                "area_sq_km" =>  "244.44",
                                "website" =>  "http:\/\/www.gaurigangamun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11
                                ]
                            ],
                            "752" =>  [
                                "id" =>  753,
                                "district_id" =>  77,
                                "category_id" =>  2,
                                "name" =>  "Dhangadhi Sub-Metropolitan City",
                                "area_sq_km" =>  "261.75",
                                "website" =>  "http:\/\/www.dhangadhimun.gov.np\/",
                                "wards" =>  [
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    6,
                                    7,
                                    8,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15,
                                    16,
                                    17,
                                    18,
                                    19
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
        DB::beginTransaction();

        foreach ($localstates as $province) {
            Province::updateOrCreate(['id' => $province['id']], [
                'id' => $province['id'],
                'name' => $province['name'],
                'area_sq_km' => $province['area_sq_km'],
                'website' => $province['website'],
                'headquarter' => $province['headquarter'],
            ]);
            foreach ($province['districts'] as $district) {
                // dd($district);
                District::updateOrCreate(['id' => $district['id']],[
                    'id' => $district['id'],
                    'province_id' => $district['province_id'],
                    'name' => $district['name'],
                    'area_sq_km' => $district['area_sq_km'],
                    'website' => $district['website'],
                    'headquarter' => $district['headquarter'],
                ]);
                foreach ($district['municipalities'] as $local) {
                    Locality::updateOrCreate(['id' => $local['id']],[
                        'id' => $local['id'],
                        'district_id' => $local['district_id'],
                        'category_id' => $local['category_id'],
                        'name' => $local['name'],
                        'area_sq_km' => $local['area_sq_km'],
                        'website' => $local['website'],
                        'wards' => json_encode($local['wards']),
                    ]);
                }
            }
        }
        DB::commit();
    }
}
