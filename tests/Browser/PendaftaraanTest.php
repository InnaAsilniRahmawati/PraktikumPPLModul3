<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PendaftaraanTest extends DuskTestCase
{
    /**
     * @group pendaftaran
     * A Dusk test example.
     */
    public function testPendaftaranAkun(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3') //membaca modul 3
            ->clickLink('Register') //mengklik registrasi
            ->pause(2000) 
            ->assertPathIs('/register') //cek apakah sudah benar link register
            ->type('name', 'user') // mengisi inputan dengan atribut nama "name"
            ->type('email', 'user12@mail.com') //mengisi 
            ->type('password', 'password')
            ->type('password_confirmation', 'password')
            ->press('REGISTER')
            ->assertPathIs('/dashboard');

        });
    }
}
