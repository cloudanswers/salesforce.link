## salesforce.link

Right now the primary reason for this site is a way to bounce a user from a salesforce oauth flow back into salesforce again.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://dashboard.heroku.com/new?button-url=https%3A%2F%2Fgithub.com%2Fcloudanswers%2Fsalesforce.link&template=https%3A%2F%2Fgithub.com%2Fcloudanswers%2Fsalesforce.link)


### What is this?

If you ever tried to setup an oauth flow in salesforce for a managed package, you know you can't do it without relying on an external service to bounce the user back to you.

If you try to package a named credential OR if you try to tell a user to setup a named credential for your managed app, then you also have to tell them to make a ConnectedApp and an AuthProvider and copy/paste values between all three.  Not an ideal user experience for people installing your app.

Even if you use just oauth, you can't send the use back to this salesforce org because each company has a different domain, and your connected app can't use wildcards for the callback domain.

Here's how it works:

1.  You set the callback to https://salesforce.link/bounce
2.  In your oauth start url, send the `state` value as the url of the page you want them to come back to

Now, when the user completes the flow, they are sent to `salesforce.link/bounce` which reads the `state` parameter to redirect them to your site.  Now your user will bounce back to the installed salesforce org and let you complete the flow without having to do anything more like deploying heroku servers to handle this (we've done it too many times).

The source for this is on github at https://github.com/cloudanswers/salesforce.link so you can fork and host it yourself if you wish, or just take the page and put it on your domain.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://dashboard.heroku.com/new?button-url=https%3A%2F%2Fgithub.com%2Fcloudanswers%2Fsalesforce.link&template=https%3A%2F%2Fgithub.com%2Fcloudanswers%2Fsalesforce.link)

### Is this safe?

It's safe because the "code" value that is present in the redirect url doesn't give you access to anything without the client_id and client_secret (which are in your server).  However, if you have any concerns, just move the single page in the "bounce" folder to your own server.  We included a deploy button for heroku so you can deploy it for free with one click and have total control.  Otherwise, we'll keep this service up for you if you ever need to use the bouncer :)

Also, since you can deploy it to Heroku, and Heroku is owned by salesforce, then this is basically like keeping people on salesforce and their session doesn't even leave salesforce infrastructure.

### Who are you?

"Salesforce.link" is not in any way officially supported or associated with the company Salesforce.  We are a small development shop that primarily works on salesforce apps (our own and on contract).  We are not salesforce, the salesforce.link domain just seemed like a logical name for this.

Questions?  Come visit us:

www.cloudanswers.com
