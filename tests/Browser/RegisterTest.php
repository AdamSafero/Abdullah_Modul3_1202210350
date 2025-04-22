<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A basic browser test example.
     * @group regis
     */
    public function testRegistrasi(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'Abdullah')
                    ->type('email', 'adam@gmail.com')
                    ->type('password', '12345678')
                    ->type('password_confirmation', '12345678')
                    ->press('REGISTER')
                    ->assertPathEndsWith('/dashboard');
        });
    }
}
