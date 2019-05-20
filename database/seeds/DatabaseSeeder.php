<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(categorySeeder::class);
        $this->call(newsSeeder::class);
    }

}
/**
 * 
 */
class categorySeeder extends Seeder
{
	
	public function run()
	{
		DB::table('categories')->insert([
			['name'=>'Trong nước'],
			['name'=>'Quốc tế']
		]);
	}
}

class newsSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('news')->insert([
            ['tittle'=>'Trong nước','description'=>'Công Phượng sang Hàn Quốc thi đấu','content'=>'Công Phượng là tuyển thủ quốc gia','author'=>'Trung Bui','category_id'=>'1']
        ]);
    }
}
class imageSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('images')->insert([
            ['name'=>'abc.jpg','image'=>'This is image','content'=>'Công Phượng là tuyển thủ quốc gia','author'=>'Trung Bui','category_id'=>'1']
        ]);
    }
}
