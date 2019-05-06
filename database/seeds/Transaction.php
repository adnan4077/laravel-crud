<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Transaction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
           
                'start_date'=>'2018-05-08',
                'end_date'=>'2018-05-17',
                'first_name'=>'Amy',
                'last_name'=>'Mccormick',
                'email'=>'insurance@doyouinsurance.com',
                'telnumber'=>'34964830995',
                'address1'=>'c\Ronda Mijares n190 Bis',
                'address2'=>'',
                'city'=>'Castellon',
                'country'=>'UK',
                'postcode'=>'12002',
                'product_name'=>'DYSIH_NL_PLATINUM_8-14',
                'cost'=>'53.12',
                'currency'=>'usd',
                'transaction_date'=>'2018-05-01',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
               
           ],[
              
               'start_date'=>'2018-07-08',
               'end_date'=>'2018-07-22',
               'first_name'=>'SÃ¶ren',
               'last_name'=>'Fedders',
               'email'=>'insurance@doyouinsurance.com',
               'telnumber'=>'34964830995',
               'address1'=>'c\Ronda Mijares n190 Bis',
               'address2'=>'',
               'city'=>'Castellon',
               'country'=>'DE',
               'postcode'=>'12002',
               'product_name'=>'DYSIH_NL_PLATINUM_8-14',
               'cost'=>'75.88',
               'currency'=>'usd',
               'transaction_date'=>'2018-05-01',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
              
           ],[
              
               'start_date'=>'2018-06-07',
               'end_date'=>'2018-06-10',
               'first_name'=>'Eric',
               'last_name'=>'De Winter',
               'email'=>'insurance@doyouinsurance.com',
               'telnumber'=>'34964830995',
               'address1'=>'c\Ronda Mijares n190 Bis',
               'address2'=>'',
               'city'=>'Castellon',
               'country'=>'NL',
               'postcode'=>'12002',
               'product_name'=>'DYSIH_DE_PLATINUM_8-14',
               'cost'=>'25.39',
               'currency'=>'gbp',
               'transaction_date'=>'2018-05-01',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
              
           ],[
              
               'start_date'=>'2018-05-02',
               'end_date'=>'2018-05-11',
               'first_name'=>'Roberto',
               'last_name'=>'Carron Martin',
               'email'=>'insurance@doyouinsurance.com',
               'telnumber'=>'34964830995',
               'address1'=>'c\Ronda Mijares n190 Bis',
               'address2'=>'',
               'city'=>'Castellon',
               'country'=>'ES',
               'postcode'=>'12002',
               'product_name'=>'DYSIH_GB_PLATINUM_8-14',
               'cost'=>'46.29',
               'currency'=>'gbp',
               'transaction_date'=>'2018-05-01',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
              
           ],[
              
               'start_date'=>'2018-05-01',
               'end_date'=>'2018-05-03',
               'first_name'=>'Paz',
               'last_name'=>'Ovics',
               'email'=>'insurance@doyouinsurance.com',
               'telnumber'=>'34964830995',
               'address1'=>'c\Ronda Mijares n190 Bis',
               'address2'=>'',
               'city'=>'Castellon',
               'country'=>'IT',
               'postcode'=>'12002',
               'product_name'=>'DYSIH_NL_PLATINUM_4-7',
               'cost'=>'19.13',
               'currency'=>'gbp',
               'transaction_date'=>'2018-05-01',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
              
           ],[
              
            'start_date'=>'2018-05-03',
            'end_date'=>'2018-06-02',
            'first_name'=>'Andreas',
            'last_name'=>'Nagel',
            'email'=>'insurance@doyouinsurance.com',
            'telnumber'=>'34964830995',
            'address1'=>'c\Ronda Mijares n190 Bis',
            'address2'=>'',
            'city'=>'Castellon',
            'country'=>'ES',
            'postcode'=>'12002',
            'product_name'=>'DYSIH_SP_PLATINUM_8-14',
            'cost'=>'128.12',
            'currency'=>'gbp',
            'transaction_date'=>'2018-05-01',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           
       ],[
              
            'start_date'=>'2018-05-06',
            'end_date'=>'2018-05-17',
            'first_name'=>'Catharina',
            'last_name'=>'Hoogkamer',
            'email'=>'insurance@doyouinsurance.com',
            'telnumber'=>'34964830995',
            'address1'=>'c\Ronda Mijares n190 Bis',
            'address2'=>'',
            'city'=>'Castellon',
            'country'=>'NL',
            'postcode'=>'12002',
            'product_name'=>'DYSIH_IT_PLATINUM_1-3',
            'cost'=>'59.73',
            'currency'=>'usd',
            'transaction_date'=>'2018-05-01',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
       
        ],[
                    
            'start_date'=>'2018-05-02',
            'end_date'=>'2018-05-14',
            'first_name'=>'Luis',
            'last_name'=>'Moro',
            'email'=>'insurance@doyouinsurance.com',
            'telnumber'=>'34964830995',
            'address1'=>'c\Ronda Mijares n190 Bis',
            'address2'=>'',
            'city'=>'Castellon',
            'country'=>'ES',
            'postcode'=>'12002',
            'product_name'=>'DYSIH_DE_PLATINUM_25-30',
            'cost'=>'61.72',
            'currency'=>'usd',
            'transaction_date'=>'2018-05-01',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
   
        ],[
                    
            'start_date'=>'2018-05-13',
            'end_date'=>'2018-05-23',
            'first_name'=>'Mate',
            'last_name'=>'Halasz',
            'email'=>'insurance@doyouinsurance.com',
            'telnumber'=>'34964830995',
            'address1'=>'c\Ronda Mijares n190 Bis',
            'address2'=>'',
            'city'=>'Castellon',
            'country'=>'IT',
            'postcode'=>'12002',
            'product_name'=>'DYSIH_NL_PLATINUM_8-14',
            'cost'=>'53.12',
            'currency'=>'gbp',
            'transaction_date'=>'2018-05-01',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        
        ]
        ];
        DB::table('transactions')->insert($data);

    }
}
