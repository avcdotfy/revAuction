<?php

define('USER_TYPES', ['ADMIN',  'VENDOR']);

define('ADMIN_SIDE', 'Admin Side');
define('VENDOR_SIDE', 'Vendor Side');
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
