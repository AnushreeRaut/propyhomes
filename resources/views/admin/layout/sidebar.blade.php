<!-- Nav Item - Dashboard -->
<li class="nav-item">
        <a class="nav-link ds1col1SB w-100" href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/frontend/img/Dashboard.svg') }}" alt="">
            <span style="font-weight: 600;color: white;">Dashboard</span>
        </a>
</li>

<!-- Nav Item - Subscriptions -->
<li class="nav-item">
    @can('view_phone')
        <a class="nav-link ds1col1SB w-100" href="{{ route('subscriptions.index') }}">
            <img src="{{ asset('assets/frontend/img/DashboardReference.svg') }}" alt="">
            <span style="font-weight: 600;color: white;">Subscriptions</span>
        </a>
    @endcan
</li>

<!-- Nav Item - Speed Dials -->
<li class="nav-item">
    @can('view_phone')
        <a class="nav-link ds1col1SB w-100" href="{{ route('phone_requests.index') }}">
            <img src="{{ asset('assets/frontend/img/DashboardCustomer.svg') }}" alt="">
            <span style="font-weight: 600;color: white;">Callback Requests</span>
        </a>
    @endcan
</li>

<!-- Nav Item - Project Collapse Menu -->
<li class="nav-item">
    @can('view_projects')
        <a class="nav-link collapsed ds1col1SB w-100" href="#" data-toggle="collapse" data-target="#collapseProject" aria-expanded="true" aria-controls="collapseProject">
            <img src="{{ asset('assets/frontend/img/DashboardReference.svg') }}" alt="">
            <span style="font-weight: 600;color: white;">Project Management</span>
        </a>
        <div id="collapseProject" class="collapse ds1col1bgc" aria-labelledby="headingProject" data-parent="#accordionSidebar">
            {{-- <div class="textcolr2 py-2 collapse-inner rounded">
                <a class="collapse-item text-white" href="{{ route('projects.index') }}">Projects</a>
                <a class="collapse-item text-white" href="{{ route('projects.create') }}">Add Project</a>
            </div> --}}
            <div class="textcolr2 py-2 collapse-inner rounded">
                <a class="collapse-item text-white" href="{{ route('properties.index') }}">Property</a>
                <a class="collapse-item text-white" href="{{ route('properties.create') }}">Add Project</a>
            </div>
        </div>
    @endcan
</li>

<!-- Nav Item - Employee Collapse Menu -->
<li class="nav-item">
    @can('view_employee')
        <a class="nav-link collapsed ds1col1SB w-100" href="#" data-toggle="collapse" data-target="#collapseEmployee" aria-expanded="true" aria-controls="collapseEmployee">
            <img src="{{ asset('assets/frontend/img/dashbordEmployee.svg') }}" alt="">
            <span style="font-weight: 600;color: white;">Employee Management</span>
        </a>
        <div id="collapseEmployee" class="collapse ds1col1bgc" aria-labelledby="headingEmployee" data-parent="#accordionSidebar">
            <div class="textcolr2 py-2 collapse-inner rounded">
                <a class="collapse-item text-white" href="{{ route('employees.index') }}">Employee</a>
                <a class="collapse-item text-white" href="{{ route('employees.create') }}">Add Employee</a>
            </div>
        </div>
    @endcan
</li>

<!-- Nav Item - Customer Collapse Menu -->
<li class="nav-item">
    @can('view_customer')
        <a class="nav-link collapsed ds1col1SB w-100" href="#" data-toggle="collapse" data-target="#collapseCustomer" aria-expanded="true" aria-controls="collapseCustomer">
            <img src="{{ asset('assets/frontend/img/DashboardCustomer.svg') }}" alt="">
            <span style="font-weight: 600;color: white;">Customer Management</span>
        </a>
        <div id="collapseCustomer" class="collapse ds1col1bgc" aria-labelledby="headingCustomer" data-parent="#accordionSidebar">
            <div class="textcolr2 py-2 collapse-inner rounded">
                <a class="collapse-item text-white" href="{{ route('customers.index') }}">Customers</a>
                <a class="collapse-item text-white" href="{{ route('customers.create') }}">Add Customer</a>
            </div>
        </div>
    @endcan
</li>

<!-- Nav Item - Reference Collapse Menu -->
<li class="nav-item">
        <a class="nav-link collapsed ds1col1SB w-100" href="#" data-toggle="collapse" data-target="#collapseReference" aria-expanded="true" aria-controls="collapseReference">
            <img src="{{ asset('assets/frontend/img/DashboardReference.svg') }}" alt="">
            <span style="font-weight: 600;color: white;">Reference</span>
        </a>
        <div id="collapseReference" class="collapse ds1col1bgc" aria-labelledby="headingReference" data-parent="#accordionSidebar">
            <div class="textcolr2 py-2 collapse-inner rounded">
                <a class="collapse-item text-white" href="{{ route('references.index') }}">References</a>
                <a class="collapse-item text-white" href="{{ route('references.create') }}">Add Reference</a>
            </div>
        </div>
</li>

<!-- Divider -->

<!-- Nav Item - Reference Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed ds1col1SB w-100" href="#" data-toggle="collapse" data-target="#collapseArea" aria-expanded="true" aria-controls="collapseArea">
        <img src="{{ asset('assets/frontend/img/DashboardReference.svg') }}" alt="">
        <span style="font-weight: 600;color: white;">Masters</span>
    </a>
    <div id="collapseArea" class="collapse ds1col1bgc" aria-labelledby="headingReference" data-parent="#accordionSidebar">
        <div class="textcolr2 py-2 collapse-inner rounded">
            <a class="collapse-item text-white" href="{{ route('areas.index') }}">Area</a>
            <a class="collapse-item text-white" href="{{ route('landmarks.index') }}">Landmark</a>
        </div>
    </div>
</li>
