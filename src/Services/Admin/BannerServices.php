<?php

namespace Razen\Banner\Services\Admin;

use Illuminate\Support\Facades\Storage;
use Razen\Banner\Repositories\Interfaces\BannerRepositoryInterface;

class BannerServices
{
    protected $bannerRepository;

    public function __construct(BannerRepositoryInterface $bannerRepository){
        $this->bannerRepository = $bannerRepository;
    }

    /**
     * Get all data banner
     */
    public function getAllCategories($status = null) {
        dd('get all banner dari services module razen');
    }

    /**
     * Logic to create data banner
     */
    public function createBanner(array $data) {
        dd('cretae banner dari services module razen');
    }

    /**
     * Logic to update data banner
     */
    public function updateBanner($id, array $data, $oldImage) {
        dd('update banner dari services module razen');
    }

    /**
     * Logic to delete data banner
     */
    public function deleteBanner($id, $image) {
        dd('delete banner dari services module razen');
    }
}
