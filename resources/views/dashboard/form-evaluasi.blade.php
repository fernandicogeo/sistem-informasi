<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Sistem Informasi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css?h=d91acbd26c1a01d6126a31e29eb4da5a">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="css/styles.min.css?h=bcac6f3b673d0a62aa95448beb4c6b9d">
</head>

<body id="page-top">
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="display-6 fw-bold mb-4">Buat Data Evaluasi</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div>
                        <form class="users" action="/form-evaluasi" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                    <input class="shadow form-control form-control-user mb-3" type="text" id="title" placeholder="Judul Evaluasi" name="title">
                                    <textarea class="shadow form-control" id="content" name="content" rows="3"></textarea></div>
                            </div>
                            <button class="shadow btn btn-primary d-block btn-user w-100" type="submit">Submit</button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Newsletter Subscription Centered -->
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © Sistem Informasi 2022</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.min.js?h=bdf36300aae20ed8ebca7e88738d5267"></script>
</body>

</html>