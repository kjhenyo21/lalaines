<?php

function smarty_function_captcha($params, &$smarty)
{
?>
<span class="error"><?=$params['errors']['captcha'] ?></span>
<label for="captcha">security image <span class="required"><sup>*</sup></span></label>
<img name="captcha_image" src="/captcha/index/<?=time()?>/" alt="" /><br />
can't see it?  <a onClick="document.captcha_image.src='/captcha/index/' + (new Date()).getTime() + '/'">reload image</a>
<input <? if ($params['errors']['captcha']) { ?>class="error"<? } ?> type="text" name="captcha_phrase" />
<?
}


?>
