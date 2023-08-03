@if (isset($communes))
        <option value="">Choisissez une commune</option>
    @foreach ($communes as $commune)
        <option value="{{$commune->ID_COMMUNE}}">{{$commune->NOM}} </option>
        
    @endforeach
        
@else
        <option value="">Choisissez une colline</option>
    @foreach ($collines as $colline)
        <option value="{{$colline->ID_COLLINE}}">{{$colline->NOM}} </option>
        
    @endforeach
@endif