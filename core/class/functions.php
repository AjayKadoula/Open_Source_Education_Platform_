
<?php

	class  Main{

		//fetching posts from database
		public function posts(){
			global $pdo;
			$query = $pdo->prepare("SELECT * FROM `posts`,`users` WHERE user_name = user_id_p ORDER BY `post_id` DESC limit 5");
			$query->execute();
			return $query->fetchAll();
		}

		//fetch user data by user id
		public function user_data($user_id){
			global $pdo;
			$query = $pdo->prepare('SELECT * FROM users WHERE user_id = ?');
			$query->bindvalue(1,$user_id);
			$query->execute();

			return $query->fetch();
		}
		//timeAgo Function
		public function timeAgo($time_ago){

			$time_ago = strtotime($time_ago);
			$cur_time   = time();
			$time_elapsed   = $cur_time - $time_ago;
			$seconds    = $time_elapsed ;
			$minutes    = round($time_elapsed / 60 );
			$hours      = round($time_elapsed / 3600);
			$days       = round($time_elapsed / 86400 );
			$weeks      = round($time_elapsed / 604800);
			$months     = round($time_elapsed / 2600640 );
			$years      = round($time_elapsed / 31207680 );
			// Seconds
			if($seconds <= 60){
			    return "just now";
			}
			//Minutes
			else if($minutes <=60){
			    if($minutes==1){
			        return "one minute ago";
			    }
			    else{
			        return "$minutes minutes ago";
			    }
			}
			//Hours
			else if($hours <=24){
			    if($hours==1){
			        return "an hour ago";
			    }else{
			        return "$hours hrs ago";
			    }
			}
			//Days
			else if($days <= 7){
			    if($days==1){
			        return "yesterday";
			    }else{
			        return "$days days ago";
			    }
			}
			//Weeks
			else if($weeks <= 4.3){
			    if($weeks==1){
			        return "a week ago";
			    }else{
			        return "$weeks weeks ago";
			    }
			}
			//Months
			else if($months <=12){
			    if($months==1){
			        return "a month ago";
			    }else{
			        return "$months months ago";
			    }
			}
			//Years
			else{
			    if($years==1){
			        return "one year ago";
			    }else{
			        return "$years years ago";
			    }
			}
		}
		public function adposts(){
			global $pdo;
			$query = $pdo->prepare("SELECT * FROM `post_ad` ORDER BY `id` DESC");
			$query->execute();
			return $query->fetchAll();
		}
		public function bachelor($row1){
			global $pdo;
			$query = $pdo->prepare("SELECT * FROM `institutes` where course='$row1' ORDER BY `name` DESC ");
			$query->execute();
			return $query->fetchAll();
		}
		public function notespdf($row1){
			global $pdo;
			$query = $pdo->prepare("SELECT * FROM `notespdf` WHERE course = '$row1' ORDER BY `id` DESC ");
			$query->execute();
			return $query->fetchAll();
		}
		public function followerlist(){
			global $pdo;
			$query = $pdo->prepare("SELECT * FROM `users` ORDER BY `user_id` DESC LIMIT 3" );
			$query->execute();
			return $query->fetchAll();
		}
    public function followeralready($id){
      global $pdo;
      $query = $pdo->prepare('SELECT * FROM `following` WHERE user_id = ?');
      $query->bindvalue(1,$id);
      $query->execute();
      return $query->fetchAll();
    }
		public function userprofile($username1){
			global $pdo;
			$query = $pdo->prepare("SELECT * FROM `users` where user_name='$username1' ");
			$query->execute();
			return $query->fetchAll();
		}
			public function userposts($username1){
			global $pdo;
			$query = $pdo->prepare("SELECT * FROM `posts`, `users` WHERE  user_name=user_id_p AND user_id_p = '$username1'  ORDER BY `post_id` DESC limit 5");
			$query->execute();
			return $query->fetchAll();
		}


	}
?>
