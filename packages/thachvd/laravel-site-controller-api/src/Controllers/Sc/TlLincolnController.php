<?php

namespace App\Http\Controllers\Sc;

use App\Http\Controllers\Controller;
use App\Models\ScTlLincolnSoapApiLog;
use App\Services\Sc\TlLincoln\TlLincolnService;
use App\Services\Sc\TlLincoln\TlLincolnSoapBody;
use App\Services\Sc\TlLincoln\TlLincolnSoapClient;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 *
 */
class TlLincolnController extends Controller
{
    /**
     * @var TlLincolnService
     */
    protected $tlLincolnService;

    /**
     * @param TlLincolnSoapClient $tLLincolnSoapClient
     * @param TlLincolnSoapBody $tlLincolnSoapBody
     */
    public function __construct(TlLincolnService $tlLincolnService)
    {
        $this->tlLincolnService = $tlLincolnService;
    }

    /**
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse|void
     */
    public function getEmptyRoom(Request $request)
    {
        // example request
        // tllHotelCode: C77338
        // tllRmTypeCode: 482
        // date_from: 20250111
        // date_to: 20250112
        // person_number: 1
        return $this->tlLincolnService->getEmptyRoom($request);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBulkEmptyRoom(Request $request)
    {
        // example request
        // tllHotelCode: C77338
        // tllRmTypeCode: 482
        return $this->tlLincolnService->getBulkEmptyRoom($request);
    }

    /**
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getPricePlan(Request $request)
    {
        // example request
        // tllHotelCode: C77338
        // tllPlanCode: 15303611
        // tllRmTypeCode: 482
        // person_number: 1
        // date_from: 20250117
        // date_to: 20250118
        return $this->tlLincolnService->getPricePlan($request);
    }
}
