<div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') ?? $student->name }}" class="form-control">
        <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group pb-2">
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') ?? $student->email }}" class="form-control">
        <div>{{ $errors->first('email') }}</div>
</div>

@csrf