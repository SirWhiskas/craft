<?php

namespace App\Console\Commands;

use App\World;
use App\Region;
use App\Location;
use App\Character;
use App\GameWorld;
use Illuminate\Console\Command;

class CreateTestWorld extends Command
{
    protected $signature = 'create:test-world';

    protected $description = 'Command description';

    public function handle()
    {
        $world = World::firstOrCreate(
            [
                'owner_id' => 0,
                'name' => 'Worldgard',
                'status' => 'active',
            ]
        );

        $only = ['id', 'name', 'status'];
        $this->table($only, [$world->only($only)]);
        $this->info('Worldgard created successfully.');

        $region = Region::firstOrCreate(
            [
                'owner_id' => 0,
                'name' => 'Brennafold',
                'description' => 'A burning land',
            ],
            [
                'owner_id' => 0,
                'name' => 'Kvikindibiqo',
                'description' => 'A land full of creatures',
            ],
            [
                'owner_id' => 0,
                'name' => 'Floovollr',
                'description' => 'A flooded marsh',
            ]
        );

        $only = ['id', 'name', 'description'];
        $this->table($only, [$region->only($only)]);
        $this->info('Regions created successfully.');

        $location = Location::firstOrCreate(
            [
                'owner_id' => 0,
                'name' => 'Hagagaror',
                'description' => 'A busy harbor town',
                'type' => 'city'
            ],
            [
                'owner_id' => 0,
                'name' => 'Bragaoss',
                'description' => 'A moderate-sized village',
                'type' => 'city'
            ]
        );

        $only = ['id', 'name', 'description', 'type'];
        $this->table($only, [$location->only($only)]);
        $this->info('Locations created successfully.');

        $character = Character::firstOrCreate(
            [
                'owner_id' => 0,
                'name' => 'Ragnar',
                'description' => 'A tree of a man!',
            ],
            [
                'owner_id' => 0,
                'name' => 'Hodor',
                'description' => 'A viking warlord!'
            ]
        );

        $only = ['id', 'name', 'description'];
        $this->table($only, [$character->only($only)]);
        $this->info('Characters created successfully.');

        $gameWorld = GameWorld::firstOrCreate(
            [
                'owner_id' => 0,
                'world_id' => 1,
                'region_id' => 1,
                'location_id' => 1,
                'character_id' => 1
            ],
            [
                'owner_id' => 0,
                'world_id' => 1,
                'region_id' => 2,
                'location_id' => 0,
                'character_id' => 0
            ],
            [
                'owner_id' => 0,
                'world_id' => 1,
                'region_id' => 1,
                'location_id' => 2,
                'character_id' => 2
            ]
        );

        $only = ['id', 'world_id', 'region_id', 'location_id', 'character_id'];
        $this->table($only, [$location->only($only)]);
        $this->info('Game World created successfully.');
        
    }
}
