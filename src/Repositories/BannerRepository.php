<?php

namespace Razen\Banner\Repositories;

use Razen\Banner\Repositories\Interfaces\BannerRepositoryInterface;
use Razen\Models\Banner;

class BannerRepository implements BannerRepositoryInterface
{
    /**
     * Get all banners.
     *
     */
    public function all()
    {
        return Banner::all();
    }

    /**
     * Find a banner by its ID.
     *
     * @param  int  $id
     */
    public function find($id)
    {
        return Banner::find($id);
    }

    /**
     * Create a new banner.
     *
     * @param  array  $data
     */
    public function create(array $data)
    {
        return Banner::create($data);
    }

    /**
     * Update a banner by its ID.
     *
     * @param  int  $id
     * @param  array  $data
     */
    public function update($id, array $data)
    {
        $banner = Banner::find($id);
        $banner->update($data);
        return $banner;
    }

    /**
     * Delete a banner by its ID.
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        return Banner::destroy($id);
    }
}
