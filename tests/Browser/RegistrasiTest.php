<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * @group daftarakun
     * A Dusk test example.
     */
    public function DaftarAkunTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Modul 3') //membaca modul 3
                ->clickLink('Register') //mengklik registrasi
                ->assertPathsIs('/Register') //cek apakah sudah benar link register
                ->type('name', 'user') // mengisi inputan dengan atribut nama "name"
                ->type('email', 'user@gmail.com') //mengisi 
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->press('REGISTER')
                ->assertPathIs('/dashboard')
            ;
        });
    }
}
