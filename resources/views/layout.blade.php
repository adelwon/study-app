<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="theme-color" content="#7952b3">

    <link href="https://getbootstrap.com/docs/5.1/examples/checkout/form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <main>
        <h1 class="text-center mb-4">@yield('title')</h1>
        @yield('content')
    </main>
</div>

<script src="https://getbootstrap.com/docs/5.1/examples/checkout/form-validation.js"></script>
</body>
</html>
