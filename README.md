# Instagram-wp-api

## Setup
Follow the directions here to create a Basic Display App for your Wordpress site:
https://developers.facebook.com/docs/instagram-basic-display-api/getting-started

### Change the following settings under Products > Instagram > Basic Display:

Valid OAuth Redirect URIs
```https://<youwordpresssiteurl.com>/wp-admin/```

Deauthorize:
```https://<youwordpresssiteurl.com>/```

Data Deletion Request URL:
```https://<youwordpresssiteurl.com>/```

User Token Generator:
Add the Instagram account here you will be pulling content from. You can pull content from one account at a time and accounts you own/have the credentials for.

**You do not need to perform an App Review.**

### The following definitions need to be added to your wp-config.php file:
```php
/**
 * Instagram API Creds
 */
define('INSTAGRAM_CLIENT_ID', '<your instagram app id>');
define('INSTAGRAM_CLIENT_SECRET', '<your instagram app secret>');
```

### Upload the plugin to your WordPress site and activate it
After activating the plugin you will see a message in the Wordpress Admin asking you to authenticate the Instagram account you added as a test user in the previous step.

### API Endpoints
Currently there is only one end point

```/instagramapi/v1/instafeed/<count>```

Eg: To fetch 10 instagram posts ```YOUR DOMAIN/wp-json/instagramapi/v1/instafeed/10```

### Attribution
https://github.com/msigley/WP-Instagram-API