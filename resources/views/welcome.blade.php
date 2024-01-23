<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets\CSS\tooplate-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\CSS\bootstrap.min.css') }}">
    <title>Laravel API project</title>
</head>

<body>
    <div class="tm-container mx-auto">
        <section class="tm-section tm-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-bg-circle-white tm-flex-center-v">
                            <header class="text-center">
                                <h1 class="tm-site-title">Welcome to Laravel API project</h1>
                                <p class="tm-site-subtitle">This is a RESTful API project</p>
                            </header>
                            <p>This project focuses on managing customer invoices and offers various data access levels.
                                Please read carefully before proceeding.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-2" class="tm-section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 tm-flex-center-v tm-text-container tm-section-left">
                        <h2 class="tm-color-secondary mb-4">Accessing Data: Authentication Keys</h2>
                        <p class="mb-2">Access levels are controlled by unique authentication keys:</p>
                        <ul>
                            <li>
                                **Basic:** Read-only access <br>
                                Key: (3|NThxVgK5az2a4TBhvmY7u3fpLHRqxEfr3GjhubmB3a024a72)
                            </li>
                            <li>
                                **Update:** Create, read, update data <br>
                                Key: (2|X5kNkqsvp5OBoY0pVz4L9ltxun9yajV8ek7Q5c9Z085e966f)
                            </li>
                            <li>
                                **Admin:** Full CRUD access (contact developer for key)
                            </li>
                        </ul>
                        <p class="text-right mb-0">
                            <a href="#tm-section-3" class="btn tm-btn-secondary">Next step</a>
                        </p>
                    </div>
                    <div class="col-xl-7 col-lg-6 tm-circle-img-container">
                        <img src="{{ asset('assets\images\laravel_pic1.jpg') }}" alt="Image"
                            class="rounded-circle tm-circle-img">
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-3" class="tm-section tm-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 tm-section-2-right">
                        <div class="tm-bg-circle-white tm-bg-circle-pad-2 tm-flex-center-v">
                            <header>
                                <h2 class="tm-color-primary">Get Started with Your Data</h2>
                            </header>
                            <p>Use these links to access and explore your data:</p>
                            <ul class="dashed">
                                <li><a href="{{ url('api/v1/customers') }}">Customer data</a>
                                </li>
                                <li><a href="{{ url('api/v1/invoices') }}">Invoice data</a>
                                </li>
                                <li><a href="{{ url('api/v1/customers/?includeInvoices=true') }}">User Invoices</a>
                                </li>
                                <li>Filter data using operators like `[eq]`, `[gt]`, or `[lt]`.</li>
                            </ul>
                            <p>For more information and code, visit the Github repository:</p>
                            <a href="https://github.com/sonnytee1104">Github Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="small mb-4 tm-footer-text">Copyright &copy; 2023

                        | Design: <a rel="nofollow" href="https://www.tooplate.com" class="tm-footer-link">Tooplate</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('public\js\bootstrap.js') }}"></script>
    <!-- https://github.com/cferdinandi/smooth-scroll -->
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            easing: 'easeInOutQuart',
            speed: 800
        });
    </script>
</body>

</html>
