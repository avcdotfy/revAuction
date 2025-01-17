<?php

define('USER_TYPES', ['ADMIN',  'VENDOR', 'EMPLOYEE']);

define('ADMIN_SIDE', 'Admin Side');
define('VENDOR_SIDE', 'Vendor Side');
define('SCHEDULED', 'SCHEDULED');
define('RUNNING', 'RUNNING');
define('COMPLETED', 'COMPLETED');

define('EVENT_STATUS', ['SCHEDULED', 'RUNNING', 'COMPLETED', 'DEACTIVE']);

define('PERMISSIONS', [
    [
        'name' => 'Dashboard',
        'url_path' => 'admin'
    ],
    [
        'name' => ' Catalog - Category List',
        'url_path' => 'admin/catalog/category'
    ],
    [
        'name' => ' Catalog - Category Create',
        'url_path' => 'admin/catalog/category/create'
    ],
    [
        'name' => 'Vendors - Rejected Vendor',
        'url_path' => 'admin/vendor/rejected-requests'
    ],
    [
        'name' => 'Events - Running Events ',
        'url_path' => 'admin/event/running'
    ],
    [
        'name' => 'Reports - Running Event Report ',
        'url_path' => ''
    ],
    [
        'name' => 'Notice & News - News ',
        'url_path' => ''
    ],
    [
        'name' => 'Organization Setting - Department List',
        'url_path' => 'admin/department'
    ],
    [
        'name' => 'Organization Setting - Department Create',
        'url_path' => 'admin/department/create'
    ],
    [
        'name' => 'SMS Setting - Template ',
        'url_path' => ''
    ],
    [
        'name' => 'Master Setting - UoM List',
        'url_path' => 'admin/setting/master/uom'
    ],
    [
        'name' => 'Master Setting - UoM Create',
        'url_path' => 'admin/setting/master/uom/create'
    ],
    [
        'name' => 'Catalog - Items List',
        'url_path' => 'admin/catalog/item'
    ],
    [
        'name' => 'Catalog - Items create',
        'url_path' => 'admin/catalog/item/create'
    ],
    [
        'name' => 'Vendors - New Items Update To All',
        'url_path' => ''
    ],
    [
        'name' => 'Events - Closed Events ',
        'url_path' => 'admin/event/closed'
    ],
    [
        'name' => 'Reports - Closed Event Report ',
        'url_path' => ''
    ],
    [
        'name' => 'Login Trail - Employee Login Report',
        'url_path' => ''
    ],
    [
        'name' => 'Organis. Sett. - Role & Permissions List ',
        'url_path' => 'admin/permission'
    ],
    [
        'name' => 'Organis. Sett. - Role & Permissions Create ',
        'url_path' => 'admin/permission/create'
    ],
    [
        'name' => ' Master Setting - Country list',
        'url_path' => 'admin/setting/master/country'
    ],
    [
        'name' => ' Master Setting - Country create',
        'url_path' => 'admin/setting/master/country/create'
    ],
    [
        'name' => 'Master Setting - Event Mode',
        'url_path' => 'admin/setting/master/eventmode'
    ],
    [
        'name' => 'Vendors - New Vendor Request',
        'url_path' => 'admin/vendor/new-requests'
    ],
    [
        'name' => 'Events - Create New Event',
        'url_path' => 'admin/event/create'
    ],
    [
        'name' => 'Events - Decision Taken Events',
        'url_path' => ''
    ],
    [
        'name' => 'Reports - Decision Taken Event Report',
        'url_path' => ''
    ],
    [
        'name' => 'Login Trail - Vendor Login Report',
        'url_path' => ''
    ],
    [
        'name' => 'Organization Setting - Employee List',
        'url_path' => 'admin/employee'
    ],
    [
        'name' => 'Organization Setting - Employee Create ',
        'url_path' => 'admin/employee/create'
    ],
    [
        'name' => 'Master Setting - State List',
        'url_path' => 'admin/setting/master/state'
    ],
    [
        'name' => 'Master Setting - State Create',
        'url_path' => 'admin/setting/master/state/create'
    ],
    [
        'name' => 'Vendors - Approved Vendor',
        'url_path' => 'admin/vendor/approved-requests'
    ],
    [
        'name' => 'Events - Upcoming Events',
        'url_path' => 'admin/event/upcoming'
    ],
    [
        'name' => 'Events - Empty Events',
        'url_path' => ''
    ],
    [
        'name' => 'Notice & News - Notice',
        'url_path' => ''
    ],
    [
        'name' => 'Organization Sett. - Company Setup',
        'url_path' => 'admin/company/create'
    ],
    [
        'name' => 'Mail Setting - Configuration',
        'url_path' => ''
    ],
    [
        'name' => 'Master Setting - Region List',
        'url_path' => 'admin/setting/master/region'
    ],
    [
        'name' => 'Master Setting - Region Create',
        'url_path' => 'admin/setting/master/region/create'
    ],
    [
        'name' => 'Vendor - Approve Request',
        'url_path' => 'admin/request/accept'
    ],
    [
        'name' => 'Vendor - Reject Request',
        'url_path' => 'admin/request/reject'
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




define('TERMS_AND_CONDITIONS', '<html><head><link rel="stylesheet" href="/WebResource.axd?d=zDG4DrYCo6eKgnyr7ZcBHEUpAVE8XMVQc1CuWqxmXi6bRiQZzt1fqYVMQq__GBexo7YUZFPhd8aKp1KXb0AV3UiF_Xb3zAyQOC8d9Y5o9rRZ0n9N8WpNWPALC8JQYfIjnKiygsQDDv1kgJUPWKB0DA2&amp;t=636835018320000000" media="all"><link rel="stylesheet" href="/WebResource.axd?d=w64DWl_xQbTzjcf7oSv_LevFuAsDneBRv9t4FjoNyJ8pH0vIdSTQ1XYRQF4-h9RDhXSUXmFTSXwwebheFgL8sF6sIUrloOxtb7VonzHvTjHe_itfuYU-jnWNhcx1ZMhIJl1eHZAhnB2I6YOYMakHSQ2&amp;t=636835018320000000" media="all"></head><body marginwidth="0" marginheight="0"><p class="MsoNormal" style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;"><b><u>IMPORTANT NOTES, TERMS &amp; CONDITION</u></b><br><span style="font-size: 10pt;"><o:p></o:p></span></p><p class="MsoNormal" style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;"><b><span style="font-size: 10pt;">1.</span></b><span style="font-size: 10pt;">&nbsp;</span>Material condition – Stock Arising, “AS-IS-WHERE-IS&amp; NO-COMPLAINT” basis<span style="font-size: 10pt;"><o:p></o:p></span></p><p class="MsoNormal" style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;"><b>2.</b>&nbsp;We reserve the rights to cancel any approved lots/delivery order without assigning any reason whatsoever we reserve the right to partially or totally accept or reject any/all bids placed in the online auction without assigning any reason whatsoever. &nbsp;&nbsp;&nbsp;&nbsp;The decision of WE would be final and binding on the bidder in any such cases&nbsp;&nbsp;<span style="font-size: 10pt;"><o:p></o:p></span></p><p class="MsoNormal" style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;"><b><span style="font-size: 10pt;">3.&nbsp;</span></b><b><u>PAYMENT RULES</u></b><b><span style="font-size: 10pt;"><o:p></o:p></span></b></p><ul type="disc" style="font-size: 13.3333px; text-align: justify;"><li class="MsoNormal" style="margin-right: -51.95pt; line-height: normal;">Minimum5% of your accepted bid value to be paid as security deposit within<span style="font-weight: bold;">&nbsp;</span><span style="color: red;">2 working days of the bid acceptance which will be adjusted against your last lifting of the respective lot</span><span style="font-size: 10pt;"><o:p></o:p></span></li><li class="MsoNormal" style="margin-right: -51.95pt; line-height: normal;"><span style="color: red;">Stock quantity material payment to be deposited within&nbsp;2 working days of acceptance of your bid</span><span style="font-size: 10pt;"><o:p></o:p></span></li><li class="MsoNormal" style="margin-right: -51.95pt; line-height: normal;"><span style="color: red;">Arising quantity payment to be made as per arising basis within&nbsp;3 working days from the date of intimation of stock availability.</span><span style="font-size: 10pt;"><o:p></o:p></span></li></ul><p class="MsoNormal" style="font-size: 13.3333px; margin-bottom: 0.0001pt; line-height: normal;"><b><span style="font-size: 10pt;">4.&nbsp;</span></b><b>Lifting&nbsp; Rules –</b>No Guarantee for full truck load quantity<br><br>5.&nbsp;<b><u>Last date of lifting –</u></b><span style="font-size: 12pt; font-family: times new roman, serif;"><o:p></o:p></span></p><ul type="disc" style="font-size: 13.3333px;"><li class="MsoNormal" style="line-height: normal;"><span style="font-size: 10pt;">Last date of lifting for Stock Quantity is&nbsp;</span><b><span style="font-size: 10pt; color: red;">4 working days from the date of approval for stock material</span></b><span style="font-size: 10pt;"><o:p></o:p></span></li><li class="MsoNormal" style="line-height: normal;"><b><span style="font-size: 10pt; color: #330033;">Full material to be lifted within 20 days from the acceptance of your bid</span></b><span style="font-size: 10pt;"><o:p></o:p></span></li><li class="MsoNormal" style="line-height: normal;"><b><span style="font-size: 10pt; color: #330033;">Due to any reason if customer fails to complete the entire lifting within stipulated timeline then the</span></b><b><span style="font-size: 10pt; color: red;">&nbsp;10% amount paid by you will be forfeited and customer may be debarred from participating in all future auctions</span></b><span style="font-size: 10pt;"><o:p></o:p></span></li></ul><p class="MsoNormal" style="font-size: 13.3333px; margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 10pt;">6.&nbsp;</span>Any dispute on quality of material and bid cancellation shall not be entertained at any point after the auction<br><br>8.&nbsp;The terms &amp; condition contained in this mail may be changed without any prior notice<br><br><br><span style="font-size: 12pt; font-family: times new roman, serif;"><o:p></o:p></span></p><p class="MsoNormal" align="center" style="font-size: 13.3333px; margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><b><u>METHODOLOGYFOR ALLOCATION OF QUANTITY</u></b><span style="font-size: 10pt;"><br><br><o:p></o:p></span></p><ul type="disc" style="font-size: 13.3333px;"><li class="MsoNormal" style="line-height: normal;"><span style="font-size: 10pt;">First preference is given to highest bid price<o:p></o:p></span></li><li class="MsoNormal" style="line-height: normal;"><span style="font-size: 10pt;">If two or more parties bid the same price then preference for allocation is given to party that placed the bid for a higher quantity<o:p></o:p></span></li><li class="MsoNormal" style="line-height: normal;"><span style="font-size: 10pt;">In case two or more parties bid the same price and quantity, then preference Is given to the party that placed the bid earlier<o:p></o:p></span></li></ul><p class="MsoNormal" style="font-size: 13.3333px;"><o:p>&nbsp;</o:p></p></body></html>');


define('EMAIL_FORMAT', '<html><head><link rel="stylesheet" href="/WebResource.axd?d=zDG4DrYCo6eKgnyr7ZcBHEUpAVE8XMVQc1CuWqxmXi6bRiQZzt1fqYVMQq__GBexo7YUZFPhd8aKp1KXb0AV3UiF_Xb3zAyQOC8d9Y5o9rRZ0n9N8WpNWPALC8JQYfIjnKiygsQDDv1kgJUPWKB0DA2&amp;t=636835018320000000" media="all"><link rel="stylesheet" href="/WebResource.axd?d=w64DWl_xQbTzjcf7oSv_LevFuAsDneBRv9t4FjoNyJ8pH0vIdSTQ1XYRQF4-h9RDhXSUXmFTSXwwebheFgL8sF6sIUrloOxtb7VonzHvTjHe_itfuYU-jnWNhcx1ZMhIJl1eHZAhnB2I6YOYMakHSQ2&amp;t=636835018320000000" media="all"></head><body marginwidth="0" marginheight="0"><p class="MsoNormal"><span style="font-family: arial, helvetica, sans-serif;">Dear {vendor_name},</span><o:p></o:p></p>  <p class="MsoNormal"><span style="font-family: arial, helvetica, sans-serif;">We are writing to invite you to participate in an upcoming reverse auction event that we are organizing. We believe that your products andservices would be a great addition to the auction, and we are excited to have you as a potential vendor.</span><o:p></o:p></p>  <p class="MsoNormal"><span style="font-family: arial, helvetica, sans-serif;">The auction event will be held on {opening_date} at {opening_time}, and it will attract a large number of vendors who are interested to sell their items at reasonable price. As a vendor, you will have the opportunity to sell your products to us .</span><o:p></o:p></p>  <p class="MsoNormal"><b><u><span style="font-family: arial, helvetica, sans-serif;">Auction Detail: </span><o:p></o:p></u></b></p>  <p class="MsoNormal"><b><span style="font-family: arial, helvetica, sans-serif;">Opening Date &amp; Time (IST): {opening_date} {opening_time}</span></b></p><p class="MsoNormal"><b style="font-size: 13.3333px;"><span style="font-family: arial, helvetica, sans-serif;">Closing Date &amp; Time (IST): {closing_date} {closing_time}</span></b></p>  <p class="MsoNormal"><b><span style="font-family: arial, helvetica, sans-serif;">Event ID: {event_id}</span></b></p>  <p class="MsoNormal"><b><span style="font-family: arial, helvetica, sans-serif;">Event Title : {event_title}</span></b></p>  <p class="MsoNormal"><span style="font-family: arial, helvetica, sans-serif;">To participate in the auction, please review the attachedvendor application and return it to us by [deadline]. Once we receive yourapplication, we will review it and confirm your participation in the event.</span><o:p></o:p></p>  <p class="MsoNormal"><span style="font-family: arial, helvetica, sans-serif;">If you have any questions or concerns regarding the auctionevent or the vendor application, please do not hesitate to contact us. We arehappy to provide any additional information that you may need.</span><o:p></o:p></p>  <p class="MsoNormal"><span style="font-family: arial, helvetica, sans-serif;">Thank you for your consideration, and we look forward toyour participation in the auction event.</span><o:p></o:p></p><span style="font-size: 13.3333px;"><br style="font-size: 13.3333px;">  <span style="font-family: arial, helvetica, sans-serif;">...</span></span><br style="font-size: 13.3333px;">  <span style="font-size: 8pt; font-family: arial, helvetica, sans-serif;">Thanks &amp; Regards,</span><br style="font-size: 13.3333px;">  <span style="font-weight: bold; font-size: 8pt;"><span style="font-family: arial, helvetica, sans-serif;">MKP IT Solutions</span><br>  </span><img width="96" height="18" src="https://ci3.googleusercontent.com/mail-sig/AIorK4whLRrBVZSvxFm4lZYN7iZpyl_X3kpj0-eJbm2A3Ofv154jBMPTUVIBLe9RtevXu-jUyq5BcYY" class="CToWUd" data-bit="iit" style="color: #888888; font-family: arial, helvetica, sans-serif; font-size: small;"><span style="font-weight: bold; font-size: 8pt;"><br>  </span><span style="font-size: 8pt; font-family: arial, helvetica, sans-serif;">Ph: +91-9069042XX, 8178XXXXXX<br>  Email: info@mkpitxxxx.com</span></body></html>');
