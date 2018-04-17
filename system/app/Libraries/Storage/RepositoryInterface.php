<?php
/**
 * Created by PhpStorm.
 * User: Kribin
 * Date: 4/11/2018
 * Time: 12:39 PM
 */

namespace App\Libraries\Storage;


interface RepositoryInterface
{
    public function all();
    public function add();
    public function save();
    public function edit();
    public function update();
    public function delete();

}