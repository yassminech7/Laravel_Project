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
      
      <h2>Sign in</h2>
    </div>

      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>

        {{$errors}}
        <form class="needs-validation" action="inscription"  method="POST" >
        {{ csrf_field() }}
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" name="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="Identifiant" class="form-label">Identifiant</label>
              <div class="input-group has-validation">
                <span class="input-group-text"></span>
                <input type="text" class="form-control" name="Identifiant" required>
              <div class="invalid-feedback">
                  Your identifiant is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="login" class="form-label">Login</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" name="login" placeholder="login" required>
              <div class="invalid-feedback">
                  Your login is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="password" class="form-label">Password</label>
              <div class="input-group has-validation">
                <input type="password" class="form-control" name="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              <div class="invalid-feedback">
                  Your password is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address 
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="age" class="form-label">Age</label>
              <div class="input-group has-validation">
                <input type="number" class="form-control" name="age" required>
              <div class="invalid-feedback">
                  Please enter a valid age
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="CIN" class="form-label">CIN</label>
              <div class="input-group has-validation">
                <input type="number" class="form-control" name="CIN" required>
              <div class="invalid-feedback">
                  Please enter a valid CIN
                </div>
              </div>
            </div>
             

            <div class="col-md-3">
              <label for="job" class="form-label">Job</label>
              <input type="text" class="form-control" name="job" placeholder="" required>
              <div class="invalid-feedback">
                Job is required.
              </div>
            </div>


         </div>
          
          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="credit_card_name" class="form-label">Name on card</label>
              <input type="text" class="form-control" name="credit_card_name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="credit_card_number" class="form-label">Credit card number</label>
              <input type="number" class="form-control" name="credit_card_number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="date" class="form-control" name="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="CV" class="form-label">CV</label>
              <input type="File" class="form-control" name="CV" placeholder="" required>
              <div class="invalid-feedback">
                CV is required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
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