<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Evaluation;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Fernandico Geovardo',
            'email' => 'fernandico.geovardo01@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'operator'
        ]);
        User::create([
            'name' => 'Alep',
            'email' => 'alep@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'operator'
        ]);
        User::create([
            'name' => 'Veto Partogi',
            'email' => 'veto.partogi@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'kps'
        ]);
        User::create([
            'name' => 'Ibnu Nalaprana',
            'email' => 'ibnu.nalaprana@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'pimpinan'
        ]);
        User::create([
            'name' => 'Jake',
            'email' => 'jake@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'reviewer'
        ]);

        Evaluation::create([
            'title' => 'Evaluation 1',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, asperiores nisi eos ea natus enim vitae sapiente ratione quia temporibus officiis accusamus quae et deleniti quod consectetur nam tempora repellat vero corrupti cupiditate! Obcaecati eos expedita facere ut, commodi quia molestiae hic dolorum reiciendis iure est quisquam eveniet ipsam quos. Neque temporibus similique repellendus dolorem corrupti doloribus numquam quam reprehenderit illum ut expedita nam, esse ipsa id? Enim delectus voluptas voluptate ipsa aliquid dicta libero porro rem autem dolor cum fugiat ab in eveniet doloribus vero id at assumenda itaque soluta, repellendus, eum molestiae. Sit consequuntur deserunt vel repellendus dolorem.',
            'operator_name' => 'Fernandico Geovardo'
        ]);
        Evaluation::create([
            'title' => 'Evaluation 2',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, asperiores nisi eos ea natus enim vitae sapiente ratione quia temporibus officiis accusamus quae et deleniti quod consectetur nam tempora repellat vero corrupti cupiditate! Obcaecati eos expedita facere ut, commodi quia molestiae hic dolorum reiciendis iure est quisquam eveniet ipsam quos.',
            'operator_name' => 'Fernandico Geovardo'
        ]);
        Evaluation::create([
            'title' => 'Evaluation 3',
            'content' => 'Commodi quia molestiae hic dolorum reiciendis iure est quisquam eveniet ipsam quos. Neque temporibus similique repellendus dolorem corrupti doloribus numquam quam reprehenderit illum ut expedita nam, esse ipsa id? Enim delectus voluptas voluptate ipsa aliquid dicta libero porro rem autem dolor cum fugiat ab in eveniet doloribus vero id at assumenda itaque soluta, repellendus, eum molestiae. Sit consequuntur deserunt vel repellendus dolorem.',
            'operator_name' => 'Alep'
        ]);
    }
}
