@extends('Template.template')
@section('plantillaweb')
    <div class="container justify-center">
        <h2>Editar Materia #{{ $subject->id }}</h2>
        <form action="" method="post">
            @method('PUT')
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="formFile" class="form-label">Nombre</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Credito</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <div class="mb-3">
                <label for="formFileDisabled" class="form-label">Costo</label>
                <input class="form-control" type="file" id="formFileDisabled" disabled>
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Small file input example</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>
            <div>
                <label for="formFileLg" class="form-label">Large file input example</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file">
            </div>
        </form>
    </div>
