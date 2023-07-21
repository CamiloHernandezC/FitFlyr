@foreach($events as $event)
    <div class="solicitud-container  text-center text-md-left d-md-flex {{\Illuminate\Support\Facades\Blade::check('feature', 'dark_theme', false) ? "floating-card bg-semi-transparent" : "box-shadow"}} mb-3">
        <div>
            <h3 class="d-block my-2">{{$event->evento->nombre}} </h3>
            <p class="d-block my-1"><strong>Día:</strong> {{$event->fecha_inicio->isoFormat('dddd D MMMM')}}</p>
            <p class="d-block my-1"><strong>Hora:</strong> {{$event->fecha_inicio->format('g:i A')}}</p>
            <p class="d-block my-1"><strong>Lugar: </strong>{{$event->lugar}}</p>
            @if((strcasecmp (\Illuminate\Support\Facades\Auth::user()->rol, \App\Utils\Constantes::ROL_ADMIN ) == 0))
                <p class="d-block my-1"><strong>Asistentes: </strong>{{$event->attendees->count()}}</p>
            @endif
        </div>
        <div class="ml-auto my-3">
            <a type="button" class="btn btn-success" href="{{route('evento', ['sesion'=> $event->id])}}">Ver mas</a>
        </div>
    </div>
@endforeach
