<?php
    class Leet
    {
        function Leetify($something) {
            $split = str_split($something);
            for ($x = 0; $x < count($split); $x++){

                if (strtolower($split[$x]) === "e"){
                    $split[$x] = "3";
                }
                else if (strtolower($split[$x]) === "o"){
                    $split[$x] = "0";
                }
                else if ($split[$x] === "I"){
                    $split[$x] = "1";
                }

                if ($x !== 0 && $split[$x-1]!== " "){
                    if ($split[$x] === "s"){
                        $split[$x] = "z";
                    }
                    else if ($split[$x] === "S"){
                        $split[$x] = "Z";
                    }
                }

            }

            return join($split);
            }

    }

?>
