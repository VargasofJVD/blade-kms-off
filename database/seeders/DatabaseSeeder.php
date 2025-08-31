<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Event;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\GalleryImage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed News
        News::create([
            'title' => 'Welcome to the New Academic Year 2025/26',
            'content' => 'We are excited to welcome all our students back to Krisah Montessori School for the 2024 academic year. This year promises to be filled with learning, growth, and exciting new opportunities for all our children.',
            'published_at' => now(),
        ]);

        News::create([
            'title' => 'Montessori Education Workshop for Parents',
            'content' => 'Join us for an informative workshop where parents can learn more about the Montessori method and how to support their children\'s learning at home. The workshop will be held on Saturday, February 15th, 2024.',
            'published_at' => now()->subDays(5),
        ]);

        News::create([
            'title' => 'Annual Sports Day Celebration',
            'content' => 'Our annual sports day was a huge success! Students participated in various athletic events, showcasing their physical skills and team spirit. Thank you to all parents who attended and supported our children.',
            'published_at' => now()->subDays(10),
        ]);

        // Seed Events
        Event::create([
            'title' => 'P.T.A Meeting',
            'description' => 'Join us for our quarterly parent-teacher conference to discuss your child\'s progress and development.',
            'date' => now()->addDays(15),
            'time' => '14:00:00',
            'venue' => 'School Auditorium',
            'is_featured' => true,
        ]);

        Event::create([
            'title' => 'Cultural Day Celebration',
            'description' => 'Celebrate Ghanaian culture with traditional music, dance, and food. Students will showcase their cultural heritage.',
            'date' => now()->addDays(30),
            'time' => '10:00:00',
            'venue' => 'School Grounds',
            'is_featured' => false,
        ]);

        Event::create([
            'title' => 'Science Fair 2025',
            'description' => 'Students will present their science projects and experiments. A great opportunity to see the creativity and innovation of our young scientists.',
            'date' => now()->addDays(45),
            'time' => '09:00:00',
            'venue' => 'School Hall',
            'is_featured' => true,
        ]);

        // Seed Testimonials
        Testimonial::create([
            'name' => 'Mrs. Grace Addo',
            'role' => 'Parent',
            'content' => 'Krisah Montessori has been a wonderful experience for my daughter. The teachers are caring and the Montessori method has helped her develop independence and a love for learning.',
            'is_featured' => true,
        ]);

        Testimonial::create([
            'name' => 'Mr. Kwame Mensah',
            'role' => 'Parent',
            'content' => 'I am impressed with how my son has grown academically and socially since joining Krisah Montessori. The school provides excellent foundation for future learning.',
            'is_featured' => true,
        ]);

        Testimonial::create([
            'name' => 'Ms. Sarah Osei',
            'role' => 'Former Student',
            'content' => 'My time at Krisah Montessori prepared me well for secondary school. The hands-on learning approach made education fun and engaging.',
            'is_featured' => false,
        ]);

        // Seed Gallery
        $gallery1 = Gallery::create([
            'title' => 'Annual Sports Day 2023',
            'description' => 'Highlights from our annual sports day celebration',
            'category' => 'Events',
        ]);

        $gallery2 = Gallery::create([
            'title' => 'Classroom Activities',
            'description' => 'Students engaged in various learning activities',
            'category' => 'Academics',
        ]);

        $gallery3 = Gallery::create([
            'title' => 'Cultural Day 2023',
            'description' => 'Celebrating Ghanaian culture and traditions',
            'category' => 'Events',
        ]);

        // Seed Gallery Images (placeholder paths)
        GalleryImage::create([
            'gallery_id' => $gallery1->id,
            'path' => 'gallery/sports-day-1.jpg',
            'caption' => 'Students participating in relay race',
            'alt_text' => 'Children running in relay race',
        ]);

        GalleryImage::create([
            'gallery_id' => $gallery1->id,
            'path' => 'gallery/sports-day-2.jpg',
            'caption' => 'Award ceremony',
            'alt_text' => 'Students receiving medals',
        ]);

        GalleryImage::create([
            'gallery_id' => $gallery2->id,
            'path' => 'gallery/classroom-1.jpg',
            'caption' => 'Students working with Montessori materials',
            'alt_text' => 'Children using educational materials',
        ]);

        GalleryImage::create([
            'gallery_id' => $gallery3->id,
            'path' => 'gallery/cultural-day-1.jpg',
            'caption' => 'Traditional dance performance',
            'alt_text' => 'Students performing traditional dance',
        ]);
    }
}
