<?php 
/* common uses helper for CI */
$this->load->helper(array('form', 'url', 'security'));

/* All CI helper lists 
   1. Array
   2. captcha
   3. cookie
   
*/

/* ------- 1. 
   Array helper functions [A] element [B] elements  [C] random_element [D] 
 */
$this->load->helper('array');

/* ------  2. 
   Captcha helper functions [A] create_captcha 
*/
$this->load->helper('captcha');

/* ------  3. 
   Cookie helper functions [A] set_cookie [B] get_cookie  [C] delete_cookie
*/
$this->load->helper('cookie');

/* ------  4. 
   Date helper functions [A] now [B] mdate  [C] standard_date [D] local_to_gmt [E] gmt_to_local [F] mysql_to_unix [G] unix_to_human
   [H] human_to_unix [I] nice_date [J] timespan [K] days_in_month [L] date_range [M] timezones [N] timezone_menu
*/
$this->load->helper('date');

/* ------  5. 
   directory helper functions [A] directory_map
*/
$this->load->helper('directory');

/* ------  6. 
   download helper functions [A] force_download
*/
$this->load->helper('download');

/* ------  7. 
   email helper functions [A] valid_email [B] send_email
*/
$this->load->helper('email');

/* ------  8. 
   file helper functions [A] valid_email [B] send_email
*/
$this->load->helper('file');
?>
