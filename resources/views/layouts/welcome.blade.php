
<html>
    <head>
        <title>PLANT COMMUNITY</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/master.css" rel="stylesheet">
        <link href="./css/index.css" rel="stylesheet">
       


        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        @section("head_aggiuntivi")
        @show()
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noticia+Text&display=swap" rel="stylesheet">
    </head>
    <body>
        <section>
            <div>
                <a href="./">
                 <img src="./image/logo2.png" id="logo">

                </a>
            </div>

            <div class="login_container">
                <form id="mainform" method="post">
                    @csrf
                    <div class="form_row">
                        <label for="username_textbox">Username</label>
                        <input id="username" name="username" type="text">
                    </div>
                    <div class="form_row">
                        <label for="password_textbox">Password</label>
                        <input id="pwd" name="pwd" type="password">
                    </div>
                    @section("content_form")
                    @show()
                    
                    
                    
                </form>
                
            </div>
        </section>
    </body>
</html>