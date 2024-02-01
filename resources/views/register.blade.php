<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Sistem Informasi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css?h=d91acbd26c1a01d6126a31e29eb4da5a">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="/css/styles.min.css?h=bcac6f3b673d0a62aa95448beb4c6b9d">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;/img/dogs/img.jpg?h=a0a7d00bcd8e4f84f4d8ce636a8f94d4&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <form class="users" action="/register" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-12 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="name" placeholder="Name" name="name"></div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Email Address" name="email"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password"></div>
                                </div>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="role">
                                    <option selected>Pilih Role</option>
                                    <option value="operator">Operator</option>
                                    <option value="kps">KPS</option>
                                    <option value="pimpinan">Pimpinan</option>
                                    <option value="reviewer">Reviewer</option>
                                  </select>
                                
                                <button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="/">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.min.js?h=bdf36300aae20ed8ebca7e88738d5267"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>