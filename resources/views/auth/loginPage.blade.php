<x-layout>
    <div class="w-full max-w-md space-y-8 mt-12">
        <div>
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-white"> {{trans('messages.login')}}</h2>
        </div>
        <form method="POST" action="{{route('auth.login')}}" class="mt-8 space-y-6">
            @csrf
            <x-form.input type="email" name="email" label="{{trans('messages.email')}}" class="text-white" error="email"
                          argument="email"/>
            <x-form.input type="password" name="password" label="{{trans('messages.password')}}" class="text-white"
                          error="password" argument="password"/>
            <x-form.button>{{trans('messages.login')}}</x-form.button>
        </form>
    </div>
</x-layout>
