<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create(['question' => "How can you print a document from your laptop at HZ?", 'answer' => "Navigate to print.hz.nl, upload the file(s) along with the correct print settings, then head to a printer. Scan your facility pass at the card reader and print the print job. You may need to interact with the printer itself to select paper size."]);
        Faq::create(['question' => "How can you scan a document and send it to your laptop at the HZ?", 'answer' => "Move up to the card reader and log in using your facility pass. Follow the instructions on-screen to scan your document."]);
        Faq::create(['question' => "What do you need to do when you are sick?", 'answer' => "It's a good idea to notify your teacher(s) at the earliest convenience through Mail or MS Teams. If you're decently capable of continuing at home, you can ask them to stream or record the lessons so you don't fall too far behind."]);
        Faq::create(['question' => "How can you book a project room in one of the wings?", 'answer' => "Log in at MyHZ, and navigate to the SelfService Portal. There, you can create a new reservation for any of the project rooms on the condition someone else hasn't reserved it before you."]);
        Faq::create(['question' => "What are the instructions if you want to park your car at the HZ parking lot?", 'answer' => "The HZ has several reserved parking spots a minute away. First, you must activate your card at the reception. Then, the next time you use your car, you can use the aforementioned student pass to enter and leave the grounds of PZEM, which is right across the road. Take note to park at the designated parking spots."]);
    }
}
