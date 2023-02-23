**SuiteCRM plugin for google form integration with google sheet**

## Google Form Structure

**This plugin allows default leads table structure**
Your Google Form structure should be,

1. First Name
2. Last Name
3. Date of Birth
4. Email Address
5. Mobile Number
6. Lead Source

You should be following this structure.
you can add more input fields, below these fields in your google form.
Only The above field details will be saved in the leads table.
If you want to save all the fields you need to customize the plugin.

Once the Form structure is completed, you click the response section in Google Forms.
You should Need to Link the new or existing Google sheet with your Google Form

**NOTE**
Click the share option and change the "General Access" to Anyone with the Link. It will connect the data from Google sheet to SuiteCRM.

## Get the plugin

Download the plugin from GitHub.
Link-

## Installation

1. Open the SuiteCRM Admin page and go to Admin Tools -> Module Loader
2. Choose the downloaded plugin.zip file and upload. the plugin will successfully upload in SuiteCRM
3. Click the Install button.
5. Commit the plugin in your SuiteCRM

## Uninstall

1. Open the SuiteCRM Admin page and go to Admin Tools -> Module Loader
2. Find the plugin module and click the Uninstall button
3. Your plugin will successfully uninstall from SuiteCRM
4. If you want to delete the plugin files from SuiteCRM simply click the delete button plugin package will deleting from SuiteCRM.

## Connect with your google sheet

1. Open the installed plugin in your SuiteCRM
2. Click create or create GoogleForm.
3. Enter the Google Sheet ID and Name.
4. Click the **Sync** button.
5. You can see the submitted sheet details in your GoogleForm plugin list view.

Google Sheet ID: You can get Google sheet Id from Google sheet URL.
Google Sheet Name: You can get Google sheet Name from the Google sheet Bottom of the left corner.

Now, you can see the leads, the all the data transferred from the google sheet to the leads module.

## NOTES
You should create one cron job for this link.
Link - example.com/index.php?entryPoint=GoogleFormEntryPoint

## Cron job

1. Once you will create a cron job, it will be verifying your submitted google sheet details and automatically get details from your google sheet from the leads table.

2. This corn job only allows new entries based on user mail. it's not allowing duplicate values.

--------