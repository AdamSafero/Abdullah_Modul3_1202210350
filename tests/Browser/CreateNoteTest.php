<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group createnote
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'adam@gmail.com')
                    ->type('password', '12345678')
                    ->press('LOG IN')
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->clickLink('Create Note')
                    ->assertPathIs('/create-note')
                    ->type('title', 'notes 1')
                    ->type('description', 'tes bikin notes 1')
                    ->press('CREATE')
                    ->assertPathEndsWith('/notes');
        });
    }
}
