<?php
if (!defined("sugarEntry") || !sugarEntry) {
    die("Not a Valid Entry Point!");
}

require __DIR__ . "/vendor/autoload.php";

class FormData
{
    public function getValueFromSheet($bean, $event, $arguments)
    {
        $client = new \Google_Client();
        $client->setApplicationName("My First Project");
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType("offline");
        $client->setAuthConfig(__DIR__ . "/credentials.json");
        $service = new Google_Service_Sheets($client);
        $spreadsheetId = $bean->g_sheet_id;
        $getRange = $bean->g_sheet_name;
        $response = $service->spreadsheets_values->get(
            $spreadsheetId,
            $getRange
        );
        $values = $response->getValues();

        unset($values[0]);

        foreach ($values as $value) {
            $date = new DateTime();
            $dateEntered = $date->format("Y-m-d H:i:s");
            $firstName = $value[1];
            $lastName = $value[2];
            $dateOfBirth = date("Y-m-d", strtotime($value[3]));
            $emailAddress = $value[4];
            $emailAddressCaps = strtoupper($emailAddress);
            $mobileNumber = $value[5];
            $leadSourse = $value[6];

            global $db;

            $idLead = create_guid();
            $idEmail = create_guid();
            $idBean = create_guid();

            $checkEmail = "SELECT email_address_id FROM email_addr_bean_rel WHERE
                email_address_id = (SELECT id  FROM email_addresses WHERE email_address = '$emailAddress') AND
                deleted = 0 AND bean_module = 'Leads'";

            $result = $db->query($checkEmail, true);

            if ($result->num_rows === 0) {
                $queryLead = "INSERT INTO leads (`id`,`date_entered`, `date_modified`, `first_name`, `last_name`,
                    `phone_mobile`, `lead_source`, `birthdate`)
                    VALUES ('$idLead', '$dateEntered', '$dateEntered', '$firstName', '$lastName',
                        '$mobileNumber', '$leadSourse', '$dateOfBirth')";
                $db->query($queryLead, true);

                $queryEmail = "INSERT INTO email_addresses (`id`,`email_address`, `email_address_caps`,
                    `date_created`, `date_modified`)
                    VALUES ('$idEmail', '$emailAddress', '$emailAddressCaps', '$dateEntered', '$dateEntered')";
                $db->query($queryEmail, true);

                $querybean = "INSERT INTO `email_addr_bean_rel`(`id`, `email_address_id`, `bean_id`,
                    `bean_module`, `primary_address`, `date_created`, `date_modified`)
                    VALUES ('$idBean','$idEmail', '$idLead', 'Leads', '1', '$dateEntered', '$dateEntered')";
                $db->query($querybean, true);
            }
        }
    }
}
