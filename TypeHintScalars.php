<?php

    // Scalar type hinting is now supported but It's optional.

    // To prevent auto conversions use
    //declare (strict_types = 1);
    
    function setAge(int $age)
    {
        # code...
        var_dump($age);
    }

    setAge('30'); // However this will not throw an error as PHP will try to convert the given argument into the parameter type.


 ?>
