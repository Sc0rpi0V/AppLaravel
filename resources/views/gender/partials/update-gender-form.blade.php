<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Sexe') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's with your gender.") }}
        </p>
    </header>

    <form method="post" action="{{ route('gender.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="mt-4">
            <x-input-label for="gender" :value="__('Sexe')" />
            <div class="flex mt-2">
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" value="Mr" class="form-radio" required>
                    <span class="ml-2">{{ __('Monsieur') }}</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <input type="radio" name="gender" value="Mme" class="form-radio" required>
                    <span class="ml-2">{{ __('Madame') }}</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <input type="radio" name="gender" value="Mlle" class="form-radio" required>
                    <span class="ml-2">{{ __('Mademoiselle') }}</span>
                </label>
            </div>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'gender-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
