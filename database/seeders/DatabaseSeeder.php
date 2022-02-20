<?php

namespace Database\Seeders;

use App\Models\LibraryOwner;
use App\Models\Review;
use Database\Factories\AddressFactroyFactory;
use Database\Factories\OptionFactory;
use Database\Factories\OrderFactory;
use Database\Factories\PaymentFactory;
use Database\Factories\ProductFactory;
use Database\Factories\ReviewFactory;
use Database\Factories\ShipmentFactory;
use Database\Factories\TicketFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\LibraryOwner::factory(50)->create();
       // \App\Models\Address::factory(200)->create();
        // \App\Models\Option::factory(200)->create();
        // \App\Models\Order::factory(200)->create();
       // \App\Models\Payment::factory(200)->create();
        // \App\Models\Product::factory(200)->create();
        // \App\Models\Review::factory(200)->create();
        // \App\Models\Shipment::factory(200)->create();
        // \App\Models\Ticket::factory(200)->create();
        //\App\Models\User::factory(199)->create();

    }
}
