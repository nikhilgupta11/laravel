<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <br />
            <a href="{{ route('userview') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>User</a>
            <br />
            <a href="{{ route('pageview') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Pages</a>
            <br />
            <a href="{{ route('enquiry') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Enquaries</a>
            <br />
            <a href="{{ route('faqlist') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>FAQ's</a>
            <br />
            <a href="{{ route('bannerlist') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Banners</a>
            <br />
            <a href="{{ route('industryview') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Industries</a>
            <br />
            <a href="{{ route('technologyview') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Technologies</a>
            <br />
            <a href="{{ route('frameworkview') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Frameworks</a>
        </div>
    </nav>
</div>