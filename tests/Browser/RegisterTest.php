<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3')
            ->clickLink('Register')
            ->assertPathIs('/register')
            ->type('name', 'Dipew')
            ->type('email', 'dipew@gmail.com')
            ->type('password', 'dipew123456')
            ->type('password_confirmation', 'dipew123456')
            ->press('REGISTER')
            ->assertPathIs('/register');
        });
    }
}
