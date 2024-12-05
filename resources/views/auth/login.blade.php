
<x-guest-layout>
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <form class="card-body" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-control">
                    <div class="text-center pb-3">
                        <h1 class="text-5xl font-bold">Login</h1>
                        <!-- <p class="py-6">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.
                        </p> -->
                    </div>
                        <label class="label">
                            <span class="label-text">Username</span>
                        </label>
                        <input id="email" class="block mt-1 w-full rounded-r-none" type="text" name="email"
                            :value="old('email')" required autofocus autocomplete="username" placeholder="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <label class="label">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="label-text-alt link link-hover">
                                    {{ __('Forgot password?') }}
                                </a>
                            @endif
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer">
                            <span class="label-text">Remember me</span>
                            <input type="checkbox" class="checkbox" name="remember" />
                        </label>
                    </div>
                    <div class="ms-3">
                        <x-primary-button class="btn btn-primary w-full">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
