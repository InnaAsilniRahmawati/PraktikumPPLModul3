<?php

namespace Tests\Browser;

use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowNotesTest extends DuskTestCase
{
    /**
     * Test menampilkan daftar catatan.
     * @group shownotes
     */
    public function testShowNotes(): void
    {
        $this->browse(function (Browser $browser) {
            // Pastikan user valid
            $user = User::where('email', 'innaasilni19@gmail.com')->first();

            $browser->loginAs($user) // login sebagai user yang ada
                    ->visit('/notes'); // buka halaman notes
        });
    }
}
