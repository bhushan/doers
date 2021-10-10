@if(auth()->user() && auth()->user()->isNotFollowing($user))
    <form
            action="{{ route('followers.store', $user) }}"
            method="POST"
    >
        @csrf
        <x-button class="ml-3">
            Follow
        </x-button>
    </form>
@endif
