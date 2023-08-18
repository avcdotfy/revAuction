<?php

define('ADMIN', 'ADMIN');
define('VENDOR', 'VENDOR');
define('EMPLOYEE', 'EMPLOYEE');
define('USER_TYPES', [ADMIN, VENDOR, EMPLOYEE]);

define('ADMIN_SIDE', 'Admin Side');
define('VENDOR_SIDE', 'Vendor Side');
define('SCHEDULED', 'SCHEDULED');
define('RUNNING', 'RUNNING');
define('COMPLETED', 'COMPLETED');
define('EVENT_ID_PREFIX', 'AVCDOTFYREVAUC000');
define('EVENT_STATUS', ['SCHEDULED', 'RUNNING', 'COMPLETED', 'DEACTIVE']);


define('PERMISSIONS_GROUPs', [

    'Authentication  management',
    'Dashboard',
    'Catalog Management',
    'Vendor Management',
    'Event Management',
    'Reports Management',
    'Login Trails Management',
    'Notice And News Management',
    'Help Support Management',
    'Master Setting Management',
    'Mail Setting Management',
    'Organization Setting Management',


]);

define('PERMISSIONS', [
    [
        'permissiongroup_id' => 1,
        'name' => 'logout',
        'route_name' => 'logout'
    ],
    [
        'permissiongroup_id' => 1,
        'name' => 'change password screen',
        'route_name' => 'change.password'
    ],
    [
        'permissiongroup_id' => 1,
        'name' => 'change password Process',
        'route_name' => 'doChangePassword'
    ],
    [
        'permissiongroup_id' => 1,
        'name' => 'Reset Password Form',
        'route_name' => 'reset-password-form'
    ],
    [
        'permissiongroup_id' => 1,
        'name' => 'Reset Password Process',
        'route_name' => 'reset-password'
    ],
    [
        'permissiongroup_id' => 1,
        'name' => 'Send Password Reset Link Screen',
        'route_name' => 'reset-link'
    ],
    [
        'permissiongroup_id' => 1,
        'name' => 'Send Password Reset Link Process',
        'route_name' => 'send-reset-link'
    ],


    /////////////////Group 1 Finished ///////////////////


    [
        'permissiongroup_id' => 2,
        'name' => 'Dashboard',
        'route_name' => 'admin-dashboard'
    ],


    /////////////////Group 2 Finished ///////////////////


    [
        'permissiongroup_id' => 3,
        'name' => 'Show All Item',
        'route_name' => 'item.list'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Item Creation Form',
        'route_name' => 'item.create'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Item Save',
        'route_name' => 'item.store'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Item Edit form',
        'route_name' => 'item.edit'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Item Update',
        'route_name' => 'item.update'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Delete Item Region Price Unit',
        'route_name' => 'item.rpuDelete'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Item RPU Details',
        'route_name' => 'item.rpu-details'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Category list',
        'route_name' => 'category.list'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Category Create Form',
        'route_name' => 'category.create'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Category Save',
        'route_name' => 'category.store'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Category edit form',
        'route_name' => 'category.edit'
    ],
    [
        'permissiongroup_id' => 3,
        'name' => 'Category update',
        'route_name' => 'category.update'
    ],


    ///////////////////// GRoup 3 finised ////////////////

    [
        'permissiongroup_id' => 4,
        'name' => 'Vendor New Request List',
        'route_name' => 'vendor.new_requests'
    ],
    [
        'permissiongroup_id' => 4,
        'name' => 'Vendor Approved List',
        'route_name' => 'vendor.approved_requests'
    ],
    [
        'permissiongroup_id' => 4,
        'name' => 'Vendor Rejected List',
        'route_name' => 'vendor.rejected_requests'
    ],
    [
        'permissiongroup_id' => 4,
        'name' => 'Accept Vendors',
        'route_name' => 'request.accept'
    ],
    [
        'permissiongroup_id' => 4,
        'name' => 'Reject Vendors',
        'route_name' => 'request.reject'
    ],
    [
        'permissiongroup_id' => 4,
        'name' => 'View Vendors Profile',
        'route_name' => 'vendor.profile'
    ],
    [
        'permissiongroup_id' => 4,
        'name' => 'Update Vendors Profile',
        'route_name' => 'vendor.profile-update'
    ],

    //////////////////////Group 4 Finished //////////////////////

    [
        'permissiongroup_id' => 5,
        'name' => 'Event Creation Form',
        'route_name' => 'event.create'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Event Save',
        'route_name' => 'event.store'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Upcoming Event List',
        'route_name' => 'event.upcoming'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Running Event List',
        'route_name' => 'event.running'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Decision Taken Event List',
        'route_name' => 'event.decisionTaken'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Closed Event List',
        'route_name' => 'event.closed'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Take Decision',
        'route_name' => 'decision.take'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Save Decision',
        'route_name' => 'decision.store'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Empty Event List',
        'route_name' => 'event.empty'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Event posted event information',
        'route_name' => 'event.postedEventInformation'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Event posted event information',
        'route_name' => 'event.postedEventInformation'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Event decision Taken Status',
        'route_name' => 'event.decisionTakenEventStatus'
    ],
    [
        'permissiongroup_id' => 5,
        'name' => 'Live Event Statistics',
        'route_name' => 'event.statistics'
    ],


    ////////////////////// Group 5 Finished ////////////////////////

    [
        'permissiongroup_id' => 6,
        'name' => 'Running event Report',
        'route_name' => 'report.runningEvent'
    ],
    [
        'permissiongroup_id' => 6,
        'name' => 'Decision Taken  Report',
        'route_name' => 'report.decisionTaken'
    ],
    [
        'permissiongroup_id' => 6,
        'name' => 'Closed event Report',
        'route_name' => 'report.closedEvent'
    ],
    [
        'permissiongroup_id' => 6,
        'name' => 'Closed Event Consollidated Report',
        'route_name' => 'report.closedEventConsolidateReport'
    ],
    [
        'permissiongroup_id' => 6,
        'name' => 'Closed Event L1 Report',
        'route_name' => 'report.closedEvenL1Report'
    ],
    [
        'permissiongroup_id' => 6,
        'name' => 'Decision Taken Consollidated Report',
        'route_name' => 'report.decisionTakenEventConsolidateReport'
    ],
    [
        'permissiongroup_id' => 6,
        'name' => 'Decision Taken L1  Report',
        'route_name' => 'report.decisionTakenEvenL1Report'
    ],
    [
        'permissiongroup_id' => 6,
        'name' => 'Decision Taken L1  Report',
        'route_name' => 'report.decisionTakenEvenL1Report'
    ],

    ///////////////////////////// Group 6 Finished ////////////////////////////
    [
        'permissiongroup_id' => 7,
        'name' => 'Employee Login Details  ',
        'route_name' => 'login-trails.employeeLogin'
    ],
    [
        'permissiongroup_id' => 7,
        'name' => 'Vendor Login Details  ',
        'route_name' => 'login-trails.vendorLogin'
    ],
    ///////////////////////////// Group 7 Finished ////////////////////////////

    [
        'permissiongroup_id' => 8,
        'name' => 'Notice create form',
        'route_name' => 'notice.create'
    ],
    [
        'permissiongroup_id' => 8,
        'name' => 'Notice   save',
        'route_name' => 'notice.store'
    ],
    [
        'permissiongroup_id' => 8,
        'name' => 'Notice list',
        'route_name' => 'notice.list'
    ],
    [
        'permissiongroup_id' => 8,
        'name' => 'Notice Edit Form ',
        'route_name' => 'notice.edit'
    ],
    [
        'permissiongroup_id' => 8,
        'name' => 'Notice update',
        'route_name' => 'notice.update'
    ],

    ///////////////////////////// Group 8 Finished ////////////////////////////

    [
        'permissiongroup_id' => 9,
        'name' => 'Help Create',
        'route_name' => 'help.create'
    ],
    [
        'permissiongroup_id' => 9,
        'name' => 'Help save',
        'route_name' => 'help.store'
    ],

    ///////////////////////////// Group 9 Finished ////////////////////////////

    [
        'permissiongroup_id' => 10,
        'name' => 'Country List',
        'route_name' => 'country.list'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Country Create form',
        'route_name' => 'country.create'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Country Save',
        'route_name' => 'country.store'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Country edit form',
        'route_name' => 'country.edit'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Country save',
        'route_name' => 'country.update'
    ],


    [
        'permissiongroup_id' => 10,
        'name' => 'State List',
        'route_name' => 'state.list'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'State Create form',
        'route_name' => 'state.create'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'State Save',
        'route_name' => 'state.store'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'State edit form',
        'route_name' => 'state.edit'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'State save',
        'route_name' => 'state.update'
    ],


    [
        'permissiongroup_id' => 10,
        'name' => 'Region List',
        'route_name' => 'region.list'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Region Create form',
        'route_name' => 'region.create'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Region Save',
        'route_name' => 'region.store'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Region edit form',
        'route_name' => 'region.edit'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Region save',
        'route_name' => 'region.update'
    ],



    [
        'permissiongroup_id' => 10,
        'name' => 'Uom List',
        'route_name' => 'uom.list'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Uom Create form',
        'route_name' => 'uom.create'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Uom Save',
        'route_name' => 'uom.store'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Uom edit form',
        'route_name' => 'uom.edit'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Uom save',
        'route_name' => 'uom.update'
    ],


    [
        'permissiongroup_id' => 10,
        'name' => 'Event Mode List',
        'route_name' => 'eventmode.list'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Event Mode Create form',
        'route_name' => 'eventmode.create'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Event Mode Save',
        'route_name' => 'eventmode.store'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Event Mode edit form',
        'route_name' => 'eventmode.edit'
    ],
    [
        'permissiongroup_id' => 10,
        'name' => 'Event Mode save',
        'route_name' => 'eventmode.update'
    ],

    ///////////////////////////// Group 10 Finished ////////////////////////////

    [
        'permissiongroup_id' => 11,
        'name' => 'Email template List',
        'route_name' => 'template.email.list'
    ],
    [
        'permissiongroup_id' => 11,
        'name' => 'Email template Create',
        'route_name' => 'template.email.create'
    ],
    [
        'permissiongroup_id' => 11,
        'name' => 'Email template Save',
        'route_name' => 'template.email.store'
    ],
    [
        'permissiongroup_id' => 11,
        'name' => 'Email template edit form',
        'route_name' => 'template.email.edit'
    ],
    [
        'permissiongroup_id' => 11,
        'name' => 'Email template update',
        'route_name' => 'template.email.update'
    ],

    ///////////////////////////// Group 11 Finished ////////////////////////////

    [
        'permissiongroup_id' => 12,
        'name' => 'Company Create Form',
        'route_name' => 'company.create'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Company save',
        'route_name' => 'company.store'
    ],


    [
        'permissiongroup_id' => 12,
        'name' => 'Department List',
        'route_name' => 'department.list'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Department Create',
        'route_name' => 'department.create'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Department Save',
        'route_name' => 'department.store'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Department edit form',
        'route_name' => 'department.edit'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Department update',
        'route_name' => 'department.update'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Permission role list',
        'route_name' => 'permission_role.list'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Permission role create  form',
        'route_name' => 'permission_role.create'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Permission role save',
        'route_name' => 'permission_role.store'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Permission role Edit From',
        'route_name' => 'permission_role.edit'

    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Permission role update',
        'route_name' => 'permission_role.update'
    ],

    [
        'permissiongroup_id' => 12,
        'name' => 'Employee List',
        'route_name' => 'employee.list'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Employee create form',
        'route_name' => 'employee.create'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Employee save',
        'route_name' => 'employee.store'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Employee edit form',
        'route_name' => 'employee.edit'
    ],
    [
        'permissiongroup_id' => 12,
        'name' => 'Employee update',
        'route_name' => 'employee.update'
    ],




]);



define('REQUEST_STATUS',  ['APPROVED', 'REJECTED', 'NOT REPONDED']);
define(
    'UOMs',
    [
        'Ampere',
        'Arpent',
        'Box',
        'Bucket',
        'Bundle',
        'Centimeter',
        'Cubic',
        'Decimeter',
        'Dozen',
        'Foot',
        'Gram',
        'Gross',
        'Inch',
        'Kg',
        'Kilogram',
    ]
);

define('SERVICE_TYPE', [
    "New Registration",
    "Request",
    "Accepted",
    "Request",
    "Rejected",
    "Forgot",
    "Password",
    "New Event",
    "Invitation",
]);


define('COMPANY_TYPE', [
    'Sole Proprietorship',
    'Partnership Firm',
    'Private Limited Company',
    'Public Limited Company',
    'Limited Liability Partnership'
]);


define('TERMS_AND_CONDITIONS', '<html><head><link rel="stylesheet" href="/WebResource.axd?d=zDG4DrYCo6eKgnyr7ZcBHEUpAVE8XMVQc1CuWqxmXi6bRiQZzt1fqYVMQq__GBexo7YUZFPhd8aKp1KXb0AV3UiF_Xb3zAyQOC8d9Y5o9rRZ0n9N8WpNWPALC8JQYfIjnKiygsQDDv1kgJUPWKB0DA2&amp;t=636835018320000000" media="all"><link rel="stylesheet" href="/WebResource.axd?d=w64DWl_xQbTzjcf7oSv_LevFuAsDneBRv9t4FjoNyJ8pH0vIdSTQ1XYRQF4-h9RDhXSUXmFTSXwwebheFgL8sF6sIUrloOxtb7VonzHvTjHe_itfuYU-jnWNhcx1ZMhIJl1eHZAhnB2I6YOYMakHSQ2&amp;t=636835018320000000" media="all"></head><body marginwidth="0" marginheight="0"><p class="MsoNormal" style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;"><b><u>IMPORTANT NOTES, TERMS &amp; CONDITION</u></b><br><span style="font-size: 10pt;"><o:p></o:p></span></p><p class="MsoNormal" style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;"><b><span style="font-size: 10pt;">1.</span></b><span style="font-size: 10pt;">&nbsp;</span>Material condition – Stock Arising, “AS-IS-WHERE-IS&amp; NO-COMPLAINT” basis<span style="font-size: 10pt;"><o:p></o:p></span></p><p class="MsoNormal" style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;"><b>2.</b>&nbsp;We reserve the rights to cancel any approved lots/delivery order without assigning any reason whatsoever we reserve the right to partially or totally accept or reject any/all bids placed in the online auction without assigning any reason whatsoever. &nbsp;&nbsp;&nbsp;&nbsp;The decision of WE would be final and binding on the bidder in any such cases&nbsp;&nbsp;<span style="font-size: 10pt;"><o:p></o:p></span></p><p class="MsoNormal" style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;"><b><span style="font-size: 10pt;">3.&nbsp;</span></b><b><u>PAYMENT RULES</u></b><b><span style="font-size: 10pt;"><o:p></o:p></span></b></p><ul type="disc" style="font-size: 13.3333px; text-align: justify;"><li class="MsoNormal" style="margin-right: -51.95pt; line-height: normal;">Minimum5% of your accepted bid value to be paid as security deposit within<span style="font-weight: bold;">&nbsp;</span><span style="color: red;">2 working days of the bid acceptance which will be adjusted against your last lifting of the respective lot</span><span style="font-size: 10pt;"><o:p></o:p></span></li><li class="MsoNormal" style="margin-right: -51.95pt; line-height: normal;"><span style="color: red;">Stock quantity material payment to be deposited within&nbsp;2 working days of acceptance of your bid</span><span style="font-size: 10pt;"><o:p></o:p></span></li><li class="MsoNormal" style="margin-right: -51.95pt; line-height: normal;"><span style="color: red;">Arising quantity payment to be made as per arising basis within&nbsp;3 working days from the date of intimation of stock availability.</span><span style="font-size: 10pt;"><o:p></o:p></span></li></ul><p class="MsoNormal" style="font-size: 13.3333px; margin-bottom: 0.0001pt; line-height: normal;"><b><span style="font-size: 10pt;">4.&nbsp;</span></b><b>Lifting&nbsp; Rules –</b>No Guarantee for full truck load quantity<br><br>5.&nbsp;<b><u>Last date of lifting –</u></b><span style="font-size: 12pt; font-family: times new roman, serif;"><o:p></o:p></span></p><ul type="disc" style="font-size: 13.3333px;"><li class="MsoNormal" style="line-height: normal;"><span style="font-size: 10pt;">Last date of lifting for Stock Quantity is&nbsp;</span><b><span style="font-size: 10pt; color: red;">4 working days from the date of approval for stock material</span></b><span style="font-size: 10pt;"><o:p></o:p></span></li><li class="MsoNormal" style="line-height: normal;"><b><span style="font-size: 10pt; color: #330033;">Full material to be lifted within 20 days from the acceptance of your bid</span></b><span style="font-size: 10pt;"><o:p></o:p></span></li><li class="MsoNormal" style="line-height: normal;"><b><span style="font-size: 10pt; color: #330033;">Due to any reason if customer fails to complete the entire lifting within stipulated timeline then the</span></b><b><span style="font-size: 10pt; color: red;">&nbsp;10% amount paid by you will be forfeited and customer may be debarred from participating in all future auctions</span></b><span style="font-size: 10pt;"><o:p></o:p></span></li></ul><p class="MsoNormal" style="font-size: 13.3333px; margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 10pt;">6.&nbsp;</span>Any dispute on quality of material and bid cancellation shall not be entertained at any point after the auction<br><br>8.&nbsp;The terms &amp; condition contained in this mail may be changed without any prior notice<br><br><br><span style="font-size: 12pt; font-family: times new roman, serif;"><o:p></o:p></span></p><p class="MsoNormal" align="center" style="font-size: 13.3333px; margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><b><u>METHODOLOGYFOR ALLOCATION OF QUANTITY</u></b><span style="font-size: 10pt;"><br><br><o:p></o:p></span></p><ul type="disc" style="font-size: 13.3333px;"><li class="MsoNormal" style="line-height: normal;"><span style="font-size: 10pt;">First preference is given to highest bid price<o:p></o:p></span></li><li class="MsoNormal" style="line-height: normal;"><span style="font-size: 10pt;">If two or more parties bid the same price then preference for allocation is given to party that placed the bid for a higher quantity<o:p></o:p></span></li><li class="MsoNormal" style="line-height: normal;"><span style="font-size: 10pt;">In case two or more parties bid the same price and quantity, then preference Is given to the party that placed the bid earlier<o:p></o:p></span></li></ul><p class="MsoNormal" style="font-size: 13.3333px;"><o:p>&nbsp;</o:p></p></body></html>');


define('EMAIL_FORMAT', '<p>Dear {{$vendor_name}},</p><p>We are writing to invite you to participate in an upcoming reverse auction event that we are organizing. We believe that your products and services would be a great addition to the auction, and we are excited to have you as a potential vendor.</p><p>The auction event will be held on&nbsp;<strong>{{$opening_date}}&nbsp;</strong>at&nbsp;<strong>{{ $opening_time}}</strong>, and it will attract a large number of vendors who are interested to sell their items at reasonable price. As a vendor, you will have the opportunity to sell your products to us .</p><p><strong>Auction Detail:</strong></p><p><strong>Opening Date &amp; Time (IST): {{$opening_date}} - {{ $opening_time}}</strong></p><p><strong>Closing Date &amp; Time (IST): {{$closing_date}} -&nbsp; {{$closing_time}}</strong></p><p><strong>Event ID: {{ $event_id }}</strong></p><p><strong>Event Title : {{$event_title }}</strong></p><p>To participate in the auction, please review the attached vendor application and return it to us by [deadline]. Once we receive your application, we will review it and confirm your participation in the event.</p><p>If you have any questions or concerns regarding the auction event or the vendor application, please do not hesitate to contact us. We are happy to provide any additional information that you may need.</p><p>Thank you for your consideration, and we look forward to your participation in the auction event.</p><p><br>...<br>Thanks &amp; Regards,<br><strong>AVC Dotfy&nbsp;</strong><br><strong></strong></p><p>Ph: +919211788450 , +919891316303<br>Email: hello@dotfy.co</p>');
