<?php
  $v = $data['ajax'];
  if(empty($v['post_id'])) {
	  echo json_encode(array('err'=>false,'has_more'=>false,'html'=>''));
	  exit;
  }
  $html = '<div class="post" id="post_'.$v['post_id'].'">
      <img class="author_photo float_left" src="/images/no_photo.png" alt="'.$v['owner_name'].'">
      <div class="post_wrap">
        <div class="post_info">
          <a class="author_name">'.$v['owner_name'].'</a>
        </div>
        <div class="post_text">'.$v['text'].'</div>
        <div class="post_date">'.$v['date'].'</div>
      </div>
    </div>';
  echo json_encode(array('err'=>false,'html'=>$html));
  exit;
?>