@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titolo: </label>
                        <input type="text" name="title" placeholder="Inserisci il titolo">
                    </div>
                    <div class="form-group">
                        <select name="category_id" id="category">
                        <option value="">No Option</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->label}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione Del Post: </label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="inserisci descrizione del post">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Inserisci url dell'immagine</label>
                        <input type="text" name="image" placeholder="Inserisci immagine">
                    </div>
                    <button type="submit" class="btn btn-success">Crea Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection 