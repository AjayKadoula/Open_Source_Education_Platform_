<?php
session_start();
if(isset($_SESSION["user_name"])){
include './bar\navigation_bar.php';
?>

<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> profile</title>
<link rel="stylesheet" href="css\notes.css" type="text/css">
    <script src="jquery\notes.js" type="text/javascript"></script>
<style>
$bg: darken(white, 10%);
$shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
$shadow1: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);

*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}

img{
	max-width:100%;
}

body{
	background-color:$bg;
	display:flex;
	height:100vh;
	width:100vw;
	font-family:'Montserrat';
}

.container{
	width:1600px;
	max-width:100%;
	margin:auto;
}

.display{
	display:flex;
	justify-content:space-around;
	flex-wrap:wrap;
	.display-item{
		flex-grow:1;
		flex-basis:1px;
		display:flex;
		justify-content:space-around;
		padding:15px;
		max-width:100%;
	}
}

.card{
	width:480px;
	max-width:100%;
	min-height:620px;
	overflow:hidden;
	border-radius:4px;
	box-shadow:$shadow;
	background-color:white;
	position:relative;
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	flex-direction:column;
	.card-top{
		-webkit-flex-basis:155px;
		flex-basis:155px;
		flex-shrink:1;
		background-color:rgba(0,0,0,.2);
		background-position:center;
		background-size:cover;
	}
	.card-profile{
		flex-basis:75px;
		flex-shrink:1;
		.profile-image{
			overflow:hidden;
			border-radius:100%;
			position:absolute;
			left:calc(50% - 75px);
			top:calc(25% - 75px);
			border:4px solid white;
			width:150px;
			height:150px;
			background-size:cover;
			background-position:center;
		}
	}
	.card-info{
		flex-basis:56,66665%;
		flex-grow:1;
		padding:0 15px;
		text-align:center;
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		flex-direction:column;
		.info-title{
			padding-bottom:15px;
			h3{
				font-weight:400;
			}
		}
		.info-follow{
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			padding:15px 0;
			border-bottom:1px solid rgba(0,0,0,.3);
			font-size:1.2em;
			>div{
				flex-grow:1;
				flex-basis:1px;
				min-height:20px;
			}
		}
		.info-bio{
			padding:15px 0;
		}
		.info-social{
			flex-grow:1;
			padding:15px 0;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			flex-direction:column;
			justify-content:space-around;
			.social-icons{
				display: -webkit-box;
				display: -moz-box;
				display: -ms-flexbox;
				display: -webkit-flex;
				display: flex;
				justify-content:space-around;
				.sm{
					flex-basis:40px;
					height:40px;
					transition:all .3s ease-in-out;
					display: -webkit-box;
					display: -moz-box;
					display: -ms-flexbox;
					display: -webkit-flex;
					display: flex;
					justify-content:space-around;
					flex-direction:column;
					text-align:center;
					background-size:100% 200%;
					background-position-y: 10%;
					font-size:2em;
					color:rgba(0,0,0,.8);
					cursor:pointer;
					&:hover{
						background-position-y: 100%;
						//color:rgba(255,255,255,.8);
						color:white;
						border-radius:4px;
					}
				}
				.sm.twitter{
					background-image: linear-gradient(transparent 50%,dodgerblue 50%)
				}
				.sm.facebook{
					background-image: linear-gradient(transparent 50%,royalblue 50%)
				}
				.sm.pint{
					background-image: linear-gradient(transparent 50%,#BD081B 50%)
				}
				.sm.px500{
					background-image: linear-gradient(transparent 50%,rgba(0,0,0,.8) 50%)
				}
			}
		}
	}
}

.card.seamus{
	.card-top{
		background-image: url(https://images.unsplash.com/photo-1421789665209-c9b2a435e3dc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=b0aa3fbba9c018e93499effa49dd8e83);
	}
	.profile-image{
		background-image: url(https://images.unsplash.com/photo-1507120878965-54b2d3939100?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=57f3676a7820564424855d5e5c6b09e7);
	}
}

.card.huxi{
	.card-top{
		background-image: url(https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=941970a7808025335c9f2848c488ba84);
	}
	.profile-image{
		background-image: url(https://images.unsplash.com/photo-1495147334217-fcb3445babd5?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=45215c86ec473819613890a3f937c80b);
	}
}

.card.anabelle{
	.card-top{
		background-image: url(https://images.unsplash.com/photo-1496096265110-f83ad7f96608?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=473657e1e7f4863f6e8a3348176a22dc);
	}
	.profile-image{
		background-image: url(https://images.unsplash.com/photo-1498529605908-f357a9af7bf5?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=4a38e7f0743e48e6ae32b23d36aa6ff7);
	}
}
</style>
</head>
<body>
<div class="container">
	<div class="display">
		<div class="display-item">
			<div class="card seamus">
				<div class="card-top"></div>
				<div class="card-profile">
					<div class="profile-image">
					</div>
				</div>
				<div class="card-info">
					<div class="info-title">
						<h2>Seamus McPhearson</h2>
						<h3>Tinder Trawler</h3>
					</div>
					<div class="info-follow">
						<div class="follow-followers">
							<span>173</span><br />
							<span>Followers</span>
						</div>
						<div class="follow-following">
							<span>17</span><br />
							<span>Following</span>
						</div>
						<div class="follow-likes">
							<span>1054</span><br />
							<span>Likes</span>
						</div>
					</div>
					<div class="info-bio">
						Proin non rhoncus sapien. Cras tempus odio elit, eget hendrerit neque sollicitudin at. Suspendisse feugiat nunc quis venenatis volutpat. Cras finibus sit amet velit vel dignissim. Curabitur vehicula porttitor leo a tincidunt.
					</div>
					<div class="info-social">
						<div class="social-icons">
							<div class="sm twitter">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</div>
							<div class="sm facebook">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</div>
							<div class="sm pint">
								<i class="fa fa-pinterest" aria-hidden="true"></i>
							</div>
							<div class="sm px500">
								<i class="fa fa-500px" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="display-item">
			<div class="card huxi">
				<div class="card-top"></div>
				<div class="card-profile">
					<div class="profile-image">
					</div>
				</div>
				<div class="card-info">
					<div class="info-title">
						<h2>Huxi Anderson</h2>
						<h3>Communications Architect</h3>
					</div>
					<div class="info-follow">
						<div class="follow-followers">
							<span>274</span><br />
							<span>Followers</span>
						</div>
						<div class="follow-following">
							<span>56</span><br />
							<span>Following</span>
						</div>
						<div class="follow-likes">
							<span>7532</span><br />
							<span>Likes</span>
						</div>
					</div>
					<div class="info-bio">
						Proin non rhoncus sapien. Cras tempus odio elit, eget hendrerit neque sollicitudin at. Suspendisse feugiat nunc quis venenatis volutpat. Cras finibus sit amet velit vel dignissim. Curabitur vehicula porttitor leo a tincidunt.
					</div>
					<div class="info-social">
						<div class="social-icons">
							<div class="sm twitter">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</div>
							<div class="sm facebook">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</div>
							<div class="sm pint">
								<i class="fa fa-pinterest" aria-hidden="true"></i>
							</div>
							<div class="sm px500">
								<i class="fa fa-500px" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="display-item">
			<div class="card anabelle">
				<div class="card-top"></div>
				<div class="card-profile">
					<div class="profile-image">
					</div>
				</div>
				<div class="card-info">
					<div class="info-title">
						<h2>Anabelle Saunders</h2>
						<h3>Paradigm Coordinator</h3>
					</div>
					<div class="info-follow">
						<div class="follow-followers">
							<span>72</span><br />
							<span>Followers</span>
						</div>
						<div class="follow-following">
							<span>12</span><br />
							<span>Following</span>
						</div>
						<div class="follow-likes">
							<span>958</span><br />
							<span>Likes</span>
						</div>
					</div>
					<div class="info-bio">
						Proin non rhoncus sapien. Cras tempus odio elit, eget hendrerit neque sollicitudin at. Suspendisse feugiat nunc quis venenatis volutpat. Cras finibus sit amet velit vel dignissim. Curabitur vehicula porttitor leo a tincidunt.
					</div>
					<div class="info-social">
						<div class="social-icons">
							<div class="sm twitter">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</div>
							<div class="sm facebook">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</div>
							<div class="sm pint">
								<i class="fa fa-pinterest" aria-hidden="true"></i>
							</div>
							<div class="sm px500">
								<i class="fa fa-500px" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>



<?php

}else { header("Location:index.php");
}
?>
