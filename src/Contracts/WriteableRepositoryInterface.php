<?php namespace Pare\Repository\Contracts;

/**
 * Interface WriteableRepositoryInterface
 * @package Pare\Repository\Contracts
 */
interface WriteableRepositoryInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param array $data
     * @return bool
     */
    public function saveModel(array $data);

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute = "id");

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
