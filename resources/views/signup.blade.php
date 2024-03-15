<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <h1> Sing up </h1>
    <form action="/signup" method="POST">
        @csrf
        <div>
            <x-input titulo="Name" type="text" nombre="Name"/>
        </div>

        <div>
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>

        <div>
            <x-input titulo="Password" type="password" nombre="Password"/>
        </div>

        <div>
            <x-input titulo="Bithday" type="text" nombre="Birthday"/>
        </div>

<button type="submit">Submit</button>


</div>
