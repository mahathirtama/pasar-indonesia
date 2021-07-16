<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3"><img src="/img/pasia.jpeg" style="width: 50px;"> <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-search-location"></i>
            <span>Pasar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilih Pasar:</h6>
                <a class="collapse-item" href="/Pasar/pal">Pasar Pal</a>
                <a class="collapse-item" href="/Pasar/minggu">Pasar Minggu</a>
                <a class="collapse-item" href="/Pasar/cisalak">Pasar Cisalak</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-shopping-basket"></i>
            <span>Jenis</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilih Jenis:</h6>
                <a class="collapse-item" href="/sayur">Sayur</a>
                <a class="collapse-item" href="/daging">Daging</a>
                <a class="collapse-item" href="/buah">Buah</a>
            </div>
        </div>
    </li>

    <?php if (in_groups('Pedagang')) : ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#adminManage" aria-expanded="true" aria-controls="adminManage">
                <i class="fas fa-shopping-basket"></i>
                <span>List Orderan</span>
            </a>
            <div id="adminManage" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Orderan:</h6>
                    <a class="collapse-item" href="/pedagang/listorder">Lihat server Orderan</a>
                    <a class="collapse-item" href="/pedagang/catatan">Catatan Orderan</a>
                </div>
            </div>
        </li>
    <?php endif; ?>

    <?php if (in_groups('admin')) : ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#adminManage" aria-expanded="true" aria-controls="adminManage">
                <i class="fas fa-shopping-basket"></i>
                <span>Admin Tambah Item</span>
            </a>
            <div id="adminManage" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Admin Manage:</h6>
                    <a class="collapse-item" href="/admin/createSayur">Create Sayur</a>
                    <a class="collapse-item" href="/admin/createDaging">Create Daging</a>
                    <a class="collapse-item" href="/admin/createBuah">Create Buah</a>
                </div>
            </div>
        </li>
    <?php endif; ?>
    <?php if (in_groups('admin')) : ?>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#adminShow" aria-expanded="true" aria-controls="adminShow">
                <i class="fas fa-shopping-basket"></i>
                <span>Admin Item</span>
            </a>
            <div id="adminShow" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Admin Manage:</h6>
                    <a class="collapse-item" href="/admin/sayur">Sayur</a>
                    <a class="collapse-item" href="/admin/daging">Daging</a>
                    <a class="collapse-item" href="/admin/buah">Buah</a>
                </div>
            </div>
        </li>
    <?php endif; ?>

    <?php if (in_groups('admin')) : ?>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#catatan" aria-expanded="true" aria-controls="catatan">
                <i class="fas fa-shopping-basket"></i>
                <span>Catatan</span>
            </a>
            <div id="catatan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Catatan</h6>
                    <a class="collapse-item" href="/catatan/admin">Catatan Pembelian</a>
                </div>
            </div>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-user-circle"></i>
            <span>Profile</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">MY PROFILE</h6>
                <a class="collapse-item" href="/profile">Lihat Profile</a>
                <a class="collapse-item" href="/alamat">Tambah alamat</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
</ul>