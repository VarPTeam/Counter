<?php

    $file = 'fileCounter/countView_file.txt';
        if (file_exists($file)) 
        {
                $fil = fopen($file, r);
                $dat = fread($fil, filesize($file)); 
                fclose($fil);
                $fil = fopen($file, w);
                fwrite($fil, $dat+1);
        }

        else
        {
                $fil = fopen($file, w);
                fwrite($fil, 1);
                $dat = fread($fil, filesize($file));
                fclose($fil);
        }