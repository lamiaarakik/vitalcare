@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ajouter une infirmiere
    </div>

    <div class="card-body">
        <form action="{{ route("admin.employees.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.employee.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($employee) ? $employee->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.employee.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('sexe') ? 'has-error' : '' }}">
                <label for="sexe">sexe</label>
                <input type="text" id="sexe" sexe="sexe" class="form-control" value="{{ old('sexe', isset($employee) ? $employee->sexe : '') }}" required>
                @if($errors->has('sexe'))
                    <em class="invalid-feedback">
                        {{ $errors->first('sexe') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">    
       <div class="col-sm-8">
       <select class="form-control" id="position" name="position"  focus>
    <option value="position" disabled selected>Please select position</option>        

    <option value="aide soignante">aide soignante</option>
    <option value="infirmiere polyvalente">infirmiere polyvalente </option>
  </select>
  </div>
           
            <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
                <label for="age">age</label>
                <input type="number" id="age" age="age" class="form-control" value="{{ old('age', isset($employee) ? $employee->age : '') }}" required>
                @if($errors->has('age'))
                    <em class="invalid-feedback">
                        {{ $errors->first('age') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('look') ? 'has-error' : '' }}">
                <label for="look">look</label>
                <input type="text" id="look" look="look" class="form-control" value="{{ old('look', isset($employee) ? $employee->look : '') }}" required>
                @if($errors->has('look'))
                    <em class="invalid-feedback">
                        {{ $errors->first('look') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('situation_familiale') ? 'has-error' : '' }}">
                <label for="situation_familiale">situation_familiale</label>
                <input type="text" id="situation_familiale" situation_familiale="situation_familiale" class="form-control" value="{{ old('situation_familiale', isset($employee) ? $employee->situation_familiale : '') }}" required>
                @if($errors->has('situation_familiale'))
                    <em class="invalid-feedback">
                        {{ $errors->first('situation_familiale') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('langue') ? 'has-error' : '' }}">
                <label for="langue">langue</label>
                <input type="text" id="langue" langue="langue" class="form-control" value="{{ old('langue', isset($employee) ? $employee->langue : '') }}" required>
                @if($errors->has('langue'))
                    <em class="invalid-feedback">
                        {{ $errors->first('langue') }}
                    </em>
                @endif
               
            </div>
             <div class="form-group {{ $errors->has('experience') ? 'has-error' : '' }}">
                <label for="experience">experience</label>
                <input type="number" id="experience" experience="experience" class="form-control" value="{{ old('experience', isset($employee) ? $employee->experience : '') }}" required>
                @if($errors->has('experience'))
                    <em class="invalid-feedback">
                        {{ $errors->first('experience') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('nombre_heure') ? 'has-error' : '' }}">
                <label for="nombre_heure">nombre_heure</label>
                <input type="number" id="nombre_heure" nombre_heure="nombre_heure" class="form-control" value="{{ old('nombre_heure', isset($employee) ? $employee->nombre_heure : '') }}" required>
                @if($errors->has('nombre_heure'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nombre_heure') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('salaire') ? 'has-error' : '' }}">
                <label for="salaire">salaire</label>
                <input type="number" id="salaire" salaire="salaire" class="form-control" value="{{ old('salaire', isset($employee) ? $employee->salaire : '') }}" required>
                @if($errors->has('salaire'))
                    <em class="invalid-feedback">
                        {{ $errors->first('salaire') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.employee.fields.email') }}</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($employee) ? $employee->email : '') }}">
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.employee.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="phone">{{ trans('cruds.employee.fields.phone') }}</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($employee) ? $employee->phone : '') }}">
                @if($errors->has('phone'))
                    <em class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.employee.fields.phone_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                <label for="photo">{{ trans('cruds.employee.fields.photo') }}</label>
                <div class="needsclick dropzone" id="photo-dropzone">

                </div>
                @if($errors->has('photo'))
                    <em class="invalid-feedback">
                        {{ $errors->first('photo') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.employee.fields.photo_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('services') ? 'has-error' : '' }}">
                <label for="services">{{ trans('cruds.employee.fields.services') }}
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="services[]" id="services" class="form-control select2" multiple="multiple">
                    @foreach($services as $id => $services)
                        <option value="{{ $id }}" {{ (in_array($id, old('services', [])) || isset($employee) && $employee->services->contains($id)) ? 'selected' : '' }}>{{ $services }}</option>
                    @endforeach
                </select>
                @if($errors->has('services'))
                    <em class="invalid-feedback">
                        {{ $errors->first('services') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.employee.fields.services_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.employees.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employee) && $employee->photo)
      var file = {!! json_encode($employee->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@stop