<style>
    .main__title {
        font-size: 4rem
    }

    .main__paragraph {
        font-size: 1.8rem
    }

    .modal__img {
        max-width: 60%;
        height: auto;
        display: block;
    }

    #pop-up .modal {
        max-width: 700px;
        height: auto;
        width: 85%;
        position: fixed;
        top: 50%;
        background-color: rgba(0, 0, 0, 0.3);
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 5px;
        background: #EE9B00;
        display: none;
    }

    #pop-up .modal.show {
        display: block
    }

    #close {
        cursor: pointer;
        color: white;
        position: absolute;
        top: 0;
        font-size: 25px;
        right: 0;
        padding: 1rem;
        margin-right: 10px;
    }

    .modal__title {
        font-size: 2.5rem;
    }

    .modal__title span {
        display: block;
        font-weight: 400;
    }

    .modal__paragraph {
        font-size: 16px;
        font-weight: 400;
    }

    .modal__button {
        background-color: #0a9396;
        border: none;
        color: white;
        padding: 1rem 2rem;
        border-radius: 5px;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
        transition: 0.3s background-color ease-in-out;
    }

    .modal__button:hover {
        background-color: #0a9372;
    }

    .main {
        text-align: center;
    }

    .modal__container {
        padding: 1rem 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    @media only screen and (min-width: 768px) {
        .modal__container {
            flex-direction: row;
            padding: 2rem;
            text-align: left;
        }

        .modal__img {
            max-width: 50%
        }
    }

    @media only screen and (max-width: 500px) {
        .modal__title {
            font-size: 2rem;
        }

        .modal__img {
            max-width: 80%
        }
    }
</style>

{{-- @if (!Session::has('popup'))
    <div id="pop-up">
        <div class="modal" id="modal">
            <div class='modal__container'>
                <img class="modal__img" loading="lazy" src="{{ asset('website/assets/images/pop-up-book.webp') }}"
                    alt="best essay writing offer">
                <div class="modal__content">
                    <h1 class="modal__title">SPONSOR MY EDUCATION <span>START-UP CONTEST</span></h1>
                    <p class="modal__paragraph">This contest is geared towards discovering and funding innovative ideas.
                    </p>
                    <button class="modal__button">Click here to participate</button>
                </div>
                <i id="close" class="fas fa-times"></i>
            </div>
        </div>
    </div>
@endif --}}

{{ session()->put('popup', 'true') }}

@if (Session::has('success'))
    <div id="pop-up">
        <div class="modal" id="modal">
            <div class='modal__container'>
                <div class='checkmark modal__img'>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='checkmark__check' height='36' viewBox='0 0 48 36' width='48'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M47.248 3.9L43.906.667a2.428 2.428 0 0 0-3.344 0l-23.63 23.09-9.554-9.338a2.432 2.432 0 0 0-3.345 0L.692 17.654a2.236 2.236 0 0 0 .002 3.233l14.567 14.175c.926.894 2.42.894 3.342.01L47.248 7.128c.922-.89.922-2.34 0-3.23'>
                    </svg>
                    <svg class='checkmark__back' height='115' viewBox='0 0 120 115' width='120'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M107.332 72.938c-1.798 5.557 4.564 15.334 1.21 19.96-3.387 4.674-14.646 1.605-19.298 5.003-4.61 3.368-5.163 15.074-10.695 16.878-5.344 1.743-12.628-7.35-18.545-7.35-5.922 0-13.206 9.088-18.543 7.345-5.538-1.804-6.09-13.515-10.696-16.877-4.657-3.398-15.91-.334-19.297-5.002-3.356-4.627 3.006-14.404 1.208-19.962C10.93 67.576 0 63.442 0 57.5c0-5.943 10.93-10.076 12.668-15.438 1.798-5.557-4.564-15.334-1.21-19.96 3.387-4.674 14.646-1.605 19.298-5.003C35.366 13.73 35.92 2.025 41.45.22c5.344-1.743 12.628 7.35 18.545 7.35 5.922 0 13.206-9.088 18.543-7.345 5.538 1.804 6.09 13.515 10.696 16.877 4.657 3.398 15.91.334 19.297 5.002 3.356 4.627-3.006 14.404-1.208 19.962C109.07 47.424 120 51.562 120 57.5c0 5.943-10.93 10.076-12.668 15.438z'
                            fill='#00C8E5'>
                    </svg>
                </div>
                <div class="modal__content">
                    <h1 class="modal__title">SPONSOR MY EDUCATION <span>START-UP CONTEST</span></h1>
                    <p class="modal__paragraph">This contest is geared towards discovering and funding innovative ideas.
                    </p>
                    <button class="modal__button">Click here to participate</button>
                </div>
                <i id="close" class="fas fa-times"></i>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            const closeBtn = document.getElementById('close');
            const modalMenu = document.getElementById('modal');
            const modalBtn = document.querySelector('.modal__button');

            setTimeout(() => {
                modalMenu.classList.add('show');
            }, 3000);

            closeBtn.addEventListener('click', () => {
                modalMenu.classList.remove('show')
            });
            modalBtn.addEventListener('click', () => {
                modalMenu.classList.remove('show')
            });
        </script>
    @endpush
@endif

@if (Session::has('error'))
    <div id="pop-up">
        <div class="modal" id="modal">
            <div class='modal__container'>
                <div class='checkmark'>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='confetti' height='19' viewBox='0 0 19 19' width='19'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z'
                            fill='#00C8E5'>
                    </svg>
                    <svg class='checkmark__check' height='36' viewBox='0 0 48 36' width='48'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d="M32.283 33.411a2.7 2.7 0 0 1 -3.818 0L22.5 26.593l-5.964 6.815a2.7 2.7 0 1 1 -3.818 -3.818l6.205 -7.088 -6.207 -7.092a2.7 2.7 0 1 1 3.818 -3.818L22.5 18.411l5.964 -6.82a2.7 2.7 0 1 1 3.818 3.818l-6.205 7.092 6.205 7.088a2.7 2.7 0 0 1 0 3.821z" />
                    </svg>
                    <svg class='checkmark__back' height='115' viewBox='0 0 120 115' width='120'
                        xmlns='http://www.w3.org/2000/svg'>
                        <path
                            d='M107.332 72.938c-1.798 5.557 4.564 15.334 1.21 19.96-3.387 4.674-14.646 1.605-19.298 5.003-4.61 3.368-5.163 15.074-10.695 16.878-5.344 1.743-12.628-7.35-18.545-7.35-5.922 0-13.206 9.088-18.543 7.345-5.538-1.804-6.09-13.515-10.696-16.877-4.657-3.398-15.91-.334-19.297-5.002-3.356-4.627 3.006-14.404 1.208-19.962C10.93 67.576 0 63.442 0 57.5c0-5.943 10.93-10.076 12.668-15.438 1.798-5.557-4.564-15.334-1.21-19.96 3.387-4.674 14.646-1.605 19.298-5.003C35.366 13.73 35.92 2.025 41.45.22c5.344-1.743 12.628 7.35 18.545 7.35 5.922 0 13.206-9.088 18.543-7.345 5.538 1.804 6.09 13.515 10.696 16.877 4.657 3.398 15.91.334 19.297 5.002 3.356 4.627-3.006 14.404-1.208 19.962C109.07 47.424 120 51.562 120 57.5c0 5.943-10.93 10.076-12.668 15.438z'
                            fill='#00C8E5'>
                    </svg>
                </div>
                <div class="modal__content">
                    <h1 class="modal__title">SPONSOR MY EDUCATION <span>START-UP CONTEST</span></h1>
                    <p class="modal__paragraph">This contest is geared towards discovering and funding innovative
                        ideas.</p>
                    <button class="modal__button">Click here to participate</button>
                </div>
                <i id="close" class="fas fa-times"></i>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            const closeBtn = document.getElementById('close');
            const modalMenu = document.getElementById('modal');
            const modalBtn = document.querySelector('.modal__button');

            setTimeout(() => {
                modalMenu.classList.add('show');
            }, 3000);

            closeBtn.addEventListener('click', () => {
                modalMenu.classList.remove('show')
            });
            modalBtn.addEventListener('click', () => {
                modalMenu.classList.remove('show')
            });
        </script>
    @endpush
@endif
