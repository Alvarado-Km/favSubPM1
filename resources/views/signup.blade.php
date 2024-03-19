<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <h1 class="text-4xl my-12"> Sing up </h1>
    <form action="/signup" method="POST">

        @csrf

            <x-input titulo="Name" type="text" nombre="Name"/>

            <x-input titulo="Email" type="text" nombre="email"/>

            <x-input titulo="Password" type="password" nombre="Password"/>

            <x-input titulo="Birthday" type="text" nombre="Birthday"/>

<button type="submit">Submit</button>


</div>
