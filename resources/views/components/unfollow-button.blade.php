@if(auth()->user() &&  auth()->user()->isFollowing($user))
    <form
            action="{{ route('followers.destroy', $user) }}"
            method="POST"
    >
        @csrf
        @method('DELETE')
        <x-button class="ml-3">
            Unfollow
        </x-button>
    </form>
@endif
