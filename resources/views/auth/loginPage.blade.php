<x-layout>
    <div class="w-full max-w-md space-y-8 mt-12">
        <div>
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-white">Log In</h2>
        </div>
        <form class="mt-8 space-y-6" action={{route('auth.login')}} method="POST">
            @csrf
            <x-form.input name="email"/>
            <x-form.input name="password"/>
            <x-form.button>Log In</x-form.button>
        </form>
    </div>
</x-layout>
