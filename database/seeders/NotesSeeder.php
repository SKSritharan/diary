<?php

namespace Database\Seeders;

use App\Models\Note;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notes = [
            [
                'user_id' => 1,
                'title' => 'Daily Reflection: New Beginnings',
                'content' => "Today marks the start of a new chapter in my life. I've decided to focus more on mindfulness and being present in each moment. The morning meditation session was particularly refreshing, and I feel centered for the first time in months.",
                'published_at' => Carbon::now()->subDays(30),
            ],
            [
                'user_id' => 1,
                'title' => 'Project Ideas for Q2',
                'content' => "1. Develop a personal finance tracker\n2. Create a meal planning app\n3. Build a productivity dashboard\n4. Design a habit tracking system\n5. Implement a knowledge management system for the team",
                'published_at' => Carbon::now()->subDays(28),
            ],
            [
                'user_id' => 1,
                'title' => 'Book Notes: Atomic Habits',
                'content' => "Key takeaways from James Clear's book:\n- Small habits compound over time\n- Focus on systems rather than goals\n- Identity-based habits are more likely to stick\n- Environment design is crucial for behavior change\n- The 1% rule: tiny improvements add up",
                'published_at' => Carbon::now()->subDays(25),
            ],
            [
                'user_id' => 1,
                'title' => 'Weekly Planning Session',
                'content' => "This week's priorities:\n1. Complete the API documentation\n2. Review the new hire's code\n3. Prepare for the client meeting on Thursday\n4. Finalize Q1 performance reports\n5. Schedule team building activity",
                'published_at' => Carbon::now()->subDays(21),
            ],
            [
                'user_id' => 1,
                'title' => 'Meeting Notes: Product Strategy',
                'content' => "Discussed product roadmap for the next 6 months. Key points:\n- Focus on core user experience improvements\n- Launching mobile app by August\n- Revamp onboarding process to improve conversion\n- Implement user feedback system\n- Consider pricing structure changes",
                'published_at' => Carbon::now()->subDays(19),
            ],
            [
                'user_id' => 1,
                'title' => 'Gardening Journal: Spring Planting',
                'content' => "Started planting today:\n- Tomatoes (Roma and Cherry varieties)\n- Bell peppers\n- Basil and cilantro\n- Zucchini\n- Sunflowers along the fence\n\nSoil was amended with compost. Weather forecast looks promising with mild temperatures for the next week.",
                'published_at' => Carbon::now()->subDays(17),
            ],
            [
                'user_id' => 1,
                'title' => 'Recipe Development: Vegan Pasta',
                'content' => "Created a new recipe for creamy vegan pasta sauce using cashews, nutritional yeast, and roasted garlic. The texture was perfect! Next time try adding sun-dried tomatoes and maybe a hint of truffle oil for special occasions.",
                'published_at' => Carbon::now()->subDays(15),
            ],
            [
                'user_id' => 1,
                'title' => 'Debugging Notes: Authentication Issue',
                'content' => "Fixed the persistent authentication bug today. Root cause was incorrect token expiration handling. The middleware was checking against UTC time while the tokens were being generated with local server time. Added tests to prevent regression.",
                'published_at' => Carbon::now()->subDays(14),
            ],
            [
                'user_id' => 1,
                'title' => 'Travel Planning: Summer Vacation',
                'content' => "Researching destinations for August trip:\n- Barcelona: Great culture, food, and beaches\n- Portugal: More affordable, amazing coastline\n- Croatia: Beautiful islands, historical sites\n\nNeed to book flights at least 2 months in advance. Consider Airbnb for longer stays to save on accommodations.",
                'published_at' => Carbon::now()->subDays(12),
            ],
            [
                'user_id' => 1,
                'title' => 'Meditation Progress',
                'content' => "Completed 30 days of daily meditation! Starting with just 5 minutes and now up to 20 minutes per session. Noticing improved focus during work and better sleep quality. The guided sessions are helpful, but starting to prefer unguided meditation now.",
                'published_at' => Carbon::now()->subDays(10),
            ],
            [
                'user_id' => 1,
                'title' => 'Language Learning: Spanish Week 3',
                'content' => "Vocabulary focus this week:\n- Common food items\n- Restaurant phrases\n- Direction words\n- Basic weather terms\n\nStarted watching a Spanish TV show with subtitles. Understanding about 40% without help. Need to practice more verb conjugations.",
                'published_at' => Carbon::now()->subDays(8),
            ],
            [
                'user_id' => 1,
                'title' => 'Code Review Guidelines',
                'content' => "New team code review standards:\n1. All PRs must have at least two reviewers\n2. Comments should be constructive and specific\n3. Focus on architecture and maintainability, not just style\n4. Automated tests required for all new features\n5. Security considerations must be explicitly addressed",
                'published_at' => Carbon::now()->subDays(7),
            ],
            [
                'user_id' => 1,
                'title' => 'Home Renovation Ideas',
                'content' => "Kitchen remodel planning:\n- Replace countertops with quartz\n- Add kitchen island with seating\n- Update lighting fixtures\n- New cabinet hardware\n- Backsplash with subway tile\n\nEstimated budget: $12,000-15,000. Get at least three contractor quotes.",
                'published_at' => Carbon::now()->subDays(6),
            ],
            [
                'user_id' => 1,
                'title' => 'Fitness Goals Q2',
                'content' => "Current achievements:\n- Running 5k three times weekly\n- Basic strength training routine\n\nGoals for next quarter:\n- Improve 5k time from 30 to 25 minutes\n- Add two strength training sessions per week\n- Incorporate yoga for flexibility\n- Complete a 10k race by June",
                'published_at' => Carbon::now()->subDays(5),
            ],
            [
                'user_id' => 1,
                'title' => 'Database Optimization Notes',
                'content' => "Performance improvements implemented:\n1. Added indexes to frequently queried columns\n2. Optimized slow-running queries\n3. Implemented query caching for dashboard\n4. Set up database monitoring alerts\n5. Scheduled regular maintenance tasks\n\nServer response time improved by 40%.",
                'published_at' => Carbon::now()->subDays(4),
            ],
            [
                'user_id' => 1,
                'title' => 'Art Exhibition Visit',
                'content' => "Visited the modern art exhibition today. Particularly impressed by the installation using recycled materials to create an immersive forest environment. The interplay of light and shadow was masterful. Picked up some inspiration for my own mixed media project.",
                'published_at' => Carbon::now()->subDays(3),
            ],
            [
                'user_id' => 1,
                'title' => 'Financial Planning Update',
                'content' => "Quarterly financial review:\n- Emergency fund fully funded (6 months expenses)\n- Retirement contributions increased to 15%\n- Debt reduction plan on track\n- Investment portfolio rebalanced\n- Need to research tax optimization strategies",
                'published_at' => Carbon::now()->subDays(2),
            ],
            [
                'user_id' => 1,
                'title' => 'User Testing Insights',
                'content' => "Key findings from today's usability testing:\n1. Users struggle with the account creation process\n2. Navigation between dashboard sections isn't intuitive\n3. Search functionality exceeds expectations\n4. Mobile experience needs improvement\n5. Positive reaction to the new reporting features",
                'published_at' => Carbon::now()->subDays(1),
            ],
            [
                'user_id' => 1,
                'title' => 'Weekly Gratitude Practice',
                'content' => "This week I'm grateful for:\n1. The support from my team during the challenging project launch\n2. Making progress with my health goals\n3. The unexpected call from an old friend\n4. Beautiful spring weather and blooming flowers\n5. Finding a new favorite book that's providing great insights",
                'published_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Learning Path: Machine Learning',
                'content' => "Resources for ML learning journey:\n- Stanford's online course on Machine Learning\n- 'Hands-On Machine Learning with Scikit-Learn' book\n- Python programming practice\n- Kaggle competitions for practical experience\n- Join local AI/ML meetup group for networking",
                'published_at' => Carbon::now(),
            ],
        ];

        foreach ($notes as $note) {
            Note::create($note);
        }
    }
}
