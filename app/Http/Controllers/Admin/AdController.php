<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdInterface;
use App\Http\Requests\Admin\StoreAdRequest;
use App\Http\Requests\Admin\UpdateAdRequest;
use App\Models\Ad;

class AdController extends Controller
{
    private $adInterface;
    public function __construct(AdInterface $ad)
    {
        $this->adInterface = $ad;
    }

    public function index()
    {
        return $this->adInterface->index();
    }
    public function create()
    {
        return $this->adInterface->create();
    }
    public function store(StoreAdRequest $request)
    {
        return $this->adInterface->store($request);
    }
    public function edit(Ad $ad)
    {
        return $this->adInterface->edit($ad);
    }
    public function update(Ad $ad, UpdateAdRequest $request)
    {
        return $this->adInterface->update($ad, $request);
    }
    public function delete(Ad $ad)
    {
        return $this->adInterface->delete($ad);
    }
}
