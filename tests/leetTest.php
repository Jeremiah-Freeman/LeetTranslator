 <?php
 require_once "src/leet.php";

 class LeetTest extends PHPUnit_Framework_TestCase
    {
        function test_Leetify_Anything()
        {
            $test_Leetify = new Leet;
            $input = "H";

            $result = $test_Leetify->Leetify($input);

            $this->assertEquals("H" , $result);
        }

        function test_Leetify_Es()
        {
            $test_Leetify = new Leet;
            $input = "He";

            $result = $test_Leetify->Leetify($input);

            $this->assertEquals("H3" , $result);
        }

        function test_Leetify_Os()
        {
            $test_Leetify = new Leet;
            $input = "Heo";

            $result = $test_Leetify->Leetify($input);

            $this->assertEquals("H30" , $result);
        }

        function test_Leetify_Is()
        {
            $test_Leetify = new Leet;
            $input = "HI";

            $result = $test_Leetify->Leetify($input);

            $this->assertEquals("H1" , $result);
        }

        function test_Leetify_Sz()
        {
            $test_Leetify = new Leet;
            $input = "ss";

            $result = $test_Leetify->Leetify($input);

            $this->assertEquals("sz" , $result);
        }




    }




  ?>
