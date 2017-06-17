<?php
class TodayDate{
		public function __construct()
		{
			
			$month[1] = "Января";
			$month[2] = "Февраля";
			$month[3] = "Марта";
			$month[4] = "Апреля";
			$month[5] = "Мая";
			$month[6] = "Июня";
			$month[7] = "Июля";
			$month[8] = "Августа";
			$month[9] = "Сентября";
			$month[10] = "Октября";
			$month[11] = "Ноября";
			$month[12] = "Декабря";
			
			$day[0]= "Воскресение";
			$day[1] = "Понедельник";
			$day[2] = "Вторник";
			$day[3] = "Среда";
			$day[4] = "Четверг";
			$day[5] = "Пятница";
			$day[6] = "Суббота";
			
			$todayMonth = $month[date("n")];
			$todayDay = $day[date("w")];
			
			echo "<p>Сегодня ".$todayDay.", ".date("d");
			echo " ".$todayMonth;
			echo " ".date("Y");
			echo " года</p>";

		}
}
	

