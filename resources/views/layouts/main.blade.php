<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    @yield('style')

    {{-- script --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body dir="rtl" style="text-align: right">

    <div>
        @include('partials.navbar')
        <main class="py-4 mb-5 main">
            <div class="container">
                <div class="row flex">
                    {{-- @include('alerts.success') --}}
                    @include('partials.sidebar')
                    @yield('content')
                </div>
            </div>
        </main>
        @include('partials.footer')
    </div>

    <script>
        const sidebar = document.getElementById("sidebar");

        document.getElementById("toggleSidebar").onclick = () => {
            sidebar.classList.toggle("closed");
        };

        document.querySelectorAll(".menu-title").forEach(item => {

            item.addEventListener("click", function(e) {

                e.stopPropagation();

                this.parentElement.classList.toggle("open");

            });

        });
    </script>

    <script>
        function readCoverImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.querySelector('#cover-image-thumb').setAttribute('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                language: {
                // The UI will be Arabic.
                ui: 'ar',

                // the content will be edited in Arabic.
                content: 'ar'
                },

                toolbar: {
                    items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    '|',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'undo',
                    'redo',
                    '|',
                    'Blockquote'
                    ]
                }
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
    {{-- font awesome --}}
    {{-- <script src="https://kit.fontawesome.com/160daa7df6.js" crossorigin="anonymous"></script> --}}
    {{-- ckeditor --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script> --}}
    {{-- jquery cdn --}}
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script> --}}
    {{-- pusher --}}
    {{-- <script src="https://js.pusher.com/7.2/pusher.min.js"></script> --}}
    {{-- <script> --}}

    {{-- // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('a79f5c0103d5bba8e980', {
    cluster: 'mt1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
    alert(JSON.stringify(data));
    }); --}}
    {{-- </script> --}}
    {{-- alert --}}
    {{-- <script src="{!! asset('theme/js/sb-admin-2.min.js') !!}"></script> --}}
    {{-- notifications --}}
    {{-- <script type="module"> --}}
    {{-- @if (Auth::check())
        var post_userId = {{ Auth::user()->id }};
        Echo.private(`real-notification.${post_userId}`)
        .listen('CommentNotification', (data) => {
        var notificationsWrapper = $('.alert-dropdown');
        var notificationsToggle = notificationsWrapper.find('a[data-bs-toggle]');
        var notificationsCountElem = notificationsToggle.find('span[data-count]');
        var notificationsCount = parseInt(notificationsCountElem.text());
        var notifications = notificationsWrapper.find('div.alert-body');

        var existingNotifications = notifications.html();
        var
        newNotificationHtml = '<a class="dropdown-item d-flex align-items-center" href="#">\
                                                    <div class="ml-3">\
                                                        <div">\
                                                            <img style="float:right" src='+data.user_image+'
        width="50px" class="rounded-full"/>\
        </div>\
        </div>\
        <div>\
            <div class="small text-gray-500">'+data.date+'</div>\
            <span>'+data.user_name+' وضع تعليقًا على المنشور <b>'+data.post_title+'<b></span>\
        </div>\
        </a>';
        notifications.html(newNotificationHtml + existingNotifications);
        notificationsCount += 1;
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
        });
    @endif --}}
    {{-- </script> --}}

    @yield('script')
</body>

</html>
