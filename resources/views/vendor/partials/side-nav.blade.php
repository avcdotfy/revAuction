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

             <li id="li_events" class="treeview">
                 <a href="#">
                     <i class="bx bx-calendar"></i><span class="title">Events</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">

                     <li id="events_upcoming_events"><a href="{{ route('vendor.upcoming-events') }}"><span
                                 class="dot-icon">.</span><span>Upcoming Events</span></a></li>
                     <li id="events_upcoming_events"><a href="{{ route('vendor.running-events') }}"><span
                                 class="dot-icon">.</span><span>Running Events</span></a></li>
                     <li id="events_running_events"><a href="{{ route('vendor.participated-events') }}"><span
                                 class="dot-icon">.</span><span>Participated Events</span></a></li>
                     <li id="events_closed_events"><a href="{{ route('vendor.participated-events-status') }}"><span
                                 class="dot-icon">.</span><span>Participated Events Status</span></a></li>
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
                     <li id="events_running_events"><a href="{{ route('vendor.participated-event-reports') }}"><span
                                 class="dot-icon">.</span><span>Participated Events</span></a></li>
                     <li id="events_closed_events"><a
                             href="{{ route('vendor.participated-event-status-reports') }}"><span
                                 class="dot-icon">.</span><span>Participated Events Status</span></a></li>
                 </ul>
             </li>

             <li id="li_notice_and_news" class="treeview">
                 <a href="{{ route('vendor.notice-news') }}">
                     <i class="bx bx-bell"></i><span class="title">Notice & News</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li id="notice_and_news_notice"><a href="{{ route('vendor.notice-news') }}"><span
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
                     <li id="Li2"><a href="{{ route('vendor.help-support') }}"><span
                                 class="dot-icon">.</span><span>Help &
                                 Support</span></a></li>
                 </ul>
             </li>

         </ul>
     </section>
     <!-- /.sidebar -->
 </aside>
