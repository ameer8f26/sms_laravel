<?php

namespace Database\Seeders;

use App\Models\Brewery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class BrewerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brewery::truncate();
        $data = Http::get('https://api.openbrewerydb.org/breweries')->collect()->all();
        foreach ($data as $brwery) {
            Brewery::create([
                "name" => $brwery['name'] ?? '',
                "brewery_type" => $brwery['brewery_type'] ?? '',
                "street" => $brwery['street'] ?? '',
                "address_2" => $brwery['address_2'] ?? '',
                "address_3" => $brwery['address_3'] ?? '',
                "city" => $brwery['city'] ?? '',
                "state" => $brwery['state'] ?? '',
                "county_province" => $brwery['county_province'] ?? '',
                "postal_code" => $brwery['postal_code'] ?? '',
                "country" => $brwery['country'] ?? '',
                "longitude" => $brwery['longitude'] ?? '',
                "latitude" => $brwery['latitude'] ?? '',
                "phone" => $brwery['phone'] ?? '',
                "website_url" => $brwery['website_url'] ?? '',
                "updated_at" => $brwery['updated_at'] ?? '',
                "created_at" => $brwery['created_at'] ?? '',
            ]);
        }
    }
}
