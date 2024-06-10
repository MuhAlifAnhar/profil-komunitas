<?php

class Undipa{
    public static $agama = ['islam', 'kristen', 'hindu'];
    private static $total = 0;

    public static function orangMakassar(){
        return 'PHP adalah keren';
    }
    public static function orangJawa(){
        return self::$total;
    }
    public static function orangBugis(){
        return self::$total++;
    }

}
echo Undipa::$agama[2] . "<br />";
echo Undipa::orangMakassar() . "<br />";

echo Undipa::orangJawa() . "<br />";
Undipa::orangBugis();
echo Undipa::orangJawa() . "<br />";

class Dipa extends Undipa{

}
echo Dipa::$agama[1] . "<br />";
echo Dipa::orangMakassar() . "<br />";
Dipa::$agama[] ='isekai';
echo implode(', ', Undipa::$agama) . "<br />";

Undipa::orangBugis();
Undipa::orangBugis();
Dipa::orangBugis();
echo Undipa::orangJawa() . "<br />";
echo Dipa::orangJawa();

?>