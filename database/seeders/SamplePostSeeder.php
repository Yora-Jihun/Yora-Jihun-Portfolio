<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class SamplePostSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        Post::create([
            'title' => 'Designing Systems That Scale Without Losing Soul',
            'slug' => 'designing-systems-that-scale-without-losing-soul',
            'excerpt' => 'Most design systems start with the best intentions and end in rigid sprawl. Here\'s how to build components that give teams speed without sacrificing craft.',
            'body' => "Most design systems start with the best intentions and end in rigid sprawl. You know the pattern: a small team builds something elegant, it gets adopted, and then a dozen product squads start extending it in ways the original authors never imagined. Within a year, the system is a patchwork of overrides, deprecated props, and tribal knowledge.\n\nThe problem isn't scale itself. It's the assumption that consistency means uniformity. Too many systems treat every button, card, and form field as an opportunity to standardize, when the real job of a system is to give designers and developers enough structure to move quickly without painting themselves into corners.\n\nWhen teams move fast, they reach for abstractions. That's natural. But the best systems I've worked on share a common trait: they distinguish between what must be consistent and what can vary. A design token for color spacing is non-negotiable. A mandatory card layout for every data display is not.\n\nThe art is in knowing where to draw the line. And the only way to learn that line is to build, observe where the system breaks, and then refine. A system that doesn't evolve becomes a museum piece — technically consistent, but useless for real work.\n\nStart with principles, not patterns. A short, lived document that says \"we value accessibility, performance, and clarity\" will serve you better than a 200-page pattern library. Principles give people permission to make good decisions; patterns only tell them what to do when the pattern already exists.\n\nBuild for removal, not just addition. Every component, token, and guideline should have an owner and a sunset date. If nobody can tell you why something exists, delete it. The space you create is more valuable than the thing you remove.\n\n\"The best design systems are not the ones that control every pixel. They are the ones that disappear, letting teams do their best work without noticing the rails.\"\n\nFinally, treat your system as a product. It has users, it has a roadmap, and it needs care. Assign a small, dedicated team to steward it. Open contribution channels. Measure adoption and satisfaction. A design system that isn't maintained will be abandoned, no matter how well it was built.",
            'category' => 'Design',
            'read_time' => 8,
            'is_published' => true,
            'published_at' => now(),
            'user_id' => $user->id,
        ]);
    }
}
