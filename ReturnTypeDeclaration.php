<?php

    // You can specify return type of a method. It's optional.
    // Any errors will be caught on the run time.
    // Best to use with the interfaces if you're expecting a method to return specific type.

    /**
     *
     */
    class User {}

    /**
     *
     */
    interface SomeInterface
    {
        public function getUser() : User;
    }

    /**
     *
     */
    class SomeClass implements SomeInterface
    {

        public function getUser() : User
        {
            # code...
            return new User;
        }
    }

    (new SomeClass)->getUser();






 ?>
