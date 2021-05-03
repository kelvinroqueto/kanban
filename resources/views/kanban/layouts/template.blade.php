<? header('Content-Type: text/html; charset=utf8'); ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt_BR">
    <head>
        <title>KANBAN</title>
        <meta charset="utf-8">
        <meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT" />
        <meta http-equiv="Last-Modified" content="<?= gmdate('D, d M Y H:i:s') . ' GMT'; ?>" />
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Cache" content="no-cache" />
        <meta http-equiv="imagetoolbar" content="no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="rating" content="general" />
        <meta name="author" content="Sandro Alves Peres" />
        <meta name="title" content="KANBAN" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="googlebot" content="noindex,nofollow" />

        <!-- Mobile device meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=4" />
        <meta name="x-blackberry-defaultHoverEffect" content="false" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="240" />

        <!-- css -->
        <link rel="shortcut icon" href="{{ asset("assets/imagens/trello-desktop.jpg") }}" type="image/jpg" />
        <link rel="apple-touch-icon" href="{{ asset("assets/imagens/trello-desktop.jpg") }}" type="image/jpg" />
        <link rel="stylesheet" href="{{ asset("assets/bootstrap-3.3.7/css/bootstrap.min.css") }}" />
        <link rel="stylesheet" href="{{ asset("css/kanban.css") }}" />

        <!-- fontawesome -->
        <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type="image/jpg" />

        <!-- js -->
        <script src="{{ asset("js/jquery-1.11.2.min.js") }}"></script>
        <script src="{{ asset("assets/bootstrap-3.3.7/js/bootstrap.min.js") }}"></script>

        <!-- selectpicker -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

        <!-- bootbox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>





        <script type="text/javascript">
            $(function()
            {
                $('[data-toggle="tooltip"]').tooltip();
            });

        </script>
    </head>

    <? flush(); ?>

    <body>

@yield('content')
    </body>
    </html>
