<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'dipew@gmail.com')
            ->type('password', 'dipew123456')
            ->press('LOG IN');
            $browser->visit('/dashboard')
            ->assertSee('Dashboard')
            ->clickLink('Notes')
            ->assertPathIs('/notes')
            ->visit('/notes')
            ->assertSee('Notes')
            ->clickLink('barubarubaru')
            ->assertPathIs('/note/1');
        });
    }
}
