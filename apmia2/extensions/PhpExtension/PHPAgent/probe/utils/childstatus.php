<?php

/*
* Copyright (c) 2014 CA. All rights reserved.
*
* This software and all information contained therein is confidential
* and proprietary and  shall not be duplicated, used, disclosed or 
* disseminated in any way except as authorized * by the applicable 
* license agreement, without the express written permission of CA. All
* authorized reproductions must be marked with this language.
*
* EXCEPT AS SET FORTH IN THE APPLICABLE LICENSE AGREEMENT, TO THE EXTENT
* PERMITTED BY APPLICABLE LAW, CA PROVIDES THIS SOFTWARE WITHOUT WARRANTY
* OF ANY KIND, INCLUDING WITHOUT LIMITATION, ANY IMPLIED WARRANTIES OF
* MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. IN NO EVENT WILL CA BE
* LIABLE TO THE END USER OR ANY THIRD PARTY FOR ANY LOSS OR DAMAGE, DIRECT OR
* INDIRECT, FROM THE USE OF THIS SOFTWARE, INCLUDING WITHOUT LIMITATION, LOST
* PROFITS, BUSINESS INTERRUPTION, GOODWILL, OR LOST DATA, EVEN IF CA IS
* EXPRESSLY ADVISED OF SUCH LOSS OR DAMAGE.
*/

header('Content-type: application/json');

$childpid    = wily_php_agent_child_pid();
$blsize      = wily_php_agent_blacklist_size();
$blmemlimit  = wily_php_agent_blacklist_memory_limit();
$blfreemem   = wily_get_free_blacklist_memory();
$droppedmsgs = wily_php_agent_dropped_count();



echo "\"childstatus\": { \n";
echo "    \"pid\":              $childpid,\n";
echo "    \"blacklistsize\":    $blsize,\n";
echo "    \"blacklistmemlim\":  $blmemlimit,\n";
echo "    \"blacklistfreemem\": $blfreemem,\n";
echo "    \"droppedmsgs\":      $droppedmsgs\n";
echo "}\n";

unset($childpid);
unset($blsize);
unset($blmemlimit);
unset($blfreemem);
unset($droppedmsgs);

?>
