<ul class="nav nav-tabs nav-stacked main-menu">
    @if(Auth::check())
        <li><a href="{{ URL::to('dashboard') }}" class="submenu {{ sa('dashboard') }}" ><i class="icon-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ URL::to('calendar') }}" class="submenu {{ sa('calendar') }}" ><i class="icon-dashboard"></i> Calendar</a></li>
        <li>
            <a class="dropmenu" href="#">
                <i class="icon-money"></i> Building<span class="label"><b class="icon-caret-down"></b></span>
            </a>
            <ul>
                <li><a href="{{ URL::to('unit') }}" class="submenu {{ sa('unit') }}" ><i class="icon-external-link" ></i> Units</a></li>
                <li><a class="submenu {{ sa('unitcategory')}}" href="{{ URL::to('unitcategory') }}" ><i class="icon-sitemap"></i> Unit Category</a></li>
                <li><a href="{{ URL::to('tenant') }}" class="submenu {{ sa('tenant') }}" ><i class="icon-external-link" ></i> Tenants</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bullhorn"></i> Office
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('document') }}" class="submenu {{ sa('document') }}" ><i class="icon-copy"></i> Documents</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bullhorn"></i> Human Resource
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('hr') }}" class="submenu {{ sa('hr') }}" ><i class="icon-copy"></i> Personnel</a></li>
                <li><a href="{{ URL::to('attendance') }}" class="submenu {{ sa('attendance') }}" ><i class="icon-copy"></i> Attendance</a></li>
                <li><a href="{{ URL::to('payroll') }}" class="submenu {{ sa('payroll') }}" ><i class="icon-copy"></i> Payroll</a></li>
                <li><a href="{{ URL::to('outsource') }}" class="submenu {{ sa('outsource') }}" ><i class="icon-copy"></i> Outsources</a></li>            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bullhorn"></i> Finance
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('expenses') }}" class="submenu {{ sa('expenses') }}" ><i class="icon-money"></i> Expenses</a></li>
                <li><a href="{{ URL::to('billings') }}" class="submenu {{ sa('billings') }}" ><i class="icon-money"></i> Bills to Pay</a></li>
                <li><a href="{{ URL::to('invoices') }}" class="submenu {{ sa('invoices') }}" ><i class="icon-money"></i> Invoices</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bullhorn"></i> Tenant Relation
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('complaint') }}" class="submenu {{ sa('complaint') }}" ><i class="icon-question-sign"></i> Complaint</a></li>
                <li><a href="{{ URL::to('event') }}" class="submenu {{ sa('event') }}" ><i class="icon-lightbulb"></i> Events</a></li>
                <li><a href="{{ URL::to('buyer') }}" class="submenu {{ sa('buyer') }}" ><i class="icon-group"></i> Buyers</a></li>
                <li><a href="{{ URL::to('contactgroup') }}" class="submenu {{ sa('contactgroup') }}" ><i class="icon-folder-close"></i> Contact Groups</a></li>
                <li><a href="{{ URL::to('enquiry') }}" class="submenu {{ sa('enquiry') }}" ><i class="icon-question-sign"></i> Enquiries</a></li>
                <li><a href="{{ URL::to('campaign') }}" class="submenu {{ sa('campaign') }}" ><i class="icon-bullhorn"></i> Campaign</a></li>

            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-file"></i> Templates
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('newsletter') }}" class="submenu {{ sa('newsletter') }}" ><i class="icon-file-alt"></i> Newsletter</a></li>
                <li><a href="{{ URL::to('brochure') }}" class="submenu {{ sa('brochure') }}" ><i class="icon-file-alt"></i> Brochure</a></li>
                <li><a href="{{ URL::to('templates') }}" class="submenu {{ sa('templates') }}" ><i class="icon-file-alt"></i> Other Templates</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bar-chart"></i> Reports
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('report/siteaccess') }}" class="submenu {{ sa('report/siteaccess') }}" ><i class="icon-globe"></i> Site Access</a></li>
                <li><a href="{{ URL::to('report/activity') }}" class="submenu {{ sa('report/activity') }}" ><i class="icon-refresh"></i> Activity</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-cogs"></i> System
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('user') }}" class="submenu {{ sa('user') }}" ><i class="icon-group"></i> Admins</a></li>
                <li><a href="{{ URL::to('departments') }}" class="submenu {{ sa('departments') }}" ><i class="icon-group"></i> Departments</a></li>
                <li><a href="{{ URL::to('option') }}" class="submenu {{ sa('option') }}" ><i class="icon-wrench"></i> Options</a></li>
            </ul>
        </li>

    @endif
</ul>
