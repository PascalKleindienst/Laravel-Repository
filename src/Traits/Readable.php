<?php namespace Pare\Repository\Traits;

/**
 * Readable Trait
 * @package Pare\Repository\Traits
 */
trait Readable
{
    /**
     * @param array $columns
     * @return mixed
     */
    public function all(array $columns = ['*'])
    {
        $this->applyCriteria();
        return $this->model->get($columns);
    }

    /**
     * @param  string $value
     * @param  string $key
     * @return array
     */
    public function lists($value, $key = null)
    {
        $this->applyCriteria();
        $lists = $this->model->lists($value, $key);
        if (is_array($lists)) {
            return $lists;
        }
        return $lists->all();
    }

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, array $columns = ['*'])
    {
        $this->applyCriteria();
        return $this->model->find($id, $columns);
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, array $columns = ['*'])
    {
        $this->applyCriteria();
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findAllBy($attribute, $value, array $columns = ['*'])
    {
        $this->applyCriteria();
        return $this->model->where($attribute, '=', $value)->get($columns);
    }

    /**
     * Find a collection of models by the given query conditions.
     *
     * @param array $where
     * @param array $columns
     * @param bool  $useOr
     *
     * @return \Illuminate\Database\Eloquent\Collection|null
     */
    public function findWhere($where, array $columns = ['*'], $useOr = null)
    {
        $this->applyCriteria();
        $model  = $this->model;
        $method = (! $useOr) ? 'where' : 'orWhere';

        foreach ($where as $field => $value) {
            $operator = '=';
            $search   = $value;

            if ($value instanceof \Closure) {
                $model = $model->{$method}($value);
                continue;
            } elseif (is_array($value)) {
                if (count($value) === 3) {
                    list($field, $operator, $search) = $value;
                } elseif (count($value) === 2) {
                    list($field, $search) = $value;
                }
            }

            $model = $model->{$method}($field, $operator, $search);
        }

        return $model->get($columns);
    }
}
