<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Real Estate DashBoard</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-drupal"></i> <span>User</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('admin.user')}}"><i class="fa fa-circle-o"></i>User</a></li>
                <li><a href="{{route('role')}}"><i class="fa fa-circle-o"></i>Role</a></li>
                <li><a href="{{route('permission')}}"><i class="fa fa-circle-o"></i>Permission</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-home"></i> <span>Property</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('property')}}"><i class="fa fa-circle-o"></i>Property</a></li>
                <li><a href="{{route('propertytype')}}"><i class="fa fa-circle-o"></i>Property Type</a></li>
                <li><a href="{{route('classtype')}}"><i class="fa fa-circle-o"></i>Class Type</a></li>
                <li><a href="{{route('propertytitle')}}"><i class="fa fa-circle-o"></i>Property Title</a></li>
                <li><a href="{{route('propertystatus')}}"><i class="fa fa-circle-o"></i>Property Status</a></li>
                <li><a href="{{route('roadaccess')}}"><i class="fa fa-circle-o"></i>Road Access</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-desktop"></i> <span>Advertisment</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('adtransaction')}}"><i class="fa fa-circle-o"></i>Advertisment Transaction</a></li>
                <li><a href="{{route('adobjective')}}"><i class="fa fa-circle-o"></i>Advertisment Objective</a></li>
                <li><a href="{{route('adtype')}}"><i class="fa fa-circle-o"></i>Advertiisment Type</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-comment-o"></i> <span>Condition</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('rentalcondition')}}"><i class="fa fa-circle-o"></i>Rental Condition</a></li>
                <li><a href="{{route('salecondition')}}"><i class="fa fa-circle-o"></i>Sale Condition</a></li>
                <li><a href="{{route('interiorcondition')}}"><i class="fa fa-circle-o"></i>Interior Condition</a></li>
                <li><a href="{{route('interiorlook')}}"><i class="fa fa-circle-o"></i>Interior Look</a></li>
                <li><a href="{{route('exteriorlooks')}}"><i class="fa fa-circle-o"></i>Exterior Look</a></li>
            </ul>
        </li>


        <li>
            <a href="{{route('environment')}}">
                <i class="fa fa-th"></i> <span>Environment</span>
                <span class="pull-right-container">
            </span>
            </a>
        </li>

        <li>
            <a href="{{route('facility')}}">
                <i class="fa fa-th"></i> <span>Facility</span>
                <span class="pull-right-container">
            </span>
            </a>
        </li>

        <li>
            <a href="{{route('finance')}}">
                <i class="fa fa-th"></i> <span>Finance</span>
                <span class="pull-right-container">
            </span>
            </a>
        </li>


        <li>
            <a href="{{route('transactiontype')}}">
                <i class="fa fa-th"></i> <span>Transaction Type</span>
                <span class="pull-right-container">
            </span>
            </a>
        </li>

        <li>
            <a href="{{route('investmenttype')}}">
                <i class="fa fa-th"></i> <span>Investment Type</span>
                <span class="pull-right-container">
            </span>
            </a>
        </li>

        <li>
            <a href="{{route('landarea')}}">
                <i class="fa fa-th"></i> <span>Land Area</span>
                <span class="pull-right-container">
            </span>
            </a>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-tachometer"></i> <span>Construction</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('manpower')}}"><i class="fa fa-circle-o"></i>Manpower</a></li>
                <li><a href="{{route('material')}}"><i class="fa fa-circle-o"></i>Material</a></li>
                <li><a href="{{route('construction')}}"><i class="fa fa-circle-o"></i>Construction</a></li>
                <li><a href="{{route('personalinfo')}}"><i class="fa fa-circle-o"></i>Personal Info</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-sellsy"></i> <span>Seller</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('sellerexpected')}}"><i class="fa fa-circle-o"></i>Seller Expected</a></li>
                <li><a href="{{route('sellerbudget')}}"><i class="fa fa-circle-o"></i>Seller Budget</a></li>
                <li><a href="{{route('commissiontype')}}"><i class="fa fa-circle-o"></i>Commission</a></li>
                <li><a href="{{route('legal')}}"><i class="fa fa-circle-o"></i>Legal Document</a></li>
            </ul>
        </li>

        <li>
            <a href="{{route('seo')}}">
                <i class="fa fa-th"></i> <span>SEO</span>
                <span class="pull-right-container">
            </span>
            </a>
        </li>

        <li>
            <a href="{{route('urgencytype')}}">
                <i class="fa fa-th"></i> <span>Urgency Type</span>
                <span class="pull-right-container">
            </span>
            </a>
        </li>
    </ul>
</section>
<!-- /.sidebar -->
</aside>