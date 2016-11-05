<?php


var_dump($data);
  $v = $data['ajax'];
  if(empty($v['post_id'])) {
	  echo json_encode(array('err'=>false,'has_more'=>false,'html'=>''));
	  exit;
  }

  $html = '<div class="user_block" id="msg_'.$v['post_id'].'">
  <img class="user_photo float_left" src="'.$v['small_photo'].'" alt="'.$v['owner_name'].'">
  <div class="user_block_wrap">
    <a href="/id'.$v['post_id'].'">
      '.$v['owner_name'].'
    </a>
    <div class="forum_msg_text user_block_body">
      '.$v['text'].'
    </div>

    <div class="forum_msg_info">
      <span class="forum_date">
        '.$v['date'].'
      </span>
      <span class="forum_divider">·</span>
      <span class="forum_author_link">Ответить</span>
    </div> 
  </div>
</div>';
  echo json_encode(array('err'=>false,'html'=>$html));
  exit;
?>