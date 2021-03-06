<?php

Import::php("OpenM-Services.api.OpenM_Service");

/**
 *
 * @package OpenM 
 * @subpackage OpenM\OpenM-Mail\api
 * @copyright (c) 2013, www.open-miage.org
 * @license http://www.apache.org/licenses/LICENSE-2.0 Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * @link http://www.open-miage.org
 * @author Gaël Saunier
 */
interface OpenM_Mail extends OpenM_Service {
    
    const ATTACHMENTS_FORMAT = "encode64";
    const VERSION = "1.0 alpha";

    public function mail($to, $subject, $message, $from=null, $cc=null, $bcc=null, $attachments=null);
}
?>