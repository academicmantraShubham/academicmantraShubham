@push('css')
    <style>
        .div-avatar img {
            width: 120px;
        }

        .hero {
            display: flex;
            max-width: 1440px;
            gap: 2em;
            justify-content: space-between;
            margin: 7em 2em;
        }

        .text {
            width: 40%;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-family: sans-serif;
        }

        .text__short {
            text-transform: uppercase;
            font-size: 0.75rem;
            color: #479A7E;
        }

        .text__button {
            max-width: 120px;
            text-align: center;
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #479A7E;
            padding: 10px;
            border-radius: 0.5em;
        }

        .grid__container {
            min-width: 60%;
            display: grid;
            grid-gap: .5em;
            grid-template-columns: repeat(8, 1fr);
        }

        .grid__item {
            background-color: grey;
            border-radius: 0.5em;
        }

        .one {
            grid-column: 1 / 2;
            grid-row: 2 / 3;
            background-image: url(//unsplash.it/400/400);
            background-position: center;
            background-size: cover;
        }

        .two {
            grid-column: 2 / 5;
            grid-row: 1 / 4;
            background-image: url(//unsplash.it/900/900);
            background-position: center;
            background-size: cover;
        }

        .three {
            grid-column: 5 / 6;
            grid-row: 1 / 2;
            background-image: url(//unsplash.it/500/400);
            background-position: center;
            background-size: cover;
        }

        .four {
            grid-column: 6 / 7;
            grid-row: 1 / 2;
            background-color: #FDF5DD;
            border-radius: 0 0 100px 0;
            -moz-border-radius: 0 0 100px 0;
            -webkit-border-radius: 0 0 100px 0;
        }


        .five {
            grid-column: 5 / 7;
            grid-row: 2 / 4;
            background-image: url(//unsplash.it/400/500);
            background-position: center;
            background-size: cover;
        }

        .six {
            grid-column: 7 / 8;
            grid-row: 2 / 3;
            background-color: #D3F0EE;
            border-radius: 0 100px 0 0;
            -moz-border-radius: 0 100px 0 0;
            -webkit-border-radius: 0 100px 0 0;
        }

        .seven {
            grid-column: 7 / 8;
            grid-row: 3 / 4;
            background-image: url(//unsplash.it/500/500);
            background-position: center;
            background-size: cover;
        }

        .eight {
            grid-column: 8 / 9;
            grid-row: 3 / 4;
            border-radius: 50%;
            background-color: #CED7ED;
        }

        .nine {
            grid-column: 1 / 2;
            grid-row: 4 / 5;
            background-color: #FADEE0;
            border-radius: 100px 0 0 0;
            -moz-border-radius: 100px 0 0 0;
            -webkit-border-radius: 100px 0 0 0;
        }

        .ten {
            grid-column: 2 / 3;
            grid-row: 4 / 5;
            background-image: url(//unsplash.it/300/300);
            background-position: center;
            background-size: cover;
        }

        .eleven {
            grid-column: 3 / 5;
            grid-row: 4 / 6;
            background-image: url(//unsplash.it/700/700);
            background-position: center;
            background-size: cover;
        }

        .twelve {
            grid-column: 5 / 6;
            grid-row: 4 / 5;
            background-image: url(//unsplash.it/300/500);
            background-position: center;
            background-size: cover;
        }

        .col-offer-img {
            position: sticky;
            top: 0;
        }

        @media (max-width: 900px) {
            .grid__container {
                min-width: 50%;
                height: 400px;
                margin-top: 50px;
            }

            .hero {
                margin: 5em 2em;
            }
        }

        @media (max-width: 780px) {
            .hero {
                flex-direction: column-reverse;
                /*margin: 2em 2em;*/
            }

            .text {
                width: 100%;
            }
        }
    </style>
@endpush

<!--Bannner-->
<div class="hero">
    <div class="text">
        <p class="text__short">Best Essay Writing Services</p>
        {!! $post->title !!}
        {!! $post->page_text !!}
        <a class="text__button"href="{{ route('order') }}">Order Now</a>
    </div>

    <div class="grid__container">
        <div class="grid__item one"></div>
        <div class="grid__item two"></div>
        <div class="grid__item three"></div>
        <div class="grid__item four"></div>
        <div class="grid__item five"></div>
        <div class="grid__item six"></div>
        <div class="grid__item seven"></div>
        <div class="grid__item eight"></div>
        <div class="grid__item nine"></div>
        <div class="grid__item ten"></div>
        <div class="grid__item eleven"></div>
        <div class="grid__item twelve"></div>
    </div>
</div>
<!--End Banner-->
