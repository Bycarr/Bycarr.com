<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'group' => 'general',
                'type' => 'text',
                'title' => 'Site Name',
                'key' => 'site_name',
                'value' => 'Cabisell',
            ],
            [
                'group' => 'general',
                'type' => 'text',
                'title' => 'Site Slogan',
                'key' => 'site_slogon',
                'value' => '',
            ],
            [
                'group' => 'general',
                'type' => 'text',
                'title' => 'Website',
                'key' => 'website',
                'value' => '#',
            ],
            [
                'group' => 'general',
                'type' => 'image',
                'title' => 'Logo',
                'key' => 'logo',
                'value' => '#',
            ],
            [
                'group' => 'general',
                'type' => 'text',
                'title' => 'Address',
                'key' => 'address',
                'value' => 'Kathmandu',
            ],
            [
                'group' => 'general',
                'type' => 'text',
                'title' => 'Map',
                'key' => 'map',
                'value' => '<iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31625951046!2d85.29111324963888!3d27.70895594441103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1671027671366!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ],
            [
                'group' => 'general',
                'type' => 'text',
                'title' => 'Contact',
                'key' => 'contact',
                'value' => '977-0112112',
            ],
            [
                'group' => 'general',
                'type' => 'text',
                'title' => 'Email',
                'key' => 'email',
                'value' => 'contact@cabisell.com',
            ],
            [
                'group' => 'general',
                'type' => 'text',
                'title' => 'Fax',
                'key' => 'fax',
                'value' => '#',
            ],

            [
                'group' => 'general',
                'type' => 'text',
                'title' => 'Contact Email',
                'key' => 'contact_email',
                'value' => '#',
            ],
            [
                'group' => 'social-media',
                'type' => 'text',
                'title' => 'Facebook',
                'key' => 'facebook',
                'value' => '#',
            ],

            [
                'group' => 'social-media',
                'type' => 'text',
                'title' => 'Twitter',
                'key' => 'twitter',
                'value' => '#',
            ],
            [
                'group' => 'social-media',
                'type' => 'text',
                'title' => 'Instagram',
                'key' => 'instagram',
                'value' => '#',
            ],
            [
                'group' => 'social-media',
                'type' => 'text',
                'title' => 'Youtube',
                'key' => 'youtube',
                'value' => '#',
            ],
            [
                'group' => 'social-media',
                'type' => 'text',
                'title' => 'Tiktok',
                'key' => 'tiktok',
                'value' => '#',
            ],
            [
                'group' => 'social-media',
                'type' => 'text',
                'title' => 'Pinterest',
                'key' => 'pinterest',
                'value' => '#',
            ]

        ];

        foreach ($settings as $item) {
            Setting::updateOrCreate(['key' => $item['key']], $item);
        }
    }
}
