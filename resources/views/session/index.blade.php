<x-layout>

    <div class="w-full max-w-md space-y-8 mt-12">
        <div>
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-white">Log In</h2>
        </div>
        <form class="mt-8 space-y-6" action="#" method="POST">

            <div class="rounded-md shadow-sm text-left space-y-4">
                <div>
                    <label for="email-address" class="text-lg text-white">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required
                           class="w-full rounded-t-md  p-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 "
                           placeholder="Email address">
                </div>
                <div>
                    <label for="password" class="text-lg text-white">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                           class="w-full rounded-b-md border-0 p-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600"
                           placeholder="Password">
                </div>
            </div>

            <div>
                <button type="submit"
                        class="group relative flex w-full justify-center rounded-md bg-gray-900 px-3 py-4 text-sm font-semibold text-white hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Log In
                </button>
            </div>
        </form>

    </div>
</x-layout>
