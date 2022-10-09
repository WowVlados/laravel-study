@extends('layouts.app')

@section('title-blog')
    contact
@endsection

@section('content')
<h1>contact</h1>

    <form action="/contact/submit" method="post">

        <div class="form-group">
            <label for="email">input email</label>
            <input type="text" name="email" placeholder="input email " id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="number">input number</label>
            <input type="text" name="number" placeholder="input number " id="number" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">input name</label>
            <input type="text" name="name" placeholder="input name " id="name" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
