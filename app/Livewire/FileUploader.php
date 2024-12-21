<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUploader extends Component
{
    use WithFileUploads;
 
    public $photo;
 
    public function upload($name)
    {
        $this->photo->storeAs('photos', $name, 'avatars');  // 指定 'avatars' 磁盘

    }

    public function render()
    {
        return view('livewire.file-uploader');
    }
}
