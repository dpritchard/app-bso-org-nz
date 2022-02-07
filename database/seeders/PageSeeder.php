<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create(['uri' => '', 'title' => 'Home Page', 'body' => 'This is the home page']);
        Page::create(['uri' => 'trip-guidelines', 'title' => 'Trip Guidelines', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'bso-calendar', 'title' => '2018 Calendar sold out', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'photo-competition', 'title' => '2018 Photo Competition', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'eagle-drawing-competiton', 'title' => 'Audrey Eagle Drawing Competiton', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'lichen-guide', 'title' => 'Lichen Guide', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'pbfund', 'title' => 'The Peter Bannister Student Field Grant', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'newsletter', 'title' => 'Newsletter', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'eagle-supplement', 'title' => 'Eagle Supplements', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'about-joining-the-bso', 'title' => 'Join the BSO', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'committee', 'title' => 'Committee', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'links', 'title' => 'Links', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'downloads', 'title' => 'Downloads', 'body' => 'Placeholder text']);
        Page::create(['uri' => 'disclamer', 'title' => 'Disclaimer', 'body' => 'Placeholder text']);
    }
}
