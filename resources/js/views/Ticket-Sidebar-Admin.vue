<template>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">DAMS Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <!-- <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a> -->
            
            <router-link to="/admin/dashboard" class="nav-link" exact>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </router-link>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Events
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <router-link to="/admin/add/event" class="nav-link" exact>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Manage Event</span>
            </router-link>
        </li>

        <!-- Nav Item - PHOTO Collapse Menu -->
        <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePhoto"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Photo</span>
            </a>
            <div id="collapsePhoto" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <router-link to="/admin/photo/add" class="collapse-item" exact>
                        <span class="imp-nav-item">Add New Photo</span>
                    </router-link>
                    <router-link to="/admin/photo/manage" class="collapse-item" exact>
                        <span class="imp-nav-item">Manage list</span>
                    </router-link>
                </div>
            </div>
        </li> -->

        <!-- Nav Item - VIDEO Collapse Menu -->
        <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVideo"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Videos</span>
            </a>
            <div id="collapseVideo" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="cards.html">Add New Video</a>
                    <a class="collapse-item" href="buttons.html">Manage list</a>
                </div>
            </div>
        </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - VIDEO Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Category</span>
            </a>
            <div id="collapseCategories" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="cards.html">Add New Category</a>
                    <a class="collapse-item" href="buttons.html">Manage list</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        

    </ul>
</template>