<?php

interface Database
{
    public function insert();
}

class Mysql implements Database
{
    public function insert()
    {
        echo 'Mysql insert';
    }
}

class Oracle implements Database
{
    public function insert()
    {
        echo 'Oracle insert';
    }
}

class App
{
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function insertLog()
    {
        $this->database->insert();
    }
}

class Container
{
    protected $bind = [];

    /**
     * @param string $abstract 类标识、接口
     * @param string $concrete 要绑定的类
     */
    public function bind($abstract, $concrete)
    {
        $this->bind[$abstract] = $this->build($concrete);
    }

    public function make($abstract)
    {
        if (!isset($this->bind[$abstract])) {
            $this->bind($abstract, $abstract);
        }
        return $this->bind[$abstract];
    }

    //相当于之前的make方法
    public function build($abstract)
    {
        $reflect = new ReflectionClass($abstract);
        $constructor = $reflect->getConstructor();
        if (is_null($constructor)) {
            return $reflect->newInstance();
        }
        $instances = $this->getParameters($constructor);
        return $reflect->newInstanceArgs($instances);
    }

    protected function getParameters($constructor)
    {
        $parameters = $constructor->getParameters();
        $dependencies = [];
        foreach ($parameters as $parameter) {
            $dependencies[] = $this->make($parameter->getClass()->name);
        }
        return $dependencies;
    }
}

$container = new Container();
$container->bind('Database', 'Mysql');
$app = $container->make('App');
$app->insertLog();
