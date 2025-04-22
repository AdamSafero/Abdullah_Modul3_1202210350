<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'adam@gmail.com')
                    ->type('password', '12345678')
                    ->press('LOG IN')
                    ->click('#click-dropdown')
                    ->clickLink('Log Out')
                    ->assertPathIs('/');
        });
    }
}
