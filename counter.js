
//Get the Div with Class Counter (Its gonna return a nodelist)
const counters = document.querySelectorAll('.counter');

const speed = 1000;

//Loop through Counter Nodelist
counters.forEach(counter => {
	const updateCount = () =>{
		//Get Target of Counter
		const target = +counter.getAttribute('data-target');


		//Show Target in Console
		// console.log( typeof target);


		//Get Actual Count
		const count = +counter.innerText;


		//Get Increment
		const inc = target / speed;


		//Count Up and implement counter
		//Let count Stop as soon as it gets to target
		if(count < target){
			counter.innerText = Math.ceil(count + inc);

			//SettimeOut
			setTimeout(updateCount, 2);

		}else{
			count.innerText = target;
		}


	}


	updateCount();
})