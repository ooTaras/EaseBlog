
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>
    <link href="{{asset('css/text.css')}}" rel="stylesheet" type="text/css">
    @yield('edit_style')
</head>
<body>
    <div class="conteiner">
        <div class="sub_conteiner1">
            <div class="conteiner_name"><p class="article article_first" >Blog</p></div>
        </div>
        <div class="sub_conteiner2">
            <div class="conteinet_mini">
                <div class="conteiner_main"><a class="article article_second" href="/">MainPage</a></div>
                <div class="conteiner_edit"><a class="article_edit" href="/add_text">Edit</a></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="body">
           @yield('main_page')
        <div class="wraper">
           @yield('main_content')
        </div>
    </div>

</body>
</html>