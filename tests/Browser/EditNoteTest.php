<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnote
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
                 ->clickLink('Edit')
                 ->assertPathIs('/edit-note-page/2')
                 ->type('title', 'notes 5')
                 ->type('description', 'edit notes 1 jadi 2')
                 ->press('UPDATE')
                 ->assertPathEndsWith('/notes'); 
        });
    }
}
