@props(['titulo', 'type', 'nombre'])

<div class=" my-2">

    <label for="">{{ $titulo}}</label>
    <input type={{ $type }} name={{ $nombre }} class=" border border-cyan-800 rounded-lg px-5 py-2c">

    @error( $nombre )
    <p>{{ $message }} </p>
    @enderror

</div>
