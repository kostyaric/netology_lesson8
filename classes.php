<?php
/************Теоретическая часть***************/
/*
1. Инкапсуляция.
Это объединенные внутри класса свойства и методы.
Они невидимы снаружи класса.
Понятие инкапсуляции неразрывно связано с программным интерфейсом.
По сути все что не входит в программный интерфейс инкапсулировано внутри класса.

2. Плюсы и минусы объектов
1) Плюсы
- Делают код более компактным.
- Повышают читабельность кода
- Масштабирумость кода - проще добавить новый функционал.
- При процедурном программировании бывает трудно понять какие процедуры используются совместно в одной связке. А в ООП процедуры и функции инкапсулируются внутри класса.
- Объекты достаточно легко воспринимаются мозгом человека, т.к. есть аналоги в окружающем мире со своими свойствами и наборми возможных действий
- Объекты ограничивают полет фантазии разработчика впервые столкнувшегося с ними, что снижает вероятность возникновения ошибок и задает единый стиль разработки в рамках команды

2) Минусы
- В процессе разработки могут возникать достаточно большие иерархии классов в котороых методы размазаны по разным классам. Соответственно трудности при отладке.
- Какие-то простейшие функции возможно лучше реализовывать в процедурном стиле.
- Возможно некоторое снижение производительности.
*/

/************Практическая часть***************/

/* Машина */
class Car
{
	
	private $color;
	private $brand;

	public function __construct($brand, $color)
	{

		$this -> color = $color;
		$this -> brand = $brand;

	}

	public function pressGasPedal()
	{
		echo 'Нажата педаль газа <br>';
	}

	public function pressBrakePedal()
	{
		echo 'Нажата педаль тормоза <br>';
	}

	public function turnWheelRight()
	{
		echo 'Повернули руль вправо <br>';
	}

	public function turnWheelLeft()
	{
		echo 'Повернули руль влево <br>';
	}

	public function tellMeAbout()
	{
		echo 'Марка машины: ' . $this -> brand . '<br>';
		echo 'Цвет машины: ' . $this -> color . '<br>';
	}

}

$toyota = new Car('Тойота', 'Белый');
$toyota -> tellMeAbout();
$toyota -> pressGasPedal();
$toyota -> turnWheelLeft();
$toyota -> turnWheelRight();
$toyota -> pressBrakePedal();

$jiguly = new Car('Жигули', 'Красный');
$jiguly -> tellMeAbout();

/* Телевизор */
echo '<br>';

class TV
{
	
	public $chanel_number;
	private $brand;

	public function __construct($brand)
	{
		$this -> brand = $brand;
		$this -> power = false;
	}

	public function pressPowerButton()
	{
		$this -> power = !$this -> power;

		if ($this -> power) {
			echo 'Телевизор ' . $this -> brand . ' включен.<br>';
		}
		else {
			echo 'Телевизор ' . $this -> brand . 'выключен.<br>';
		}
	}

	public function setChanelNumber($number)
	{
		$this -> chanel_number = $number;
		echo 'Включен канал №' . $this -> chanel_number . '<br>';
	}

}

$sony = new TV('sony');
$sony -> pressPowerButton();
$sony -> setChanelNumber(5);
$sony -> pressPowerButton();

$sony = new TV('philips');
$sony -> pressPowerButton();
$sony -> pressPowerButton();


/* Шариковая ручка */
echo '<br>';

class Pen
{
	
	private $ink_color;

	public function __construct($color)
	{
		$this -> ink_color = $color;
	}

	public function drawFigure($figure)
	{
		echo 'Нарисован ' . $this -> ink_color . ' ' . $figure . '<br>';
	}

}

$redPen = new Pen('Красный');
$redPen -> drawFigure('Квадрат');

$greenPen = new Pen('Зеленый');
$greenPen -> drawFigure('Круг');


/* Утка */
echo '<br>';
class Duck
{
	private $name;
	
	public function __construct($name)
	{
		$this -> name = $name;
	}

	public function duckFly()
	{
		echo 'Утка ' . $this -> name . ' летит<br>';
	}

	public function duckSweem()
	{
		echo 'Утка ' . $this -> name .  ' плывет<br>';
	}

}

$Vasya = new Duck('Вася');
$Vasya -> duckFly();

$Dusya = new Duck('Дуся');
$Dusya -> duckSweem();


/* Товар */
echo '<br>';
class Product
{
	private $name;
	private $price;
	public $count;

	public function __construct($name, $price)
	{
		$this -> name = $name;
		$this -> price = $price;
	}

	public function buyProduct($count)
	{
		echo 'Вы купили ' . $this -> name . ' в количестве ' . $count . '' . ' по цене ' . $this -> price . '<br>';
	}

}

$ball = new Product('Мяч', 100);
$ball -> buyProduct(2);

$cap = new Product('Кепка', 500);
$cap -> buyProduct(1);

?>