<?php

namespace Tests\Feature\Livewire;

use App\Livewire\FileUploader;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class FileUploaderTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(FileUploader::class)
            ->assertStatus(200);
    }
    /** @test */
    public function can_upload_photo()
    {
        Storage::fake('avatars');

        $file = UploadedFile::fake()->image('avatar.png');

        Livewire::test(FileUploader::class)
            ->set('photo', $file)
            ->call('upload', 'uploaded-avatar.png');

        Storage::disk('avatars')->assertExists('photos/uploaded-avatar.png');

    }
}
