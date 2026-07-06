<?php

use App\Models\Idea;
use App\Models\User;
use Database\Factories\IdeaFactory;

test('it belongs to a user', function () {
    $idea = Idea::factory()->create();

    expect($idea->user)->toBeInstanceOf(User::class);
});
