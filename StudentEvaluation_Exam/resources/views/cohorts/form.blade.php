<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name') ?? $cohort->name }}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>

@csrf