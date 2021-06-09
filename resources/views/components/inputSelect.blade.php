<div class="form-group">
    <label for="{{$field}}" >{{$label}}</label>
    <select type="{{$type}}" class="form-control" id="{{$field}}" name="{{$field}}"
    placeholder="{{$placeholder ?? ''}}"
    @isset ($value) value="{{old("$field") ? old("$field") : $value}}"
    @else value="{{old($field)}}"
    @endisset>
        <option>-- Pilih Jenis Kelamin --</option>
        <option value="Laki-Laki" >Laki-Laki</option>
        <option value="Perempuan" >Perempuan</option>
    </select>

    @error($field)
    <div class="alert{{$field}} alert-danger">{{ $message }}</div>
    @enderror
</div>
