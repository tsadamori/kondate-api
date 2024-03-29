<?php

declare(strict_types=1);

namespace Tests\Feature\Api\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        /** @var User $users */
        $this->users = User::factory(10)->create([]);
    }

    public function testSuccess(): void
    {
        $this->get('/api/v1/users')
            ->assertStatus(200);
    }
}
