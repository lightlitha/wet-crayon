<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Epiqworx\Concrete;

/**
 * Description of log
 *
 * @author math
 */
class Log {
    /**
     * Path to Log Folder.
     * NB: Make Sure That Write Permissions are on. 
     * @var string
     */
    private $path = 'epiqworx/logs/';
    /**
     * Sets Time Zone on Instantiation 
     */
    function __construct() {
        date_default_timezone_set('Africa/Johannesburg');
        $this->path =  dirname(dirname(__FILE__)) . $this->path;
    }
    /**
     * 	Creates the log
     *
     *   @param string $message the message which is written into the log.
     * 	@description:
     * 	 1. Checks if directory exists, if not, create one and call this method again.
     * 	 2. Checks if log already exists.
     * 	 3. If not, new log gets created. Log is written into the logs folder.
     * 	 4. Logname is current date(Year - Month - Day).
     * 	 5. If log exists, edit method called.
     * 	 6. Edit method modifies the current log.
     */
    public function write($message) {
        $date = new \DateTime();
        $log = $this->path . $date->format('Y-m-d') . ".md";

        if (is_dir($this->path)) {
            if (!file_exists($log)) {
                $fh = fopen($log, 'a+') or die("Fatal Error !");
                $logcontent = "Time : " . $date->format('H:i:s') . "\r\n" . $message . "\r\n";
                fwrite($fh, $logcontent);
                fclose($fh);
            } else {
                $this->edit($log, $date, $message);
            }
        } else {
            if (mkdir($this->path, 0777) === true) {
                $this->write($message);
            }
        }
    }

    /**
     *  Gets called if log exists. 
     *  Modifies current log and adds the message to the log.
     *
     * @param string $log
     * @param DateTimeObject $date
     * @param string $message
     */
    private function edit($log, $date, $message) {
        $logcontent = "Time : " . $date->format('H:i:s') . "\r\n" . $message . "\r\n\r\n";
        $logcontent = $logcontent . file_get_contents($log);
        file_put_contents($log, $logcontent);
    }
}

?>