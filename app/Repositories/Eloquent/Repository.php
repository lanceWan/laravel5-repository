<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\UserInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
abstract class Repository implements UserInterface{

    /*App容器*/
    protected $app;

    /*操作model*/
    protected $model;

    public function __construct(App $app) {
        $this->app = $app;
        $this->makeModel();
    }

    abstract function model();

    public function findBy($id)
    {
    	return $this->model->find($id);
    }
    

    public function makeModel(){
        $model = $this->app->make($this->model());
        /*是否是Model实例*/
        if (!$model instanceof Model){
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        $this->model = $model;
    }
}