<?php

/**
 *
 */
class Filemod extends \Epiqworx\Concrete\Controller {

    function uploadPowerPoint($option) {
        $this->setBlueprint('welcome');
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $type = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $extension = substr($name, strpos($name, '.') + 1);
        $max_size = 20000000;
        if (isset($name) && !empty($name)) {
            if (($extension == "ppt" || $extension == "pptx") && $extension == $size <= $max_size) {
                $location = WEBUSR . "storage/admin/";
                $mime = mime_content_type($location.$tmp_name);
                if (move_uploaded_file($tmp_name, $location . $name)) {
                    $loc = "";
                    \Epiqworx\Abstraction\DBHandler::DMLi("INSERT INTO wc_file (member, name, extension, location, created, modified, flag, fsize) VALUES (1, '$name', '$extension', '$loc', NOW(), NOW(), 1, '$size')");
                    $this->setFields("smsg", "Uploaded Successfully.");
                } else {
                    $this->setFields("fmsg", "Failed to Upload File");
                }
            } else {
                $this->setFields("fmsg", "Failed to Upload File. File size too big. (Maximum 20M)");
            }
        } else {
            $this->setFields("fmsg", "Please Upload a PowerPoint Presentation File");
        }
        $this->setFields("req_ano", 'section/' . $option . '.php');
        $this->render();
    }

    function trashFile($option) {
        \Epiqworx\Abstraction\DBHandler::DMLi("UPDATE wc_file SET active = 2 WHERE id = $option");
        echo "<script> window.location.href = '?/Welcome/summon/home'; </script>";
    }

    function restoreFile($option) {
        \Epiqworx\Abstraction\DBHandler::DMLi("UPDATE wc_file SET active = 1 WHERE id = $option");
        echo "<script> window.location.href = '?/Welcome/summon/trash&trash=1'; </script>";
    }

    function updateFile($option) {
        $result = \Epiqworx\Abstraction\DBHandler::DQLqi("SELECT location, name FROM wc_file WHERE member = 1 AND active = 1 AND id = $option");
        $file = WEBUSR . 'storage/admin/' . $result['location'] . $result['name'];
        if (file_exists($file)) {
            $filename = htmlspecialchars($_POST['filename']) . '.' . htmlspecialchars($_POST['ext']);
            $colorflag = htmlspecialchars($_POST['colorflag']);
            rename($file, WEBUSR . 'storage/admin/' . $filename) or die("File renaming unsuccessful");
            \Epiqworx\Abstraction\DBHandler::DMLi("UPDATE wc_file SET name = '$filename', flag = $colorflag, modified = NOW() WHERE id = $option");
            echo "<script> window.location.href = '?/Welcome/summon/home'; </script>";
        } else {
            die("File does not exist unsuccessful renaming");
        }
    }

    function downloadFile($option) {
        $result = \Epiqworx\Abstraction\DBHandler::DQLqi("SELECT location, name FROM wc_file WHERE member = 1 AND active = 1 AND id = $option");
        $file = WEBUSR . 'storage/admin/' . $result['location'] . $result['name'];
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        } else {
            die('Error: The file ' . $local_file . ' does not exist!');
        }
    }

}

?>
