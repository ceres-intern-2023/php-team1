

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('お名前')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('アドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- 年齢 -->
            <div class="mt-4">
                <x-label for="age" :value="__('年齢')" />

                <x-input id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')" required />
            </div>

            <!-- 性別 -->
            <span>性別:</span>
            <div class="mt-2">
                <input type="radio" id="male" name="gender" :value="old('gender')" required>
                <label for="male">男性</label>

                <input type="radio" id="female" name="gender" :value="old('gender')" required>
                <label for="female">女性</label>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('パスワード（確認）')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('すでに登録済みの方') }}
                </a>

                <button class="ml-4 bg-blue-500 rounded-lg text-white text-sm py-1 px-2">
                    {{ __('登録する') }}
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
