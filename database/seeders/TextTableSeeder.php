<?php

namespace Database\Seeders;

use App\Text;
use Illuminate\Database\Seeder;

class TextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $text = new Text;
        $text->title = 'Sandesh';

        $text->navbar_item1 = 'Projecten';
        $text->navbar_item2 = 'Profiel';
        $text->navbar_item3 = 'Contact';

        $text->about_me = "
                            <h2>Hi, mijn naam is Sandesh</h2>
                            <p>Ik ben 20 jaar oud en woonachtig in Spijkenisse. In mijn vrije tijd programmeer ik vaak. Mijn favorieten projecten zijn CMS-systemen maken met behulp van Laravel. Ook hou ik ervan om zo nu en dan te gamen of met vrienden af te spreken. </p>
                            <p>Zelf zou ik mij meer willen specialiseren op het gebied van backend. Zowel op mijn stage als in mijn vrije tijd heb ik veel met het framework Laravel gewerkt. </p>
                            <h3>Werk</h3>
                            <p>Ik ben werkzaam bij Amac in Spijkenisse. Amac is een (APR) Apple Premium Reseller dus het verkopen van Apple staat op nummer 1. Het is een leuke bijbaan omdat ik het genoegen heb om met leuke collega’s te werken maar ook omdat ik het genoege heb op premium apparaten te verkopen. Het begon allemaal bij Dixons ook in Spijkenisse, dat was mijn eerste bijbaan. Wat beiden winkels gemeen hebben is dat we altijd als eerst de nieuwste snufjes krijgen om uit te testen. En dat maakt het werken in de retail toch wel leuk.</p>
                            ";
        $text->save();
    }
}
