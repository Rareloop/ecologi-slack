# Share your Ecologi impact in Slack

At [Rareloop](https://www.rareloop) we use [Ecologi](https://www.ecologi.com) to help us offset our carbon footprint for our business and for our employees. We wanted to have a regular reminder of our impact and as Ecologi has an API we decided to write a quick Slack integration.

We share this here incase others would also benefit from it. The script is simple and could be better, but is practical and enabled us to get up and running quickly.

# Usage

1. Download the `ecologi-to-slack.php` script
2. Register for an [Incoming Webhook](https://api.slack.com/messaging/webhooks) for Slack
3. Update the `$username` and `$slackWebhookUrl` variables in the script
4. Run `php ecologi-to-slack.php`

To make this truely useful you should copy the script to a server and setup a cron job to periodically run it for you.

# Giving back
If you find this script useful please consider either:

1. 🌱🌱 [Contributing some trees to the Rareloop forest](https://ecologi.com/rareloop) 🌱🌱
2. [Setting up an Ecologi account for you or your business](https://ecologi.com/rareloop?r=60618d1bcdd7a4001d7b86f2)

<a href="https://ecologi.com/rareloop" target="_blank" rel="noopener noreferrer" title="View our Ecologi profile" style="width:200px;display:inline-block;margin-top:50px">
  <img alt="We offset our carbon footprint via Ecologi" src="https://api.ecologi.com/badges/cpw/60618d1bcdd7a4001d7b86f2?black=true&landscape=true" style="width:200px;" />
</a>