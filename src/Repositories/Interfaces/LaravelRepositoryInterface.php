<?php

namespace Pam\CleanStructure\Interfaces;

Interface LaravelRepositoryInterface
{
    public function all($conditions = []);

    public function paginate($per_page = 15, $conditions = []);

    public function create(array $attributes);

    public function get($id, $conditions = []);

    public function update($id, array $attributes, $conditions = []);

    public function delete($id, $conditions = []);
}
