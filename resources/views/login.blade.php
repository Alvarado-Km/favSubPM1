<x-layout>
    <!-- An unexamined life is not worth living. - Socrates -->
    <div class="grid place-content-center h-screen">

        <h1 class="font "> Log in </h1>
        <form action="/login" method="POST">
            @csrf
            <div class="my-2">
                <x-input titulo="Email" type="text" nombre="email" />
            </div>
            <div>
                <x-input titulo="Password" type="password" nombre="password" />
            </div>
        </form>
            <button class="border bg-slate-500 rounded border-cyan-950" type="submit">Log in</button>
    </div>
</x-layout>
