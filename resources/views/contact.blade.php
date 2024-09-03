@extends('navbar')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
    <h1>Contact Us</h1>
    <form>
    <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">CONTACT INFO : 09 81 314 928 595</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" value="Malbert C">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="CONTACT NO">
            </div>
            <div class="app-form-group message">
              <input class="app-form-control" placeholder="MESSAGE">
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">CANCEL</button>
              <button class="app-form-button">SEND</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    </form>
</body>
</html>
@endsection
