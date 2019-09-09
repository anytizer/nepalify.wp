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
    public function create_categories()
    {
        $zones = array(
            "Mechi" => array(
                // https://en.wikipedia.org/wiki/Mechi_Zone
                "Ilam",
                "Jhapa",
                "Panchthar",
                "Taplejung",
            ),
            "Koshi" => array(
                // https://en.wikipedia.org/wiki/Koshi_Zone
                "Bhojpur",
                "Dhankuta",
                "Morang",
                "Sankhuwasabha",
                "Sunsari",
                "Terhathum",
            ),
            "Sagarmatha" => array(
                // https://en.wikipedia.org/wiki/Sagarmatha_Zone
                "Khotang",
                "Okhaldhunga",
                "Solukhumbu",
                "Udayapur",
                "Saptari",
                "Siraha",
            ),
            "Janakpur" => array(
                // https://en.wikipedia.org/wiki/Janakpur_Zone
                "Dhanusa",
                "Dolakha",
                "Mahottari",
                "Ramechhap",
                "Sarlahi",
                "Sindhuli",
            ),
            "Bagmati" => array(
                // https://en.wikipedia.org/wiki/Bagmati_Zone
                "Bhaktapur",
                "Dhading",
                "Lalitpur",
                "Kathmandu",
                "Kavrepalanchok",
                "Nuwakot",
                "Rasuwa",
                "Sindhupalchok",
            ),
            "Narayani" => array(
                // https://en.wikipedia.org/wiki/Narayani_Zone
                "Bara",
                "Parsa",
                "Rautahat",
                "Chitwan",
                "Makwanpur",
            ),
            "Gandaki" => array(
                // https://en.wikipedia.org/wiki/Gandaki_Zone
                "Gorkha",
                "Kaski",
                "Lamjung",
                "Manang",
                "Syangja",
                "Tanahu",
            ),
            "Lumbini" => array(
                // https://en.wikipedia.org/wiki/Lumbini_Zone
                "Arghakhanchi",
                "Gulmi",
                "Kapilvastu",
                "Nawalparasi",
                "Palpa",
                "Rupandehi",
            ),
            "Dhaulagiri" => array(
                // https://en.wikipedia.org/wiki/Dhaulagiri_Zone
                "Baglung",
                "Mustang",
                "Myagdi",
                "Parbat",
            ),
            "Rapti" => array(
                // https://en.wikipedia.org/wiki/Rapti_Zone
                "Dang",
                "Pyuthan",
                "Rolpa",
                "Rukum",
                "Salyan",
            ),
            "Karnali" => array(
                // https://en.wikipedia.org/wiki/Karnali_Zone
                "Dolpa",
                "Humla",
                "Jumla",
                "Kalikot",
                "Mugu",
            ),
            "Bheri" => array(
                // https://en.wikipedia.org/wiki/Bheri_Zone
                "Banke",
                "Bardiya",
                "Dailekh",
                "Jajarkot",
                "Surkhet",
            ),
            "Seti" => array(
                // https://en.wikipedia.org/wiki/Seti_Zone
                "Achham",
                "Bajhang",
                "Bajura",
                "Doti",
                "Kailali",
            ),
            "Mahakali" => array(
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
}

$nepalify = new nepalify();
register_activation_hook(__FILE__, array($nepalify, "create_categories"));
