<?php

class TableSeeder extends Seeder
{
    public function run()
    {
        
        // clear our database
        DB::table('lists')->delete();
        // use Faker
        $faker = Faker\Factory::create();
        
        for ($i = 0; $i < 5; $i ++) {
            $user = ListTask::create(array(
                'title' => $faker->title,
                'delFlag' => $faker->delFlag
            ));
        }
        
        //l
        
        $this->command->info('The lists in store here!');
    }
}