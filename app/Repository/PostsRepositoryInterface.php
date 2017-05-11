<?php

namespace app\Repository;


use Illuminate\Http\Request;
use URL;

interface PostsRepositoryInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param Request $request
     * @return mixed
     */
    public function getAll(Request $request);

    /**
     * @param $request
     * @param $charge
     * @return mixed
     */
    public function create($request, $charge);

    /**
     * @param $request
     * @return mixed
     */
    public function edit($request);
}
