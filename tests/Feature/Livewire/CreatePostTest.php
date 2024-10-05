<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
//    use RefreshDatabase;

    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    /** @test */
    public function can_create_new_post()
    {
        $post = Post::whereTitle('Some title')->first();
        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title' , 'Some Title')
            ->set('content' , 'Some Content')
            ->call('store');

        $post = Post::whereTitle('Some Title')->first();
        $this->assertNotNull($post);
        $this->assertEquals('Some Title' , $post->title);
        $this->assertEquals('Some Content' , $post->content);

    }

    /** @test */
    public function title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title' , '')
            ->call('store')
            ->assertHasErrors(['title'=> 'required']);

    }

    /** @test */
    public function title_min()
    {
        Livewire::test(CreatePost::class)
            ->set('title' , 'tes')
            ->call('store')
            ->assertHasErrors(['title'=> 'min']);
    }




















}
