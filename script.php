<?php
/************************************************************************
 * This file is part of Count Down (http://scripts.friendsinwar.com).	*
 *																		*
 * Count Down is free software: you can redistribute it and/or modify	*
 * it under the terms of the GNU General Public License as published by	*
 * the Free Software Foundation, either version 3 of the License, or	*
 * (at your option) any later version.									*
 *																		*
 * Count Down is distributed in the hope that it will be useful,		*
 * but WITHOUT ANY WARRANTY; without even the implied warranty of		*
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the		*
 * GNU General Public License for more details.							*
 *																		*
 * You should have received a copy of the GNU General Public License	*
 * along with Count Down.  If not, see <http://www.gnu.org/licenses>.	*
 ************************************************************************/

//Set your date and time below.
$date = "2014-08-21 20:31:00";

//============================
//============================

//Do not edit things below, unless you know what you are doing.
$rem = strtotime($date) - time();
$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);
echo "Please visit after ";
if($day) echo "$day Day ";
if($hr) echo "$hr Hours ";
if($min) echo "$min Minutes ";
if($sec) echo "$sec Seconds ";
echo "...";
?>