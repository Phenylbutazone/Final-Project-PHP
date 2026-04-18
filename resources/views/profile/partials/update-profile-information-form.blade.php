<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="space-y-4">
            <div>
                <x-input-label value="Username"/>
                <x-text-input value="{{ $user->username }}" disabled class="w-full"/>
            </div>

            <div>
                <x-input-label value="Email"/>
                <x-text-input value="{{ $user->email }}" disabled class="w-full"/>
            </div>

            <div>
                <x-input-label value="Account Type"/>
                <x-text-input value="{{ $user->account_type }}" disabled class="w-full"/>
            </div>

        </div>

        <p class="mt-4 text-sm text-gray-500">
            Profile information can only be modified by the system administrator.
        </p>
    </form>
</section>
