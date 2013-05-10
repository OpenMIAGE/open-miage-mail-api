<?php

/**
 * Description of OpenM_MailTool
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
class OpenM_MailTool {

    public static function isEMailValid($email) {
        if (!String::isString($email))
            throw new InvalidArgumentException("email must be a string");

        if (filter_var($email, FILTER_VALIDATE_EMAIL))
            return true;
        else
            return false;
    }

    public static function formatEMail($name, $email) {
        if (!OpenM_MailTool::isEMailValid($email))
            throw new InvalidArgumentException("email not correctly formated");
        return "$name <$email>";
    }

    public static function formatEMails(HashtableString $namesWithMails) {
        $e = $namesWithMails->keys();
        $return = "";
        while ($e->hasNext()) {
            $name = $e->next();
            $return .= self::formatEMail($name, $namesWithMails->get($name)) . ", ";
        }
        return substr($return, 0, -2);
    }

}

?>