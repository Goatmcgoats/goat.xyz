@extends('_layouts.master')

@section('content')
    <style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}
</style>

    <h1>Welcome to Artisan Static</h1>

    <p>Artisan Static is a starter template for building a static Jigsaw blog hosted on Netlify.</p>

    <p>This comes with code highlighting, share buttons, comments, analytics, an RSS feed, a contact form, a CMS and more.</p>

    <p>The HTML, CSS and JavaScript in this template are extremely minimal, which makes the code easy to build on top of or replace completely.</p>

    <h2 id="test">Asset Compilation Test</h2>

    <p>CSS test: <span class="test-css">text with blue border</span></p>

    <p>JavaScript test: <a href="#test" class="test-js">click me</a></p>
    
    <div class="row">
        <div class="column">
        <ul>
      <li><a href="#news">asd</a></li>
      <li><a href="#news">asdasdasd</a></li>
      <li><a href="#news">we</a></li>
      <li><a href="#news">ewrerwer</a></li>
      <li><a href="#news">New23424ws</a></li>
      <li><a href="#news">Ne2356666666ws</a></li>
      <li><a href="#news">Ne77777777777777ws</a></li>
    </ul>
        </div>
    
    
    
        <div class="column">
            <ul>
      <li><a href="#news">asd</a></li>
      <li><a href="#news">asdasdasd</a></li>
      <li><a href="#news">we</a></li>
      <li><a href="#news">ewrerwer</a></li>
      <li><a href="#news">New23424ws</a></li>
      <li><a href="#news">Ne2356666666ws</a></li>
      <li><a href="#news">Ne77777777777777ws</a></li>
    </ul>

        </div>
    </div>
    
    
    
@endsection
