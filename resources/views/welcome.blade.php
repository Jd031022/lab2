@extends('navbar')

@section('content')
<div class="container mt-4">
    @if(isset($username))
        <h1>Welcome, {{ $username }}!</h1>
    @else
        <form action="/user" method="POST">
            @csrf
            <label for="username">Enter your name:</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}"
                   class="{{ $errors->has('username') ? 'input-error' : 'input-normal' }}" required>
            <button type="submit">Submit</button>
            <button type="button" onclick="submitAsGuest()">Guest</button>
        </form>
    @endif

    @if ($errors->any())
        <div>
            <ul style="list-style-type: none; padding: 0; margin: 0;">
                @foreach ($errors->all() as $error)
                    <li style="color: red; font-size: 12px; margin-bottom: 5px;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<!-- JavaScript to handle "Guest" button click -->
<script>
    function submitAsGuest() {
        document.getElementById('username').value = 'Guest'; 
        document.querySelector('form').submit(); 
    }
</script>

<style>
    .input-error {
        border: 2px solid red;
        background-color: #ffe6e6;
    }
    .input-normal {
        border: 1px solid #ced4da;
        background-color: #fff;
    }
</style>
@endsection
