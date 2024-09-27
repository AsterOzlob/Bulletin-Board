@extends('layouts.base')

@section("title", "Правка объявления::Мои объявления")

@section("main")
    <form action="{{route("bb.update", ["bb" => $bb->id])}}" method="POST">
        @csrf
        @method("PATCH")

        <div class="form-group">
            <label for="title">Товар</label>
            <input name="title" value="{{ old('title', $bb->title) }}" class="form-control @error('title') is-invalid @enderror">
            @error("title")
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Описание</label>
            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{{ old('content', $bb->content) }}</textarea>
            @error("content")
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Цена</label>
            <input name="price" value="{{ old('price', $bb->price) }}" class="form-control @error('price') is-invalid @enderror">
            @error("price")
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
