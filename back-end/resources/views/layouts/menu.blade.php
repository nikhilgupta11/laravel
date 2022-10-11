<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    <br />
    <a href="{{ route('userview') }}" class="nav-link active">
        <i class="nav-icon fas fa-user"></i>
        <p>User</p>
    </a>
    <br />
    <a href="{{ route('pageview') }}" class="nav-link active">
        <i class="nav-icon fas fa-file"></i>
        <p>Pages</p>
    </a>
    <br />
    <a href="{{ route('enquiry') }}" class="nav-link active">
        <i class="nav-icon fas fa-question-circle"></i>
        <p>Enquiries</p>
    </a>
    <br />
    <a href="{{ route('home') }}" class="nav-link active">
        <i class="nav-icon fas fa-envelope"></i>
        <p>Email Tamplates</p>
    </a>
    <br />
    <a href="{{ route('faqlist') }}" class="nav-link active">
        <i class="nav-icon fas fa-question-circle"></i>
        <p>FAQs</p>
    </a>
    <br />
    <a href="{{ route('bannerlist') }}" class="nav-link active">
        <i class="nav-icon fas fa-picture-o"></i>
        <p>Banner's</p>
    </a>
    <br />
    <div class="dropdown show">
        <a href="#" class="nav-link active dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="nav-icon fas fa-cog"></i>
            <p>Setting</p>
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Logo and Favicon</a>
            <a class="dropdown-item" href="#">Company Address</a>
            <a class="dropdown-item" href="#">Copyright Text</a>
        </div>
    </div>
</li>