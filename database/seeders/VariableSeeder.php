<?php

namespace Database\Seeders;

use App\Models\CaseModel;
use App\Models\Variable;
use Illuminate\Database\Seeder;

class VariableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Variable::create([
            'id',
            'key' => 'description',
            'value' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.'
        ]);
        Variable::create([
            'id',
            'key' => 'address',
            'value' => 'تبریز، ولیعصر، پلاک 896'
        ]);
        Variable::create([
            'id',
            'key' => 'phone',
            'value' => '(+1)-800-555-6789'
        ]);
        Variable::create([
            'id',
            'key' => 'email',
            'value' => 'contact.us@sample.com'
        ]);
        Variable::create([
            'id',
            'key' => 'saturday_wednesday',
            'value' => 'شنبه تا چهارشنبه: 8AM - 10PM'
        ]);
        Variable::create([
            'id',
            'key' => 'thursday',
            'value' => 'پنجشنبه: 9AM - 8PM'
        ]);
        Variable::create([
            'id',
            'key' => 'friday',
            'value' => 'جمعه: تعطیل'
        ]);
        Variable::create([
            'id',
            'key' => 'week_slogan',
            'value' => 'ما در تعطیلات رسمی هم کار میکنیم'
        ]);
    }
}
