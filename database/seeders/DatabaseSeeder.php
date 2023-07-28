<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::truncate();
//        Category::truncate();
//        Post::truncate();

        $user = User::factory()->create([
           'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        //$user = User::factory()->create();


//         $personal = Category::create([
//             'name' => 'Personal',
//             'slug' => 'personal'
//         ]);
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-family-post',
//            'excerpt' => 'Lorem ipsum dolar sit amet est.',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id tortor ut ipsum molestie malesuada. Ut vitae luctus orci. Quisque sit amet neque lacus. Sed ut tempor metus, dapibus finibus tellus. Integer ac vulputate libero, ac mollis metus. Aenean id ullamcorper elit, sed convallis risus. Phasellus placerat sollicitudin consectetur. Aliquam velit libero, fringilla eget justo vel, pretium tincidunt odio. Maecenas vitae cursus diam. Pellentesque scelerisque fermentum nisi, quis venenatis urna egestas euismod. Curabitur maximus augue sit amet purus cursus, vitae gravida tellus rhoncus. Quisque a velit venenatis, congue leo vitae, congue erat. Phasellus rhoncus, lectus non pulvinar cursus, turpis metus molestie lorem, placerat tincidunt elit tortor congue nibh. Aenean feugiat odio ac purus aliquam mattis. Praesent at suscipit nulla. Mauris luctus tellus in augue fringilla, a suscipit ante sagittis. Nam vestibulum vulputate ante sed fermentum. Pellentesque malesuada consectetur dolor. Proin tempus ex vitae arcu porta, quis hendrerit sapien ullamcorper. Mauris varius commodo erat ut dictum. Pellentesque varius elementum fermentum. Curabitur et erat nec sapien lacinia hendrerit non ut ipsum.</p>'
//
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => 'Lorem ipsum dolar sit amet est.',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id tortor ut ipsum molestie malesuada. Ut vitae luctus orci. Quisque sit amet neque lacus. Sed ut tempor metus, dapibus finibus tellus. Integer ac vulputate libero, ac mollis metus. Aenean id ullamcorper elit, sed convallis risus. Phasellus placerat sollicitudin consectetur. Aliquam velit libero, fringilla eget justo vel, pretium tincidunt odio. Maecenas vitae cursus diam. Pellentesque scelerisque fermentum nisi, quis venenatis urna egestas euismod. Curabitur maximus augue sit amet purus cursus, vitae gravida tellus rhoncus. Quisque a velit venenatis, congue leo vitae, congue erat. Phasellus rhoncus, lectus non pulvinar cursus, turpis metus molestie lorem, placerat tincidunt elit tortor congue nibh. Aenean feugiat odio ac purus aliquam mattis. Praesent at suscipit nulla. Mauris luctus tellus in augue fringilla, a suscipit ante sagittis. Nam vestibulum vulputate ante sed fermentum. Pellentesque malesuada consectetur dolor. Proin tempus ex vitae arcu porta, quis hendrerit sapien ullamcorper. Mauris varius commodo erat ut dictum. Pellentesque varius elementum fermentum. Curabitur et erat nec sapien lacinia hendrerit non ut ipsum.</p>'
//
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'My Personal Post',
//            'slug' => 'my-personal-post',
//            'excerpt' => 'Lorem ipsum dolar sit amet est.',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id tortor ut ipsum molestie malesuada. Ut vitae luctus orci. Quisque sit amet neque lacus. Sed ut tempor metus, dapibus finibus tellus. Integer ac vulputate libero, ac mollis metus. Aenean id ullamcorper elit, sed convallis risus. Phasellus placerat sollicitudin consectetur. Aliquam velit libero, fringilla eget justo vel, pretium tincidunt odio. Maecenas vitae cursus diam. Pellentesque scelerisque fermentum nisi, quis venenatis urna egestas euismod. Curabitur maximus augue sit amet purus cursus, vitae gravida tellus rhoncus. Quisque a velit venenatis, congue leo vitae, congue erat. Phasellus rhoncus, lectus non pulvinar cursus, turpis metus molestie lorem, placerat tincidunt elit tortor congue nibh. Aenean feugiat odio ac purus aliquam mattis. Praesent at suscipit nulla. Mauris luctus tellus in augue fringilla, a suscipit ante sagittis. Nam vestibulum vulputate ante sed fermentum. Pellentesque malesuada consectetur dolor. Proin tempus ex vitae arcu porta, quis hendrerit sapien ullamcorper. Mauris varius commodo erat ut dictum. Pellentesque varius elementum fermentum. Curabitur et erat nec sapien lacinia hendrerit non ut ipsum.</p>'

//        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
