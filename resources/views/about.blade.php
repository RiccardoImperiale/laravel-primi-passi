<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #171923;
            color: white;
            font-size: 1.25rem;
            font-family: sans-serif;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .container {
            width: 80%;
            max-width: 1080px;
            margin: auto;
        }

        header {
            background-color: #12141C;
            padding: 1rem 0;

            & nav {
                display: flex;
                justify-content: space-between;
                align-items: center;

                & ul {
                    list-style: none;
                    display: flex;
                    gap: 1rem;
                }

                .logo {
                    font-size: 2rem;
                    font-weight: bold;
                    color: #FF2D20;
                }
            }
        }

        section {
            padding-top: 5rem;
        }
    </style>
</head>

<body>
    <header>
        <nav class="container">
            <div class="logo">Laravel</div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
    </header>
    <section class="container">
        <h1>{{$heading}}</h1>
        <p>{{$message}}</p>
    </section>
</body>

</html>