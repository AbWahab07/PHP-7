<?php

    // Can now use Anonymous classes

    /**
     *
     */
    interface Logger
    {
        # code...
        public function log($msg);
    }

    /**
     *
     */
    // class DbLogger implements Logger
    // {
    //     public function log($msg)
    //     {
    //         echo "{$msg}";
    //     }
    // }


    /**
     *
     */
    class Application
    {
        protected $logger;

        function __construct(Logger $logger)
        {
            $this->logger = $logger;
        }

        public function execute()
        {
            # code...
            $this->logger->log('Doing things');
        }

    }

    //$dbLogger = new DbLogger;
    //$app = new Application($dbLogger);
    $app = new Application(new class implements Logger {
        public function log($msg)
        {
            echo "{$msg}";
        }
    });
    $app->execute();

 ?>
