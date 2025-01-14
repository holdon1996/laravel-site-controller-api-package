<?php

return [
    'tllincoln_api' => [
        'agt_id' => env('SC_TLLINCOLN_AGT_ID'),
        'agt_password' => env('SC_TLLINCOLN_AGT_PASSWORD'),
        'date_format' => 'Y-m-d',
        'time_format' => 'h:i:s',
        'get_empty_room_series_url' => env('SC_TLLINCOLN_URL_SOAP_API') . 'RoomAndPlanInquirySalesStsService',
        'get_empty_room_url' =>  env('SC_TLLINCOLN_URL_SOAP_API') . 'RoomAndPlanInquirySalesStsService',
        'get_plan_price_url' =>  env('SC_TLLINCOLN_URL_SOAP_API') . 'RoomAndPlanInquirySalesStsService',
        'get_plan_price_series_url' =>  env('SC_TLLINCOLN_URL_SOAP_API') . 'RoomAndPlanInquiryAnyUnitPriceSalesStsService',
        'check_pre_booking_url' =>  env('SC_TLLINCOLN_URL_SOAP_API') . 'ReservationControlService',
        'entry_booking_url' =>  env('SC_TLLINCOLN_URL_SOAP_API') . 'ReservationControlService',
        'cancel_booking_url' =>  env('SC_TLLINCOLN_URL_SOAP_API') . 'ReservationControlServiceWithCP',
        'command_cancel_booking' => env('SC_TLLINCOLN_URL_SOAP_API') . 'deleteBookingWithCP',
        'get_empty_room_max_day' => 30,
        'tllincoln_date_format_api' => 'Ymd',
        'system_format_time' => 'h:m:s',
        'empty_room_max_month' => 13,
        'naif_xml_version' => [
            'naif_3000' => 3000,
        ],
        'result_code_xml' => [
            'success' => 'True',
            'fail' => 'False',
        ],
        'mapping_plan_tllincoln' => 0,
        'not_mapping_plan_tllincoln' => 1,
        'sales_office_code_btob' => 1001, //TODO change
        'sales_office_code_fit' => 1002, //TODO change
        'sales_office_code_staynavi_local' => 1003, //TODO change
        'sales_office_name' => 'staynavi booking', //TODO change
        'sales_office_name_staynavi_local' => 'staynavi local', //TODO change
        'using_plan_tllincoln' => 0,
    ],
];
