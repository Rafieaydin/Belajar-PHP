
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="
                            {{auth()->user()->profile->getAvatar()}}
            " class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">{{Auth()->user()->profile->nama_lengkap}}</a>
            </div>
        </div>
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                {{-- <li class="nav-item">
                <a href="/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="{{url('/')}}" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                    Utama
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/profile')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profile Table</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/Pertanyaan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pertanyaan table</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('jawaban')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jawaban table</p>
                    </a>
                </li>
                </ul>
            </li> --}}

        <li class="nav-item">
                    <a href="{{url('/profile')}}" class="nav-link">
                    <i class="fa fa-user nav-icon"></i>
                    <p>Data User</p>
                </a>
        </li>
        <li class="nav-item">
                    <a href="{{url('/Pertanyaan')}}" class="nav-link">
                    <i class="fa fa-table nav-icon"></i>
                    <p>Data Pertanyaan</p>
                </a>
        </li>
        <li class="nav-item">
                    <a href="{{url('/jawaban')}}" class="nav-link">
                    <i class="fa fa-table nav-icon"></i>
                    <p>Data Jawaban</p>
                </a>
        </li>
        <li class="nav-item">
                    <a href="{{url('/forum')}}" class="nav-link">
                    <i class="fa fa-arrow-left nav-icon"></i>
                    <p>kembali ke forum</p>
                </a>
        </li>
</nav>
