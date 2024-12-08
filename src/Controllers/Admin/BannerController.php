<?php

namespace RazenModule\Banner\Controllers\Admin;

use Illuminate\Http\Request;
use Inertia\Response;
use Razen\Banner\Controllers\Controller;
use Razen\Banner\Request\Admin\StoreBannerRequest;
use Razen\Banner\Request\Admin\UpdateBannerRequest;
use Razen\Banner\Services\Admin\BannerServices;
use Razen\Models\Banner;

class BannerController extends Controller
{
    protected $bannerService;

    public function __construct(BannerServices $bannerService){
        $this->bannerService = $bannerService;
    }
    
    /**
     * Display list data banner
     */
    public function index() {
        dd('index banner dari controller module razen');
    }

    /**
     * Handle add data banner
     */
    public function store(StoreBannerRequest $request) {
        dd('store banner dari controller module razen');
    }

    /**
     * Handle update data banner
     */
    public function update(UpdateBannerRequest $request, Banner $banner) {
        dd('update banner dari controller module razen');
    }

    /**
     * Handle delete data banner
     */
    public function destroy(Banner $banner) {
        dd('delete banner dari controller module razen');
    }
}
