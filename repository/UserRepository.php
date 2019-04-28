<?php
namespace repository;

use model\User;
interface UserRepository{
    //Crud
    function save(User $user);
    function update(User $user);
    function findAll();
    function getOne($id);
    function deleteById($id);
    //Extra
    function newGetOne();
    function generateId();

}