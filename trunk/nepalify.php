<?php
/**
 * Plugin Name: Nepalify | Districts
 * Plugin URI: #
 * Description: Creates zones and districts of Nepal as WordPress categories when you just <strong>activate this plugin</strong>. | <a href="https://en.wikipedia.org/wiki/List_of_zones_of_Nepal">List of zones of Nepal</a>.
 * Author: Bimal Poudel
 * Version: 1.0.0
 * Author URI: http://bimal.org.np/
 */

if (!defined("ABSPATH")) {
    exit;
}

class nepalify
{
    public function create_zonal_categories()
    {
        $zones = [
            "Mechi" => [
                // https://en.wikipedia.org/wiki/Mechi_Zone
                "Ilam",
                "Jhapa",
                "Panchthar",
                "Taplejung",
            ],
            "Koshi" => [
                // https://en.wikipedia.org/wiki/Koshi_Zone
                "Bhojpur",
                "Dhankuta",
                "Morang",
                "Sankhuwasabha",
                "Sunsari",
                "Terhathum",
            ],
            "Sagarmatha" => [
                // https://en.wikipedia.org/wiki/Sagarmatha_Zone
                "Khotang",
                "Okhaldhunga",
                "Solukhumbu",
                "Udayapur",
                "Saptari",
                "Siraha",
            ],
            "Janakpur" => [
                // https://en.wikipedia.org/wiki/Janakpur_Zone
                "Dhanusa",
                "Dolakha",
                "Mahottari",
                "Ramechhap",
                "Sarlahi",
                "Sindhuli",
            ],
            "Bagmati" => [
                // https://en.wikipedia.org/wiki/Bagmati_Zone
                "Bhaktapur",
                "Dhading",
                "Lalitpur",
                "Kathmandu",
                "Kavrepalanchok",
                "Nuwakot",
                "Rasuwa",
                "Sindhupalchok",
            ],
            "Narayani" => [
                // https://en.wikipedia.org/wiki/Narayani_Zone
                "Bara",
                "Parsa",
                "Rautahat",
                "Chitwan",
                "Makwanpur",
            ],
            "Gandaki" => [
                // https://en.wikipedia.org/wiki/Gandaki_Zone
                "Gorkha",
                "Kaski",
                "Lamjung",
                "Manang",
                "Syangja",
                "Tanahu",
            ],
            "Lumbini" => [
                // https://en.wikipedia.org/wiki/Lumbini_Zone
                "Arghakhanchi",
                "Gulmi",
                "Kapilvastu",
                "Nawalparasi",
                "Palpa",
                "Rupandehi",
            ],
            "Dhaulagiri" => [
                // https://en.wikipedia.org/wiki/Dhaulagiri_Zone
                "Baglung",
                "Mustang",
                "Myagdi",
                "Parbat",
            ],
            "Rapti" => [
                // https://en.wikipedia.org/wiki/Rapti_Zone
                "Dang",
                "Pyuthan",
                "Rolpa",
                "Rukum",
                "Salyan",
            ],
            "Karnali" => [
                // https://en.wikipedia.org/wiki/Karnali_Zone
                "Dolpa",
                "Humla",
                "Jumla",
                "Kalikot",
                "Mugu",
            ],
            "Bheri" => [
                // https://en.wikipedia.org/wiki/Bheri_Zone
                "Banke",
                "Bardiya",
                "Dailekh",
                "Jajarkot",
                "Surkhet",
            ],
            "Seti" => [
                // https://en.wikipedia.org/wiki/Seti_Zone
                "Achham",
                "Bajhang",
                "Bajura",
                "Doti",
                "Kailali",
            ],
            "Mahakali" => [
                // https://en.wikipedia.org/wiki/Mahakali_Zone
                "Baitadi",
                "Dadeldhura",
                "Darchula",
                "Kanchanpur",
            ),
        );

        foreach ($zones as $zone => $districts) {
            $zone_category_id = wp_create_category($zone, 0);
            foreach ($districts as $district) {
                $district_category_id = wp_create_category($district, $zone_category_id);
            }
        }
    }

    public function create_provincial_categories()
    {
        $provinces = [
            # https://en.wikipedia.org/wiki/Province_No._1
            "Province No. 1" => [
                "Bhojpur",
                "Dhankuta",
                "Ilam",
                "Jhapa",
                "Khotang",
                "Morang",
                "Okhaldhunga",
                "Panchthar",
                "Sankhuwasabha",
                "Solukhumbu",
                "Sunsari",
                "Taplejung",
                "Terhathum",
            ],

            # https://en.wikipedia.org/wiki/Province_No._2
            "Province No. 2" => [
                "Saptari",
                "Parsa",
                "Sarlahi",
                "Bara",
                "Siraha",
                "Dhanusha",
                "Rautahat",
                "Mahottari",
            ],

            # https://en.wikipedia.org/wiki/Province_No._3
            "Province No. 3" => [
                "Bhaktapur",
                "Chitwan",
                "Dhading",
                "Dolakha",
                "Kathmandu",
                "Kavrepalanchok",
                "Lalitpur",
                "Makwanpur",
                "Nuwakot",
                "Ramechhap",
                "Rasuwa",
                "Sindhuli",
                "Sindhupalchok",
            ],

            # https://en.wikipedia.org/wiki/Gandaki_Pradesh
            "Gandaki Pradesh" => [
                "Baglung",
                "Gorkha",
                "Kaski",
                "Lamjung",
                "Manang",
                "Mustang",
                "Myagdi",
                "Nawalpur",
                "Parbat",
                "Syangja",
                "Tanahun",
            ],

            # https://en.wikipedia.org/wiki/Province_No._5
            "Province No. 5" => [
                "Arghakhanchi",
                "Banke",
                "Bardiya",
                "Dang",
                "Eastern Rukum",
                "Gulmi",
                "Kapilvastu",
                "Parasi",
                "Palpa",
                "Pyuthan",
                "Rolpa",
                "Rupandehi",
            ],

            # https://en.wikipedia.org/wiki/Karnali_Pradesh
            "Karnali Pradesh" => [
                "Dailekh",
                "Dolpa",
                "Humla",
                "Jajarkot",
                "Jumla",
                "Kalikot",
                "Mugu",
                "Salyan",
                "Surkhet",
                "Western Rukum",
            ],

            # https://en.wikipedia.org/wiki/Sudurpashchim_Pradesh
            "Sudurpashchim Pradesh" => [
                "Achham",
                "Baitadi",
                "Bajhang",
                "Bajura",
                "Dadeldhura",
                "Darchula",
                "Doti",
                "Kailali",
                "Kanchanpur",
            ]];
        foreach ($provinces as $province => $districts) {
            $province_category_id = wp_create_category($province, 0);
            foreach ($districts as $district) {
                $district_category_id = wp_create_category($district, $province_category_id);
            }
        }
    }
}

$nepalify = new nepalify();
register_activation_hook(__FILE__, [$nepalify, "create_zonal_categories"]);
register_activation_hook(__FILE__, [$nepalify, "create_provincial_categories"]);
