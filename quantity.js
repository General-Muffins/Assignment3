window.onload = function(){
		var $plusbutton = document.querySelector('.plus');
		var $minusbutton = document.querySelector('.minus');
		var $counter = document.querySelector('.counter');

		$plusbutton.addEventListener('click', function(){
			$counter.value = parseInt($counter.value) + 1; // `parseInt` converts the `value` from a string to a number
		}, false);
		
		$minusbutton.addEventListener('click', function(){
			$counter.value = parseInt($counter.value) - 1; // `parseInt` converts the `value` from a string to a number
			if($counter.value<0){$counter.value=0;}
		}, false);

		var $plusbutton = document.querySelector('.plus1');
		var $minusbutton = document.querySelector('.minus1');
		var $counter1 = document.querySelector('.counter1');

		$plusbutton.addEventListener('click', function(){
			$counter1.value = parseInt($counter1.value) + 1; // `parseInt` converts the `value` from a string to a number
		}, false);
		
		$minusbutton.addEventListener('click', function(){
			$counter1.value = parseInt($counter1.value) - 1; // `parseInt` converts the `value` from a string to a number
			if($counter1.value<0){$counter1.value=0;}
		}, false);

		var $plusbutton = document.querySelector('.plus2');
		var $minusbutton = document.querySelector('.minus2');
		var $counter2 = document.querySelector('.counter2');

		$plusbutton.addEventListener('click', function(){
			$counter2.value = parseInt($counter2.value) + 1; // `parseInt` converts the `value` from a string to a number
		}, false);
		
		$minusbutton.addEventListener('click', function(){
			$counter2.value = parseInt($counter2.value) - 1; // `parseInt` converts the `value` from a string to a number
			if($counter2.value<0){$counter2.value=0;}
		}, false);

		var $plusbutton = document.querySelector('.plus3');
		var $minusbutton = document.querySelector('.minus3');
		var $counter3 = document.querySelector('.counter3');

		$plusbutton.addEventListener('click', function(){
			$counter3.value = parseInt($counter3.value) + 1; // `parseInt` converts the `value` from a string to a number
		}, false);
		
		$minusbutton.addEventListener('click', function(){
			$counter3.value = parseInt($counter3.value) - 1; // `parseInt` converts the `value` from a string to a number
			if($counter3.value<0){$counter3.value=0;}
		}, false);

		var $plusbutton = document.querySelector('.plus4');
		var $minusbutton = document.querySelector('.minus4');
		var $counter4 = document.querySelector('.counter4');

		$plusbutton.addEventListener('click', function(){
			$counter4.value = parseInt($counter4.value) + 1; // `parseInt` converts the `value` from a string to a number
		}, false);
		
		$minusbutton.addEventListener('click', function(){
			$counter4.value = parseInt($counter4.value) - 1; // `parseInt` converts the `value` from a string to a number
			if($counter4.value<0){$counter4.value=0;}
		}, false);
}
