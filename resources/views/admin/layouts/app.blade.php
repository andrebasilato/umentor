<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>@yield('title') - Umentor</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    @include('layouts.navigation')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @yield('content')
    </div>

    <script>
        function closeAlert(id) {
            const alert = document.getElementById(id);
            if (alert) {
                alert.style.display = 'none';
            }
        }

        setTimeout(() => {
            const successAlert = document.getElementById('toast-success');
            const warningAlert = document.getElementById('toast-warning');
            const dangerAlert = document.getElementById('toast-danger');

            if (successAlert) {
                successAlert.style.display = 'none';
            }
            if (warningAlert) {
                warningAlert.style.display = 'none';
            }
            if (dangerAlert) {
                dangerAlert.style.display = 'none';
            }
        }, 3000);
    </script>
</body>

</html>