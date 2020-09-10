<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('backends/assets/images/favicon/1.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('backends/assets/images/favicon/1.png')}}" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('backends/assets/css/fontawesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backends/assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backends/assets/css/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('backends/assets/css/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('backends/assets/css/themify-icons.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backends/assets/css/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backends/assets/css/color1.css')}}" media="screen" id="color">
    
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backends/new-style.css')}}">


    <style>
        .rating {
              float:left;
            }

            /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
              follow these rules. Every browser that supports :checked also supports :not(), so
              it doesn’t make the test unnecessarily selective */
            .rating:not(:checked) > input {
                position:absolute;
                top:-9999px;
                clip:rect(0,0,0,0);
            }

            .rating:not(:checked) > label {
                float:right;
                width:1em;
                /* padding:0 .1em; */
                overflow:hidden;
                white-space:nowrap;
                cursor:pointer;
                font-size:170%;
                /* line-height:1.2; */
                color:#ddd;
            }

            .rating:not(:checked) > label:before {
                content: '★ ';
            }

            .rating > input:checked ~ label {
                color: #FFD700;
                
            }

            .rating:not(:checked) > label:hover,
            .rating:not(:checked) > label:hover ~ label {
                color: #FFD700;
                
            }

            .rating > input:checked + label:hover,
            .rating > input:checked + label:hover ~ label,
            .rating > input:checked ~ label:hover,
            .rating > input:checked ~ label:hover ~ label,
            .rating > label:hover ~ input:checked ~ label {
                color: #FFD700;
                
            }

            .rating > label:active {
                position:relative;
                top:2px;
                left:2px;
            }
    </style>


</head>