<div class="dlabnav">
    <div class="dlabnav-scroll">
        <div class="dropdown header-profile2 ">
            <a class="nav-link " href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                <div class="header-info2 d-flex align-items-center">

                    @php
                    $authdataimg = auth()->user()->profile_img;
                    @endphp
                    <img src="{{ asset('images/' . $authdataimg) }}" alt="" / style="margin-left: 15px;">

                    <div class="d-flex align-items-center sidebar-info">
                        <div>
                            <span class="font-w400 d-block">Admin </span>
                            <!-- <small class="text-end font-w400">Superadmin</small> -->
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </a>

            <div class="dropdown-menu dropdown-menu-end">
                <a href="{{route('profile.edit')}}" class="dropdown-item ai-icon ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="ms-2">Profile </span>
                </a>
                <!-- <a href="./email-inbox.html" class="dropdown-item ai-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <span class="ms-2">Inbox </span>
                </a> -->

                <a href="{{route('logout')}}" class="dropdown-item ai-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span class="ms-2">Logout </span>
                </a>
            </div>
        </div>`
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="{{route('admin.dashboard')}}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li><a class="has-arrow " href="{{route('user.index')}}" aria-expanded="false">
                    <i class="fa-solid fa-users"></i>
                    <span class="nav-text ">Users</span>
                </a>
            </li>

            <li><a class="has-arrow " href="{{route('blogs.index')}}" aria-expanded="false">
                    <i class="fa-brands fa-microblog"></i>
                    <span class="nav-text ">Blogs</span>
                </a>
            </li>

            <li>
                <a class="has-arrow " href="{{route('coment.index')}}" aria-expanded="false">
                    <i class="fa-solid fa-comments"></i>
                    <span class="nav-text ">Comments</span>
                </a>
            </li>

            <li><a class="has-arrow " href="#" aria-expanded="false">
                    <i class="fa-solid fa-list-check"></i>
                    <span class="nav-text ">Management</span>
                </a>
                <ul>
                    <li><a href="{{route('Manage_homepage.show')}}">Manage Home Page</a></li>
                    <li><a href="{{route('Manage_contact.show')}}">Manage Contact Page</a></li>
                    <li><a href="{{route('manage_about.show')}}">Manage About</a></li>
                    <li><a href="{{route('faq.index')}}">Manage FAQ</a></li>
                    <li><a href="{{route('testimonials.index')}}">Manage Testimonials</a></li>
                    <li><a href="{{route('services.index')}}">Manage Services</a></li>
                    <li><a href="{{route('specialists.index')}}">Manage Specialists</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="{{route('appointments.index')}}" aria-expanded="false">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="nav-text ">Appointments</span>
                </a>
            </li>

            <li><a class="has-arrow " href="{{route('contact.index')}}" aria-expanded="false">
                    <i class="fa-solid fa-address-book"></i>
                    <span class="nav-text ">Contact Enquirys</span>
                </a>
            </li>

            <li><a class="has-arrow " href="{{route('settings.show')}}" aria-expanded="false">
                    <i class="fa-solid fa-gear"></i>
                    <span class="nav-text ">Site Settings</span>
                </a>
            </li>
        </ul>

    </div>
</div>