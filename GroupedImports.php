<?php
    // Earlier
    use App\People;
    use App\Animal;
    use App\Foo\Bar\Baz;

    // Now in php 7
    use App\{
        People,
        Animal,
        Foo\Bar\Baz
    };
 ?>
