@extends('template')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Checkout example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      
      <h2>Add New Project</h2>
    </div>

      <div class="col-md-7 col-lg-8">
        

        {{$errors}}
        <form class="needs-validation" action="noveauProjet"  method="POST" >
        {{ csrf_field() }}
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="Identifier" class="form-label">Identifier</label>
              <input type="text" class="form-control" name="Identifier" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid Identifier is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="Title" class="form-label">Title</label>
              <input type="text" class="form-control" name="Title" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid Title is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="Price" class="form-label">Price</label>
              <input type="number" class="form-control" name="Price" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid price is required.
              </div>
            </div>

            <div class="col-12">
              <label for="Description" class="form-label">Description</label>
              <div class="input-group has-validation">
                <span class="input-group-text"></span>
                <textarea cols="10" rows="5" class="form-control" name="Description" required></textarea>
              <div class="invalid-feedback">
                  Your Description is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="ddelivery_time" class="form-label">delivery time</label>
              <div class="input-group has-validation">
                <input type="date" class="form-control" name="delivery_time" required>
              <div class="invalid-feedback">
                  Your delivery time is required.
                </div>
              </div>
            </div>

            
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Add Project</button>
        </form>
      </div>
    </div>
  </main>

 
</div>


    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
@endsection