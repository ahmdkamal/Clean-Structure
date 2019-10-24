<?php

namespace Pam\CleanStructure\Services\Interfaces;

Interface LaravelServiceInterface {

    public function index();

    public function create();

    public function store();

    public function edit($id);

    public function update($id);

    public function delete($id);
}
