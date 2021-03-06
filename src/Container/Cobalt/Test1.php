<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\Cobalt;

use DiContainerBenchmarks\Fixture\Class10;

class Test1 extends AbstractCobaltTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->resolve(Class10::class);
    }
}
