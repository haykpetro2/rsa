<option value="-">Модель автомобиля</option>
@foreach($models->modelEntry as $item)
    <option class="dropdown-item" value="{{$item->value}}">
            {{$item->value}}
    </option>
@endforeach
