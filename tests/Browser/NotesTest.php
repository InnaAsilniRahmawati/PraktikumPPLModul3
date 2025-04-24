<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * Tes membuat catatan.
     * @group Notes
     */
    public function testCreateNote(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // Mengunjungi halaman utama website
                    ->clickLink('Log in') // Mengklik link untuk menuju halaman login
                    ->type('email', 'user12@mail.com') // Mengisi input email dengan user terdaftar
                    ->type('password', 'password') // Mengisi input password dengan password user
                    ->press('LOG IN') // Menekan tombol login
                    ->assertPathIs('/dashboard') // Memastikan bahwa user diarahkan ke halaman dashboard
                    ->assertSee('Dashboard') // Memastikan teks "Dashboard" muncul sebagai indikator berhasil login

                    ->clickLink('Notes') // Mengklik link "Notes" di dashboard
                    ->assertPathIs('/notes') // Memastikan diarahkan ke halaman /notes
                    ->clickLink('Create Note') // Mengklik link untuk membuat catatan baru
                    ->assertPathIs('/create-note') // Memastikan diarahkan ke halaman pembuatan catatan
                    ->type('title', 'Catatan Modul 3') // Mengisi input judul catatan
                    ->type('description', 'Modul 3 PPL Mengenai Automatic Testing') // Mengisi input deskripsi catatan
                    ->press('CREATE') // Menekan tombol "CREATE" untuk menyimpan catatan

                    ;
        });
    }
}