@props(['titulo', 'type', 'nombre'])
<label for="">{{ $titulo}}</label>
<input type={{ $type }} name={{ $nombre }} class=" border border-cyan-800 rounded-lg text-ellipsis">

@error( $nombre )
<p>{{ $message }} </p>
@enderror
