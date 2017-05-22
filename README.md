# osTicket Fetch Note plugin
osTicket plugin to fetch additional note content on ticket creation.

## Installation
Place the content of this plugin in `include/plugins/osticket-fetch-note` and install via osTicket Admin Control Panel.

## Webhook
The webhook is pinged with the following JSON payload, and can return content for a note which is added to the ticket.

```
{
  "email": "<TICKET-AUTHOR-EMAIL>"
}
```

## Thanks
Code heavily borrowed from https://github.com/thammanna/osticket-slack ;)
