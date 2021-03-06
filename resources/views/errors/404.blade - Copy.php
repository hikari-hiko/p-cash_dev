<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P-Cash | 404 Page Not Found</title>
    <style>
        html {
            box-sizing: border-box
        }
        
        *,
        *:before,
        *:after {
            box-sizing: inherit;
            margin: 0;
            padding: 0;
        }
        body
        {
            font-family: "Open Sans", sans-serif;
            background-color: #00BCD4;
            color: #fff;
            text-align: center;
            padding: 2em;
        }
        h1
        {
            margin: 0.5em auto;
            background: #fff;
            color: #00BCD4;
            width: fit-content;
            padding: 0.5em 1.5em;
            border-radius: 2em;
        }
        a{
            color: inherit;
        }
        main
        {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            height: 400px;
            padding-top: 3em;
        }
        button,
        button:hover,
        button:focus,
        button:active{
            margin: auto;
            background: transparent;
            outline: none;
            border: none;
            color: inherit;
            padding: 1em 2em;
            font-size: 1em;
            border-radius: 2em;
            width: fit-content;
            font-weight: 600;
            border: 2px solid #fafafa;
        }
        
        button:hover
        {
            background-color: #fafafa;
            cursor: pointer;
            color: #00BCD4;
        }
        

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="{{ asset('') }}">
                    <svg id="logo" style="enable-background:new 0 0 600 175;
                    height: 56px" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 600 175" version="1.1" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <style type="text/css">
                            .st0{fill:currentColor;}
                        </style>
                                    <path class="st0" d="m129.6 66.7h-10.1v20.6h10.2c3.8 0 6.8-0.9 9-2.7s3.3-4.3 3.3-7.4v-0.2c0-3.3-1.1-5.9-3.3-7.6-2.1-1.8-5.2-2.7-9.1-2.7z"/>
                                    <path class="st0" d="m123.9 0c-48.4 0-87.5 39.2-87.5 87.5s39.1 87.5 87.5 87.5 87.5-39.2 87.5-87.5-39.2-87.5-87.5-87.5zm39.5 76.2c0 4.6-0.8 8.6-2.5 12-1.7 3.5-4 6.4-6.9 8.7-2.9 2.4-6.5 4.1-10.6 5.3s-8.5 1.8-13.3 1.8h-10.6v22.1h-21.4v-77.3h33.2c4.9 0 9.3 0.6 13.3 1.8s7.4 3 10.2 5.3 5 5.2 6.5 8.6 2.3 7.2 2.3 11.5v0.2z"/>
                                <path class="st0" d="m244.6 88.2v-0.2c0-21.9 16.4-40 38.7-40 13.8 0 22.1 5.1 30.1 12.4l-4.1 4.2c-6.7-6.5-14.5-11.4-26.1-11.4-18.6 0-32.6 15.1-32.6 34.6v0.2c0 19.6 14.3 34.8 32.7 34.8 11.2 0 18.8-4.3 26.6-12.1l3.9 3.8c-8.2 8.1-17 13.5-30.7 13.5-22.1 0-38.5-17.6-38.5-39.8z"/>
                                <path class="st0" d="m364.6 48.7h5.5l36 77.9h-6.3l-9.8-21.6h-45.7l-9.8 21.7h-6l36.1-78zm23 51.1l-20.4-44.8-20.4 44.8h40.8z"/>
                                <path class="st0" d="m421.4 115.4l3.8-4.3c8.5 7.8 16.4 11.5 27.7 11.5 11.6 0 19.6-6.5 19.6-15.4v-0.2c0-8.2-4.3-12.9-21.9-16.5-18.6-3.8-26.1-10.1-26.1-21.8v-0.2c0-11.5 10.5-20.3 24.9-20.3 11.3 0 18.7 3.1 26.5 9.4l-3.6 4.5c-7.3-6.3-14.6-8.7-23.1-8.7-11.4 0-18.9 6.5-18.9 14.6v0.2c0 8.2 4.2 13.2 22.5 16.9 17.9 3.6 25.4 10.1 25.4 21.3v0.2c0 12.5-10.7 21.1-25.6 21.1-12.4 0-21.9-4-31.2-12.3z"/>
                                <path class="st0" d="m502.6 49.3h5.7v35.8h49.5v-35.8h5.7v77.4h-5.7v-36.3h-49.5v36.3h-5.7v-77.4z"/>
                        </svg>                                
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div>
            <h1>
                Whoops! Sorry
            </h1>
            <h3>
                We are currently building up this site
            </h3>
        </div>
        <button onclick="document.location.href = '{{ url('/') }}'">Back to Home</button>
    </main>
    <footer>
        <div class="footer-copyright">
            &copy;2018 P-Cash Corporation - All Right Reserved
        </div>
    </footer>
</body>
</html>