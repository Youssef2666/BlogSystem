<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeButton extends Component
{
    //when the value of $post changes in the parent it will also change in the child
    // #[Reactive]
    public Post $post;

    public function toggleLike()
    {
        if (Auth()->guest()) {
            return $this->redirect(route('login'),true);
        }

        $user = Auth::user();
        if ($user->hasLiked($this->post)) {
            $user->likes()->detach($this->post);
            return;
        } else {
            $user->likes()->attach($this->post);
        }

    }

    public function render()
    {
        return view('livewire.like-button');
    }
}