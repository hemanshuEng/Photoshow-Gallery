<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- foundation-float.min.css: Compressed CSS with legacy Float Grid -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.1/dist/css/foundation-float.min.css" integrity="sha256-G4aYgUXr4BBL+Jq0iD/76u5e/4+BU5W/V+/g4QcCM3Y= sha384-49P837FYKAAlOm+zmLeYGIqzDRYRDy4zdAG3jyzqcVwnnJGh0MOxajp3JJlTDnh7 sha512-22kUT1tNth37k4XYOoLoAITcKFHtnjviE0XOmpeY4Ng4xo4rCODl+F90jHJpX4MVIWB1cpMNI04GoHi7Y8hZmw==" crossorigin="anonymous">

<!-- foundation-prototype.min.css: Compressed CSS with prototyping classes -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.1/dist/css/foundation-prototype.min.css" integrity="sha256-4n7bsCOOmkCVY5m2SjWXaaGNBVfpRp2Ru0o/9o2jBeA= sha384-ilPojSwjGVyRg/Z/cuDn5k4ifi7ndOZEvCy4OwnyJDEsBrVwI6ZyqYs+mfnl2rDQ sha512-twSqiAL34UZiv6u6OeU5HtYAOD0Zly8EZQM1ZdzhtSAuaTn+2HVFfOvOrvf5fLq62zqYtwh8U42Idn9b0qD3og==" crossorigin="anonymous">

<!-- foundation-rtl.min.css: Compressed CSS with right-to-left reading direction -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.1/dist/css/foundation-rtl.min.css" integrity="sha256-XlxeWxDsQfPdu4qiEAxQAng3/qnJhvZOZN/gZn0p71A= sha384-S/sFafRa3RAsKpyPwVCUZO8sjM+Sxh4qrVEC/XA9X0LXu7PduBaHpp3oWUyUq0qS sha512-T65eRA7TK5abF14H5Ovs6ov3lRSJkMEY7aI4B6nEtBA+kbtdhXwC2KO46kS4f68ysRXW5+Zu66054x369DRvYw==" crossorigin="anonymous">
    <title>PhotoShow</title>
</head>
<body>
    @include('inc.topbar')
    <br>

    <div class="row">
        @include('inc.messages')
        @yield('content')
    </div>

</body>
</html>
