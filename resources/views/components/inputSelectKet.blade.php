<div class="form-group">
    <label for="{{$field}}" >{{$label}}</label>
    <select type="{{$type}}" class="form-control" id="{{$field}}" name="{{$field}}"
    placeholder="{{$placeholder ?? ''}}"
    @isset ($value) value="{{old("$field") ? old("$field") : $value}}"
    @else value="{{old($field)}}"
    @endisset>
        <option>-- Pilih Jenis Surat --</option>
        <option value="Penghasilan">Penghasilan</option>
        <option value="Miskin">Miskin</option>
        <option value="KP/KKN">KP/KKN</option>
    </select>

    @error($field)
    <div class="alert{{$field}} alert-danger">{{ $message }}</div>
    @enderror
</div>
