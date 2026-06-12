<?php

namespace Database\Seeders;

use App\Models\AttachmentPlace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachmentPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attachmentPlaces = [
            'داخلى',
            'خارجى',
        ];

        foreach($attachmentPlaces as $attachmentPlace)
            {
                AttachmentPlace::firstOrCreate([
                    'name'=> $attachmentPlace,
                ]);
            }
    }
}
