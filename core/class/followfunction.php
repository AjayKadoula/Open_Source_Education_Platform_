<?php
    $result = mysqli_query($link, $query);

	if (mysqli_num_rows($result) == 0) {

            echo "There are no tweets to display.";

        } else {

            while ($row = mysqli_fetch_assoc($result)) {

                $userQuery = "SELECT * FROM users WHERE id = ".mysqli_real_escape_string($link, $row['user_id'])." LIMIT 1";
                $userQueryResult = mysqli_query($link, $userQuery);
                $user = mysqli_fetch_assoc($userQueryResult);

                echo "<div class='tweet'><p><a href='?page=publicprofiles&userid=".$user['id']."'>".$user['email']."</a> <span class='time'>".time_since(time() - strtotime($row['datetime']))." ago</span>:</p>";

                echo "<p>".$row['tweet']."</p>";

                echo "<p><a class='toggleFollow' data-userId='".$row['userid']."'>";

                $isFollowingQuery = "SELECT * FROM isFollowing WHERE follower = ". mysqli_real_escape_string($link, $_SESSION['user_id'])." AND isFollowing = ". mysqli_real_escape_string($link, $row['user_id'])." LIMIT 1";
            $isFollowingQueryResult = mysqli_query($link, $isFollowingQuery);
            if (mysqli_num_rows($isFollowingQueryResult) > 0) {

                echo "Unfollow";

            } else {

                echo "Follow";

            }


                echo "</a></p></div>";

            }

        }
				?>
