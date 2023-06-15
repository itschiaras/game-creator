<header>
    <div class="container-fluid border border-bottom-dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">GameCreatorAdmin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('admin.characters.index') }}">Characters</a>
                        </li>
                        <li>
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('admin.types.index') }}">Types</a>
                        </li>
                        <li>
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('admin.items.index') }}">Items</a>
                        </li>
                </div>
            </div>
        </nav>
</header>
</div>
