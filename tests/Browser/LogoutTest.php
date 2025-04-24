<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * @group logout
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in') // Ganti jika link login berbeda
                    ->assertPathIs('/login')
                    ->type('email', 'innaasilni19@gmail.com') // sesuaikan dengan user test yang ada
                    ->type('password', 'InnaAsilni11')    // sesuaikan juga
                    ->press('LOG IN') // Sesuaikan teks tombol login
                    ->assertPathIs('/dashboard')
                    ->press('Inna Asilni Rahmawati')
                    ->pause(300)
                    ->clickLink('Log Out') // atau klik tombol/logout link sesuai UI
                    ->assertPathIs('/')
                    ->assertSee('Modul 3'); // atau teks yang muncul setelah logout
        });
    }
}
