<nav class="navbar navbar-expand-lg">
    <div class="container my-3">
        <a class="navbar-brand" href="index.html">
            Tempo Ticket
        </a>

        <a href="{{ route('login') }}" class="btn custom-btn d-lg-none ms-auto me-4 px-4">Login</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-flex justify-content-center mx-auto">
                <ul class="navbar-nav align-items-lg-center border border-light rounded-2">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">Lives</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Artists</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Contact</a>
                    </li>

                </ul>
            </div>

            <a href="{{ route('login') }}" class="btn custom-btn d-lg-block d-none px-4">Login</a>
        </div>
    </div>
</nav>
