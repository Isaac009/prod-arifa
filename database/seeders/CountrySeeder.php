<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = json_decode('{
            "Kenya": {
                "states": [
                {
                    "name": "Nairobi",
                    "cities": ["Nairobi", "Mombasa", "Kisumu", "Nakuru", "Eldoret"]
                }
                ],
                "code":"KE"
            },
            "Tanzania": {
                "states": [
                {
                    "name": "Dodoma",
                    "cities": ["Dodoma", "Dar es Salaam", "Arusha", "Mwanza", "Zanzibar City"]
                }
                ],
                "code":"TZ"
            },
            "Uganda": {
                "states": [
                {
                    "name": "Kampala",
                    "cities": ["Kampala", "Entebbe", "Jinja", "Mbale", "Gulu"]
                }
                ],
                "code":"UG"
            },
            "Rwanda": {
                "states": [
                {
                    "name": "Kigali",
                    "cities": ["Kigali", "Butare", "Gisenyi", "Gitarama", "Ruhengeri"]
                }
                ],
                "code":"RW"
            },
            "Burundi": {
                "states": [
                {
                    "name": "Bujumbura",
                    "cities": ["Bujumbura", "Gitega", "Ngozi", "Muyinga", "Ruyigi"]
                }
                ],
                "code":"BR"
            },
            "South Sudan": {
                "states": [
                {
                    "name": "Juba",
                    "cities": ["Juba", "Malakal", "Wau", "Yei", "Bentiu"]
                }
                ],
                "code":"SS"
            },
            "Somalia": {
                "states": [
                {
                    "name": "Mogadishu",
                    "cities": ["Mogadishu", "Hargeisa", "Kismayo", "Garowe", "Bosaso"]
                }
                ],
                "code":"SM"
            },
            "Ethiopia": {
                "states": [
                {
                    "name": "Addis Ababa",
                    "cities": ["Addis Ababa", "Dire Dawa", "Gondar", "Bahir Dar", "Hawassa"]
                }
                ],
                "code":"ET"
            },
            "Djibouti": {
                "states": [
                    {
                        "name": "Djibouti City",
                        "cities": ["Djibouti City", "Ali Sabieh", "Tadjoura", "Obock", "Dikhil"]
                    }],
                "code":"DJ"
            },
            "Eritrea": {
                "states": [
                    {
                        "name": "Asmara",
                        "cities": ["Asmara", "Keren", "Massawa", "Assab", "Mendefera"]
                    }],
                "code":"ER"
                }
            }
        ');
        
        foreach ($countries as $countryName => $data) {
            $country = Country::create(['code' => $data->code, 'name' => $countryName]);

            foreach ($data->states as $stateData) {
                $state = $country->states()->create(['name' => $stateData->name]);

                foreach ($stateData->cities as $cityName) {
                    $state->cities()->create(['name' => $cityName]);
                }
            }
        }
    }
}
