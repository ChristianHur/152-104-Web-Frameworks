@extends('layouts.master')

@section('title', $title )

@section('content')
<main>
    <div class="contact">
        <h1 id="title">{{ $title }}</h1>
        <div>
            <form>
                <div class="form-controls">
                    <label for="name">Full Name</label>
                    <input name="name" id="name">
                </div>
                <div class="form-controls">
                    <label for="email">Email</label>
                    <input name="email" id="email">
                </div>
                <div class="form-controls">
                    <label for="message">Your Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <div class="form-controls">
                    <button type="submit" name="submit">Submit</button>
                    <button type="reset" name="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
