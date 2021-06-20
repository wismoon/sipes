<div class="form-group">
    <label for="{{$field}}">Upload File Syarat</label>
    <input type="file" class="form-control" id="file_syarat" name="file_syarat">

    @error($field)
    <div class="alert{{$field}} alert-danger">{{ $message }}</div>
    @enderror
</div>
