<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
	<!-- Set title of web page -->
	<title></title>
	<style>
						.button {
						display: inline-block;
						padding: 15px 25px;
						font-size: 20px;
						cursor: pointer;
						text-align: center;
						text-decoration: none;
						outline: none;
						color: white;
						background-color: red;
						border: none;
						border-radius: 15px;
						box-shadow: 0 9px #999;
						}

						.button:hover {background-color: #3e8e41}

						.button:active {
						background-color: #3e8e41;
						box-shadow: 0 5px #666;
						transform: translateY(4px);
						}
</style>

<style>
						.button2 {
						display: inline-block;
						padding: 15px 25px;
						font-size: 20px;
						cursor: pointer;
						text-align: center;
						text-decoration: none;
						outline: none;
						color: red;
						background-color: white;
						border-radius: 10px;
						border-color: red;
						}

						.button:hover {background-color: #3e8e41}

						.button:active {
						background-color: #3e8e41;
						transform: translateY(4px);
						border: 2px red;
						}
</style>

	<style>

		
					/* Three image containers (use 25% for four, and 50% for two, etc) */
					.column {
					float: left;
					width: 40%;
					padding: 50px;
					}

					/* Clear floats after image containers */
					.row::after {
					content: "";
					clear: both;
					display: table;
					}


	</style>

<style>
    /* Apply css properties to h1 element */
		h1 {
			text-align: center;
		}

		/* Create a container using CSS properties */
		.row.container {
			top: 85%;
			left: 20%;
			position: absolute;
			text-align: center;
			transform: translate(-50%, -50%);
		}

		/* Apply CSS properties to ui-widgets class */
		.ui-widgets {
			position: relative;
			display: inline-block;
			width: 7rem;
			height: 7rem;
			border-radius: 10rem;
			margin: 1rem;
			border: 0.15rem solid palegreen;
			box-shadow: inset 0 0 7px grey;
			border-left-color: red;
			border-top-color: red;
			border-right-color: red;
			border-bottom-color: white;
			text-align: center;
			box-sizing: border-box;
		}
      

		
		/* Apply css properties to the second
			child of ui-widgets class */
			.ui-widgets:nth-child(2) {
			border-top-color: red;
			border-right-color: white;
			border-left-color: white;
			border-bottom-color: white;
		}

		/* Apply css properties to the second
			child of ui-widgets class */
			.ui-widgets:nth-child(3) {
			border-top-color: red;
			border-right-color: white;
			border-left-color: white;
			border-bottom-color: white;
		}
		.ui-widgets:nth-child(4) {
			border-top-color: red;
			border-right-color: white;
			border-left-color: red;
			border-bottom-color: white;
			
		}

		/* Apply css properties to ui-widgets class
			and ui-values class*/
		.ui-widgets .ui-values {
			top: 20px;
			position: absolute;
			left: 10px;
			right: 0;
			font-weight: 700;
			font-size: 1.85rem;
			color: green;

		}
		

		/* Apply css properties to ui-widgets
			class and ui-labels class*/
            .ui-widgets .ui-labels {

                    left: 0;
                    bottom: 15px;
                    text-shadow: 0 0 4px grey;
                    color: green;
                    position: absolute;
                    width: 100%;
                    font-size: 15px;
                    }
               /*css to give different color to the each progress bar 2 lables and values */

			   .ui-widgets:nth-child(2).ui-widgets .ui-labels{

					left: 0;
					bottom: 15px;
					text-shadow: 0 0 4px grey;
					color: navy;
					position: absolute;
					width: 100%;
					font-size: 15px;
					}
					.ui-widgets:nth-child(2).ui-widgets .ui-values {
							top: 20px;
							position: absolute;
							left: 10px;
							right: 0;
							font-weight: 700;
							font-size: 1.85rem;
							color: navy;

						}

			   /*css to give different color to the each progress bar 3 lables and values*/
			   
			   .ui-widgets:nth-child(3).ui-widgets .ui-labels{

					left: 0;
					bottom: 15px;
					text-shadow: 0 0 4px grey;
					color: fuchsia;
					position: absolute;
					width: 100%;
					font-size: 15px;
					}
					.ui-widgets:nth-child(3).ui-widgets .ui-values {
							top: 20px;
							position: absolute;
							left: 10px;
							right: 0;
							font-weight: 700;
							font-size: 1.85rem;
							color: fuchsia;

						}
					/*css to give different color to the each progress bar 4 lables and values*/
					.ui-widgets:nth-child(4).ui-widgets .ui-labels{

					left: 0;
                    bottom: 15px;
                    text-shadow: 0 0 4px grey;
                    color: purple;
                    position: absolute;
                    width: 100%;
                    font-size: 15px;
					}
					.ui-widgets:nth-child(4).ui-widgets .ui-values {
							top: 20px;
							position: absolute;
							left: 10px;
							right: 0;
							font-weight: 700;
							font-size: 1.85rem;
							color: purple;

		                }

					
					


		/* Apply css properties to the calendar icon */
		.column i{
				font-size: 10px;
				color: grey;
			}
    </style>
</head>

<body>


   
<div class="row">
  <div class="column">
    <img src="\assets\css\photography1.jpeg" alt="Snow" style="width:100%">
	<h2><b>Black And White Compositions</b></h2>

	<i class="fa-solid fa-calendar-check"> MAR 30, 2018</i>
	<i class="fa-solid fa-calendar-xmark"> May 25. 2018</i>

	<div class="container">

		<!-- Creating a ui-widgets classes that
			store other useful classes like
			ui-values and ui-labels -->
		
        <div class="ui-widgets">
			<div class="ui-values">46</div>
			<div class="ui-labels">Days</div>
		</div>

		<div class="ui-widgets">
			<div class="ui-values">7</div>
			<div class="ui-labels">Hours</div>
		</div>

        <div class="ui-widgets">
			<div class="ui-values">5</div>
			<div class="ui-labels">Minutes</div>
		</div>

        <div class="ui-widgets">
			<div class="ui-values">44</div>
			<div class="ui-labels">Seconds</div>
		</div>
		
	</div>
       <p>In photography there is a reality so subtle that it becomes more real than reality</p>
       

	   <button class="button">Read More</button>
		<button class="button2">Join Now free</button>

  </div>
  
  <div class="column">
    <img src="\assets\css\photography2.jpeg" alt="Forest" style="width:100%">
	<h2><b>Black And White Compositions</b></h2>

	<i class="fa-solid fa-calendar-check"> MAR 30,2018</i>
	<i class="fa-solid fa-calendar-xmark"> May 25. 2018</i>

	<div class="container">

		<!-- Creating a ui-widgets classes that
			store other useful classes like
			ui-values and ui-labels -->
		
        <div class="ui-widgets">
			<div class="ui-values">46</div>
			<div class="ui-labels">Days</div>
		</div>

		<div class="ui-widgets">
			<div class="ui-values">7</div>
			<div class="ui-labels">Hours</div>
		</div>

        <div class="ui-widgets">
			<div class="ui-values">5</div>
			<div class="ui-labels">Minutes</div>
		</div>

        <div class="ui-widgets">
			<div class="ui-values">44</div>
			<div class="ui-labels">Seconds</div>
		</div>

		<p>In photography there is a reality so subtle that it becomes more real than reality</p>
		
		<button class="button">Read More</button>
		<button class="button2">Join Now free</button>
		
	</div>

</div>
 

	<!-- Add heading of the page -->
	

	<!-- Creating of a container class that
		store other useful classes -->
	
</body>

</html>
