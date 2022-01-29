<div class="col-6">
  <div class="mb-1">
    <label class="form-label" for="name">User Name</label>
    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="User Name" name="name"
      value="{{ old('name', $user->name) }}" />
    @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>
<div class="col-6">
  <div class="mb-1">
    <label class="form-label" for="email">User Email</label>
    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="User Email" name="email"
      value="{{ old('email', $user->email) }}" />
    @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>
<div class="col-6">
  <div class="mb-1">
    <label class="form-label" for="phone">User Phone</label>
    <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="0501234567" name="phone"
      value="{{ old('phone', $user->phone) }}" />
    @error('phone')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>
<div class="col-6">
  <div class="mb-1">
    <label class="form-label" for="password">User Password</label>
    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="User Password"
      name="password" />
    @error('password')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>
<div class="col-12">
  <div class="mb-1">
    <label class="form-label" for="roles">Roles</label>
    <div class="pb-25">
      <span class="btn btn-success btn-sm select-all">{{ __('Select All') }}</span>
      <span class="btn btn-danger btn-sm deselect-all">{{ __('Unselect All') }}</span>
    </div>

    <select id="roles" class="custom-select select2" data-placeholder="Select Roles" name="roles[]" multiple>
      @foreach ($roles as $role)
        <option value="{{ $role->id }}" {{ isset($user) && $user->hasRole($role) ? 'selected' : '' }}>
          {{ $role->name }}
        </option>
      @endforeach
    </select>
    @error('roles')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>
