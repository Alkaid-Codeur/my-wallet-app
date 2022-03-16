<?php

function moneyFormat(int $target) {
	return number_format($target, 0 , '' , ' ');
}