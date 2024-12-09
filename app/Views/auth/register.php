<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Register page with full background image">
  <meta name="author" content="">
  <title>NGlaundry - Register</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('allpublic/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
  <style>
    /* Fullscreen Background Image */
    body {
      background: url('<?= base_url('img/logo7.webp'); ?>') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .register-card {
      background: rgba(255, 255, 255, 0.85); /* White background with transparency */
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      width: 100%;
      max-width: 400px;
    }

    .register-card h1 {
      font-weight: bold;
      color: #6a11cb;
    }

    .btn-primary {
      background: #2575fc;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background: #6a11cb;
    }

    .btn-google,
    .btn-facebook {
      background-color: #db4437; /* Google red */
      color: white;
    }

    .btn-facebook {
      background-color: #3b5998; /* Facebook blue */
    }

    .btn-block {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="register-card">
    <div class="text-center">
      <h1 class="h4 mb-4">Create an Account</h1>
    </div>
    <form action="<?= site_url('register'); ?>" method="POST" class="user">
      <?= csrf_field(); ?>
      <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputFirstName" placeholder="Enter First Name" name="first_name" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputLastName" placeholder="Enter Last Name" name="last_name" required>
      </div>
      <div class="form-group">
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Enter Email Address" name="email" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control form-control-user" id="exampleInputPasswordRepeat" placeholder="Repeat Password" name="password_repeat" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Register</button>
      <hr>
      <a href="index.html" class="btn btn-google btn-block">
        <i class="fab fa-google fa-fw"></i> Register with Google
      </a>
      <a href="index.html" class="btn btn-facebook btn-block">
        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
      </a>
    </form>
    <hr>
    <div class="text-center">
      <a class="small" href="<?= site_url('auth/login'); ?>">Already have an account? Login!</a>
    </div>
    <div class="text-center mt-3">
      <a class="btn btn-secondary btn-sm" href="<?= base_url('/'); ?>">Back to Home</a>
    </div>
  </div>

  <script src="<?= base_url('allpublic/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('allpublic/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>
