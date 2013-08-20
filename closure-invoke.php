<?php

class ExampleClass
{
	protected $closure;

	public function __construct(Closure $closure)
	{
		$this->closure = $closure;
	}

	public function Exec($param)
	{
		return $this->closure->__invoke($param);
	}
}

$example = new ExampleClass(function($param)
{
	return strtoupper($param);
});

echo $example->Exec("Hello World");