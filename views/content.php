<!-- Card -->
<?php
if($result->rowCount() > 0){
    while($res = $result->fetch(PDO::FETCH_BOTH)){
 echo '<div class="card" style="width: 400px;margin-left: 30%; margin-top: 50px;">';

  echo '<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">';

  echo '<div class="card-body">';

    
    echo '<h4 class="card-title">';
    echo '<a>'; echo $res['caption']; echo '</a>';echo'</h4>';
    
    echo '<p class="card-text">';echo $res['history'];echo '</p>';
    
    echo '<a href="#" class="btn btn-primary">';echo "Button";echo '</a>';

  echo '</div>';

echo '</div>';
    }}
  ?>


