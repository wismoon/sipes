<div class="form-group">
    <label for="{{$field}}" >{{$label}}</label>
    <input type="{{$type}}" class="form-control" id="{{$field}}" name="{{$field}}"
    placeholder="{{$placeholder ?? ''}}"
    readonly
    @isset ($value) value="{{old("$field") ? old("$field") : $value}}"
    @else value="{{old($field)}}"
    @endisset>



    @error($field)
    <div class="alert{{$field}} alert-danger">{{ $message }}</div>
    @enderror
</div>
