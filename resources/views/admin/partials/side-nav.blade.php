 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar" style="height: auto;">
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu tree" data-widget="tree" id="sidebar-menu">
             <li class="treeview">
                 <a href="#">
                     <i class="bx bx-home-circle"></i><span class="title">Home</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li>
                         <a href="{{ route('admin-dashboard') }}">
                             <span class="dot-icon">.</span><span>Dashboard</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <li id="li_catalog" class="treeview">
                 <a href="#">
                     <i class="bx bx-sitemap"></i><span class="title">Catalog</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li id="catalog_category"><a href="{{ route('category.list') }}"><span
                                 class="dot-icon">.</span><span>Category</span></a></li>
                     <li id="catalog_items"><a href="{{ route('item.list') }}"><span
                                 class="dot-icon">.</span><span>Items</span></a>
                     </li>
                 </ul>
             </li>
             <li id="li_vendors" class="treeview">
                 <a href="#">
                     <i class="bx bx-user-plus"></i><span class="title">Vendors</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li id="vendors_new_vendor_request"><a href="{{ route('vendor.new_requests') }}"><span
                                 class="dot-icon">.</span><span>New Vendor Request</span></a></li>
                     <li id="vendors_approved_vendor"><a href="{{ route('vendor.approved_requests') }}"><span
                                 class="dot-icon">.</span><span>Approved Vendor</span></a></li>
                     <li id="vendors_rejected_vendor"><a href="{{ route('vendor.rejected_requests') }}"><span
                                 class="dot-icon">.</span><span>Rejected Vendor</span></a></li>
                     {{-- <li id="vendors_new_items_update_to_all"><a href="{{ route('vendor.updateToAll') }}"><span
                                 class="dot-icon">.</span><span>New Items Update To All</span></a></li> --}}
                 </ul>
             </li>
             <li id="li_events" class="treeview">
                 <a href="#">
                     <i class="bx bx-calendar"></i><span class="title">Events</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li id="events_create_new_event"><a href="{{ route('event.create') }}"><span
                                 class="dot-icon">.</span><span>Create
                                 New Event</span></a></li>
                     <li id="events_upcoming_events"><a href="{{ route('event.upcoming') }}"><span
                                 class="dot-icon">.</span><span>Upcoming Events</span></a></li>
                     <li id="events_running_events"><a href="{{ route('event.running') }}"><span
                                 class="dot-icon">.</span><span>Running Events</span></a></li>
                     <li id="events_closed_events"><a href="{{ route('event.closed') }}"><span
                                 class="dot-icon">.</span><span>Closed Events</span></a></li>
                     <li id="events_decision_taken_events"><a href="{{ route('event.decisionTaken') }}"><span
                                 class="dot-icon">.</span><span>Decision Taken Events</span></a></li>
                     <li id="events_empty_events"><a href="{{ route('event.empty') }}"><span
                                 class="dot-icon">.</span><span>Empty
                                 Events</span></a></li>
                 </ul>
             </li>
             <li id="li_reports" class="treeview">
                 <a href="#">
                     <i class="bx bx-bar-chart-alt"></i><span class="title">Reports</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li id="reports_running_event_report"><a href="{{ route('report.runningEvent') }}"><span
                                 class="dot-icon">.</span><span>Running Event Report</span></a></li>
                     <li id="reports_closed_event_report"><a href="{{ route('report.closedEvent') }}"><span
                                 class="dot-icon">.</span><span>Closed Event Report</span></a></li>
                     <li id="reports_decision_taken_event_report"><a href="{{ route('report.decisionTaken') }}"><span
                                 class="dot-icon">.</span><span>Decision Taken Event Report</span></a></li>
                 </ul>
             </li>
             <li id="li_login_trail" class="treeview">
                 <a href="#">
                     <i class='bx bx-history'></i><span class="title">Login Trail</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li id="login_trail_employee_login_report"><a
                             href="{{ route('login-trails.employeeLogin') }}"><span
                                 class="dot-icon">.</span><span>Employee Login Report</span></a></li>
                     <li id="login_trail_vendor_login_report"><a href="{{ route('login-trails.vendorLogin') }}"><span
                                 class="dot-icon">.</span><span>Vendor Login Report</span></a></li>
                 </ul>
             </li>
             <li id="li_notice_and_news" class="treeview">
                 <a href="#">
                     <i class="bx bx-bell"></i><span class="title">Notice & News</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li id="notice_and_news_notice"><a href="{{ route('notice.list') }}"><span
                                 class="dot-icon">.</span><span>Notice & News</span></a></li>
                 </ul>
             </li>
             <li id="li1" class="treeview">
                 <a href="#">
                     <i class="bx bx-support"></i><span class="title">Help & Support</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li id="Li2"><a href="{{ route('help.create') }}"><span
                                 class="dot-icon">.</span><span>Help &
                                 Support</span></a></li>
                 </ul>
             </li>
             <!-- SETUP & CONFIGURATION -->
             <li id="li_setup_config" class="header">SETUP &amp; CONFIGURATION</li>
             <li id="li_settings" class="treeview">
                 <a href="#">
                     <i class="bx bx-cog"></i><span class="title">Settings</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li id="li_organization_setting" class="treeview"><a href="#"><span
                                 class="dot-icon">.</span><span>Organization Setting</span>
                             <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                             </span>
                         </a>
                         <ul class="treeview-menu">
                             <li id="organization_setting_company_setup"><a
                                     href="{{ route('company.create') }}"><span
                                         class="dot-icon">.</span><span>Company Setup</span></a></li>
                             <li id="organization_setting_department"><a href="{{ route('department.list') }}"><span
                                         class="dot-icon">.</span><span>Department</span></a></li>
                             <li id="organization_setting_role_permissions"><a
                                     href="{{ route('permission_role.list') }}"><span
                                         class="dot-icon">.</span><span>Role &
                                         Permissions</span></a></li>
                             <li id="organization_setting_employee"><a href="{{ route('employee.list') }}"><span
                                         class="dot-icon">.</span><span>Employee</span></a></li>
                         </ul>
                     </li>
                     <li id="li_mail_setting" class="treeview"><a href="#"><span
                                 class="dot-icon">.</span><span>Mail Setting</span>
                             <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                             </span>
                         </a>
                         <ul class="treeview-menu">
                             {{-- <li id="mail_setting_configuration"><a href="{{ route('config.mail.create') }}"><span
                                         class="dot-icon">.</span><span>Configuration</span></a></li> --}}
                             <li id="mail_setting_template"><a href="{{ route('template.email.create') }}"><span
                                         class="dot-icon">.</span><span>Template</span></a></li>
                         </ul>
                     </li>
                     {{-- <li id="li_sms_setting" class="treeview"><a href="#"><span
                                 class="dot-icon">.</span><span>SMS Setting</span>
                             <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                             </span>
                         </a>
                         <ul class="treeview-menu">
                             <li id="sms_setting_configuration"><a href="{{ route('config.sms.create') }}"><span
                                         class="dot-icon">.</span><span>SMS Configuration</span></a></li>
                             <li id="sms_setting_template"><a href="{{ route('template.sms.list') }}"><span
                                         class="dot-icon">.</span><span>SMS Template</span></a></li>
                         </ul>
                     </li> --}}
                     <li id="li_master_setting" class="treeview"><a href="#"><span
                                 class="dot-icon">.</span><span>Master Setting</span>
                             <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                             </span>
                         </a>
                         <ul class="treeview-menu">
                             <li id="master_setting_country"><a href="{{ route('country.list') }}"><span
                                         class="dot-icon">.</span><span>Country</span></a></li>
                             <li id="master_setting_state"><a href="{{ route('state.list') }}"><span
                                         class="dot-icon">.</span><span>State</span></a></li>
                             <li id="master_setting_region"><a href="{{ route('region.list') }}"><span
                                         class="dot-icon">.</span><span>Region</span></a></li>
                             <li id="master_setting_uom"><a href="{{ route('uom.list') }}"><span
                                         class="dot-icon">.</span><span>UoM</span></a></li>
                             <li id="master_setting_event_mode"><a href="{{ route('eventmode.list') }}"><span
                                         class="dot-icon">.</span><span>Event Mode</span></a></li>
                         </ul>
                     </li>
                 </ul>
             </li>
         </ul>
     </section>
     <!-- /.sidebar -->
 </aside>
