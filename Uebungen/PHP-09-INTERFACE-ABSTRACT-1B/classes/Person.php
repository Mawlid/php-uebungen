<?php
abstract class aperson
{
    abstract protected function __construct($name,$age,$favcolor);
    abstract protected function getKommentar();
    public function doAge()
    {
        $this->age++;
    }
}
class Person extends aperson
{
    private $name;
    private $nickname;

    public $kommentar;
    protected $favcolor;
    protected $age;

    private static $anzahl_personen = 0;
    public static $anzahl_personenpublic = 0;

    public function __construct($name,$age,$favcolor)
    {
        $this->name = $name;
        $this->age = $age;
        $this->favcolor = $favcolor;
        self::$anzahl_personen++;
        self::$anzahl_personenpublic++;
    }

    public function doAge() {
        $this->age++;
    }

    /**
     * @return int
     */
    public static function getAnzahlPersonen(): int
    {
        return self::$anzahl_personen;
    }


    /**
     * @return mixed
     */
    public function getKommentar()
    {
        return $this->kommentar;
    }

    /**
     * @param mixed $kommentar
     */
    public function setKommentar($kommentar)
    {
        $this->kommentar = $kommentar;
    }

    public function addKommentar($kommentar)
    {
        $this->kommentar = $this->kommentar . "," . $kommentar;
    }

    /**
     * @return mixed
     */
    public function getFavcolor()
    {
        return $this->favcolor;
    }

    /**
     * @param mixed $favcolor
     */
    public function setFavcolor($favcolor)
    {
        $this->favcolor = $favcolor;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param mixed $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }



}